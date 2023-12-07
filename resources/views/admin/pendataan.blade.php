@extends('layouts.admin')

@section('content')

@include('sweetalert::alert')

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
        <div class="container">
            <h1 class="text-center mb-5" style="font-weight: bold">Update Data</h1>
            <div class="row g-3 align-items-center mb-2">
                <div class="col-auto">
                    <form action="{{ url('/datapendaki') }}" method="GET" class="d-flex">
                        <input type="search" id="search" name="search" value="{{ request('search') }}" class="form-control" aria-describedby="passwordHelpInline">
                        <button type="submit" class="btn btn-primary ms-2">Cari</button>
                    </form>
                </div>
            </div>

            <table class="table table-dark table-striped-columns">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Gunung</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->id_gunung}}</td>
                        <td>{{ $row->alamat }}</td>
                        <td>{{ $row->jenis_kelamin }}</td>
                        <td>{{ $row->nomer_telepon }}</td>
                        <td>
                            <a href="/tampil/{{ $row->id_pendaki }}" class="btn btn-info">Edit</a>                                                                       
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>





@endsection
