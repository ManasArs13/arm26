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

@if(count($posts) < 1)
   <div class="alert alert-warning">
        <strong>Постов нет. Нажмите, чтобы создать </strong> 
        <a href="{{ route('posts.create')}}" class="btn btn-outline-primary" aria-current="page">Добавить пост</a>
   </div>
@endif

@foreach ($posts as $post)



<div class="card text-centr">
    <div class="card-header">
      <form action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="post">
        <a href="{{ route('posts.create')}}" class="btn btn-outline-primary" aria-current="page">Добавить пост</a>
        <a href="{{ route('posts.edit', ['id' => $post->id])}}" class="btn btn-outline-primary" aria-current="page">Редактировать</a>
      @csrf
      @method('DELETE')
        <input type="submit" class="btn btn-danger" value="Удалить">
      </form>
     
    </div>
  
    
    <div class="card-body">
      <h5 class="card-title">{{ $post -> name }}</h5>
      <p class="card-text">{{ $post -> description }}</p>
      <p class="card-text">Автор: {{ $post -> user -> name}} ({{ $post -> phone_number}})</p>
            
      <div class="hstack gap-3">
        <div class="">Категория: {{ $post -> category ->title }}</div>
        <div class="ms-auto">{{ $post -> price }} р.</div>
      </div>
    </div>
     
  </div>







@endforeach

@endsection