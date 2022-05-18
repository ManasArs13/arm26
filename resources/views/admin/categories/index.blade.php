@extends('admin.home')

@section('content')

@if (session('status'))
<div class="alert alert-success alert-dismissible mt-4" role="alert">
   {{ session('status') }}
</div>
@endif



@foreach ($categories as $category)



<div class="card text-left">
    <div class="card-header">
      <form action="{{ route('categories.destroy', ['id' => $category->id])}}" method="post">

        <a href="{{ route('categories.create')}}" class="btn btn-outline-primary" aria-current="page">Добавить категорию</a>
        <a href="{{ route('categories.show', ['id' => $category->id])}}" class="btn btn-outline-primary" aria-current="page">Просмотр постов</a>
        <a href="{{ route('categories.edit', ['id' => $category->id])}}" class="btn btn-outline-primary" aria-current="page">Редактировать</a>
      @csrf
      @method('DELETE')
        <input type="submit" class="btn btn-danger" value="Удалить">
      </form>
    </div>
    <div class="card-body">
      <h5 class="card-title">{{ $category -> title }}</h5>
      <p class="card-text">Порядок сортировки: {{ $category -> sort_id }}</p>
            <div class="hstack gap-3">
                 <img  src="/storage/{{ $category -> img }}" alt="fff">
            </div>
      </div>
  </div>


@endforeach

@endsection