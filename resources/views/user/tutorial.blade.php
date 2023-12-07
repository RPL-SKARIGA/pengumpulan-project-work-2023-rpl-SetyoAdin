<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Tutorial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }

        .tutorial-container {
            max-width: 600px;
            margin: 0 auto;
        }

        .tutorial-header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .tutorial-step {
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
            margin: 10px;
            padding: 20px;
        }

        .tutorial-img {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .tutorial-text {
            font-size: 16px;
            color: #555;
        }
        .btn {
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        user-select: none;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        cursor: pointer;
    }

    .btn-secondary {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-secondary:hover {
        color: #fff;
        background-color: #5a6268;
        border-color: #545b62;
    }
    </style>
</head>
<body>

    <div class="tutorial-container">
        <div class="tutorial-header">Selamat Datang di Tutorial Pendaftaran</div>

        <div class="tutorial-step">
            <img class="tutorial-img" src="{{ asset('home.png') }}" alt="Step 1 Image">
            <div class="tutorial-text">
                <p>Langkah 1: Masuk Website Mountnesia Lalu Click Daftar.</p>
            </div>
        </div>

        <div class="tutorial-step">
            <img class="tutorial-img" src="{{ asset('isi.png') }}" alt="Step 2 Image">
            <div class="tutorial-text">
                <p>Langkah 2: Isi Form Pendaftaran, Sesuai Dengan Data Diri Anda.  
                  !Semua Kolom Wajib Di Isi!</p>
            </div>
        </div>

        <div class="tutorial-step">
            <img class="tutorial-img" src="{{ asset('KTP.jpg') }}" alt="Step 3 Image">
            <div class="tutorial-text">
                <p>Langkah 3: Setelah Mendaftar Langsung Datang Ke Lokasi Basecamp Dengan Menunjukan KTP/Kartu Identitas Lainnya. !Usahakan Data Pada Kolom Sama Dengan Data Pada KTP!</p>
            </div>
        </div>
        <a href="/home" class="btn btn-secondary">Kembali</a>
    </div>

</body>
</html>
