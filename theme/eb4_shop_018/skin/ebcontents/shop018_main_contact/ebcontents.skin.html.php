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
            1. 컨텐츠 마스터 제목 : 메인 콘텍트 배너<br>
            2. 스킨선택 : shop018_main_contact<br>
            3. 컨텐츠 아이템에서 사용할 링크수 : 1개<br>
            4. 컨텐츠 아이템에서 사용할 이미지수 : 1개<br>
            5. 컨텐츠 아이템에서 사용할 필드수 : 1개<br>
            <span class='color-indigo'>[EB 컨텐츠 - 아이템 관리]</span><br>
            1. EB컨텐츠 아이템 추가 클릭<br>
            2. 텍스트 필드 #1 입력<br>
            3. 설명글 입력<br>
            4. 연결주소 입력<br>
            5. 이미지 #1~2 업로드<br>
            <div class='margin-hr-5'></div>
            이미지 비율 #1(pc) : 1920x450 픽셀 / #2(mobile) : 1000x500 이미지 사용.
            </span>
            "><i class="fas fa-question-circle"></i></button>
        </div>
    </div>
</div>
<?php } ?>

<?php if (isset($ec_master) && $ec_master['ec_state'] == '1') { // 보이기 상태에서만 출력 ? ?>
<style>
/* 아이템 */
.ebcontents-banner .item {position:relative}
.ebcontents-banner .item .item-image {
    background-image: none;
}
.ebcontents-banner .item .item-image img {max-width:100%;height:auto}
.ebcontents-banner .item .item-content {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    padding: 0 15px;
}
.ebcontents-banner .item .item-content h4 {
    margin-bottom: 10px;
    line-height: 1em;
    font-size: var(--biggest-font-size);
    font-weight: 600;
    color: var(--white-color);
}
.ebcontents-banner .item .item-content p {
    margin-bottom: 20px;
    font-size: var(--h3-font-size);
    color: var(--white-color);
}
@media (min-width:992px){
    .ebcontents-banner .item .item-image {
        height: 380px;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .ebcontents-banner .item .item-image img {
        display: none;
    }
    .ebcontents-banner .item .item-content p {
        margin-bottom: 40px;
    }
}
@media (min-width:992px){
    .ebcontents-banner .item .item-image {
        height: 450px;
    }
}
</style>
<div class="ebcontents ebcontents-banner">
    <?php /* ebcontents item */?>
    <?php if (is_array($contents)) { ?>
        <?php foreach ($contents as $k => $item) { ?>
        <div class="item item-<?php echo $k + 1 ?>">
            <div class="item-image" style="background-image:url(<?php echo $item['src_1']; ?>)" >
                <img src="<?php echo $item['src_2']?>" alt="image">
            </div>
            <div class="container">
                <div class="item-content">
                    <?php if ($item['ci_subject_1']) { ?>
                    <h4 class="en-font" data-aos="fade-up"><?php echo $item['ci_subject_1']; ?>
                        <?php if ($item['ci_subject_2']) { ?><small><?php echo $item['ci_subject_2']; ?></small><?php } ?>
                    </h4>
                    <?php } ?>
                    <?php if ($item['ci_text_1']) { ?>
                    <p data-aos="fade-up" data-aos-delay="200"><?php echo $item['ci_text_1']; ?></p>
                    <?php } ?>
                    <?php if ($item['href_1']) { ?>
                    <div class="btn-more btn-wht" data-aos="fade-up" data-aos-delay="400"><a href="<?php echo $item['href_1']; ?>" target="<?php echo $item['target_1']; ?>">More View</a></div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>
    <?php } ?>

    <?php if ($ec_default) { ?>
        <div class="item item-1">
            <div class="item-image" style="background-image:url(<?php echo $ebcontents_skin_url; ?>/image/01.jpg)">
                <img src="<?php echo $ebcontents_skin_url; ?>/image/01m.jpg" alt="image">
            </div>
            <div class="container">
	            <div class="item-content">
	                <h4 class="en-font" data-aos="fade-up">CONTACT US</h4>
	                <p data-aos="fade-up" data-aos-delay="200">가치 실현을 이루는 여러분의 방문을 환영합니다.</p>
                    <div class="btn-more btn-wht" data-aos="fade-up" data-aos-delay="400"><a href="">More View</a></div>
	            </div>
            </div>
        </div>
    <?php } ?>
</div>
<?php } ?>