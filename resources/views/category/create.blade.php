@extends('layout')

@section('container')

<h3>Create Category</h3>
<div class="link">
    <button><a href="{{ route('index') }}">Back</a></button>
</div>

<form action="{{ route('category.submit') }}" method="post">
    @csrf
    <label>Category</label>
    <input type="text" name="category">
<br><br>
    <button>Create</button>
</form>

@endsection