<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Showrooms;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ShowroomsController extends Controller
{
    public function index()
    {
        
        $showrooms = Showrooms::all();
        return view('admin.showrooms.index',compact('showrooms'));
    }


    public function create()
    {
        $showrooms = Showrooms::all();
        return view('admin.showrooms.create',compact('showrooms'));
    }


    public function store(Request $request)
    {
        $valid = $request->validate([
           
            'title_ru'  => ['nullable', 'string'],
            'title_uz'  => ['nullable', 'string'],
            'address_uz'  => ['nullable', 'string'],
            'address_ru'  => ['nullable', 'string'],
            'map_lat'  => ['nullable', 'string'],
            'map_lang'  => ['nullable', 'string'],
            'phone'  => ['nullable', 'string'],
            'email'  => ['nullable', 'string'],
            
            
            
        ]);
            if ($valid) {
                $showrooms = Showrooms::create($request->all());
                return redirect()->route('showrooms.index');
            }
    }

        
    public function edit($id)
    {
        $showrooms = Showrooms::find($id);
        return view('admin.showrooms.edit', compact('showrooms'));
    }



    public function update(Request $request, $id)
    {
        $valid = $request->validate([
           
            'title_ru'  => ['nullable', 'string'],
            'title_uz'  => ['nullable', 'string'],
            'address_uz'  => ['nullable', 'string'],
            'address_ru'  => ['nullable', 'string'],
            'map_lat'  => ['nullable', 'string'],
            'map_lang'  => ['nullable', 'string'],
            'phone'  => ['nullable', 'string'],
            'email'  => ['nullable', 'string'],
            
           
        ]);
            if ($valid) {
                $showrooms=Showrooms::find($id);
                $showrooms->update($request->all());
               
            }
            return redirect()->route('showrooms.index');
    }


    public function destroy($id)
    {
        $showroom = Showrooms::find($id);
        
        $showroom->delete();
        Alert::success('Muvaffaqiyatli', 'Yakunlandi!');
        return redirect()->route('showrooms.index');
    
    }
}
