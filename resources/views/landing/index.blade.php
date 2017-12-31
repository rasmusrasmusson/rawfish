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
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nickname</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="row form-group">
                <div class="col">
                    <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Last name">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email / Mobile number</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">New password</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <p>By signing up with Raw Fish you agree to our Terms,Data use policy and
                    Cookie use.
                </p>
            </div>
        </form>

    </div>
    </div>
</div>
@endsection