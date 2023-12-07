@extends('layouts.admin')

@section('content')

@include('sweetalert::alert')

<div class="content-wrapper">
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
                @foreach ($data->reverse() as $row)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->gunung ? $row->gunung->nama : 'Tidak Diketahui' }}</td>
                    <td>{{ $row->alamat }}</td>
                    <td>{{ $row->jenis_kelamin }}</td>
                    <td>{{ $row->nomer_telepon }}</td>
                    <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDetail{{ $row->id_pendaki }}">
                        Detail
                    </button>
                </td>
                </tr>
                <div class="modal fade" id="modalDetail{{ $row->id_pendaki }}" tabindex="-1" role="dialog" aria-labelledby="modalDetailLabel{{ $row->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalDetailLabel{{ $row->id_pendaki }}">Detail Pendaki</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4"><strong>Nama</strong></div>
                                <div class="col-md-8">: {{ $row->nama }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"><strong>Gunung</strong></div>
                                <div class="col-md-8">: {{ $row->gunung ? $row->gunung->nama : 'Tidak Diketahui' }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"><strong>Alamat</strong></div>
                                <div class="col-md-8">: {{ $row->alamat }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"><strong>Tanggal Lahir</strong></div>
                                <div class="col-md-8">: {{ $row->tanggal_lahir }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"><strong>Jenis Kelamin</strong></div>
                                <div class="col-md-8">: {{ $row->jenis_kelamin }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"><strong>Nomer Telepon</strong></div>
                                <div class="col-md-8">: {{ $row->nomer_telepon }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"><strong>NIK</strong></div>
                                <div class="col-md-8">: {{ $row->nik }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"><strong>Tanggal Naik</strong></div>
                                <div class="col-md-8">: {{ $row->tanggal_pendakian }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"><strong>Tanggal Turun</strong></div>
                                <div class="col-md-8">: {{ $row->tanggal_turun }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"><strong>Foto KTP</strong></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <img src="{{ asset('fotoktp/' . $row->foto_ktp) }}" alt="Foto KTP" style="max-width: 100%; max-height: 400px; height: auto;">
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <div class="modal-footer">
                            <form id="deleteForm{{ $row->id_pendaki }}" action="{{ route('deletedt', ['id' => $row->id_pendaki]) }}" method="GET">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="confirmDelete('{{ $row->id_pendaki }}')">Hapus</button>
                            </form>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                        
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            // Tambahkan script untuk menampilkan SweetAlert2 setelah data berhasil dihapus
                            @if(session('success'))
                                Swal.fire({
                                    title: 'Berhasil!',
                                    text: '{{ session('success') }}',
                                    icon: 'success',
                                    confirmButtonColor: '#3085d6',
                                    confirmButtonText: 'OK'
                                });
                            @endif
                        
                            function confirmDelete(id_pendaki) {
                                Swal.fire({
                                    title: 'Apakah Anda yakin?',
                                    text: 'Data akan dihapus permanen!',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#d33',
                                    cancelButtonColor: '#3085d6',
                                    confirmButtonText: 'Ya, hapus!',
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        document.getElementById('deleteForm' + id_pendaki).submit();
                                    }
                                });
                            }
                        </script>
                    </div>
                </div>
            </div>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
</div>
