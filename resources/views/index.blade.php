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
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
            <th>Author</th>
            <th>Created at</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td><a href="{{ route('post', $post->slug) }}">{{ $post->title }}</a></td>
                <td>{{ $post->body }}</td>
                <td>{{ $post->author }}</td>
                <td>{{ $post->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
</div>
</body>
</html>
