<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #ff5722;
        }
        p {
            font-size: 18px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            font-size: 16px;
            color: white;
            background: #ff5722;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .btn:hover {
            background: #e64a19;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📋 Daftar Nilai</h1>
        <p>Selamat datang di halaman daftar nilai!</p>
        <a href="{{ url('/hitung-nilai') }}" class="btn">Hitung Nilai</a>
    </div>
</body>
</html>
