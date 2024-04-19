<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Caster\AmqpCaster;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.index', [
            "title" => "Koperasi JMB Pusat"
        ]);
    }
    public function news()
    {
        return view('landing.news', [
            "title" => "Berita | Koperasi JMB Pusat",
            "title_url" => "Berita"
        ]);
    }
    public function about()
    {
        return view('landing.about', [
            "title" => "Tentang | Koperasi JMB Pusat",
            "title_url" => "Tentang"
        ]);
    }
    public function contact()
    {
        return view('landing.contact', [
            "title" => "Kontak | Koperasi JMB Pusat",
            "title_url" => "Kontak"
        ]);
    }
    public function terms()
    {
        return view('landing.terms-services', [
            "title" => "Syarat & Layanan | Koperasi JMB Pusat",
            "title_url" => "Syarat & Layanan"
        ]);
    }
    public function policies()
    {
        return view('landing.privacy-policies', [
            "title" => "Kebijakan & Kerahasiaan Data | Koperasi JMB Pusat",
            "title_url" => "Kebijakan & Kerahasiaan Data"
        ]);
    }
}
