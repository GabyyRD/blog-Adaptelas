<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>
    </head>
    <body class="antialiased" style="background-color: bisque; display: flex; flex-direction: column"> 

    <h1 style="text-align: center">MEU BLOG</h1>

    <h2>Novo Post:</h2>
    @isset($post)
    <div style="display: flex; flex-direction: column">
        <form id="meu-form" action="{{ route('blog.update', $post->id) }}" method="POST" style="display: flex; flex-direction: column"
            enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <label for="title">
                Título
                <input name="title" type="text" value="{{ $post->title }}"/>
            </label>
            <label for="description">
                Descrição
                <input name="description" type="text" value="{{ $post->description }}"/>
            </label>
            <label for="author">
                Autor
                <input name="author" type="text" value="{{ $post->author }}"/>
            </label>
            <label for="text">
                Texto
                <input name="text" type="text" value="{{ $post->text }}" />
            </label>
        </form>
        <button type="submit" form="meu-form">Salvar</button>
    </div>
    @endisset
    </body>
</html>
 