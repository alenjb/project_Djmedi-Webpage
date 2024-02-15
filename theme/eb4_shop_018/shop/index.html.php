<?php
if (!defined('_EYOOM_')) exit;
add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/plugins/slick/slick.min.css" type="text/css" media="screen">',0);
?>

<?php /* 페이지 로더 */ ?>
<div class="page-loader">
    <div class="logo-loader">
        <?php if (file_exists($top_logo) && !is_dir($top_logo)) { ?>
        <img src="<?php echo $logo_src['top']; ?>" alt="<?php echo $config['cf_title']; ?>">
        <?php } else { ?>
        <img src="<?php echo EYOOM_THEME_URL; ?>/image/site_logo.svg" alt="<?php echo $config['cf_title']; ?>">
        <?php } ?>
    </div>
</div>
<script>
$(window).on('load', function() {
    $('.page-loader').fadeOut(1000);
});
</script>
<style type="text/css">

    @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");
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
    body{
        background-color:#eee;
        font-family: "Poppins", sans-serif;
        font-weight: 300;
    }
    .search{
        position: relative;
        box-shadow: 0 0 40px rgba(51, 51, 51, .1);
    }
    .search input{
        height: 60px;
        text-indent: 10px;
        border: 2px solid #d6d4d4;
    }
    .search input:focus{
        box-shadow: none;
        border: 2px solid green;
    }
    .search .fa-search{
        position: absolute;
        top: 20px;
        left: 16px;
    }
    .search button{
        position: absolute;
        top: 5px;
        right: 5px;
        height: 50px;
        width: 50px;
        background: green;
        border-color: green;
    }
    i.fa-search{
        line-height: 0.5;
    }
    div.main-slider-1649030780{
        width: 100%;
        height: 100%; /* 예시 높이, 필요에 따라 조절하세요 */
        position: relative;
        overflow: hidden;
    }
    div.item-content > h4 , h5, p{
        font-weight: bold;
        font-family: Pretendard-Regular, serif;
    }
    div.item-content > h5{
        margin-bottom: 100px;
    }
    img {
        width: 100%;
        overflow: hidden;
    }
    li.dropdown {
        font-family: Pretendard-Bold, serif;
    }

</style>
<?php /* EB슬라이더 - shpo018 main slider */ ?>
<?php echo eb_slider('1649030780'); ?>
<!--<div class="row height d-flex justify-content-center align-items-center">-->
<!--    <div class="col-md-8">-->
<!--        <div class="search">-->
<!--            <input type="text" class="form-control" placeholder="원하시는 약재를 검색해보세요">-->
<!--            <button class="btn btn-primary"> <i class="fa fa-search"></i></button>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<?php /* ---------- 쇼핑몰 브랜드 시작 ---------- */ ?>
<?php if ($eyoom['use_brand'] != 'n') { ?>
<div class="container">
	<?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
	<div class="adm-edit-btn btn-edit-mode" style="margin-top:0;">
		<div class="btn-group">
			<a href="<?php echo G5_ADMIN_URL; ?>/?dir=shop&pid=brandlist&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="ae-btn-l"><i class="far fa-edit"></i> 브랜드관리 설정</a>
			<a href="<?php echo G5_ADMIN_URL; ?>/?dir=shop&pid=brandlist" target="_blank" class="ae-btn-r" title="새창 열기">
				<i class="fas fa-external-link-alt"></i>
			</a>
		</div>
	</div>
	<?php } ?>
	<div class="m-t-30">
		<?php echo eb_brand('basic'); ?>
	</div>
</div>
<?php } ?>
<?php /* ---------- 쇼핑몰 브랜드 끝 ---------- */ ?>

<!--검색 바-->
<section class="section section-m-tb">
	<div class="container">
        <div class="row height d-flex justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="search">
                    <form name="frmsearch1" action="http://localhost:8888/g5/shop/search.php" onsubmit="return search_submit(this);">
                        <input type="text" name="q" value="" id="head_sch_str" class="form-control" placeholder="원하시는 약재를 검색해보세요">
                    <button class="btn btn-primary" type="submit"> <i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
<!----><?php /////* EB상품 */ ?>
<!----><?php ////echo eb_goods('1650958639'); ?>
<!--	</div>-->
<!--</section>-->

<!--<section class="section">-->
<!--	<div class="container">-->
<!--		--><?php ///* EB슬라이더 - shpo018 one slider */ ?>
<!--		--><?php //echo eb_slider('1649041781'); ?>
<!--	</div>-->
<!--</section>-->

