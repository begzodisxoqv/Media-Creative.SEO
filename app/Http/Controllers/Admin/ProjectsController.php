<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class ProjectsController extends Controller
{
    public function index()
    {
        // $tools = Tools::all();
        $projects = Projects::all();
        return view('admin.projects.index',compact('projects'));
    }


    public function create()
    {
        $projects = Projects::all();
        return view('admin.projects.create',compact('projects'));
    }


    public function store(Request $request)
    {
        $valid = $request->validate([
            'title_uz' => ['nullable', 'string'],
            'title_ru' => ['nullable', 'string'],
            'text_uz'  => ['nullable', 'string'],
            'text_ru'  => ['nullable', 'string'],
            
        ]);
            if ($valid) {
                $projects = Projects::create($request->all());
                if ($request->image) {
                    $this->storeImage($projects);
                }
                return redirect()->route('projects.index');
            }
    }

        
    public function edit($id)
    {
        $projects = Projects::find($id);
        return view('admin.projects.edit', compact('projects'));
    }



    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'title_uz' => ['nullable', 'string'],
            'title_ru' => ['nullable', 'string'],
            'text_uz'  => ['nullable', 'string'],
            'text_ru'  => ['nullable', 'string'],
        ]);
            if ($valid) {
                $projects = Projects::find($id);
                $projects->update($request->all());
                if ($request->image) {
                    $this->storeImage($projects);
                }
            }
            return redirect()->route('projects.index');
    }


    public function destroy($id)
    {
        $projects = Projects::find($id);
        if ($projects->image){
            unlink(public_path() . '/storage/' . $projects->image );
        }
        $projects->delete();
        Alert::success('Muvaffaqiyatli', 'Yakunlandi!');
        return redirect()->route('projects.index');
    
    }
    

    private function storeImage($projects)
    {
        if (request()->has('image')) {
            $projects->update([
                'image' => \request()->image->store('projects', 'public'),
            ]);
        }
        $image = Image::make(public_path('storage/' . $projects->image));
        $image->save();
    }
}
