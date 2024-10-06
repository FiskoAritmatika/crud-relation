@extends('layout')

@section('container')

<h3>Create Sekolah</h3>
<div class="link">
    <button><a href="{{ route('index') }}">Back</a></button>
</div>

<form action="{{ route('sekolah.submit') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label>Sekolah</label>
    <input type="text" name="sekolah">
<br>
    <label>Provinsi</label>
    <input type="text" name="provinsi">
<br>
    <label>Kota</label>
    <input type="text" name="kota">
<br>
    <label>Category</label>
    <select name="category">
        @foreach (App\Models\Category::all() as $category)
            <option value="{{ $category->id }}">{{ $category->category }}</option>
        @endforeach
    </select>
    @error('category')
    <span>
        <strong>{{ $message }}</strong>
    </span>
@enderror
<br><br>
    <button>Create</button>
</form>

@endsection