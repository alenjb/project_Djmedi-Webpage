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
            2. 스킨선택 : sub01_vision<br>
            3. 컨텐츠 아이템에서 사용할 링크수 : 0개<br>
            4. 컨텐츠 아이템에서 사용할 이미지수 : 0개<br>
            5. 컨텐츠 아이템에서 사용할 필드수 : 2개<br>
            <span class='color-indigo'>[EB 컨텐츠 - 아이템 관리]</span><br>
            1. EB컨텐츠 아이템 추가 클릭<br>
            2. 텍스트 필드 #1~2 입력<br>
            3. 설명글 #1 입력<br>
            4. 이미지 #1 업로드(배경 이미지)<br>
            <div class='margin-hr-5'></div>
            <br>
            EB콘텐츠 마스터 타이틀 #1,2 상단 타이틀 출력.<br>
            EB콘텐츠 마스터 설명글 #1 하단 설명글 출력.<br>
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
.ebcontents-vision {position:relative}
/* 타이틀 */
.ebcontents-vision .master-title {
	margin-bottom: 20px;
	text-align: center;
}
.ebcontents-vision .master-title h2 {
	margin-bottom: 10px;
	font-size: 20px;
}
.ebcontents-vision .master-title h3 {
	font-size: 16px;
	color: #707070;
}
/* 아이템 */
.ebcontents-vision .ebcontents-vision-inner {
	padding-top: 20px;
	border-top: 2px solid #ffb300;
}
.ebcontents-vision .item {
	position: relative;
}
.ebcontents-vision .item-inner {
	padding: 15px;
	text-align: center;
	color: #fff;
	background: rgb(255,179,0);
	background: linear-gradient(130deg, rgba(255,179,0,1) 0%, rgba(255,143,0,1) 100%);
	border-radius: 3px;
}
.ebcontents-vision .item-inner .item-num {
	font-size: 11px;
}
.ebcontents-vision .item-inner .item-top {
	position: relative;
	margin: 5px 0 15px;
}
.ebcontents-vision .item-inner .item-top h4 {
	font-size: 15px;
}
.ebcontents-vision .item-inner .item-top h5 {
	font-size: 13px;
}
.ebcontents-vision .item-inner .item-btm {
	padding-top: 15px;
	border-top: 1px solid #fff;
}
.ebcontents-vision .item-inner .item-btm p {
	font-size: 12px;
}
.ebcontents-vision .ebcontents-visoin-bottom p {
	margin-top: 20px;
	font-size: 13px;
	color: #707070;
}
@media (min-width: 992px){
	.ebcontents-vision .master-title {
		margin-bottom: 40px;
	}
	.ebcontents-vision .master-title h2 {
		margin-bottom: 10px;
		font-size: 30px;
	}
	.ebcontents-vision .master-title h3 {
		font-size: 18px;
	}
	.ebcontents-vision .ebcontents-vision-inner {
		padding: 40px 15px 0;
		border-radius: 100px;
	}
	.ebcontents-vision .item-inner {
		height: 208px;
		border-radius: 50%;
	}
	.ebcontents-vision .item-inner .item-num {
		font-size: 13px;
	}
	.ebcontents-vision .item-inner .item-top h4 {
		margin: 10px 0 5px;
		font-size: 18px;
	}
	.ebcontents-vision .ebcontents-visoin-bottom p {
		max-width: 80%;
		margin: 0 auto;
		margin-top: 50px;
		text-align: center;
		font-size: 15px;
	}
}
@media (min-width: 1200px){
	.ebcontents-vision .item-inner {
		height: 253px;
	}
	.ebcontents-vision .item-inner .item-num {
		font-size: 15px;
	}
	.ebcontents-vision .item-inner .item-top {
		margin-bottom: 25px;
	}
	.ebcontents-vision .item-inner .item-top h4 {
		margin: 20px 0 5px;
		font-size: 20px;
	}
	.ebcontents-vision .item-inner .item-top h5 {
		font-size: 15px;
	}
	.ebcontents-vision .item-inner .item-btm p {
		font-size: 14px;
	}
}
@media (min-width: 1400px){
	.ebcontents-vision .item-inner {
		height: 298px;
	}
	.ebcontents-vision .item-inner .item-num {
		font-size: 17px;
	}
	.ebcontents-vision .item-inner .item-top {
		margin-bottom: 25px;
	}
	.ebcontents-vision .item-inner .item-top h4 {
		margin: 35px 0 5px;
		font-size: 24px;
	}
	.ebcontents-vision .item-inner .item-top h5 {
		font-size: 17px;
	}
	.ebcontents-vision .item-inner .item-btm p {
		font-size: 16px;
	}
}
</style>

