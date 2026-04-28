<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index() {
        $profile = [
            'nama'=>'Ivander',
            'email'=>'ivander@gmail.com',
            'pekerjaan'=>'Web Developer',
            'skills'=>['PHP','Laravel','MySQL','JavaScript'],
            'sosmed'=>[
                'github'=>'https://github.com/IvanderTheo/BootCamp_Ivander',
                'linkedin'=>'https://linkedin.com/in/ivander'
            ]
        ];
        return view('profile.index',compact('profile'));
    }
    public function about() {
        $about=[
            'bio'=>'Saya adalah seorang developer yang passionate dalam membangun aplikasi web.',
            'pengalaman'=>'2 tahun',
            'pendidikan'=> 'S1 Teknik Informatik',
            'hobi'=> ['Coding','Membaca', 'Gaming']
        ];
        return view('profile.about',compact('about'));
    }
    public function portofolio() {
        $projects = [
            [
                'nama'=>'E-commerce',
                'deskripsi'=>'apliklasi toko online',
                'teknologi'=>['laravel','mysql','bootstrap'],
                'status'=>'selesai'
            ],
            [
                'nama'=>'blog',
                'deskripsi'=>'platform blog',
                'teknologi'=>['laravel','vue'],
                'status'=>'pengembangan'
            ]
        ];
        return view('profile.portofolio',compact('projects'));
    }
    public function contact() {
        $contacts = [
            'phone'=>'0812345678',
            'email'=>'13123@gmail.com'
        ];
        return view('profile.contact',compact('contacts'));
    }
}
