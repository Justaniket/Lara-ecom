@extends('layout/front_layout/front_design')
@section('content')

<div class="d-flex justify-content-center mt-5 mb-5">
  <div class="mb-3 col-md-4 pt-5 card text-center borderleft">
    <h3 class=" ">Log in</h3>
    <label for="exampleInputEmail1" class="form-label five">Email or phone number</label>
    <input type="email" class="form-control mail mx-auto" id="exampleInputEmail1" aria-describedby="emailHelp">

    <div class="password-container">
      <label for="exampleInputPassword1" class="form-label five">Password</label>
      <div>
        <input type="password" class="form-control mail  mx-auto" id="exampleInputPassword1" name="password" />
</div>
    </div>
    <div class="eleven mt-4">
      <a href="{{url('/')}}">
      <button type="button" class="btn btn-success">Log in</button>
    </a>
    </div>
    <h6 class="ten">Or login with</h6>
    <div class="eight">
       <h3> <i class="fa-brands"></i></h3>
      <button type="button" class="btn btn-outline-primary face mb-3"> Facebook</button>

      <button type="button" class="btn btn-outline-danger mb-3">Google</button>
    </div>

  </div>

</div>
@endsection ('content')