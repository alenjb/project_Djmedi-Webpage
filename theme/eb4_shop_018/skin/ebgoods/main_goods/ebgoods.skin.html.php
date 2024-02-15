<?php
/**
 * skin file : /theme/THEME_NAME/skin/ebslider/main_goods/ebgoods.skin.html.php
 */
if (!defined('_EYOOM_')) exit;
?>

<style>
.ebgoods-maingoods-headline {position:relative}
.ebgoods-maingoods-headline h3 {position:relative;margin:0 0 30px;text-align:center}
.ebgoods-maingoods-headline h3:after {content:"";display:block;position:absolute;bottom:-15px;left:50%;width:30px;height:3px;margin-left:-15px;background:#cc2300}
.ebgoods-maingoods-headline h3 b {color:#cc2300}
.ebgoods-maingoods-wrap {position:relative;margin-left:-10px;margin-right:-10px;font-size:.9375rem}
.ebgoods-maingoods-wrap:after {content:"";display:block;clear:both}
.ebgoods-maingoods-wrap .maingoods-item-box {position:relative;width:25%;float:left;padding:10px}
.ebgoods-maingoods-wrap .maingoods-item-box-in {position:relative;overflow:hidden;border:1px solid #d2d2d2;transition:all 0.2s ease-in-out}
.ebgoods-maingoods-wrap .maingoods-item-box-in:hover {border-color:#cc2300}
.ebgoods-maingoods-wrap .maingoods-item-box-img {position:relative;overflow:hidden;padding:8px 8px 0}
.ebgoods-maingoods-wrap .maingoods-item-box-img-in {position:relative;overflow:hidden}
.ebgoods-maingoods-wrap .img-box {position:relative;text-align:center;line-height:358px}
.ebgoods-maingoods-wrap .img-box img {display:block;max-width:100%;height:auto}
.ebgoods-maingoods-wrap .img-box .no-image {color:#858585;font-size:.8125rem}
.ebgoods-maingoods-wrap .maingoods-item-box-img-info {display:none;position:absolute;top:0;left:0;width:100%;height:100%;padding:20px;background:#fff;text-align:center}
.ebgoods-maingoods-wrap .maingoods-item-box-in:hover .maingoods-item-box-img-info {display:block}
.ebgoods-maingoods-wrap .maingoods-item-box-img-info .txt-cont {position:relative;overflow:hidden;font-size:.875rem;color:#959595;height:42px;margin-bottom:20px}
.ebgoods-maingoods-wrap .maingoods-item-box-img-info .info-price {font-size:1rem;font-weight:700;color:#cc2300;margin-top:20px}
.ebgoods-maingoods-wrap .maingoods-item-box-img-info .line-through {font-size:.875rem;color:#959595;text-decoration:line-through;margin-left:7px;font-weight:normal}
.ebgoods-maingoods-wrap .maingoods-item-box-img-info .btn-red {width:203px;background-color:#cc2300}
.ebgoods-maingoods-wrap .maingoods-item-box-img-info .btn-red:hover {background-color:#e52700}
.ebgoods-maingoods-wrap .maingoods-item-box-img-info .btn-dark {width:100px}
.ebgoods-maingoods-wrap .maingoods-item-box-caption {position:relative;display:block;z-index:1;line-height:20px;margin-bottom:0;padding:15px}
.ebgoods-maingoods-wrap .maingoods-item-box-caption h5 {position:relative;overflow:hidden;font-weight:700;color:#000;margin:0;line-height:1.5;font-size:1rem;height:48px;transition:all 0.2s ease-in-out;text-align:center}
.ebgoods-maingoods-wrap .maingoods-item-box-in:hover .maingoods-item-box-caption h5 {color:#cc2300}
@media (max-width:1199px) {
    .ebgoods-maingoods-wrap .maingoods-item-box-img-info .btn-red {width:160px}
    .ebgoods-maingoods-wrap .maingoods-item-box-img-info .btn-dark {margin-bottom:5px}
}
@media (max-width:991px) {
    .ebgoods-maingoods-wrap .maingoods-item-box {width:50%}
    .ebgoods-maingoods-wrap .maingoods-item-box-img-info .btn-red {width:203px}
    .ebgoods-maingoods-wrap .maingoods-item-box-img-info .btn-dark {margin-bottom:0}
}
@media (max-width:767px) {
    .ebgoods-maingoods-wrap .maingoods-item-box {width:50%}
    .ebgoods-maingoods-wrap .maingoods-item-box-img-info .btn-red {width:120px}
    .ebgoods-maingoods-wrap .maingoods-item-box-caption {padding:15px 10px}
    .ebgoods-maingoods-wrap .maingoods-item-box-caption h5 {font-size:.875rem;height:42px}
}
@media (max-width:540px) {
    .ebgoods-maingoods-wrap {margin-left:-5px;margin-right:-5px}
    .ebgoods-maingoods-wrap .maingoods-item-box {width:50%;padding:5px}
}
/* Mobile Demo Modal */
.mobile-view-modal {width:420px}
.mobile-view-modal .modal-body iframe {border:1px solid #a5a5a5}
.modal-backdrop {opacity:0.8 !important}
</style>

<?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
<div class="position-relative <?php if ($es_master['es_state'] == '2') { ?>eb-hidden-space<?php } ?>">
    <div class="adm-edit-btn btn-edit-mode" style="top:-25px;text-align:center">
        <div class="ae-btn-group">
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=ebgoods_form&amp;thema=<?php echo $theme; ?>&amp;eg_code=<?php echo $eg_master['eg_code']; ?>&amp;w=u&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="ae-btn-l"><i class="far fa-edit"></i> EB상품 마스터 설정</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=ebgoods_form&amp;thema=<?php echo $theme; ?>&amp;eg_code=<?php echo $eg_master['eg_code']; ?>&amp;w=u" target="_blank" class="ae-btn-r" title="새창 열기">
                <i class="fas fa-external-link-alt"></i>
            </a>
        </div>
    </div>
</div>
<?php } ?>

<?php if (isset($eg_master) && $eg_master['eg_state'] == '1') { // 보이기 상태에서만 출력 ?>
<div class="ebgoods-maingoods-headline">
    <h3>
        <?php if ($eg_master['eg_link']) { ?>
        <a href="<?php echo $eg_master['eg_link']; ?>" target="<?php echo $eg_master['eg_target']; ?>"><strong><?php echo $eg_master['eg_subject']; ?></strong></a>
        <?php } else { ?>
        <strong><?php echo $eg_master['eg_subject']; ?></strong>
        <?php } ?>
    </h3>
</div>

<?php if (is_array($eg_item)) { foreach ($eg_item as $k => $eb_goods) { ?>
<div class="ebgoods-maingoods-wrap">
    <?php if (count($eb_goods['list']) > 0) { foreach ($eb_goods['list'] as $i => $data) { ?>
    <div class="maingoods-item-box">
        <div class="maingoods-item-box-in">
            <div class="maingoods-item-box-img">
                <div class="maingoods-item-box-img-in">
                    <?php if ($eb_goods['gi_view_img'] == 'y') { ?>
                    <a href="<?php echo $data['href']; ?>">
                        <div class="img-box">
                            <?php if($data['it_image']) { ?>
                            <?php echo $data['it_image']; ?>
                            <?php } else { ?>
                            <span class="no-image">No Image</span>
                            <?php } ?>
                        </div>
                    </a>
                    <?php } ?>
                    <div class="maingoods-item-box-img-info">
                        <p class="f-s-16r m-b-10"><strong>상품분류 : <?php echo $data['ca_name']; ?></strong></p>
                        <?php if ($eb_goods['gi_view_it_basic'] == 'y') { ?>
                        <p class="txt-cont hidden-xs"><?php echo $data['it_basic']?></p>
                        <?php } ?>
                        <a href="<?php echo $data['href']; ?>" class="btn-e btn-e-lg btn-red"><i class="fa fa-plus"></i> 상세보기</a>
                        <div class="m-t-10 hidden-xs">
                            <a href="<?php echo $data['demourl']; ?>&amp;device=pc" target="_blank" class="btn-e btn-dark">PC데모보기</a>
                            <a href="<?php echo $data['demourl']; ?>&amp;device=mobile" class="mobile-demo-view btn-e btn-dark">모바일데모보기</a>
                        </div>
                        <?php if ($eb_goods['gi_view_it_price'] == 'y' || $eb_goods['gi_view_it_cust_price'] == 'y') { ?>
                        <p class="info-price">
                            <?php if ($eb_goods['gi_view_it_price'] == 'y') { ?>
                            <span class="title-price">₩ <?php echo number_format($data['it_price']); ?></span>
                            <?php } ?>
                            <?php if ($eb_goods['gi_view_it_cust_price'] == 'y' && $data['it_cust_price']) { ?>
                            <span class="title-price line-through hidden-xs">₩ <?php echo number_format($data['it_cust_price']); ?></span>
                            <?php } ?>
                        </p>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="maingoods-item-box-caption">
                <a href="<?php echo $data['href']; ?>">
                    <h5><?php echo $data['it_name']?></h5>
                </a>
            </div>

            <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
            <div class="adm-edit-btn btn-edit-mode" style="bottom:0">
                <div class="ae-btn-group">
                    <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shop&pid=itemform&w=u&it_id=<?php echo $data['it_id']; ?>&wmode=1" onclick="eb_admset_modal(this.href); return false;" class="ae-btn-l ae-item-btn"><i class="far fa-edit"></i> 개별상품 설정</a>
                    <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shop&pid=itemform&w=u&it_id=<?php echo $data['it_id']; ?>" target="_blank" class="ae-btn-r" title="새창 열기">
                        <i class="fas fa-external-link-alt"></i>
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php }} ?>

    <?php if (count($eb_goods['list']) == 0) { ?>
    <p class="text-center f-s-13 color-gray m-t-10"><i class="fas fa-exclamation-circle"></i> 등록된 상품이 없습니다.</p>
    <?php } ?>
</div>
<?php }} ?>
<?php } ?>