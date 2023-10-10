<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- 뷰포트(viewport) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="img/1/favicon.png" type="image/icon">
    <!-- swiper.css cdn으로 연결 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <!-- 사용자 정의 css 연결 -->
    <link rel="stylesheet" href="css/main.css">
    <!-- 제이쿼리 라이브러리 연결 -->
    <script src="js/code.jquery.com_jquery-3.7.1.js"></script>
    <!-- swiper.js cdn으로 연결 -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- gsap 플러그인 연결 대부분 외부 js파일들은 내 js파일 위에 연결해야 작동이 됨..-->
    <script src="js/gsap.min.js"></script>
    <!-- 사용자 정의 js 연결 -->
    <script src="js/main.js"></script>
    <title>동대문엽기떡볶이</title>
</head>
<body>
    <div class="wrap">
        <!-- header include -->
        <!-- 다른 폴더에 있으면 ../aaa/aaa.php 이렇게 경로설정하면댐 -->
        <?php include "header.php"; ?>
        <section class="sec1">
            <!-- 메인 슬라이드-swiper plugin -->
            <div class="swiper main">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                <!-- Slides -->
                    <div class="swiper-slide slide1">
                        <h1>엽떡앱</h1>
                        <p>다운로드</p>
                    </div>
                    <div class="swiper-slide slide2">
                        <h1>맛있게 매운</h1>
                        <p>동대문 엽기떡볶이</p>
                    </div>
                    <div class="swiper-slide slide3">
                        <h1>동대문엽기떡볶이</h1>
                        <p>7년 연속 수상</p>
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <section class="sec2 scrollSet">
            <div class="center">
                <div class="app_banner ani firstAni">
                    <h2>엽떡 앱 이용하기</h2>
                    <p>언제 어디서나 엽기떡볶이를<br>
                        모바일로 간편하게 주문하세요</p>
                    <button type="button">다운받기&#8594;</button>
                </div>
                <div class="menu_banner ani secondAni">
                    <h2>엽기떡볶이 메뉴</h2>
                    <p>맛있게 매운 맛으로 수 많은 고객들을<br>
                        매니아로 만든 맛</p>
                    <button type="button">보러가기&#8594;</button>
                </div>
            </div>
        </section> 
        <section class="sec3 scrollSet">
            <div class="center">
                <h2 class="ani firstAni">고객 안내사항</h2>
                <!-- swiper slide (새로운 소식 이벤트/공지사항)-->
                <div class="swiper news ani secondAni">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#">
                                <div class="subject event">이벤트 & 안내</div>
                                <h3>[안내] 2023 올해의<br>
                                브랜드 대상 수상</h3>
                                <p>2023 올해의 브랜드 대상<br>
                                떡볶이 부문 7년 연속 수상</p>
                                <span>2023-09-04</span>
                            </a>              
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <div class="subject event">이벤트 & 안내</div>
                                <h3>[안내] 소중한 마음을 전해<br>
                                요! 엽떡 선물하기</h3>
                                <p>쉽고 간편하게 엽떡 상품권 선물하<br>
                                기!</p>
                                <span>2023-08-03</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <div class="subject">공지사항</div>
                                <h3>신제품 '마라떡볶이'관련<br>
                                하여 안내드립니다.</h3>
                                <p>안녕하세요. 동대문엽기떡볶이입니<br>
                                다</p>
                                <span>2023-07-24</span>
                            </a>      
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <div class="subject">공지사항</div>
                                <h3>엽떡앱 주문량 증가로 인한<br>
                                일시적 서버 이슈 안내</h3>
                                <p>안녕하세요. (주)핫시즈너 동대문엽<br>
                                기떡볶이입니다.</p>
                                <span>2023-07-20</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <div class="subject">공지사항</div>
                                <h3>고객센터 운영시간<br>
                                변경 안내</h3>
                                <p>안녕하세요. (주)핫시즈너 동대문엽<br>
                                    기떡볶이입니다.</p>
                                <span>2023-07-19</span>
                            </a>
                        </div>
                    </div> <!-- swiper-wrapper-->

                    <!-- prev버튼, next버튼 -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <!-- pagination progress -->
                    <div class="swiper-pagination"></div>

                </div> <!--swiper-->
            </div>
        </section>
        <section class="sec4 scrollSet">
                <div class="content ani firstAni">
                    <h2>근처 지점안내 <div class="l_ico"><img src="img/4/Location_on.png" alt="위치아이콘"></div></h2><div class="center">
                    <p>현재 위치 : 서울특별시 동대문구</p>
                </div>
                <!-- swiper slide (새로운 소식 이벤트/공지사항)-->
                <div class="swiper location ani secondAni">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide l1">
                            <div class="over">
                                <h3>경희대점</h3>   
                                <button type="button">상세보기&#8594;</button>
                            </div>
                        </div>
                        <div class="swiper-slide l2">
                            <div class="over">
                                <h3>고려대점</h3>
                                <button type="button">상세보기&#8594;</button>
                            </div>
                        </div>
                        <div class="swiper-slide l3">
                            <div class="over">
                                <h3>장안점</h3>
                                <button type="button">상세보기&#8594;</button>
                            </div>
                        </div>
                        <div class="swiper-slide l4">
                            <div class="over">
                                <h3>신설동점</h3>
                                <button type="button">상세보기&#8594;</button>
                            </div>
                        </div>
                        <div class="swiper-slide l5">
                            <div class="over">
                                <h3>전농사거리점</h3>
                                <button type="button">상세보기&#8594;</button>
                            </div>
                        </div>
                    </div> <!-- swiper-wrapper-->

                    <!-- prev버튼, next버튼 -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <!-- pagination progress -->
                    <div class="swiper-pagination"></div>
                    
                </div> <!--swiper-->
            </div>
        
        </section>
        <section class="sec5 scrollSet">
            <div class="center">
                <h2 class="ani firstAni">창업 안내</h2>
                <div class="graph ani secondAni">
                    <div class="text t1">
                        <div class="t_left">
                            <div class="f_ico"><img src="/img/5/Dollar_Coin.png" alt="코인아이콘"></div>
                            <p>평균 월 매출</p>
                        </div>
                        <h2><span class="timer count-title count-number" data-to="4431" data-speed="1000"></span>만원</h2>
                    </div>
                    <div class="text t2">
                        <div class="t_left">
                            <div class="f_ico"><img src="/img/5/Account.png" alt="프로필아이콘"></div>
                            <p>창업 지원금</p>
                        </div>
                        <h2>최대<span class="timer count-title count-number" data-to="5000" data-speed="1000"></span>만원</h2>
                    </div>
                    <div class="text t3">
                        <div class="t_left">
                            <div class="f_ico"><img src="/img/5/LoveCircled.png" alt="하트아이콘"></div>
                            <p>평균 만족도</p>
                        </div>
                        <h2><span class="timer count-title count-number" data-to="99" data-speed="1000"></span>%</h2>
                    </div>
                    <div class="text t4">
                        <div class="t_left">
                            <div class="f_ico"><img src="/img/5/Trophy.png" alt="트로피아이콘"></div>
                            <p>수상</p>
                        </div>
                        <h3>2023 올해의 브랜드 대상 수상</h3>
                    </div>
                </div>
                
                <div class="back"></div>
            
            </div>
        </section>
        <section class="sec6 scrollSet">
            <div class="center">
                <div class="content ani firstAni">
                    <h2>창업 절차</h2>
                    <p>동대문 엽기떡볶이와 함께할<br>
                        점주 여러분을 찾습니다.</p>
                    <button type="button">창업비용&#8594;</button>
                    <button type="button">창업FAQ&#8594;</button>
                </div>

                <div class="step_banner">
                    <div class="step1 ani ani1">
                        <div class="over">
                            <p>STEP 1 &#62;<br>
                            <span>가맹문의 접수</span></p>
                        </div>
                    </div>
                    <div class="step2 ani ani2">
                        <div class="over">
                            <p>STEP 2 &#62; <br>
                            <span>가맹후보자 선정</span></p>
                        </div>
                    </div>
                    <div class="step3 ani ani3">
                        <div class="over">
                            <p>STEP 3 &#62; <br>
                                <span>정보공개서 제공 및 가맹계약</span></p>
                        </div>
                    </div>
                    <div class="step4 ani ani4">
                        <div class="over">
                            <p>STEP 4 &#62; <br>
                                <span>인테리어 도면작성</span></p>
                        </div>
                    </div>
                    <div class="step5 ani ani5">
                        <div class="over">
                            <p>STEP 5 &#62; <br>
                                <span>인테리어 시공 및 설비완료</span></p>
                        </div>
                    </div>
                    <div class="step6 ani ani6">
                        <div class="over">
                            <p>STEP 6 &#62; <br>
                                <span>조리교육 및 운영교육 실시/점검</span></p>
                        </div>
                    </div>
                    <div class="step7 ani ani7">
                        <div class="over">
                            <p>STEP 7 &#62; <br>
                                <span>각종시설 및 집기류 입고</span></p>
                        </div>
                    </div>
                    <div class="step8 ani ani8">
                        <div class="over">
                            <p>STEP 8 &#62; <br>
                                <span>지속적인 경영지도 및 관리</span></p>
                        </div>
                    </div>
                    <div class="step9 ani ani9">
                        <div class="over">
                            <p>STEP 9 &#62; <br>
                                <span>원, 부자재 입고</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer include -->
        <?php include "footer.php"; ?>
    </div>
    <!-- top include -->
    <?php include "top.php"; ?>

    
    <script>
        //sec5 영역의 count animation
        //숫자 애니메이션
    (function ($) {
      $.fn.countTo = function (options) {
        options = options || {};
        
        return $(this).each(function () {
          // set options for current element
          var settings = $.extend({}, $.fn.countTo.defaults, {
            from:            $(this).data('from'),
            to:              $(this).data('to'),
            speed:           $(this).data('speed'),
            refreshInterval: $(this).data('refresh-interval'),
            decimals:        $(this).data('decimals')
          }, options);
          
          // how many times to update the value, and how much to increment the value on each update
          var loops = Math.ceil(settings.speed / settings.refreshInterval),
            increment = (settings.to - settings.from) / loops;
          
          // references & variables that will change with each update
          var self = this,
            $self = $(this),
            loopCount = 0,
            value = settings.from,
            data = $self.data('countTo') || {};
          
          $self.data('countTo', data);
          
          // if an existing interval can be found, clear it first
          if (data.interval) {
            clearInterval(data.interval);
          }
          data.interval = setInterval(updateTimer, settings.refreshInterval);
          
          // initialize the element with the starting value
          render(value);
          
          function updateTimer() {
            value += increment;
            loopCount++;
            
            render(value);
            
            if (typeof(settings.onUpdate) == 'function') {
              settings.onUpdate.call(self, value);
            }
            
            if (loopCount >= loops) {
              // remove the interval
              $self.removeData('countTo');
              clearInterval(data.interval);
              value = settings.to;
              
              if (typeof(settings.onComplete) == 'function') {
                settings.onComplete.call(self, value);
              }
            }
          }
          
          function render(value) {
            var formattedValue = settings.formatter.call(self, value, settings);
            $self.html(formattedValue);
          }
        });
      };
      
      $.fn.countTo.defaults = {
        from: 0,               // the number the element should start at
        to: 0,                 // the number the element should end at
        speed: 500,           // how long it should take to count between the target numbers
        refreshInterval: 1,  // how often the element should be updated
        decimals: 0,           // the number of decimal places to show
        formatter: formatter,  // handler for formatting the value before rendering
        onUpdate: null,        // callback method for every time the element is updated
        onComplete: null       // callback method for when the element finishes updating
      };
      
      function formatter(value, settings) {
        return value.toFixed(settings.decimals);
      }
    }(jQuery));
    
    jQuery(function ($) {
      // custom formatting example
      $('.count-number').data('countToOptions', {
      formatter: function (value, options) {
        return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
      }
      });
      //스크롤 내릴 때마다 section안의 자식 콘텐츠들이 서서히 나타나는 애니메이션
      $(window).scroll(function(){
                //윈도우의 scrollTop값을 winTop변수에 저장
                let wTop=$(this).scrollTop();
                //$(this) : .scrollSet(인덱스 0~4)
                //offset().top : section의 top값
                let sTop=$('.sec5').offset().top-100;
                //section의 bottom값
                let sBottom=sTop+$(this).height();
                //만약 secTop이 winTop보다 작고, secBottom이 winTop보다 크면 section의 자식객체에 active 추가
                if(sTop < wTop && sBottom > wTop){
                    // start all the timers
                    $('.timer').each(count); 
                }               
            });
      // start all the timers
      //$('.timer').each(count);
      
      function count(options) {
      var $this = $(this);
      options = $.extend({}, options || {}, $this.data('countToOptions') || {});
      $this.countTo(options);
      }
    });

    



    </script>


</body>
</html>