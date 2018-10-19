@extends('layouts.master')

@section('content')
<div class="resWrap">
    <div class="container">
        <div class="title">
            온라인 예약 서비스
        </div>
        <div class="header_icons">
            <ul>
                <li class="_step1 on"><a href="#opt">서비스<br>종류</a></li>
                <li class="_step2 off"><a href="#opt">자택 규모</a></li>
                <li class="_step3 off"><a href="#opt">서비스<br>이용</a></li>
                <li class="_step4 off"><a href="#opt">인력<br>선택</a></li>
                <li class="_step5 off"><a href="#opt">서비스<br>디테일<br>종류</a></li>
                <li class="_step6 off"><a href="#opt">옵션</a></li>
            </ul>
        </div>
        <div class="contents step1 on">
            <div class="title">
                STEP1. 서비스 종류
            </div>
            <div class="opts">
                <ul>
                    <li class="typeA">일반청소</li>
                    <!-- <li class="typeB">입주/이사청소</li> -->
                    <!-- <li class="typeC">세차 - 저녁타임</li> -->
                </ul>
            </div>
        </div>
        <div class="typeA">
            <div class="contents step2">
                <div class="title">
                    STEP2. 자택 규모
                </div>
                <div class="opts">
                    <ul>
                        <li>아파트</li>
                        <li>빌라(투룸이상)</li>
                        <li>원룸</li>
                    </ul>
                </div>
            </div>
            <div class="contents step3">
                <div class="title">
                    STEP3. 서비스 이용
                </div>
                <div class="opts">
                    <ul>
                        <li>원데이</li>
                        <li>멤버쉽</li>
                    </ul>
                </div>
            </div>
            <div class="contents step4">
                <div class="title">
                    STEP4. 인력 선택
                </div>
                <div class="opts">
                    <ul>
                        <li>최진설</li>
                    </ul>
                </div>
            </div>
            <div class="contents step5">
                <div class="title">
                    STEP5. 서비스 디테일
                </div>
                <div class="opts">
                    <ul>
                        <li class="petService">펫펨 토탈 케어 서비스</li>
                        <li class="normalService">일반 청소 서비스</li>
                        <li class="maruService">마루코팅</li>
                    </ul>
                </div>
            </div>
            <div class="subContainer">
                <div class="petService">
                    <div class="contents step6">
                        <div class="title">
                            STEP6. 견종
                        </div>
                        <div class="opts">
                            <ul>
                                <li>대형견</li>
                                <li>소형견</li>
                            </ul>
                        </div>
                    </div>
                    <div class="contents step7">
                        <div class="title">
                            STEP7. 옵션
                        </div>
                        <div class="opts">
                            <ul>
                                <li>방</li>
                                <li>화장실</li>
                                <li>부엌</li>
                                <li>냉장고</li>
                                <li>창문</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="normalService">
                    <div class="contents step6">
                        <div class="title">
                            STEP6. 옵션
                        </div>
                        <div class="opts">
                            <ul>
                                <li>방</li>
                                <li>화장실</li>
                                <li>부엌</li>
                                <li>냉장고</li>
                                <li>창문</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="maruService">
                    <div class="contents step6">
                        <div class="title">
                            STEP6. 옵션
                        </div>
                        <div class="opts">
                            <ul>
                                <li>방</li>
                                <li>화장실</li>
                                <li>부엌</li>
                                <li>냉장고</li>
                                <li>창문</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="contents success">
                    success
                </div>
            </div>
        </div>
        <!-- <div class="typeB">
            <div class="contents step2">
                <div class="title">
                    STEP2. 자택 규모
                </div>
                <div class="opts">
                    <ul>
                        <li>아파트</li>
                        <li>빌라(투룸이상)</li>
                        <li>원룸</li>
                    </ul>
                </div>
            </div>
            <div class="contents step3">
                <div class="title">
                    STEP3. 인력<br>선택
                </div>
                <div class="opts">
                    <ul>
                        <li>최진설</li>
                    </ul>
                </div>
            </div>
            <div class="contents step4">
                <div class="title">
                    STEP4. 옵션
                </div>
                <div class="opts">
                    <ul>
                        <li>방</li>
                        <li>화장실</li>
                        <li>부엌</li>
                        <li>냉장고</li>
                        <li>창문</li>
                    </ul>
                </div>
            </div>
            <div class="contents success">
                success
            </div>
        </div>
        <div class="typeC">
            <div class="contents step2">
                <div class="title">
                    STEP2. 서비스<br>이용
                </div>
                <div class="opts">
                    <ul>
                        <li>원데이</li>
                        <li>멤버쉽</li>
                    </ul>
                </div>
            </div>
            <div class="contents step3">
                <div class="title">
                    STEP3. 인력<br>선택
                </div>
                <div class="opts">
                    <ul>
                        <li>최진설</li>
                    </ul>
                </div>
            </div>
            <div class="contents step6">
                <div class="title">
                    STEP6. 차 규모
                </div>
                <div class="opts">
                    <ul>
                        <li>대형</li>
                        <li>중형</li>
                        <li>소형</li>
                    </ul>
                </div>
            </div>
            <div class="contents success">
                success
            </div>
        </div> -->
        step6. 부터는 다음페이지로 넘기기
        데이터 굳히자 이번페이지에서 step5까지
    </div>
