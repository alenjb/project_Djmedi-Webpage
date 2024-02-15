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
			1. 슬라이더 마스터 제목 : SPECIALITY BEST ITEM<br>
			1. 슬라이더 마스터 설명글 : 풍부한 경험을 전달할...<br>
			2. 스킨선택 : shop018_center_slider<br>
			3. 아이템 링크수 : 1개<br>
			4. 아이템 이미지수 : 1개<br>
			<span class='color-indigo'>[EB 슬라이더 - 아이템 관리]</span><br>
			1. EB 슬라이더 아이템 추가 클릭<br>
			2. 대표 타이틀 입력<br>
			3. 설명문구 입력<br>
			3. 연결주소 [링크] 입력<br>
			4. 이미지 #1 업로드<br>
			<div class='margin-hr-5'></div>
            대표타이틀, 설명문구, 연결주소[링크] #1 입력, 이미지 #1 업로드 합니다.<br>
			이미지 비율 1400x800 픽셀 이미지 사용.<br>
			strong 태그 사용시 볼드체 출력, br태그 사용해 줄바꿈.
			</span>
		"><i class="fas fa-question-circle"></i>
			</button>
		</div>
	</div>
</div>
<?php } ?>

<?php if (isset($es_master) && $es_master['es_state'] == '1') { // 보이기 상태에서만 출력 ?>
<style>
.center-slider-<?php echo $es_code; ?> {max-width: 1920px;margin: 0 auto;}
/* 타이틀 */
.center-slider-<?php echo $es_code; ?> .master-title {display:flex;flex-wrap:wrap;justify-content:center;margin-bottom:30px;align-items:center;}
.center-slider-<?php echo $es_code; ?> .master-title .master-title-lft {position:relative;}
.center-slider-<?php echo $es_code; ?> .master-title .master-title-lft:after {content:"";display:block;position:absolute;background-color:var(--border-color-light);}
.center-slider-<?php echo $es_code; ?> .master-title .master-title-lft h2 {font-size:var(--h1-font-size);font-family:var(--en-font);font-weight:600;}
.center-slider-<?php echo $es_code; ?> .master-title .master-title-rgt p {font-size:var(--normal-font-size);}
/* --- 메인 슬라이더 --- */
.center-slider-<?php echo $es_code; ?> {display: none;position: relative;}
.center-slider-<?php echo $es_code; ?> .item {position: relative;}
/* 이미지 */
.center-slider-<?php echo $es_code; ?> .item-image {position: relative;}
.center-slider-<?php echo $es_code; ?> .item-image img {max-width: 100%;height: auto;}
/* 내용 */
.center-slider-<?php echo $es_code; ?> .item-content {position: absolute;top: 50%;left:5%;transform: translateY(-50%);width: 100%;padding: 0 15px;}
.center-slider-<?php echo $es_code; ?> .item-content h4 {display: block;position: relative;margin: 0 0 5px;font-size: var(--biggest-font-size);word-break: keep-all;color:var(--white-color);}
.center-slider-<?php echo $es_code; ?> .item-content p {margin: 0 0 25px;line-height: 1.5em;font-size: var(--h3-font-size);font-weight:300;word-break: keep-all;color:var(--white-color);}
/* 애니메이션 */
.center-slider-<?php echo $es_code; ?> .item-content h4,
.center-slider-<?php echo $es_code; ?> .item-content p,
.center-slider-<?php echo $es_code; ?> .item-content .btn-more {opacity:0;transition:all .6s ease-in-out;transform:translateX(40px);}
.center-slider-<?php echo $es_code; ?> .item-animation .item-content h4 {transition-delay:.4s;}
.center-slider-<?php echo $es_code; ?> .item-animation .item-content p {transition-delay:.8s;}
.center-slider-<?php echo $es_code; ?> .item-animation .item-content .btn-more {transition-delay:1.2s;}
.center-slider-<?php echo $es_code; ?> .slick-active .item-animation .item-content h4,
.center-slider-<?php echo $es_code; ?> .slick-active .item-animation .item-content p,
.center-slider-<?php echo $es_code; ?> .slick-active .item-animation .item-content .btn-more {opacity:1;transform:translateX(0);}
/* 좌우 버튼(arrows) */
.center-slider-<?php echo $es_code; ?> .slick-next,
.center-slider-<?php echo $es_code; ?> .slick-prev {opacity:0;width:40px;height:40px;background:rgba(0,0,0,.6);-webkit-transition:all .3s linear;-moz-transition:all .3s linear;-o-transition:all .3s linear;-ms-transition:all .3s linear;transition:all .3s linear;border-radius:50%;}
.center-slider-<?php echo $es_code; ?> .slick-next:hover,
.center-slider-<?php echo $es_code; ?> .slick-prev:hover {background:rgba(0,0,0,.8);}
.center-slider-<?php echo $es_code; ?> .slick-next {right:5px;z-index:1;}
.center-slider-<?php echo $es_code; ?> .slick-prev {left:5px;z-index:1}
.center-slider-<?php echo $es_code; ?> :hover .slick-next {right:25px;opacity:1}
.center-slider-<?php echo $es_code; ?> :hover .slick-prev {left:25px;opacity:1}
.center-slider-<?php echo $es_code; ?> .slick-next:before,
.center-slider-<?php echo $es_code; ?> .slick-prev:before {content:"";display:block;position:absolute;top:50%;width:14px;height:14px;margin-top:-7px;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-o-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg);transition:all .3s linear}
.center-slider-<?php echo $es_code; ?> .slick-next:before {right:15px;border-right:1px solid #eee;border-top:1px solid #eee;}
.center-slider-<?php echo $es_code; ?> .slick-prev:before {left:15px;border-left:1px solid #eee;border-bottom:1px solid #eee;}
@media (max-width:991px){
	.center-slider-<?php echo $es_code; ?> .master-title {width:60%;margin:0 auto 20px;text-align:center;}
	.center-slider-<?php echo $es_code; ?> .master-title .master-title-lft:after {left:50%;bottom:-7px;width:60px;height:1px;margin-left:-30px}
	.center-slider-<?php echo $es_code; ?> .master-title .master-title-rgt p {margin-top:15px;font-size:var(--small-font-size);}
	.center-slider-<?php echo $es_code; ?> .item-image {background:none;}
	.center-slider-<?php echo $es_code; ?> .item-image img {display:block;}
}
@media (max-width:767px){
	.center-slider-<?php echo $es_code; ?> .master-title {width:90%;}
    .center-slider-<?php echo $es_code; ?> .item-content {left: 0;}
}
@media (min-width:992px){
	.center-slider-<?php echo $es_code; ?> .master-title {margin-bottom:40px;}
	.center-slider-<?php echo $es_code; ?> .master-title .master-title-lft,
	.center-slider-<?php echo $es_code; ?> .master-title .master-title-rgt {width:30%;}
	.center-slider-<?php echo $es_code; ?> .master-title .master-title-lft {padding-right:30px;text-align:right;}
	.center-slider-<?php echo $es_code; ?> .master-title .master-title-lft:after {top:50%;right:0;transform:translateY(-50%);width:1px;height:60%;}
	.center-slider-<?php echo $es_code; ?> .master-title .master-title-rgt {padding-left:30px;}
	
	.center-slider-<?php echo $es_code; ?> .center-slider-list {margin:0 -12px;}
	.center-slider-<?php echo $es_code; ?> .center-slider-list .item {padding: 0 12px;}
	.center-slider-<?php echo $es_code; ?> .item-image {height:400px;background-repeat:no-repeat;background-size:cover;background-position:center;}
	.center-slider-<?php echo $es_code; ?> .item-image img {display:none;}
    .center-slider-<?php echo $es_code; ?> .item-content {width: 70%;}
    .center-slider-<?php echo $es_code; ?> .item-content h5 {margin-bottom: 10px;}
}
@media (min-width:1200px){
	.center-slider-<?php echo $es_code; ?> .item-image {height:450px}
}
@media (min-width:1400px){
	.center-slider-<?php echo $es_code; ?> .item-image {height:500px}
}
@media (min-width:1600px){
	.center-slider-<?php echo $es_code; ?> .item-image {height:600px}
}
</style>

<div class="center-slider-<?php echo $es_code; ?>">
	<?php /* 타이틀 */ ?>
	<div class="container">
		<div class="master-title">
		    <div class="master-title-lft">
		        <?php if ($es_master['es_subject']) { ?>
		        <h2 data-aos="fade-right"><?php echo $es_master['es_subject']; ?></h2>
		        <?php } ?>
		    </div>
		    <div class="master-title-rgt">
		        <?php if ($es_master['es_text']) { ?>
		        <p data-aos="fade-left"><?php echo $es_master['es_text']; ?></p>
		        <?php } ?>
		    </div>
	    </div>
    </div>
	<?php /* eb슬라이더 */ ?>
	<div class="center-slider-inner" data-aos="fade-up" data-aos-delay="300">
		<div class="center-slider-list">
		<?php if (is_array($slider)) { ?>
			<?php foreach ($slider as $k => $item) { ?>
			<div class="item item-<?php echo $k + 1 ?>">
                <div class="item-image" style="background-image:url(<?php echo $item['src_1']?>)">
                    <img src="<?php echo $item['src_1']?>" alt="<?php echo $item['ei_title']?>" >
                </div>
				<div class="item-content">
                    <?php if ($item['ei_title']) { ?>
                    <h4 class="en-font"><?php echo $item['ei_title']?></h4>
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
		            <img src="<?php echo $ebslider_skin_url; ?>/image/01.jpg" alt="image">
                </div>
				<div class="item-content">
					<h4 class="en-font">L-3 메이크업 세트</h4>
					<p>사용자들에게 만족과 가치를 제공합니다.</p>
					<div class="btn-more btn-wht en-font"><a href="#">More View</a></div>
				</div>
			</div>
			<div class="item">
                <div class="item-image" style="background-image:url(<?php echo $ebslider_skin_url; ?>/image/02.jpg)">
		            <img src="<?php echo $ebslider_skin_url; ?>/image/02.jpg" alt="image">
                </div>
				<div class="item-content">
					<h4 class="en-font">L-3 Skin Pack</h4>
					<p>사용자들에게 만족과 가치를 제공합니다.</p>
					<div class="btn-more btn-wht en-font"><a href="#">More View</a></div>
				</div>
			</div>
			<div class="item">
                <div class="item-image" style="background-image:url(<?php echo $ebslider_skin_url; ?>/image/03.jpg)">
		            <img src="<?php echo $ebslider_skin_url; ?>/image/03.jpg" alt="image">
                </div>
				<div class="item-content">
					<h4 class="en-font">L-3 Skin Pack</h4>
					<p>사용자들에게 만족과 가치를 제공합니다.</p>
					<div class="btn-more btn-wht en-font"><a href="#">More View</a></div>
				</div>
			</div>
			<div class="item">
                <div class="item-image" style="background-image:url(<?php echo $ebslider_skin_url; ?>/image/04.jpg)">
		            <img src="<?php echo $ebslider_skin_url; ?>/image/04.jpg" alt="image">
                </div>
				<div class="item-content">
					<h4 class="en-font">L-3 Skin Pack</h4>
					<p>사용자들에게 만족과 가치를 제공합니다.</p>
					<div class="btn-more btn-wht en-font"><a href="#">More View</a></div>
				</div>
			</div>
			<div class="item">
                <div class="item-image" style="background-image:url(<?php echo $ebslider_skin_url; ?>/image/05.jpg)">
		            <img src="<?php echo $ebslider_skin_url; ?>/image/05.jpg" alt="image">
                </div>
				<div class="item-content">
					<h4 class="en-font">L-3 Skin Pack</h4>
					<p>사용자들에게 만족과 가치를 제공합니다.</p>
					<div class="btn-more btn-wht en-font"><a href="#">More View</a></div>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>
	<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/slick/slick.min.js"></script>
	<script>
	$(window).load(function(){
		//slick 슬라이더 설정
		$('.center-slider-<?php echo $es_code; ?> .item').addClass("item-animation");
		$('.center-slider-<?php echo $es_code; ?>').show();
		$('.center-slider-<?php echo $es_code; ?> .center-slider-list').slick({
	        arrows: true,
	        dots: false,
	        autoplay: true,
	        autoplaySpeed: 10000, //10초
	        centerMode: true,
	        centerPadding: '400px',
	        slidesToShow: 1,
	        responsive: [
	        {
	          breakpoint: 1600,
	          settings: {
	            infinite: true,
	            centerMode: true,
	            centerPadding: '300px',
	          }
	        },
	        {
	          breakpoint: 1400,
	          settings: {
	            infinite: true,
	            centerMode: true,
	            centerPadding: '200px',
	          }
	        },
	        {
	          breakpoint: 1200,
	          settings: {
	            infinite: true,
	            centerMode: true,
	            centerPadding: '120px',
	          }
	        },
	        {
	          breakpoint: 992,
	          settings: {
	            infinite: true,
	            centerMode: true,
	            arrows: false,
	            centerPadding: '0px',
	          }
	        },
	        ]
		});
	});
	</script>
</div>
<?php } ?>