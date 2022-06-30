@extends('layouts.app')

@section('content')



<div class="container">



    <div class="row">
        


        <form action="{{ route('mypage.store') }}" method="POST">
            @csrf
            <div class="col-12 mt-4">
                <h2>СОЗДАНИЕ ПОСТА</h2><br>
                <div class="row mb-3">
                  <label for="inputName" class="col-sm-2 col-form-label">Название</label>
                  <div class="col-sm-10">
                    <input type="text" v-model="post.name" id="inputName" class="form-control" name="name" required>
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputDescription" class="col-sm-2 col-form-label">Описание</label>
                  <div class="col-sm-10">
                    <input type="text" v-model="post.description" class="form-control" name="description">
                  </div>
                </div>
                  <div class="row mb-3">
                  <label for="inputPhone" class="col-sm-2 col-form-label">Номер телефона</label>
                  <div class="col-sm-10">
                    <input type="text" v-model="post.phone_number" class="form-control" name="phone_number" placeholder="+7-ххх-ххх-хх-хх" >
                  </div>
                </div>
                    <div class="row mb-3">
                  <label for="inputPrice" class="col-sm-2 col-form-label">Цена</label>
                  <div class="col-sm-10">
                    <input type="text" v-model="post.price" class="form-control" name="price">
                  </div>
                </div>
              
              <div class="row mb-3">
                <label for="inputCategory" class="col-sm-2 col-form-label">Категория</label>
                <div class="col-sm-10">
                <select name="category_id" class="form-select">
                  <option disabled>Выберите...</option>
                  
                  @foreach ($categories as $category)

                  <option value='{{ $category -> id }}'>{{ $category -> title }}</option>

                  @endforeach

                </select>
              </div>
            </div>
              <br>
              <div class="col-md-4">
                <button type="submit" class="btn btn-outline-success btn-lg w-50">Создать</button>
              </div>
            </div>
          </form>


    </div>





</div>


@endsection
