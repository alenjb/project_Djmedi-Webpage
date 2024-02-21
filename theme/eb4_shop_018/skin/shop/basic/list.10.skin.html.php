<?php
/**
 * skin file : /theme/THEME_NAME/skin/shop/basic/list.10.skin.html.php
 */
if (!defined('_EYOOM_')) exit;
?>

<style>
.product-list-10 .item-list {position:relative;height:100%;background:var(--white-color);border:1px solid var(--border-color-light);}
/* 이미지 */
.product-list-10 .product-img {position:relative;overflow:hidden}
.product-list-10 .product-img a {display:block}
.product-list-10 .product-img a.nw-wn {opacity:0;position:absolute;top:55%;left:50%;transform:translate(-50%,-50%);width:100px;padding:0 10px;line-height:26px;font-size:11px;text-align:center;color:#333;background:rgba(255,255,255,.8);box-shadow:0 0 3px rgba(0,0,0,.15);border-radius:17px !important;-webkit-transition:all 0.3s ease-in-out;-moz-transition:all 0.3s ease-in-out;-o-transition:all 0.3s ease-in-out;transition:all 0.3s ease-in-out}
.product-list-10 .item-list:hover a.nw-wn {opacity:1;top:50%}
.product-list-10 .product-img a.nw-wn:hover {color:#fff;background:rgba(0,0,0,.8)}
.product-list-10 .product-img-in {position:relative;overflow:hidden;width:100%}
.product-list-10 .product-img-in img {display:block;width:100% \9;max-width:100% !important;height:auto !important;}
.product-list-10 .item-list .hvr-img {position: absolute;top: -100%;left: 0;width: 100%;transition:.3s}
.product-list-10 .item-list:hover .hvr-img {top:0;}
.product-list-10 .product-img-in .discount-percent {position:absolute;top:-40px;left:-40px;width:80px;height:80px;padding-top:57px;text-align:center;background:var(--primary-color-dark);color:var(--white-color);font-style:italic;font-size:.75rem;-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);transform:rotate(-45deg)}
/* 상품 유형 */
.product-list-10 .rgba-banner-area {position:absolute;top:5px;right:5px}
.product-list-10 .shop-rgba-red {background:#FF4848;opacity:0.9}
.product-list-10 .shop-rgba-yellow {background:#FDAB29;opacity:0.9}
.product-list-10 .shop-rgba-green {background:#73B852;opacity:0.9}
.product-list-10 .shop-rgba-purple {background:#907EEC;opacity:0.9}
.product-list-10 .shop-rgba-orange {background:#FF6F42;opacity:0.9}
.product-list-10 .shop-rgba-dark {background:#4B4B4D;opacity:0.9}
.product-list-10 .shop-rgba-default {background:#A6A6A6;opacity:0.9}
.product-list-10 .rgba-banner {height:14px;width:60px;line-height:14px;color:#fff;font-size:10px;text-align:center;font-weight:normal;position:relative;text-transform:uppercase;margin-bottom:1px}
/* 상품정보 */
.product-list-10 .product-description {position:relative;overflow:hidden}
.product-list-10 .product-description .product-description-in {position:relative;overflow:hidden;z-index:1;padding:15px;}
.product-list-10 .product-description .product-id {color:#757575;display:block;font-size:var(--smaller-font-size);margin-top:8px}
.product-list-10 .product-description .product-info {position:relative;margin:5px 0;font-size:var(--smaller-font-size);color:var(--text-color-light);}
.product-list-10 .product-description .product-name {position:relative;margin:0 0 15px;}
.product-list-10 .product-description .product-name a {display:block;line-height:18px;font-size:var(--normal-font-size);color:var(--text-color);}
.product-list-10 .product-description .product-name a:hover {text-decoration:underline}
.product-list-10 .product-description .product-price {display:flex;align-items:center;flex-wrap:wrap;}
.product-list-10 .product-description .title-price {font-size:var(--normal-font-size);font-weight:bold;}
.product-list-10 .product-description .line-through {font-size:var(--normal-font-size);color:var(--border-color);text-decoration:line-through;font-weight:normal}
.product-list-10 .product-description .product-price svg.arrow-icon {width:auto;height:18px;margin:0 5px;}
/* 소셜링크 */
.product-list-10 .product-description .product-sns {margin-top:10px}
.product-list-10 .product-description .product-sns ul {display:flex;}
.product-list-10 .product-description .product-sns ul li {margin-right:2px}
.product-list-10 .product-description .product-sns ul li a {display:inline-block;width:26px;height:26px;line-height:26px;text-align:center;background:#c5c5c5;color:#fff;font-size:12px}
.product-list-10 .product-description .product-sns ul .s-wish a:hover {background:#cc2300}
.product-list-10 .product-description .product-sns ul .s-facebook a:hover {background:#405892}
.product-list-10 .product-description .product-sns ul .s-twitter a:hover {background:#4CA0EB}
/* 상품별점 */
.product-list-10 .product-description-bottom {position:relative;overflow:hidden;padding:7px 10px;border-top:1px solid #e5e5e5}
.product-list-10 .product-description-bottom > a {line-height:20px}
.product-list-10 .product-ratings {display:flex;justify-content:flex-end}
.product-list-10 .product-ratings li {padding:0;line-height:20px}
.product-list-10 .product-ratings li .rating {color:#959595;line-height:normal;font-size:11px}
.product-list-10 .product-ratings li .rating-selected {color:#FF4848;font-size:11px}
/* 리스트형 */
.product-type-list .product-list-10 .col-lg-3 {width:50%}
.product-type-list .product-list-10 .item-list {border:1px solid #e5e5e5}
.product-type-list .product-list-10 .product-img {position:absolute;z-index:1;overflow:hidden;background:#fff;width:146px}
.product-type-list .product-list-10 .product-description {padding-left:155px;min-height:146px;text-align:left}
.product-type-list .product-list-10 .product-description .product-description-in {padding:10px}
@media (max-width:991px) {
	.product-list-10 .col-lg-3 {margin-bottom: 8px}
    .product-list-10 .item-list .product-img .product-sns {right:10px}
    .product-list-10 .item-list a.nw-wn {opacity:1;top:inherit !important;bottom:0}
    .product-list-10 .product-description {padding: 0;}
    .product-list-10 .product-description:before {display:none}
    .product-list-10 .product-description .product-description-in {padding:0 10px 10px}
    .product-list-10 .product-description .title-price {display:block}
    .product-list-10 .product-description-bottom {padding:7px 5px}
    .product-type-list .product-list-10 {--bs-gutter-y:inherit}
    .product-type-list .product-list-10 .col-lg-3 {margin-bottom: 8px}
}
@media (max-width:767px) {
    .product-type-list .product-list-10 .col-lg-3 {width:100%}
    .product-list-10 .product-description .title-price, .product-list-10 .product-description .line-through {font-size:var(--small-font-size);}
}
</style>

<div id="product_list" class="product-type-gallery">
    <div class="product-list-10 row gx-2 g-lg-3">
        <?php for ($i=0; $i<count((array)$list); $i++) { ?>
        <div class="col-6 col-lg-3">
            <div class="item-list">
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
                            <span class="title-price line-through"><?php echo $list[$i]['it_cust_price']; ?>원</span>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="arrow-icon"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="rgba(52,72,94,1)"/></svg>
                            <?php } ?>
                            <?php if ($this->view_it_price) { ?>
                            <span class="title-price"><?php echo $list[$i]['it_tel_inq']; ?>원</span>
                            <?php } ?>
                        </div>
                        <?php } ?>
                        
                        <?php if ($this->view_sns) { ?>
	                    <div class="product-sns">
	                        <ul>
		                    	<li class="s-wish"><a href="javascript:void(0);" class="wish-icon" onclick="item_wish_for_list(<?php echo $list[$i]['it_id']; ?>);" title="위시리스트"><i class="far fa-heart"></i></a></li>
<!--	                            <li class="s-facebook"><a href="https://www.facebook.com/sharer/sharer.php?u=--><?php //echo $data['sns_url']; ?><!--&amp;p=--><?php //echo $data['sns_title']; ?><!--" target="_blank" class="facebook-icon" title="페이스북"><i class="fab fa-facebook-f"></i></a></li>-->
<!--	                    <li class="s-twitter"><a href="https://twitter.com/share?url=--><?php //echo $data['sns_url']; ?><!--&amp;text=--><?php //echo $data['sns_title']; ?><!--" target="_blank" class="twitter-icon" title="트위터"><i class="fab fa-twitter"></i></a></li>-->
	                    
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
        </div>
        <?php } ?>
        <?php if (count((array)$list) == 0) { ?>
        <p class="text-center font-size-13 color-grey margin-top-10"><i class="fa fa-exclamation-circle"></i> 등록된 상품이 없습니다.</p>
        <?php } ?>
    </div>
</div>