<!--<section class="section section-m-tb section-p-tb section-bgc-gray">-->
<!--	<div class="container">-->
<!--		--><?php ///* ---------- 히트상품 시작 ---------- */ ?>
<!--		--><?php //if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
<!--		<div class="adm-edit-btn btn-edit-mode" style="margin-top:-25px;">-->
<!--			<div class="btn-group">-->
<!--				<a href="--><?php //echo G5_ADMIN_URL; ?><!--/?dir=shop&amp;pid=configform&amp;amode=ittype&amp;thema=--><?php //echo $theme; ?><!--&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="ae-btn-l"><i class="far fa-edit"></i> 유형별 상품진열 설정</a>-->
<!--				<a href="--><?php //echo G5_ADMIN_URL; ?><!--/?dir=shop&amp;pid=configform&amp;thema=--><?php //echo $theme; ?><!--#anc_scf_index" target="_blank" class="ae-btn-r" title="새창 열기">-->
<!--					<i class="fas fa-external-link-alt"></i>-->
<!--				</a>-->
<!--			</div>-->
<!--		</div>-->
<!--		--><?php //} ?>
<!---->
<!--		--><?php //if($default['de_type1_list_use']) { ?>
<!--		<div class="main-heading">-->
<!--			<h2><a href="--><?php //echo shop_type_url(1); ?><!--"><span>베스트(인기) 한약재</span></a></h2>-->
<!--		</div>-->
<!--		--><?php
//		$list = new item_list($skin_dir.'/'.$default['de_type1_list_skin']);
//		$list->set_type(1);
//		$list->set_view('it_img', true);
//		$list->set_view('it_id', false);
//		$list->set_view('it_name', true);
//		$list->set_view('it_basic', true);
//		$list->set_view('it_cust_price', true);
//		$list->set_view('it_price', true);
//		$list->set_view('it_icon', true);
//		$list->set_view('sns', true);
//		$list->set_view('star', true);
//		echo $list->run();
//		?>
<!--		--><?php //} ?>
<!--		--><?php ///* ---------- 히트상품 끝 ---------- */ ?>
<!--	</div>-->
<!--</section>-->

<!--        popularity-->
<section class="section section-lg-2-5 section-m-tb section-p-tb">
    <div class="container">
        <div class="row g-2 g-lg-4">
            <div class="col-lg-3 col-xl-3">
                <?php /* eb콘텐츠 - shop018 title banner */ ?>
                <?php echo eb_contents('1649053199'); ?>
            </div>
            <div class="col-lg-9 col-xl-9">
                <?php /* ---------- 인기상품 시작 ---------- */ ?>
                <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
                    <div class="adm-edit-btn btn-edit-mode" style="margin-top:-25px;">
                        <div class="btn-group">
                            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shop&amp;pid=configform&amp;amode=ittype&amp;thema=<?php echo $theme; ?>&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="ae-btn-l"><i class="far fa-edit"></i> 유형별 상품진열 설정</a>
                            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shop&amp;pid=configform&amp;thema=<?php echo $theme; ?>#anc_scf_index" target="_blank" class="ae-btn-r" title="새창 열기">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                <?php } ?>

                <?php if($default['de_type4_list_use']) { ?>
                    <?php
                    $list = new item_list($skin_dir.'/'.$default['de_type4_list_skin']);
                    $list->set_type(4);
                    $list->set_view('it_id', false);
                    $list->set_view('it_name', true);
                    $list->set_view('it_basic', true);
                    $list->set_view('it_cust_price', true);
                    $list->set_view('it_price', true);
                    $list->set_view('it_icon', true);
                    $list->set_view('sns', true);
                    $list->set_view('star', true);
                    echo $list->run();
                    ?>
                <?php } ?>
                <?php /* ---------- 인기상품 끝 ---------- */ ?>
            </div>
        </div>
</section>

