<!DOCTYPE html>
<html>
<head>
    <title>Sidebar Tetap</title>
    <style>
        /* Gaya untuk sidebar */
        .sidebar {
            width: 250px; /* Lebar sidebar sesuai kebutuhan Anda */
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            background-color: #333; /* Warna latar belakang sidebar */
            color: #fff; /* Warna teks pada sidebar */
            padding: 20px;
        }
        /* Gaya konten halaman */
        .content {
            margin-left: 270px; /* Lebar sidebar + margin */
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <!-- Isi sidebar di sini -->
        <ul>
            <li><a href="#">Menu 1</a></li>
            <li><a href="#">Menu 2</a></li>
            <li><a href="#">Menu 3</a></li>
        </ul>
    </div>
    <div class="content">
        <!-- Isi konten halaman di sini -->
        <?php
        // Isi konten PHP di sini
        for ($i = 1; $i <= 50; $i++) {
            echo "Data ke-$i<br>";
        }
        ?>
    </div>
</body>
</html>