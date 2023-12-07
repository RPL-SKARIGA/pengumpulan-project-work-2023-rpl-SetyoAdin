@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <h1 class="text-center mt-4">Fiks Turun</h1>
                    <div class="card-body">
                        <form id="formGunung" action="/fiksturun/{{ $data->id_pendaki }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="tanggal_turun" class="form-label">Tanggal Turun:</label>
                                    <input type="date" class="form-control" id="tanggal_turun" name="tanggal_turun" value="{{ $data->tanggal_turun }}" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Mengatur nilai awal input tanggal dengan data sebelumnya
    document.getElementById('tanggal_turun').value = '{{ $data->tanggal_turun }}';
</script>

@endsection
