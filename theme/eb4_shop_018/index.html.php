<?php
if (!defined('_EYOOM_')) exit;
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
    $('.page-loader').fadeOut(800);
});
</script>

<section class="section">
	<?php /* EB슬라이더 - shpo017 main slider */ ?>
	<?php echo eb_slider('1652679019'); ?>
</section>

<section class="section section-m-tb">
    <div class="container">
        <?php /* EB콘텐츠 - shop018 three banner */ ?>
        <?php echo eb_contents('1652747362'); ?>
    </div>
</section>

<section class="section">
    <?php /* EB슬라이더 - shop018 center slider */ ?>
    <?php echo eb_slider('1652763162'); ?>
</section>

<section class="section section-m-tb">
    <div class="container">
        <?php /* EB최신글 - shop018 slider */ ?>
        <?php echo eb_latest('1652766957'); ?>
    </div>
</section>

<section class="section">
    <?php /* EB콘텐츠 - shop018 main contact */ ?>
	<?php echo eb_contents('1652767476'); ?>
</section>