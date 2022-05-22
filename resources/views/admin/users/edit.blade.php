@extends('admin.home')

@section('content')




<div class="card text-left">
  <div class="card-header">
    <form action="{{ route('users.update', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
      <div class="col-md-6">
                <h3>РЕДАКТИРОВАНИЕ ПОСТА</h3><br>
                <label for="inputName" class="form-label">Имя пользователя</label>
                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
      </div>
      <div class="col-12">
                <label for="inputPhone" class="form-label">email</label>
                <input type="text" class="form-control" name="email" value="{{ $user->email }}" placeholder="xxx@.xx">
      </div>
      <div class="col-12">
        <br>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="admin" id="exampleRadios1" value="1" checked>
          <label class="form-check-label" for="exampleRadios1">
            Администратор
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="admin" id="exampleRadios1" value="0" checked>
          <label class="form-check-label" for="exampleRadios1">
            Пользователь
          </label>
        </div>
        </div>
        <br>
             
      <div class="col-12">
                <button type="submit" class="btn btn-primary">Обновить</button>
      </div>
    </form>
  </div>      
</div>









@endsection