<!--<section class="section section-m-tb section-p-tb section-bgc-gray">-->
<!--    <div class="container">-->
<!--        --><?php ///* ---------- 최신상품 시작 ---------- */ ?>
<!--        --><?php //if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
<!--            <div class="adm-edit-btn btn-edit-mode" style="margin-top:-25px;">-->
<!--                <div class="btn-group">-->
<!--                    <a href="--><?php //echo G5_ADMIN_URL; ?><!--/?dir=shop&amp;pid=configform&amp;amode=ittype&amp;thema=--><?php //echo $theme; ?><!--&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="ae-btn-l"><i class="far fa-edit"></i> 유형별 상품진열 설정</a>-->
<!--                    <a href="--><?php //echo G5_ADMIN_URL; ?><!--/?dir=shop&amp;pid=configform&amp;thema=--><?php //echo $theme; ?><!--#anc_scf_index" target="_blank" class="ae-btn-r" title="새창 열기">-->
<!--                        <i class="fas fa-external-link-alt"></i>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--        --><?php //} ?>
<!---->
<!--        --><?php //if($default['de_type3_list_use']) { ?>
<!--            <div class="main-heading">-->
<!--                <h2><a href="--><?php //echo shop_type_url(3); ?><!--"><span>NEW ARRIVAL<small>신상품</small></span></a></h2>-->
<!--            </div>-->
<!--            --><?php
//            $list = new item_list($skin_dir.'/'.$default['de_type3_list_skin']);
//            $list->set_type(3);
//            $list->set_view('it_id', false);
//            $list->set_view('it_name', true);
//            $list->set_view('it_basic', true);
//            $list->set_view('it_cust_price', true);
//            $list->set_view('it_price', true);
//            $list->set_view('it_icon', true);
//            $list->set_view('sns', true);
//            $list->set_view('star', true);
//            echo $list->run();
//            ?>
<!--        --><?php //} ?>
<!--        --><?php ///* ---------- 최신상품 끝 ---------- */ ?>
<!--    </div>-->
<!--</section>-->

        <section class="section">
            <div class="container">
                <?php /* ---------- 이벤트박스 시작 ---------- */ ?>
                <?php include_once(EYOOM_THEME_SHOP_SKIN_PATH.'/boxevent.skin.html.php'); // 이벤트 ?>
            </div>
        </section>

        <section class="section section-m-tb section-p-tb section-bgc-gray">
            <div class="container">
                <?php /* ---------- 할인상품 시작 ---------- */ ?>
                <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
                    <div class="adm-edit-btn btn-edit-mode" style="margin-top:-25px;">
                        <div class="btn-group">
                            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shop&amp;pid=configform&amp;amode=ittype&amp;thema=<?php echo $theme; ?>&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="ae-btn-l"><i class="far fa-edit"></i> 유형별 상품진열 설정</a>
                            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shop&amp;pid=configform&amp;thema=<?php echo $theme; ?>#anc_scf_index" target="_blank" class="ae-btn-r" title="새창 열기">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                <?php } ?>

                <?php if($default['de_type5_list_use']) { ?>
                    <div class="main-heading">
                        <h2><a href="<?php echo shop_type_url(5); ?>"><span>SALE ITEMS<small>할인상품</small></span></a></h2>
                    </div>
                    <?php
                    $list = new item_list($skin_dir.'/'.$default['de_type5_list_skin']);
                    $list->set_type(5);
                    $list->set_view('it_id', false);
                    $list->set_view('it_name', true);
                    $list->set_view('it_basic', true);
                    $list->set_view('it_cust_price', true);
                    $list->set_view('it_price', true);
                    $list->set_view('it_icon', true);
                    $list->set_view('sns', true);
                    $list->set_view('star', true);
                    echo $list->run();
                    ?>
                <?php } ?>
                <?php /* ---------- 할인상품 끝 ---------- */ ?>
            </div>
        </section>


<section class="section">
	<div class="container">
		<div class="row g-2 g-lg-4">
			<div class="col-lg-3">
				<?php /* eb콘텐츠 - shop018 title banner */ ?>
				<?php echo eb_contents('1649050429'); ?>
			</div>
			<div class="col-lg-9">
				<?php /* ---------- 추천상품 시작 ---------- */ ?>
				<?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
				<div class="adm-edit-btn btn-edit-mode" style="margin-top:-25px;">
					<div class="btn-group">
						<a href="<?php echo G5_ADMIN_URL; ?>/?dir=shop&amp;pid=configform&amp;amode=ittype&amp;thema=<?php echo $theme; ?>&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="ae-btn-l"><i class="far fa-edit"></i> 유형별 상품진열 설정</a>
						<a href="<?php echo G5_ADMIN_URL; ?>/?dir=shop&amp;pid=configform&amp;thema=<?php echo $theme; ?>#anc_scf_index" target="_blank" class="ae-btn-r" title="새창 열기">
							<i class="fas fa-external-link-alt"></i>
						</a>
					</div>
				</div>
				<?php } ?>

				<?php if($default['de_type2_list_use']) { ?>
				<?php
				$list = new item_list($skin_dir.'/'.$default['de_type2_list_skin']);
				$list->set_type(2);
				$list->set_view('it_id', false);
				$list->set_view('it_name', true);
				$list->set_view('it_basic', true);
				$list->set_view('it_cust_price', true);
				$list->set_view('it_price', true);
				$list->set_view('it_icon', true);
				$list->set_view('sns', true);
				$list->set_view('star', true);
				echo $list->run();
				?>
				<?php } ?>
				<?php /* ---------- 추천상품 끝 ---------- */ ?>
			</div>
		</div>
	</div>
