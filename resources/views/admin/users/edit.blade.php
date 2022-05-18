@extends('admin.home')

@section('content')




<div class="card text-left">
  <div class="card-header">
    <form action="{{ route('users.update', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
      <div class="col-md-6">
                <h3>РЕДАКТИРОВАНИЕ ПОСТА</h3><br>
                <label for="inputName" class="form-label">Название категории</label>
                <input type="text" class="form-control" name="title" value="{{ $category->title }}">
      </div>
      <div class="col-12">
                <label for="inputPhone" class="form-label">Порядок сортировки</label>
                <input type="text" class="form-control" name="sort_id" value="{{ $category->sort_id }}" placeholder="000">
      </div>
      <div class="col-md-6"><br>
        <label for="image">Картинка для категории</label>
        <input type="file" class="form-control-file" name="img">
      </div>
              
              <br>
      <div class="col-12">
                <button type="submit" class="btn btn-primary">Обновить</button>
      </div>
    </form>
  </div>      
</div>









@endsection