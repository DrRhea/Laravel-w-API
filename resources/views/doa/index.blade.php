<!DOCTYPE html>
<html>
<head>
    <title>Doa List</title>
</head>
<body>
    <h1>Doa List</h1>
    <ul>
        @foreach($doas as $doa)
            <li>{{ $doa['doa'] }}</li>
        @endforeach
    </ul>
</body>
</html>