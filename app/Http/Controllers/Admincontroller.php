<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Dashboard
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // Data Member
    public function datamember()
    {
        return view('admin.datamember');
    }

    // Kelola Gallery
    public function kelolagallery()
    {
        return view('admin.kelolagallery');
    }
    
        public function kelolamember()
    {
        return view('admin.kelolamember');
    }
}
