<?php
if (!defined('_EYOOM_')) exit;

add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/plugins/slick/slick.min.css" type="text/css" media="screen">',0);
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
.list-slider-<?php echo $el_code; ?> {position:relative;margin-bottom:20px}
.list-slider-<?php echo $el_code; ?> .list-slider-wrap {
    position:relative;
}
/* 타이틀 */
.list-slider-<?php echo $el_code; ?> h4 {
    position: absolute;
    top: 50%;
    left: 15px;
    z-index: 1;
    transform:translateY(-50%);
}
.list-slider-<?php echo $el_code; ?> h4 a {
    font-size:var(--h3-font-size);
    font-weight: 300;
    color: var(--text-color);
    transition: .3s;
}
.list-slider-<?php echo $el_code; ?> h4 a:hover {
    color: var(--primary-color-light);
}
/* 아이템 */
.list-slider-<?php echo $el_code; ?> .list-slider-wrap .slide-inner {position: relative;padding: 20px 100px 15px 120px;border-top:1px solid var(--border-color-light);border-bottom:1px solid var(--border-color-light);}
.list-slider-<?php echo $el_code; ?> .list-slider-wrap .slide-inner .slide-item {}
.list-slider-<?php echo $el_code; ?> .list-slider-wrap .slide-inner .slide-item h4 {
    margin:0 0 20px;
}
.list-slider-<?php echo $el_code; ?> .list-slider-wrap .slide-inner .slide-item h5 a {
    display: block;
    opacity: .85;
    text-overflow: ellipsis;
    white-space: nowrap;
    word-wrap: normal;
    overflow: hidden;
    font-size:var(--small-font-size);
    color: var(--text-color);
    transition: .3s;
}
.list-slider-<?php echo $el_code; ?> .list-slider-wrap .slide-inner .slide-item h5 a:hover {
    opacity: 1;
}

/* 컨트롤 */
.list-slider-<?php echo $el_code; ?> .list-slider-wrap .slick-next, 
.list-slider-<?php echo $el_code; ?> .list-slider-wrap .slick-prev {
    top: 29px;
    width:20px;
    height:30px;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -o-transition: all .3s ease;
    -ms-transition: all .3s ease;
    transition: all .3s ease;
}
.list-slider-<?php echo $el_code; ?> .list-slider-wrap .slick-next {
    right:15px;
    z-index:1
}
.list-slider-<?php echo $el_code; ?> .list-slider-wrap .slick-prev {
    left:inherit;
    right:40px;
    z-index:1
}
.list-slider-<?php echo $el_code; ?> .list-slider-wrap .slick-next:before, 
.list-slider-<?php echo $el_code; ?> .list-slider-wrap .slick-prev:before {
    content:"";
    display:block;
    position:absolute;
    top:50%;
    width:15px;
    height:15px;
    margin-top:-7px;
    -webkit-transform:rotate(45deg);
    -moz-transform:rotate(45deg);
    -o-transform:rotate(45deg);
    -ms-transform:rotate(45deg);
    transform:rotate(45deg);
}
.list-slider-<?php echo $el_code; ?> .list-slider-wrap .slick-next:before {
    right:7px;
    border-right:1px solid var(--text-color-light);
    border-top:1px solid var(--text-color-light);
}
.list-slider-<?php echo $el_code; ?> .list-slider-wrap .slick-prev:before {
    left:inherit;
    right:-7px;
    border-left:1px solid var(--text-color-light);
    border-bottom:1px solid var(--text-color-light);
}
@media (max-width:767px){
	.list-slider-1634883005 .list-slider-wrap .slide-inner {padding:20px 60px 15px 90px;}
}
</style>
<div class="eblatest list-slider-<?php echo $el_code; ?>">
	<div class="list-slider-wrap">
        <?php foreach ($el_item as $k => $eb_latest) { ?>
        <h4 class="en-font"><a href="<?php echo $eb_latest['li_link']; ?>"><?php echo $eb_latest['li_title']; ?></a></h4>

        <div class="slide-inner" role="listbox">
			<?php if (count((array)$eb_latest['list']) > 0) { foreach ($eb_latest['list'] as $data) { ?>
			<div class="slide-item">
				<h5><a href="<?php echo $data['href']; ?>"><?php echo $data['wr_subject']; ?></a></h5>
				<?php if ($eb_latest['li_content'] == 'y') { ?>
                <p><?php echo $data['wr_content']; ?></p>
                <?php } ?>
			</div>
            <?php }} else { ?>
            <div class="slide-item"><p class="text-center color-grey font-size-13 margin-top-30"><i class="fa fa-exclamation-circle"></i> 최신글이 없습니다.</p>
            </div>
            <?php } ?>
		</div>
        <?php } ?>
    </div>

    <?php if ($el_default) { ?>
    <p class="text-center color-dark font-size-13 margin-top-30">최신글이 없습니다.</p>
    <?php } ?>
</div>

<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/slick/slick.min.js"></script>
<script>
$(document).ready(function(){
   //slick 슬라이더 설정
	$('.list-slider-<?php echo $el_code; ?> .slide-inner').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 10000,//10초
		arrows: true,
		dots: false,
		pauseOnHover: false,
	});
});
</script>
<?php } ?>