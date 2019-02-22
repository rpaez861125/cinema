   <!-- Categories Widget -->
   <div class="card my-4">
    <h5 class="card-header">Categorías</h5>
    <div class="card-body">
      <div class="justify-content-around">
          <ul class="list-group mb-3">
            @foreach ($categories as $category)
                <li class="list-group-item d-flex justify-content-between lh-condensed" >
                    <div>
                        <a href="{{ route('front.search.category', $category->name) }}">
                            <h6 class="my-0">{{ $category->name }}</h6>
                        </a>                       
                    </div> 
                    <span class="badge-pill badge-danger badge" >{{ $category->articles->count() }}</span>                    
                </li>   
            @endforeach
                       
          </ul>                            
      </div>
    </div>
  </div>

  <!-- Tags Widget -->
  <div class="card my-4">
    <h5 class="card-header">Tags</h5>
    <div class="card-body">
        @foreach ($tags as $tag)
            <a href="{{ route('front.search.tag', $tag->name)}}">
                 <span class="badge badge-pill badge-primary">{{ $tag->name }}</span>
            </a>
        @endforeach
                
    </div>
  </div>