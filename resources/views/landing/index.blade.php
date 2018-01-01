@extends('layouts.frontend.app')

@section('content')
<div class="row" style="padding-top: 0;width: 100%;">
    <div class="col-xs-7 col-md-7" style="border-right: 1px solid #000000;">
        <img src="/images/header/landing-page-left-Headline.png" width="103%">
        <img src="/images/header/landing-page-left-bodytext.png" width="103%">
    </div>
    <div class="col-xs-5 col-md-5">
    <div class="container" style="margin-left: 60px;width: 400px;">
        <h2 class='height_30'>&nbsp;</h2>
        <h1 style="color:black;font-weight:bolder;">{{ trans('auth.become') }}<br>{{ trans('auth.aRawFish') }}</h1>
        @include('landing.signupForm')
    </div>
    </div>
</div>

@endsection

@section('page-scripts-bottom-after-app')
    <script src="/js/auth/signup.js"></script>
@endsection