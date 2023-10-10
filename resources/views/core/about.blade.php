<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tentang saya</title>
</head>
<body>
    <h1>Hai semua, perkenalkan</h1>
    <ul>
        <li>
        <h3> {{ $name }} </h3>
        </li>
        <li>
            <h3>{{ $prodi }}</h3>
        </li>
        <li>
            <img src="{{ $image }}" alt="{{ $name }}">
        </li>
    </ul>
</body>
</html>