@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Вы уже вошли на сайт') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    
                    <a class="btn btn-outline-primary" href="{{ route('post.index') }}">Перейти на главную страницу</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
