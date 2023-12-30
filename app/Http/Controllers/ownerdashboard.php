<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Object_wisata;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Object_;

class ownerdashboard extends Controller
{
    public function main()
    {
        $user = User::count();
        $wisata = Object_wisata::count();
        $berita = Berita::count();
        return view('dashboard-owners', compact('user', 'wisata', 'berita'));
    }

    public function user()
    {
        $user = User::all();
        return view('owner-user', compact('user'));
    }

    public function wisata()
    {
        $wisata = Object_wisata::all();
        return view('owner-wisata', compact('wisata'));
    }

    public function berita()
    {
        $berita = Berita::all();
        return view('owner-berita', compact('berita'));
    }
}
