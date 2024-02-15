<?php
/**
 * theme file : /theme/THEME_NAME/shop.tail.html.php
 */
if (!defined('_EYOOM_')) exit;
?>

<?php if (!$wmode) { ?>
	<?php if(defined('_INDEX_')) { ?>
        </div>
        <?php } else { ?>
			</div><?php /* End .basic-body-main */ ?>
		</div><?php /* End .container */ ?>
        <?php } ?>

		</main><?php /* End .basic-body */ ?>
	
		<?php /* ---------- footer - 하단 레이아웃 ---------- */ ?>
		<footer class="footer">
			<div class="footer-inner">
				<div class="footer-top">
					<div class="container">
						<div class="row g-lg-5">
<!--							<div class="col-lg-4 col-xl-3">-->
<!--								--><?php ///* EB슬라이더 - shop018 footer slider */ ?>
<!--								--><?php //echo eb_slider('1651650109'); ?>
<!--							</div>-->
							<div class="col-lg-12 col-xl-12">
								<?php /* EB최신글 - shop018 rolling */ ?>
								<?php echo eb_latest('1634883005'); ?>
								<div class="row g-0">
									<div class="col-md-6 col-b-r-1">
										<div class="footer-top-box footer-top-customer">
											<h4>고객센터</h4>
											<div class="phone-num">
												<strong class="en-font" style="font-family: Pretendard-Bold,serif"><?php echo $bizinfo['bi_cs_tel1']; ?></strong>
												<small style="font-family: Pretendard-Bold,serif"><?php echo $bizinfo['bi_cs_time']; ?></small>
											</div>
											<div class="footer-btn" style="font-family: Pretendard-Bold,serif"><a href="mailto:<?php echo $bizinfo['bi_company_infomail']; ?>"><i class="far fa-envelope"></i> &nbsp; <?php echo $bizinfo['bi_company_infomail']; ?></a></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="footer-top-box footer-top-bank">
											<h4>계좌안내</h4>
											<div class="bank-num">
												<strong>하나은행 <span class="en-font">123-45-67890</span></strong>
												<h4>예금주 : 디제이허브(주)</h4>
											</div>
											<div class="footer-btn">
												<a href="<?php echo G5_BBS_URL; ?>/faq.php" class="btn-1">FAQ <i class="fas fa-chevron-right"></i></a>
												<a href="<?php echo G5_BBS_URL; ?>/qalist.php" class="btn-2">1:1문의 <i class="fas fa-chevron-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="footer-btm">
					<div class="container">
						<div class="row g-lg-5">
							<div class="col-lg-3">
								<div class="footer-logo">
									<?php /* 하단 로고 편집 버튼 */ ?>
			                        <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
			                        <div class="adm-edit-btn btn-edit-mode" style="top:0;text-align:left">
					                    <div class="btn-group">
			                                    <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=biz_info&amp;amode=logo&amp;thema=<?php echo $theme; ?>&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="ae-btn-l"><i class="far fa-edit"></i> 로고 설정</a>
			                                    <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=biz_info&amp;amode=logo&amp;thema=<?php echo $theme; ?>" target="_blank" class="ae-btn-r" title="새창 열기">
			                                        <i class="far fa-window-maximize"></i>
			                                    </a>
			                            </div>
			                        </div>
			                        <?php } ?>
	
			                        <?php /* 하단 로고 */ ?>
			                        <a href="<?php echo G5_URL; ?>">
			                        <?php if ($logo == 'text') { ?>
			                        	<span><?php echo $config['cf_title']; ?></span>
			                        <?php } else if ($logo == 'image') { //로고 이미지 ?>
			                            <?php if (!G5_IS_MOBILE) { ?>
			                            <?php if (file_exists($bottom_logo) && !is_dir($bottom_logo)) { ?>
			                            <img src="<?php echo $logo_src['bottom']; ?>" alt="<?php echo $config['cf_title']; ?> LOGO">
	
			                            <?php } else { ?>
			                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/site_logo.svg">
			                            <?php } ?>
			                            <?php } else { ?>
			                            <?php if (file_exists($bottom_mobile_logo) && !is_dir($bottom_mobile_logo)) { ?>
			                            <img src="<?php echo $logo_src['mobile_bottom']; ?>" alt="<?php echo $config['cf_title']; ?> LOGO">
	
			                            <?php } else { ?>
			                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/site_logo.svg">
			                            <?php } ?>
			                            <?php } ?>
			                        <?php } ?>
			                        </a>
								</div>
							</div>
							<div class="col-lg-9">
								<ul class="footer-btm-list">
									<li>
										<h4 class="en-font">Customer Center</h4>
										<?php /* 회사정보 편집 버튼 */ ?>
										<div class="footer-info">
											<?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
											<div class="adm-edit-btn btn-edit-mode hidden-xs hidden-sm" style="top:-31px">
												<div class="btn-group">
													<a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=biz_info&amp;amode=biz&amp;thema=<?php echo $theme; ?>&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="ae-btn-l"><i class="far fa-edit"></i> 기업정보 설정</a>
													<a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=biz_info&amp;amode=biz&amp;thema=<?php echo $theme; ?>" target="_blank" class="ae-btn-r" title="새창 열기">
														<i class="fas fa-external-link-alt"></i>
													</a>
													<button type="button" class="ae-btn-info" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true" data-bs-content="
														<span class='f-s-13r'>
														<strong class='text-indigo'>기업정보 사용가능한 변수</strong><br>
														<div class='margin-hr-10'></div>
														<strong class='text-indigo'>[설정정보]</strong><br>
														회사명 : $bizinfo['bi_company_name']<br>
														사업자등록번호 : $bizinfo['bi_company_bizno']<br>
														대표자명 : $bizinfo['bi_company_ceo']<br>
														대표전화 : $bizinfo['bi_company_tel']<br>
														팩스번호 : $bizinfo['bi_company_fax']<br>
														통신판매업 : $bizinfo['bi_company_sellno']<br>
														부가통신사업자 : $bizinfo['bi_company_bugano']<br>
														정보관리책임자 : $bizinfo['bi_company_infoman']<br>
														정보책임자메일 : $bizinfo['bi_company_infomail']<br>
														우편번호 : $bizinfo['bi_company_zip']<br>
														주소1 : $bizinfo['bi_company_addr1']<br>
														주소2 : $bizinfo['bi_company_addr2']<br>
														주소3 : $bizinfo['bi_company_addr3']<br>
														고객센터1 : $bizinfo['bi_cs_tel1']<br>
														고객센터2 : $bizinfo['bi_cs_tel2']<br>
														고객센터팩스 : $bizinfo['bi_cs_fax']<br>
														고객센터메일 : $bizinfo['bi_cs_email']<br>
														상담시간 : $bizinfo['bi_cs_time']<br>
														휴무안내 : $bizinfo['bi_cs_closed']
														</span>
													"><i class="fas fa-question-circle"></i></button>
												</div>
											</div>
											<?php } ?>
											
											<div class="footer-info-content">
												<address>
													<span class="footer-info-address" title="주소">
														주소 : 
														<?php echo $bizinfo['bi_company_addr1']; ?> <?php echo $bizinfo['bi_company_addr2']; ?> <?php echo $bizinfo['bi_company_addr3']; ?>
													</span>
													<span class="footer-info-email en-font" title="대표전화">
														대표전화 : 
														<?php echo $bizinfo['bi_company_tel']; ?>
													</span>
													<span class="footer-info-email en-font" title="이메일">
														이메일 : 
														<a href="mailto:<?php echo $bizinfo['bi_company_infomail']; ?>"><?php echo $bizinfo['bi_company_infomail']; ?></a>
													</span>
													<span class="en-font" title="사업자등록번호">
														사업자등록번호 : 
														<?php echo $bizinfo['bi_company_bizno']; ?>
													</span>
													<span class="en-font" title="통신판매업">
														통신판매업 : 
														<?php echo $bizinfo['bi_company_sellno']; ?>
													</span>
												</address>
											</div>
										</div>
									</li>
									<li>
										<h4 class="en-font">Provision</h4>
										<ul class="footer-link-list">
					                        <li><a href="<?php echo get_eyoom_pretty_url('page','provision'); ?>">이용약관</a></li>
					                        <li><a href="<?php echo get_eyoom_pretty_url('page','privacy'); ?>">개인정보처리방침</a></li>
					                        <li><a href="<?php echo get_eyoom_pretty_url('page','noemail'); ?>">이메일무단수집거부</a></li>
										</ul>
									</li>
									<li>
										<h4 class="en-font">CS Board</h4>
										<ul class="footer-link-list">
											<li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=notice">공지사항</a></li>
											<li><a href="<?php echo G5_BBS_URL; ?>/faq.php">FAQ</a></li>
											<li><a href="<?php echo G5_BBS_URL; ?>/qalist.php" class="btn-2">1:1문의</a></li>
										</ul>
									</li>
									<li>
										<h4 class="en-font">Our Story</h4>
										<ul class="footer-link-list">
					                        <li><a href="<?php echo get_eyoom_pretty_url('page','overview'); ?>">회사개요</a></li>
					                        <li><a href="<?php echo get_eyoom_pretty_url('page','history'); ?>">회사연혁</a></li>
					                        <li><a href="<?php echo get_eyoom_pretty_url('page','contact'); ?>">오시는길</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright en-font">Copyright &copy; <?php echo $config['cf_title']; ?>. All Rights Reserved.</div>
		</footer>
	</div><?php /*----- wrapper-inner 끝 -----*/ ?>
