@extends('layouts.app')
@section('content')
    <div class="mt-3">
        <h1>Hello Golongan</h1>
        <hr>
        <a href="{{ url('golongan/create') }}" class="my-3 btn btn-primary"><strong>+ </strong>Add Data</a>
        <table class="table">
            <thead>
                <tr>
                    <th>#No</th>
                    <th>Kode Golongan</th>
                    <th>Nama Golongan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rows as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->gol_kode }}</td>
                        <td>{{ $row->gol_nama }}</td>
                        <td>
                            <a href="{{ url('golongan/edit/' . $row->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ url('golongan/' . $row->id) }}" class="btn btn-danger"
                                onclick="return confirm('Apakah anda yakin?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
