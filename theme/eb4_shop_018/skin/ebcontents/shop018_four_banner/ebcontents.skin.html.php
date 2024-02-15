<?php
if (!defined('_EYOOM_')) exit;
?>
<?php /* eb콘텐츠 편집 버튼 */ ?>
<?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
<div class="position-relative <?php if ($ec_master['ec_state'] == '2') { ?>eb-hidden-space<?php } ?>">
    <div class="adm-edit-btn btn-edit-mode" style="top:10px;text-align:center">
        <div class="btn-group">
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=ebcontents_form&amp;thema=<?php echo $theme; ?>&amp;ec_code=<?php echo $ec_master['ec_code']; ?>&amp;w=u&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;"  class="ae-btn-l"><i class="far fa-edit"></i> EB컨텐츠 마스터 설정</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=ebcontents_form&amp;thema=<?php echo $theme; ?>&amp;ec_code=<?php echo $ec_master['ec_code']; ?>&amp;w=u" target="_blank" class="ae-btn-r" title="새창 열기">
                <i class="far fa-window-maximize"></i>
            </a>
            <button type="button" class="ae-btn-info" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-html="true" data-bs-content="
            <span class='font-size-11'>
            <strong class='color-indigo'>좌측 [EB컨텐츠 설정하기 버튼] 클릭 후 아래 설명 참고</strong><br>
            <div class='margin-hr-5'></div>
            <span class='color-indigo'>[설정정보]</span><br>
            1. 컨텐츠 마스터 제목 : four banner<br>
            2. 스킨선택 : shop018_four_banner<br>
            2. EB콘텐츠 마스터 타이틀 #1 : BEAUTIFUL SKIN CARE<br>
            2. EB콘텐츠 마스터 설명글 #1 : 풍부한 경험을 전달할 수 있도록...<br>
            3. 컨텐츠 아이템에서 사용할 링크수 : 1개<br>
            4. 컨텐츠 아이템에서 사용할 이미지수 : 1개<br>
            5. 컨텐츠 아이템에서 사용할 필드수 : 1개<br>
            <span class='color-indigo'>[EB 컨텐츠 - 아이템 관리]</span><br>
            1. EB컨텐츠 아이템 추가 클릭<br>
            2. 텍스트 필드 #1 입력<br>
            3. 연결주소 [링크] #1 입력<br>
            4. 이미지 #1 업로드<br>
            <div class='margin-hr-5'></div>
			이미지 비율 #1 : 800x800 픽셀 이미지 사용.<br>
            </span>
            "><i class="fas fa-question-circle"></i></button>
        </div>
    </div>
</div>
<?php } ?>

