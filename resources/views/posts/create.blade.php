<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
     <meta name="viewport"
					 content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
           <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Laravblog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
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
          <a class="nav-link active" aria-current="page" href="/">Создать пост</a>
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

  @if( isset($_GET['search']) )
    @if( count($posts) > 0 )
      <h2>Результаты поиска по запросу "<?= $_GET['search'] ?>"</h2>
      <p class="lead">Всего {{ trans_choice('найден|найдено', count($posts))  }} {{ count($posts)}} {{ trans_choice('пост|поста|постов', count($posts), [], 'ru')}}:</p>
    @else
      <h2>По запросу "<?= $_GET['search'] ?>" ничего не найдено!</h2>
      <a class="btn btn-outline-primary" href="{{ route('post.index') }}">Отобразить все посты</a>
    @endif
  @endif

  <div class="row">
    @foreach( $posts as $post )
			<div class="col-6">
        <div class="card">
          <div class="card-header"><h2>{{ $post->short_title }}</h2></div>
          <div class="card-body">
            <div class="card-img" style="background-image: url({{ $post->img ?? asset('img/default.jpg') }});"></div>
            <div class="card-author">Автор: {{ $post->name }}</div>
            <a href="#" class="btn btn-outline-primary">Посмотреть пост</a>
          </div>
        </div>
    </div>
		@endforeach
  </div>
  @if(!isset($_GET['search']))
  {{ $posts->links() }}
  @endif
</div>
</body>
</html>
