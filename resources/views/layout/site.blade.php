<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <title> @yield('title') </title>

</head>
<body>
  <header>
    <nav class="navbar">
      <div class="logo">
        <img src="{{asset('assets/image/logo-adaptelas.png')}}" alt="Logo Adaptelas">
      </div>
      <ul class="links">
        <li><a class="link" href="{{route('lista.postagem')}}">Blog</a></li>
        <li><a class="link" href="#">Sobre min</a></li>
        <li><a class="link" href="{{route('blog.index')}}">Cadastrar Post</a></li>
      </ul>
    </nav>
  </header>

  @yield('content')

  <footer class ="footer">
    <div class="footer-aboutus">
      <div class= "footer-aboutus-text">
        <h4>Sobre o AdaptELAS</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque nulla felis, sit Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque nulla felis, sit Lorem ipsum dolor sit amet.</p>
      </div>
      <div class= "footer-aboutus-image">
         <img src="{{asset('assets/image/logo-adaptelas.png')}}" alt="Logo Adaptelas">
      </div>
      <div class= "footer-aboutus-contact">

        <div class ="phone">
          <div class= 'phone-text'>
            <span>(99) 99999-0000</span>
          </div>
          <div class= 'phone-img'>
            <div class= "background-icons"><i class="fa-solid fa-phone"></i></div>
          </div>
        </div>

        <div class ="email">
          <div class= 'email-text'>
            <span>adaptelas@adapti.info</span>
          </div>
          <div class= 'email-img'>
          <div class= "background-icons">
            <i class="fa-solid fa-envelope"></i>
            </div>
          </div>
        </div>

        <div class ="instagram">
          <div class= 'instagram-text'>
            <span>@adaptiempresajunior</span>
          </div>
          <div class= 'instagram-img'>
          <div class= "background-icons">
            <i class="fa-brands fa-instagram"></i>
            </div>
          </div>
        </div>

        <div class ="site">
          <div class= 'site-text'>
            <span>www.adapti.info</span>
          </div>
          <div class= 'site-img'>
          <div class= "background-icons">
            <i class="fa-solid fa-globe"></i>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="footer-adapti">
      <p class="text-footer">Desenvolvido com <span>❤</span> © 2022 Adapti - Soluções Web.</p>
      <div class="container-icons">
        <a href="facebook.com" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="facebook.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        <a href="facebook.com" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>

      </div>
    </div>
  </footer>

  <script src="https://kit.fontawesome.com/980c3ce44b.js" crossorigin="anonymous"></script>
</body>
</html>
