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
        <li>
            <a href="/ninjas/{{ $ninjas[0]['id'] }}">
                {{ $ninjas[0]['name'] }} - {{ $ninjas[0]['skill'] }}
            </a>
        </li>
        <li>
            <a href="/ninjas/{{ $ninjas[1]['id'] }}">
                {{ $ninjas[1]['name'] }} - {{ $ninjas[1]['skill'] }}
            </a>
        </li>
    </ul>
</body>
</html>