</div>
<script>
    // typeA
    $('.contents.step1 .opts li').click(function() {
        $('.step1 .opts li').removeClass("cur");
        $(this).addClass("cur");

        if($(this).hasClass( "typeA" )) {
            $('.container .typeA').show();
        }

        $('.typeA .contents.step2').show("slow");
        $('._step2').removeClass("off").addClass("on");
    });

    $('.typeA .contents.step2 .opts li').click(function() {
        $('.typeA .step2 .opts li').removeClass("cur");
        $(this).addClass("cur");

        $('.typeA .contents.step3').show("slow");
        $('._step3').removeClass("off").addClass("on");
    });

    $('.typeA .contents.step3 .opts li').click(function() {
        $('.typeA .step3 .opts li').removeClass("cur");
        $(this).addClass("cur");

        $('.typeA .contents.step4').show("slow");
        $('._step4').removeClass("off").addClass("on");
    });

    $('.typeA .contents.step4 .opts li').click(function() {
        $('.typeA .step4 .opts li').removeClass("cur");
        $(this).addClass("cur");

        $('.typeA .contents.step5').show("slow");
        $('._step5').removeClass("off").addClass("on");
    });

    $('.typeA .contents.step5 .opts li').click(function() {
        $('.typeA .step5 .opts li').removeClass("cur");
        $(this).addClass("cur");

        if($(this).hasClass( "petService" )) {
            $('.typeA .subContainer > div').css('display', 'none');
            $('.typeA .subContainer .petService').show().find('.step6').show('slow');
        } else if($(this).hasClass( "normalService" )) {
            $('.typeA .subContainer > div').css('display', 'none');
            $('.typeA .subContainer  .normalService').show().find('.step6').show('slow');
        } else if($(this).hasClass( "maruService" )) {
            $('.typeA .subContainer > div').css('display', 'none');
            $('.typeA .subContainer  .maruService').show().find('.step6').show('slow');
        }

        $('._step6').removeClass("off").addClass("on");
    });

    $('.typeA .subContainer .petService .step6 .opts li').click(function() {
        $('.typeA .subContainer .petService .step6 .opts li').removeClass('cur');
        $(this).addClass('cur');

        $('.typeA .subContainer .petService .step7').show('slow');
    });

    $('.typeA .subContainer .petService .step7 .opts li').click(function() {
        $('.typeA .subContainer .petService .step7 .opts li').removeClass('cur');
        $(this).addClass('cur');

        $('.typeA .subContainer .success').show('slow');
    });

    $('.typeA .subContainer .normalService .step6 .opts li').click(function() {
        $('.typeA .subContainer .normalService .step6 .opts li').removeClass('cur');
        $(this).addClass('cur');

        $('.typeA .subContainer .success').show('slow');
    });

    $('.typeA .subContainer .maruService .step6 .opts li').click(function() {
        $('.typeA .subContainer .maruService .step6 .opts li').removeClass('cur');
        $(this).addClass('cur');

        $('.typeA .subContainer .success').show('slow');
    });

    // var scrollPosition = $("#ID").offset().top;

    $('.header_icons ul li').click(function() {
        var test = $(this).attr('class');
        var test2 = test.split(" ");

        if(test2[1] == "on") {
            var cur_step = test2[0].substring(1);

            console.log(cur_step);

            if(cur_step == "step6") {
                var scrollPosition = $(".step5").offset().top + 100;
            } else if(cur_step == "step7") {
                var scrollPosition = $(".step5").offset().top + 200;
            } else {
                var scrollPosition = $("." + cur_step).offset().top;
            }

            $("body, html").animate({
                scrollTop: scrollPosition - 50
            }, 500);
        }
    });
    </script>
@endsection
