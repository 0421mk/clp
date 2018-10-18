@extends('layouts.master')

@section('content')
<div class="authWrap">
    <div class="registerWrap">
        <div class="headerText">
            <b>반갑습니다 !</b><br>
            고객님을 위한 맞춤 청소서비스<br>
            윤클린입니다.
        </div>

        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
            @csrf

            <div class="row">
                <label for="name"><b>이름</b></label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="이름을 입력해주세요.">

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row">
                <label for="email"><b>이메일</b></label>

                <div>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="이메일을 입력해주세요.">

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

            <div class="row">
                <label for="password-confirm"><b>비밀번호 확인</b></label>

                <div>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="비밀번호 확인">
                </div>
            </div>

            <div class="btnWrap">
                <button type="submit" class="btn btn-primary">
                    회원가입
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
