<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>
</head>
<body>
    <h1>Ninja Network</h1>
    <a href="/">Home</a>
    <h2>Ninja List</h2>
    <ul>
        @foreach($ninjas as $ninja)
            <li>
                <a href="/ninjas/{{ $ninja['id'] }}">
                    {{ $ninja['name'] }} - {{ $ninja['skill'] }}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>