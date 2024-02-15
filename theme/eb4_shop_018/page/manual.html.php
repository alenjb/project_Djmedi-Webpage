<?php
/**
 * page file : //theme/eb4_shop_018/page/manual.html.php
 */
if (!defined('_EYOOM_')) exit;
add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/plugins/magnific-popup/magnific-popup.min.css" type="text/css" media="screen">',0);
?>
<style>
@media (min-width: 992px){
    .theme-manual .row > .col-lg-2 {
        padding-right: 0;
    }
    .theme-manual .row > .col-lg-10 {
        padding-left: 0;
    }
}
.theme-manual p, .theme-manual li {
    font-size: var(--small-font-size);
}
.theme-manual li.nav-item .nav-link {
	color: var(--text-color-light);
}
.theme-manual li.nav-item .nav-link.active {
	color: var(--primary-color);
}
/* 탭 네비 */
.theme-manual .tab-nav button {
    display: block;
    width: 100%;
    margin-bottom: 3px;
    color: #707070;
    border: 0 none;
}
.theme-manual .tab-nav button:hover {
    background-color: #dedede;
}
.theme-manual .tab-nav button.active {
    color: #fff;
    background-color: #999;
}
/* 탭 콘텐츠 */
.theme-manual .tab-content {
    padding: 30px;
    border:2px solid #999;
}
.theme-manual .tab-content .tab-content {
    padding: 0;
    border:0 none;
}
/* 타이틀 */
.theme-manual h3 {position:relative;font-size:20px;line-height:26px;font-weight:bold;border-bottom:1px solid #656565;padding:0 0 10px 15px;margin:0 0 10px}
.theme-manual h3 .title-bar {position:absolute;top:0;left:0;display:inline-block;width:5px;height:26px;background:#6284F3}
/* 테마 다운로드 */
/* 테마 설치 */
.install-step {margin-bottom:30px}
.install-step {padding:15px;background:#f8f8f8;box-shadow:0 0 1px rgba(0,0,0,0.35)}
.install-step h5 {line-height:45px;margin:0 0 10px;font-size:16px;position:relative}
.install-step h5 small {display:inline-block;height:45px;padding:7px 9px;margin-right:10px;background:#314b52;color:#fff;font-size:11px;text-align:center;text-transform:uppercase;vertical-align:middle}
.install-step h5 small span {font-size:18px;display:block;margin-top:2px}
.install-step p {line-height:24px;color:#707070;margin:10px 0 0;padding-left:30px;position:relative;word-break:keep-all}
.install-step p span {display:inline-block;position:absolute;left:0;top:0;width:24px;height:24px;line-height:24px;text-align:center;margin-right:5px;color:#fff;background:#FA3008;border-radius:100% !important}
.full-img {box-shadow:0 0 1px rgba(0,0,0,0.8);max-width:600px;margin:0 auto}
@media (min-width:1200px){
    .theme-step-1 , .theme-step-2 {height:520px}
    .theme-step-3 , .theme-step-4 {height:350px}
    .theme-step-5 , .theme-step-6 {height:690px}
}
/* 테마 설명과 설정 */
.theme-setup ul li {position:relative;margin-bottom:10px;padding-left:20px;}
.theme-setup ul li i {position:absolute;left:0;top:3px;color:#ccc}
.theme-setup ul li ul li {margin:5px 0 0;padding:0}
/* 테마 편집모드 */
.theme-editmode h5 {margin:0 0 10px;font-weight:700;font-size:14px}
.theme-editmode h6 {margin:0 0 5px;font-weight:700;font-size:14px;color:#555}
.theme-editmode .theme-list > li {position:relative;margin-bottom:20px}
.theme-editmode .theme-list .img-responsive {padding:10px;margin-bottom:10px;border:1px solid #ddd}
/* 테마 패치내역 */
.patch-list h5 {margin:0 0 10px;padding:5px 10px;font-size:14px;border-left:2px solid #999;background:#eee;color:#c0392b}
.patch-list li {position:relative;padding-left:10px}
.patch-list li span {position:absolute;left:0;top:0}
@media (max-width:991px){
    .theme-manual .tab-std .tab-nav-left {padding:0 !important;margin-bottom:10px}
}
</style>
<div class="theme-manual">
    <div class="row">
        <div class="col-lg-2">
            <div class="tab-nav nav" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active" id="v-pills-1st-tab" data-bs-toggle="pill" data-bs-target="#v-pills-1st" type="button" role="tab" aria-controls="v-pills-1st" aria-selected="true">테마 다운로드</button>
                <button class="nav-link" id="v-pills-2nd-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2nd" type="button" role="tab" aria-controls="v-pills-2nd" aria-selected="false">테마 설치</button>
                <button class="nav-link" id="v-pills-3rd-tab" data-bs-toggle="pill" data-bs-target="#v-pills-3rd" type="button" role="tab" aria-controls="v-pills-3rd" aria-selected="false">테마 설명과 설정</button>
                <button class="nav-link" id="v-pills-4th-tab" data-bs-toggle="pill" data-bs-target="#v-pills-4th" type="button" role="tab" aria-controls="v-pills-4th" aria-selected="false">테마 편집모드</button>
                <button class="nav-link" id="v-pills-6th-tab" data-bs-toggle="pill" data-bs-target="#v-pills-6th" type="button" role="tab" aria-controls="v-pills-6th" aria-selected="false">제품 게시판</button>
                <button class="nav-link" id="v-pills-5th-tab" data-bs-toggle="pill" data-bs-target="#v-pills-5th" type="button" role="tab" aria-controls="v-pills-5th" aria-selected="false">테마 패치내역</button>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-1st" role="tabpanel" aria-labelledby="v-pills-1st-tab">
                    <?php /* 테마 다운로드 */ ?>
                    <div class="theme-download">
                        <h3><span class="title-bar"></span> 테마 다운로드와 테마 키 확인(이윰넷에서 구매한 경우)</h3>
                        <p class="m-b-30">이윰넷에서 <strong>유료 테마</strong>를 스킨상점에서 구매하며 구매가 완료됐다면 <strong>마이페이지 &gt; 다운로드 관리 &gt; <span class="color-red">테마관리</span></strong>에서 테마키 확인 및 다운로드가 가능합니다.</p>
                        <div class="m-b-50">
                            <a class="image-popup-vertical-fit" href="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/theme_manage.jpg"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/theme_manage.jpg" alt="image" class="img-responsive"></a>
                        </div>

                        <h3><span class="title-bar"></span> 테마 다운로드와 주문번호 확인(sir.kr 콘텐츠몰에서 구매한 경우)</h3>
                        <p class="m-b-30">sir.kr 콘텐츠몰에서 구매를 한 경우 sir.kr에서 테마 다운로드를 받을 수 있으며 주문번호를 확인합니다.<br>주문번호는 테마 설치시 입력 사항 입니다.</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-2nd" role="tabpanel" aria-labelledby="v-pills-2nd-tab">
                    <?php /* 테마 설치 */ ?>
                    <div class="theme-install">
                        <div class="install-box">
                            <div class="sub-page-title" id="install_theme">
                                <h3><span class="title-bar"></span> 유료 테마 설치</h3>
                                <p class="m-b-30">영카트5 + 빌더 + 베이직테마가 설치된 상태에서 구매한 <strong class="color-orange">유료 테마 설치</strong> 과정입니다.</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="install-step theme-step-1">
                                        <h5><small>step <span>01</span></small> 다운로드 파일 확인 및 압축 풀기</h5>
                                        <a class="image-popup-vertical-fit" href="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img01.jpg"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img01.jpg" alt="image" class="img-responsive"></a>
                                        <p><span>1</span> 압축 프로그램을 통해 해당 파일 압축을 풉니다.</p>
                                        <p><span class="bg-yellow"><i class="fa fa-exclamation"></i></span> <strong class="color-red font-size-20">[ 중요! ]</strong></p>
                                        <p><i><strong class="color-black font-size-14">'<strong class="color-red">알집</strong>'으로 압축해제시 파일이 정상적으로 해제가 안될 수 있으며, 정상설치가 되지 않아 에러가 발생합니다.<br>반드시 '<strong class="color-red">7-zip, 반디집</strong>' 등을 사용해 압축 해제하시기 바랍니다.</strong></i></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="install-step theme-step-2">
                                        <h5><small>step <span>02</span></small> 폴더와 파일 리스트</h5>
                                        <a class="image-popup-vertical-fit" href="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img02.jpg"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img02.jpg" alt="image" class="img-responsive"></a>
                                        <p><span style="background:#FF4549"><i class="fa fa-info"></i></span> 디자인된 테마와 데모 사이트 콘텐츠 설정등의 파일 목록 입니다.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="install-step theme-step-3">
                                        <h5><small>step <span>03</span></small> ftp 프로그램을 통해 테마 업로드</h5>
                                        <a class="image-popup-vertical-fit" href="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img03.jpg"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img03.jpg" alt="image" class="img-responsive"></a>
                                        <p><span>1</span> ftp 프로그램(파일질라, 알ftp등)을 통해 서버로 파일 업로드 합니다.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="install-step theme-step-4">
                                        <h5><small>step <span>04</span></small> 테마설치하기</h5>
                                        <a class="image-popup-vertical-fit" href="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img04.jpg"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img04.jpg" alt="image" class="img-responsive"></a>
                                        <p><span>1</span> 사이트 '<strong>관리자 모드 &gt; 테마설정관리 &gt; 테마관리</strong>' 로 이동해 업로드한 테마의 '<strong class="color-red">테마설치하기</strong>' 버튼을 클릭합니다.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="install-step theme-step-5">
                                        <h5><small>step <span>05</span></small> 테마키 또는 상품주문번호 입력하기</h5>
                                        <a class="image-popup-vertical-fit" href="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img05.jpg"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img05.jpg" alt="image" class="img-responsive"></a>
                                        <p><span>1</span> 이윰 라이선스를 확인 후 동의 체크합니다.</p>
                                        <p><span>2</span> 구매한 테마키 또는 상품주문번호를 입력 후 '설치하기'를 클릭합니다.<br>(<strong class="color-red">이윰넷</strong>에서 구매한 경우 <strong class="color-red">테마키</strong>를 <strong class="color-blue">sir.kr 콘텐츠몰</strong>에서 구매한 경우 <strong class="color-blue">상품주문번호</strong>를 입력)</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="install-step theme-step-6">
                                        <h5><small>step <span>06</span></small> tmp폴더 삭제</h5>
                                        <a class="image-popup-vertical-fit" href="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img06.jpg"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img06.jpg" alt="image" class="img-responsive"></a>
                                        <p><span>1</span> 테마설치 완료후 업로드한 <strong class="color-red">tmp폴더</strong>를 삭제합니다.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="install-step theme-step-7">
                                        <h5><small>step <span>07</span></small> 최초 메인 페이지</h5>
                                        <a class="image-popup-vertical-fit" href="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img07.jpg"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img07.jpg" alt="image" class="img-responsive"></a>

                                        <p><span>1</span> 설치된 테마를 <strong>홈페이지테마적용</strong>을 하면 해당 테마가 출력되며 우측 <strong>미리보기</strong>를 클릭하면 해당 테마를 미리 볼 수 있습니다.</p>
                                        <p><span>2</span> 관리자 로그인 후 <strong class="color-red">편집모드</strong>를 활성화 시키면 화면상에서 로고, 메뉴, EB슬라이더, EB콘텐츠, EB최신글 등의 설정을 불러와 설정할 수 있습니다.</p>
                                        <p><span><i class="fa fa-info"></i></span> <strong>[중요]</strong> 최초 설치 후 관리자로 로그인해 <strong class="color-red">관리자 모드 &lt; 환경설정 &lt; 기본환경설정</strong>에 접속해 <strong class="color-red">확인</strong>을 한번 클릭하기 바랍니다.<br>(모바일 관련 함수 설정을 위함이며 그래야 모바일에서 정상적인 레이아웃 출력됩니다.)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-3rd" role="tabpanel" aria-labelledby="v-pills-3rd-tab">
                <?php /* 테마 설명과 설정 */ ?>
                    <div class="theme-setup">
                        <h3><span class="title-bar"></span> 기업 테마 설명 및 특이사항</h3>
                        <p class="m-b-10">기업테마에 대한 <strong class="color-red">설명</strong>과 <strong class="color-red">특이사항</strong> 등을 읽고 테마설치 및 사용에 참고하기 바랍니다.</p>
                        <ul class="list-unstyled m-b-30">
                            <li><i class="fas fa-minus"></i> 부트스트랩5를 이용한 테마이며 레이아웃의 경우 flexbox로 구성되어 있으니 CSS 스타일의 flex 속성을 확인 바랍니다.<br>flex 링크 : <a href="https://developer.mozilla.org/ko/docs/Web/CSS/flex" target="_blank">https://developer.mozilla.org/ko/docs/Web/CSS/flex</a>
                            </li>
                            <li><i class="fas fa-minus"></i> 해당 테마는 사이드 레이아웃을 사용하지 않는 디자인이며 비반응형을 지원하지 않습니다.</li>
                            <li><i class="fas fa-minus"></i> 기업 테마에서는 이벤트와 최근본 상품 스킨등은 지원되지 않습니다.</li>
                            <li><i class="fas fa-minus"></i> 메인과 서브페이지에서 <strong>편집모드</strong>를 통해 손쉽게 <strong>내용 및 이미지 수정</strong>이 가능합니다.</li>
                            <li><i class="fas fa-minus"></i> 스타일과 레이아웃 수정은 에디터 프로그램으로 직접 파일을 열어 수정해야 하며 <strong>이윰 테마&amp;스킨</strong>(<a href="https://eyoom.net/page/?pid=eb4_theme_skin" traget="_blank">https://eyoom.net/page/?pid=eb4_theme_skin</a>)에서 구조를 참고하기 바랍니다.</li>
                            <li><i class="fas fa-minus"></i> 메인 페이지 애니메이션은 aos 플러그인을 사용했습니다.<br>
                            각 스킨 파일에 출력 소스가 들어가 있으며 사용을 하지 않을 시 스킨파일에서 해당 소스(예: data-aos="fade-left")를 삭제하고 head.html.php, tail.html.php 파일에서 플러그인 소스를 삭제합니다.<br>
                            스크롤 이동시 애니메이션이 한번만 작동한다면 /theme/eb4_shop_018/tail.html.php 파일 하단 aos.js 설정 부분 once 값을 true로 변경합니다. <br>
                            <strong>aos.js</strong>(<a href="https://michalsnik.github.io/aos/" target="_blank">https://michalsnik.github.io/aos/</a>)를 참고하기 바랍니다.</li>
                            <li><i class="fas fa-minus"></i> 컬러와 폰트 사이즈등은 root 가상클래스를 이용했으며 /theme/eb4_shop_018/css/style.css 상단에 정의되어 있습니다.<br>
                                가상 클래스를 이용해 변수를 선언하고 동일하게 적용 및 변경이 가능해 수정에 용이 합니다.<br>
                                :root css 링크 : <a href="https://developer.mozilla.org/ko/docs/Web/CSS/:root" target="_blank">https://developer.mozilla.org/ko/docs/Web/CSS/:root</a><br>
                                폰트 사이즈 계산 px rem 링크 : <a href="https://nekocalc.com/px-to-rem-converter" target="_blank">https://nekocalc.com/px-to-rem-converter</a>
                            </li>
                            <li><i class="fas fa-minus"></i> 해당 테마는 구글 웹폰트 'Noto Sans KR', 'Montserrat' 웹폰트를 사용했습니다.<br>
                                --basic-font는 사이트에 사용할 폰트 --en-font는 영어 폰트 입니다.<br> 
                                폰트를 변경한다면 --basic-font와 --en-font에 폰트를 변경하기 바랍니다.<br>
                                사용을 원치 않을 시 /theme/eb4_shop_018/head.sub.html.php 파일 구글 폰트 api 소스 삭제<br>
                                /theme/eb4_shop_018/css/style.css 파일 다음 소스 삭제<br>
                                <div class="inner-content p-l-10 font-size-13">
                                    --basic-font: 'Noto Sans KR', sans-serif;<br>
                                    --en-font: 'Montserrat', 'Noto Sans KR', sans-serif;<br>
                                    body, h1, h2, h3, h4, h5, h6 {font-family: var(--basic-font);}<br>
                                    .en-font {font-family: var(--en-font);}
                                </div>
                            </li>
                        </ul>
                        
                        <h3><span class="title-bar"></span> 쇼핑몰 테마 설명 및 특이사항</h3>
                        <p class="m-b-10">쇼핑몰테마에 대한 <strong class="color-red">설명</strong>과 <strong class="color-red">특이사항</strong> 등을 읽고 테마설치 및 사용에 참고하기 바랍니다.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-minus"></i> <span class="color-red">설치시 상품 등록은 지원하지 않기에 데모사이트와 같이 상품 출력 된 레이아웃은 출력되지 않습니다.</span>(직접 관리자모드에서 상품 입력 해야합니다.)</li>
                            <li><i class="fas fa-minus"></i> 쇼핑몰 설정 및 상품등록등과 관련해서는 sir.kr의 <strong class="color-red">영카트5 매뉴얼</strong>(<a href="https://sir.kr/manual/yc5" target="_blank">https://sir.kr/manual/yc5</a>)를 참고하기 바랍니다.</li>
                            <li><i class="fas fa-minus"></i> <span class="color-red">상품 등록시 이미지 비율을 동일하게 맞추기 바랍니다.</span> 예)1000x1000픽셀 이미지 파일</li>
                            <li><i class="fas fa-minus"></i> 해당 테마는 사이드 레이아웃을 사용하지 않는 디자인이며 비반응형을 지원하지 않습니다.</li>
                            <li><i class="fas fa-minus"></i> 메인에서 편집모드를 통해 내용 및 이미지 수정이 가능하며 상품 등록 후에도 개별상품 설정이 가능합니다.</li>
							<li><i class="fas fa-minus"></i> 관리자 - 쇼핑몰관리 - 분류관리
								<ul class="list-unstyled">
									<li>&middot; 출력이미지 사이즈 : 폭(600) / 높이(0)으로 설정(반응형이기에 높이는 0)</li>
									<li>&middot; 상품 출력 수는 가로 수와 세로 수의 곱으로 출력되며 정렬은 해당 스킨 파일에서 수정합니다.</li>
								</ul>
							</li>
							<li><i class="fas fa-minus"></i> 관리자 - 쇼핑몰관리 - 쇼핑몰 초기화면
								<ul class="list-unstyled">
									<li>&middot; 히트 : 스킨(main.10.skin.php:갤러리형) / 1줄당 이미지 수(4) / 출력할 줄 수(1) / 이미지폭(400) / 이미지높이(0)</li>
									<li>&middot; 추천 : 스킨(main.20.skin.php:슬라이드형) / 1줄당 이미지 수(8) / 출력할 줄 수(1) / 이미지폭(400) / 이미지높이(0)</li>
									<li>&middot; 최신 : 스킨(main.30.skin.php:갤러리형) / 1줄당 이미지 수(10) / 출력할 줄 수(1) / 이미지폭(400) / 이미지높이(0)</li>
									<li>&middot; 인기 : 스킨(main.40.skin.php:슬라이드형) / 1줄당 이미지 수(8) / 출력할 줄 수(1) / 이미지폭(400) / 이미지높이(0)</li>
									<li>&middot; 할인 : 스킨(main.50.skin.php:슬라이드형) / 1줄당 이미지 수(8) / 출력할 줄 수(1) / 이미지폭(400) / 이미지높이(0)</li>
									<li>&middot; 상품 출력 수는 1줄당 이미지 수와 출력할 줄 수의 곱으로 출력되며 목록 정렬은 해당 스킨 파일에서 수정합니다.</li>
									<li>&middot; main.20.skin.php, main.40.skin.php, main.50.skin.php 스킨은 슬라이드형으로 중복 사용시 클래스명 충돌로 오류가 발생하니 중복 사용이 안됩니다.</li>
								</ul>
							</li>
							<li><i class="fas fa-minus"></i> 관리자 - 쇼핑몰관리 - 기타설정
								<ul class="list-unstyled">
									<li>&middot; 이미지폭(600) / 이미지높이(0)</li>
									<li>&middot; 상품 출력 수는 1줄당 이미지 수와 출력할 줄 수의 곱으로 출력되며 정렬은 해당 스킨 파일에서 수정합니다.</li>
									<li>&middot; 이미지(소) : 폭(400) / 높이(0)</li>
									<li>&middot; 이미지(중) : 폭(1000) / 높이(0)</li>
								</ul>
							</li>
                            <li><i class="fas fa-minus"></i> 컬러와 폰트 사이즈등은 root 가상클래스를 이용했으며 /theme/eb4_shop_018/css/style.css 상단에 정의되어 있습니다.<br>
                                가상 클래스를 이용해 변수를 선언하고 동일하게 적용 및 변경이 가능해 수정에 용이 합니다.<br>
                                :root css 링크 : <a href="https://developer.mozilla.org/ko/docs/Web/CSS/:root" target="_blank">https://developer.mozilla.org/ko/docs/Web/CSS/:root</a><br>
                                폰트 사이즈 계산 px rem 링크 : <a href="https://nekocalc.com/px-to-rem-converter" target="_blank">https://nekocalc.com/px-to-rem-converter</a>
                            </li>
                            <li><i class="fas fa-minus"></i> 해당 테마는 구글 웹폰트 'Noto Sans KR', 'Montserrat' 웹폰트를 사용했습니다.<br>
                                --basic-font는 사이트에 사용할 폰트 --en-font는 영어 폰트 입니다.<br> 
                                폰트를 변경한다면 --basic-font와 --en-font에 폰트를 변경하기 바랍니다.<br>
                                사용을 원치 않을 시 /theme/eb4_shop_018/head.sub.html.php 파일 구글 폰트 api 소스 삭제<br>
                                /theme/eb4_shop_018/css/style.css 파일 다음 소스 삭제<br>
                                <div class="inner-content p-l-10 font-size-13">
                                    --basic-font: 'Noto Sans KR', sans-serif;<br>
                                    --en-font: 'Montserrat', 'Noto Sans KR', sans-serif;<br>
                                    body, h1, h2, h3, h4, h5, h6 {font-family: var(--basic-font);}<br>
                                    .en-font {font-family: var(--en-font);}
                                </div>
                            </li>
						</ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-4th" role="tabpanel" aria-labelledby="v-pills-4th-tab">
                	<?php /* 테마 편집모드 */ ?>
                    <div class="theme-editmode">
                        <h3><span class="title-bar"></span> 테마 편집모드</h3>
                        <p class="m-b-30">편집 모드를 통해 로고, 메뉴, 회사정보 입력은 물론 사이트 콘텐츠의 이미지와 텍스트를 보여지는 화면에서 바로 수정이 가능합니다.<br>
                            <strong class="color-red">편집모드란?</strong> <a href="https://eyoom.net/page/?pid=eb4_editmode" target="_blank"><i class="fas fa-link"></i> 관련링크 바로가기</a>
                        </p>
                        
                        <ul class="nav nav-tabs m-b-20" role="tablist">
						    <li class="nav-item" role="presentation">
						        <button class="nav-link active" id="tab-case3-nav1" data-bs-toggle="pill" data-bs-target="#tab-case3-1" type="button" role="tab" aria-controls="tab-case3-1" aria-selected="true"><strong>기업테마</strong></button>
						    </li>
						    <li class="nav-item" role="presentation">
						        <button class="nav-link" id="tab-case3-nav2" data-bs-toggle="pill" data-bs-target="#tab-case3-2" type="button" role="tab" aria-controls="tab-case3-2" aria-selected="false"><strong>쇼핑몰테마</strong></button>
						    </li>
						</ul>
						<div class="tab-content">
						    <div class="tab-pane fade show active" id="tab-case3-1" role="tabpanel" aria-labelledby="tab-case3-nav1">
						        <ul class="list-unstyled theme-list">
		                            <li>
		                                <h5>메인 페이지 로더</h5>
		                                <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/theme_main_00.jpg" class="img-responsive"></div>
		                                <ul class="list-unstyled">
		                                    <li>&middot; 메인페이지 로딩 시간 동안 출력되는 화면입니다.</li>
		                                    <li>&middot; /theme/eb4_shop_018/index.html.php 파일 '페이지 로더' 부분에 각 소스가 있으며 시간 조정 및 스타일 수정을 합니다.<br>사리지는 시간은 fadeOut(800) 에서 수치를 변경하기 바랍니다.(1000 = 1초)</li>
	                                        <li>&middot; 이미지는 /theme/eb4_shop_018/image/site_logo.svg 파일이 출력되며 관리자 로고 등록시 해당 이미지가 출력 됩니다.</li>
		                                </ul>
		                            </li>
		                            <li>
		                                <h5>Header(상단레이아웃)</h5>
		                                <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/theme_main_01.jpg" class="img-responsive"></div>
		                                <ul class="list-unstyled">
		                                    <li>&middot; 로고, 메뉴등은 편집모드를 통해 설정할 수 있습니다.</li>
		                                    <li>&middot; 로그인, 검색/멤버 모달창, 서브페이지 타이틀등은 직접 파일 수정등을 해야 합니다.</li>
		                                    <li>&middot; /theme/eb4_shop_018/head.html.php 파일에서 수정합니다.</li>
		                                </ul>
		                            </li>
		                            <li>
		                                <h5>메인 슬라이더(EB슬라이더)</h5>
		                                <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/theme_main_02.jpg" class="img-responsive"></div>
		                                <ul class="list-unstyled">
		                                    <li>&middot; 대표타이틀, 서브타이틀, 설명문구, [링크] #1 입력, 이미지 #1~2 업로드 합니다.</li>
		                                    <li>&middot; 이미지 비율 #1(pc) : 1920x800 픽셀 / #2(mobile) : 1000x600 이미지 사용합니다.</li>
		                                    <li>&middot; 767px 이하에서는 설명문구 미출력 됩니다.</li>
		                                    <li>&middot; 슬라이드 시간 설정은 autoplaySpeed에서 설정합니다.</li>
		                                    <li>&middot; 대표타이틀 strong 태그 사용시 컬러 출력, br태그 사용해 줄바꿈 합니다.</li>
		                                    <li>&middot; /theme/eb4_shop_018/skin/ebslider/shop018_main_slider_busi/ebslider.skin.html.php</li>
		                                </ul>
		                            </li>
		                            <li>
		                                <h5>BEAUTIFUL SKIN CARE(EB콘텐츠)</h5>
		                                <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/theme_main_03.jpg" class="img-responsive"></div>
		                                <ul class="list-unstyled">
		                                    <li>&middot; 아이템 : 텍스트필드 #1, 설명글#1, 연결주소#1, 이미지#1를 입력 및 등록합니다.</li>
		                                    <li>&middot; 이미지 비율 #1 800x800 픽셀 이미지 사용합니다.</li>
		                                    <li>&middot; strong 태그 사용시 볼드체 출력, br태그 사용해 줄바꿈 합니다.</li>
		                                    <li>&middot; 아이템 4개에 맞춰 디자인 되었습니다.</li>
		                                    <li>&middot; /theme/eb4_shop_018/skin/ebcontent/shop018_four_banner/ebcontents.skin.html.php</li>
		                                </ul>
		                            </li>
		                            <li>
		                                <h5>SPECIALITY BEST ITEM(EB슬라이더)</h5>
		                                <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/theme_main_04.jpg" class="img-responsive"></div>
		                                <ul class="list-unstyled">
		                                    <li>&middot; 대표타이틀, 설명문구, [링크] #1 입력, 이미지 #1 업로드 합니다.</li>
		                                    <li>&middot; 이미지 비율 #1(pc) : 1400x800 픽셀 / #2(mobile) : 1000x600 이미지 사용합니다.</li>
		                                    <li>&middot; 슬라이드 시간 설정은 autoplaySpeed에서 설정합니다.</li>
		                                    <li>&middot; 대표타이틀 strong 태그 사용시 컬러 출력, br태그 사용해 줄바꿈 합니다.</li>
		                                    <li>&middot; /theme/eb4_shop_018/skin/ebslider/shop018_center_slider/ebslider.skin.html.php</li>
		                                </ul>
		                            </li>
		                            <li>
		                                <h5>Products(EB최신글)</h5>
		                                <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/theme_main_05.jpg" class="img-responsive"></div>
		                                <ul class="list-unstyled">
		                                    <li>&middot; EB최신글(<a href="https://eyoom.net/bbs/board.php?bo_table=eb4_theme_guide&wr_id=18">https://eyoom.net/bbs/board.php?bo_table=eb4_theme_guide&wr_id=18</a>)을 참고해 게시판 등록합니다.</li>
		                                    <li>&middot; 아이템설정 - 최신글 게시물수:5 / 이미지 출력 여부:사용 / 이미지 사이즈 폭:600 / 게시물 내용 출력 여부:사용 / 게시물 내용 길이:90 </li>
		                                    <li>&middot; 슬라이드 시간 설정은 autoplaySpeed에서 설정합니다.</li>
		                                    <li>&middot; /theme/eb4_shop_018/skin/eblatest/shop018_slider/eblatest.skin.html.php </li>
		                                </ul>
		                            </li>
		                            <li>
		                                <h5>Contact(EB콘텐츠)</h5>
		                                <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/theme_main_06.jpg" class="img-responsive"></div>
		                                <ul class="list-unstyled">
		                                    <li>&middot; 아이템 : 텍스트필드 #1, 설명글#1, 연결주소#1, 이미지#1,2를 입력 및 등록합니다.</li>
		                                    <li>&middot; 이미지 비율 #1(pc) : 1920x450 픽셀 / #2(mobile) : 1000x500 이미지 사용합니다.</li>
		                                    <li>&middot; strong 태그 사용시 볼드체 출력, br태그 사용해 줄바꿈 합니다.</li>
		                                    <li>&middot; /theme/eb4_shop_018/skin/ebcontent/shop018_main_contact/ebcontents.skin.html.php</li>
		                                </ul>
		                            </li>
		                            <li>
		                                <h5>Footer(하단 레이아웃)</h5>
		                                <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/theme_main_07.jpg" class="img-responsive"></div>
		                                <ul class="list-unstyled">
		                                    <li>&middot; 하단로고, 회사정보등은 편집모드를 통해 설정 할 수 있습니다.</li>
		                                    <li>&middot; 푸터메뉴, 입금정보, 카피라이트는 해당 파일에서 직접 수정합니다.</li>
		                                    <li>&middot; 푸터슬라이더(EB슬라이더) : 아이템설정 - 대표타이틀, [링크] #1 입력, 이미지 #1,2(이미지 비율 #1(pc) : 800x694 픽셀 / #2(mobile) : 800x230 이미지 사용)를 입력 및 등록 <br>파일 : /theme/eb4_shop_018/skin/ebslider/shop018_footer_slider/ebslider.skin.html.php</li>
		                                    <li>&middot; 공지사항 최신글 : 아이템설정 - 최신글 게시물수:5 <br>파일 : /theme/eb4_shop_018/skin/eblatest/shop018_footer_list/eblatest.html.php</li>
		                                    <li>&middot; /theme/eb4_shop_018/tail.html.php 파일에서 수정합니다.</li>
		                                </ul>
		                            </li>
		                            <li>
		                                <h5>모바일</h5>
		                                <div class="img-box">
			                                <div class="row">
			                                	<div class="col-6"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/mobile_main_01.jpg" class="img-responsive"></div>
			                                	<div class="col-6"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/mobile_main_02.jpg" class="img-responsive"></div>
			                                </div>
			                                
		                                </div>
		                                <ul class="list-unstyled">
		                                    <li>&middot; 폭 991px 이하에서 모바일 레이아웃 출력됩니다.</li>
		                                </ul>
		                            </li>
		                        </ul>
						    </div>
						    <div class="tab-pane fade" id="tab-case3-2" role="tabpanel" aria-labelledby="tab-case3-nav2">
						        <ul class="list-unstyled theme-list">
		                            <li>
	                                    <h5>메인 페이지 로더</h5>
	                                    <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/theme_main_00.jpg" class="img-responsive"></div>
	                                    <ul class="list-unstyled">
	                                        <li>&middot; 메인페이지 로딩 시간 동안 출력되는 화면입니다.</li>
	                                        <li>&middot; /theme/eb4_shop_018/css/shop-style.css 파일 '페이지 로더' 부분에 각 소스가 있으며 시간 조정 및 스타일 수정을 합니다.<br>사리지는 시간은 fadeOut(800) 에서 수치를 변경하기 바랍니다.(1000 = 1초)</li>
	                                        <li>&middot; 이미지는 /theme/eb4_shop_018/image/site_logo.svg 파일이 출력되며 관리자 로고 등록시 해당 이미지가 출력 됩니다.</li>
	                                    </ul>
	                                </li>
	                                <li>
	                                    <h5>Header(상단 레이아웃)</h5>
	                                    <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/shop_main_01.jpg" class="img-responsive"></div>
	                                    <ul class="list-unstyled">
	                                        <li>&middot; 로고, 메뉴등은 편집모드를 통해 설정할 수 있습니다.</li>
	                                        <li>&middot; 탑바, 퀵메뉴, 모달창등은 /theme/eb4_shop_018/shop/shop.head.html.php 파일에서 수정합니다.</li>
	                                        <li>&middot; 로그인 후 사람 아이콘 클릭시 모달 창으로 오늘본상품, 장바구니, 위시리스트를 확인 할 수 있습니다.</li>
	                                        <li>&middot; 오늘본상품 출력소스가 있으며 스킨은 /theme/eb4_shop_018/skin/shop/basic/boxtodayview.skin.html.php 파일 입니다.</li>
	                                        <li>&middot; 장바구니 출력소스가 있으며 스킨은 /theme/eb4_shop_018/skin/shop/basic/boxcart.skin.html.php 파일 입니다.</li>
	                                        <li>&middot; 위시리스트 출력소스가 있으며 스킨은 /theme/eb4_shop_018/skin/shop/basic/boxwish.skin.html.php 파일 입니다.</li>
	                                    </ul>
	                                </li>
	                                <li>
	                                    <h5>메인 슬라이더(EB슬라이더)</h5>
	                                    <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/shop_main_02.jpg" class="img-responsive"></div>
	                                    <ul class="list-unstyled">
	                                        <li>&middot; 대표타이틀, 서브타이틀, 설명문구, 연결주소 [링크] #1 입력, 이미지 #1,2 업로드 합니다.</li>
	                                        <li>&middot; 이미지 비율 #1(pc) : 1920x845 픽셀 / #2(mobile) : 1000x560 이미지 등록합니다.</li>
	                                        <li>&middot; 파일 하단 스크립트에서 슬라이드 시간(autoplaySpeed) 설정합니다.</li>
	                                        <li>&middot; /theme/eb4_shop_018/skin/ebslider/shop018_main_slider/ebslider.skin.html.php</li>
	                                    </ul>
	                                </li>
	                                <li>
	                                    <h5>EB상품</h5>
	                                    <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/shop_main_03.jpg" class="img-responsive"></div>
	                                    <ul class="list-unstyled">
	                                        <li>&middot; 이윰빌더에서 제공하는 분류(카테고리) 상품 출력 스킨입니다.('관리자 - 테마설정관리 - EB상품추출관리'에서 설정)</li>
	                                        <li>&middot; 아이템에 출력할 분류(카테고리)등록하며 아이템별로 탭이 추가됩니다.</li>
	                                        <li>&middot; 상품이미지 출력 여부 : 사용 / 이미지 사이즈 : 400 x 0</li>
	                                        <li>&middot; 대표 연결주소 입력시 탭 하단에 'More show' 버튼 링크 출력됩니다.</li>
	                                        <li>&middot; 상품 출력 열은 해당 파일에서 수정합니다.(그리드 시스템 참고 : <a href="https://eyoom.net/page/eb45_code_1" target="_blank">https://eyoom.net/page/eb45_code_1</a>)</li>
	                                        <li>&middot; /theme/eb4_shop_018/skin/ebgoods/shop018_goods_tabs/ebgoods.skin.html.php</li>
	                                    </ul>
	                                </li>
	                                <li>
	                                    <h5>원 슬라이더(EB슬라이더)</h5>
	                                    <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/shop_main_04.jpg" class="img-responsive"></div>
	                                    <ul class="list-unstyled">
	                                        <li>&middot; 대표타이틀, 서브타이틀, 설명문구, 연결주소 [링크] #1 입력, 이미지 #1,2 업로드 합니다.</li>
	                                        <li>&middot; 이미지 비율 #1(pc) : 1300x300 픽셀 / #2(mobile) : 1000x560 이미지 등록합니다.</li>
	                                        <li>&middot; 웹접근성을 위해 대표타이틀은 이미지 설명 내용을 입력하기 바랍니다.</li>
	                                        <li>&middot; 파일 하단 스크립트에서 슬라이드 시간(interval) 설정합니다.</li>
	                                        <li>&middot; /theme/eb4_shop_018/skin/ebslider/shop018_one_slider/ebslider.skin.html.php</li>
	                                    </ul>
	                                </li>
									<li>
										<h5>히트상품</h5>
										<div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/shop_main_05.jpg" class="img-responsive"></div>
										<ul class="list-unstyled">
											<li>&middot; 관리자 - 쇼핑몰설정 - 쇼핑몰 초기화면에서 상품 출력수(1줄당 이미지 수 x 출력할 줄 수)와 이미지 사이즈 설정합니다.</li>
											<li>&middot; 스킨:main.10.skin.php / 이미지수:4 / 줄수:1 / 이미지폭:400 / 이미지높이:0 </li>
											<li>&middot; 타이틀, 상품유형 변경은 /theme/eb4_shop_018/shop/index.html.php 파일에서 수정합니다.</li>
											<li>&middot; 상품유형 타입 : <strong>히트(1)</strong>, 추천(2), 신상(3), 인기(4), 할인(5)</li>
											<li>&middot; 한줄당 상품 출력 열은 해당 파일에서 수정합니다.(그리드 시스템 참고 : <a href="https://eyoom.net/page/eb45_code_1" target="_blank">바로가기</a>)</li>
											<li>&middot; /theme/eb4_shop_018/skin/shop/basic/main.10.skin.html.php</li>
										</ul>
									</li>
		                            <li>
		                                <h5>타이틀 배너(EB콘텐츠) / 추천상품</h5>
		                                <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/shop_main_06.jpg" class="img-responsive"></div>
	                                    <h6>타이틀 배너(EB콘텐츠)</h6>
		                                <ul class="list-unstyled">
		                                    <li>&middot; 텍스트필드 #1, 연결주소#1, 이미지#1,2 을 입력 및 등록합니다.</li>
		                                    <li>&middot; 이미지 비율 #1(pc) : 600x975 픽셀 / #2(mobile) : 800x250 이미지 사용합니다. </li>
		                                    <li>&middot; /theme/eb4_shop_018/skin/ebcontent/shop018_title_banner/ebcontents.skin.html.php</li>
		                                </ul>
	                                    <h6>추천상품</h6>
										<ul class="list-unstyled">
											<li>&middot; 관리자 - 쇼핑몰설정 - 쇼핑몰 초기화면에서 상품 출력수(1줄당 이미지 수 x 출력할 줄 수)와 이미지 사이즈 설정합니다.</li>
											<li>&middot; 스킨:main.20.skin.php / 이미지수:8 / 줄수:1 / 이미지폭:400 / 이미지높이:0 </li>
											<li>&middot; 타이틀, 상품유형 변경은 /theme/eb4_shop_018/shop/index.html.php 파일에서 수정합니다.</li>
											<li>&middot; 상품유형 타입 : 히트(1), <strong>추천(2)</strong>, 신상(3), 인기(4), 할인(5)</li>
	                                        <li>&middot; main.20.skin.php 스킨은 슬라이더 형식이며 해당 파일 하단 스크립트에서 상품 출력 수(perPage)와 슬라이드 시간(interval) 조정합니다.</li>
											<li>&middot; /theme/eb4_shop_018/skin/shop/basic/main.20.skin.html.php</li>
										</ul>
	                                </li>
									<li>
										<h5>최신상품</h5>
										<div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/shop_main_07.jpg" class="img-responsive"></div>
										<ul class="list-unstyled">
											<li>&middot; 관리자 - 쇼핑몰설정 - 쇼핑몰 초기화면에서 상품 출력수(1줄당 이미지 수 x 출력할 줄 수)와 이미지 사이즈 설정합니다.</li>
											<li>&middot; 스킨:main.30.skin.php / 이미지수:10 / 줄수:1 / 이미지폭:400 / 이미지높이:0 </li>
											<li>&middot; 타이틀, 상품유형 변경은 /theme/eb4_shop_018/shop/index.html.php 파일에서 수정합니다.</li>
											<li>&middot; 상품유형 타입 : 히트(1), 추천(2), <strong>신상(3)</strong>, 인기(4), 할인(5)</li>
											<li>&middot; 한줄당 상품 출력 열은 해당 파일에서 수정합니다.(그리드 시스템 참고 : <a href="https://eyoom.net/page/eb45_code_1" target="_blank">바로가기</a>)</li>
											<li>&middot; /theme/eb4_shop_018/skin/shop/basic/main.30.skin.html.php</li>
										</ul>
									</li>
		                            <li>
		                                <h5>타이틀 배너(EB콘텐츠) / 추천상품</h5>
		                                <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/shop_main_08.jpg" class="img-responsive"></div>
	                                    <h6>타이틀 배너(EB콘텐츠)</h6>
		                                <ul class="list-unstyled">
		                                    <li>&middot; 텍스트필드 #1, 연결주소#1, 이미지#1,2 을 입력 및 등록합니다.</li>
		                                    <li>&middot; 이미지 비율 #1(pc) : 600x975 픽셀 / #2(mobile) : 800x250 이미지 사용합니다. </li>
		                                    <li>&middot; /theme/eb4_shop_018/skin/ebcontent/shop018_title_banner_2/ebcontents.skin.html.php</li>
		                                </ul>
	                                    <h6>인기상품</h6>
										<ul class="list-unstyled">
											<li>&middot; 관리자 - 쇼핑몰설정 - 쇼핑몰 초기화면에서 상품 출력수(1줄당 이미지 수 x 출력할 줄 수)와 이미지 사이즈 설정합니다.</li>
											<li>&middot; 스킨:main.40.skin.php / 이미지수:8 / 줄수:1 / 이미지폭:400 / 이미지높이:0 </li>
											<li>&middot; 타이틀, 상품유형 변경은 /theme/eb4_shop_018/shop/index.html.php 파일에서 수정합니다.</li>
											<li>&middot; 상품유형 타입 : 히트(1), 추천(2), 신상(3), <strong>인기(4)</strong>, 할인(5)</li>
	                                        <li>&middot; main.20.skin.php 스킨은 슬라이더 형식이며 해당 파일 하단 스크립트에서 상품 출력 수(perPage)와 슬라이드 시간(interval) 조정합니다.</li>
											<li>&middot; /theme/eb4_shop_018/skin/shop/basic/main.40.skin.html.php</li>
										</ul>
	                                </li>
	                                <li>
										<h5>상품후기</h5>
										<div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/shop_main_09.jpg" class="img-responsive"></div>
										<ul class="list-unstyled">
											<li>&middot; 해당 파일에 디자인 및 출력 소스가 있습니다.</li>
											<li>&middot; 이미지 사이즈는 해당 부분 썸네일 출력 소스에서 설정(기본 설정 500x500).</li>
	                                        <li>&middot; 해당 부분 스크립트에서 출력 수(perPage)와 슬라이드 시간(interval) 설정합니다.</li>
											<li>&middot; /theme/eb4_shop_018/shop/index.html.php</li>
										</ul>
									</li>
									<li>
	                                    <h5>이벤트</h5>
	                                    <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/shop_main_10.jpg" class="img-responsive"></div>
	                                    <ul class="list-unstyled">
	                                        <li>&middot; 영카트5에서 제공하는 기본 콘텐츠 입니다. (sir  이벤트 가이드 참고 : <a href="https://sir.kr/manual/yc5/130" target="_blank">https://sir.kr/manual/yc5/130</a>)</li>
	                                        <li>&middot; 관련상품 및 디자인에서 상품 등록하며 자세한 사항은 영카트5 매뉴얼 참고합니다.</li>
	                                        <li>&middot; 출력이미지 폭(600) 높이(0) 설정합니다.</li>
	                                        <li>&middot; 이벤트 제목 입력과 배너이미지 등록합니다.(이미지 800x430픽셀 사용)</li>
	                                        <li>&middot; 상품출력은 4개에 맞춰 제작.</li>
	                                        <li>&middot; 상품출력 수 조정은 /eyoom/core/shop/boxevent.skin.php 파일 26줄 'limit' 에서 수 조정. limit 0, 3</li>
	                                        <li>&middot; /theme/eb4_shop_018/skin/shop/basic/boxevent.skin.html.php</li>
	                                        <li>&middot; '관리자 - 테마설정관리 - 테마환경설정 - 메인설정'에서 쇼핑몰 메인 선택시 출력되지 않습니다.<br>(이벤트는 쇼핑몰에서만 사용 가능한 기능으로 설정시 커뮤니티로 인식해 미출력됨)</li>
	                                    </ul>
	                                </li>
	                                <li>
										<h5>할인상품</h5>
										<div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/shop_main_11.jpg" class="img-responsive"></div>
										<ul class="list-unstyled">
											<li>&middot; 관리자 - 쇼핑몰설정 - 쇼핑몰 초기화면에서 상품 출력수(1줄당 이미지 수 x 출력할 줄 수)와 이미지 사이즈 설정합니다.</li>
											<li>&middot; 스킨:main.50.skin.php / 이미지수:8 / 줄수:1 / 이미지폭:400 / 이미지높이:0 </li>
											<li>&middot; 타이틀, 상품유형 변경은 /theme/eb4_shop_018/shop/index.html.php 파일에서 수정합니다.</li>
											<li>&middot; 상품유형 타입 : 히트(1), 추천(2), 신상(3), 인기(4), <strong>할인(5)</strong></li>
	                                        <li>&middot; main.20.skin.php 스킨은 슬라이더 형식이며 해당 파일 하단 스크립트에서 상품 출력 수(perPage)와 슬라이드 시간(interval) 조정합니다.</li>
											<li>&middot; /theme/eb4_shop_018/skin/shop/basic/main.50.skin.html.php</li>
										</ul>
									</li>
	                                <li>
	                                    <h5>투 슬라이더(EB슬라이더)</h5>
	                                    <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/shop_main_12.jpg" class="img-responsive"></div>
	                                    <ul class="list-unstyled">
	                                        <li>&middot; 대표타이틀, 연결주소 [링크] #1 입력, 이미지 #1 업로드 합니다.</li>
	                                        <li>&middot; 이미지 비율 800x300 픽셀 이미지 등록합니다.</li>
	                                        <li>&middot; 웹접근성을 위해 대표타이틀은 이미지 설명 내용을 입력하기 바랍니다.</li>
	                                        <li>&middot; 파일 하단 스크립트에서 출력 수(perPage)와 슬라이드 시간(interval) 설정합니다.</li>
	                                        <li>&middot; /theme/eb4_shop_018/skin/ebslider/shop018_two_slider/ebslider.skin.html.php</li>
	                                    </ul>
	                                </li>
	                                <li>
	                                    <h5>Footer(하단 레이아웃)</h5>
	                                    <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/shop_main_13.jpg" class="img-responsive"></div>
	                                    <ul class="list-unstyled">
		                                    <li>&middot; 하단로고, 회사정보등은 편집모드를 통해 설정 할 수 있습니다.</li>
		                                    <li>&middot; 푸터메뉴, 입금정보, 소셜링크, 카피라이트는 해당 파일에서 직접 수정합니다.</li>
		                                    <li>&middot; 푸터슬라이더(EB슬라이더) : 아이템설정 - 대표타이틀, [링크] #1 입력, 이미지 #1,2(이미지 비율 #1(pc) : 800x694 픽셀 / #2(mobile) : 800x230 이미지 사용)를 입력 및 등록 <br>파일 : /theme/eb4_shop_018/skin/ebslider/shop018_footer_slider/ebslider.skin.html.php</li>
		                                    <li>&middot; 공지사항 최신글 : 아이템설정 - 최신글 게시물수:5 <br>파일 : /theme/eb4_shop_018/skin/eblatest/shop018_footer_list/eblatest.html.php</li>
	                                        <li>&middot; /theme/eb4_shop_018/shop/shop.tail.html.php</li>
	                                    </ul>
	                                </li>
		                            <li>
		                                <h5>모바일</h5>
		                                <div class="img-box">
			                                <div class="row">
			                                	<div class="col-4"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/mobile_main_03.jpg" class="img-responsive"></div>
			                                	<div class="col-4"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/mobile_main_04.jpg" class="img-responsive"></div>
			                                	<div class="col-4"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/mobile_main_05.jpg" class="img-responsive"></div>
			                                </div>
			                                
		                                </div>
		                                <ul class="list-unstyled">
		                                    <li>&middot; 폭 991px 이하에서 모바일 레이아웃 출력됩니다.</li>
		                                    <li>&middot; 로그인 후 사람 아이콘 클릭시 모달 창으로 오늘본상품, 장바구니, 위시리스트를 확인 할 수 있습니다.</li>
		                                </ul>
		                            </li>
		                        </ul>
						    </div>
						</div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-6th" role="tabpanel" aria-labelledby="v-pills-6th-tab">
                <?php /* 제품 게시판 */ ?>
                    <div class="theme-editmode">
                        <h3><span class="title-bar"></span> 제품 게시판</h3>
                        <p class="m-b-10">제품 게시판 스킨에 대한 설명 드립니다.</p>
                        <ul class="list-unstyled m-b-20">
                            <li>&middot; 제품에 대한 소개를 등록하는 게시판 스킨입니다.</li>
                            <li>&middot; 여분필드 6~9번을 사용해 제품의 정보를 입력 및 출력합니다.</li>
                            <li>&middot; 제품 소개 외에 커뮤니티 기능(추천, 별점, 블라인드, 스크랩등)들은 지원하지 않습니다.</li>
                            <li>&middot; 파일 : theme/테마명/skin/board/product/</li>
						</ul>

                        <ul class="list-unstyled theme-list">
                            <li>
                                <h5>게시판 설정(관리자 - 게시판관리)</h5>
                                <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/board_01.jpg" class="img-responsive"></div>
                                <ul class="list-unstyled">
                                    <li>&middot; 이미지와 같이 기본 설정을 합니다.</li>
                                    <li>&middot; 관리자 외에 글쓰기, 답글, 댓글쓰기를 사용한다면 권한을 9이하로 설정합니다.</li>
                                    <li>&middot; 이미지 등록 및 출력은 파일 업로드로 하며 등록할 만큼 값을 설정합니다.</li>
                                    <li>&middot; 여분필드 6~9번까지 출력할 값을 설정 합니다.</li>
                                </ul>
                            </li>
                            <li>
                                <h5>게시판 추가 설정(관리자 - 테마설정관리 - 게시판 추가설정)</h5>
                                <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/board_02.jpg" class="img-responsive"></div>
                                <ul class="list-unstyled">
                                    <li>&middot; 이미지와 같이 설정을 합니다.</li>
                                    <li>&middot; 태그 미사용시 체크 해제 합니다.</li>
                                </ul>
                            </li>
                            <li>
                                <h5>쓰기(write.skin.html.php)</h5>
                                <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/board_03.jpg" class="img-responsive"></div>
                                <ul class="list-unstyled">
                                    <li>&middot; 각 항목 값을 입력 및 이미지 등록합니다.</li>
                                    <li>&middot; 여분필드 6~9번 항목 설정 값이 제목으로 출력됩니다.</li>
                                    <li>&middot; 첨부파일은 이미지 파일 등록하며 첫번째 이미지는 목록에서 출력됩니다.</li>
                                </ul>
                            </li>
                            <li>
                                <h5>보기(view.skin.html.php)</h5>
                                <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/board_04.jpg" class="img-responsive"></div>
                                <ul class="list-unstyled">
                                    <li>&middot; 입력한 내용들이 출력됩니다.</li>
                                    <li>&middot; 작성자, 날짜, 복사, 이동, 삭제, 글쓰기 등의 내용들은 권한 설정에 따라 확인 할 수 있습니다.</li>
                                </ul>
                            </li>
                            <li>
                                <h5>목록(list.skin.html.php)</h5>
                                <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/board_05.jpg" class="img-responsive"></div>
                                <ul class="list-unstyled">
                                    <li>&middot; 입력한 내용들이 출력됩니다.</li>
                                    <li>&middot; 삭제, 복사, 이동, 글쓰기등의 내용들은 권한 설정에 따라 확인 할 수 있습니다.</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-5th" role="tabpanel" aria-labelledby="v-pills-5th-tab">
                <?php /* 테마 패치내역 */ ?>
                    <div class="theme-patch">
                        <h3><span class="title-bar"></span> 테마 패치내역</h3>
                        <p class="m-b-30">테마의 <strong class="color-red">패치내역</strong>을 통해 해당 파일을 업데이트를 합니다. 
                            <br>패치시 사용자가 직접 작업 및 수정한 내용에 대해서는 <strong class="color-red">백업</strong>을 한 후 진행하기 바랍니다.
                        </p>

                        <div class="patch-list">
                            <h5>버전 1.2.18 (2023.06.02)</h5>
                            <ul class="list-unstyled m-b-20 margin-bottom-20">
                                <li><span>&middot;</span> theme/eb4_shop_018/skin/mypage/basic/mbmemo.skin.html.php</li>
                                <li><span>&middot;</span> theme/eb4_shop_018/skin/mypage/basic/favorite.skin.html.php</li>
                                <li><span>&middot;</span> theme/eb4_shop_018/skin/mypage/basic/followinggul.skin.html.php</li>
                                <li><span>&middot;</span> theme/eb4_shop_018/skin/mypage/basic/goodpost.skin.html.php</li>
                                <li><span>&middot;</span> theme/eb4_shop_018/skin/mypage/basic/pinboard.skin.html.php</li>
                                <li><span>&middot;</span> theme/eb4_shop_018/skin/mypage/basic/starpost.skin.html.php</li>
                                <li><span>&middot;</span> theme/eb4_shop_018/skin/mypage/basic/subscribe.skin.html.php</li>
                                <li><span>&middot;</span> theme/eb4_shop_018/skin/mypage/basic/tabmenu.skin.html.php</li>
                                <li><span>&middot;</span> theme/eb4_shop_018/misc.html.php</li>
                            </ul>

                            <h5>버전 1.2.17 (2023.05.02)</h5>
                            <ul class="list-unstyled m-b-20">
                                <li><span>&middot;</span> /theme/eb4_shop_018/skin/mypage/basic/mbmemo.skin.html.php</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/skin/mypage/basic/tabmenu.skin.html.php</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/page/mbmemo.html.php</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/page/page.tail.html.php</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/plugins/elevatezoom-plus/jquery.ez-plus.js</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/plugins/elevatezoom-plus/LICENSE</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/plugins/jquery-elevateZoom/jquery.elevateZoom.min.js</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/skin/shop/basic/item.form.skin.html.php</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/skin/board/skin_name/list.skin.html.php</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/skin/board/skin_name/view.skin.html.php</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/skin/board/skin_name/view_comment.skin.html.php</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/skin/board/skin_name/write.skin.html.php</li>
                            </ul>
                            
                            <h5>버전 1.2.16 (2023.04.19)</h5>
                            <ul class="list-unstyled m-b-20">
                                <li><span>&middot;</span> /theme/eb4_shop_018/skin/shop/basic/cart.skin.html.php</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/skin/shop/basic/item.skin.html.php</li>
                                <li><span>&middot;</span> //theme/eb4_shop_018/page/page.tail.html.php</li>
                                <li><span>&middot;</span> //theme/eb4_shop_018/skin/board/skin_name/view.skin.html.php</li>
                                <li><span>&middot;</span> //theme/eb4_shop_018/skin/board/skin_name/write.skin.html.php</li>
                            </ul>
                                
							<h5>버전 1.2.15 (2023.04.12)</h5>
							<ul class="list-unstyled m-b-20">
								<li><span>&middot;</span> /theme/eb4_shop_018/head.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/misc.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/member/basic/point.skin.html.php</li>
							</ul>
                                
                            <h5>버전 1.2.14 (2023.03.30)</h5>
                            <ul class="list-unstyled m-b-20">
                                <li><span>&middot;</span> /theme/eb4_shop_018/skin/member/basic/password_lost.skin.html.php</li>
                            </ul>
                            
                            <h5>버전 1.2.13 (2023.03.27)</h5>
                            <ul class="list-unstyled m-b-20">
                                <li><span>&middot;</span> /theme/eb4_shop_018/skin/push/basic/push.skin.html.php</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/skin/qa/basic/answer.skin.html.php</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/skin/qa/basic/list.skin.html.php</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/skin/qa/basic/view.skin.html.php</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/skin/board/스킨명/list.skin.html.php</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/skin/board/스킨명/view.skin.html.php</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/skin/board/스킨명/write.skin.html.php</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/skin/tagmenu/basic/tagmenu.skin.html.php</li>
                            </ul>
                            
							<h5>버전 1.2.12 (2023.01.17)</h5>
							<ul class="list-unstyled m-b-20">
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/ebbanner/basic/ebbanner.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/new/basic/new.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/shop/basic/itemskin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/member/basic/password_lost.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/qa/basic/answer.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/qa/basic/answerform.skin.html.php</li>
							</ul>
							
							<h5>버전 1.2.11 (2023.01.10)</h5>
							<ul class="list-unstyled m-b-20">
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/board/스킨명/view_comment.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/board/스킨명/write.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/ebbanner/basic/ebbanner.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/search/basic/search.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/shop/basic/orderform.sub.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/shop/basic/orderform.sub.mobile.skin.html.php</li>
							</ul>
							
							<h5>버전 1.2.10 (2022.12.22)</h5>
							<ul class="list-unstyled m-b-20">
								<li><span>&middot;</span> /theme/eb4_shop_018/css/common.css</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/head.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/misc.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/shop/shop.head.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/connect/basic/current_connect.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/board/basic/list.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/board/basic/sns.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/board/basic/view_comment.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/board/basic/view.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/board/gallery/list.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/board/gallery/sns.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/board/gallery/view_comment.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/board/gallery/view.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/board/product/list.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/board/product/sns.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/board/product/view_comment.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/board/product/view.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/board/webzine/list.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/board/webzine/sns.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/board/webzine/view_comment.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/board/webzine/view.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/ebbanner</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/member/basic/member_icon.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/member/basic/register_form.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/member/basic/register.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/newwin/basic/newwin.inc.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/search/basic/search.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/shop/basic/img/naverpay.jpg</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/shop/basic/orderform.sub.mobile.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/shop/basic/orderform.sub.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/signature/basic/signature.skin.html.php</li>
							</ul>
							
							<h5>버전 1.2.9 (2022.08.16)</h5>
							<ul class="list-unstyled m-b-20">
								<li><span>&middot;</span> theme/eb4_shop_018/skin/qa/basic/answer.skin.html.php</li>
								<li><span>&middot;</span> theme/eb4_shop_018/skin/qa/basic/answerform.skin.html.php</li>
								<li><span>&middot;</span> theme/eb4_shop_018/skin/qa/basic/view.skin.html.php</li>
								<li><span>&middot;</span> theme/eb4_shop_018/skin/qa/basic/write.skin.html.php</li>
								<li><span>&middot;</span> theme/eb4_shop_018/skin/shop/basic/itemqaform.skin.html.php</li>
								<li><span>&middot;</span> theme/eb4_shop_018/skin/shop/basic/itemuseform.skin.html.php</li>
							</ul>
							
							<h5>버전 1.2.8 (2022.08.02)</h5>
							<ul class="list-unstyled m-b-20">
								<li><span>&middot;</span> /theme/eb4_shop_018/head.html.php</li>
							</ul>
							
							<h5>버전 1.2.7 (2022.07.26)</h5>
							<ul class="list-unstyled m-b-20">
								<li><span>&middot;</span> theme/eb4_shop_018/skin/board/basic/list.skin.html.php</li>
								<li><span>&middot;</span> theme/eb4_shop_018/skin/board/basic/view.skin.html.php</li>
								<li><span>&middot;</span> theme/eb4_shop_018/skin/board/gallery/list.skin.html.php</li>
								<li><span>&middot;</span> theme/eb4_shop_018/skin/board/gallery/view.skin.html.php</li>
								<li><span>&middot;</span> theme/eb4_shop_018/skin/board/webzine/list.skin.html.php</li>
								<li><span>&middot;</span> theme/eb4_shop_018/skin/board/webzine/view.skin.html.php</li>
								<li><span>&middot;</span> theme/eb4_shop_018/skin/faq/basic/list.skin.html.php</li>
								<li><span>&middot;</span> theme/eb4_shop_018/skin/qa/basic/list.skin.html.php</li>
								<li><span>&middot;</span> theme/eb4_shop_018/skin/brand/basic/brand.skin.html.php</li>
								<li><span>&middot;</span> theme/eb4_shop_018/skin/connect/basic/current_connect.skin.html.php</li>
							</ul>
							
							<h5>버전 1.2.6 (2022.07.15)</h5>
							<ul class="list-unstyled m-b-20">
								<li><span>&middot;</span> /theme/eb4_shop_018/head.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/shop/index.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/board/basic/list.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/board/gallery/list.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/board/product/list.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/board/webzine/list.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/brand/basic/brand.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/countdown/basic/countdown.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/faq/basic/list.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/qa/basic/list.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/search/basic/search.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/shop/basic/brand.skin.html.php</li>
							</ul>
							<h5>버전 1.2.5 (2022.07.08)</h5>
							<ul class="list-unstyled m-b-20">
								<li><span>&middot;</span> /theme/eb4_shop_018/head.html.php</li>
							</ul>
							<h5>버전 1.2.4 (2022.06.24)</h5>
							<ul class="list-unstyled m-b-20">
								<li><span>&middot;</span> /theme/eb4_shop_018/css/shop_style.css</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/shop/index.html.php</li>
							</ul>
							<h5>버전 1.2.3 (2022.06.10)</h5>
							<ul class="list-unstyled m-b-20">
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/connect/basic/current_connect.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/member/basic/memo.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/member/basic/memo_form.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/member/basic/memo_view.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/member/basic/member_cert_refresh.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/member/basic/password_reset.skin.html.php</li>
								<li><span>&middot;</span> /theme/eb4_shop_018/skin/member/basic/register_form.skin.html.php</li>
							</ul>
                            <h5>버전 1.2.2 (2022.06.03)</h5>
                            <ul class="list-unstyled m-b-20">
                                <li><span>&middot;</span> /theme/eb4_shop_018/css/common.css</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/shop/shop.tail.html.php</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/tail.html.php</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/skin/ebslider/basic/ebslider.skin.html.php</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/skin/ebslider/shop_basic/ebslider.skin.html.php</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/skin/mypage/basic/myhome.skin.html.php</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/skin/shop/basic/list.sort.skin.html.php</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/skin/shop/basic/search.skin.html.php</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/skin/member/basic/register_form.skin.html.php</li>
                            </ul>
                            <h5>버전 1.2.1 (2022.05.25)</h5>
                            <ul class="list-unstyled m-b-20">
                                <li><span>&middot;</span> /theme/eb4_shop_018/css/style.css</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/skin/board/product/view.skin.html.php</li>
                                <li><span>&middot;</span> /theme/eb4_shop_018/skin/shop/basic/main.50.skin.html.php</li>
                            </ul>
                            <h5>버전 1.2.0 (2022.05.20)</h5>
                            <ul class="list-unstyled m-b-20">
                                <li><span>&middot;</span> 테마 출시</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/magnific-popup/magnific-popup.min.js"></script>
<script>
    $(document).ready(function() {
        $('.image-popup-vertical-fit').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            mainClass: 'mfp-img-mobile',
            image: {
                verticalFit: true
            }
        });
        $('.title-tab a').on('click', function(e) {
            e.stopPropagation();
            var scrollTopSpace;
            if (window.innerWidth >= 992) {
                scrollTopSpace = 130;
            } else {
                scrollTopSpace = 130;
            }
            var tabLink = $(this).attr('href');
            var offset = $(tabLink).offset().top;
            $('html, body').animate({scrollTop : offset - scrollTopSpace}, 500);
            return false;
        });
    });
</script>