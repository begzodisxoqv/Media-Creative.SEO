<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class PostsController extends Controller
{
    public function index()
    {
        // $tools = Tools::all();
        $posts = Posts::all();
        return view('admin.posts.index',compact('posts'));
    }


    public function create()
    {
        $posts = Posts::all();
        return view('admin.posts.create',compact('posts'));
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
                $posts = Posts::create($request->all());
                if ($request->image) {
                    $this->storeImage($posts);
                }
                return redirect()->route('posts.index');
            }
    }

        
    public function edit($id)
    {
        $posts = Posts::find($id);
        return view('admin.posts.edit', compact('posts'));
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
                $posts = Posts::find($id);
                $posts->update($request->all());
                if ($request->image) {
                    $this->storeImage($posts);
                }
            }
            return redirect()->route('posts.index');
    }


    public function destroy($id)
    {
        $posts = Posts::find($id);
        if ($posts->image){
            unlink(public_path() . '/storage/' . $posts->image );
        }
        $posts->delete();
        Alert::success('Muvaffaqiyatli', 'Yakunlandi!');
        return redirect()->route('posts.index');
    
    }
    

    private function storeImage($posts)
    {
        if (request()->has('image')) {
            $posts->update([
                'image' => \request()->image->store('posts', 'public'),
            ]);
        }
        $image = Image::make(public_path('storage/' . $posts->image));
        $image->save();
    }
}
