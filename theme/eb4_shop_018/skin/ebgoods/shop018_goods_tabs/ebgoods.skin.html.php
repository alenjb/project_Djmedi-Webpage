<?php
/**
 * skin file : /theme/THEME_NAME/skin/ebslider/basic/ebgoods.skin.html.php
 */
if (!defined('_EYOOM_')) exit;
?>

<?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
<div class="position-relative <?php if ($eg_master['eg_state'] == '2') { ?>eb-hidden-space<?php } ?>">
    <div class="adm-edit-btn btn-edit-mode" style="top:10px;text-align:center">
        <div class="btn-group">
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=ebgoods_form&amp;thema=<?php echo $theme; ?>&amp;eg_code=<?php echo $eg_master['eg_code']; ?>&amp;w=u&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="ae-btn-l"><i class="far fa-edit"></i> EB상품 마스터 설정</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=ebgoods_form&amp;thema=<?php echo $theme; ?>&amp;eg_code=<?php echo $eg_master['eg_code']; ?>&amp;w=u" target="_blank" class="ae-btn-r" title="새창 열기">
                <i class="far fas fa-external-link-alt"></i>
            </a>
            <button type="button" class="ae-btn-info" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-html="true" data-bs-content="
                <span class='font-size-11'>
            <strong class='color-indigo'>좌측 [EB상품 설정하기 버튼] 클릭 후 아래 설명 참고</strong><br>
            <div class='margin-hr-5'></div>
            <span class='color-indigo'>[설정정보]</span><br>
            1. 상품 마스터 제목 : EB goods <br>
            2. 상품유형(히트, 추천,...)이 아닌 상품분류(카테고리)를 출력하는 스킨<br>
            3. 아이템 등록시 탭별로 출력<br>
            <span class='color-indigo'>[EB 컨텐츠 - 아이템 관리]</span><br>
            1. 아이템 등록을 통해 분류별 상품 등록 가능<br>
            2. 아이템 대표 연결주소 입력시 탭 하단에 'More show' 버튼 링크 출력<br>
            3. 카테고리 (ca_id) : 출력할 상품 분류 선택<br>
            4. 출력상품수 4의 배수로 선택<br>
            5. 상품이미지 출력 여부 : 사용<br>
            6. 이미지 사이즈 : 400 x 0
            <div class='margin-hr-5'></div>
            </span>
            "><i class="fas fa-question-circle"></i></button>
        </div>
    </div>
</div>
<?php }?>

