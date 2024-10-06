@extends('layout')

@section('container')

<h3>Edit Category</h3>
<div class="link">
    <button><a href="{{ route('index') }}">Back</a></button>
</div>

<form action="{{ route('category.update', $category->id) }}" method="post">
    @csrf
    <label>Category</label>
    <input type="text" value="{{ $category->category }}" name="category">
<br><br>
    <button>Edit</button>
</form>

@endsection