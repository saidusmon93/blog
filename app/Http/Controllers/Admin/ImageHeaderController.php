<?php

namespace App\Http\Controllers\Admin;

use App\HeaderImage;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageHeaderController extends Controller
{
    public function index()
    {
        return view('admin.headerimage.index');
    }
    /**
     * Update the avatar for the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['image'] = HeaderImage::image($request);
        HeaderImage::create($data);
        dd(HeaderImage::all());
        return redirect()->back()->with('success', 'Added image');
    }
}
