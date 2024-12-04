@extends('layouts.frontend')
@section('content')
   <!-- Values Section -->
    <section id="acreditation" class="acreditation section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Acreditation</h2>
        <p>Politeknik Piksi Ganesha<br></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
        @foreach ($akred as $data)
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
                <img src="{{asset('images/accreditation_picture/'.$data->accreditation_picture)}}" alt="">
              <h5>{{$data->accreditation_name}}</h5>
            </div>
          </div><!-- End Card Item -->
          @endforeach
        </div>
      </div>
    </section><!-- /Values Section -->
@endsection