</div><?php /*----- wrapper 끝 -----*/ ?>

<?php /* Back To Top */ ?>
<div class="eb-backtotop">
	<svg class="backtotop-progress" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
		<span class="progress-count"></span>
	</svg>
</div>

<form name="fitem_for_list" method="post" action="" onsubmit="return fitem_for_list_submit(this);">
<input type="hidden" name="url">
<input type="hidden" name="it_id">
</form>
<?php } // !$wmode ?>

<?php
include_once(EYOOM_THEME_PATH . '/misc.html.php');
?>

<?php
if ($is_member && $eyoomer['onoff_push'] == 'on') {
    include_once(EYOOM_THEME_PATH . '/skin/push/basic/push.skin.html.php');
}
?>

<script src="<?php echo EYOOM_THEME_URL; ?>/js/app.js?ver=<?php echo G5_JS_VER; ?>"></script>
<script>
function item_wish_for_list(it_id) {
    var f = document.fitem_for_list;
    f.url.value = "<?php echo G5_SHOP_URL; ?>/wishupdate.php?it_id="+it_id;
    f.it_id.value = it_id;
    f.action = "<?php echo G5_SHOP_URL; ?>/wishupdate.php";
    f.submit();
}

<?php if ($is_admin == 'super') { ?>
$(document).ready(function() {
    var edit_mode = "<?php echo $eyoom_default['edit_mode']; ?>";
    if (edit_mode == 'on') {
        $(".btn-edit-mode").show();
    } else {
        $(".btn-edit-mode").hide();
    }

    $("#btn_edit_mode").click(function() {
        var edit_mode = $("#edit_mode").val();
        if (edit_mode == 'on') {
            $(".btn-edit-mode").hide();
            $("#edit_mode").val('');
        } else {
            $(".btn-edit-mode").show();
            $("#edit_mode").val('on');
        }

        $.post("<?php echo G5_ADMIN_URL; ?>/?dir=theme&pid=theme_editmode&smode=1", { edit_mode: edit_mode });
    });
});
<?php } ?>
</script>