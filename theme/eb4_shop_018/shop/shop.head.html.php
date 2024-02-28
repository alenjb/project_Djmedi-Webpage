<?php
/**
 * theme file : /theme/THEME_NAME/shop/shop.head.html.php
 */
if (!defined('_EYOOM_')) exit;

add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/css/shop_style.css?ver='.G5_CSS_VER.'">',0);
add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/css/custom.css?ver='.G5_CSS_VER.'">',0);

/**
 * 로고 타입 : 'image' || 'text'
 */
$logo = 'image';

/**
 * 상품 이미지 미리보기 종류 : 'zoom' || 'slider'
 */
$item_view = 'zoom';
?>

<?php if (!$wmode) { ?>

<?php /*----- wrapper 시작 -----*/ ?>
<style>
    @font-face {
        font-family: 'Pretendard-Regular';
        src: url('https://cdn.jsdelivr.net/gh/Project-Noonnu/noonfonts_2107@1.1/Pretendard-Regular.woff') format('woff');
        font-weight: 400;
        font-style: normal;
    }
    @font-face {
        font-family: 'Pretendard-Bold';
        src: url('https://cdn.jsdelivr.net/gh/Project-Noonnu/noonfonts_2107@1.1/Pretendard-Bold.woff') format('woff');
        font-weight: 900;
        font-style: normal;
    }
        /*div.header-inner{*/
        /*    height: 100px;*/
        /*}*/
        ul.gnb-nav > li > a{
            font-size: 30px;
        }
    li.dropdown {
        font-family: Pretendard-Bold, serif;
    }
</style>
<div class="wrapper">
    <h1 id="hd-h1"><?php echo $g5['title'] ?></h1>
    <div class="to-content"><a href="#container">본문 바로가기</a></div>
    <?php
    // 팝업창
    if (defined('_INDEX_') && $newwin_contents) { // index에서만 실행
        echo $newwin_contents;
    }
    ?>

	<?php /* 편집버튼 */ ?>
	<?php if ($is_admin) { // 관리자일 경우 ?>
	<div class="btn-edit-admin eyoom-form visible-lg">
        <input type="hidden" name="edit_mode" id="edit_mode" value="<?php echo $eyoom_default['edit_mode']; ?>">
		<label class="toggle red-toggle">
			<input type="checkbox" id="btn_edit_mode" <?php echo $eyoom_default['edit_mode'] == 'on' ? 'checked':''; ?>><i></i><span class="color-grey font-size-12">편집모드</span>
		</label>
	</div>
    <?php } ?>

    <?php if ($eyoom['layout'] == 'wide') { ?>
    <div class="wrapper-inner">
    <?php } else if ($eyoom['layout'] == 'boxed') { ?>
    <div class="wrapper-inner box-layout">
    <?php } ?>

	    <?php /* ---------- Header - 상단 레이아웃 ---------- */ ?>
	    <header class="header" <?php if ($eyoom['sticky'] == 'y') echo 'id="header-fixed"'; ?>>
		    <div class="header-inner">
			    <?php /* Header Logo */ ?>
	            <h1 class="header-logo">
	                <?php /* 로고 편집 버튼 */ ?>
	                <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
	                <div class="adm-edit-btn btn-edit-mode" style="top:0;text-align:left">
	                    <div class="btn-group">
	                        <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=biz_info&amp;amode=logo&amp;thema=<?php echo $theme; ?>&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="ae-btn-l"><i class="far fa-edit"></i> 로고 설정</a>
	                        <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=biz_info&amp;amode=logo&amp;thema=<?php echo $theme; ?>" target="_blank" class="ae-btn-r" title="새창 열기">
	                            <i class="fas fa-external-link-alt"></i>
	                        </a>
	                    </div>
	                </div>
	                <?php } ?>

	                <?php /* 로고 */ ?>
	                <a href="<?php echo "http://dev.hanyack.kr"; ?>">
	                    <?php if ($logo == 'text') { ?>
	                        <span><?php echo $config['cf_title']; ?></span>
	                    <?php } else if ($logo == 'image') { ?>
	                        <?php if (!G5_IS_MOBILE) { ?>
	                        <?php if (file_exists($top_logo) && !is_dir($top_logo)) { ?>
	                        <img src="<?php echo $logo_src['top']; ?>" alt="<?php echo $config['cf_title']; ?> LOGO">
	                        <?php } else { ?>
	                        <img src="<?php echo EYOOM_THEME_URL; ?>/image/site_logo.svg" alt="<?php echo $config['cf_title']; ?> LOGO">
	                        <?php } ?>
	                        <?php } else { ?>
	                        <?php if (file_exists($top_mobile_logo) && !is_dir($top_mobile_logo)) { ?>
	                        <img src="<?php echo $logo_src['mobile_top']; ?>" alt="<?php echo $config['cf_title']; ?> LOGO">
	                        <?php } else { ?>
	                        <img src="<?php echo EYOOM_THEME_URL; ?>/image/site_logo.svg" alt="<?php echo $config['cf_title']; ?> LOGO">
	                        <?php } ?>
	                        <?php } ?>
	                    <?php } ?>
	                </a>
	            </h1>
				
				<?php /* gnb - 메뉴 */ ?>
				<div class="gnb-wrap">
					<nav class="gnb" id="navMenu">
						<div class="mobile-box">
							<div class="mobile-nav-trigger" id="navClose" role="button"><img src="<?php echo EYOOM_THEME_URL; ?>/image/icons/close-fill.png" alt="icon"></div>
							<div class="login-box">
								<ul class="d-f">
								<?php if ($is_member) { ?>
									<?php if ($is_admin == 'super' || $is_auth) {  ?>
									<li><a href="<?php echo G5_ADMIN_URL ?>">관리자</a></li>
									<?php } ?>
									<li><a href="<?php echo G5_SHOP_URL; ?>/mypage.php">마이페이지</a></li>
									<li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</span></a></li>
								<?php } else { ?>
									<li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
									<li><a href="<?php echo G5_BBS_URL; ?>/register.php">회원가입</a></li>
								<?php } ?>
								</ul>
							</div>
						</div>
				
						<?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
						<div class="adm-edit-btn btn-edit-mode" style="top:0;text-align:left">
							<div class="btn-group">
								<a href="<?php echo $shopmenu_link; ?>&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="ae-btn-l"><i class="far fa-edit"></i> 메뉴 설정</a>
								<a href="<?php echo $shopmenu_link; ?>" target="_blank" class="ae-btn-r" title="새창 열기">
									<i class="fas fa-external-link-alt"></i>
								</a>
							</div>
						</div>
						<?php } ?>
				
						<?php /* Header Nav - 메인메뉴 */ ?>
						<ul class="gnb-nav">
						
						<?php if ($eyoom['use_eyoom_shopmenu'] == 'n') { // 영카트 분류가 쇼핑몰 메뉴 출력 ?>
							<?php if (isset($menu) && is_array($menu)) { ?>
							<?php foreach ($menu as $key => $menu_1) { ?>
							<li class="dropdown <?php if (isset($menu_1['active']) && $menu_1['active']) echo 'active'; ?>">
								<a href="<?php echo $menu_1['href']; ?>" class="dropdown-toggle nav-link" <?php echo G5_IS_MOBILE ? 'data-toggle="dropdown"': 'data-hover="dropdown"'; ?>>
									<?php echo $menu_1['ca_name']; ?>
								</a>
								<?php if (isset($menu_1['submenu']) && is_array($menu_1['submenu'])) { ?>
								<a href="#" class="cate-dropdown-open dorpdown-toggle" data-bs-toggle="dropdown"></a>
								<?php } ?>
								<?php $index2 = $size2 = 0; ?>
								<?php if (isset($menu_1['submenu']) && is_array($menu_1['submenu'])) { $size2 = count($menu_1['submenu']); ?>
								<?php foreach ($menu_1['submenu'] as $subkey => $menu_2) { ?>
								<?php if ($index2 == 0) { ?>
								<ul class="dropdown-menu">
								<?php } ?>
									<li class="dropdown-submenu <?php if (isset($menu_2['active']) && $menu_2['active']) echo 'active';?>">
										<a href="<?php echo $menu_2['href']; ?>" class="dropdown-item nav-link"><?php echo $menu_2['ca_name']; ?></a>
									</li>
								<?php if ($index2 == $size2 - 1) { ?>
								</ul>
								<?php } ?>
								<?php $index2++; } ?>
								<?php } ?>
							</li>
							<?php } ?>
							<?php } ?>
						<?php } else if ($eyoom['use_eyoom_shopmenu'] == 'y') { // 이윰 쇼핑몰 메뉴 출력 ?>
							<?php if (isset($menu) && is_array($menu)) { ?>
							<?php foreach ($menu as $key => $menu_1) { ?>
							<li class="dropdown <?php if (isset($menu_1['active']) && $menu_1['active']) echo 'active'; ?>">
								<a href="<?php echo $menu_1['me_link']; ?>" target="_<?php echo $menu_1['me_target']; ?>" class="dropdown-toggle nav-link">
									<?php if (isset($menu_1['me_icon']) && $menu_1['me_icon']) { ?><i class="<?php echo $menu_1['me_icon']; ?> nav-cate-icon margin-right-5"></i><?php } ?>
									<?php echo $menu_1['me_name']?>
								</a>
								<?php if (isset($menu_1['submenu']) && is_array($menu_1['submenu'])) { ?>
								<a href="#" class="cate-dropdown-open dorpdown-toggle" data-bs-toggle="dropdown"></a>
								<?php } ?>
								<?php $index2 = $size2 = 0; ?>
								<?php if (isset($menu_1['submenu']) && is_array($menu_1['submenu'])) { $size2 = count($menu_1['submenu']); ?>
								<?php foreach ($menu_1['submenu'] as $subkey => $menu_2) { ?>
								<?php if ($index2 == 0) { ?>
								<ul class="dropdown-menu">
								<?php } ?>
									<li class="dropdown-submenu <?php if (isset($menu_2['active']) && $menu_2['active']) echo 'active';?>">
										<a href="<?php echo $menu_2['me_link']; ?>" target="_<?php echo $menu_2['me_target']; ?>" class="dropdown-item nav-link">
											<span class="submenu-marker"></span>
											<?php if (isset($menu_2['me_icon']) && $menu_2['me_icon']) { ?>
											<i class="<?php echo $menu_2['me_icon']; ?> m-r-5"></i>
											<?php } ?>
											<?php echo $menu_2['me_name']; ?>
											<?php if ($menu_2['new']) { ?>
											<i class="far fa-check-circle text-red m-r-5"></i>
											<?php } ?>
										</a>
										<?php $index3 = $size3 = 0; ?>
										<?php if (isset($menu_2['subsub']) && is_array($menu_2['subsub'])) { $size3 = count($menu_2['subsub']); ?>
										<?php foreach ($menu_2['subsub'] as $ssubkey => $menu_3) { ?>
										<?php if ($index3 == 0) { ?>
										<ul class="dropdown-menu">
										<?php } ?>
											<li class="dropdown-submenu <?php if (isset($menu_3['active']) && $menu_3['active']) echo 'active';?>">
												<a href="<?php echo $menu_3['me_link']; ?>" target="_<?php echo $menu_3['me_target']; ?>" class="dropdown-item nav-link">
													<span class="submenu-marker"></span>
													<?php if (isset($menu_3['me_icon']) && $menu_3['me_icon']) { ?>
													<i class="<?php echo $menu_3['me_icon']; ?> m-r-5"></i>
													<?php } ?>
													<?php echo $menu_3['me_name']; ?>
													<?php if ($menu_3['new']) { ?>
													<i class="far fa-check-circle text-red m-r-5"></i>
													<?php } ?>
												</a>
											</li>
										<?php if ($index3 == $size3 - 1) { ?>
										</ul>
										<?php } ?>
										<?php $index3++; } ?>
										<?php } ?>
									</li>
								<?php if ($index2 == $size2 - 1) { ?>
								</ul>
								<?php } ?>
								<?php $index2++; } ?>
								<?php } ?>
							</li>
							<?php } ?>
							<?php } ?>
						<?php } ?>
						</ul>
						
						<div class="category-nav">
							<ul>
								<li><a href="/bbs/board.php?bo_table=notice" style="font-family: Pretendard-Regular, serif; font-size: 20px;">공지사항</a></li>
                                <li class="last-link"><a href="<?php echo "http://dev.hanyack.kr/page/?pid=overview" ?>" style="font-family: Pretendard-Regular, serif; font-size: 20px;">회사소개</a></li>
                                <li class="last-link"><a href="<?php echo "http://dev.hanyack.krpage/?pid=brand" ?>" style="font-family: Pretendard-Regular, serif; font-size: 20px; background-color: rgb(210,186,186)">제약사소개</a></li>

                            </ul>
						</div>
					</nav>
				</div>
				
				<?php /* Tob Bar - 로그인, 회원가입 및 검색 버튼 */ ?>
				<div class="top-bar">
					<ul class="top-bar-list list-unstyled">
						<?php /* 검색버튼 */ ?>
						<li class="btn-cart">
							<a href="<?php echo G5_SHOP_URL; ?>/cart.php">
