@extends('layouts.frontend')
@section('content')

<div class="slider-container">
    <div class="slider">
        @foreach ($banner as $data)
        <img src="{{ asset('images/banner_picture/'. $data->banner_picture) }}" class="slide">
        @endforeach
    </div>
</div>


<!-- About Section -->
<section id="about" class="about section">

    <div class="container" data-aos="fade-up">
        <div class="row gx-0">

            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                    <h2>Politeknik Piksi Ganesha At A Glancee</h2>
                    <p>
                        Piksi Ganesha Bandung Polytechnic, also known as the Purple Campus, is a private college located
                        in Bandung, West Java, Indonesia. Piksi Ganesha Bandung Polytechnic is affiliated with Dharma
                        Patria Kebumen Polytechnic.
                    </p>
                    <div class="text-center text-lg-start">
                        <a href="{{('about')}}"
                            class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Read More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ asset('front/assets/img/gedungpiksi.png') }}" class="img-fluid" alt="">
            </div>

        </div>
    </div>

</section><!-- /About Section -->

<!-- Values Section -->
<section id="values" class="values section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Acreditation</h2>
        <p>Politeknik Piksi Ganesha<br></p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach ($accreditation as $data)
                <div class="swiper-slide">
                    <img src="{{asset('images/accreditation_picture/'.$data->accreditation_picture)}}" alt="">
                </div>
                @endforeach

                <!-- Duplikat Slide untuk Efek Loop Mulus -->
                @foreach ($accreditation as $data)
                <div class="swiper-slide">
                    <img src="{{asset('images/accreditation_picture/'.$data->accreditation_picture)}}" alt="">
                </div>
                @endforeach
            </div>
        </div>



    </div>

</section><!-- /Values Section -->

<!-- Recent Posts Section -->
<section id="recent-posts" class="recent-posts section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>News Posts</h2>
        <p>Recent posts form our news</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-5">
            @foreach ($news as $data)

            <div class="col-xl-4 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="{{ asset('images/news_picture/' . $data->news_picture) }}" alt="" class="img-fluid">
                        <span class="post-date">{{$data->date}}</span>
                    </div>

                    <div class="post-content d-flex flex-column">

                        <h3 class="post-title">{{$data->title}}</h3>

                        <hr>

                        <a href="{{ route('newsDetail',$data->id) }}" class="readmore stretched-link"><span>Read
                                More</span><i class="bi bi-arrow-right"></i></a>
                    </div>

                </div>
            </div><!-- End post item -->
            @endforeach
            <section id="blog-pagination" class="blog-pagination section">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <ul>
                            <li>
                                <a href="{{ url('news') }}" class="active">Preveous</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div><!-- End post item -->
</section><!-- /Recent Posts Section -->

<section id="achievement" class="achievement section">
    <div class="container_achievement custom-swiper">
        <!-- Wrapper untuk Swiper -->
        <div class="swiper-wrapper">
            @foreach ($achievement as $data)
            <div class="swiper-slide">
                <img src="{{ asset('images/achievement_picture/' . $data->achievement_picture) }}" width="300px"
                    alt="Achievement">
            </div>
            @endforeach
        </div>
    </div>
</section>



@endsection
