<?php

namespace App\Http\Controllers;

use App\Models\Testimonal;
use Illuminate\Http\Request;

class TestimonalController extends Controller
{
    public function testimonials()
    {
        $testionmals = Testimonal::paginate(10);

        return view('admin.testimonials.index', compact('testionmals'));
    }

    public function add()
    {
        return view('admin.testimonials.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'message' => 'required',
            'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // store image 
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);


        $testimonal = new Testimonal();
        $testimonal->name = $request->name;
        $testimonal->designation = $request->designation;
        $testimonal->message = $request->message;
        $testimonal->image = $imageName;
        $testimonal->save();

        return redirect()->route('admin.testimonials')->with('success', 'Testimonal added successfully');
    }
}
