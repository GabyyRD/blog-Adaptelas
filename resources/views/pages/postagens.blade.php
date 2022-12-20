@extends('layout.site')

@section('title', 'Blog - Adaptelas')

@section('content')
    <section class = 'blog'>
        <h1>Meu Blog</h1>
        <div class = 'content'>
            <div class = 'posts'>
                @foreach ($posts as $post)
                    <div class = 'post'>
                        <div class= 'container-imagem'>

                            <img class= 'post-imagem'src='storage/{{$post->image}}'/>
                        </div>
                        <div class = 'container-info'>
                            <h3>{{$post->title}}</h3>
                            <div class= 'info-post'>
                                <span><i class="fa-solid fa-person"></i> {{$post->author}}</span>
                                <span><i class="fa-regular fa-clock"></i>{{ date('d/m/Y', strtotime($post->created_at)) }}</span>
                                <span><i class="fa-regular fa-flag"></i> {{$post->category}}</span>
                            </div>
                            <p class = 'description-post'>{{$post->description}}</p>
                            <div class= 'container-ver-mais'>
                                <a href ='{{route('blog.post', $post->id)}}'>Ver mais <i class="fa-solid fa-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class='aside' >
                <div class = 'container-sobremin'>
                    <h2>Quem sou eu?</h2>
                    <div class= 'container-info-sobremin'>
                        <div class = 'background-imagem'>
                            <div class = 'container-imagem-sobremin'>
                                <img src='https://i.imgur.com/SZOyHJK.jpeg' alt='Imagem sobremim'/>
                            </div>
                        </div>

                        <p class='container-texto'>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim aliquam risus ornare ultrices. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim aliquam risus ornare ultrices.
                        </p>
                    </div>
                </div>
                <div class = 'container-pesquisa'>
                    <h2>Pesquisar</h2>
                    <form action="#" class='forms-pesquisa'>
                        @method('GET')
                        <div class = 'container-input-pesquisa'>
                            <input type="text" placeholder = 'Faça sua busca'/>
                            <a href = '#'><i class="fa-solid fa-magnifying-glass"></i></a>
                        </div>
                    </form>
                </div>
                <div class = 'container-categorias'>
                    <h2>Categorias</h2>
                    <div class= 'categorias'><ol>
                        @foreach ($posts as $post )
                            <li><a href="#">{{$post->category}}</a></li>
                        @endforeach
                    </ol></div>

                </div>
                <div class = 'container-posts-recentes'>
                    <h2>Posts Recentes</h2>
                    <div class = 'posts-recentes'>
                    @foreach ($posts->take(3) as $post )
                        <a href='{{route('blog.post', $post->id)}}'>
                            <div class ='post-recente'>
                            <div class = 'post-recente-imagem'>
                                <img src='./storage/{{$post->image}}' alt='{{$post->description}}' />
                            </div>
                            <div class = 'info-post-recente'>
                                <p class = 'descricao-post-recente'>
                                    {{$post->title}}
                                </p>
                                <h6>{{ date('d/m/Y', strtotime($post->created_at)) }}</h6>
                            </div>
                        </div>
                        </a>
                    @endforeach
                    </div>
                </div>
            <div>
        </div>
    </section>
@endsection
