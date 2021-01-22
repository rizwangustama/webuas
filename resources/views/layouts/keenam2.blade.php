<section id="keenam">
    <!-- Swiper -->
    <div class="e-header">
      <h1>EVENTS & PROMOTIONS</h1>
    </div>
    <div class="swiper-container">
      <div class="swiper-wrapper">
          @forelse ($items as $item)
          <div class="swiper-slide">
            <div class="pembungkus">
              <div class="konten" style="margin-top: 50px">
                <img src="{{Storage::url($item->image)}}" alt="" style="width: 230px; height: 230px">
              </div>
              <div class="title">
                <p>{{ date('d F Y', strtotime($item->tanggal))}}</p>
                <h1>{{$item->title}}</h1>
              </div>
            </div>
          </div>
          @empty

          @endforelse



      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Arrows -->

    </div>
  </section>
