@extends('layouts.backend')

@section('content')
<div class="container py-5">
  <div class="row">
  <div class="col-12">
        <a href="{{url('/setting-edit')}}" class="btn btn-primary">Setting Item</a>
    </div>
    <div class="col-12">
    <div class="table-responsive py-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Logo</th>
                <th scope="col">Favicon</th>
                <th scope="col">twitter</th>
                <th scope="col">Facebook</th>
                <th scope="col">Instragram</th>
                <th scope="col">Linkedin</th>
                <th scope="col">map</th>
                <th scope="col">Location</th>
                <th scope="col">Email</th>
                <th scope="col">Call</th>
                <th scope="col" class="text-center">Action</th>
            </tr>

        </thead>
        <tbody>
             <tr>
                <td>{{$settings->id}}</td>
                <td>{{$settings->title}}</td>

                <td>
                    <img src="{{asset('images/settings/'.$settings->logo)}}" style="width:80px; height:auto;" alt="">
                </td>
                <td>
                    <img src="{{asset('images/settings/'.$settings->favicon)}}" style="width:80px; height:auto;" alt="">
                </td>

                <td>{{$settings->tuter}}</td>
                <td>{{$settings->facebook}}</td>
                <td>{{$settings->instragram}}</td>
                <td>{{$settings->linkdin}}</td>
                <td>{{$settings->map}}</td>
                <td>{{$settings->location}}</td>
                <td>{{$settings->call}}</td>
                <td>{{$settings->email}}</td>

                <td class="text-center">
                    <a href="{{url('/settings-edit',$settings->id)}}" class="btn btn-danger">Edit</a>
                </td>
            </tr> 

        </tbody>
    </table>
    </div>
    </div>
  </div>
</div>
@endsection
