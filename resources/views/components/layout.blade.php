<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/ninjas">Ninja List</a>
        <a href="/ninjas/create">Create Ninja</a>
    </nav>
    <div class="container">
        {{ $slot }}
    </div>
</body>
</html>