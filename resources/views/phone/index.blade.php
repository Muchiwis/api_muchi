<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User_phone</title>
</head>
<body>
    {{-- <h1>{{ $user->name }}</h1>
    @foreach ($user->phones as $phone)
        <h3>Telefonos: Prefix: {{ $phone->prefix}}  Number: {{$phone->phone_number}}</h3>
    @endforeach --}}
   <h1>{{$user->name}}</h1>
   {{$user->roles}}
   @foreach ($user->roles as $rol)
       <h3>Roles: {{ $rol->name }}</h3>
   @endforeach
</body>
</html>