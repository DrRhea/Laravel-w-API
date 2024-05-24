<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data libur</title>
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
    <h1>Data libur</h1>
    <ul>
        @foreach($libur as $l)
            <li>
                <p><strong>Tanggal:</strong> {{ $l['tanggal'] }}</p>
                <p><strong>Keterangan:</strong> {{ $l['keterangan'] }}</p>
                <p><strong>Is_cuti:</strong> 
                  @if($l['is_cuti'])
                      Cuti
                  @else
                      Tidak Cuti
                  @endif
                </p>
            </li>
        @endforeach
    </ul>
</body>
</html>
