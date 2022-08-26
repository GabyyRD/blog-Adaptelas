<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>
    </head>
    <body class="antialiased" style="background-color: bisque; display: flex; flex-direction: column"> 

    <h1 style="text-align: center">MEU PERFIL</h1>

    @isset($user)
    <div style="display: flex; flex-direction: column">
        <form id="meu-form" action="{{ route('profile.update') }}" method="POST" style="display: flex; flex-direction: column"
            enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <label for="name">
                Nome
                <input name="name" type="text" value="{{ $user->name }}"/>
            </label>
            <label for="file">
                Foto
                <input name="file" type="file"/>
            </label>
            <span>foto atual:</span>
            <img src="/storage/{{ $user->photo }}" alt="foto do perfil">
        </form>
        <button type="submit" form="meu-form">Salvar</button>
    </div>
    @endisset
    </body>
</html>
 