<!--								<img src="--><?php //echo EYOOM_THEME_URL; ?><!--/image/icons/shopping-bag-line.png" alt="icon">-->
								<h5>장바구니</h5>
                                <span style="font-family: Pretendard-Bold"><?php echo get_boxcart_datas_count(); ?></span>
							</a>
						</li>
                        <li><a href="<?php echo G5_SHOP_URL; ?>/wishlist.php" style="font-family: Pretendard-Regular, serif; font-size: 20px;">찜</a></li>
                        <?php if ($is_member) { ?>
                            <li class="top-bar-btn-adm">
                                <a type="button" data-bs-toggle="modal" data-bs-target=".member-contents-modal">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/image/icons/user-line.png" alt="icon">
                                </a>
                            </li>
                        <?php } else { ?>
                            <li class="top-bar-btn-login">
                                <a href="<?php echo G5_BBS_URL ?>/login.php">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/image/icons/user-line.png" alt="icon">
                                </a>
                            </li>
                        <?php } ?>
                        <li class="btn-search">
							<a href="#" data-bs-toggle="modal" data-bs-target=".search-contents-modal">
								<img src="<?php echo EYOOM_THEME_URL; ?>/image/icons/search-line.png" alt="icon">
							</a>
						</li>
						<?php /* 모바일 메뉴 버튼 */ ?>
						<li class="mobile-nav-trigger" id="navToggle" role="button">
							<button type="button">
								<img src="<?php echo EYOOM_THEME_URL; ?>/image/icons/function-line.png" alt="icon">
							</button>
						</li>
					</ul>
				</div>
		    </div>
	    </header>
	    <?php /* End Header */ ?>

        <?php /* 멤버 모달 시작 */ ?>
        <div class="modal fade contents-modal member-contents-modal" tabindex="-1" aria-hidden="true">
            <div class="modal-box modal-sm modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4>
                            방문해 주셔서 감사합니다.
                        </h4>
                        <ul class="list-unstyled member-list">
                        <?php if ($is_member) { ?>
                            <?php if ($is_admin == 'super' || $is_auth) {  ?>
                            <li>
								<a href="<?php echo G5_ADMIN_URL ?>">
									<img src="<?php echo EYOOM_THEME_URL; ?>/image/icons/settings-line.png" alt="icon">
									<span>관리자</span>
								</a>
							</li>
                            <?php } ?>
                            <li>
								<a href="<?php echo G5_SHOP_URL; ?>/mypage.php">
									<img src="<?php echo EYOOM_THEME_URL; ?>/image/icons/user-line.png" alt="icon">
									<span>마이페이지</span>
								</a>
							</li>
                            <li>
								<a href="<?php echo G5_BBS_URL ?>/logout.php">
									<img src="<?php echo EYOOM_THEME_URL; ?>/image/icons/shut-down-line.png" alt="icon">
									<span>로그아웃</span>
								</a>
							</li>
                        <?php }  ?>
                        </ul>
                        
                        <div class="shop-member-box">
	                        <div class="shop-member-box-title">오늘본상품<span><?php echo get_view_today_items_count(); ?></span></div>
			                <?php include(EYOOM_THEME_SHOP_SKIN_PATH.'/boxtodayview.skin.html.php'); // 오늘 본 상품 ?>
			                <div class="shop-member-box-title">장바구니<span><?php echo get_boxcart_datas_count(); ?></span></div>
			                <?php include_once(EYOOM_THEME_SHOP_SKIN_PATH.'/boxcart.skin.html.php'); // 장바구니 ?>
			                <div class="shop-member-box-title">위시리스트<span><?php echo get_wishlist_datas_count(); ?></span></div>
			                <?php include_once(EYOOM_THEME_SHOP_SKIN_PATH.'/boxwish.skin.html.php'); // 위시리스트 ?>
                        </div>
                        <div class="contnets-bottom">
                            <button type="button" data-bs-dismiss="modal"><span class="transition-03 en-font">Close</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php /* 검색 모달 시작 */ ?>
        <div class="modal fade contents-modal search-contents-modal" aria-hidden="true">
            <div class="modal-box modal-sm modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4>
                            검색어를 입력해 주세요.
                        </h4>
                        <div class="search-contents">
                            <div class="search-contnets-mid">
                                <form name="frmsearch1" action="<?php echo G5_SHOP_URL; ?>/search.php" onsubmit="return search_submit(this);">
									<input type="hidden" name="sfl" value="wr_subject||wr_content">
									<input type="hidden" name="sop" value="and">
									<label for="head_sch_str" class="sound_only">검색어 입력 필수</strong></label>
                                    <div class="input input-button">
                                        <input type="text" name="q" value="<?php echo stripslashes(get_text(get_search_string($q))); ?>" id="head_sch_str" class="sch_stx" placeholder="상품 검색어 입력">
                                        <div class="button">
											<input type="submit">
											<img src="<?php echo EYOOM_THEME_URL; ?>/image/icons/search-line.png" alt="icon">
										</div>
                                    </div>
                                </form>
                                <script>
								function search_submit(f) {
									if (f.q.value.length < 2) {
										alert("검색어는 두글자 이상 입력하십시오.");
										f.q.select();
										f.q.focus();
										return false;
									}
									return true;
								}
								</script>
                            </div>
                            <div class="contnets-bottom">
                                <button type="button" data-bs-dismiss="modal"><span class="transition-03 en-font">Close</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php if(!defined('_INDEX_')) { // 메인이 아닐때 ?>
	    <?php /*----- page title 시작 -----*/ ?>
	    <div class="page-title-wrap">
	        <div class="container">
	        <?php if (!defined('_EYOOM_MYPAGE_')) { ?>
	            <h2>
	                <?php if (!$it_id) { ?>
	                <i class="fas fa-arrow-alt-circle-right m-r-10"></i><?php echo $subinfo['title']; ?>
	                <?php } else { ?>
	                <i class="fas fa-arrow-alt-circle-right m-r-10"></i><?php echo $subinfo['title']; ?>
	                <?php } ?>
	            </h2>
	            <?php if (!$it_id) { ?>
	            <div class="sub-breadcrumb-wrap">
	                <ul class="sub-breadcrumb hidden-xs">
	                    <?php echo $subinfo['path']; ?>
	                </ul>
	            </div>
	            <?php } ?>
	        <?php } else { ?>
	            <h2><i class="fas fa-arrow-alt-circle-right"></i> 마이페이지</h2>
	        <?php } ?>
	        </div>
	    </div>
	    <?php /*----- page title 끝 -----*/ ?>
	    <?php } ?>
	
	    <main class="basic-body <?php if(!defined('_INDEX_')) { ?>sub-basic-body<?php } ?>">
	        <?php if(defined('_INDEX_')) { ?>
	        <div class="basic-body-main">
	        <?php } else { ?>
	        <div class="container">
	            <div class="basic-body-main">
	        <?php } ?>
<?php } // !$wmode ?>