<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function view; // ✅ tambahkan ini agar fungsi view() dikenali

class HomeController extends Controller
{
    public function index()
    {
        // Halaman utama (Home)
        return view('home', [
            'judul' => 'Halaman Home',
        ]);
    }

    public function about()
    {
        // Halaman About berisi identitas tim
        return view('about', [
            'judul' => 'Halaman About',
            'pembuat' => '2301010022 - ENDAH KOMARIYAH LESTARI (GENAP)',
            'tim' => [
                [
                    'nama' => 'ENDAH KOMARIYAH LESTARI',
                    'nim' => '2301010022',
                    'bio' => 'seorang Kpoperssss',
                    'gambar' => '2301010022.jpeg'
                ],
                [
                    'nama' => 'I MADE RIKI WIDIASTANA S.',
                    'nim' => '2301010051',
                    'bio' => 'gagah dan berani',
                    'gambar' => '2301010051.jpeg'
                ]
            ]
        ]);
    }
}
