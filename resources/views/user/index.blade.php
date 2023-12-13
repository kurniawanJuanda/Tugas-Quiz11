@extends('layouts.app')
@section('content')
    <div class="mt-3">
        <h1>Hello User</h1>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th>#No</th>
                    <th>Nama</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rows as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
