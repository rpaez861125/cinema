@extends('admin.template.main')

@section('title', $article->title)
  

@section('content')   

<div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8 mt-2">
       
             {!! $article->content !!}
             <hr>
             <h3>Comentarios</h3>
             @foreach ($article->tags as $tag)
                 <span style="color: grey" >{{ $tag->name }}</span>
             @endforeach

             <div id="disqus_thread"></div>
            <script>

            /**
            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
            /*
            var disqus_config = function () {
            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            */
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://cinema-2.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
     
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
         @include('front.partials.aside')          
      </div>

    </div>
    <!-- /.row -->

  </div>


    
@endsection