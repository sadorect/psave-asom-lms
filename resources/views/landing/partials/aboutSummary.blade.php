    @php
       $abouts = \App\Models\About::all(); 
    @endphp

@foreach ($abouts as $about)
<div class="about">
  <div class="container">
      <div class="row align-items-center">
        @if ($about->hero)
        <div class="col-lg-6">
            <div class="about-img" data-parallax="scroll" data-image-src="{{$about->banner}}"></div>
        </div>   
        @else
        <div class="col-lg-6">
            <div class="about-img" data-parallax="scroll" data-image-src="{{asset('frontend/img/about.jpg')}}"></div>
        </div> 
        @endif
         
          <div class="col-lg-6">
              <div class="section-header">
                  <p>Learn About Us</p>
                  <h2>{{$about->AboutTitle}}</h2>
              </div>
              <div class="about-tab">
                  <ul class="nav nav-pills nav-justified">
                      <li class="nav-item">
                          <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" data-toggle="pill" href="#tab-content-2">Our Belief</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                      </li>
                  </ul>

                  <div class="tab-content">
                      <div id="tab-content-1" class="container tab-pane active">
                        @php
                        $about['About'] = \Illuminate\Support\Str::markdown($about->About);
                        @endphp
                       
                        {!!$about->About!!}
                      </div>
                      <div id="tab-content-2" class="container tab-pane fade">
                        @if($about->mission)
                        @php
                        
                        $about['mission'] = \Illuminate\Support\Str::markdown($about->mission);
                        @endphp
                       
                       <!---- Scrolling text -->
                       <div class="scrolling-text-container">
                        <div class="scrolling-text-content">
                            {!!$about->mission!!}
                         
                        </div>
                      </div>
                      
                        
                        @endif
                      </div>
                      <div id="tab-content-3" class="container tab-pane fade">
                        @php
                        $about['vision'] = \Illuminate\Support\Str::markdown($about->vision);
                        @endphp
                       
                        {!!$about->vision!!}
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endforeach