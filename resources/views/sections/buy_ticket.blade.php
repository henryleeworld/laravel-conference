<section id="buy-tickets" class="section-with-bg wow fadeInUp">
  <div class="container">

    <div class="section-header">
      <h2>購票</h2>
      <p>讓各界朋友都能有機會在場域中相互交流，增加不同的視角與感想，期待你一同參與！</p>
    </div>

    <div class="row">
      @foreach($prices as $price)
        <div class="col-lg-4">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">{{ $price->name }}</h5>
              <h6 class="card-price text-center">${{ number_format($price->price) }}</h6>
              <hr>
              <ul class="fa-ul">
                @foreach($amenities as $amenity)
                  <li @if(!$price->amenities->contains($amenity->id))class="text-muted"@endif>
                    <span class="fa-li"><i class="fa fa-{{ $price->amenities->contains($amenity->id) ? 'check' : 'times' }}"></i></span>{{ $amenity->name }}
                  </li>
                @endforeach
              </ul>
              <hr>
              <div class="text-center">
                <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="{{ Str::slug($price->name) }}">立即購買</button>
              </div>
            </div>
          </div>
        </div>
      @endforeach
  </div>

  <!-- Modal Order Form -->
  <div id="buy-ticket-modal" class="modal fade">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">購票</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="#">
            <div class="form-group">
              <input type="text" class="form-control" name="your-name" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="your-email" placeholder="Your Email">
            </div>
            <div class="form-group">
              <select id="ticket-type" name="ticket-type" class="form-control" >
                <option value="">-- 選擇你的票種 --</option>
                @foreach($prices as $price)
                  <option value="{{ Str::slug($price->name) }}">{{ $price->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="text-center">
              <button type="submit" class="btn">立即購買</button>
            </div>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

</section>
