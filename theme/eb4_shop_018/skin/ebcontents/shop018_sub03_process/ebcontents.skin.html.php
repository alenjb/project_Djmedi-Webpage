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
            1. 컨텐츠 마스터 제목 : 채용과정<br>
            2. 스킨선택 : sub03_process<br>
            3. 컨텐츠 아이템에서 사용할 링크수 : 0개<br>
            4. 컨텐츠 아이템에서 사용할 이미지수 : 0개<br>
            5. 컨텐츠 아이템에서 사용할 필드수 : 1개<br>
            <span class='color-indigo'>[EB 컨텐츠 - 아이템 관리]</span><br>
            1. EB컨텐츠 아이템 추가 클릭<br>
            2. 텍스트 필드 #1 입력<br>
            3. 설명글 #1 입력<br>
            <div class='margin-hr-5'></div>
            다운로드 파일은 마스터 첨부파일 등록 시 출력.<br>
            마스터 설명글 입력시 설명 출력.
            </span>
            "><i class="fas fa-question-circle"></i></button>
        </div>
    </div>
</div>
<?php } ?>

<?php if (isset($ec_master) && $ec_master['ec_state'] == '1') { // 보이기 상태에서만 출력 ? ?>
<style>
.ebcontents-process {
    position: relative;
    overflow: hidden;
    margin-bottom: 40px
}
/* 마스터 타이틀 */
.ebcontents-process .master-title {
    margin-bottom: 50px;
    text-align: center;
}
.ebcontents-process .master-title h2 {
    margin-bottom: 20px;
    font-size: var(--normal-font-size);
    color: var(--title-color);
}
.ebcontents-process .master-title h3 {
    font-size: var(--h1-font-size);
}
/* 아이템 */
.ebcontents-process .item dl {
    display: flex;
    flex-wrap: wrap;
    margin: 0;
}
.ebcontents-process .item dl dt {
    flex: 0 0 auto;
    width: 100%;
    font-size: var(--normal-font-size);
}
.ebcontents-process .item dl dt h4 {
    padding: 20px 0;
    margin: 0;
    font-size: var(--normal-font-size);
    font-weight: 700;
    border-top: 1px solid var(--border-color);
    overflow: hidden
}
.ebcontents-process .item dl dt h4 span {
    margin-right: 20px;
    font-weight: 400;
    color: var(--text-color-light);
}
.ebcontents-process .item dl dd {
    flex: 0 0 auto;
    width: 100%;
    padding: 20px 0;
    border-top: 1px solid var(--border-color-light);
}
.ebcontents-process .item dl dd p {
    margin-bottom: 0;
    font-size: var(--small-font-size);
}
/* 마스터 설명글 & 다운로드 버튼 */
.ebcontents-process-bottom p {
    padding: 20px;
    margin: 20px 0;
    font-size: var(--smaller-font-size);
    text-align: center;
    background-color: var(--body-color-deep);
}
.ebcontents-process .btn-recruit {
    margin-bottom: 40px;
    text-align: center
}
.ebcontents-process .btn-recruit a {
    display: inline-block;
    padding: 10px 25px;
    font-size: var(--smaller-font-size);
    color: var(--white-color);
    background: var(--primary-color);
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out
}
.ebcontents-process .btn-recruit a:hover {
    background: var(--primary-color-dark);
}
@media (min-width:768px) {
    .ebcontents-process .item dl dt {width:35%} 
    .ebcontents-process .item dl dd {width:65%}
    .ebcontents-process .item dl dt {padding-right:50px}
}
@media (min-width:992px){
    .ebcontents-process .item dl dt {width:30%;}
    .ebcontents-process .item dl dd {width:70%}
}
</style>

<div class="ebcontents ebcontents-process">
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
    <div class="ebcontents-process-inner" data-aos="fade-up">
    <?php if (is_array($contents)) { ?>
        <?php foreach ($contents as $k => $item) { ?>
        <div class="item item-<?php echo $k + 1 ?>">
            <dl>
                <dt>
                    <?php if ($item['ci_subject_1']) { ?>
                    <h4><span>STEP 0<?php echo $k + 1 ?></span> <?php echo $item['ci_subject_1']; ?></h4>
                    <?php } ?>
                </dt>
                <dd>
                    <?php if ($item['ci_text_1']) { ?>
                    <p><?php echo $item['ci_text_1']; ?></p>
                    <?php } ?>
                </dd>
            </dl>
        </div>
        <?php } ?>
    <?php } ?>

    <?php if ($ec_default) { ?>
        <div class="item item-1">
            <dl>
                <dt><h4><span>STEP 01</span> 지원서 접수</h4></dt>
                <dd><p>온라인 지원을 통해 입사지원 받으며 입사지원서(자기소개서 포함), 최종학력 졸업 및 성적증명서, 경력증명서(해당자), 자격증사본(해당자)을 <strong>recruit@company.com</strong>으로 접수합니다.</p></dd>
            </dl>
        </div>
        <div class="item item-2">
            <dl>
                <dt><h4><span>STEP 02</span> 서류전형</h4></dt>
                <dd><p>내부 심사를 통해 입사지원서등을 검토 및 심사합니다.</p></dd>
            </dl>
        </div>
        <div class="item item-3">
            <dl>
                <dt><h4><span>STEP 03</span> 면접전형</h4></dt>
                <dd><p>서류전형 합격자는 실무 및 임원 면접을 실시합니다. <br>면접전형은 당사 사정에 의거 변경될 수 있습니다.</p></dd>
            </dl>
        </div>
        <div class="item item-4">
            <dl>
                <dt><h4><span>STEP 04</span> 합격통보</h4></dt>
                <dd><p>최종 합격자는 사이트 개제 및 개별통보를 통해 합격 전달합니다.</p></dd>
            </dl>
        </div>
    <?php } ?>
    </div>

    <div class="ebcontents-process-bottom" data-aos="fade-up">
        <?php if ($ec_master['ec_text_1']) { ?>
        <p><?php echo $ec_master['ec_text_1']; ?></p>
        <?php } ?>
        <?php if ($ec_master['ec_file'] && file_exists($ec_master['ec_file_path']) && !is_dir($ec_master['ec_file_path'])) { ?>
        <div class="btn-recruit">
            <a href="<?php echo G5_URL; ?>/page/download.php?ec_code=<?php echo $ec_master['ec_code']; ?>"><i class="fas fa-download"></i> 입사지원서 다운로드</a>
        </div>
        <?php } ?>
    </div>
</div>
<?php } ?>