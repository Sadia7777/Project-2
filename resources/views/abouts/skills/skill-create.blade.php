@extends('layouts.backend')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 pb-2">
            <a href="{{url('/skill-index')}}" class="btn btn-primary">Show Skills List</a>
        </div>
       <div class="col-6">

            <form class="row g-3 form-control" action="{{url('/skill-store')}}"  method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <label for="skill">Skills</label>
                    <input type="text" class="form-control" name="skill">
                </div>
                <div class="col-12">
                    <label for="percent">Percent</label>
                    <input type="text" class="form-control" name="percent">
                </div>
                <div class="col-12 text-center pb-2">
                    <button type="submit" class="btn btn-success">save</button>
                </div>
            </form>

       </div>
    </div>
</div>
@endsection
