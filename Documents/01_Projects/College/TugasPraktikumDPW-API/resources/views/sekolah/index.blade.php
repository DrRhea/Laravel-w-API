<!DOCTYPE html>
<html>
<head>
    <title>Data Sekolah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: #fff;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        strong {
            color: #007bff;
        }
    </style>
</head>
<body>
    <h1>Data Sekolah</h1>
    <ul>
        @foreach($sekolah as $item)
            <li>
                <strong>Provinsi:</strong> {{ $item['propinsi'] }}<br>
                <strong>Kabupaten/Kota:</strong> {{ $item['kabupaten_kota'] }}<br>
                <strong>Kecamatan:</strong> {{ $item['kecamatan'] }}<br>
                <strong>Sekolah:</strong> {{ $item['sekolah'] }}<br>
                <strong>Bentuk Sekolah:</strong> {{ $item['bentuk'] }}<br>
                <strong>Status Sekolah:</strong> {{ $item['status'] }}<br>
                <strong>Alamat:</strong> {{ $item['alamat_jalan'] }}<br>
                <strong>Lintang:</strong> {{ $item['lintang'] }}<br>
                <strong>Bujur:</strong> {{ $item['bujur'] }}<br>
            </li>
        @endforeach
    </ul>
</body>
</html>
