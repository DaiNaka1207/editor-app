<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>

    <style>
        .l-container {margin: auto;max-width: 1280px; width: 80%; background-color: #bae6fd;}
        .p-siteTitle::first-letter {text-transform: uppercase;}
        .l-footer a {text-decoration: none; display: block; text-align: center}
        .l-footer {margin-top: 20px;}
        .p-ul {list-style: none; padding-left: 0;}
        .p-button {margin-bottom: 5px; margin-right: 10px;}
    </style>

    <x-head.tinymce-config />
</head>
<body class="l-container">
    <h1 class="p-siteTitle">{{config('app.name')}}</h1>

    <form action="{{route('post.update', ['post' => $post->id])}}" method="POST">
        @csrf @method('PUT')
        <button class="p-button p-button--send" type="submit">送信</button>
        <button class="p-button p-button--cansel" type="button" onclick="location.href='{{config('app.url')}}'">取消</button>
        <textarea id="editor" name="contents" cols="30" rows="10">{{$post->contents}}</textarea>
    </form>
    
    <div class="l-footer">
        <small><a href="https://portfolio.dainaka.live">&copy; 2023 DaiNaka</a></small>
    </div>

</body>
</html>