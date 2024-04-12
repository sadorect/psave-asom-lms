<div class="event">
  <div class="container">
      <div class="section-header text-center">
          <p>Upcoming Events</p>
          <h2>Be ready for our upcoming mission events</h2>
      </div>
      <div class="row">
        @php
            $events = \App\Models\Event::paginate(9);
        @endphp
        @foreach ($events as $item)
            
     
          <div class="col-lg-6">
              <div class="event-item">
                  <img src="{{ $item->image }}" alt="Image">
                  <div class="event-content">
                      <div class="event-meta">
                          <p>From: <i class="fa fa-calendar-alt"></i>{{$item->from}}</p>
                          <p>To: <i class="far fa-calendar"></i>{{$item->to}}</p>
                          <p>Destination: <i class="fa fa-map-marker-alt"></i>{{$item->location}}</p>
                      </div>
                      <div class="event-text">
                          <h3>{{$item->title}}</h3>
                          <p>
                              {{$item->summary}}
                          </p>
                          <a class="btn btn-custom" href="{{route('event.details', $item->slug)}}">Learn More</a>
                      </div>
                  </div>
              </div>
          </div>
          @endforeach
      </div>
  </div>
</div>