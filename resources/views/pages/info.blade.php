@extends('layouts.app')
@section('conten')

<div class="content">
<div id="breadcrumb">
    <div class="container">
        <div class="conten">
            <p>Home / Corporate Info / Who We Are</p>
            <h2>WHO WE ARE</h2>
        </div>
    </div>
</div>
<div id="isi">
    <div class="container4">
        <div class="grid">
            @forelse ($items as $item)

            <div class="item konten">
                <h4>PT BAKRIELAND DEVELOPMENT TBK</h4>
                <h1>{{ $item->title }}</h1>
                <h5>(publicly listed with code: ELTY)</h5>
                <p>{{ $item->article }}</p>
            </div>
            @empty
            @endforelse
            <div class="item gambar"></div>
            <div class="item gambar1">3</div>
            <div class="item gambar2">4</div>
            <div class="item poto">Comersial</div>
            <div class="item poto1">poto1</div>
            <div class="item kontenku">
                <div class="isi-konten">
                    <p>With a diversified business portfolio with more than 30 subsidiaries,vast land bank, and supported by more than ± 4,000 talented professionals, Bakrieland will continue to grow in line with its project developments in the years to come. The Company’s projects are spread throughout the prime areas in Jakarta, Bogor, Yogyakarta, Lampung, Sidoarjo, and Kalimantan.</p>
                    <p>Bakrieland is an integrated property company that puts the implementation of good corporate governance in its operations and is committed to implement corporate sustainability providing added values to all stakeholders.</p>
                </div>
            </div>
            <div class="item poto2">1</div>
            <div class="item poto3">1</div>

        </div>
    </div>
</div>

<section id="company">
    <div class="container4">
        <div class="grid-company">
            <div class="colom1">
                <h1>THE<br> COMPANY`S<br> PROJECTS</h1>
                <p>ARE SPREAD THROUGHOUT THE PRIME AREAS</p>
            </div>
            <div class="colom1 kota">
                <div class="colom-kota">
                    <div class="isi-kota">
                        <div class="image">
                            <img src="{{ ('image/pageinfo/icon/peta1.png') }}" alt="">
                        </div>
                        <p>Jakarta</p>
                    </div>
                </div>
                <div class="colom-kota">
                    <div class="isi-kota">
                        <div class="image">
                            <img src="{{ ('image/pageinfo/icon/peta2.png') }}" alt="">
                        </div>
                        <p>Bogor</p>
                    </div>
                </div>
                <div class="colom-kota">
                    <div class="isi-kota">
                        <div class="image">
                            <img src="{{ ('image/pageinfo/icon/peta3.png') }}" alt="">
                        </div>
                        <p>Yogyakarta</p>
                    </div>
                </div>
                <div class="colom-kota">
                    <div class="isi-kota">
                        <div class="image">
                            <img src="{{ ('image/pageinfo/icon/peta4.png') }}" alt="">
                        </div>
                        <p>Lampung</p>
                    </div>
                </div>
                <div class="colom-kota">
                    <div class="isi-kota">
                        <div class="image">
                            <img src="{{ ('image/pageinfo/icon/peta5.png') }}" alt="">
                        </div>
                        <p>Siduarjo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="breadcrumb">
    <div class="container">
        <div class="conten" style="height: 400px">
        </div>
    </div>
</div>
</div>

@endsection

