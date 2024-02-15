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
            1. 컨텐츠 마스터 제목 : shop018_title_banner<br>
            2. 스킨선택 : shop018_title_banner<br>
            3. 컨텐츠 아이템에서 사용할 링크수 : 1개<br>
            4. 컨텐츠 아이템에서 사용할 이미지수 : 2개<br>
            5. 컨텐츠 아이템에서 사용할 필드수 : 2개<br>
            <span class='color-indigo'>[EB 컨텐츠 - 아이템 관리]</span><br>
            1. EB컨텐츠 아이템 추가 클릭<br>
            2. 텍스트 필드 #1,2 입력<br>
            3. 연결주소 [링크] #1 입력<br>
            4. 이미지 #1,2 업로드<br>
            <div class='margin-hr-5'></div>
			이미지 비율 #1(pc) : 600x975 픽셀 / #2(mobile) : 800x250 이미지 사용.<br>
            </span>
            "><i class="fas fa-question-circle"></i></button>
        </div>
    </div>
</div>
<?php } ?>

<?php if (isset($ec_master) && $ec_master['ec_state'] == '1') { // 보이기 상태에서만 출력 ? ?>
<style>
.ebcontents-title-banner {position:relative}
.ebcontents-title-banner .item {position:relativep}
/* 아이템 */
.ebcontents-title-banner .item {display:block;position: relative;}
.ebcontents-title-banner .item .item-image img {max-width:100%;height:auto}
.ebcontents-title-banner .item .item-content {position: absolute;top: 20px;left: 0;width: 100%;padding:0 15px;color:var(--white-color);}
.ebcontents-title-banner .item .item-content h4 {margin-bottom:5px;font-size:var(--h2-font-size);}
.ebcontents-title-banner .item .item-content h5 {line-height:1.5em;font-size:var(--small-font-size);}
.ebcontents-title-banner .item .btn-more {position: absolute;bottom: 20px;left: 0;width: 100%;padding:0 15px;}
@media (max-width:991px){
	.ebcontents-title-banner .item .item-content h4 {font-size:var(--h1-font-size);}
	.ebcontents-title-banner .item .item-content h5 {font-size:var(--normal-font-size);}
}
@media (max-width:575px){
	.ebcontents-title-banner .item .item-content h5 {display:none;}
}
@media (min-width:992px){
	.ebcontents-title-banner .item .item-image {height: 445px; background-repeat: no-repeat; background-size: cover;background-position: center bottom;}
	.ebcontents-title-banner .item .item-image img {display:none;}
	.ebcontents-title-banner .item .btn-more {text-align: right;}
}
@media (min-width:1200px){
	.ebcontents-title-banner .item .item-image {height: 467px;}
}
@media (min-width:1400px){
	.ebcontents-title-banner .item .item-image {height: 498px;}
}
</style>
<div class="ebcontents ebcontents-title-banner">
    <?php /* ebcontents item */?>
    <div class="ebcontents-title-banner-inner">
        <?php if (is_array($contents)) { ?>
            <?php foreach ($contents as $k => $item) { ?>
            <div class="item item-<?php echo $k + 1 ?>">
                <div class="item-image" style="background-image:url(<?php echo "theme/eb4_shop_018/skin/ebcontents/shop018_title_banner/image/002.png"?>)">
                    <img src="<?php echo $item['src_2']?>" alt="image">
                </div>
                <div class="item-content">
	                <?php if ($item['ci_subject_1']) { ?>
		            <h4 class="en-font"><?php echo $item['ci_subject_1']; ?></h4>
		            <?php } ?>
		            <?php if ($item['ci_subject_2']) { ?>
		            <h5><?php echo $item['ci_subject_2']; ?></h5>
		            <?php } ?>
                </div>
                <?php if ($item['href_1']) { ?>
	            <div class="btn-more btn-wht" style="font-family: Pretendard-Regular, serif;"><a href="<?php echo $item['href_1']; ?>" target="<?php echo $item['target_1']; ?>">More View</a></div>
                <?php } ?>
            </div>
            <?php } ?>
        <?php } ?>

        <?php if ($ec_default) { ?>
            <div class="item item-1">
                <div class="item-image" style="background-image:url(<?php echo $ebcontents_skin_url; ?>/image/01.jpg)">
                    <img src="<?php echo $ebcontents_skin_url; ?>/image/01m.jpg" alt="image">
                </div>
                <div class="item-content">
                    <h4 class="en-font">Recommend</h4>
                    <h5>고객분들이 사용해보고 추천하는 상품</h5>
                </div>
	            <div class="btn-more btn-wht"><a href="">More View</a></div>
            </div>
        <?php } ?>
    </div>
</div>
<?php } ?>