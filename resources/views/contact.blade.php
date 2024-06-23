@extends('layout')

@section('content')
<div
      class="hero page-inner overlay"
      style="background-image: url('{{ asset('frontend/images/hero_bg_1.jpg') }}')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">Contact Us</h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                  Contact
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row">
          <div
            class="col-lg-4 mb-5 mb-lg-0"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="contact-info">
              <div class="address mt-2">
                <i class="icon-room"></i>
                <h4 class="mb-2">Location:</h4>
                <p>
                  43 Raymouth Rd. Baltemoer,<br />
                  London 3910
                </p>
              </div>

              <div class="open-hours mt-4">
                <i class="icon-clock-o"></i>
                <h4 class="mb-2">Open Hours:</h4>
                <p>
                  Sunday-Friday:<br />
                  11:00 AM - 2300 PM
                </p>
              </div>

              <div class="email mt-4">
                <i class="icon-envelope"></i>
                <h4 class="mb-2">Email:</h4>
                <p>info@Untree.co</p>
              </div>

              <div class="phone mt-4">
                <i class="icon-phone"></i>
                <h4 class="mb-2">Call:</h4>
                <p>+1 1234 55488 55</p>
              </div>
            </div>
          </div>
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <h3>Get in Touch!</h3>
            <p>
            OUR BERAWA OFFICE
WE SELL PROPERTIES AND LAND IN THE PROVINCE OF BALI
Our office in Jl. Pantai Berawa No. 41 - Canggu consists of a team of experienced real estate agents and listing agents. From here we take care of sales of chosen properties and land listings in all the popular areas of the province of Bali such as Canggu, Pererenan, Seseh, Bumbak and Bingin. Welcome to contact us for a free valuation or a casual meeting to discuss how we can help you with your property.
Call +62 818 0888 7711 or CONTACT@PROPERTIABALI.COM
            </p>
          </div>
        </div>
      </div>
    </div>
@endsection