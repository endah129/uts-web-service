<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function view;

class AboutController extends Controller
{
    /**
     * Menampilkan halaman about dengan data tim hardcoded.
     * * @return \Illuminate\View\View
     */
    public function index()
    {
        // Data yang dikirimkan ke about.blade.php
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