@extends('layouts.app')
@section('content')
    <div class="mt-3">
        <h1>Edit Pelanggan</h1>
        <hr>
        <form action="{{ url('pelanggan/' . $row->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="pel_nama" class="form-label">Nama Pelanggan <strong class="text-danger fw-bold">*</strong></label>
                <input type="text" name="pel_nama" id="name" class="form-control" required
                    value="{{ $row->pel_nama }}">
            </div>
            <div class="mb-3">
                <label for="gol" class="form-label">Golongan</label>
                <select name="pel_id_gol" id="gol" class="form-select">
                    @foreach ($golongans as $golongan)
                        <option value="{{ $golongan->id }}" {{ $golongan->id == $row->golongan->id ? 'selected' : '' }}>
                            {{ $golongan->gol_nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="pel_alamat" class="form-label">Alamat Pelanggan <strong
                        class="text-danger fw-bold">*</strong></label>
                <input type="text" name="pel_alamat" id="name" class="form-control" required
                    value="{{ $row->pel_alamat }}">
            </div>
            <div class="mb-3">
                <label for="pel_hp" class="form-label">No HP Pelanggan <strong
                        class="text-danger fw-bold">*</strong></label>
                <input type="text" name="pel_hp" id="name" class="form-control" required
                    value="{{ $row->pel_hp }}">
            </div>
            <div class="mb-3">
                <label for="pel_hp" class="form-label">Ktp Pelanggan <strong
                        class="text-danger fw-bold">*</strong></label>
                <input type="text" name="pel_ktp" id="name" class="form-control" required
                    value="{{ $row->pel_ktp }}">
            </div>
            <div class="mb-3">
                <label for="aktif" class="form-label">Status <sup class="text-danger fw-bold">*</sup></label>
                <select name="pel_aktif" id="aktif" class="form-select">
                    <option value="Y" {{ $row->pel_aktif == 'Y' ? 'selected' : '' }}>Aktif</option>
                    <option value="N" {{ $row->pel_aktif == 'N' ? 'selected' : '' }}>Tidak Aktif</option>
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </div>
@endsection
