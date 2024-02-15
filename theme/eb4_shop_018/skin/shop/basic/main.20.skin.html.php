<?php
/**
 * skin file : /theme/THEME_NAME/skin/shop/basic/main.20.skin.html.php
 */
if (!defined('_EYOOM_')) exit;
add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/plugins/splide/splide.min.css" type="text/css" media="screen">',0);
?>

<style>
.product-main-20 {display:none;position:relative}
.product-main-20 .slick-list {padding:0 1px}
.product-main-20 .item-main-20 {position:relative;outline:none}
.product-main-20 .item-main-20-in {position:relative;height:100%;background-color:var(--body-color-deep);border:1px solid var(--border-color-light);}
/* 이미지 */
.product-main-20 .product-img {position:relative;overflow:hidden;}
.product-main-20 .product-img a {display:block}
.product-main-20 .product-img a.nw-wn {opacity:0;position:absolute;top:55%;left:50%;transform:translate(-50%,-50%);width:100px;padding:0 10px;line-height:26px;font-size:11px;text-align:center;color:var(--text-color);background:rgba(255,255,255,.8);box-shadow:0 0 3px rgba(0,0,0,.15);border-radius:13px !important;-webkit-transition:all 0.3s ease-in-out;-moz-transition:all 0.3s ease-in-out;-o-transition:all 0.3s ease-in-out;transition:all 0.3s ease-in-out}
.product-main-20 .item-main-20:hover a.nw-wn {opacity:1;top:50%}
.product-main-20 .product-img a.nw-wn:hover {color:#fff;background:rgba(0,0,0,.8)}
.product-main-20 .product-img-in {position:relative;overflow:hidden;width:100%}
.product-main-20 .product-img-in img {display:block;width:100% \9;max-width:100% !important;height:auto !important;}
.product-main-20 .item-main-20 .hvr-img {position: absolute;top: -100%;left: 0;width: 100%;transition:.3s}
.product-main-20 .item-main-20:hover .hvr-img {top:0;}
.product-main-20 .product-img-in .discount-percent {position:absolute;top:-40px;left:-40px;width:80px;height:80px;padding-top:57px;text-align:center;background:var(--primary-color-dark);color:var(--white-color);font-style:italic;font-size:.75rem;-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);transform:rotate(-45deg)}
/* 상품 유형 */
.product-main-20 .rgba-banner-area {position:absolute;top:5px;right:5px}
.product-main-20 .shop-rgba-red {background:#FF4848;opacity:0.9}
.product-main-20 .shop-rgba-yellow {background:#FDAB29;opacity:0.9}
.product-main-20 .shop-rgba-green {background:#73B852;opacity:0.9}
.product-main-20 .shop-rgba-purple {background:#907EEC;opacity:0.9}
.product-main-20 .shop-rgba-orange {background:#FF6F42;opacity:0.9}
.product-main-20 .shop-rgba-dark {background:#4B4B4D;opacity:0.9}
.product-main-20 .shop-rgba-default {background:#A6A6A6;opacity:0.9}
.product-main-20 .rgba-banner {height:14px;width:60px;line-height:14px;color:#fff;font-size:10px;text-align:center;font-weight:normal;position:relative;text-transform:uppercase;margin-bottom:1px}
/* 상품정보 */
.product-main-20 .product-description {position:relative;overflow:hidden;}
.product-main-20 .product-description .product-description-in {position:relative;overflow:hidden;z-index:1;padding:15px}
.product-main-20 .product-description .product-id {color:#757575;display:block;font-size:var(--smaller-font-size);margin-top:8px}
.product-main-20 .product-description .product-info {position:relative;margin:5px 0;line-height:1.2em;font-size:var(--smaller-font-size);color:var(--text-color-light);word-break:keep-all;}
.product-main-20 .product-description .product-name {position:relative;margin:0 0 15px;}
.product-main-20 .product-description .product-name a {display:block;line-height:1.4em;font-size:var(--normal-font-size);color:var(--text-color);word-break:keep-all;}
.product-main-20 .product-description .product-name a:hover {text-decoration:underline}
.product-main-20 .product-description .product-price {display:flex;align-items:center;flex-wrap:wrap;}
.product-main-20 .product-description .title-price {font-size:var(--normal-font-size);font-weight:bold;}
.product-main-20 .product-description .line-through {font-size:var(--normal-font-size);color:var(--border-color);text-decoration:line-through;font-weight:normal}
.product-main-20 .product-description .product-price svg.arrow-icon {width:auto;height:18px;margin:0 5px;}
/* 소셜링크 */
.product-main-20 .product-description .product-sns {margin-top:10px}
.product-main-20 .product-description .product-sns ul {display:flex;}
.product-main-20 .product-description .product-sns ul li {margin-right:2px}
.product-main-20 .product-description .product-sns ul li:last-child {margin-bottom:0}
.product-main-20 .product-description .product-sns ul li a {display:inline-block;width:26px;height:26px;line-height:26px;text-align:center;background:#c5c5c5;color:#fff;font-size:12px}
.product-main-20 .product-description .product-sns ul .s-wish a:hover {background:#cc2300}
.product-main-20 .product-description .product-sns ul .s-facebook a:hover {background:#405892}
.product-main-20 .product-description .product-sns ul .s-twitter a:hover {background:#4CA0EB}
/* 별점 */
.product-main-20 .product-description-bottom {position:relative;overflow:hidden;padding:7px 10px;border-top:1px solid #e5e5e5}
.product-main-10 .product-description-bottom > a {line-height:20px}
.product-main-20 .product-ratings {display:flex;justify-content:flex-end}
.product-main-20 .product-ratings li {padding:0;line-height:20px}
.product-main-20 .product-ratings li .rating {color:#959595;line-height:normal;font-size:11px}
.product-main-20 .product-ratings li .rating-selected {color:#FF4848;font-size:11px}

/* 컨트롤 좌우 */
.product-main-20 .splide__arrow--next,
.product-main-20 .splide__arrow--prev {opacity: 0;width: 40px;height: 40px;background: rgba(0,0,0,.6);-webkit-transition: all 0.3s linear;-moz-transition: all 0.3s linear;-o-transition: all 0.3s linear;-ms-transition: all 0.3s linear;transition: all 0.3s linear;border-radius: 50% !important;}
.product-main-20 .splide__arrow--next:hover,
.product-main-20 .splide__arrow--prev:hover {background: rgba(0,0,0,.8);}
.product-main-20 .splide__arrow--next {right: 0;z-index: 1;}
.product-main-20 .splide__arrow--prev {left: 0;z-index: 1;}
.product-main-20:hover .splide__arrow--next {right: 0.5rem;opacity: 1;}
.product-main-20:hover .splide__arrow--prev {left: 0.5rem;opacity: 1;}
.product-main-20 .splide__arrow--next:before,
.product-main-20 .splide__arrow--prev:before {content: "";display: block;position: absolute;top: 50%;width: 14px;height: 14px;margin-top: -7px;-webkit-transform: rotate(45deg);-moz-transform: rotate(45deg);-o-transform: rotate(45deg);-ms-transform: rotate(45deg);transform: rotate(45deg);transition: all 0.3s linear;}
.product-main-20 .splide__arrow--next:before {right: 15px;border-right: 1px solid #eee;border-top: 1px solid #eee;}
.product-main-20 .splide__arrow--prev:before {left: 15px;border-left: 1px solid #eee;border-bottom: 1px solid #eee;}

.notice-mo {display:none}
@media (max-width:991px) {
    .product-main-20 .splide__arrows {display: none}
    .product-main-20 .item-main-20-in .product-img .product-sns {right:10px}
    .product-main-20 .item-main-20 a.nw-wn {opacity:1;top:inherit !important;bottom:0}
	.product-main-20 .product-description:before {display:none}
    .product-main-20 .product-description .product-description-in {padding:0 10px 10px}
    .product-main-20 .product-description .product-name {margin-top:10px}
    .product-main-20 .product-description-bottom {padding:7px 5px}
    .notice-mo {display:block;margin:8px 0 0;padding:2px 5px;font-size:11px;color:#909090;background:#f8f8f8}
}
@media (max-width:767px) {
    .product-main-20 .product-description .title-price, .product-main-20 .product-description .line-through {font-size:var(--small-font-size);}
}
</style>

<div class="splide product-main-20">
	<?php /* 좌우 버튼 */ ?>
	<div class="splide__arrows">
		<button class="splide__arrow splide__arrow--prev">
		</button>
		<button class="splide__arrow splide__arrow--next">
		</button>
	</div>
    <div class="product-main-20-in splide__track">
	    <ul class="splide__list">
	        <?php for ($i=0; $i<count((array)$list); $i++) { ?>
	        <li class="splide__slide item-main-20">
	            <div class="item-main-20-in">
	                <div class="product-img">
	                    <?php if ($list[$i]['href']) { ?>
	                    <a href="<?php echo $list[$i]['href']; ?>">
	                    <?php } ?>
	                        <div class="product-img-in">
	                            <?php if ($list[$i]['it_image2']) { ?>
	                            <div class="hvr-img"><?php echo $list[$i]['it_image2']; ?></div>
	                            <?php } ?>
	                            <?php echo $list[$i]['it_image']; ?>
	                            <?php if ($this->view_it_icon) { ?>
	                            <?php echo $list[$i]['it_icon']; ?>
	                            <?php } ?>
				                <?php if($list[$i]['dc_ratio']) { ?>
				                <div class="discount-percent"><?php echo $list[$i]['dc_ratio']; ?>%</div>
				                <?php } ?>
	                        </div>
	                    <?php if ($list[$i]['href']) { ?>
	                    </a>
	                    <?php } ?>
	
		                <?php if ($list[$i]['href']) { ?>
		                <a href="<?php echo $list[$i]['href']; ?>" target="_blank" class="nw-wn">새창에서 열기</a>
		                <?php } ?>
	                </div>
	
	                <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
		            <div class="adm-edit-btn btn-edit-mode" style="bottom:0;z-index:10">
		                <div class="btn-group">
		                    <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shop&pid=itemform&w=u&it_id=<?php echo $list[$i]['it_id']; ?>&wmode=1" onclick="eb_admset_modal(this.href); return false;" class="ae-btn-l ae-item-btn"><i class="far fa-edit"></i> 개별상품 설정</a>
		                    <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shop&pid=itemform&w=u&it_id=<?php echo $list[$i]['it_id']; ?>" target="_blank" class="ae-btn-r" title="새창 열기">
		                        <i class="fas fa-external-link-alt"></i>
		                    </a>
		                </div>
		            </div>
	                <?php } ?>
	
	                <div class="product-description">
	                    <div class="product-description-in">
	                        <?php if ($this->view_it_id) { ?>
	                        <span class="product-id"><?php echo stripslashes($list[$i]['it_id']); ?></span>
	                        <?php } ?>
	
	                        <?php if ($this->view_it_basic) { ?>
	                        <div class="product-info"><?php echo stripslashes($list[$i]['it_basic']); ?></div>
	                        <?php } ?>
	
	                        <?php if ($list[$i]['href']) { ?>
	                        <h4 class="product-name">
	                            <a href="<?php echo $list[$i]['href']; ?>">
	                        <?php } ?>
	                            <?php if ($this->view_it_name) { echo stripslashes($list[$i]['it_name']); } ?>
	                        <?php if ($list[$i]['href']) { ?>
	                            </a>
	                        </h4>
	                        <?php } ?>
	
	                        <?php if ($this->view_it_cust_price || $this->view_it_price) { ?>
	                        <div class="product-price">
	                            <?php if ($this->view_it_cust_price && $list[$i]['it_cust_price']) { ?>
	                            <span class="title-price line-through">₩ <?php echo $list[$i]['it_cust_price']; ?></span>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="arrow-icon"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="rgba(52,72,94,1)"/></svg>
	                            <?php } ?>
	                            <?php if ($this->view_it_price) { ?>
	                            <span class="title-price">₩ <?php echo $list[$i]['it_tel_inq']; ?></span>
	                            <?php } ?>
	                        </div>
	                        <?php } ?>
	                        
	                        <?php if ($this->view_sns) { ?>
		                    <div class="product-sns">
		                        <ul>
			                    	<li class="s-wish"><a href="javascript:void(0);" class="wish-icon" onclick="item_wish_for_list(<?php echo $list[$i]['it_id']; ?>);" title="위시리스트"><i class="far fa-heart"></i></a></li>
		                            <li class="s-facebook"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $data['sns_url']; ?>&amp;p=<?php echo $data['sns_title']; ?>" target="_blank" class="facebook-icon" title="페이스북"><i class="fab fa-facebook-f"></i></a></li>
		                            <li class="s-twitter"><a href="https://twitter.com/share?url=<?php echo $data['sns_url']; ?>&amp;text=<?php echo $data['sns_title']; ?>" target="_blank" class="twitter-icon" title="트위터"><i class="fab fa-twitter"></i></a></li>
		                        </ul>
		                    </div>
		                    <?php } ?>
	                    </div>
	                </div>
	                <div class="product-description-bottom">
			            <div class="row">
			            	<div class="col-6">
				            	<a class="pull-left font-size-12" href="<?php echo G5_SHOP_URL; ?>/itemuselist.php?sfl=a.it_id&stx=<?php echo $list[$i]['it_id']; ?>">리뷰보기</a>
			            	</div>
			            	<div class="col-6">
				            	<ul class="product-ratings">
				                    <li><i class="rating<?php if ($list[$i]['star_score'] > 0) { ?>-selected fas fa-star<?php } else { ?> far fa-star<?php } ?>"></i></li>
				                    <li><i class="rating<?php if ($list[$i]['star_score'] > 1) { ?>-selected fas fa-star<?php } else { ?> far fa-star<?php } ?>"></i></li>
				                    <li><i class="rating<?php if ($list[$i]['star_score'] > 2) { ?>-selected fas fa-star<?php } else { ?> far fa-star<?php } ?>"></i></li>
				                    <li><i class="rating<?php if ($list[$i]['star_score'] > 3) { ?>-selected fas fa-star<?php } else { ?> far fa-star<?php } ?>"></i></li>
				                    <li><i class="rating<?php if ($list[$i]['star_score'] > 4) { ?>-selected fas fa-star<?php } else { ?> far fa-star<?php } ?>"></i></li>
				                </ul>
			            	</div>
			            </div>
	                </div>
	            </div>
	        </li>
	        <?php } ?>
	        <?php if (count((array)$list) == 0) { ?>
	        <p class="text-center font-size-13 color-grey margin-top-10"><i class="fas fa-exclamation-circle"></i> 등록된 상품이 없습니다.</p>
	        <?php } ?>
        </ul>
    </div>
    <p class="notice-mo"><i class="fas fa-arrows-alt-h"></i> 손가락으로 좌우 스크롤해 주세요.</p>
</div>

<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/splide/splide.min.js"></script>
<script>
	$(window).load(function(){
		$('.product-main-20').show();
		new Splide( '.product-main-20', {
			type : 'loop',
			perPage: 3,
			perMove: 1,
			gap: '1.5rem',
			autoplay: true,
			interval: 5000,
			pagination: false,
			breakpoints: {
				991: {
					perPage: 2,
					gap: '0.5rem',
				},
			}
		} ).mount();
	});
</script>