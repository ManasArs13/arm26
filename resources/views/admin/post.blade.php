@extends('admin.index')

@section('content')
@foreach ($posts as $post)



<div class="card text-left">
    <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
        <li class="nav-item">
          <a class="nav-link active" href="#">редактировать</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">удалить</a>
        </li>
    </ul>
    </div>
    <div class="card-body">
      <h5 class="card-title">{{ $post -> name }}</h5>
      <p class="card-text">{{ $post -> description }}</p>
      <p class="card-text">Автор: {{ $post -> user -> name}}</p>
            <div class="hstack gap-3">
                 <div class="">Категория: {{ $post -> category ->title }}</div>
                 <div class="ms-auto">{{ $post -> price }} р.</div>
            </div>
      </div>
  </div>







@endforeach

@endsection