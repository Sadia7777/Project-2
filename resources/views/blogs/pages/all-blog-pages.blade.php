@extends('layouts.frontend')

@section('content')


<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">
    <div class="row gy-5 py-5" >
          @foreach ($blogs as $data_item)
              <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="post-item position-relative h-100">

                    <div class="post-img position-relative overflow-hidden" style="width:100%; height:300px;">
                      <img src="{{asset('images/blogs/'.$data_item->image)}}" style="width:100%; height:100%;" alt="">
                    </div>

                    <div class="post-content d-flex flex-column p-2">
                          <h3 class="post-title">{{$data_item->title}}</h3>
                      <div class="meta d-flex align-items-center">
                          <div class="d-flex align-items-center">
                            <p>
                              {{Str::limit($data_item->description,100)}}
                            </p>
                          </div>
                      </div>
                      <div class="d-flex align-items-center p-2" style="justify-content: space-between;">
                        <a>
                          Category :{{$data_item->BlogCategory->blog_categories}}
                          {{-- Category :{{$data_item->blog_category_id}} --}}
                        </a>
                        <a>
                          {{$data_item->created_at->format('d M Y')}}
                        </a>
                      </div>
                      <hr>
                      <a href="{{url('/blog-single',$data_item->id)}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
              </div><!-- End post item -->
          @endforeach
    </div>
  </section>
@endsection