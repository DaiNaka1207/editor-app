<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>

    <style>
        img {max-width: 100%; height: auto;}
        .l-container {margin: auto;max-width: 1280px; width: 80%; background-color: #bae6fd;}
        .p-siteTitle::first-letter {text-transform: uppercase;}
        .l-header {display: flex; align-items: center; height: 26px; margin-bottom: 5px;}
        .updated_at {font-size: 0.85rem; margin-left: 15px; margin-bottom: 0;}
        .p-button {height: max-content;}
        .l-footer a {text-decoration: none; display: block; text-align: center}
        .l-contents {background-color: #fff; border-radius: 10px; padding: 10px}
        .l-footer {margin-top: 20px;}
    </style>
    
</head>
<body class="l-container">
    <h1 class="p-siteTitle">{{config('app.name')}}</h1>
    <div class="l-header">
        <button class="p-button" type="button" onclick="location.href='{{route('post.edit', ['post' => $post->id])}}'">編集</button>
        <p class="updated_at">📝{{ $post->updated_at }}</p>
    </div>

    <div class="l-contents">
        {!! $post->contents !!}
    </div>

    <div class="l-footer">
        <small><a href="https://portfolio.dainaka.live">&copy; 2023 DaiNaka</a></small>
    </div>
</body>
</html>