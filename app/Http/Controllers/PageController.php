<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Login page
    public function login()
    {
        return view('login');
    }

    // Process login
    public function loginProcess(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        return redirect()->route('dashboard',['username' => 'reyvandi']);
    }

    // Dashboard page
    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'reyvandi');
        return view('dashboard', compact('username'));
    }

    // Pengelolaan page with data
    public function pengelolaan()
    {
        // Sample data array for the pengelolaan page
        $items = [
            [
                'id' => 1,
                'nama projek' => 'ALgoritma Pemrograman 1',
                'Semester' => 'Semester 1',
                'SKS' => 3,
                'Nilai Mata Kuliah' => "A"
            ],
            [
                'id' => 2,
                'nama projek' => 'ALgoritma Pemrograman 2',
                'Semester' => 'Semester 2',
                'SKS' => 3,
                'Nilai Mata Kuliah' => "A"
            ],
            [
                'id' => 3,
                'nama projek' => 'Sistem Basis Data',
                'Semester' => 'Semester 2',
                'SKS' => 3,
                'Nilai Mata Kuliah' => "AB"
            ],
            [
                'id' => 4,
                'nama projek' => 'Pemrograman Berbasis objek',
                'Semester' => 'Semester 3',
                'SKS' => 4,
                'Nilai Mata Kuliah' => "AB"
            ],
            [
                'id' => 5,
                'nama projek' => 'Pemrograman Berbasis Web',
                'Semester' => 'Semester 4',
                'SKS' => 4,
                'Nilai Mata Kuliah' => "A"
            ],
        ];

        return view('pengelolaan', compact('items'));
    }

    // Profile page
    public function profile(Request $request)
    {
        $username = $request->query('username', 'Reyvandi');
        return view('profile', compact('username'));
    }
}
