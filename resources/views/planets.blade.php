<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Planets</title>
</head>
<body>
    <h1>Planets</h1>
    <ul>
        @foreach ($planets as $planet)
            <li>
                <strong>{{ $planet['name'] }}</strong><br>
                {{ $planet['description'] }}
            </li>
        @endforeach
    </ul>
</body>
</html>