<?php if (isset($eg_master) && $eg_master['eg_state'] == '1') { // 보이기 상태에서만 출력 ?>
<style>
.ebgoods-gallery-wrap {position:relative;}
/* 타이틀 */
.ebgoods-gallery-wrap .ebgoods-title h2 {margin-bottom:20px;font-size:var(--h1-font-size);text-align:center;color:var(--primary-color-dark)}
/* 탭메뉴 */
.ebgoods-gallery-wrap .ebgoods-gallery-tabs {display:flex;flex-wrap:wrap;justify-content:center;position:relative;margin-bottom:30px;list-style:none;border:0 none}
.ebgoods-gallery-wrap .ebgoods-gallery-tabs li {position:relative;}
.ebgoods-gallery-wrap .ebgoods-gallery-tabs li a {position:relative;display:block;padding:12px 20px;font-size:var(--small-font-size);color:#909090;border-bottom:2px solid transparent;transition:all 0.3s ease-in-out}
.ebgoods-gallery-wrap .ebgoods-gallery-tabs li a:hover {color:#555;}
.ebgoods-gallery-wrap .ebgoods-gallery-tabs li a:after {content:"";display:block;position:absolute;right:0;top:50%;width:1px;height:16px;margin-top:-8px;background-color:var(--border-color-light);}
.ebgoods-gallery-wrap .ebgoods-gallery-tabs li:last-child a:after {display:none;}
.ebgoods-gallery-wrap .ebgoods-gallery-tabs li a.active {color:var(--primary-color-dark);border-bottom-color:var(--primary-color-dark);}
/* 콘텐츠 */
.ebgoods-gallery-wrap .tab-content {position:relative}
.ebgoods-gallery .goods-box {position:relative;height:100%;border:1px solid var(--border-color-light);background-color: var(--body-color-deep);}
/* 이미지 */
.ebgoods-gallery .goods-img {position:relative;overflow:hidden;}
.ebgoods-gallery .goods-img a {display:block}
.ebgoods-gallery .goods-img a.nw-wn {opacity:0;position:absolute;top:55%;left:50%;transform:translate(-50%,-50%);width:100px;padding:0 10px;line-height:26px;font-size:11px;text-align:center;color:#333;background:rgba(255,255,255,.8);box-shadow:0 0 3px rgba(0,0,0,.15);border-radius:13px !important;-webkit-transition:all 0.3s ease-in-out;-moz-transition:all 0.3s ease-in-out;-o-transition:all 0.3s ease-in-out;transition:all 0.3s ease-in-out}
.ebgoods-gallery .goods-box:hover a.nw-wn {opacity:1;top:50%}
.ebgoods-gallery .goods-img a.nw-wn:hover {color:#fff;background:rgba(0,0,0,.8)}
.ebgoods-gallery .goods-img-in {position:relative;overflow:hidden;width:100%}
.ebgoods-gallery .goods-img-in img {display:block;width:100% \9;max-width:100% !important;height:auto !important;transition:.3s;}
.ebgoods-gallery .goods-img:hover img {opacity:.8}
/* 상품 유형 */
.ebgoods-gallery .rgba-banner-area {position:absolute;top:5px;right:5px;}
.ebgoods-gallery .shop-rgba-red {background:#FF4848;opacity:0.9}
.ebgoods-gallery .shop-rgba-yellow {background:#FDAB29;opacity:0.9}
.ebgoods-gallery .shop-rgba-green {background:#73B852;opacity:0.9}
.ebgoods-gallery .shop-rgba-purple {background:#907EEC;opacity:0.9}
.ebgoods-gallery .shop-rgba-orange {background:#FF6F42;opacity:0.9}
.ebgoods-gallery .shop-rgba-dark {background:#4B4B4D;opacity:0.9}
.ebgoods-gallery .shop-rgba-default {background:#A6A6A6;opacity:0.9}
.ebgoods-gallery .rgba-banner {display:block;height:14px;width:60px;padding:0 12px;margin-bottom:2px;line-height:14px;color:#fff;font-size:0.655rem;text-align:center;font-weight:normal;position:relative;text-transform:uppercase}
/* 소셜링크 */
.ebgoods-gallery .goods-img .goods-sns {position:absolute;top:5px;left:-40px;z-index:1;-webkit-transition:all 0.3s ease-in-out;-moz-transition:all 0.3s ease-in-out;-o-transition:all 0.3s ease-in-out;transition:all 0.3s ease-in-out}
.ebgoods-gallery .goods-box:hover .goods-img .goods-sns {left:5px}
.ebgoods-gallery .goods-img .goods-sns ul {margin:0;padding:0;list-style:none}
.ebgoods-gallery .goods-img .goods-sns ul li {margin-bottom:5px}
.ebgoods-gallery .goods-img .goods-sns ul li:last-child {margin-bottom:0}
.ebgoods-gallery .goods-img .goods-sns ul li a {display:inline-block;width:26px;height:26px;line-height:26px;text-align:center;background:#c5c5c5;color:#fff;font-size:12px}
.ebgoods-gallery .goods-img .goods-sns ul .s-facebook a {background:#405892}
.ebgoods-gallery .goods-img .goods-sns ul .s-twitter a {background:#4CA0EB}
.ebgoods-gallery .goods-img .goods-sns ul .s-google a {background:#D8503F}
.ebgoods-gallery .goods-img .goods-sns ul li a:hover {background:#333}
/* 상품정보 */
.ebgoods-gallery .goods-description {position:relative;overflow:hidden;}
.ebgoods-gallery .goods-description .goods-description-in {position:relative;bottom:0;overflow:hidden;z-index:1;padding:20px 15px}
.ebgoods-gallery .goods-description .goods-name {position:relative;margin:0 0 5px}
.ebgoods-gallery .goods-description .goods-name a {display:block;font-size:var(--normal-font-size);word-break:keep-all;color:var(--text-color);}
.ebgoods-gallery .goods-description .goods-name a:hover {text-decoration:underline}
.ebgoods-gallery .goods-description .goods-info {position:relative;overflow:hidden;margin-bottom:10px;color:var(--text-color-light);font-size:var(--smaller-font-size);}
.ebgoods-gallery .goods-description .goods-price {display:flex;align-items:center;flex-wrap:wrap;}
.ebgoods-gallery .goods-description .title-price {font-size:var(--normal-font-size);font-weight:bold;}
.ebgoods-gallery .goods-description .line-through {font-size:var(--normal-font-size);color:var(--border-color);text-decoration:line-through;font-weight:normal}
.ebgoods-gallery .goods-description .goods-price svg.arrow-icon {width:auto;height:18px;margin:0 5px;}
@media (max-width:991px) {
	.ebgoods-gallery-wrap .ebgoods-title h2 {margin-bottom:10px;}
	.ebgoods-gallery-wrap .ebgoods-gallery-tabs {margin-bottom: 20px}
    .ebgoods-gallery .goods-img a.nw-wn {opacity:1;top:inherit !important;bottom:0}
    .ebgoods-gallery .goods-box .goods-img .goods-sns {right:10px}
    .ebgoods-gallery .goods-description:before {display:none}
}
@media (max-width:767px) {
	.ebgoods-gallery-wrap .ebgoods-gallery-tabs li {flex:0 0 50%;max-width:50%;margin:0 0 5px;text-align:center;}
	.ebgoods-gallery-wrap .ebgoods-gallery-tabs li:nth-child(even) a:after {display:none;}
    .ebgoods-gallery .goods-description .title-price, .ebgoods-gallery .goods-description .line-through {font-size:var(--small-font-size);}
}
</style>

<div class="ebgoods-gallery-wrap">
    <div class="ebgoods-title">
        <h2 class="en-font"><?php echo $eg_master['eg_subject']; ?></h2>
    </div>
    
    <ul class="ebgoods-gallery-tabs nav nav-tabs">
        <?php if (is_array($eg_item)) { foreach ($eg_item as $k => $eb_goods) { ?>
        <li><a href="#basic-tlb-<?php echo $eg_master['eg_code']; ?>-<?php echo ($k+1); ?>" data-bs-toggle="tab" <?php if ($eb_goods['gi_link']) { ?>data-href="<?php echo $eb_goods['gi_link']; ?>" target="<?php echo $eb_goods['gi_target']; ?>"<?php } ?> class="<?php if ($k==0) { ?>active<?php } else if ($eg_count == ($k+1)) { ?>last<?php }?> <?php if ($eb_goods['gi_link']) { ?>cursor-pointer<?php } ?>"><?php echo $eb_goods['gi_title']; ?></a></li>
        <?php }} ?>
    </ul>
    
    <div class="tab-content">
        <?php if (is_array($eg_item)) { foreach ($eg_item as $k => $eb_goods) { ?>
        <div class="tab-pane <?php echo ($k==0) ? 'active': ''; ?> in" id="basic-tlb-<?php echo $eg_master['eg_code']; ?>-<?php echo ($k+1); ?>">
            <div class="ebgoods-gallery row g-2 g-lg-4">
                <?php if (count((array)$eb_goods['list']) > 0) { foreach ($eb_goods['list'] as $i => $data) { ?>
                <div class="col-6 col-lg-3">
                    <div class="goods-box">
                        <div class="goods-img">
                            <a href="<?php echo $data['href']; ?>">
                                <div class="goods-img-in">
                                <?php if ($eb_goods['gi_view_img'] == 'y') { ?>
                                    <?php if($data['it_image']) { ?>
                                        <?php echo $data['it_image']; ?>
                                    <?php } else { ?>
                                        <span class="no-image">No Image</span>
                                    <?php } ?>
                                <?php } ?>
                                </div>
                            </a>

			                <a href="<?php echo $data['href']; ?>" target="_blank" class="nw-wn">새창에서 열기</a>
			                
                            <?php if ($eb_goods['gi_view_it_icon']) { ?>
                                <?php echo $data['it_icon']; ?>
                            <?php } ?>

                            <?php if ($eb_goods['gi_view_sns'] == 'y') { ?>
                            <div class="goods-sns">
                                <ul>
                                    <li class="s-facebook"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $data['sns_url']; ?>&amp;p=<?php echo $data['sns_title']; ?>" target="_blank" class="facebook-icon" title="페이스북"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="s-twitter"><a href="https://twitter.com/share?url=<?php echo $data['sns_url']; ?>&amp;text=<?php echo $data['sns_title']; ?>" target="_blank" class="twitter-icon" title="트위터"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            <?php } ?>
                        </div>

                        <div class="goods-description">
                            <div class="goods-description-in">
                                <h4 class="goods-name">
                                    <a href="<?php echo $data['href']; ?>">
                                        <?php echo $data['it_name']?>
                                    </a>
                                </h4>

	                            <?php if ($eb_goods['gi_view_it_basic'] == 'y') { ?>
                                <p class="goods-info"><?php echo $data['it_basic']?></p>
                                <?php } ?>

                                <div class="goods-price">
                                    <?php if ($eb_goods['gi_view_it_cust_price'] == 'y' && $data['it_cust_price']) { ?>
                                    <span class="title-price line-through"><?php echo number_format($data['it_cust_price']); ?>원</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="arrow-icon"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="rgba(52,72,94,1)"/></svg>
                                    <?php } ?>
                                    <?php if ($eb_goods['gi_view_it_price'] == 'y') { ?>
                                    <span class="title-price"><?php echo number_format($data['it_price']); ?>원</span>
                                    <?php } ?>
                                </div>
                            </div>

                            <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
				            <div class="adm-edit-btn btn-edit-mode" style="bottom:0">
				                <div class="btn-group">
				                    <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shop&pid=itemform&w=u&it_id=<?php echo $data['it_id']; ?>&wmode=1" onclick="eb_admset_modal(this.href); return false;" class="ae-btn-l ae-item-btn"><i class="far fa-edit"></i> 개별상품 설정</a>
				                    <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shop&pid=itemform&w=u&it_id=<?php echo $data['it_id']; ?>" target="_blank" class="ae-btn-r" title="새창 열기">
				                        <i class="fas fa-external-link-alt"></i>
				                    </a>
				                </div>
				            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php }} ?>

                <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
                <div class="adm-edit-btn btn-edit-mode" style="bottom:-10px;z-index:10">
                    <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=ebgoods_itemform&amp;thema=<?php echo $theme; ?>&amp;eg_code=<?php echo $eg_master['eg_code']; ?>&amp;gi_no=<?php echo $eb_goods['gi_no']; ?>&amp;w=u&amp;iw=u&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="ae-btn-l ae-item-btn"><i class="far fa-edit"></i> EB상품 아이템 설정</a>
                </div>
                <?php } ?>

                <?php if (count((array)$eb_goods['list']) == 0) { ?>
                <p class="text-center font-size-13 color-grey m-t-10"><i class="fas fa-exclamation-circle"></i> 등록된 상품이 없습니다.</p>
                <?php } ?>
            </div>
            <?php if($eb_goods['gi_link']) { ?>
            <div class="btn-more text-center m-t-20"><a href="<?php echo $eb_goods['gi_link']; ?>">More View</a></div>
            <?php } ?>
        </div>
        <?php }} ?>
    </div>
</div>
<?php } ?>