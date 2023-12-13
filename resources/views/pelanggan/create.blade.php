@extends('layouts.app')
@section('content')
    <div class="mt-3">
        <h1>Add Pelanggan</h1>
        <hr>
        <form action="{{ url('pelanggan') }}" method="post">
            <input type="hidden" name="pel_id_user" value="{{ Auth::user()->id }}">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="pel_no" class="form-label">Kode Pelanggan <strong class="text-danger fw-bold">*</strong></label>
                <input type="text" name="pel_no" id="pel_no" class="form-control" value="{{ $kodePel }}"
                    readonly required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Pelanggan <strong
                        class="text-danger fw-bold">*</strong></label>
                <input type="text" name="pel_nama" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="golongan" class="form-label">Golongan Pelanggan <sup class="text-danger fw-bold">*</sup></label>
                <select name="pel_id_gol" id="gol" class="form-select">
                    @foreach ($golongan as $row)
                        <option value="{{ $row->id }}">{{ $row->gol_nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Pelanggan <sup class="text-danger fw-bold">*</sup></label>
                <input type="text" class="form-control" id="pel_alamat" name="pel_alamat" required>
            </div>
            <div class="mb-3">
                <label for="hp" class="form-label">No Hp <sup class="text-danger fw-bold">*</sup></label>
                <input type="text" class="form-control" id="pel_hp" name="pel_hp" required>
            </div>
            <div class="mb-3">
                <label for="ktp" class="form-label">No KTP <sup class="text-danger fw-bold">*</sup></label>
                <input type="text" class="form-control" id="pel_ktp" name="pel_ktp" required>
            </div>
            <div class="mb-3">
                <label for="seri" class="form-label">No Seri <sup class="text-danger fw-bold">*</sup></label>
                <input type="text" class="form-control" id="pel_seri" name="pel_seri" value="{{ $genSeri }}"
                    readonly>
            </div>
            <div class="mb-3">
                <label for="meteran" class="form-label">No Meteran <sup class="text-danger fw-bold">*</sup></label>
                <input type="text" class="form-control" id="pel_meteran" name="pel_meteran" value="{{ $genMeteran }}"
                    readonly>
            </div>
            <div class="mb-3">
                <label for="aktif" class="form-label">Status <sup class="text-danger fw-bold">*</sup></label>
                <select name="pel_aktif" id="aktif" class="form-select">
                    <option value="Y">Aktif</option>
                    <option value="N">Tidak Aktif</option>
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Save Data</button>
            </div>
        </form>
    </div>
@endsection
