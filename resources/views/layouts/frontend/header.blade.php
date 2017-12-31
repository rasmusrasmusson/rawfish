<!-- Navigation -->
<div class="row" style="background-color: white">
&nbsp;
</div>
<nav class="navbar navbar-default navbar-static-top">
        <div class="navbar-header pull-left" >
            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}" style="padding-top: 0;">
                <img height="30"   src="/images/rawfish_logo.png">
            </a>
        </div>

        <div class="collapse navbar-collapse js-navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
            <li ><a href="{{ url('/') }}" class="login">LOGIN</a></li>
            <li><a  >&nbsp;</a></li>            
            <li><a href="{{ url('/') }}" class="language">中 / <span class='english' style="color: #20FF00;">En</span></a></li>
            <li><a >&nbsp;</a></li>
            <li><a href="{{ url('/') }}" style="padding-top: 3px;"><img  height="35" src="/images/header/navigator.png"></a></li>
            <li><a >&nbsp;</a></li>
            </ul>
        </div>

        <!-- mobile -->
        <div class="nav-mobile rawfish-nav">          
          <ul>        
            <li style="float: left;padding-top: 5px;">
            <a href="{{ url('/') }}" class="language" >中 / <span class='english' style="color: #20FF00;">En</span></a></li>   
         <li>
            <a href="{{ url('/') }}" style=" "><img  height="30" src="/images/header/navigator.png"></a>  </li>
          </ul>   
         
        <!-- mobile -->
</nav>