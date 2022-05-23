<div class="container">
<br><br>
  <h2>КАТЕГОРИИ УСЛУГ</h2>
  <br>
  


<div class="row row-cols-1 row-cols-md-5 g-4">
  @foreach ($categories as $category)
    <div class="col">
      <div class="card h-50 text-center">
        <img src="{{ Storage::url($category -> img) }}" class="card-img-top" alt="изображение">
        <div class="card-body">
          <h5 class="card-title">{{ $category -> title }}</h5>
          </div>
        
         <div class="d-grid gap-2">
          <button class="btn btn-primary" type="button">Button</button>
          </div>
          
      </div>
    </div>

   

  @endforeach
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Разное</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>



  
</div>