@extends('admin.index')

@section('content')




<div class="card text-left">
    <div class="card-header">
        <h1 class="mt-2 mb-3">Создать пост</h1>
        <form method="post" action="">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Заголовок" required>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="excerpt" placeholder="Анонс поста" required></textarea>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="body" placeholder="Текст поста" rows="7" required></textarea>
            </div>
            <div class="form-group">
                <input type="file" class="form-control-file" name="image">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>
    <div class="card-body">
      <h5 class="card-title">d</h5>
      <p class="card-text">d</p>
      <p class="card-text">Автор: d</p>
            <div class="hstack gap-3">
                 <div class="">Категория: d</div>
                 <div class="ms-auto">d р.</div>
            </div>
      </div>
  </div>









@endsection