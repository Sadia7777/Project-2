@extends('layouts.frontend')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
      <h1>{{$welcome->name}}</h1>
      <h2>{{$welcome->heading}}</h2>
      <a href="{{url('/about')}}" class="btn-about">About Me</a>
    </div>
  </section><!-- End Hero -->

 @endsection