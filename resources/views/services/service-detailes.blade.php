

@extends('layouts/frontend')

@section('content')
   <!-- ======= Service Details Section ======= -->
   <section id="service" class="service">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row g-5 py-5">

        <div class="col-lg-12">
          <article class="service-details">
            <div class="post-img" style="height: 600px; width:100%;">
                <img src="{{asset('images/services/'.$data->image)}}" alt="" style="height: 100%; width:100%">
            </div>
            <h2 class="title">{{$data->title}}</h2>
            <div class="content">
              <p>
                {{$data->description}}
              </p>
            </div><!-- End post content -->
          </article><!-- End blog post -->
        </div>

      </div>
    </div>
  </section><!-- End Service Details Section -->

@endsection

