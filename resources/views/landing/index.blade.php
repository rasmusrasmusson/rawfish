@extends('layouts.frontend.app')

@section('content')
<div class="row" style="padding-top: 0;width: 100%;">
    <div class="col-xs-7 col-md-7" style="border-right: 1px solid #000000;">
        <img src="/images/header/landing-page-left.png" width="103%">
    </div>
    <div class="col-xs-5 col-md-5">
    <div class="container" style="margin-left: 60px;width: 400px;">
        <h2 class='height_30'>&nbsp;</h2>
        <h1 style="color:black;font-weight:bolder;">BECOME<br>A RAWFISH</h1>
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            <div class="form-group">
                <label for="exampleFormControlInput1">Invitation code</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="0029837">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nickname</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="kevingates">
            </div>

            <div class="form-group">
                <div class="col-md-6" style="padding-left: 0;">
                    <label for="validationCustom01">First name</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="kevin" required>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02">Last name</label>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="gates" required>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Email / Mobile number</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email / mobile number">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">New password</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="password">
            </div>
            <div class="form-group">
                <p style="font-size: 10px;">By signing up with Raw Fish you agree to our Terms,Data use
                    <a href="#" class="font-color-green">policy</a> and <a href="#" class="font-color-green">Cookie</a> use.
                </p>
            </div>

            <div class="form-group text-center">

                <input width="100" type="image" src="/images/signup-button.png" border="0" alt="Submit" />

                {{--<svg width="100" height="100">--}}
                    {{--<circle cx="50" cy="50" r="40" fill="#20FF00" />--}}
                    {{--<text x="50%" y="50%" text-anchor="middle" fill="black" font-size="15px" dy=".3em">SIGN UP</text>--}}
                    {{--Sorry, your browser does not support inline SVG.--}}
                {{--</svg>--}}

                
            </div>
            <div class="form-group text-center">
                <p class="">or</p>
            </div>
            <div class="form-group text-center">
                <p><a href="#"><img width="200" src="/images/signup-with-wechat-link.png"></a></p>
            </div>
        </form>

    </div>
    </div>
</div>
@endsection