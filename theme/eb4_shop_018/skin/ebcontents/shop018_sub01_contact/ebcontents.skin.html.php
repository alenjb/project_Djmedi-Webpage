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
            1. 컨텐츠 마스터 제목 : 찾아오시는 길<br>
            2. 스킨선택 : sub01_contact<br>
            3. 컨텐츠 아이템에서 사용할 링크수 : 0개<br>
            4. 컨텐츠 아이템에서 사용할 이미지수 : 0개<br>
            5. 컨텐츠 아이템에서 사용할 필드수 : 0개<br>
            <span class='color-indigo'>[EB 컨텐츠 - 아이템 관리]</span><br>
            1. EB컨텐츠 아이템 추가 클릭<br>
            2. 설명글#1 입력(구글지도 iframe)<br>
            <div class='margin-hr-5'></div>
            구글지도 iframe을 설명글#1에 입력.
            </span>
            "><i class="fas fa-question-circle"></i></button>
        </div>
    </div>
</div>
<?php } ?>

<?php if (isset($ec_master) && $ec_master['ec_state'] == '1') { // 보이기 상태에서만 출력 ? ?>
<style>
.ebcontents-contact {position:relative}
.contact-info dl {display:flex;flex-wrap:wrap;margin:0}
.contact-info dl dt {flex:0 0 auto;width:100%;padding:15px 20px;border-bottom:1px solid var(--border-color)}
.contact-info dl dt h6 {margin:0;font-size:var(--small-font-size);font-weight:700}
.contact-info dl dd {flex:0 0 auto;width:100%;padding:15px 20px;font-size:var(--small-font-size);border-bottom:1px solid var(--border-color-light)}
@media (min-width:768px){
    .contact-info dl dt {width:35%}
    .contact-info dl dd {width:65%}
    .contact-info dl dt h6, .contact-info dl dd {font-size:14px}
}
@media (min-width:992px){
    .contact-info dl dt {width:20%}
    .contact-info dl dd {width:80%}
}
</style>
<div class="ebcontents ebcontents-contact">
    <div class="ebcontents-wrap">
        <div class="item" data-aos="fade-up">
            <?php /* ebcontents item */?>
            <?php if (is_array($contents)) { ?>
                <?php foreach ($contents as $k => $item) { ?>
                <?php /* 지도 */ ?>
                <?php if ($item['ci_text_1']) { ?>
                <div class="contact-map"><?php echo $item['ci_text_1']; ?></div>
                <?php } ?>
                <?php } ?>
            <?php } ?>

            <?php if ($ec_default) { ?>
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.3232189018213!2d126.97694200000001!3d37.57100600000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca2ec98800045%3A0xdd5786518f45a705!2z7J207Iic7Iug7J6l6rWw64-Z7IOB!5e0!3m2!1sko!2skr!4v1430180093757" width="100%" width=100% height="450" frameborder="0"></iframe>
            </div>
            <?php } ?>
        </div>
	        
        <div class="item" data-aos="fade-up">
            <?php /* 회사정보 */ ?>
            <div class="contact-info">
                <dl>
                    <dt><h6>회사명</h6></dt>
                    <dd><?php echo $bizinfo['bi_company_name'] ?></dd>
                </dl>
                <dl>
                    <dt><h6>대표이사</h6></dt>
                    <dd><?php echo $bizinfo['bi_company_ceo'] ?></dd>
                </dl>
                <dl>
                    <dt><h6>주소</h6></dt>
                    <dd><?php echo $bizinfo['bi_company_addr1'] ?> <?php echo $bizinfo['bi_company_addr2'] ?> <?php echo $bizinfo['bi_company_addr3'] ?></dd>
                </dl>
                <dl>
                    <dt><h6>사업자등록번호</h6></dt>
                    <dd><?php echo $bizinfo['bi_company_bizno'] ?></dd>
                </dl>
                <dl>
                    <dt><h6>대표전화</h6></dt>
                    <dd><?php echo $bizinfo['bi_company_tel'] ?></dd>
                </dl>
                <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
                <p class="color-red margin-top-20"><i class="fas fa-exclamation-circle"></i> 하단 기업 정보 설정에서 내용 입력(편집모드 on 일때 보임)</p>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>