<?php

namespace App\Http\Controllers\Admin;

use App\Models\Serial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SerialController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.addSerial');
    }

    protected function create(array $data)
    {
//        return Serial::create([
//            'title' => $data['title'],
//            'description' => $data['description'],
//        ]);
    }
}
