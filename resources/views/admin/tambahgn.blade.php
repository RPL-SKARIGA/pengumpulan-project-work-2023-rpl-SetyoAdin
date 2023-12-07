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
                    <h1 class="text-center mt-4">Tambah Gunung</h1>
                    <div class="card-body">
                        <form id="formGunung" action="/tambahgn" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Gunung</label>
                                <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                            <div class="mb-3">
                                <label for="lokasi" class="form-label">Lokasi</label>
                                <input type="text" class="form-control" name="lokasi" id="lokasi">
                            </div>
                            <div class="mb-3">
                                <label for="ketinggian" class="form-label">Ketinggian (meter)</label>
                                <input type="number" class="form-control" name="ketinggian" id="ketinggian">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi"></textarea>
                            </div>

                            <!-- Button berjejer di sini -->
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="/gunung" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            function validateForm() {
                                var nama = document.getElementById('nama').value;
                                var lokasi = document.getElementById('lokasi').value;
                                var ketinggian = document.getElementById('ketinggian').value;
                                var deskripsi = document.getElementById('deskripsi').value;
                        
                                var emptyFields = [];
                        
                                if (nama.trim() === "") {
                                    emptyFields.push("Nama Gunung");
                                }
                        
                                if (lokasi.trim() === "") {
                                    emptyFields.push("Lokasi");
                                }
                        
                                if (ketinggian.trim() === "") {
                                    emptyFields.push("Ketinggian");
                                }
                        
                                if (deskripsi.trim() === "") {
                                    emptyFields.push("Deskripsi");
                                }
                        
                                if (emptyFields.length > 0) {
                                    showAlert('error', 'Semua kolom harus diisi:\n' + emptyFields.join(', '));
                                    return false;
                                }
                        
                                // Additional validation logic can be added here
                        
                                return true;
                            }
                        
                            function showAlert(icon, message) {
                                Swal.fire({
                                    icon: icon,
                                    title: 'Notifikasi',
                                    text: message,
                                    showConfirmButton: true,
                                    allowOutsideClick: false,
                                    timer: 6000,
                                    timerProgressBar: true,
                                    confirmButtonColor: '#3085d6',
                                    confirmButtonText: 'OK'
                                }).then(() => {
                                    if (icon === 'success') {
                                        window.location.href = '/gunung'; // Redirect to the specified page on success
                                    }
                                });
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
