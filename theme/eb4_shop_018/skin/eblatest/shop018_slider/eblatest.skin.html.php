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
.slider-latest-<?php echo $el_code; ?> {
    position: relative;
}
/* master title */
.slider-latest-<?php echo $el_code; ?> .latest-title {
    position: relative;
    margin-bottom: 30px;
    text-align: center;
}
.slider-latest-<?php echo $el_code; ?> .latest-title h4 {
    font-family: var(--en-font);
    font-size: var(--h1-font-size);
    font-weight: 600;
}
/* 내용 */
.slider-latest-<?php echo $el_code; ?> .gallery-ebslider {
    position: relative;
}
.slider-latest-<?php echo $el_code; ?> .gallery-ebslider .item-inner {
    padding: 0 15px;
}
.slider-latest-<?php echo $el_code; ?> .gallery-ebslider .item-content {
    position: relative;
    height: 100%;
    padding: 30px;
    background-color: var(--body-color);
    border: 1px solid var(--border-color-light);
    transition: .3s;
}
.slider-latest-<?php echo $el_code; ?> .gallery-ebslider .item-inner:hover .item-content {
    border-color: var(--border-color);
}
.slider-latest-<?php echo $el_code; ?> .gallery-ebslider .item-content h6 {
    margin: 0 0 5px;
    font-size: var(--smaller-font-size);
    color: var(--primary-color);
}
.slider-latest-<?php echo $el_code; ?> .gallery-ebslider .item-content h5 {
    overflow: hidden;
    margin: 0 0 20px;
    line-height: 1.4em;
    font-size: var(--normal-font-size);
    color: var(--text-color);
    word-break: keep-all;
}
.slider-latest-<?php echo $el_code; ?> .gallery-ebslider .item-content .latest-date {
    margin-bottom: 5px;
    font-size: var(--smaller-font-size);
    color: var(--text-color-light);
}
.slider-latest-<?php echo $el_code; ?> .gallery-ebslider .item-content p {
    font-size: var(--small-font-size);
    color: var(--text-color-light);
}
/* 컨트롤 좌우 */

.slider-latest-<?php echo $el_code; ?> .slick-next,
.slider-latest-<?php echo $el_code; ?> .slick-prev {
    opacity: 0;
    width: 40px;
    height: 40px;
    background: rgba(0,0,0,.6);
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    -ms-transition: all 0.3s linear;
    transition: all 0.3s linear;
    border-radius: 50% !important;
}
.slider-latest-<?php echo $el_code; ?> .slick-next:hover,
.slider-latest-<?php echo $el_code; ?> .slick-prev:hover {
    background: rgba(0,0,0,.8);
}
.slider-latest-<?php echo $el_code; ?> .slick-next {
    right: 0;
    z-index: 1
}
.slider-latest-<?php echo $el_code; ?> .slick-prev {
    left: 0;
    z-index: 1
}
.slider-latest-<?php echo $el_code; ?>:hover .slick-next {
    right: 1.2rem;
    opacity: 1;
}
.slider-latest-<?php echo $el_code; ?>:hover .slick-prev {
    left: 1.2rem;
    opacity: 1;
}
.slider-latest-<?php echo $el_code; ?> .slick-next:before,
.slider-latest-<?php echo $el_code; ?> .slick-prev:before {
    content: "";
    display: block;
    position: absolute;
    top: 50%;
    width: 14px;
    height: 14px;
    margin-top: -7px;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
    transition: all 0.3s linear;
}
.slider-latest-<?php echo $el_code; ?> .slick-next:before {
    right: 15px;
    border-right: 1px solid #eee;
    border-top: 1px solid #eee
}
.slider-latest-<?php echo $el_code; ?> .slick-prev:before {
    left: 15px;
    border-left: 1px solid #eee;
    border-bottom: 1px solid #eee
}


@media (min-width:992px){
}
</style>

<div class="eblatest slider-latest-<?php echo $el_code; ?>">
    <?php foreach ($el_item as $k => $eb_latest) { ?>
    <div class="latest-title" data-aos="fade-up"><h4 class="en-font"><?php echo $eb_latest['li_title']; ?></h4></div>

    <div class="gallery-ebslider" data-aos="fade-up" data-aos-delay="300">
        <?php if (count((array)$eb_latest['list']) > 0) { foreach ($eb_latest['list'] as $data) { ?>
        <div class="item">
            <div class="item-inner">
	            <?php if ($data['wr_image']) { ?>
	            <div class="gallery-image">
	                <a href="<?php echo $data['href']; ?>">
	                    <img class="img-responsive" src="<?php echo $data['wr_image']; ?>">
	                </a>
	            </div>
	            <?php } ?>
                <div class="item-content">
                    <?php if ($eb_latest['li_bo_subject'] == 'y') { ?>
                    <h6><strong><?php echo $data['bo_subject']; ?></strong></h6>
                    <?php } ?>
                    <h5><a href="<?php echo $data['href']; ?>"><?php echo $data['wr_subject']; ?></a></h5>
                    <?php if ($eb_latest['li_use_date'] == 'y') { ?>
                    <div class="latest-date"><?php echo $eb_latest['li_date_type'] == '1' ? $eb->date_time("{$eb_latest['li_date_kind']}",$data['wr_datetime']):  $eb->date_format("{$eb_latest['li_date_kind']}",$data['wr_datetime']); ?></div>
                    <?php } ?>
                    <?php if ($eb_latest['li_content'] == 'y') { ?>
                    <p><?php echo $data['wr_content']; ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php }} else { ?>
        <div class="gallery-item"><p class="text-center color-grey font-size-13 margin-top-30"><i class="fa fa-exclamation-circle"></i> 최신글이 없습니다.</p>
        </div>
        <?php } ?>
    </div>

    <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
    <div class="adm-edit-btn btn-edit-mode" style="bottom:0">
        <div class="btn-group">
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=eblatest_itemform&amp;thema=<?php echo $theme; ?>&amp;el_code=<?php echo $el_master['el_code']; ?>&amp;li_no=<?php echo $eb_latest['li_no']; ?>&amp;w=u&amp;iw=u&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="ae-item-btn"><i class="far fa-edit"></i> EB최신글 아이템 설정</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=eblatest_itemform&amp;thema=<?php echo $theme; ?>&amp;el_code=<?php echo $el_master['el_code']; ?>&amp;li_no=<?php echo $eb_latest['li_no']; ?>&amp;w=u&amp;iw=u&amp" target="_blank" class="ae-btn-r" title="새창 열기">
                <i class="fas fa-external-link-alt"></i>
            </a>
        </div>
    </div>
    <?php } ?>

    <div class="btn-more text-center m-t-30" data-aos="fade-up">
        <?php if ($eb_latest['li_link']) { ?>
        <a href="<?php echo $eb_latest['li_link']; ?>">More View</a>
        <?php } ?>
    </div>
    <?php } ?>

    <?php if ($el_default) { ?>
    <p class="text-center color-dark font-size-13 margin-top-30">최신글이 없습니다.</p>
    <?php } ?>
</div>

<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/slick/slick.min.js"></script>
<script>
$(window).load(function(){
    $('.slider-latest-<?php echo $el_code; ?> .gallery-ebslider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 8000,//8초
        arrows: true,
        dots: false,
        pauseOnHover: false,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    arrows: false
                }
            }
        ]
    });
});
</script>
<?php } ?>