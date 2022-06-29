@extends('layouts.app')

@section('content')
    

    <div class="container">
        <h2>Категории</h2>

        <div class="row row-cols-3 mb-5">
            @foreach ($categories as $category)
            <a class="text-reset text-decoration-none" href="{{ route('category', ['category_id' => $category->id])}}">
                <div class="col"><img src="{{ Storage::url($category->img) }}"
                        class="category_img"><span><strong>{{ $category->title }}</strong></span></div>
                    </a>
                        @endforeach
        </div>


        <div class="row justify-content-center mt-3 pt-3 mb-3 row-cols-3">
            <h2>{{$title->title}}</h2>
        </div>

        @if(count($posts) < 1)
            <div class="alert alert-warning">
        <strong>В данной категории услуг нет</strong> 
        </div>
@endif

        <div class="row justify-content-center pb-3 mb-3">
            @foreach ($posts as $post)
            <div class="card w-75 ">
                <h5 class="card-header bg-white border-bottom">
                    <div class="row g-0">
                        <div class="col-sm-6 col-md-8 mb-1">{{ $post->name }}</div>
                        <div class="col-6 col-md-4 mb-1">Автор: {{ $post->user_id }} ({{ $post->phone_number }})
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
