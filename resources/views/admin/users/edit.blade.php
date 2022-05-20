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
        <label for="inputPhone" class="form-label">admin</label>
        <input type="text" class="form-control" name="admin" value="{{ $user->admin }}" placeholder="xxx@.xx">
</div>
                  
              <br>
      <div class="col-12">
                <button type="submit" class="btn btn-primary">Обновить</button>
      </div>
    </form>
  </div>      
</div>









@endsection