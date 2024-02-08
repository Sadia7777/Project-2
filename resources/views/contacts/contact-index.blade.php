@extends('layouts.backend')

@section('content')
<div class="container py-5">
  <div class="row">
    <div class="col-12">
    <div class="table-responsive py-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                {{-- <th scope="col">heading</th>
                <th scope="col">Map</th> --}}
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Messages</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($blogs as $item)
            <tr>
               <td>{{$loop->index+1}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->subject}}</td>
                <td>{{$item->message}}</td>

                <td class="text-center">
                    <a href="{{url('/contacts-delete',$item->id)}}" class="btn btn-primary">delete</a>
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

