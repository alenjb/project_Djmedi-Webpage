<?php
if (!defined('_EYOOM_')) exit;
add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/plugins/slick/slick.min.css" type="text/css" media="screen">',0);
?>

<?php /* eb슬라이더 편집 버튼 */ ?>
<?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
<div class="position-relative <?php if ($es_master['es_state'] == '2') { ?>eb-hidden-space<?php } ?>">
    <div class="adm-edit-btn btn-edit-mode" style="top:30px;text-align:center">
        <div class="btn-group">
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=ebslider_form&thema=<?php echo $theme; ?>&es_code=<?php echo $es_code; ?>&w=u&wmode=1" onclick="eb_admset_modal(this.href); return false;" class="ae-btn-l"><i class="far fa-edit"></i> EB슬라이더 마스터 설정</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=ebslider_form&thema=<?php echo $theme; ?>&es_code=<?php echo $es_code; ?>&w=u" target="_blank" class="ae-btn-r" title="새창 열기">
                <i class="fas fa-external-link-alt"></i>
            </a>
            <button type="button" class="ae-btn-info" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-html="true" data-bs-content="
			<span class='font-size-11'>
			<strong class='color-indigo'>좌측 [EB슬라이더 설정하기] 버튼 클릭 후 아래 설명 참고</strong><br>
			<div class='margin-hr-5'></div>
			<span class='color-indigo'>[설정정보]</span><br>
			1. 슬라이더 마스터 제목 : 메인 슬라이더<br>
			2. 스킨선택 : shop018_main_slider_busi<br>
			3. 아이템 링크수 : 1개<br>
			4. 아이템 이미지수 : 2개<br>
			<span class='color-indigo'>[EB 슬라이더 - 아이템 관리]</span><br>
			1. EB 슬라이더 아이템 추가 클릭<br>
			2. 대표 타이틀 입력<br>
			3. 서브 타이틀 입력<br>
			4. 설명문구 입력<br>
			5. 연결주소 [링크] 입력 (자세히보기 버튼 출력)<br>
			6. 이미지 #1, #2 업로드<br>
			<div class='margin-hr-5'></div>
            대표타이틀, 서브 타이틀, 설명문구, 연결주소, [링크] #1 입력, 이미지 #1~2 업로드 합니다.<br>
			이미지 비율 #1(pc) : 1920x800 픽셀 / #2(mobile) : 1000x600 이미지 사용.<br>
			767px 이하에서는 설명문구 미출력.<br>
			strong 태그 사용시 볼드체 출력, br태그 사용해 줄바꿈.<br>
            슬라이드 시간 설정은 autoplaySpeed에서 설정.
			</span>
		"><i class="fas fa-question-circle"></i>
			</button>
		</div>
	</div>
</div>
<?php } ?>

