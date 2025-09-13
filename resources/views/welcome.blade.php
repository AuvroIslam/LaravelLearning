<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(5 > 2)
        <p>5 is greater than 2</p>
    @endif
    <h1>Welcome to Ninja Network, {{ $name }}</h1>
    <a href="/ninjas">Ninja List</a>
</body>
</html>