</section>



<!--<section class="section  section-m-tb section-p-tb section-bgc-gray">-->
<!--	--><?php ///* 사용후기 */ ?>
<!--	<div class="shop-main-review">-->
<!--		<div class="container">-->
<!--			<div class="main-heading">-->
<!--				<h2><a href="--><?php //echo G5_SHOP_URL; ?><!--/itemuselist.php"><span>REVIEW<small>고객리뷰</small></span></a></h2>-->
<!--			</div>-->
<!--			--><?php
//			$sql = " select a.is_id, a.is_subject, a.is_content, a.it_id, b.it_name
//						from `{$g5['g5_shop_item_use_table']}` a join `{$g5['g5_shop_item_table']}` b on (a.it_id=b.it_id)
//						where a.is_confirm = '1'
//						order by a.is_id desc
//						limit 0,10 ";
//			$result = sql_query($sql);
//
//			for($i=0; $row=sql_fetch_array($result); $i++) {
//				if($i == 0) {
//					echo '<div id="main_review" class="review-slider">'.PHP_EOL;
//					echo '<div class="review-slider-inner">'.PHP_EOL;
//				}
//
//				$review_href = G5_SHOP_URL.'/item.php?it_id='.$row['it_id'].'#sit_use';
//			?>
<!--				<div class="item item---><?php //echo $i + 1 ?><!--">-->
<!--					<div class="item-in">-->
<!--						<div class="item-image">-->
<!--							--><?php ///* 사용후기 이미지 사이즈 500 x 500 으로 설정되어 있으며 이미지 등록하지 않은 후기는 상품 이미지가 등록. 이때 비율을 맞추기 위해 흰색 여백이 발생. */ ?>
<!--							<a href="--><?php //echo $review_href; ?><!--" class="review-img">--><?php //echo get_itemuselist_thumbnail($row['it_id'], $row['is_content'], 500, 500); ?><!--</a>-->
<!--						</div>-->
<!--						<div class="item-content">-->
<!--							<div class="item-content-in">-->
<!--								<div class="product-info">--><?php //echo $row['it_name']; ?><!--</div>-->
<!--								<h5><a href="--><?php //echo $review_href; ?><!--" class="ellipsis">--><?php //echo get_text(cut_str($row['is_subject'], 50)); ?><!--</a></h5>-->
<!--								<p>--><?php //echo get_text(cut_str(strip_tags($row['is_content']), 200), 1); ?><!--</p>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			--><?php
//			}
//
//			if($i > 0) {
//				echo '</div>'.PHP_EOL;
//				echo '<p class="notice-mo"><i class="fas fa-arrows-alt-h"></i> 손가락으로 좌우 스크롤해 주세요.</p>'.PHP_EOL;
//				echo '</div>'.PHP_EOL;
//			}
//			?>
<!--			<script src="--><?php //echo EYOOM_THEME_URL; ?><!--/plugins/slick/slick.min.js"></script>-->
<!--			<script>-->
<!--			$('.review-slider-inner').slick({-->
<!--				dots: false,-->
<!--				infinite: true,-->
<!--				slidesToShow: 4,-->
<!--				slidesToScroll: 1,-->
<!--				autoplay: true,-->
<!--				autoplaySpeed: 15000,// 15초-->
<!--				responsive: [-->
<!--					{-->
<!--						breakpoint: 992,-->
<!--						settings: {-->
<!--							slidesToShow: 3,-->
<!--							arrows: false-->
<!--						}-->
<!--					},-->
<!--					{-->
<!--						breakpoint: 768,-->
<!--						settings: {-->
<!--							slidesToShow: 2,-->
<!--							arrows: false-->
<!--						}-->
<!--					}-->
<!--				]-->
<!--			});-->
<!--			</script>-->
<!--		</div>-->
<!--	</div>-->
<!--</section>-->


<!--<section class="section section-m-tb">-->
<!--	<div class="container">-->
<!--		--><?php ///* EB슬라이더 - shpo018 two slider */ ?>
<!--		--><?php //echo eb_slider('1649055517'); ?>
<!--	</div>-->
<!--</section>-->