<div class="ebcontents ebcontents-vision">
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
    <div class="ebcontents-vision-inner">
        <div class="row g-2 g-lg-4">
	    <?php /* ebcontents item */?>
	    <?php if (is_array($contents)) { ?>
	        <?php foreach ($contents as $k => $item) { ?>
	        <div class="col-6 col-lg-3">
		        <div class="item item-1">
			        <div class="item-inner" data-aos="fade-up" data-aos-delay="<?php echo ($k + 1)*2 ?>00">
				        <div class="item-num"><?php echo $k + 1 ?></div>
				        <div class="item-top">
					        <?php if ($item['ci_subject_1']) { ?>
			                <h4><?php echo $item['ci_subject_1']; ?></h4>
							<?php } ?>
					        <?php if ($item['ci_subject_2']) { ?>
			                <h5><?php echo $item['ci_subject_2']; ?></h5>
							<?php } ?>
				        </div>
				        <div class="item-btm">
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
	        <div class="col-6 col-lg-3">
		        <div class="item item-1">
			        <div class="item-inner" data-aos="fade-up" data-aos-delay="200">
				        <div class="item-num">1</div>
				        <div class="item-top">
					        <h4>MISSION</h4>
					        <h5>미션</h5>
				        </div>
				        <div class="item-btm">
					        <p>쌍방향 소통을 바탕으로 한 관계 지향적이고 집단 기능적 속성</p>
				        </div>
			        </div>
			    </div>
		    </div>
	        <div class="col-6 col-lg-3">
		        <div class="item item-2">
			        <div class="item-inner" data-aos="fade-up" data-aos-delay="400">
				        <div class="item-num">2</div>
				        <div class="item-top">
					        <h4>CORE VALUE</h4>
					        <h5>핵심가치</h5>
				        </div>
				        <div class="item-btm">
					        <p>쌍방향 소통을 바탕으로 한 관계 지향적이고 집단 기능적 속성</p>
				        </div>
			        </div>
			    </div>
		    </div>
	        <div class="col-6 col-lg-3">
		        <div class="item item-3">
			        <div class="item-inner" data-aos="fade-up" data-aos-delay="600">
				        <div class="item-num">3</div>
				        <div class="item-top">
					        <h4>VISION</h4>
					        <h5>비전</h5>
				        </div>
				        <div class="item-btm">
					        <p>쌍방향 소통을 바탕으로 한 관계 지향적이고 집단 기능적 속성</p>
				        </div>
			        </div>
			    </div>
		    </div>
	        <div class="col-6 col-lg-3">
		        <div class="item item-4">
			        <div class="item-inner" data-aos="fade-up" data-aos-delay="800">
				        <div class="item-num">4</div>
				        <div class="item-top">
					        <h4>CARE SYSTEM</h4>
					        <h5>시스템</h5>
				        </div>
				        <div class="item-btm">
					        <p>쌍방향 소통을 바탕으로 한 관계 지향적이고 집단 기능적 속성</p>
				        </div>
			        </div>
			    </div>
		    </div>
	    <?php } ?>
	    </div>
    </div>
    
    <div class="ebcontents-visoin-bottom">
        <?php if ($ec_master['ec_text_1']) { ?>
        <p class="ebcontents-visoin-explain"><?php echo $ec_master['ec_text_1']; ?></p>
        <?php } ?>
    </div>
</div>
<?php } ?>