<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banners;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class BannersController extends Controller
{
    public function index()
    {
        // $tools = Tools::all();
        $banners = Banners::all();
        return view('admin.banners.index',compact('banners'));
    }


    public function create()
    {
        $banners = Banners::all();
        return view('admin.banners.create',compact('banners'));
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
                $banners = Banners::create($request->all());
                if ($request->image) {
                    $this->storeImage($banners);
                }
                return redirect()->route('banners.index');
            }
    }

        
    public function edit($id)
    {
        $banners = Banners::find($id);
        return view('admin.banners.edit', compact('banners'));
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
                $banners = Banners::find($id);
                $banners->update($request->all());
                if ($request->image) {
                    $this->storeImage($banners);
                }
            }
            return redirect()->route('banners.index');
    }


    public function destroy($id)
    {
        $banners = Banners::find($id);
        if ($banners->image){
            unlink(public_path() . '/storage/' . $banners->image );
        }
        $banners->delete();
        Alert::success('Muvaffaqiyatli', 'Yakunlandi!');
        return redirect()->route('banners.index');
    
    }
    

    private function storeImage($banners)
    {
        if (request()->has('image')) {
            $banners->update([
                'image' => \request()->image->store('banners', 'public'),
            ]);
        }
        $image = Image::make(public_path('storage/' . $banners->image));
        $image->save();
    }


    
      
}
