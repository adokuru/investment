<?php

namespace App\Http\Controllers;

use App\Models\Testimonal;
use Illuminate\Http\Request;
use PHPUnit\Framework\Test;

class TestimonalController extends Controller
{
    public function testimonials()
    {
        $testionmals = Testimonal::paginate(10);

        return view('admin.testimonials.index', compact('testionmals'));
    }
}