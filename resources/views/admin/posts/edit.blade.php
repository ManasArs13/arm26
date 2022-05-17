@extends('admin.home')

@section('content')




<div class="card text-left">
    <div class="card-header">
        <form action="{{ route('posts.destroy', ['id' => $post->id]) }}"" method="PUT">
            @csrf
            <div class="col-md-6">
                <h3>РЕДАКТИРОВАНИЕ ПОСТА</h3><br>
                <label for="inputName" class="form-label">Название товара или услуги</label>
                <input type="text" class="form-control" name="name" value="{{ $post->name }}">
              </div>
              <div class="col-12">
                <label for="inputDescription" class="form-label">Описание</label>
                <textarea class="form-control" name="description" rows="3" value="{{ $post->description }}"></textarea>
              </div>
              <div class="col-12">
                <label for="inputPhone" class="form-label">Номер телефона</label>
                <input type="text" class="form-control" name="phone_number" value="{{ $post->phone_number }}" placeholder="+7-ххх-ххх-хх-хх">
              </div>
              <div class="col-12">
                <label for="inputPrice" class="form-label">Цена</label>
                <input type="text" class="form-control" name="price" value="{{ $post->price }}" placeholder="000 000 000">
              </div>
              <div class="col-8">
                <label for="inputUser" class="form-label">Пользователь</label>
                <select name="user_id" class="form-select">
                  <option selected>{{ $post -> user -> name}}</option>
                 
                  @foreach ($users as $user)

                  <option value='{{ $user -> id }}'>{{ $user -> name }}</option>
                  

                  @endforeach

                </select>
              </div>
              <div class="col-8">
                <label for="inputState" class="form-label">Категория</label>
                <select name="category_id" class="form-select">
                  <option selected>{{ $post -> category -> title}}</option>
                  
                  @foreach ($categories as $category)

                  <option value='{{ $category -> id }}'>{{ $category -> title }}</option>

                  @endforeach

                </select>
              </div>
              <br>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Создать!</button>
              </div>
          </form>
  </div>









@endsection