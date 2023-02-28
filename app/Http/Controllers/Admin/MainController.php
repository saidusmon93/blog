<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use PHPHtmlParser\Dom;

class MainController extends Controller
{
    public function index()
    {
        $title = 'Admin';
        return view('admin.index');
    }
}
