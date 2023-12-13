@extends('layouts.app')
@section('content')
    <div class="mt-3">
        <h1>Add Golongan</h1>
        <hr>
        <form action="{{ url('golongan') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="gol_kode" class="form-label">Kode Golongan <strong class="text-danger fw-bold">*</strong></label>
                <input type="text" name="gol_kode" id="gol_kode" class="form-control" value="{{ $golKode }}" readonly
                    required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Golongan <strong
                        class="text-danger fw-bold">*</strong></label>
                <input type="text" name="gol_nama" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Save Data</button>
            </div>
        </form>
    </div>
@endsection
