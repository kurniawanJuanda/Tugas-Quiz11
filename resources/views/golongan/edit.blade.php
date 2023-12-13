@extends('layouts.app')
@section('content')
    <div class="mt-3">
        <h1>Edit Golongan</h1>
        <hr>
        <form action="{{ url('golongan/' . $rows->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="name" class="form-label">Nama Golongan <strong class="text-danger fw-bold">*</strong></label>
                <input type="text" name="gol_nama" id="name" class="form-control" required
                    value="{{ $rows->gol_nama }}">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </div>
@endsection
