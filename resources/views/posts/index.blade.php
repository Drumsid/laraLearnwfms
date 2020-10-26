<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
         .test-form {
             display: inline-block;
         }
         ul li {
             margin-bottom: 20px; 
         }
    </style>
    <h1>posts index</h1>
    <ul>
        <li>
        <a href="{{ route('posts.show', ['post' => 1]) }}">post 1</a> |
            <a href="{{ route('posts.edit', ['post' => 1]) }}">edit</a> |
        <form class="test-form" action="{{ route('posts.destroy', ['post' => 1]) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">delete</button>
        </form>
        </li>
        <li>
            <a href="{{ route('posts.show', ['post' => 2]) }}">post 2</a> |
            <a href="{{ route('posts.edit', ['post' => 2]) }}">edit</a> |
        <form class="test-form" action="{{ route('posts.destroy', ['post' => 2]) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">delete</button>
        </form>
        </li>
        <li>
            <a href="{{ route('posts.show', ['post' => 3]) }}">post 3</a> |
            <a href="{{ route('posts.edit', ['post' => 3]) }}">edit</a> |
        <form class="test-form" action="{{ route('posts.destroy', ['post' => 3]) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">delete</button>
        </form>
        </li>
    </ul>
</body>
</html>