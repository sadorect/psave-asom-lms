@php
$services = \App\Models\Service::all(); 
@endphp



<div class="service">
  <div class="container">
      <div class="section-header text-center">
          <p>What We Do?</p>
          <h2>We believe that we can save more lives with you</h2>
      </div>
      <div class="row">
        @foreach ($services as $service)
          <div class="col-lg-6 col-md-6">
              <div class="service-item">
                  <div class="service-icon">
                      <i class="flaticon-{{$service->icon}}"></i>
                  </div>
                  <div class="service-text">
                      <h3>{{$service->name}}</h3>
                      <p>{{$service->description}}</p>
                  </div>
              </div>
          </div>
        @endforeach 
      </div>
  </div>
</div>