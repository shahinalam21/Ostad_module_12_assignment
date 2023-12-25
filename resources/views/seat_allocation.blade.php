<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Seat Allocations</h1>

<ul>
    @foreach($seatAllocations as $allocation)
        <li>{{ $allocation->user->name }} - {{ $allocation->trip->location->name }} - Seat {{ $allocation->seat_number }}</li>
    @endforeach
</ul>
</body>
</html>