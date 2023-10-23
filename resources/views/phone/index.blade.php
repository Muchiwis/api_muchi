<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User_phone</title>
</head>
<body>
    <h1>{{ $user->name }}</h1>
    <h2>{{ $user->email }}</h2>
    <h2>{{ "El prefijo del pais es: ".$user->phone->prefix }}</h2>
    <h2>{{ "El número del usuario es: ". $user->phone->phone_number }}</h2>
</body>
</html>