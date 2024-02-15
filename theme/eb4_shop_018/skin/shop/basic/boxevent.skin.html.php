<?php
/**
 * core file : /eyoom/core/shop/boxevent.skin.php
 */
if (!defined('_EYOOM_')) exit;
?>

<?php if ($ev_count > 0) { ?>
<style>
.shop-boxevent-wrap {position:relative}
.shop-boxevent:after {content:"";display:block;clear:both}
.shop-boxevent .boxevent-box {margin-top:30px}
.shop-boxevent .boxevent-box.box-1 {margin-top:0}
.shop-boxevent .boxevent-box:after {display:block;visibility:hidden;clear:both;content:""}
/* 타이틀 */
.shop-boxevent .boxevent-box-title {float:left;width:35%}
.shop-boxevent .boxevent-box-title a {display:block;position:relative}
.shop-boxevent .boxevent-box-title a span {position:absolute;top:50%;left:0;transform:translateY(-50%);z-index:1;width:100%;font-size:22px;font-weight:300;text-align:center;color:#fff}
.shop-boxevent .boxevent-box-title .box-title-txt {padding:10px;font-size:20px;background:#f8f8f8}
/* 아이템 */
.shop-boxevent .boxevent-item-wrap {position:relative;float:right;width:62%}
.shop-boxevent .boxevent-item {margin-left:-10px;margin-right:-10px}
.shop-boxevent .boxevent-item:after {display:block;visibility:hidden;clear:both;content:""}
.shop-boxevent .boxevent-item-box {float:left;width:25%;padding:0 10px 10px}
.shop-boxevent .boxevent-item-box-in {position:relative}
.shop-boxevent .boxevent-item-box-in .boxevent-item-img {position:relative;overflow:hidden;margin-bottom:10px;border:1px solid #eee;-webkit-transition:all 0.3s ease-in-out;-moz-transition:all 0.3s ease-in-out;-o-transition:all 0.3s ease-in-out;transition:all 0.3s ease-in-out}
.shop-boxevent .boxevent-item-box-in .boxevent-item-img:hover {border-color:var(--primary-color);}
.shop-boxevent .boxevent-item-box-in .boxevent-item-img img {display:block;width:100% \9;max-width:100%;height:auto}
.shop-boxevent .boxevent-item-box-in .boxevent-item-desc h5 {position:relative;overflow:hidden;height:20px;margin:0;font-size:13px}
.shop-boxevent .boxevent-item-box-in .boxevent-item-desc span {font-size:12px}
.shop-boxevent .boxevent-item-box-in .boxevent-item-desc span small {text-decoration:line-through;color:#959595}
.shop-boxevent .boxevent-item-box-in a:hover h5 {text-decoration:underline;color:#293844}
.shop-boxevent .boxevent-no-item {text-align:center;height:250px;line-height:250px;color:#959595}
@media (max-width:1199px) {
	.shop-boxevent .boxevent-box-title {width:37%}
	.shop-boxevent .boxevent-item-wrap {width:61%}
	.shop-boxevent .boxevent-item {margin-left:-5px;margin-right:-5px}
	.shop-boxevent .boxevent-item-box {padding:0 5px 5px}
}
@media (max-width:991px) {
	.shop-boxevent .boxevent-box-title, .shop-boxevent .boxevent-item-wrap {float:none;width:100%}
	.shop-boxevent .boxevent-box-title {margin-bottom:5px}
	.shop-boxevent .boxevent-item {margin-left:-2px;margin-right:-2px}
	.shop-boxevent .boxevent-item-box {padding:0 2px 5px}
}
@media (max-width:767px) {
	.shop-boxevent .boxevent-item-box {width:50%}
}
</style>

<section id="sev" class="shop-boxevent-wrap">
    <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
    <div class="adm-edit-btn btn-edit-mode" style="top:-25px">
        <div class="btn-group">
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shopetc&amp;pid=itemevent&amp;thema=<?php echo $theme; ?>&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="ae-btn-l"><i class="far fa-edit"></i> 이벤트 설정</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shopetc&amp;pid=itemevent&amp;thema=<?php echo $theme; ?>" target="_blank" class="ae-btn-r" title="새창 열기">
                <i class="fas fa-external-link-alt"></i>
            </a>
        </div>
    </div>
    <?php } ?>
    <div class="shop-boxevent">
        <?php for ($i=0; $i<$ev_count; $i++) { ?>
        <div class="boxevent-box box-<?php echo $i + 1 ?>">
            <div class="boxevent-box-title">
                <a href="<?php echo $ev_list[$i]['href']; ?>">
                <?php if (file_exists($ev_list[$i]['event_img'])) { // 이벤트 이미지가 있다면 이미지 출력 ?>
                    <img src="<?php echo G5_DATA_URL; ?>/event/<?php echo $ev_list[$i]['ev_id']; ?>_m" class="img-responsive" alt="<?php echo $ev_list[$i]['ev_subject']; ?>">
                <?php } else { ?>
                    <div class="box-title-txt">
                        <?php if ($ev_list[$i]['ev_subject_strong']) { ?>
                        <strong><?php echo $ev_list[$i]['ev_subject']; ?></strong>
                        <?php } else { ?>
                        <?php echo $ev_list[$i]['ev_subject']; ?>
                        <?php } ?>
                    </div>
                <?php } ?>
                </a>
                <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
                <div class="adm-edit-btn btn-edit-mode" style="bottom:0">
                    <div class="btn-group">
                        <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shopetc&pid=itemeventform&thema=<?php echo $theme; ?>&ev_id=<?php echo $ev_list[$i]['ev_id']; ?>&w=u&iw=u&wmode=1" onclick="eb_admset_modal(this.href); return false;" class="ae-btn-l ae-item-btn"><i class="far fa-edit"></i> 개별이벤트 설정</a>
                        <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shopetc&pid=itemeventform&thema=<?php echo $theme; ?>&ev_id=<?php echo $ev_list[$i]['ev_id']; ?>&w=u&iw=u" target="_blank" class="ae-btn-r" title="새창 열기">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                        <button type="button" class="ae-btn-info" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true" data-bs-content="
                            <span class='f-s-13r'>
                            <strong class='text-crimson'>배너이미지 권장 사이즈</strong><br>
                            <div class='margin-hr-10'></div>
                            800 x 430 픽셀 권장
                            </span>
                        "><i class="fas fa-question-circle"></i></button>
                    </div>
                </div>
                <?php } ?>
            </div>

            <div class="boxevent-item-wrap">
                <?php if (is_array($ev_list[$i]['ev_prd'])) { ?>
                <div class="boxevent-item">
                    <?php foreach ($ev_list[$i]['ev_prd'] as $k => $ev_prd) { ?>
                    <div class="boxevent-item-box">
                        <div class="boxevent-item-box-in">
                            <div class="boxevent-item-img">
                                <?php echo get_it_image($ev_prd['it_id'], 400, 0, get_text($ev_prd['it_name'])); ?>
                            </div>
                            <div class="boxevent-item-desc">
                                <a href="<?php echo $ev_prd['item_href']; ?>" class="ev_prd_tit">
                                    <h5><?php echo get_text(cut_str($ev_prd['it_name'], 30)); ?></h5>
                                </a>
                                <span><?php echo $ev_prd['it_price']; ?> <small><?php echo $ev_prd['it_cust_price']; ?>원</small></span>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>

                <?php if (count((array)$ev_list[$i]['ev_prd']) == 0) { ?>
                <div class="boxevent-no-item">
                    <i class="fas fa-exclamation-circle"></i> 등록된 상품이 없습니다.
                </div>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
<?php } ?>