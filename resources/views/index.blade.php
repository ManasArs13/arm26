@extends('layouts.app')

@section('content')



<div class="container">
    @if (session('status'))
    <div class="alert alert-success alert-dismissible mt-4" role="alert">
       {{ session('status') }}
    </div>
    @endif


    <div class="row justify-content-center mt-5 mb-3 row-cols-3">



        <h2>Мои услуги</h2>
    </div>

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


                    <form action="{{ route('mypage.destroy', ['id' => $post->id])}}" method="post">
                    <a href="{{ route('mypage.edit', ['id' => $post->id])}}" class="btn btn-outline-primary">редактировать</a>
                    @csrf
      @method('DELETE')
                   

                    <input type="submit" class="btn btn-outline-danger" value="Удалить">
      </form>

                  </div>
                <div class="card-footer text-muted">
                    <p>Добавлен: {{ $post->created_at }}</p>
                </div>
            </div>
        @endforeach
    </div>



</div>


@endsection
