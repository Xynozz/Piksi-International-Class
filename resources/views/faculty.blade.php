@extends('layouts.frontend')
@section('content')
{{-- faculty section --}}
<section id="faculty" class="faculty-section">

    <div class="container section-faculty" data-aos="fade-up">
        <h2>Faculty</h2>
        <p>List of Faculties and Study Programs</p>
    </div>

    <div class="faculty-container">
        @foreach ($faculties as $data)
        <div class="faculty-card"
            onclick="document.getElementById('economi-busines').scrollIntoView({behavior: 'smooth'});">
            <h2>{{ $data->faculty_name }}</h2>
            <p>{{ $data->description }}</p>
        </div>
        @endforeach
    </div>
</section>
{{-- faculty section end --}}

<div class="container">
    <section id="economi-busines" class="prodi-section">
        <div class="container section-faculty" data-aos="fade-up">
            <h2>Programs Study</h2>
            <p>Economics And Business Study Program</p>
        </div>
        <div class="row-prodi">
            @foreach ($prody3 as $data)
            <div class="column-prodi">
                <div class="card-prodi">
                    <img src="https://via.placeholder.com/400x250" alt="Fakultas Teknologi Informasi"
                        class="card-image">
                    <h2>{{ $data->prody_name }}</h2>
                    <a type="button" class="btn btn" href="{{ route('detailprodi', $data->id) }}">Read More</a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section id="it-computer" class="prodi-section">
        <div class="container section-faculty" data-aos="fade-up">
            <h2>Programs Study</h2>
            <p>IT And Computer Study Program</p>
        </div>
        <div class="row-prodi">
            @foreach ($prody1 as $data)
            <div class="column-prodi">
                <div class="card-prodi">
                    <img src="https://via.placeholder.com/400x250" alt="Fakultas Teknologi Informasi"
                        class="card-image">
                    <h2>{{ $data->prody_name }}</h2>
                    {{-- <p>Deskripsi tentang Fakultas Teknologi Informasi.</p> --}}
                    <a type="button" class="btn btn" href="{{ route('detailprodi', $data->id) }}">Read More</a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section id="health" class="prodi-section">
        <div class="container section-faculty" data-aos="fade-up">
            <h2>Programs Study</h2>
            <p>Health Study Program</p>
        </div>
        <div class="row-prodi">
            @foreach ($prody2 as $data)
            <div class="column-prodi">
                <div class="card-prodi">
                    <img src="https://via.placeholder.com/400x250" alt="Fakultas Teknologi Informasi"
                        class="card-image">
                    <h2>{{ $data->prody_name }}</h2>
                    <a type="button" class="btn btn" href="{{ route('detailprodi', $data->id) }}">Read More</a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
