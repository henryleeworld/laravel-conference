<section id="schedule" class="section-with-bg">
  <div class="container wow fadeInUp">
    <div class="section-header">
      <h2>活動流程</h2>
      <p>下面是我們的活動流程</p>
    </div>

    <ul class="nav nav-tabs" role="tablist">
      @foreach($schedules as $key => $day)
        <li class="nav-item">
          <a class="nav-link{{ $key === 1 ? ' active' : '' }}" href="#day-{{ $key }}" role="tab" data-toggle="tab">第 {{ $key }} 天</a>
        </li>
      @endforeach
    </ul>

    <h3 class="sub-heading">議程組保留議程與時程表的變更權利。</h3>

    <div class="tab-content row justify-content-center">
      @foreach($schedules as $key => $day)
        <div role="tabpanel" class="col-lg-9 tab-pane fade{{ $key === 1 ? ' show active' : '' }}" id="day-{{ $key }}">
          @foreach($day as $schedule)
            <div class="row schedule-item">
              <div class="col-md-2"><time>{{ \Carbon\Carbon::parse($schedule->start_time)->format("h:i A") }}</time></div>
              <div class="col-md-10">
                @if($schedule->speaker)
                  <div class="speaker">
                    <img src="{{ $schedule->speaker->photo->getUrl() }}" alt="{{ $schedule->speaker->name }}">
                  </div>
                @endif
                <h4>{{ $schedule->title }} @if($schedule->speaker)<span>{{ $schedule->speaker->name }}</span>@endif</h4>
                <p>{{ $schedule->subtitle }}</p>
              </div>
            </div>
          @endforeach
        </div>
      @endforeach
    </div>
  </div>
</section>
