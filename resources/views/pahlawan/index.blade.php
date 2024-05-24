<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pahlawan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
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
        p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Data Pahlawan</h1>
    <ul>
        @foreach($pahlawan as $p)
            <li>
                <p><strong>Nama:</strong> {{ $p['name'] }}</p>
                <p><strong>Tahun Kelahiran:</strong> {{ $p['birth_year'] }}</p>
                <p><strong>Tahun Kematian:</strong> {{ $p['death_year'] }}</p>
                <p><strong>Deskripsi:</strong> {{ $p['description'] }}</p>
                <p><strong>Tahun Kenaikan:</strong> {{ $p['ascension_year'] }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
