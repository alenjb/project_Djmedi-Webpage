<?php
if (!defined('_EYOOM_')) exit;
?>
<?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
<div class="position-relative <?php if ($el_master['el_state'] == '2') { ?>eb-hidden-space<?php } ?>">
    <div class="adm-edit-btn btn-edit-mode" style="top:10px;text-align:center">
        <div class="btn-group">
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=eblatest_form&amp;thema=<?php echo $theme; ?>&amp;el_code=<?php echo $el_master['el_code']; ?>&amp;w=u&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="ae-btn-l"><i class="far fa-edit"></i> EB최신글 마스터 설정</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=eblatest_form&amp;thema=<?php echo $theme; ?>&amp;el_code=<?php echo $el_master['el_code']; ?>&amp;w=u" target="_blank" class="ae-btn-r" title="새창 열기">
                <i class="fas fa-external-link-alt"></i>
            </a>
        </div>
    </div>
</div>
<?php } ?>

<?php if (isset($el_master) && $el_master['el_state'] == '1') { // 보이기 상태에서만 출력 ? ?>
<style>
.latest-basic {position:relative}
.latest-basic .basic-list {position:relative}
/* 타이틀 */
.latest-basic h4 {position:relative;margin:0 0 10px;line-height:25px}
.latest-basic h4 a {font-size:var(--normal-font-size);font-weight:700;color:#eee;transition:.3s}
.latest-basic h4 a:hover {color:#1b1b1b}
/* 아이템 */
.latest-basic .basic-list .basic-inner .basic-item {margin-top:5px}
.latest-basic .basic-list .basic-inner .basic-item.item-0 {margin-top:0}
.latest-basic .basic-list .basic-inner .basic-item h5 {margin:0;}
.latest-basic .basic-list .basic-inner .basic-item h5 a {position:relative;display:block;line-height:20px;font-size:var(--small-font-size);color:#eee}
.latest-basic .basic-list .basic-inner .basic-item h5 a:hover {text-decoration:underline}
@media (max-width:991px){
	.latest-basic {padding-right:0}
}
</style>
<div class="latest-basic waypoints-left delay-10">
	<div class="basic-list">
        <?php if (is_array($el_item)) { foreach ($el_item as $k => $eb_latest) { ?>
        <h4><a href="<?php echo $eb_latest['li_link']; ?>"><?php echo $eb_latest['li_title']; ?></a></h4>

        <div class="basic-inner" role="listbox">
			<?php if (count((array)$eb_latest['list']) > 0) { foreach ($eb_latest['list'] as $data) { ?>
			<div class="basic-item item-<?php echo $k++ ?>">
				<h5>
					<a href="<?php echo $data['href']; ?>" class="ellipsis">
						&middot; <?php echo $data['wr_subject']; ?>
					</a>
				</h5>
			</div>
            <?php }} else { ?>
            <div class="basic-item"><p class="text-center color-grey font-size-13 margin-top-30"><i class="fa fa-exclamation-circle"></i> 최신글이 없습니다.</p>
            </div>
            <?php } ?>
		</div>
        <?php }} ?>
    </div>

    <?php if ($el_default) { ?>
    <p class="text-center color-dark font-size-13 margin-top-30">최신글이 없습니다.</p>
    <?php } ?>
</div>

<?php } ?>