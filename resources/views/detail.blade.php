@extends('layout')

@section('content')
<div
      class="hero page-inner overlay"
      style="background-image: url('images/hero_bg_3.jpg')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">
              {{ $property->nama }}
            </h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item">
                  <a href="{{ route('property') }}">Properties</a>
                </li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                  {{ $property->nama }}
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-7">
            <div class="img-property-slide-wrap">
              <div class="img-property-slide">
                @foreach($property->galleries as $gallery)
                <img src="{{ Storage::url($gallery->image) }}" alt="Image" class="img-fluid" />
                @endforeach
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <h2 class="heading text-primary">{{ $property->nama }}</h2>
            <p class="meta">{{ $property->lokasi }}</p>
            <p class="text-black-50">
              {!! $property->description !!}
            </p>

            <div class="d-block agent-box p-5">
              <div class="img mb-4">
                <img
                  src="{{ Storage::url($property->agent->image) }}"
                  alt="Image"
                  class="img-fluid"
                />
              </div>
              <div class="text">
                <h3 class="mb-0">{{ $property->agent->nama }}</h3>
                <div class="meta mb-3">{{ $property->agent->jabatan }}</div>
                <p>
                {{ $property->agent->description }}
                </p>
                <ul class="list-unstyled dark-hover d-flex">
                    <li class="list-inline-item mt-3">
                    <a style="font-size: 1rem;background: #00204a;color: #fff;padding: .85rem 2rem;border-radius: 12px;" href="https://api.whatsapp.com/send/?phone={{ $property->agent->kontak_whatsapp }}">
                      <span class="icon-whatsapp"></span> Message
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection