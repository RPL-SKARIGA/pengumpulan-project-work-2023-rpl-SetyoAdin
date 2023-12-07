<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaki</title>

    <!-- Tambahkan link Bootstrap CSS di sini -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h1 class="text-center mb-4">Form Pendaki</h1>

            <form action="/insertdata" method="POST" enctype="multipart/form-data" id="pendakiForm">
                @csrf


            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat" required></textarea>
            </div>

            <div class="row g-3">
                <div class="col-md-6">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                </div>
                <div class="col-md-6">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
                    <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="" disabled selected>Jenis Kelamin</option>
                        <option value="cowo">Laki-laki</option>
                        <option value="cewe">Perempuan</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label for="nomer_telepon" class="form-label">Nomer Telepon:</label>
                <input type="tel" class="form-control" id="nomer_telepon" name="nomer_telepon" required>
            </div>

            <div class="mb-3">
                <label for="nik" class="form-label">NIK:</label>
                <input type="text" class="form-control" id="nik" name="nik" required>
            </div>
            <div class="mb-3">
                <label for="foto_ktp" class="form-label">Foto KTP:</label>
                <input type="file" class="form-control" id="foto_ktp" name="foto_ktp" accept="image/*" required>
            </div>    

            <div class="row g-3 mb-5">
                <div class="col-md-6">
                    <label for="gunung" class="form-label">Pilih Gunung:</label>
                    <select class="form-select" id="id_gunung" name="id_gunung" required>
                        <option value="" disabled selected>Pilih Gunung</option>
                        @foreach($gunung as $gunungs)
                            <option value="{{ $gunungs->id_gunung }}">{{ $gunungs->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <label for="tanggal_pendakian" class="form-label">Tanggal pendakian:</label>
                        <input type="date" class="form-control" id="tanggal_pendakian" name="tanggal_pendakian" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <label for="tanggal_turun" class="form-label">Tanggal Turun:</label>
                        <input type="date" class="form-control" id="tanggal_turun" name="tanggal_turun" required>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="/home" class="btn btn-secondary float-start">Kembali</a>
                <button type="button" class="btn btn-primary float-start ms-2" onclick="submitForm()">Daftar</button>
            </div>            
        </form>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function submitForm() {
        // Validate the form before submitting
        if (validateForm()) {
            // If validation is successful, submit the form
            document.getElementById('pendakiForm').submit();

            // Display success message
            showAlert('success', 'Data berhasil dibuat!');
        }
    }

    function validateForm() {
        var nama = document.getElementById('nama').value;
        var alamat = document.getElementById('alamat').value;
        var tanggal_lahir = document.getElementById('tanggal_lahir').value;
        var jenis_kelamin = document.getElementById('jenis_kelamin').value;
        var nomer_telepon = document.getElementById('nomer_telepon').value;
        var nik = document.getElementById('nik').value;
        var id_gunung = document.getElementById('id_gunung').value;
        var foto_ktp = document.getElementById('foto_ktp').value;
        var tanggal_pendakian = document.getElementById('tanggal_pendakian').value;

        if (nama.trim() === "" || alamat.trim() === "" || tanggal_lahir.trim() === "" || jenis_kelamin.trim() === "" || nomer_telepon.trim() === "" || nik.trim() === "" || id_gunung.trim() === "" || foto_ktp.trim() === "") {
            showAlert('error', 'Semua kolom harus diisi!');
            return false;
        }

        // You can add more specific validation here if needed
        // Example: Check if NIK is numeric and has a specific length
        if (isNaN(nik) || nik.length !== 9) {
            showAlert('error', 'NIK harus berupa angka dan memiliki panjang 9 digit.');
            return false;
        }

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
            window.location.href = '/insert';
        });
    }
</script>
