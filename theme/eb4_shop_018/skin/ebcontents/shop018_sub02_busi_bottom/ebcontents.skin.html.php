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
            1. 컨텐츠 마스터 제목 : 사업분야<br>
            2. 스킨선택 : sub02_busi_btm<br>
            3. 컨텐츠 아이템에서 사용할 링크수 : 0개<br>
            4. 컨텐츠 아이템에서 사용할 이미지수 : 0개<br>
            5. 컨텐츠 아이템에서 사용할 필드수 : 5개<br>
            <span class='color-indigo'>[EB 컨텐츠 - 아이템 관리]</span><br>
            1. EB컨텐츠 아이템 추가 클릭<br>
            2. 텍스트 필드 #1 제목 입력<br>
            3. 텍스트 필드 #2~5 목록 입력<br>
            4. 이미지 #1 업로드<br>
            <div class='margin-hr-5'></div>
            텍스트 필드 #1은 제목, 텍스트 필드 #2~5는 목록 입력<br>
            목록 추가시 해당 스킨파일에서 추가<br>
            EB컨텐츠 아이템 3개로 설정
            </span>
            "><i class="fas fa-question-circle"></i></button>
        </div>
    </div>
</div>
<?php } ?>

<?php if (isset($ec_master) && $ec_master['ec_state'] == '1') { // 보이기 상태에서만 출력 ? ?>
<style>
.ebcontents-busi-bottom {position:relative}
/* 마스터 타이틀 */
.ebcontents-busi-bottom .master-title {
    margin-bottom: 50px;
    text-align: center;
}
.ebcontents-busi-bottom .master-title h2 {
    margin-bottom: 20px;
    font-size: var(--normal-font-size);
    color: var(--title-color);
}
.ebcontents-busi-bottom .master-title h3 {
    font-size: var(--h1-font-size);
}
/* 아이템 */
.ebcontents-busi-bottom .item {
    position:relative;
    height: 100%;
    padding: 50px;
    text-align: center;
    background-color: var(--white-color);
    border: 1px solid var(--body-color-deep);
}
.ebcontents-busi-bottom .item .item-content {
    position:relative;
    text-align:center;
}
.ebcontents-busi-bottom .item .item-content .content-num {
    position: relative;
    margin-bottom: 25px;
    font-size: var(--h1-font-size);
    font-weight: 700;
    color: var(--body-color-deep);
    -webkit-text-stroke: 1px var(--border-color-light);
    text-stroke: 1px var(--border-color-light);
}
.ebcontents-busi-bottom .item .item-content .content-num:after {
    content: "";
    display: block;
    opacity: .7;
    position: absolute;
    left: 50%;
    bottom: -12px;
    width: 20px;
    height: 3px;
    margin-left: -10px;
    background-color: var(--primary-color-light);
}
.ebcontents-busi-bottom .item .item-content h4 {
    margin-bottom: 20px;
    font-size: var(--h3-font-size);
}
.ebcontents-busi-bottom .item .item-content p {
    margin-bottom: 10px;
    font-size: var(--small-font-size);
    color: var(--text-color-light);
}
@media (min-width:768px) {
    .ebcontents-busi-bottom .item .item-content .content-num {
        margin-bottom: 40px;
    }
    .ebcontents-busi-bottom .item .item-content .content-num:after {
        bottom: -20px;
    }
}
@media (min-width:992px){
    .ebcontents-busi-bottom .item {
        padding: 50px;
    }
}
.content-num img{
    width: 100%; /* 이미지가 div의 너비에 맞게 조정됩니다 */
    height: auto; /* 이미지의 높이를 자동으로 조정하여 비율을 유지합니다 */
    display: block; /* 이미지가 블록 요소로 표시되도록 설정합니다 */
}
</style>

<div class="ebcontents ebcontents-busi-bottom">
    <?php /* ebcontents master */?>
    <div class="master-title">
        <?php if ($ec_master['ec_subject_1']) { ?>
        <h2 class="en-font"><?php echo $ec_master['ec_subject_1']; ?></h2>
        <?php } ?>
        <?php if ($ec_master['ec_subject_2']) { ?>
        <h3><?php echo $ec_master['ec_subject_2']; ?></h3>
        <?php } ?>
    </div>

    <?php /* ebcontents item */?>
    <div class="row g-4">
        <?php if (is_array($contents)) { ?>
            <?php foreach ($contents as $k => $item) { ?>
            <div class="col-md-4">
                <div class="item item-<?php echo $k + 1 ?>" data-aos-delay="<?php echo ($k + 1)*3 ?>00">
                    <div class="item-content">
                        <div class="content-num">0<?php echo $k + 1 ?></div>
                        <?php if ($item['ci_subject_1']) { ?>
                        <h4><?php echo $item['ci_subject_1']; ?></h4>
                            <div class="content-num">
                                <?php
                                if ($k == 0) { // 광명당 제약
                                    $href = "http://kmdm.co.kr/intro/intro.php";
                                } elseif ($k == 1) { // 보국제약
                                    $href = "http://www.xn--3e0bl80alnge9p.kr/";
                                } elseif ($k == 2) { // 대한쎌팜
                                    $href = "http://www.dhcp.kr/";
                                } elseif($k == 3) { //대연제약
                                    $href = "http://www.dypharm.co.kr/";
                                }
                                ?>
                                <a href="<?php echo $href; ?>"><img class="content-num" src="/data/brand_image/0<?php echo$k + 1 ?>.jpg"></a>
                            </div>
                        <?php } ?>
                        <?php if ($item['ci_subject_2']) { ?>
                        <p><?php echo $item['ci_subject_2']; ?></p>
                        <?php } ?>
                        <?php if ($item['ci_subject_3']) { ?>
                        <p><?php echo $item['ci_subject_3']; ?></p>
                        <?php } ?>
                        <?php if ($item['ci_subject_4']) { ?>
                        <p><?php echo $item['ci_subject_4']; ?></p>
                        <?php } ?>
                        <?php if ($item['ci_subject_5']) { ?>
                        <p><?php echo $item['ci_subject_5']; ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        <?php } ?>

        <?php if ($ec_default) { ?>
            <div class="col-md-4">
                <div class="item item-1" data-aos="fade-up" data-aos-delay="300">
                    <div class="item-content">
                        <div class="content-num">01</div>
                        <h4>솔루션 산업의 보급화</h4>
                        <p>도시교통정비 기본계획 및 중기 계획</p>
                        <p>도로건설 관리계획</p>
                        <p>도로/철도 민간투자사업 교통수요</p>
                        <p>공동주택, 업무시설 등 대규모 건축물</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item item-2" data-aos="fade-up" data-aos-delay="600">
                    <div class="item-content">
                        <div class="content-num">02</div>
                        <h4>최첨단 솔루션 기술화</h4>
                        <p>도시교통정비 기본계획 및 중기 계획</p>
                        <p>공동주택, 업무시설 등 대규모 건축물</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item item-3" data-aos="fade-up" data-aos-delay="900">
                    <div class="item-content">
                        <div class="content-num">03</div>
                        <h4>패키지 프로그램</h4>
                        <p>도시교통정비 기본계획 및 중기 계획</p>
                        <p>도로건설 관리계획</p>
                        <p>도로/철도 민간투자사업 교통수요</p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php } ?>