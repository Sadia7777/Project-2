@extends('layouts.backend')

@section('content')
<div class="container py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
           <div class="col-6">

                <form class="row g-3 form-control" action="{{url('/skill-update',$skills->id)}}"  method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="col-12">
                        <label for="skill">Skills</label>
                        <input type="text" class="form-control" name="skill" value="{{$skills->skill}}">
                    </div>
                    <div class="col-12">
                        <label for="percent">Percent</label>
                        <input type="percent" class="form-control" name="percent" value="{{$skills->percent}}">
                    </div>
                    <div class="col-12 text-center pb-2">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div> 
                </form>

           </div>
        </div>
    </div>
</div>
@endsection
