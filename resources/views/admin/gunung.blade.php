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
        </div>
      </div>
    </div>
    <div class="container">
      <h1 class="text-center mb-5" style="font-weight: bold">Data Gunung</h1>
      <div class="row g-3 align-items-center mb-2">
        <div class="col-auto">
            <form action="{{ url('/gunung') }}" method="GET" class="d-flex">
                <input type="search" id="search" name="search" value="{{ request('search') }}" class="form-control" aria-describedby="passwordHelpInline">
                <button type="submit" class="btn btn-primary ms-2">Cari</button>
            </form>
        </div>
        <a href="/tambah" class="btn btn-success">Tambah Gunung</a>
    </div>
      <table class="table table-dark table-striped-columns">
          <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Lokasi</th>
                  <th scope="col">Ketinggian</th>
                  <th scope="col">Deskripsi</th>
                  <th scope="col">Aksi</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($data->reverse() as $row)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->lokasi }}</td>
                <td>{{ $row->ketinggian }}</td>
                <td>{{ $row->deskripsi }}</td>
                <td>
                  <a href="/tampilkandata/{{ $row->id_gunung }}" class="btn btn-info">Edit</a>
                  <button class="btn btn-danger delete" onclick="confirmDelete({{ $row->id_gunung }}, '{{ $row->nama }}')">Hapus</button>
                </td>
            </tr>
            @endforeach
          </tbody>
      </table>
  </div>
</div>

<script>
  function confirmDelete(id, nama) {
      Swal.fire({
          title: "Yakin?",
          text: "Apakah Anda yakin ingin menghapus data gunung " + nama + "?",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: '#d33',
          cancelButtonColor: '#3085d6',
          confirmButtonText: 'Ya, hapus!',
      }).then((result) => {
          if (result.isConfirmed) {
              // Panggil fungsi untuk menghapus data atau arahkan ke URL penghapusan
              deleteData(id);
          }
      });
  }

  function deleteData(id) {
      // Implementasikan logika penghapusan data sesuai kebutuhan
      // Anda dapat menggunakan AJAX untuk mengirim permintaan penghapusan ke server
      // atau langsung mengarahkan ke URL penghapusan.
      window.location = "/delete/" + id;
  }

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
</script>

@endsection
