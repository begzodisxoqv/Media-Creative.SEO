<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Services::all();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'title_1_uz' => ['nullable', 'string'],
            'title_1_ru' => ['nullable', 'string'],
            'title_2_uz' => ['nullable', 'string'],
            'title_2_ru' => ['nullable', 'string'],
            'text_uz' => ['nullable', 'string'],
            'text_ru' => ['nullable', 'string'],
           

        ]);
        if ($valid) {
            $services = Services::create($request->all());
            if ($request->image_uz) {
                $this->storeImageUz($services);
            }
            if ($request->image_ru) {
                $this->storeImageRu($services);
            }
            return redirect()->route('services.index')->withSuccess('Успешно', 'Категория добавлена!');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $services = Services::find($id);
        return view('admin.services.edit', compact('services'));
    }

    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'title_1_uz' => ['nullable', 'string'],
            'title_1_ru' => ['nullable', 'string'],
            'title_2_uz' => ['nullable', 'string'],
            'title_2_ru' => ['nullable', 'string'],
            'text_uz' => ['nullable', 'string'],
            'text_ru' => ['nullable', 'string'],
        ]);

        if ($valid) {
            $services = Services::find($id);
            $services->update($request->all());
            if ($request->image_uz) {
                $this->storeImageUz($services);
            }
            if ($request->image_ru) {
                $this->storeImageRu($services);
            }
        }

        return redirect()->route('services.index')->withSuccess('Успешно', 'Категория обновлена!');
    }

    public function destroy($id)
    {
        $services = Services::find($id);
        if ($services->image){
        }
        $services->delete();
        Alert::success('Успешно', 'Баннер удален!');
        return redirect()->route('services.index');
    }


    private function storeImageUz($services)
    {
        if (request()->has('image_uz')) {
            $services->update([
                'image_uz' => \request()->image_uz->store('services', 'public'),
            ]);
        }
        $image = Image::make(public_path('storage/' . $services->image_uz));
        $image->save();
    }

    private function storeImageRu($services)
    {
        if (request()->has('image_ru')) {
            $services->update([
                'image_ru' => \request()->image_ru->store('services', 'public'),
            ]);
        }
        $image = Image::make(public_path('storage/' . $services->image_ru));
        $image->save();
    } 
}
