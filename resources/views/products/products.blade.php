<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <h3>{{ $users }}</h3> --}}
    {{-- <h3>{{ $sss }}</h3> --}}
    <select>

@foreach($products as $items)
    <option>{{ $items }}</option>

@endforeach
    </select>

    
</body>
</html>