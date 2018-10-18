@extends('layouts.master')

@section('content')
<div class="authWrap">
    <div class="resetWrap">
        <div class="card">
            <div class="headerText">
                고객님을 위한 맞춤 청소서비스<br>
                윤클린입니다.<br>
                <b>비밀번호를 재설정합니다.</b>
            </div>

            <form method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="row">
                    <label for="email">이메일</label>

                    <div>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus placeholder="이메일을 입력해주세요.">

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <label for="password">비밀번호</label>

                    <div>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="재설정할 비밀번호를 입력해주세요.">

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <label for="password-confirm">비밀번호 확인</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="비밀번호 확인">
                    </div>
                </div>

                <div class="btnWrap">
                    <button type="submit" class="btn btn-primary">
                        비밀번호 재설정
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
