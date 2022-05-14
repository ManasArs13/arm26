@extends('admin.index')

@section('content')

@foreach ($categories as $category)



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
      <h5 class="card-title">{{ $category -> title }}</h5>
      <p class="card-text">Порядок сортировки: {{ $category -> sort_id }}</p>
            <div class="hstack gap-3">
                 <div class="">Категория: q</div>
            </div>
      </div>
  </div>







@endforeach







@endsection