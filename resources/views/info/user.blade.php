<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MPlayer | User</title>
</head>
<body>
    <h1>Usuario: {{$user}}</h1>
    @if($user=="admin")
    <p>SANTOS BACALAOS, ES EL JEFE</p>
    @endif
    @php
    echo "<p>Fua chaval</p>";
    @endphp
</body>
</html>