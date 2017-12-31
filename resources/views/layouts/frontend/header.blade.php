{{--<style>--}}
    {{--.navbar {--}}
        {{--min-height: 160px;--}}
    {{--}--}}

    {{--.navbar-brand {--}}
        {{--padding: 0 15px;--}}
        {{--height: 160px;--}}
        {{--line-height: 160px;--}}
    {{--}--}}

    {{--.navbar-toggle {--}}
        {{--/* (80px - button height 34px) / 2 = 23px */--}}
        {{--margin-top: 23px;--}}
        {{--padding: 9px 10px !important;--}}
    {{--}--}}

    {{--@media (min-width: 768px) {--}}
        {{--.navbar-nav > li > a {--}}
            {{--/* (80px - line-height of 27px) / 2 = 26.5px */--}}
            {{--padding-top: 26.5px;--}}
            {{--padding-bottom: 26.5px;--}}
            {{--line-height: 27px;--}}
        {{--}--}}
    {{--}--}}
{{--</style>--}}
{{--<nav class="navbar navbar-default navbar-static-top">--}}
        {{--<div class="navbar-header">--}}
            {{--<a class="navbar-brand" href="/"><img height="30" src="/images/rawfish_logo.png"></a>--}}
        {{--</div>--}}
        {{--<div class="collapse navbar-collapse js-navbar-collapse">--}}
            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--<li><a href="#">LOGIN</a></li>--}}
                {{--<li><a href="#">SIGN UP</a></li>--}}
                {{--<li><a href="#">中/En</a></li>--}}
                {{--<li><a href="#">More</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
{{--</nav>--}}

<!-- Navigation -->
<div class="row" style="background-color: white">
&nbsp;
</div>
<nav class="navbar navbar-default navbar-static-top">
        <div class="navbar-header">
            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img height="30" src="/images/rawfish_logo.png">
            </a>
        </div>

        <div class="collapse navbar-collapse js-navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
            <li><a href="#">LOGIN</a></li>
            <li><a href="#">SIGN UP</a></li>
            <li><a href="#">中/En</a></li>
            <li><a href="#">More</a></li>
            <li><a href="#">&nbsp;</a></li>
            </ul>
        </div>
</nav>
