@extends('layouts.app')
@section('content')
    <div class="mt-3">
        <h1>Data Pelanggan</h1>
        <hr>
        <a href="{{ url('pelanggan/create') }}" class="my-3 btn btn-primary"><strong>+ </strong>Add Data</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#No</th>
                    <th>No Pelanggan</th>
                    <th>Nama</th>
                    <th>Golongan</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>No KTP</th>
                    <th>No Seri</th>
                    <th>No Meteran</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rows as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->pel_no }}</td>
                        <td>{{ $row->pel_nama }}</td>
                        <td>{{ $row->golongan['gol_nama'] }}</td>
                        <td>{{ $row->pel_alamat }}</td>
                        <td>{{ $row->pel_hp }}</td>
                        <td>{{ $row->pel_ktp }}</td>
                        <td>{{ $row->pel_seri }}</td>
                        <td>{{ $row->pel_meteran }}</td>
                        @if ($row->pel_aktif === 'Y')
                            <td><span class="badge bg-success">Aktif</span></td>
                        @else
                            <td><span class="badge bg-danger">NonAktif</span></td>
                        @endif
                        <td>
                            <a href="{{ url('pelanggan/edit/' . $row->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ url('pelanggan/' . $row->id) }}" class="btn btn-danger"
                                onclick="return confirm('Apakah anda yakin?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
