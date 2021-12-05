<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Users Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>
<body>
<div class="container">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $post->title }}</li>
        <li class="list-group-item">{{ $post->body }}</li>
        <li class="list-group-item">{{ $post->author }}</li>
        <li class="list-group-item">{{ $post->created_at }}</li>
        <li class="list-group-item"><a href="{{ route('posts') }}">Go back</a></li>
    </ul>
</div>
</body>
</html>
