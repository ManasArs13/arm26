@extends('admin.index')

@section('content')

@foreach ($users as $user)



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
      <h5 class="card-title">Имя: {{ $user -> name }}</h5>
      <p class="card-text"> Email: {{ $user -> email }} </p>
      <p class="card-text">Зарегистрирован: {{ $user -> created_at }}</p>
            <div class="hstack gap-3">
                 <div class="">Постов: ???</div>
            </div>
      </div>
  </div>







@endforeach







@endsection