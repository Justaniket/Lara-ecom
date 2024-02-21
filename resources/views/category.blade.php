@extends('layout/front_layout/front_design')

@section('content')

<div class="container d-flex mt-5 mb-5 col-md-10">
    @foreach($categories as $value) 
    @if($value->status == 1)
   <div class="card mr-3  align-items-center;" style="width: 18rem;">
       <img src="{{asset('adminImages/category_images/'.$value->image) }}" alt="Category Image" width="50" height="50">
        <div class="card-body d-flex justify-content-center">
          <p class="card-text">{{$value->name}}</p>
           </div>
        </div>
        @endif
 @endforeach
</div>

@endsection('content')



