@extends('admin.home')

@section('content')

@if (session('status'))
<div class="alert alert-success alert-dismissible mt-4" role="alert">
   {{ session('status') }}
</div>
@endif

@if (session('danger'))
<div class="alert alert-danger alert-dismissible mt-4" role="alert">
   {{ session('danger') }}
</div>
@endif

@foreach ($users as $user)



<div class="card text-left">
    <div class="card-header">
      <form action="{{ route('users.destroy', ['id' => $user->id])}}" method="post">

        <a href="{{ route('users.show', ['id' => $user->id])}}" class="btn btn-outline-primary" aria-current="page">Просмотр постов</a>
        <a href="{{ route('users.edit', ['id' => $user->id])}}" class="btn btn-outline-primary" aria-current="page">Редактировать</a>
      @csrf
      @method('DELETE')
        <input type="submit" class="btn btn-danger" value="Удалить">
      </form>
    </div>
    <div class="card-body">
      <h5 class="card-title">Имя: {{ $user -> name }}</h5>
      
      <p class="card-text">email: {{ $user -> email }}</p>

      
      @if ($user -> admin == 1)
      <span class="badge bg-warning text-dark">Администратор</span>
      @endif
     
      </div>
      
  </div>


@endforeach

@endsection