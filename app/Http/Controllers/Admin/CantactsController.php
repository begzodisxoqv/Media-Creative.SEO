<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cantacts;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class CantactsController extends Controller
{
    public function index()
    {
        // $tools = Tools::all();
        $contacts = Cantacts::all();
        return view('admin.contacts.index',compact('contacts'));
    }


    public function create()
    {
        $contacts = Cantacts::all();
        return view('admin.contacts.create',compact('contacts'));
    }


    public function store(Request $request)
    {
        $valid = $request->validate([
            'number' => ['nullable', 'string'],
            'email' => ['nullable', 'string'],
            'location_uz'  => ['nullable', 'string'],
            'location_ru'  => ['nullable', 'string'],
            
        ]);
            if ($valid) {
                $contacts = Cantacts::create($request->all());
                if ($request->image) {
                    $this->storeImage($contacts);
                }
                return redirect()->route('contacts.index');
            }
    }

        
    public function edit($id)
    {
        $contacts = Cantacts::find($id);
        return view('admin.contacts.edit', compact('contacts'));
    }



    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'number' => ['nullable', 'string'],
            'email' => ['nullable', 'string'],
            'location_uz'  => ['nullable', 'string'],
            'location_ru'  => ['nullable', 'string'],
            
        ]);
            if ($valid) {
                $contacts = Cantacts::find($id);
                $contacts->update($request->all());
                if ($request->image) {
                    $this->storeImage($contacts);
                }
            }
            return redirect()->route('contacts.index');
    }


    public function destroy($id)
    {
        $contacts = Cantacts::find($id);
        if ($contacts->image){
            unlink(public_path() . '/storage/' . $contacts->image );
        }
        $contacts->delete();
        Alert::success('Muvaffaqiyatli', 'Yakunlandi!');
        return redirect()->route('contacts.index');
    
    }
    

    private function storeImage($contacts)
    {
        if (request()->has('image')) {
            $contacts->update([
                'image' => \request()->image->store('contacts', 'public'),
            ]);
        }
        $image = Image::make(public_path('storage/' . $contacts->image));
        $image->save();
    }
}
