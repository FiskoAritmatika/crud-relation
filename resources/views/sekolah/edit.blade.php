@extends('layout')

@section('container')

<h3>Edit Sekolah</h3>
<div class="link">
    <button><a href="{{ route('index') }}">Back</a></button>
</div>

<form action="{{ route('sekolah.update', $sekolah->id) }}" method="post">
    @csrf
    <label>Sekolah</label>
    <input type="text" value="{{ $sekolah->sekolah }}" name="sekolah">
<br>
    <label>Provinsi</label>
    <input type="text" value="{{ $sekolah->provinsi }}" name="provinsi">
<br>
    <label>Kota</label>
    <input type="text" value="{{ $sekolah->kota }}" name="kota">
<br><br>
    <button>Edit</button>
</form>

@endsection