<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>

    <style>
        ul {list-style: none; padding-left: 0;}
    </style>

    <x-head.tinymce-config />
</head>
<body>
    <h1>{{config('app.name')}}</h1>

    <form action="{{route('post.update', ['post' => $post->id])}}" method="POST">
        @csrf @method('PUT')
        <ul>
            <li><textarea id="editor" name="contents" cols="30" rows="10">{{$post->contents}}</textarea></li>
            <li><button type="submit">送信</button></li>
        </ul>
    </form>

</body>
</html>