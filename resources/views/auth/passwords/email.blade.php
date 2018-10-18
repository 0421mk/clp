@extends('layouts.master')

@section('content')
<div class="authWrap">
    <div class="emailWrap">
        <div class="headerText">
            비밀번호를 찾기 안내를 위한<br>
            <b>이메일 주소</b>를 입력해주세요.
        </div>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="load">
            <i class='fas fa-circle-notch fa-spin fa-2x'></i> 4-5초의 시간이 소요됩니다.
        </div>

        <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
            @csrf

            <div class="row">
                <label for="email">이메일</label>

                <div>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="이메일을 입력해주세요.">

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="btnWrap">
                <button type="submit" class="btn btn-primary">
                    비밀번호 리셋 메일을 보냅니다.
                </button>
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.btnWrap button').click(function() {
            $('.load').css('display', 'block');
        });
    });
</script>
@endsection
