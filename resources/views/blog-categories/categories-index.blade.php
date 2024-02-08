@extends('layouts.backend')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <a class="btn btn-primary" href="{{url('/services-categories-create')}}">Add New Category</a>
        </div>
      <div class="col-12">
      <div class="table-responsive py-5">
      <table class="table">
          <thead>
              <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Blog categories</th>
                  <th scope="col" class="text-center">Action</th>
              </tr>
          </thead>
  
          <tbody>
              @foreach ($categories as $item)
              <tr>
                 <td>{{$loop->index+1}}</td>
                  <td>{{$item->blog_categories}}</td> 

                  <td class="text-center">
                      <a href="{{url('/categories-edit',$item->id)}}" class="btn btn-danger">edit</a>
                      <a href="{{url('/categories-delete',$item->id)}}" class="btn btn-primary">delete</a>
                      {{-- <a href="{{url('/categories-update',$item->id)}}" class="btn btn-primary">show</a> --}}
                  </td>
              </tr>
               @endforeach
          </tbody>
  
      </table>
      </div>
      </div>
    </div>
</div>
@endsection