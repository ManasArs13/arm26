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
 



  
</div>