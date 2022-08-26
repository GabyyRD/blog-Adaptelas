<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>
    </head>
    <body class="antialiased" style="background-color: bisque; display: flex; flex-direction: column"> 

    <h1 style="text-align: center">MEU BLOG</h1>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: flex; flex-direction: column"
      enctype="multipart/form-data">

    @csrf
    @method('POST')
    </form>
    <button type="submit" form="logout-form">Sair</button>


    <h2>Novo Post:</h2>
    <div style="display: flex; flex-direction: column">
        <form id="meu-form" action="{{ route('blog.store') }}" method="POST" style="display: flex; flex-direction: column"
            enctype="multipart/form-data">

            @csrf
            @method('POST')

            <label for="title">
                Título
                <input name="title" type="text"/>
            </label>
            <label for="description">
                Descrição
                <input name="description" type="text"/>
            </label>
            <label for="text">
                Texto
                <input name="text" type="text"/>
            </label>
        </form>
        <button type="submit" form="meu-form">Postar</button>
    </div>

    <h2>Mais Recentes:</h2>
    <div style="display: flex; flex-direction: column; align-items: center">
        @isset($posts)
            @foreach($posts as $post)
                <div
                    style="display: flex; flex-direction: column; align-items: center; background-color: #fff3d3; width: 70%; margin: 10px; padding: 5px">
                    <h3 style="text-align: center; margin: 0 0 5px 0">{{ $post->title }}</h3>
                    <h4 style="text-align: center; margin: 0">{{ $post->description }}</h4>
                    <span style="text-align: center; margin: 0 0 5px 0; font-size: 6px">{{ $post->created_at }}</span>
                    <p style="text-align: center; margin: 5px 0 5px 0; font-size: 12px">{{ $post->text }}</p>
                    <div>
                        <span style="text-align: center; margin: 0 0 5px 0; font-size: 8px">By: {{ $post->user->name }}</span>
                        <img style="border-radius: 50%" width="30px" height="30px" src="/storage/{{ $post->user->photo }}" alt="foto perfil">
                    </div>
                    <form id="delete-{{$post->id}}" action="{{ route('blog.delete', $post->id) }}" method="POST">

                        @csrf
                        @method('DELETE')

                    </form>
                    <button type="submit" form="delete-{{$post->id}}">Excluir</button>
                    <a href="{{ route('blog.edit', $post->id) }}"><button>Editar</button></a>
                </div>
            @endforeach
        @endisset
    </div>
    </body>
</html>
