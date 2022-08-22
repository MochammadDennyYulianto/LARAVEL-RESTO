<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kategori;

class HomeController extends Controller
{
    public function index() {
        $categories = Kategori :: all();
        return view('home' , compact('categories'));
    }

    public function store(Request $request)
    { 
        $this->validate($request, [
            'category' => 'required | max:30',
        ]);

        $name = $request->file('image')->getClientOriginalName();

        $request->image->move(public_path('images'), $name);
        dd('sukses');
    

        // $kategori = new Kategori();

        // $kategori->category = $request->category;

        // $kategori->save();

        // return redirect('/');
    }

    public function update($id, Request $request)
    {
        $categories = [
            'category'=>$request->category,
        ];

        Kategori::where('id',$id)
        ->update($categories);

        return redirect('/');
    }

    public function destroy($id)
    {
        Kategori::where('id', $id)->delete();

        return redirect('/');
    }

    public function login() {
    return view('admin.login');
    }
}
