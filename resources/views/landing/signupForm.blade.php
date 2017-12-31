{!! Form::open(['class'=>'form-horizontal','url' => route('register'),'id'=>'signupForm']) !!}
    <div class="form-group">
        <label for="invitationCode">{{ trans('auth.invitationCode') }}</label>
        {!! Form::text('invitationCode', '0029837', ['id'=>'invitationCode','class' => 'form-control','required'=>'required','style'=>"width:200px;"]) !!}
    </div>
    <div class="form-group">
        <label for="Nickname">{{ trans('auth.nickname') }}</label>
        {!! Form::text('name', null, ['id'=>'name','class' => 'form-control','required'=>'required','style'=>"width:200px;"]) !!}
    </div>
    <div class="form-group">
        <div class="col-md-6" style="padding-left: 0;">
            <label for="firstName">{{ trans('auth.firsName') }}</label>
            {!! Form::text('firstName', '', ['id'=>'firstName','class' => 'form-control','required'=>'required','style'=>"width:200px;"]) !!}
        </div>
        <div class="col-md-6">
            <label for="lastName">{{ trans('auth.lastName') }}</label>
            {!! Form::text('lastName', '', ['id'=>'lastName','class' => 'form-control','required'=>'required']) !!}
        </div>
    </div>

    <div class="form-group">
        <label for="email">{{ trans('auth.emailMobileNumber') }}</label>
        {!! Form::text('email', '', ['id'=>'email','class' => 'form-control','required'=>'required','style'=>"width:200px;"]) !!}
        @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
             </span>
        @endif
    </div>
    <div class="form-group">
        <label for="password">{{ trans('auth.newPassword') }}</label>
        <input id="password" type="password" class="form-control" name="password" required style="width:200px;">
        {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group">
        <p style="font-size: 10px;">By signing up with Raw Fish you agree to our Terms,Data use
            <a href="#" class="font-color-green">policy</a> and <a href="#" class="font-color-green">Cookie</a> use.
        </p>
    </div>

    <div class="form-group text-center">
        <input width="100" type="image" src="/images/signup-button.png" border="0" alt="Submit" />
        <input id="password-confirm" type="hidden"   name="password_confirmation">
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