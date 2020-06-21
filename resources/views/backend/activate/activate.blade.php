@extends('layout.authbase')
@section("custom_css")


@stop



@section('content')

    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-4 bg-white">
                <div class=" m-h-100">
                    <div class="account-pages pt-5">
                        <div class="container-fluid">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-12 p-5">
                                            <div class="mx-auto mb-5">
                                                <a href="index.html">
                                                    <img src="assets/images/logo.png" alt="" height="24"/>
                                                    <h3 class="d-inline align-middle ml-1 text-logo">Shreyu</h3>
                                                </a>
                                            </div>

                                            <h6 class="h5 mb-0 mt-4">Activate Your Account</h6>
                                            <p class="text-muted mt-1 mb-5">
                                                Enter your phone number below to activate your account.
                                            </p>

                                            <form action="#" class="authentication-form">
                                                <div class="form-group">
                                                    <label class="form-control-label">Phone number</label>
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <select name="" id="" class="form-controlc"
                                                                        style="width: 100%; border:none">
                                                                    @for($i = 1; $i < 1000; $i++)
                                                                        <option value="{{$i}}">+{{$i}}</option>
                                                                    @endfor
                                                                </select>
                                                            </span>
                                                        </div>
                                                        <input type="number" min="1" class="form-control"
                                                               id="phonenumber" placeholder="444 444 444 444 444">
                                                    </div>
                                                </div>

                                                <div class="form-group mb-0 text-center">
                                                    <button class="btn btn-primary btn-block" type="submit"> Activate My Account
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div> <!-- end card-body -->
                            </div>
                            <!-- end card -->

                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <p class="text-muted">Back to <a href="pages-login.html"
                                                                     class="text-primary font-weight-bold ml-1">Login</a>
                                    </p>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->

                        </div> <!-- end col -->
                        <!-- end row -->
                        <!-- end container -->
                    </div>
                    <!-- end page -->


                </div>
            </div>
            <div class="col-lg-8 d-none d-md-block bg-cover"
                 style="background-image: url({{ asset('/backend/assets/images/login.svg') }});">

            </div>
        </div>
    </div>

@endsection


@section("javascript")



@stop
    