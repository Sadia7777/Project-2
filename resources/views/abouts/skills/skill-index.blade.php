@extends('layouts.backend')

@section('content')
<div class="container py-5">
    <div class="row">
            <div class="col-12 pb-2">
                <a href="{{url('/skill-create')}}" class="btn btn-primary">Add New skills</a>
            </div>
            <div class="table-responsive py-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">skill</th>
                            <th scope="col">Percent</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skills as $item)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$item->skill}}</td> 
                                <td>{{$item->percent}}</td> 
                                <td class="text-center">
                                    <a href="{{url('/skill-edit',$item->id)}}" class="btn btn-danger">edit</a>
                                    <a href="{{url('/skill-delete',$item->id)}}" class="btn btn-primary">Delete</a>
                                </td> 
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
@endsection