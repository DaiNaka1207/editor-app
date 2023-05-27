<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
</head>
<body>
    <h1>{{config('app.name')}}</h1>
    <hr>

    {!! $post->contents !!}

    <hr>
    <a href="{{route('post.edit', ['post' => $post->id])}}">編集</a>

</body>
</html>