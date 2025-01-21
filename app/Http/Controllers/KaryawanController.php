<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use Inertia\Inertia;

class KaryawanController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $karyawans = Karyawan::all();
        return Inertia::render('Karyawan/Index', ['karyawans' => $karyawans]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create()
    {
        return Inertia::render('Karyawan/Create');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $karyawan = new Karyawan($request->all());
        $karyawan->save();

        return redirect()->route('karyawans.index');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function edit(Karyawan $karyawan)
    {
        return Inertia::render('Karyawan/Edit', ['karyawan' => $karyawan]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        $karyawan->update($request->all());
        return redirect()->route('karyawans.index');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function destroy(karyawan $karyawan)
    {
        $karyawan->delete();
        return redirect()->back();
    }
}
