<header id="mainHeader">
    <div class="container">
        <div class="logo">
            <a href="/">윤클린</a>
        </div>
        <div class="option">
            <ul>
                <li><a href="/reserve">예약하기</a></li>
                <li><a href="#review">리뷰</a></li>
                <li><a href="#qna">고객센터</a></li>
                <li><a href="#my">내 신청내역</a></li>
            </ul>
        </div>
        <div class="user">
            <ul>
                @guest
                <li><a href="{{ route('login') }}">로그인</a></li>
                <li><a href="{{ route('register') }}">간편 회원가입</a></li>
                @else
                <li class="userLi">
                    <a href="#" id="cur_user">{{ Auth::user()->name }}</a>
                    <div class="dropdown">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    </div>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                @endguest
            </ul>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#cur_user').click(function() {
                $(this).siblings('.dropdown').toggle('slow');
            });
        });
    </script>
</header>
