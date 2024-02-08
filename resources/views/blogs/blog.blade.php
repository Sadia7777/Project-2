@extends('layouts.frontend')

@section('catecorise')
<div class="container py-5">
    <div class=" section-header text-center">
        <h2 class="p-5">CATEGORISES</h2>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        @foreach ($blogCategories as $item)
        <a class="category" href="{{url('/category-wise-blogs',$item->id)}}">{{$item->blog_categories}}</a>
        @endforeach
      </div>
    </div>
</div>
@endsection

@section('content')
<style>
  section {
      padding: 0px;
  }
  </style>

     <!-- ======= Start All Blog Section ======= -->
     <section id="recent-blog-posts" class="recent-blog-posts">
      <div class="container" data-aos="fade-up">

      <div class=" section-header text-center">
            <h2>All Blog Posts</h2>
            <p class="p-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi, nisi? Doloremque asperiores iure suscipit tempore laudantium deleniti fugiat officia, perferendis assumenda veritatis distinctio repellat, amet fugit a quisquam magni non.</p>
      </div>

      <div class="row gy-5">
            @foreach ($blogs as $data_item)
                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="post-item position-relative h-100">

                      <div class="post-img position-relative overflow-hidden">
                        <img src="{{asset('images/blogs/'.$data_item->image)}}" alt="">
                      </div>

                      <div class="post-content d-flex flex-column ">
                            <h3 class="post-title">{{Str::limit($data_item->title,50)}}</h3>
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
            <div class="row text-center py-5">
              <div class="col-12">
                <a class="category" href="{{url('/all-blog')}}">See All</a>
              </div>
            </div>
      </div>
    </section>
    <!-- End All Blog Section -->

 @endsection