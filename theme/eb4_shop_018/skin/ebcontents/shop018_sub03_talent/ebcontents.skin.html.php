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
            1. 컨텐츠 마스터 제목 : 인재상<br>
            2. 스킨선택 : sub03_talent<br>
            3. 컨텐츠 아이템에서 사용할 링크수 : 0개<br>
            4. 컨텐츠 아이템에서 사용할 이미지수 : 1개<br>
            5. 컨텐츠 아이템에서 사용할 필드수 : 2개<br>
            <span class='color-indigo'>[EB 컨텐츠 - 아이템 관리]</span><br>
            1. EB컨텐츠 아이템 추가 클릭<br>
            2. 텍스트 필드 #1 입력<br>
            3. 텍스트 필드 #2 입력<br>
            4. 설명글 #1 입력<br>
            5. 이미지 #1 업로드<br>
            <div class='margin-hr-5'></div>
            배경 이미지 비율 1000x660 픽셀 이미지 사용 <br>
            텍스트 필드 #2에 strong 태그 사용시 빨간색 글자 출력
            </span>
            "><i class="fas fa-question-circle"></i></button>
        </div>
    </div>
</div>
<?php } ?>

<?php if (isset($ec_master) && $ec_master['ec_state'] == '1') { // 보이기 상태에서만 출력 ? ?>
<style>
.ebcontents-talent {
    position: relative;
    overflow: hidden;
    margin-bottom: 50px
}
/* 콘텐츠 아이템 */
.ebcontents-talent li {
    padding: 40px 0;
    border-bottom: 1px solid var(--body-color-deep);
}
.ebcontents-talent li:first-child {
    padding-top: 0
}
.ebcontents-talent li:last-child {
    border-bottom: 0 none
}
.ebcontents-talent .item {
    display: flex;
    flex-wrap: wrap;
    position: relative;
}
.ebcontents-talent .item .ebcontents-image {
    flex: 0 0 auto;
    width: 100%;
}
.ebcontents-talent .item .ebcontents-image img {
    position: relative;
    display: block;
    max-width: 100%;
    height: auto
}
.ebcontents-talent .item .ebcontents-content {
    flex: 0 0 auto;
    width: 100%
}
.ebcontents-talent .item .ebcontents-content h4 {
    margin: 20px 0 10px;
    font-size: var(--biggest-font-size);
    font-weight: 700;
    color: var(--body-color-deep);
    -webkit-text-stroke: 1px var(--border-color-light);
    text-stroke: 1px var(--border-color-light);
}
.ebcontents-talent .item .ebcontents-content h5 {
    margin: 0 0 10px;
    font-size: var(--h3-font-size);
    line-height: 1.3em;
    word-break: keep-all
}
.ebcontents-talent .item .ebcontents-content h5 strong {
    color: var(--title-color);
}
.ebcontents-talent .item .ebcontents-content p {
    margin-bottom: 0;
    line-height: 1.5em;
    font-size: var(--small-font-size);
    font-weight: 300
}
@media (min-width:768px) {
    .ebcontents-talent .item .ebcontents-image {
        width:40%
    } 
    .ebcontents-talent .item .ebcontents-content {
        width:60%
    }
    .ebcontents-talent .item .ebcontents-image {
        padding-right: 50px
    }
}
@media (min-width:992px) {
   .ebcontents-talent .item .ebcontents-content h4 {
       margin-bottom:20px
    }
}
</style>

<div class="ebcontents ebcontents-talent">
    <ul class="list-unstyled">
        <?php if (is_array($contents)) { ?>
            <?php foreach ($contents as $k => $item) { ?>
            <li>
                <div class="item item-<?php echo $k + 1 ?>" data-aos="fade-up">
                    <div class="ebcontents-image">
                        <img src="<?php echo $item['src_1']?>" alt="image">
                    </div>
                    <div class="ebcontents-content">
                        <?php if ($item['ci_subject_1']) { ?>
                        <h4><?php echo $item['ci_subject_1']; ?></h4>
                        <?php } ?>
                        <?php if ($item['ci_subject_2']) { ?>
                        <h5><?php echo $item['ci_subject_2']; ?></h5>
                        <?php } ?>
                        <?php if ($item['ci_text_1']) { ?>
                        <p><?php echo $item['ci_text_1']; ?></p>
                        <?php } ?>
                    </div>
                </div>
            </li>
            <?php } ?>
        <?php } ?>

        <?php if ($ec_default) { ?>
            <li>
                <div class="item item-1" data-aos="fade-up">
                    <div class="ebcontents-image">
                        <img src="<?php echo $ebcontents_skin_url; ?>/image/01.jpg" alt="image">
                    </div>
                    <div class="ebcontents-content">
                        <h4>Challenge</h4>
                        <h5>실패를 두려워 하지 않는 <strong>도전</strong>을 통해 성장해 나갑니다.</h5>
                        <p>자금제공자의 이익추구 목적에 따라 투자형과 비투자형으로 구분할 수 있으며, 비투자형은 단순한 기부를 목적으로 하는 기부형(donation)과 일정한 보상을 받는 후원형(reward)이 있고, 투자형은 개인 간의 대출형(lending)과 증권을 매개로 한 지분투자형(equity)이 있다.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="item item-2" data-aos="fade-up">
                    <div class="ebcontents-image">
                        <img src="<?php echo $ebcontents_skin_url; ?>/image/02.jpg" alt="image">
                    </div>
                    <div class="ebcontents-content">
                        <h4>Change</h4>
                        <h5>주변 환경의 <strong>변화</strong>에도 굳건하게 자리를 지킵니다.</h5>
                        <p>자금제공자의 이익추구 목적에 따라 투자형과 비투자형으로 구분할 수 있으며, 비투자형은 단순한 기부를 목적으로 하는 기부형(donation)과 일정한 보상을 받는 후원형(reward)이 있고, 투자형은 개인 간의 대출형(lending)과 증권을 매개로 한 지분투자형(equity)이 있다.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="item item-3" data-aos="fade-up">
                    <div class="ebcontents-image">
                        <img src="<?php echo $ebcontents_skin_url; ?>/image/03.jpg" alt="image">
                    </div>
                    <div class="ebcontents-content">
                        <h4>Credit</h4>
                        <h5>어떤 상황에서나, 누구에게나 줄 수 있는 <strong>신용</strong>을 가집니다.</h5>
                        <p>자금제공자의 이익추구 목적에 따라 투자형과 비투자형으로 구분할 수 있으며, 비투자형은 단순한 기부를 목적으로 하는 기부형(donation)과 일정한 보상을 받는 후원형(reward)이 있고, 투자형은 개인 간의 대출형(lending)과 증권을 매개로 한 지분투자형(equity)이 있다.</p>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
<?php } ?>