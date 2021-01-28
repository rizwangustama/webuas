  <section id="kelima">
    <div class="container1">
      <div class="grid">
        @foreach ($items as $item)
        <div class="colom" style="background: url({{Storage::url($item->image)}}); background-repeat: no-repeat; background-size: cover;">
          <div class="container">
            <div class="wrap">
              {{-- <div class="kiri">
                <div class="konten">
                  <img src="/image/icon/icon-office.webp" alt="">
                  <p>2 Commercials</p>
                </div>
              </div> --}}
              {{-- <div class="kanan">
                <div class="border1">
                  <p>ALL PROJECTS</p>
                </div>
              </div> --}}
            </div>
            <div class="bawah">
              <p>{{$item->title}}</p>
              <p>{{$item->kota}}</p>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </section>



<!-- <section id="page-signature">
    <div class="container1">
        <div class="grid">
            @foreach ($items as $item)
            <div class="colom" style="background: url({{Storage::url($item->image)}});"></div>
            @endforeach
        </div>
    </div>
</section> -->
