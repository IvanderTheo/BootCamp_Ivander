<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class latihanController extends Controller
{
    //
    public function index() {
        $data = [
            'nama'=> 'Kawan Koding',
            'materi' => 'Laravel Framework'
        ];
        return view('sapaan', $data);
    }
}
