<?php

namespace App\Http\Controllers;

use App\Http\Controllers\mahasiswa as ControllersMahasiswa;
use App\Models\Mahasiswa;
use Google\Service\DriveActivity\Create;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\RedirectResponse as HttpFoundationRedirectResponse;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mhs = Mahasiswa::all();

        return view('mahasiswa.index', ['mahasiswa' => $mhs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'string|required',
            'nim' => 'string:11|required',
            'jurusan' => 'string'
        ]);

        $mhs = Mahasiswa::create($request->all());

        if ($mhs) {
            return redirect('/mahasiswa');
        }
    }
}
