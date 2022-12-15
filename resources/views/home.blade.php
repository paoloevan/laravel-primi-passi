<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<header>
    <nav>
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('about')}}">About</a>
    </nav>
</header>

<body>
    <h1>Hello Laravel</h1>

    <ul>Languages to Learn
        @if (count($Languages_to_Learn) > 0)
        @foreach ($Languages_to_Learn as $language => $status)
        <li>{{$language}}: {{$status}}</li>
        @endforeach
        @else <h5>No language found</h5>
        @endif
    </ul>
</body>

</html>