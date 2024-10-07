<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    function index() {
        $sekolah = Sekolah::get();
        return view('index', compact('sekolah'));
    }

    function create() {
        return view('sekolah.create');
    }

    function submit(Request $request) {
        $sekolah = new Sekolah();
        $sekolah->sekolah = $request->sekolah;
        $sekolah->provinsi = $request->provinsi;
        $sekolah->kota = $request->kota;
        $sekolah->category_id = $request->category;
        $sekolah->save();

        return redirect()->route('index');
    }

    function edit($id) {
        $sekolah = Sekolah::find($id);
        return view('sekolah.edit', compact('sekolah'));
    }

    function update(Request $request, $id) {
        $sekolah = Sekolah::find($id);
        $sekolah->sekolah = $request->sekolah;
        $sekolah->provinsi = $request->provinsi;
        $sekolah->kota = $request->kota;
        $sekolah->category_id = $request->category;
        $sekolah->update();

        return redirect()->route('index');
    }

    function delete($id) {
        $sekolah =Sekolah::find($id);
        $sekolah->delete();
        return redirect()->route('index');
    }
}
