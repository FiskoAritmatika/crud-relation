@extends('layout')

@section('container')

<h3>List Sekolah</h3>
<div class="link">
    <button><a href="{{ route('sekolah.create') }}">Create Sekolah</a></button>
    <button><a href="{{ route('category.index') }}">Category</a></button>
</div>

<table border="1px solid black">
    <tr>
        <th>No</th>
        <th>Sekolah</th>
        <th>Provinsi</th>
        <th>Kota</th>
        <th>Category</th>
        <th>Opsi</th>
    </tr>
    @foreach ($sekolah as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->sekolah }}</td>
        <td>{{ $data->provinsi }}</td>
        <td>{{ $data->kota }}</td>
        <td>{{ $data->category->category }}</td>
        <td>
            <button><a href="{{ route('sekolah.edit', $data->id) }}">Edit</a></button>
            <form action="{{ route('sekolah.delete', $data->id) }}" method="post">
                @csrf
                <button>Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection