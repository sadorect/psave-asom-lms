
<div class="sidebar-widget">
  <div class="image-widget">
      <a href="#"><img src="{{asset('frontend/img/blog-1.jpg')}}" alt="Image"></a>
  </div>
</div>



<div class="sidebar-widget">
  <div class="image-widget">
      <a href="#"><img src="{{asset('frontend/img/blog-2.jpg')}}" alt="Image"></a>
  </div>
</div>


<div class="sidebar-widget">
  <h2 class="widget-title">Categories</h2>
  <div class="category-widget">
      <ul>
          @foreach ($categories as $item)
         @if ($item->outreaches->count() > 0)
         <li><a href="{{route('category.list', $item->id)}}">{{$item->name}}</a><span>({{$item->outreaches->count()}})</span></li>    
         @else
         <li><a href="{{route('category.list', $item->id)}}">{{$item->name}}</a><span>({{$item->posts->count()}})</span></li>      
         @endif
          @endforeach
         
          
      </ul>
  </div>
</div>

<div class="sidebar-widget">
  <div class="image-widget">
      <a href="#"><img src="{{asset('frontend/img/blog-3.jpg')}}" alt="Image"></a>
  </div>
</div>

<div class="sidebar-widget">
  <h2 class="widget-title">Tags Cloud</h2>
  <div class="tag-widget">
      <a href="">National</a>
      <a href="">International</a>
      <a href="">Economics</a>
      <a href="">Politics</a>
      <a href="">Lifestyle</a>
      <a href="">Technology</a>
      <a href="">Trades</a>
  </div>
</div>

<div class="sidebar-widget">
  <h2 class="widget-title">Text Widget</h2>
  <div class="text-widget">
      <p>
          Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea nec eros. Nunc eu enim non turpis id augue.
      </p>
  </div>
</div>