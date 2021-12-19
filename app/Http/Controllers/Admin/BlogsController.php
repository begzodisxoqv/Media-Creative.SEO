<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class BlogsController extends Controller
{
    public function index()
    {
        // $tools = Tools::all();
        $blogs = Blogs::all();
        return view('admin.blogs.index',compact('blogs'));
    }


    public function create()
    {
        $blogs = Blogs::all();
        return view('admin.blogs.create',compact('blogs'));
    }


    public function store(Request $request)
    {
        $valid = $request->validate([
            'title_uz' => ['nullable', 'string'],
            'title_ru' => ['nullable', 'string'],
            'text_uz'  => ['nullable', 'string'],
            'text_ru'  => ['nullable', 'string'],
            'data_uz'  => ['nullable', 'string'],
            'data_ru'  => ['nullable', 'string'],
            
        ]);
            if ($valid) {
                $blogs = Blogs::create($request->all());
                if ($request->image) {
                    $this->storeImage($blogs);
                }
                return redirect()->route('blogs.index');
            }
    }

        
    public function edit($id)
    {
        $blogs = Blogs::find($id);
        return view('admin.blogs.edit', compact('blogs'));
    }



    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'title_uz' => ['nullable', 'string'],
            'title_ru' => ['nullable', 'string'],
            'text_uz'  => ['nullable', 'string'],
            'text_ru'  => ['nullable', 'string'],
            'data_uz'  => ['nullable', 'string'],
            'data_ru'  => ['nullable', 'string'],
            
        ]);
            if ($valid) {
                $blogs = Blogs::find($id);
                $blogs->update($request->all());
                if ($request->image) {
                    $this->storeImage($blogs);
                }
            }
            return redirect()->route('blogs.index');
    }


    public function destroy($id)
    {
        $blogs = Blogs::find($id);
        if ($blogs->image){
            unlink(public_path() . '/storage/' . $blogs->image );
        }
        $blogs->delete();
        Alert::success('Muvaffaqiyatli', 'Yakunlandi!');
        return redirect()->route('blogs.index');
    
    }
    

    private function storeImage($blogs)
    {
        if (request()->has('image')) {
            $blogs->update([
                'image' => \request()->image->store('blogs', 'public'),
            ]);
        }
        $image = Image::make(public_path('storage/' . $blogs->image));
        $image->save();
    }
}
