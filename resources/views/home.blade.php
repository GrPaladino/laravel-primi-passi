<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Laravel</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <hr>
    <p><b>{{$paragraph}}</b></p>

    <ul>
        @foreach($students as $student)
        <li>{{$student}}</li>
        <p></p>
        @endforeach
    </ul>
</body>
</html>