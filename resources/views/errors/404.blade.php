@extends('layouts.layout')
@section('content')
	<style>
	.page_404{ padding:40px 0; background:#fff; font-family: 'Arvo', serif;
	}

	.page_404  img{ width:100%;}

	.four_zero_four_bg{

		background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
		background-repeat: no-repeat;
		height: 400px;
		background-position: center;
	}


	.four_zero_four_bg h1{
		font-size:80px;
	}

	.four_zero_four_bg h3{
		font-size:80px;
	}

	.link_404{
		color: #fff!important;
		padding: 10px 20px;
		background: #39ac31;
		margin: 20px 0;
		display: inline-block;
		text-decoration: none;
	}
	.contant_box_404{ margin-top:-50px;}
	</style>
	<section class="page_404">
  <div class="container">
    <div class="row">
    <div class="col-sm-12 ">
    <div class="col-sm-10 col-sm-offset-1  text-center">
    <div class="four_zero_four_bg">
      <h1 class="text-center ">404</h1>


    </div>

    <div class="contant_box_404">
    <h3 class="h2">
    {{Auth::user()->name ?? __('Дружек')}}, пожалуй ты заблудился
    </h3>

    <p class="offset-sm-2 fs-4">страница на которую ты хотел перейти недоступна!</p>

    <a href="{{ route('index') }}" class="link_404">Вернуться на главную</a>
  </div>
    </div>
    </div>
    </div>
  </div>
	</section>
@endsection