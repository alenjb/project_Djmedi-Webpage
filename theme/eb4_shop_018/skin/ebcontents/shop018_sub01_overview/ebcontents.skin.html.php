<?php
if (!defined('_EYOOM_')) exit;
add_stylesheet('<link href="https://fonts.googleapis.com/css?family=Do+Hyeon&amp;subset=korean" rel="stylesheet">',0);
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
            <strong class='color-indigo'>좌측 [EB컨텐츠 설정하기 버튼] 클릭 후 아래 설명 참고<br>
            <div class='margin-hr-5'></div>
            <span class='color-indigo'>[설정정보]</span><br>
            1. 컨텐츠 마스터 제목 : 회사개요<br>
            2. 스킨선택 : sub01_overview<br>
            3. 컨텐츠 아이템에서 사용할 링크수 : 0개<br>
            4. 컨텐츠 아이템에서 사용할 이미지수 : 2개<br>
            5. 컨텐츠 아이템에서 사용할 필드수 : 2개<br>
            <span class='color-indigo'>[EB 컨텐츠 - 아이템 관리]</span><br>
            1. EB컨텐츠 아이템 추가 클릭<br>
            2. 텍스트 필드 #1~2 입력<br>
            3. 설명글 #1 입력<br>
            4. 이미지 #1 업로드<br>
            <div class='margin-hr-5'></div>
            이미지 비율 #1(pc) : 800x1000 픽셀 / #2(mobile) : 1000x450 이미지 사용.<br>
            설명글에 br태그 사용시 줄바뀜.<br>
            strong태그 사용시 볼드체 출력.<br>
            </span>
            "><i class="fas fa-question-circle"></i></button>
            </div>
        </div>
    </div>
<?php } ?>

<?php if (isset($ec_master) && $ec_master['ec_state'] == '1') { // 보이기 상태에서만 출력 ? ?>
    <style>
        .ebcontents-overview {position:relative}
        /* 아이템 */
        .ebcontents-overview .item {
            position: relative;
        }
        .ebcontents-overview .item .row {
            align-items: center
        }
        .ebcontents-overview .item .item-image {
            position: relative;
        }
        .ebcontents-overview .item .item-content h3 {
            margin-bottom: 20px;
            line-height: 35px;
            font-size:30px;
            font-weight: 300;
        }
        .ebcontents-overview .item .item-content h3 span {
            color: #c88719;
        }
        .ebcontents-overview .item .item-content h3 strong {
            display: block;
        }
        .ebcontents-overview .item .item-content h4 {
            margin: 0 0 10px;
            font-size: 18px;
            font-weight: 300;
        }
        .ebcontents-overview .item .item-content p {
            font-size: 13px;
        }
        @media (min-width: 992px){
            .ebcontents-overview .item .item-content {
                padding: 10px 0 15px 50px;
                margin-left: 50px;
                border-left: 1px solid #c88719;
            }
            .ebcontents-overview .item .item-content h3 {
                margin-bottom: 40px;
                line-height: 60px;
                font-size:50px;
            }
            .ebcontents-overview .item .item-content h4 {
                margin: 0 0 30px;
                font-size: 24px;
            }
            .ebcontents-overview .item .item-content p {
                font-size: 16px;
            }
        }
        @media (max-width: 991px){
            .ebcontents-overview .item .item-content {
                margin-top:30px;
            }
            .ebcontents-overview .item .item-content h3 br {
                display: none;
            }
        }
    </style>

    <div class="ebcontents ebcontents-overview">
        <div class="ebcontents-overview-inner">
            <?php /* ebcontents item */?>
            <?php if (is_array($contents)) { ?>
                <?php  foreach ($contents as $k => $item) { ?>
                    <div class="item item-<?php echo $k + 1 ?>">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="item-image">
                                    <picture>
                                        <source srcset="<?php echo $item['src_1']?>" media="(min-width:992px)">
                                        <source srcset="<?php echo $item['src_2']?>" media="(max-width:991px)">
                                        <img src="<?php echo $item['src_1']?>" alt="image" class="img-responsive">
                                    </picture>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="item-content">
                                    <?php if ($item['ci_subject_1']) { ?>
                                        <h3><?php echo $item['ci_subject_1']; ?></h3>
                                    <?php } ?>
                                    <?php if ($item['ci_subject_2']) { ?>
                                        <h4><?php echo $item['ci_subject_2']; ?></h4>
                                    <?php } ?>
                                    <?php if ($item['ci_text_1']) { ?>
                                        <p><?php echo $item['ci_text_1']; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>

            <?php if ($ec_default) { ?>
                <div class="item item-1">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="item-image">
                                <picture>
                                    <source srcset="<?php echo $ebcontents_skin_url; ?>/image/01.jpg" media="(min-width:992px)">
                                    <source srcset="<?php echo $ebcontents_skin_url; ?>/image/01m.jpg" media="(max-width:991px)">
                                    <img src="<?php echo $ebcontents_skin_url; ?>/image/01.jpg" alt="image" class="img-responsive">
                                </picture>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="item-content">
                                <h3>항상 고객과 <br>함께 하는 기업<span>.</span> <strong>라이트벌브</strong></h3>
                                <h4><strong>라이트벌브</strong>을 찾아주셔서 감사합니다.</h4>
                                <p>크라우드 펀딩은 자금의 <strong>모집자와 제공자간 거래</strong>가 온라인상에서 소셜미디어에 의한 쌍방향 소통을 바탕으로 한 관계 지향적이고 집단 기능적 속성을 가진 소셜펀딩이다.<br>자금의 모집자와 제공자간 거래가 온라인상에서 소셜미디어에 의한 쌍방향 소통을 바탕으로 한 관계 지향적이고 집단 기능적 속성을 가진 소셜펀딩이다. 자금제공자의 이익추구 목적에 따라 <strong>투자형과 비투자형</strong>으로 구분할 수 있으며, 비투자형은 단순한 기부를 목적으로 하는 기부형(donation)과 일정한 보상을 받는 후원형(reward)이 있고, 투자형은 개인 간의 대출형(lending)과 증권을 매개로 한 지분투자형(equity)이 있다.</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>