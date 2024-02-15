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
			1. 슬라이더 마스터 제목 : 투 슬라이더<br>
			2. 스킨선택 : shop018_two_slider<br>
			3. 아이템 링크수 : 1개<br>
			4. 아이템 이미지수 : 1개<br>
			<span class='color-indigo'>[EB 슬라이더 - 아이템 관리]</span><br>
			1. EB 슬라이더 아이템 추가 클릭<br>
			2. 대표 타이틀 입력<br>
			3. 설명문구 입력<br>
			3. 연결주소 [링크] 입력<br>
			4. 이미지 #1 업로드<br>
			<div class='margin-hr-5'></div>
            대표타이틀, 연결주소[링크] #1 입력, 이미지 #1 업로드 합니다.<br>
			이미지 비율 800x300 픽셀 이미지 사용.<br>
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
/* --- 메인 슬라이더 --- */
.two-slider-<?php echo $es_code; ?> {display: none;position: relative;}
.two-slider-<?php echo $es_code; ?> .item {position: relative;}
/* 이미지 */
.two-slider-<?php echo $es_code; ?> .item-image {position: relative;}
.two-slider-<?php echo $es_code; ?> .item-image img {max-width: 100%;height: auto;}
/* 내용 */
.two-slider-<?php echo $es_code; ?> .item-content {position: absolute;top: 50%;left:5%;transform: translateY(-50%);width: 100%;padding: 0 15px;}
.two-slider-<?php echo $es_code; ?> .item-content h4 {display: block;position: relative;margin: 0 0 5px;font-size: var(--h2-font-size);word-break: keep-all;}
.two-slider-<?php echo $es_code; ?> .item-content p {margin: 0 0 25px;line-height: 1.5em;font-size: var(--small-font-size);word-break: keep-all;}
/* 좌우 버튼(arrows) */
.two-slider-<?php echo $es_code; ?> .slick-next,
.two-slider-<?php echo $es_code; ?> .slick-prev {opacity:0;width:40px;height:40px;background:rgba(0,0,0,.6);-webkit-transition:all .3s linear;-moz-transition:all .3s linear;-o-transition:all .3s linear;-ms-transition:all .3s linear;transition:all .3s linear;border-radius:50%;}
.two-slider-<?php echo $es_code; ?> .slick-next:hover,
.two-slider-<?php echo $es_code; ?> .slick-prev:hover {background:rgba(0,0,0,.8);}
.two-slider-<?php echo $es_code; ?> .slick-next {right:5px;z-index:1;}
.two-slider-<?php echo $es_code; ?> .slick-prev {left:5px;z-index:1}
.two-slider-<?php echo $es_code; ?> :hover .slick-next {right:15px;opacity:1}
.two-slider-<?php echo $es_code; ?> :hover .slick-prev {left:15px;opacity:1}
.two-slider-<?php echo $es_code; ?> .slick-next:before,
.two-slider-<?php echo $es_code; ?> .slick-prev:before {content:"";display:block;position:absolute;top:50%;width:14px;height:14px;margin-top:-7px;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-o-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg);transition:all .3s linear}
.two-slider-<?php echo $es_code; ?> .slick-next:before {right:15px;border-right:1px solid #eee;border-top:1px solid #eee;}
.two-slider-<?php echo $es_code; ?> .slick-prev:before {left:15px;border-left:1px solid #eee;border-bottom:1px solid #eee;}
@media (max-width:767px){
    .two-slider-<?php echo $es_code; ?> .item-content {left: 0;}
    .two-slider-<?php echo $es_code; ?> .item-content p {margin-bottom:15px;}
}
@media (min-width:992px){
	.two-slider-<?php echo $es_code; ?> .two-slider-list {margin:0 -12px;}
	.two-slider-<?php echo $es_code; ?> .two-slider-list .item {padding: 0 12px;}
    .two-slider-<?php echo $es_code; ?> .item-content {width: 70%;}
    .two-slider-<?php echo $es_code; ?> .item-content h5 {margin-bottom: 10px;}
}
@media (min-width:1920px){
    .two-slider-<?php echo $es_code; ?> {max-width: 1920px;margin: 0 auto;}
}
</style>

<div class="two-slider-<?php echo $es_code; ?>">
	<?php /* eb슬라이더 */ ?>
	<div class="two-slider-inner">
		<div class="two-slider-list">
		<?php if (is_array($slider)) { ?>
			<?php foreach ($slider as $k => $item) { ?>
			<div class="item item-<?php echo $k + 1 ?>">
                <div class="item-image">
	                <?php if ($item['href_1']) { ?>
                    <a href="<?php echo $item['href_1']; ?>" target="<?php echo $item['target_1']; ?>">
                    <?php } ?>
                    	<img src="<?php echo $item['src_1']?>" alt="<?php echo $item['ei_title']?>" >
	                <?php if ($item['href_1']) { ?>
                    </a>
                    <?php } ?>
                </div>
				<div class="item-content">
                    <?php if ($item['ei_title']) { ?>
                    <h4 class="en-font"><?php echo $item['ei_title']?></h4>
                    <?php } ?>
                    <?php if ($item['ei_text']) { ?>
                    <p><?php echo $item['ei_text'] ?></p>
                    <?php } ?>
                    <?php if ($item['href_1']) { ?>
                    <div class="btn-more en-font"><a href="<?php echo $item['href_1']; ?>" target="<?php echo $item['target_1']; ?>">More View</a></div>
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
                <div class="item-image">
	                <a href="">
		                <img src="<?php echo $ebslider_skin_url; ?>/image/01.jpg" alt="image">
	                </a>
                </div>
				<div class="item-content">
					<h4 class="en-font">L-3 Skin Pack</h4>
					<p>사용자들에게 만족과 가치를 제공합니다.</p>
					<div class="btn-more en-font"><a href="#">More View</a></div>
				</div>
			</div>
			<div class="item">
                <div class="item-image">
	                <a href="">
		                <img src="<?php echo $ebslider_skin_url; ?>/image/02.jpg" alt="image">
	                </a>
                </div>
				<div class="item-content">
					<h4 class="en-font">L-3 Skin Pack</h4>
					<p>사용자들에게 만족과 가치를 제공합니다.</p>
					<div class="btn-more en-font"><a href="#">More View</a></div>
				</div>
			</div>
			<div class="item">
				<div class="item-image">
					<a href="">
						<img src="<?php echo $ebslider_skin_url; ?>/image/01.jpg" alt="image">
					</a>
				</div>
				<div class="item-content">
					<h4 class="en-font">L-3 Skin Pack</h4>
					<p>사용자들에게 만족과 가치를 제공합니다.</p>
					<div class="btn-more en-font"><a href="#">More View</a></div>
				</div>
			</div>
			<div class="item">
				<div class="item-image">
					<a href="">
						<img src="<?php echo $ebslider_skin_url; ?>/image/02.jpg" alt="image">
					</a>
				</div>
				<div class="item-content">
					<h4 class="en-font">L-3 Skin Pack</h4>
					<p>사용자들에게 만족과 가치를 제공합니다.</p>
					<div class="btn-more en-font"><a href="#">More View</a></div>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>
	<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/slick/slick.min.js"></script>
	<script>
	$(window).load(function(){
		//slick 슬라이더 설정
		$('.two-slider-<?php echo $es_code; ?>').show();
		$('.two-slider-<?php echo $es_code; ?> .two-slider-list').slick({
			slidesToShow: 2,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 8000,//8초
			arrows: true,
			dots: false,
			pauseOnHover: false,
			responsive: [
		        {
                    breakpoint: 991,
		            settings: {
						slidesToShow: 1,
		                arrows: false
		            }
		        }
		    ]
		});
	});
	</script>
</div>
<?php } ?>