<?php if (isset($ec_master) && $ec_master['ec_state'] == '1') { // 보이기 상태에서만 출력 ? ?>
<style>
.ebcontents-four-banner {position:relative}
/* 타이틀 */
.ebcontents-four-banner .master-title {display:flex;flex-wrap:wrap;justify-content:center;align-items:center;margin-bottom:30px;}
.ebcontents-four-banner .master-title .master-title-lft {position:relative;}
.ebcontents-four-banner .master-title .master-title-lft:after {content:"";display:block;position:absolute;background-color:var(--border-color-light);}
.ebcontents-four-banner .master-title .master-title-lft h2 {font-size:var(--h1-font-size);font-family:var(--en-font);font-weight:600;}
.ebcontents-four-banner .master-title .master-title-rgt p {font-size:var(--normal-font-size);}
/* 아이템 */
.ebcontents-four-banner .ebcontents-four-banner-inner {display:flex;flex-wrap:wrap;}
.ebcontents-four-banner .item {flex:0 0 auto;width:50%;position:relative}
.ebcontents-four-banner .item a {display:block;overflow:hidden;}
.ebcontents-four-banner .item a img {max-width:100%;height:auto;transition:.5s;}
.ebcontents-four-banner .item a:hover img {transform:scale(1.05);}
.ebcontents-four-banner .item a .item-content {position:absolute;top:50%;transform:translateY(-50%);width:100%;padding:0 10px;text-align:center;}
.ebcontents-four-banner .item a .item-content h4 {margin-bottom:5px;font-size:var(--h2-font-size);color:var(--white-color);transition:.3s;}
.ebcontents-four-banner .item a .item-content p {font-size:var(--normal-font-size);color:var(--white-color);transition:.3s;}
@media (min-width:768px){
}
@media (min-width:992px){
	.ebcontents-four-banner .master-title {margin-bottom:40px;}
	.ebcontents-four-banner .master-title .master-title-lft,
	.ebcontents-four-banner .master-title .master-title-rgt {width:30%;}
	.ebcontents-four-banner .master-title .master-title-lft {padding-right:30px;text-align:right;}
	.ebcontents-four-banner .master-title .master-title-lft:after {top:50%;right:0;transform:translateY(-50%);width:1px;height:60%;}
	.ebcontents-four-banner .master-title .master-title-rgt {padding-left:30px;}
	.ebcontents-four-banner .item {width:25%;}
}
@media (max-width:991px){
	.ebcontents-four-banner .master-title {width:60%;margin:0 auto 20px;text-align:center;}
	.ebcontents-four-banner .master-title .master-title-lft:after {left:50%;bottom:-7px;width:60px;height:1px;margin-left:-30px}
	.ebcontents-four-banner .master-title .master-title-rgt p {margin-top:15px;font-size:var(--small-font-size);}
}
@media (max-width:767px){
	.ebcontents-four-banner .master-title {width:90%;}
}
</style>
<div class="ebcontents ebcontents-four-banner">
    <?php /* ebcontents master */?>
    <div class="master-title">
	    <div class="master-title-lft">
	        <?php if ($ec_master['ec_subject_1']) { ?>
	        <h2 data-aos="fade-right"><?php echo $ec_master['ec_subject_1']; ?></h2>
	        <?php } ?>
	    </div>
	    <div class="master-title-rgt">
	        <?php if ($ec_master['ec_text_1']) { ?>
	        <p data-aos="fade-left"><?php echo $ec_master['ec_text_1']; ?></p>
	        <?php } ?>
	    </div>
    </div>
    <?php /* ebcontents item */?>
    <div class="ebcontents-four-banner-inner">
        <?php if (is_array($contents)) { ?>
            <?php foreach ($contents as $k => $item) { ?>
            <div class="item item-<?php echo $k + 1 ?>" data-aos="fade-up" data-aos-delay="<?php echo ($k + 1)*3 ?>00">
	            <?php if ($item['href_1']) { ?>
	            <a href="<?php echo $item['href_1']; ?>" target="<?php echo $item['target_1']; ?>">
		        <?php } ?>
		        	<img src="<?php echo $item['src_1']?>" alt="<?php echo $item['ci_subject_1']; ?>">
	                <div class="item-content">
		                <?php if ($item['ci_subject_1']) { ?>
	                    <h4><?php echo $item['ci_subject_1']; ?></h4>
	                    <?php } ?>
		                <?php if ($item['ci_text_1']) { ?>
	                    <p><?php echo $item['ci_text_1']; ?></p>
	                    <?php } ?>
	                </div>
	            <?php if ($item['href_1']) { ?>
                </a>
                <?php } ?>
            </div>
            <?php } ?>
        <?php } ?>

        <?php if ($ec_default) { ?>
            <div class="item item-1" data-aos="fade-up" data-aos-delay="300">
	            <a href="">
	                <img src="<?php echo $ebcontents_skin_url; ?>/image/01.jpg" alt="image">
	                <div class="item-content">
		                <h4>기업개요</h4>
		                <p>기업의 개요를 소개</p>
	                </div>
                </a>
            </div>
            <div class="item item-1" data-aos="fade-up" data-aos-delay="600">
	            <a href="">
	                <img src="<?php echo $ebcontents_skin_url; ?>/image/02.jpg" alt="image">
	                <div class="item-content">
		                <h4>브랜드 소개</h4>
		                <p>브랜드의 가치를 소개</p>
	                </div>
                </a>
            </div>
            <div class="item item-1" data-aos="fade-up" data-aos-delay="900">
	            <a href="">
	                <img src="<?php echo $ebcontents_skin_url; ?>/image/03.jpg" alt="image">
	                <div class="item-content">
		                <h4>제품소개</h4>
		                <p>다양한 제품을 소개</p>
	                </div>
                </a>
            </div>
            <div class="item item-1" data-aos="fade-up" data-aos-delay="1200">
	            <a href="">
	                <img src="<?php echo $ebcontents_skin_url; ?>/image/04.jpg" alt="image">
	                <div class="item-content">
		                <h4>고객센터</h4>
		                <p>새소식 및 문의</p>
	                </div>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
<?php } ?>