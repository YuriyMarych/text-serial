<?php

namespace App\Http\Controllers\Admin;

use App\Models\Serial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SerialController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.serials.add');
    }

    protected function createSerial()
    {
        DB::table('serials')->insert(
                [
                    'title' => $_POST['title'],
                    'description' => $_POST['description'],
                ]
            );
        return view('admin.serials.add');
    }

}
