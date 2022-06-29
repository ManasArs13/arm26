@extends('layouts.app')

@section('content')
    
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center" id="banner_row">

            <div class="col-4">
                <form class="position-relative rounded-pill">
                    <input class="form-control me-2 rounded-pill" id='banner_input' type="search" placeholder="Поиск по сайту"
                        aria-label="Search">
                    <button class="btn btn-warning rounded-circle position-absolute" id='banner_button' type="submit"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-arrow-right">
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <polyline points="12 5 19 12 12 19" />
                        </svg></button>
                </form>
            </div>

            <div class="col-6">
                <h1 class="text-end text-warning" id="banner_h1">Услуги в Ставрпополе</h1>

            </div>

        </div>
    </div>




    <div class="container">
        <h2>Категории услуг</h2>

        <div class="row row-cols-3 mb-5">
            @foreach ($categories as $category)
            <a class="text-reset text-decoration-none" href="{{ route('category', ['category_id' => $category->id])}}">
                <div class="col"><img src="{{ Storage::url($category->img) }}"
                        class="category_img"><span><strong>{{ $category->title }}</strong></span></div>
                    </a>
                        @endforeach
        </div>


        <div class="row justify-content-center mt-3 pt-3 mb-3 row-cols-3">
            <h2>Все посты</h2>
        </div>

        @if(count($posts) < 1)
            <div class="alert alert-warning">
        <strong>Постов нет </strong> 
           </div>
@endif

        <div class="row justify-content-center pb-3 mb-3">
            @foreach ($posts as $post)
            <div class="card w-75 ">
                <h5 class="card-header bg-white border-bottom">
                    <div class="row g-0">
                        <div class="col-sm-5 col-md-7 mb-1">{{ $post->name }}</div>
                        <div class="col-7 col-md-5 mb-1">Автор: {{ $post->user_id }} (
                            
                            @auth
                            {{ $post->phone_number }}
                            @else
                            Номер скрыт
                            
                            @endauth
                            
                            
                            )
                        </div>
                    </div>
                </h5>
                <div class="card-body">
                    <p class="card-text">{{ $post->description }}</p>
                    <div class="row g-0">
                        <div class="col-sm-6 col-md-8 mb-4">Категория: {{ $post->category_id }}</div>
                        <div class="col-6 col-md-4 mb-4">{{ $post->price }} р.</div>
                    </div>
                                    </div>
                <div class="card-footer text-muted">
                    <p>Добавлен: {{ $post->created_at }}</p>
                </div>
            </div>
            @endforeach
        </div>



    </div>
@endsection
