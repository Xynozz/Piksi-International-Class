@extends('layouts.frontend')
@section('content')
<section id="team" class="team section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h1><b>Organization</b></h1>
    </div><!-- End Section Title -->

    <div class="container_struktur">

        <div class="row gy-4 justify-content-center align-items-center">
            <div class="card_struktur">
                <div class="image-container_struktur">
                    <img src="{{ asset('front/assets/img/direktur.png') }}" alt="Team Member">
                    <div class="overlay">
                        <p class="overlay-text"><b>Director at POLITEKNIK PIKSI GANESHA BANDUNG</b></p>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <br>

        <div class="row gy-4">
            <div class="card_struktur">
                <div class="image-container_struktur">
                    <img src="{{ asset('front/assets/img/wadir.png') }}" alt="Team Member">
                    <div class="overlay">
                        <p class="overlay-text"><b>Deputy Director at POLITEKNIK PIKSI GANESHA BANDUNG</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section><!-- /Team Section -->
@endsection
