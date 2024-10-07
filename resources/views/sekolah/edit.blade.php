@extends('layout')

@section('container')

<h3>Edit Sekolah</h3>
<div class="link">
    <button><a href="{{ route('index') }}">Back</a></button>
</div>

<form action="{{ route('sekolah.update', $sekolah->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $sekolah->id }}">
    <label>Sekolah</label>
    <input type="text" value="{{ $sekolah->sekolah }}" name="sekolah">
<br>
    <label>Provinsi</label>
    <input type="text" value="{{ $sekolah->provinsi }}" name="provinsi">
<br>
    <label>Kota</label>
    <input type="text" value="{{ $sekolah->kota }}" name="kota">
<br>
    <label>Category</label>
    <select name="category" id="category">
        @foreach(App\Models\Category::all() as $category)
            <option value="{{$category->id}}" @if($category->id==$sekolah->category_id) selected @endif>{{$category->category}}</option>
        @endforeach
    </select>
<br><br>
    <button>Edit</button>
</form>

@endsection