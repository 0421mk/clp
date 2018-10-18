@extends('layouts.master')

@section('content')
<div class="authWrap">
    <div class="loginWrap">
        <div class="headerText">
            <b>반갑습니다 !</b><br>
            고객님을 위한 맞춤 청소서비스<br>
            윤클린입니다.
        </div>
        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf

            <div class="row">
                <label for="email"><b>이메일</b></label>
                <div>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="이메일을 입력해주세요.">

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row">
                <label for="password"><b>비밀번호</b></label>

                <div>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="비밀번호를 입력해주세요.">

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row auto_login">
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            자동 로그인
                        </label>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            비밀번호 찾기
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="btnWrap">
                    <button type="submit" class="btn btn-primary">
                        로그인
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
