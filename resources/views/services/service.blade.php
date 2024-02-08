@extends('layouts.frontend')

@section('content')
<main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          @foreach ($services as $item)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box iconbox-blue">
                <div class="image">
                  <img src="{{asset('images/services/'.$item->image)}}" style="height: 90px; width:90px; border-radius:50%;" alt="">
                </div>
                <h4><a href="">{{$item->title}}</a></h4>
                <p>
                  {{Str::limit($item->description,150)}}
                </p>
                <a href="{{url('/service-detailes',$item->id)}}">Learn More..</a>
              </div>
            </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->
@endsection

