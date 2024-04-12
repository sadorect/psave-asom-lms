@php
$outreaches = \App\Models\Outreach::all();
@endphp
<!-- Top Bar Start -->


<div class="causes">
  <div class="container">
      <div class="section-header text-center">
          <p>Popular Causes</p>
          <h2>Let's know about charity causes around the world</h2>
      </div>
      <div class="owl-carousel causes-carousel">
        @foreach ($outreaches as $outreach)
          <div class="causes-item">
              <div class="causes-img">
                  <img src="{{ $outreach->bannerImage }}" alt="Image">
              </div>
              <div class="causes-progress">
                  <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                          <span>85%</span>
                      </div>
                  </div>
                  <div class="progress-text">
                      <p><strong>Raised:</strong> {{ $outreach->raised }}</p>
                      <p><strong>Goal:</strong> {{ $outreach->goal }}</p>
                  </div>
              </div>
              <div class="causes-text">
                  <h3>{{ $outreach->title }}</h3>
                  @php
                  $outreach['details'] = \Illuminate\Support\Str::markdown($outreach->details);
                  @endphp
                 
                  <p>{!! $outreach->details !!}</p>
              </div>
              <div class="causes-btn">
                  <a href="{{route('outreach.details', $outreach->id)}}" class="btn btn-custom">Learn More</a>
                  <a class="btn btn-custom">Donate Now</a>
              </div>
          </div>
          
          @endforeach
      </div>
  </div>
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <h1>WHO AM I</h1>
    </div>
  </div>
</div>