<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;

class HeroController extends Controller
{

public function hero(){

return view('admin.hero.form');
}
    public function storeHero(Request $request)
    {
        // ✅ Validation
        $data = $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string',
          
        ]);

        // ✅ Image Upload
        $newImage = "";
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $newImage = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('album',$newImage,'public');

        }
           
        $hero = new Hero();
        $hero->image = $newImage;
        $hero->title = $data['title'];
        $hero->subtitle = $data['subtitle'];

        $hero->save();
;

        // ✅ Redirect
        return back()->with('success', 'Hero section added successfully!');
    }

    public function index(){

    $heroes = Hero::all();

    return view('admin.hero.index', compact('heroes'));
    }

    public function edit(Hero $hero){

    return view('admin.hero.edit', compact('hero'));
    }

    public function update(Request $request,Hero $hero){
        $data = $request->validate([
            'image'=>'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
            'title'=>'required|string|max:255',
            'subtitle'=>'required|string',
        ]);
        $newImage ="";
        if($request->hasFile('image')){
            $file = $request->file('image');
            $newImage = time().'.'.$file->getClientOriginalExtension();
            $file->storeAs('album',$newImage,'public');
        }

        $hero->image = $newImage;
        $hero->title = $data['title'];
        $hero->subtitle = $data['subtitle'];

        $hero->save();

        return redirect()->back()->with('success','your hrero has updated');
    }

    public function delete(Hero $hero){

    $hero->delete();

    return redirect()->back()->with('sucess','hero has been delete');
    }
}