@extends('layouts.frontend')
@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Blog</h1>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="current">Blog</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->
        <div class="container">
            <div class="col-lg-12">
                <!-- Blog Posts Section -->
                <section id="blog-posts" class="blog-posts section">
                    <div class="container_news">
                        <div class="row gy-4">
                            @foreach ($news as $data)
                                <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="100">
                                    <article>
                                        <div class="post-img">
                                            <img src="{{ asset('images/news_picture/' . $data->news_picture) }}" alt="" class="img-fluid">
                                        </div>
                                        <h2 class="title">
                                            <a href="{{ route('newsDetail', $data->id) }}"><b>{{ $data->title }}</b></a>
                                        </h2>
                                        <div class="meta-top">
                                            <ul>
                                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> {{ $data->authors }}</li>
                                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time>{{ $data->date }}</time></li>
                                            </ul>
                                        </div>
                                        <br>
                                        <div class="read-more">
                                            <a href="{{ route('newsDetail', $data->id) }}">Read More</a>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        </div><!-- End blog posts list -->
                    </div>
                </section><!-- /Blog Posts Section -->
                <!-- Blog Pagination Section -->
                {{-- <section id="blog-pagination" class="blog-pagination section">
                    <div class="container">
                        <div class="d-flex justify-content-center">
                            <ul>
                                <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#" class="active">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li>...</li>
                                <li><a href="#">10</a></li>
                                <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </section> --}}
                <section id="blog-pagination" class="blog-pagination section">
                    <div class="container">
                        <div class="d-flex justify-content-center">
                            <ul>
                                <!-- Previous Button -->
                                <li>
                                    @if ($news->onFirstPage())
                                    <a href="#" class="disabled"><i class="bi bi-chevron-left"></i></a>
                                    @else
                                    <a href="{{ $news->previousPageUrl() }}"><i class="bi bi-chevron-left"></i></a>
                                    @endif
                                </li>

                                <!-- Page Numbers -->
                                @foreach ($news->getUrlRange(1, $news->lastPage()) as $page => $url)
                                <li>
                                    <a href="{{ $url }}" class="{{ ($page == $news->currentPage()) ? 'active' : '' }}">
                                        {{ $page }}
                                    </a>
                                </li>
                                @endforeach

                                <!-- Next Button -->
                                <li>
                                    @if ($news->hasMorePages())
                                    <a href="{{ $news->nextPageUrl() }}"><i class="bi bi-chevron-right"></i></a>
                                    @else
                                    <a href="#" class="disabled"><i class="bi bi-chevron-right"></i></a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div>


  </main>
@endsection
