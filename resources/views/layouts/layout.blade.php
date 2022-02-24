<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
     <meta name="viewport"
           content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
           <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>{{ $title }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="container collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="col-6 navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Главная</a>
        </li>
        <li class="nav-item offset-3">
          <a class="nav-link active" aria-current="page" href="{{ route('post.create') }}">Создать пост</a>
        </li>
      </ul>
      <form class="d-flex my-2 my-lg-0" action="{{ route('post.index') }}">
        <input class="form-control me-2" type="search" name="search" placeholder="Найти пост..." aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
      </form>
    </div>
  </div>
  </nav>

<div class="container">
  @if($errors->any())
    @foreach($errors->all() as $error)
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ $error }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    @endforeach
  @endif
  @if(session('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  @yield( 'content' )
</div>

  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>