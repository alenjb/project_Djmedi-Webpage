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
            1. 컨텐츠 마스터 제목 : 사업소개<br>
            2. 스킨선택 : sub02_busi_top<br>
            3. 컨텐츠 아이템에서 사용할 링크수 : 0개<br>
            4. 컨텐츠 아이템에서 사용할 이미지수 : 1개<br>
            5. 컨텐츠 아이템에서 사용할 필드수 : 2개<br>
            <span class='color-indigo'>[EB 컨텐츠 - 아이템 관리]</span><br>
            1. EB컨텐츠 아이템 추가 클릭<br>
            2. 텍스트 필드 #1~2 입력<br>
            3. 설명글 입력<br>
            4. 이미지 #1 업로드<br>
            <div class='margin-hr-5'></div>
            이미지 비율 1400x550 픽셀 이미지 사용.
            </span>
            "><i class="fas fa-question-circle"></i></button>
        </div>
    </div>
</div>
<?php } ?>

<?php if (isset($ec_master) && $ec_master['ec_state'] == '1') { // 보이기 상태에서만 출력 ? ?>
<style>
.ebcontents-busi-top {
    position:relative;
    margin-bottom:60px
}
/* 아이템 */
.ebcontents-busi-top .item {position:relative}
.ebcontents-busi-top .item .item-image img {max-width:100%;height:auto}
.ebcontents-busi-top .item .item-content {
    position: relative;
    padding: 15px 0 0;
}
.ebcontents-busi-top .item .item-content h4 {
    padding: 15px;
    margin-bottom: 10px;
    line-height: 1.2em;
    font-size: var(--h2-font-size);
    color: var(--white-color);
    background-color: var(--title-color);
}
.ebcontents-busi-top .item .item-content h4 small {
    opacity: .6;
    font-size: var(--small-font-size);
}
.ebcontents-busi-top .item .item-content p {
    font-size: var(--normal-font-size);
    color: var(--text-color);
}
@media (min-width:992px) {
    .ebcontents-busi-top {
        margin-bottom: 120px;
    }
    .ebcontents-busi-top .item .item-content {
        padding: 10px 15px 0 300px;
    }
    .ebcontents-busi-top .item .item-content h4 {
        position: absolute;
        left: 15px;
        top: -60px;
        width: 250px;
        padding: 40px;
    }
    .ebcontents-busi-top .item .item-content h4 small {
        display: block;
    }
}
@media (min-width:1200px) {
    .ebcontents-busi-top .item .item-content {
        padding: 20px 50px 0 350px;
    }
    .ebcontents-busi-top .item .item-content h4 {
        left: 50px;
    }
}
</style>

<div class="ebcontents ebcontents-busi-top">
    <?php /* ebcontents item */?>
    <?php if (is_array($contents)) { ?>
        <?php foreach ($contents as $k => $item) { ?>
        <div class="item item-<?php echo $k + 1 ?>">
            <div class="item-image">
                <img src="<?php echo $item['src_1']?>" alt="image">
            </div>
            <div class="item-content">
                <?php if ($item['ci_subject_1']) { ?>
                <h4 data-aos="fade-up"><?php echo $item['ci_subject_1']; ?>
                    <?php if ($item['ci_subject_2']) { ?><small><?php echo $item['ci_subject_2']; ?></small><?php } ?>
                </h4>
                <?php } ?>
                <?php if ($item['ci_text_1']) { ?>
                <p data-aos="fade-up" data-aos-delay="150"><?php echo $item['ci_text_1']; ?></p>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    <?php } ?>

    <?php if ($ec_default) { ?>
        <div class="item item-1">
            <div class="item-image">
                <img src="<?php echo $ebcontents_skin_url; ?>/image/01.jpg" alt="image">
            </div>
            <div class="item-content">
                <h4 data-aos="fade-up">라이트벌브<small class="en-font">Light Bulb</small></h4>
                <p data-aos="fade-up" data-aos-delay="150">Spirit Of Space, 공간의 영혼을 디자인하는 마음으로 공간이 그 자체로서 개성을 드러내며 풍부한 경험을 전달할 수 있도록 독창적인 사고와 감성을 바탕으로 한 디자인을 선보이고자 합니다.</p>
            </div>
        </div>
    <?php } ?>
</div>
<?php } ?>