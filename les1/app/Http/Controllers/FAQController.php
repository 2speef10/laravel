<?php

namespace App\Http\Controllers;
use App\Models\FAQCategory;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index()
    {
        $categories = FAQCategory::with('items')->get();

        return view('faq.faq', compact('categories'));
    }
}
