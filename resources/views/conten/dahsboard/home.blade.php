<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (auth()->user()->username)
        <p>Halo {{ auth()->user()->username }}</p>
    @endif

    @if (!auth()->user()->username)
        <p>oke</p>
    @endif
    
    
</body>
</html>