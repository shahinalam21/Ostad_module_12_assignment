<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Trips</h1>

<ul>
    @foreach($trips as $trip)
        <li>{{ $trip->location->name }} - {{ $trip->trip_date }}</li>
    @endforeach
</ul>
</body>
</html>