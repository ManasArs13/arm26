@extends('admin.home')

@section('content')




<div class="card text-left">
    <div class="card-header">
        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <h3>СОЗДАНИЕ КАТЕГОРИИ</h3><br>
                <label for="inputName" class="form-label">Название категории</label>
                <input type="text" class="form-control" name="title">
              </div>
              <div class="col-md-6">
                <label for="inputPhone" class="form-label">Порядок сортировки</label>
                <input type="text" class="form-control" name="sort_id" placeholder="000">
              </div>
              
              <div class="col-md-6"><br>
                <label for="image">Картинка для категории</label>
                <input type="file" class="form-control-file" name="img">
              </div>

              <br>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Создать!</button>
              </div>
          </form>
  </div>









@endsection