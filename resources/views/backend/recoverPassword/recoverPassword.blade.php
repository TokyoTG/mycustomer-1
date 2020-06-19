@extends('layout.authbase')

@section('custom_css')
<link href="{{ asset('/backend/assets/css/recoverPassword.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="d-flex justify-content-between reg">
    <div class="regInfo p-3 position-relative w-50">
        <h4 class="">
            MyCustomer
        </h4>
        <div class="ml-5 p-4 backBtn">
            <a href="#" class="align-items-center">
                <svg version="1.1" id="back" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16" height="16"
                    viewBox="0 0 199.404 199.404" style="enable-background:new 0 0 199.404 199.404;"
                    xml:space="preserve" fill="currentColor">
                    <g>
                        <polygon
                            points="135.412,0 35.709,99.702 135.412,199.404 163.695,171.119 92.277,99.702 163.695,28.285" />
                    </g>
                </svg>
                Back
            </a>
        </div>
        <div class="">
        
            <div class="regForm">
                <form action="" id="regForm" class="">
                    <h1>Recover Password</h1>
                    <div class="formInput">
                        <input type="email" placeholder="Email Address" name="email" autocomplete="email">
                            
                    </div>

                    <button type="submit" class="regFromBtn">Send Reset Code</button>
                </form>

            </div>

            <div class="ft fixed-bottom px-3 d-flex justify-content-between align-items-center w-50">
                <div class="copyright mt-3 p-0">
                    <p><span class="mr-3">&copy</span> MyCustomer 2020</p>
                </div>
                <div class="d-flex">
                    <a class="nav-item nav-link" href="#">Home</a>
                    <a class="nav-item nav-link" href="#">Legal Terms</a>
                </div>
            </div>
        </div>
    </div>
    <div class="regImg w-50 position-relative">
        <div class="">
            <a href="#" class="signIn">Sign In</a>
        </div>
        <div class="hero">
            <h1><span>My</span>Customer</h1>
            <p>Recover Your Password</p>
        </div>
    </div>
</div>
@endsection