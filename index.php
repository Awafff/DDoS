

<?php
// Daftar produk dengan gambar dan deskripsi
$produk = [
    [
        "nama" => "Produk 1",
        "deskripsi" => "Deskripsi singkat untuk Produk 1.",
        "gambar" => "https://via.placeholder.com/250"
    ],
    [
        "nama" => "Produk 2",
        "deskripsi" => "Deskripsi singkat untuk Produk 2.",
        "gambar" => "https://via.placeholder.com/250"
    ],
    [
        "nama" => "Produk 3",
        "deskripsi" => "Deskripsi singkat untuk Produk 3.",
        "gambar" => "https://via.placeholder.com/250"
    ],
    [
        "nama" => "Produk 4",
        "deskripsi" => "Deskripsi singkat untuk Produk 4.",
        "gambar" => "https://via.placeholder.com/250"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kotak Gambar dan Deskripsi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); /* Responsif */
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .item {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .item:hover {
            transform: scale(1.05); /* Efek hover */
        }

        .item img {
            max-width: 100%;
            border-radius: 8px;
            height: 150px; /* Tinggi tetap untuk gambar */
            object-fit: cover;
        }

        .item h2 {
            margin: 10px 0 5px;
        }

        .item p {
            color: #666;
            font-size: 14px; /* Ukuran font deskripsi */
        }
    </style>
</head>
<body>

<h1>Kotak Gambar dan Deskripsi</h1>
<div class="container">
    <?php foreach ($produk as $item): ?>
        <div class="item">
            <img src="<?php echo $item['gambar']; ?>" alt="<?php echo $item['nama']; ?>">
            <h2><?php echo $item['nama']; ?></h2>
            <p><?php echo $item['deskripsi']; ?></p>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
