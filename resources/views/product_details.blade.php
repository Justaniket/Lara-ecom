@extends('layout/front_layout/front_design')
@section('content')


      <div class="container">
        <div class="row mb-5 mt-3">
            <div class="col-md-6 card d-flex justify-content-center align-items-center">
                <div class="big-img">
                    <img src="{{asset('adminImages/products_images/'.$Products->image) }}" alt="product Image" height="255" width="250" >
                </div>
            </div>
            <div class="col-md-6 card pt-3 detailinfo d-flex flex-column">
                <h2>
                    {{$Products->name}}
                </h2>
                <h2><del></del></h2>
                <h2> Price:${{$Products->price}}</h2>
                <hr />
                <h3>About this item</h3>
                <h5>
                  The boAt WCDV 20W PD Wall Charger supports 20W Power Delivery Fast
                  Charging and is compatible with all PD supported devices. Take
                  charge of time with 20W Power Delivery Fast Charging.
                </h5>
                <div class="d-flex flex-column">
                    <div class="d-flex mb-2 mt-3 justify-content-center ">
                    <h5>Quantity:</h5>
                    <select class="form-select quantity addquantity"  aria-label="Default select example">
                        <option selected>1</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                        <option value="3">5</option>
                       
                      </select>
                    </div>
                    <div class="detailaddbtn">
                        <a class="detailbtn" href="{{url('/cart/'.$Products->id)}}"
                          ><button type="button" class="btn btn-success ">
                            Add to cart
                          </button></a>
                    </div>
                    <div class="">
                        <button type="button" class="btn btn-primary btn-lg  mb-2">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection ('content')