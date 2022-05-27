<div class="container">
    <br><br>
      <h2>ВСЕ ПОСТЫ</h2>
      <br>
      
    
    
   
      @foreach ($posts as $post)

      <div class="card text-centr">
        <div class="card-header">
          <h5 class="card-title">{{ $post -> name }}</h5>
         
        </div>
      
        
        <div class="card-body">
          
          <p class="card-text">{{ $post -> description }}</p>
          <p class="card-text">Автор: {{ $post -> user -> name}} ({{ $post -> phone_number}})</p>
                
          <div class="hstack gap-3">
            <div class="">Категория: {{ $post -> category ->title }}</div>
            <div class="ms-auto">{{ $post -> price }} р.</div>
          </div>
        </div>
         
      </div>
    
       
    
      @endforeach
     
    
    </div>