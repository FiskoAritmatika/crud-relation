@extends('layout')

@section('container')

<h3>Category</h3>
<div class="link">
    <button><a href="{{ route('category.create') }}">Create Category</a></button>
    <button><a href="{{ route('index') }}">List Sekolah</a></button>
</div>

<table border="1px solid black">
    <tr>
        <th>No</th>
        <th>Category</th>
        <th>Opsi</th>
    </tr>
    @foreach ($category as $no=>$data2)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data2->category }}</td>
        <td>
            <button><a href="{{ route('category.edit', $data2->id) }}">Edit</a></button>
            <form action="{{ route('category.delete', $data2->id) }}" method="post">
                @csrf
                <button>Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection