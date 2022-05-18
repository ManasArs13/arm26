@extends('admin.home')

@section('content')

@if (session('status'))
<div class="alert alert-success alert-dismissible mt-4" role="alert">
   {{ session('status') }}
</div>
@endif



@foreach ($users as $user)



<div class="card text-left">
    <div class="card-header">
      <form action="{{ route('users.destroy', ['id' => $user->id])}}" method="post">

        <a href="{{ route('users.create')}}" class="btn btn-outline-primary" aria-current="page">Добавить категорию</a>
        <a href="{{ route('users.show', ['id' => $user->id])}}" class="btn btn-outline-primary" aria-current="page">Просмотр постов</a>
        <a href="{{ route('users.edit', ['id' => $user->id])}}" class="btn btn-outline-primary" aria-current="page">Редактировать</a>
      @csrf
      @method('DELETE')
        <input type="submit" class="btn btn-danger" value="Удалить">
      </form>
    </div>
    <div class="card-body">
      <h5 class="card-title">{{ $user -> title }}</h5>
      <p class="card-text">Порядок сортировки: {{ $user -> sort_id }}</p>
            <div class="hstack gap-3">
                 <img  src="/storage/{{ $user -> img }}" alt="fff">
            </div>
      </div>
  </div>


@endforeach

@endsection