@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <!-- ... (unchanged code) ... -->
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <h1 class="text-center mt-4">Edit Gunung</h1>
                    <div class="card-body">
                        <form id="formGunung" action="/updatedata/{{ $data->id_gunung }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Gunung</label>
                                <input type="text" class="form-control" name="nama" id="nama" value="{{ $data->nama }}">
                            </div>
                            <div class="mb-3">
                                <label for="lokasi" class="form-label">Lokasi</label>
                                <input type="text" class="form-control" name="lokasi" id="lokasi" value="{{ $data->lokasi }}">
                            </div>
                            <div class="mb-3">
                                <label for="ketinggian" class="form-label">Ketinggian (meter)</label>
                                <input type="number" class="form-control" name="ketinggian" id="ketinggian" value="{{ $data->ketinggian }}">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi">{{ $data->deskripsi }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