<?php if (isset($es_master) && $es_master['es_state'] == '1') { // 보이기 상태에서만 출력 ?>
<style>
/* --- 메인 슬라이더 --- */
.main-slider-<?php echo $es_code; ?> {position: relative;overflow: hidden;}
.main-slider-<?php echo $es_code; ?> .main-slider-inner {position: relative;overflow: hidden;display: none
}
.main-slider-<?php echo $es_code; ?> .main-slider-list {margin-bottom: 0
}
.main-slider-<?php echo $es_code; ?> .item {position: relative;outline: none;overflow: hidden;}
/* 이미지 */
.main-slider-<?php echo $es_code; ?> .item-image {position: relative;}
/* 내용 */
.main-slider-<?php echo $es_code; ?> .item-content {position: absolute;top: 50%;transform: translateY(-50%);width: 100%;padding: 0 15px;text-align:center;}
.main-slider-<?php echo $es_code; ?> .item-content h4 {display: block;position: relative;margin: 0 0 15px;font-size: var(--biggest-font-size);word-break: keep-all;color: var(--white-color);}
.main-slider-<?php echo $es_code; ?> .item-content h4 strong {font-weight:600;}
.main-slider-<?php echo $es_code; ?> .item-content h5 {margin: 0 0 5px;font-size: var(--h2-font-size);font-weight:300;word-break: keep-all;color: var(--white-color);}
.main-slider-<?php echo $es_code; ?> .item-content p {margin: 0 0 20px;line-height: 1.5em;font-size: var(--normal-font-size);font-weight:300;word-break: keep-all;color: var(--white-color);}
/* 애니메이션 */
.main-slider-<?php echo $es_code; ?> .item-content h4,
.main-slider-<?php echo $es_code; ?> .item-content h5,
.main-slider-<?php echo $es_code; ?> .item-content p,
.main-slider-<?php echo $es_code; ?> .item-content .btn-more {opacity:0;transition:all .7s ease-in-out;transform:translateY(20px);}
.main-slider-<?php echo $es_code; ?> .item-animation .item-content h4 {transition-delay:.4s;}
.main-slider-<?php echo $es_code; ?> .item-animation .item-content h5 {transition-delay:.8s;}
.main-slider-<?php echo $es_code; ?> .item-animation .item-content p {transition-delay:1.2s;}
.main-slider-<?php echo $es_code; ?> .item-animation .item-content .btn-more {transition-delay:1.6s;}
.main-slider-<?php echo $es_code; ?> .slick-active .item-animation .item-content h4,
.main-slider-<?php echo $es_code; ?> .slick-active .item-animation .item-content h5,
.main-slider-<?php echo $es_code; ?> .slick-active .item-animation .item-content p,
.main-slider-<?php echo $es_code; ?> .slick-active .item-animation .item-content .btn-more {opacity:1;transform:translateY(0);}
/* 좌우 버튼(arrows) */
.main-slider-<?php echo $es_code; ?> .slick-next,
.main-slider-<?php echo $es_code; ?> .slick-prev {opacity:0;width:40px;height:40px;background:rgba(0,0,0,.6);-webkit-transition:all .3s linear;-moz-transition:all .3s linear;-o-transition:all .3s linear;-ms-transition:all .3s linear;transition:all .3s linear;border-radius:50%;}
.main-slider-<?php echo $es_code; ?> .slick-next:hover,
.main-slider-<?php echo $es_code; ?> .slick-prev:hover {background:rgba(0,0,0,.8);}
.main-slider-<?php echo $es_code; ?> .slick-next {right:5px;z-index:1;}
.main-slider-<?php echo $es_code; ?> .slick-prev {left:5px;z-index:1}
.main-slider-<?php echo $es_code; ?> :hover .slick-next {right:25px;opacity:1}
.main-slider-<?php echo $es_code; ?> :hover .slick-prev {left:25px;opacity:1}
.main-slider-<?php echo $es_code; ?> .slick-next:before,
.main-slider-<?php echo $es_code; ?> .slick-prev:before {content:"";display:block;position:absolute;top:50%;width:14px;height:14px;margin-top:-7px;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-o-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg);transition:all .3s linear}
.main-slider-<?php echo $es_code; ?> .slick-next:before {right:15px;border-right:1px solid #eee;border-top:1px solid #eee;}
.main-slider-<?php echo $es_code; ?> .slick-prev:before {left:15px;border-left:1px solid #eee;border-bottom:1px solid #eee;}

/* 스크롤 다운 */
.scroll-down {display: none;position: relative;overflow: hidden;padding-top: 50px;text-align: center;}
.scroll-down span {font-size: var(--smaller-font-size);color: var(--primary-color);}
.scroll-down:before,
.scroll-down:after {content: "";display: block;position: absolute;left: 50%;top: 0;width: 1px;height: 50px;background-color: var(--primary-color);}
.scroll-down:after {height: 20px;background-color: var(--white-color);-webkit-animation: scrollDown 2s infinite;animation: scrollDown 2s infinite;}
@-webkit-keyframes scrollDown {
    0% {
		top:-25px;
		opacity:.9;
    }
    70% {
		top:75px;
    }
    100% {
		opacity:0;
    }
}
@keyframes scrollDown {
    0% {
		top:-25px;
		opacity:.9;
    }
    70% {
		top:75px;
    }
    100% {
		opacity:0;
    }
}
@media (max-width:767px){
	.main-slider-<?php echo $es_code; ?> .item-image {background: none;}
    .main-slider-<?php echo $es_code; ?> .item-content {left: 0;}
    .main-slider-<?php echo $es_code; ?> .item-content h5 {margin-bottom:20px;}
    .main-slider-<?php echo $es_code; ?> .item-content p {display: none;}
}
@media (min-width:768px){
	.main-slider-<?php echo $es_code; ?> .item-image {height: 450px;background-repeat: no-repeat;background-size: cover;background-position: center;}
    .main-slider-<?php echo $es_code; ?> .item-image img {display: none;}
}
@media (min-width:992px){
	.main-slider-<?php echo $es_code; ?> .item-image {height: 550px;}
    .main-slider-<?php echo $es_code; ?> .item-count {width:180px;height:80px;}
    .main-slider-<?php echo $es_code; ?> .item-content p {margin-bottom: 30px;}
    .main-slider-<?php echo $es_code; ?>-slider-nav, 
    .scroll-down {display: block;}
}
@media (min-width:992px) and (max-width:1199px){
	.scroll-down {margin-top: -5px;}
}
@media (min-width:1200px){
	.main-slider-<?php echo $es_code; ?> {height: 600px;}
    .main-slider-<?php echo $es_code; ?> .item-image {height: 600px;}
}
@media (min-width:1400px){
	.main-slider-<?php echo $es_code; ?> {max-width: 1920px;height: 700px;margin: 0 auto;}
    .main-slider-<?php echo $es_code; ?> .item-image {height: 700px;}
}
</style>

<div class="main-slider-<?php echo $es_code; ?>">
	<?php /* eb슬라이더 */ ?>
	<div class="main-slider-inner">
		<div class="main-slider-list">
		<?php if (is_array($slider)) { ?>
			<?php foreach ($slider as $k => $item) { ?>
			<div class="item item-<?php echo $k + 1 ?>">
                <div class="item-image" style="background-image:url(<?php echo $item['src_1']?>)">
                    <img src="<?php echo $item['src_2']?>" alt="image" class="img-responsive visible-xs">
                    <h4 class="sound_only"><?php echo $item['ei_title']?></h4>
                </div>
                <div class="item-content">
                    <?php if ($item['ei_title']) { ?>
                    <h4 class="en-font"><?php echo $item['ei_title']?></h4>
                    <?php } ?>
                    <?php if ($item['ei_subtitle']) { ?>
                    <h5><?php echo $item['ei_subtitle']?></h5>
                    <?php } ?>
                    <?php if ($item['ei_text']) { ?>
                    <p><?php echo $item['ei_text'] ?></p>
                    <?php } ?>
                    <?php if ($item['href_1']) { ?>
                    <div class="btn-more btn-wht en-font"><a href="<?php echo $item['href_1']; ?>" target="<?php echo $item['target_1']; ?>">More View</a></div>
                    <?php } ?>
                </div>

				<?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
                <div class="adm-edit-btn btn-edit-mode" style="bottom:30px">
                    <div class="btn-group">
                        <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&pid=ebslider_itemform&thema=<?php echo $theme; ?>&es_code=<?php echo $es_code; ?>&ei_no=<?php echo $item['ei_no']; ?>&w=u&iw=u&wmode=1" onclick="eb_admset_modal(this.href); return false;" class="ae-item-btn"><i class="far fa-edit"></i> EB슬라이더 아이템 설정</a>
                        <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&pid=ebslider_itemform&thema=<?php echo $theme; ?>&es_code=<?php echo $es_code; ?>&ei_no=<?php echo $item['ei_no']; ?>&w=u&iw=u" target="_blank" class="ae-btn-r" title="새창 열기">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>
                <?php } ?>
			</div>
			<?php } ?>
		<?php } ?>

		<?php if ($es_default) { ?>
			<div class="item">
                <div class="item-image" style="background-image:url(<?php echo $ebslider_skin_url; ?>/image/01.jpg)">
                    <img src="<?php echo $ebslider_skin_url; ?>/image/01m.jpg" alt="image" class="img-responsive visible-xs">
                </div>
                <div class="item-content">
                    <h4 class="en-font">GLOBAL COSMETIC</h4>
                    <h5>전세계가 사랑하는 베스트 셀러 아이템</h5>
                    <p>풍부한 경험을 전달할 수 있도록 독창적인 사고와 감성을 바탕으로 <br>삶의 향상과 만족도를 위한 공간의 디자인을 선보이고자 합니다.</p>
                    <div class="btn-more btn-wht en-font"><a href="#">More View</a></div>
                </div>
			</div>
			<div class="item">
                <div class="item-image" style="background-image:url(<?php echo $ebslider_skin_url; ?>/image/02.jpg)">
                    <img src="<?php echo $ebslider_skin_url; ?>/image/02m.jpg" alt="image" class="img-responsive visible-xs">
                    <h4 class="sound_only">메인 슬라이더 2</h4>
                </div>
                <div class="item-content">
                    <h4 class="en-font">BEST SELLER ITEM</h4>
                    <h5>당신의 빛나는 피부를 만들어 나가는 베스트 셀러 아이템</h5>
                    <p>풍부한 경험을 전달할 수 있도록 독창적인 사고와 감성을 바탕으로 <br>삶의 향상과 만족도를 위한 공간의 디자인을 선보이고자 합니다.</p>
                    <div class="btn-more btn-wht en-font"><a href="#">More View</a></div>
                </div>
			</div>
		<?php } ?>
		</div>
	</div>
	<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/slick/slick.min.js"></script>
	<script>
	$(window).load(function(){
		//시작시 애니메이션 효과 주기
		setTimeout(function() {
			$('.main-slider-<?php echo $es_code; ?> .item').addClass("item-animation");
		}, 700);

		//slick 슬라이더 설정
		$('.main-slider-<?php echo $es_code; ?> .main-slider-inner').show();
		$('.main-slider-<?php echo $es_code; ?> .main-slider-list').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 8000,//8초
			arrows: true,
			dots: false,
			pauseOnHover: false,
		});
	});
	</script>
</div>
<div class="scroll-down">
    <span>Scroll Down</span>
</div>
<?php } ?>