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
            1. 컨텐츠 마스터 제목 : 회사연혁<br>
            2. 스킨선택 : sub01_history<br>
            3. 컨텐츠 아이템에서 사용할 링크수 : 0개<br>
            4. 컨텐츠 아이템에서 사용할 이미지수 : 1개<br>
            5. 컨텐츠 아이템에서 사용할 필드수 : 15개<br>
            <span class='color-indigo'>[EB 컨텐츠 - 아이템 관리]</span><br>
            1. EB컨텐츠 아이템 추가 클릭<br>
            2. 텍스트 필드 #1 입력 - 년도<br>
            3. 텍스트 필드 #2 입력 - 년도 밑에 문장<br>
            4. 텍스트 필드 #3~15 입력 - 연혁 목록<br>
            <div class='margin-hr-5'></div>
            이미지 비율 800x380 이미지 사용.<br>
            텍스트 필드 #3~15는 span 태그로 년월을 표현하며 연혁 목록 수 추가는 마스터에서 필드수를 추가.<br>
            </span>
            "><i class="fas fa-question-circle"></i></button>
        </div>
    </div>
</div>
<?php } ?>

<?php if (isset($ec_master) && $ec_master['ec_state'] == '1') { // 보이기 상태에서만 출력 ? ?>
<style>
.ebcontents-history {position:relative;overflow:hidden}
/* 콘텐츠 마스터 */
.ebcontents-history .master-title {margin-bottom: 20px;text-align: center;}
.ebcontents-history .master-title h2 {margin-bottom: 10px;font-size: 20px;}
.ebcontents-history .master-title h3 {font-size: 16px;color: #707070;}
/* 콘텐츠 아이템 */
.ebcontents-history .ebcontents-list > li {margin-bottom:30px}
.ebcontents-history .ebcontents-list > li:last-child {margin-bottom:0}
.ebcontents-history .ebcontents-box {position:relative}
.ebcontents-history .ebcontents-box:before, .ebcontents-history .ebcontents-box:after {content:"";display:block;position:absolute}
.ebcontents-history .history-year {font-size:20px;color:#1b1b1b}
.ebcontents-history .history-content {margin-bottom:10px;font-size:14px;color:#707070}
.ebcontents-history .ebcontents-box-right {position:relative}
.ebcontents-history .ebcontents-box-right:before {top:0;left:0;width:1px;height:100%;border-top:20px solid #fff;background:#1b1b1b}
.ebcontents-history .ebcontents-box-right:after {top:0px;left:-7px;width:15px;height:15px;background:#fff;border:5px solid #bb0a30;border-radius:100% !important}
.ebcontents-history .history-list ul li {position:relative;margin:10px 0;padding-left:70px;font-size:13px;color:#707070}
.ebcontents-history .history-list ul li:last-child {margin-bottom:0}
.ebcontents-history .history-list ul li span {position:absolute;top:0;left:0;font-weight:700;color:#242B3A}
@media (max-width:991px) {
	.ebcontents-history .ebcontents-box {padding-left:30px;}
	.ebcontents-history .ebcontents-box:before {top:0;left:10px;width:1px;height:100%;border-top:20px solid #fff;background:#ddd}
	.ebcontents-history .ebcontents-box:after {top:0px;left:3px;width:15px;height:15px;background:#fff;border:5px solid #bb0a30;border-radius:100%}
	.ebcontents-history .history-list ul {margin-top:10px;}
}
@media (min-width: 992px){
	.ebcontents-history .master-title {margin-bottom: 40px;}
	.ebcontents-history .master-title h2 {margin-bottom: 10px;font-size: 30px;}
	.ebcontents-history .master-title h3 {font-size: 18px;}
	.ebcontents-history .ebcontents-list > li {margin-bottom:60px}
	.ebcontents-history .ebcontents-box {display:flex;justify-content:space-between;align-items:center;padding:20px 0}
	.ebcontents-history .ebcontents-box > div {flex:0 0 auto;width:45%}
	.ebcontents-history .ebcontents-box:before {top:0;left:50%;width:1px;height:100%;border-top:20px solid #fff;background:#ddd}
	.ebcontents-history .ebcontents-box:after {top:0px;left:50%;width:15px;height:15px;margin-left:-7px;background:#fff;border:5px solid #ffb74d;border-radius:100%}
	.ebcontents-history .ebcontents-list > li:nth-child(odd) .ebcontents-box-left {text-align:right}
	.ebcontents-history .ebcontents-list > li:nth-child(even) .ebcontents-box-left {order:2;}
	.ebcontents-history .ebcontents-list > li:nth-child(even) .ebcontents-box-right {order:1;text-align:right}
	.ebcontents-history .ebcontents-list > li:nth-child(even) .ebcontents-box-right .history-list ul li {padding:0 70px 0 0;}
	.ebcontents-history .ebcontents-list > li:nth-child(even) .ebcontents-box-right .history-list ul li span {left:inherit;right:0;}
}
@media (min-width: 1200px){
	.ebcontents-history .history-year {font-size:24px}
	.ebcontents-history .history-content {font-size:16px;}
	.ebcontents-history .history-list ul li {font-size: 15px;}
}
</style>
<div class="ebcontents ebcontents-history">
    <div class="ebcontents-history-inner">
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
        <ul class="ebcontents-list list-unstyled">
        <?php if (is_array($contents)) { ?>
            <?php foreach ($contents as $k => $item) { ?>
            <li>
                <div class="ebcontents-box ebcontents-box-1">
                    <div class="ebcontents-box-left " data-aos="fade-up">
                        <?php if ($item['ci_subject_1']) { ?>
                        <div class="history-year en-font"><?php echo $item['ci_subject_1']; ?></div>
                         <?php } ?>
                        <?php if ($item['ci_subject_2']) { ?>
                        <p class="history-content"><?php echo $item['ci_subject_2']; ?></p>
                        <?php } ?>
                        <?php if ($item['src_1']) { ?>
						<img src="<?php echo $item['src_1']?>" alt="image" class="img-responsive">
                        <?php } ?>
                    </div>
                    <div class="ebcontents-box-right" data-aos="fade-up" data-aos-delay="300">
                        <div class="history-list ">
                            <ul>
                                <?php if ($item['ci_subject_3']) { ?>
                                <li><?php echo $item['ci_subject_3']; ?></li>
                                 <?php } ?>
                                <?php if ($item['ci_subject_4']) { ?>
                                <li><?php echo $item['ci_subject_4']; ?></li>
                                 <?php } ?>
                                <?php if ($item['ci_subject_5']) { ?>
                                <li><?php echo $item['ci_subject_5']; ?></li>
                                 <?php } ?>
                                <?php if ($item['ci_subject_6']) { ?>
                                <li><?php echo $item['ci_subject_6']; ?></li>
                                 <?php } ?>
                                <?php if ($item['ci_subject_7']) { ?>
                                <li><?php echo $item['ci_subject_7']; ?></li>
                                 <?php } ?>
                                <?php if ($item['ci_subject_8']) { ?>
                                <li><?php echo $item['ci_subject_8']; ?></li>
                                 <?php } ?>
                                <?php if ($item['ci_subject_9']) { ?>
                                <li><?php echo $item['ci_subject_9']; ?></li>
                                 <?php } ?>
                                <?php if ($item['ci_subject_10']) { ?>
                                <li><?php echo $item['ci_subject_10']; ?></li>
                                 <?php } ?>
                                <?php if ($item['ci_subject_11']) { ?>
                                <li><?php echo $item['ci_subject_11']; ?></li>
                                 <?php } ?>
                                <?php if ($item['ci_subject_12']) { ?>
                                <li><?php echo $item['ci_subject_12']; ?></li>
                                 <?php } ?>
                                <?php if ($item['ci_subject_13']) { ?>
                                <li><?php echo $item['ci_subject_13']; ?></li>
                                 <?php } ?>
                                <?php if ($item['ci_subject_14']) { ?>
                                <li><?php echo $item['ci_subject_14']; ?></li>
                                 <?php } ?>
                                <?php if ($item['ci_subject_15']) { ?>
                                <li><?php echo $item['ci_subject_15']; ?></li>
                                 <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <?php } ?>
        <?php } ?>

        <?php if ($ec_default) { ?>
            <li>
                <div class="ebcontents-box ebcontents-box-1">
                    <div class="ebcontents-box-left " data-aos="fade-up">
                        <div class="history-year en-font">2020&#39;s</div>
                        <p class="history-content">에너지 기업의 새로운 미래와 혁신을 도모합니다.</p>
                        <img src="<?php echo $ebcontents_skin_url; ?>/image/01.jpg" alt="image" class="img-responsive">
                    </div>
                    <div class="ebcontents-box-right" data-aos="fade-up" data-aos-delay="300">
                        <div class="history-list ">
                            <ul>
                                <li><span>2021 10.</span> 글로벌 기업 EM사와 재활용 에너지 연구 개발 협약</li>
                                <li><span>2021 07.</span> 독일 함부르크시 환경 공로 기업 선정</li>
                                <li><span>2021 03.</span> 홍길동 대표 취임</li>
                                <li><span>2020 07.</span> 사회공헌에 노력하는 기업 선정</li>
                                <li><span>2020 05.</span> 환경의 날 기념 에너지 사업 출범</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="ebcontents-box ebcontents-box-1">
                    <div class="ebcontents-box-left " data-aos="fade-up">
                        <div class="history-year en-font">2011 ~ 2019</div>
                        <p class="history-content">에너지 기업의 새로운 미래와 혁신을 도모합니다.</p>
                        <img src="<?php echo $ebcontents_skin_url; ?>/image/02.jpg" alt="image" class="img-responsive">
                    </div>
                    <div class="ebcontents-box-right" data-aos="fade-up" data-aos-delay="300">
                        <div class="history-list ">
                            <ul>
                                <li><span>2017 10.</span> 글로벌 기업 EM사와 재활용 에너지 연구 개발 협약</li>
                                <li><span>2015 07.</span> 독일 함부르크시 환경 공로 기업 선정</li>
                                <li><span>2014 03.</span> 홍길동 대표 취임</li>
                                <li><span>2013 07.</span> 사회공헌에 노력하는 기업 선정</li>
                                <li><span>2012 05.</span> 환경의 날 기념 에너지 사업 출범</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="ebcontents-box ebcontents-box-1">
                    <div class="ebcontents-box-left " data-aos="fade-up">
                        <div class="history-year en-font">2001 ~ 2010</div>
                        <p class="history-content">성장과 도약을 통해 글로벌 기업으로 발돋움하고<br>브랜드 가치를 높혔습니다.</p>
                        <img src="<?php echo $ebcontents_skin_url; ?>/image/04.jpg" alt="image" class="img-responsive">
                    </div>
                    <div class="ebcontents-box-right" data-aos="fade-up" data-aos-delay="300">
                        <div class="history-list ">
                            <ul>
                                <li><span>2009 10.</span> 글로벌 기업 EM사와 재활용 에너지 연구 개발 협약</li>
                                <li><span>2009 07.</span> 독일 함부르크시 환경 공로 기업 선정</li>
                                <li><span>2008 03.</span> 홍길동 대표 취임</li>
                                <li><span>2007 07.</span> 사회공헌에 노력하는 기업 선정</li>
                                <li><span>2007 05.</span> 환경의 날 기념 에너지 사업 출범</li>
                                <li><span>2006 10.</span> 글로벌 기업 EM사와 재활용 에너지 연구 개발 협약</li>
                                <li><span>2005 07.</span> 독일 함부르크시 환경 공로 기업 선정</li>
                                <li><span>2003 03.</span> 홍길동 대표 취임</li>
                                <li><span>2003 07.</span> 사회공헌에 노력하는 기업 선정</li>
                                <li><span>2001 05.</span> 환경의 날 기념 에너지 사업 출범</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="ebcontents-box ebcontents-box-1">
                    <div class="ebcontents-box-left " data-aos="fade-up">
                        <div class="history-year en-font">1991 ~ 2000</div>
                        <p class="history-content">에너지 기업의 새로운 미래와 혁신을 도모합니다.</p>
                        <img src="<?php echo $ebcontents_skin_url; ?>/image/05.jpg" alt="image" class="img-responsive">
                    </div>
                    <div class="ebcontents-box-right" data-aos="fade-up" data-aos-delay="300">
                        <div class="history-list ">
                            <ul>
                                <li><span>1999 10.</span> 글로벌 기업 EM사와 재활용 에너지 연구 개발 협약</li>
                                <li><span>1999 07.</span> 독일 함부르크시 환경 공로 기업 선정</li>
                                <li><span>1998 05.</span> 환경의 날 기념 에너지 사업 출범</li>
                                <li><span>1998 03.</span> 홍길동 대표 취임</li>
                                <li><span>1998 07.</span> 사회공헌에 노력하는 기업 선정</li>
                                <li><span>1997 07.</span> 독일 함부르크시 환경 공로 기업 선정</li>
                                <li><span>1996 05.</span> 환경의 날 기념 에너지 사업 출범</li>
                                <li><span>1996 10.</span> 글로벌 기업 EM사와 재활용 에너지 연구 개발 협약</li>
                                <li><span>1995 10.</span> 글로벌 기업 EM사와 재활용 에너지 연구 개발 협약</li>
                                <li><span>1995 07.</span> 독일 함부르크시 환경 공로 기업 선정</li>
                                <li><span>1995 05.</span> 환경의 날 기념 에너지 사업 출범</li>
                                <li><span>1995 03.</span> 홍길동 대표 취임</li>
                                <li><span>1994 07.</span> 사회공헌에 노력하는 기업 선정</li>
                                <li><span>1993 07.</span> 독일 함부르크시 환경 공로 기업 선정</li>
                                <li><span>1992 05.</span> 환경의 날 기념 에너지 사업 출범</li>
                                <li><span>1991 10.</span> 글로벌 기업 EM사와 재활용 에너지 연구 개발 협약</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        <?php } ?>
        </ul>
    </div>
</div>
<?php } ?>