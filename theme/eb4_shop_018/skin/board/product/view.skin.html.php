<?php
/**
 * skin file : /theme/THEME_NAME/skin/board/product/view.skin.html.php
 */
if (!defined('_EYOOM_')) exit;

add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/plugins/sweetalert2/sweetalert2.min.css" type="text/css" media="screen">',0);
add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/plugins/magnific-popup/magnific-popup.min.css" type="text/css" media="screen">',0);
add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/plugins/prism/prism.min.css" type="text/css" media="screen">',0);
add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/plugins/fotorama/fotorama.css" type="text/css" media="screen">',0);
?>

<style>
.board-view {font-size:.9375rem}
.board-view .board-setup {position:relative;border:1px solid #d5d5d5;height:38px;margin-bottom:20px}
.board-view .board-setup .select {position:absolute;top:-1px;left:-1px;display:inline-block;width:200px}
.board-view .board-setup-btn-box {position:absolute;top:-1px;right:-1px;display:inline-block;width:420px}
.board-view .board-setup-btn {float:left;width:25%;height:38px;line-height:38px;color:#fff;text-align:center;font-size:.8125rem}
.board-view .board-setup-btn:nth-child(odd) {background-color:#000}
.board-view .board-setup-btn:nth-child(even) {background-color:#3c3c3e}
.board-view .board-setup-btn:hover {opacity:0.8}
/* 제목과 작성자 작성일 */
.board-view .board-view-subj {margin-bottom: 40px;font-size:1.875rem;text-align:center}
.board-view .board-view-info {margin: 10px 0;text-align:center}
.board-view .board-view-info span {margin: 0 5px}
/* 관리자 버튼(복사,이동등) */
.board-view .board-view-btn-wrap {display:flex;justify-content:space-between;align-items:center;padding-right:6px;}
.board-view .board-view-btn-right ul {display:flex;justify-content:flex-end}
.board-view .board-view-btn-right ul li {margin-left:2px;}
.board-view .board-view-btn {position:relative;float:left;padding:0 15px;height:35px;line-height:35px;margin-right:2px;cursor:pointer;background:#fff;font-size:.8125rem;color:#252525;border:1px solid #eaeaea}
.board-view .board-view-btn:hover {color:#cc2300}
/* 본분 */
.board-view .board-view-atc {min-height:200px}
.board-view .board-view-atc-title {position:absolute;font-size:0;line-height:0;overflow:hidden}
.board-view .board-view-file-conts {position:relative;overflow:hidden;margin:20px 0;}
.board-view .board-view-file-conts #bo_v_img img {display:block;width:100% \9;max-width:100%;height:auto;margin-bottom:10px}
.board-view .board-view-con {position:relative;overflow:hidden;margin-bottom:30px;width:100%;word-break:break-all}
.board-view .board-view-con img {max-width:100%;height:auto}
/* 제품정보 */
.board-view .product-dl dt {padding: 5px 10px;font-size: 1rem;border-bottom: 1px solid #909090;}
.board-view .product-dl dd {padding: 5px 10px;font-size: 0.875rem;}
@media (min-width:768px){
    .board-view .product-dl {padding-top:20px;}
}

/* 하단 이전 다음글, 목록 버튼 */
.view-btm-btn {position:relative}
.view-btm-btn ul {display:flex;justify-content: space-between;}
.view-btm-btn ul li a{display:inline-block;position:relative;padding:10px 30px;color:#909090;border-bottom:1px solid #909090;transition:0.3s;}
.view-btm-btn ul li a:after{content:"";opacity:0;display:block;position:absolute;bottom:-3px;width:6px;height:6px;background-color:#333;border-radius:50%;transition:0.3s;}
.view-btm-btn ul li a:hover {color: #333;border-color: #333;}
.view-btm-btn ul li.view-btm-btn-lft a:hover {padding-left: 20px;padding-right: 40px;}
.view-btm-btn ul li.view-btm-btn-rgt a:hover {padding-left: 40px;padding-right: 20px;}
.view-btm-btn ul li.view-btm-btn-lft a:after {left: 30%;}
.view-btm-btn ul li.view-btm-btn-lft a:hover:after {opacity: 1;left: 0%;}
.view-btm-btn ul li.view-btm-btn-rgt a:after {right: 30%}
.view-btm-btn ul li.view-btm-btn-rgt a:hover:after {opacity: 1;right: 0%}
.view-btm-btn ul li.view-btm-btn-rgt {margin-left: auto;}
.view-btm-btn .view-btm-btn-list {}
.view-btm-btn .view-btm-btn-list a {position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);padding:0 25px;line-height:30px;font-size:0.875rem;color:#fff;background-color:#707070;transition:.3s;}
.view-btm-btn .view-btm-btn-list a:hover {background-color:#333;}

.board-view .map-content-wrap {width:100%;height:350px}
.board-view .map-content-wrap > div {width:100%;height:350px}
.board-view .board-view-tag {position:relative;overflow:hidden;background:#fafafa;border:1px solid #d5d5d5;padding:10px;margin-top:20px}
.board-view .board-view-tag span {display:inline-block;padding:2px 8px;line-height:1;margin:2px;background:#e5e5e5;border-radius:2px !important}
.board-view .board-view-tag a:hover span {background:#757575;color:#fff}
.board-view .board-view-tag .fa-tags {width:22px;height:16px;line-height:16px;text-align:center;color:#353535;margin-right:5px;box-sizing:content-box}
.board-view pre {border-radius:0}
.board-view .caption-overflow span {left:0;right:0}
.draggable {display:block;width:100% \9;max-width:100%;height:auto;margin:0 auto}
button.mfp-close {position:fixed;color:#fff !important}
.mfp-figure .mfp-close {position:absolute}
@media (max-width:576px) {
    .board-view .board-view-info .status-label {position:relative;top:inherit;right:inherit;margin-top:10px}
    .board-view .board-view-btn {padding:0 10px}
}
</style>
<?php if ($wmode) { ?>
<style>
.board-view {width:100%;overflow:hidden}
</style>
<?php } ?>

<article class="board-view">
    <?php if ($is_admin && !G5_IS_MOBILE && !$wmode) { ?>
    <div class="board-setup btn-edit-mode hidden-xs hidden-sm">
        <span class="eyoom-form">
            <label class="select">
                <select name="set_bo_skin" class="set_bo_skin">
                    <option value="">::스킨선택::</option>
                    <?php foreach ($bo_skin as $skin) { ?>
                    <option value="<?php echo $skin; ?>" <?php echo $skin == $eyoom_board['bo_skin'] ? 'selected': ''; ?>><?php echo $skin; ?></option>
                    <?php }?>
                </select><i></i>
            </label>
        </span>
        <span class="board-setup-btn-box">
            <?php if( $config['cf_eyoom_admin_theme'] != 'basic' ) { ?>
            <a href="<?php echo $bbs->board_config_url('copy'); ?>"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="far fa-clone"></i> 복제하기</a>
            <a href="<?php echo $bbs->board_config_url('basic'); ?>"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="fas fa-list-alt"></i> 기본설정</a>
            <a href="<?php echo $bbs->board_config_url('addon'); ?>"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="far fa-list-alt"></i> <?php echo $eyoom_board['cf_eyoom_admin_theme'] == 'basic' ? '추가기능': '확장기능'; ?></a>
            <a href="<?php echo $bbs->board_config_url('extend'); ?>"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="far fa-plus-square"></i> 확장필드 (<?php echo number_format($board['bo_ex_cnt']); ?>)</a>
            <?php } else { ?>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=board&amp;pid=board_copy&amp;bo_table=<?php echo $bo_table; ?>&amp;wmode=1"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="far fa-clone"></i> 복제하기</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=board&amp;pid=board_form&amp;w=u&amp;bo_table=<?php echo $bo_table; ?>&amp;wmode=1"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="fas fa-list-alt"></i> 기본설정</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=board_form&amp;w=u&amp;bo_table=<?php echo $bo_table; ?>&amp;wmode=1"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="far fa-list-alt"></i> 추가기능</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=board&amp;pid=board_extend&amp;w=u&amp;bo_table=<?php echo $bo_table; ?>&amp;wmode=1"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="far fa-plus-square"></i> 확장필드 (<?php echo number_format($board['bo_ex_cnt']); ?>)</a>
            <?php } ?>
        </span>
    </div>
    <?php } ?>

    <h3 class="board-view-subj">
        <?php if ($category_name) { ?>
        <span class="text-gray">[<?php echo $view['ca_name'] ?>]</span>
        <?php } ?>
        <strong><?php echo cut_str(get_text($view['wr_subject']), 70); ?></strong>
    </h3>
    
    <?php if ($is_admin == 'super' || $is_auth) {  ?>
    <div class="board-view-info">
<!--         <span class="view-nick">-->
<!--            --><?php //echo eb_nameview($view['mb_id'], $view['wr_name'], $view['wr_email'], $view['wr_homepage']); ?>
<!--        </span>-->
<!--        -->
<!--        --><?php //if ($eyoom_board['bo_sel_date_type'] == '1') { ?>
<!--        <span>--><?php //echo $eb->date_time('Y-m-d H:i',$view['wr_datetime']); ?><!--</span>-->
<!--        --><?php //} else if ($eyoom_board['bo_sel_date_type'] == '2') { ?>
<!--        <span>--><?php //echo $eb->date_format('Y-m-d H:i',$view['wr_datetime']); ?><!--</span>-->
<!--        --><?php //} ?>
    </div>
    <?php } ?>

    <?php if($member['mb_level'] >= $board['bo_write_level']){?>
    <div class="board-view-btn-wrap">
        <div class="board-view-btn-left">
        <?php if ($copy_href) { ?>
            <a href="<?php echo $copy_href; ?>" class="board-view-btn" onclick="board_move(this.href); return false;">복사</a>
        <?php } ?>
        <?php if ($move_href) { ?>
            <a href="<?php echo $move_href; ?>" class="board-view-btn" onclick="board_move(this.href); return false;">이동</a>
        <?php } ?>
        </div>

        <div class="board-view-btn-right">
            <ul class="top-btn-right">
                <?php if ($search_href) { ?>
                <li><a href="<?php echo $search_href; ?>" class="btn-e btn-e-dark" type="button">검색</a></li>
                <?php } ?>
                <?php if ($update_href) { ?>
                <li><a href="<?php echo $update_href; ?>" class="btn-e btn-e-dark" type="button">수정</a></li>
                <?php } ?>
                <?php if ($delete_href) { ?>
                <li><a href="<?php echo $delete_href; ?>" class="btn-e btn-e-dark" type="button" onclick="del(this.href); return false;">삭제</a></li>
                <?php } ?>
                <?php if (!$wmode) { ?>
                    <?php if ($reply_href) { ?>
                <li><a href="<?php echo $reply_href; ?>" class="btn-e btn-e-dark" type="button">답변</a></li>
                    <?php } ?>
                    <?php if ($write_href) { ?>
                <li><a href="<?php echo $write_href; ?>" class="btn-e btn-e-red" type="button">글쓰기</a></li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>
    </div>
    <?php } ?>

    <?php /* 태그 시작 */?>
    <?php if ($eyoom['use_tag'] == 'y' && $eyoom_board['bo_use_tag'] == '1' && count((array)$view_tags) > 0) { ?>
    <div class="board-view-tag">
        <i class="fas fa-tags"></i>
        <?php for ($i=0; $i<count((array)$view_tags); $i++) { ?>
        <a href="<?php echo $view_tags[$i]['href']; ?>"><span><?php echo $view_tags[$i]['tag']; ?></span></a>
        <?php } ?>
        <div class="clearfix"></div>
    </div>
    <?php } ?>
    <?php /* 태그 끝 */?>

    <div class="board-view-atc" id="view_good_nogood">
        <h2 class="board-view-atc-title">본문</h2>
        <div class="board-view-file-conts">
            <div class="row g-lg-2">
                <div class="col-lg-6">
                    <?php /* 제품이미지 슬라이더 */?>
                    <?php if($file_url) { ?>
                    <div class="fotorama" data-nav="thumbs" data-max-width="100%" data-loop="true" data-allowfullscreen="true" data-thumbwidth="120" data-thumbheight="70">
                        <?php for ($i=0; $i<count((array)$file_url); $i++) { ?>
                        <img src="<?php echo $file_url[$i]['thumb']; ?>" data-full="<?php echo $file_url[$i]['source']; ?>" data-caption="<?php echo $file_url[$i]['content']; ?>">
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-lg-6">
                    <?php /* 제품정보 */?>
                    <dl class="product-dl">
                        <dt>한약재명</dt>
                        <dd><?php echo get_text($view['wr_subject']); ?></dd>
                        <br>
                        <dt><?php echo $board['bo_6_subj']; ?></dt>
                        <dd><?php echo $view['wr_6']; ?></dd>
                        <br>
                        <dt><?php echo $board['bo_7_subj']; ?></dt>
                        <dd><?php echo $view['wr_7']; ?></dd>
                        <br>
                        <dt><?php echo $board['bo_8_subj']; ?></dt>
                        <dd><?php echo $view['wr_8']; ?></dd>
                        <br>
                        <dt><?php echo $board['bo_9_subj']; ?></dt>
                        <dd><?php echo $view['wr_9']; ?></dd>
                        <?php /* 관련링크 시작 */?>
                        <?php if (count((array)$view_link) >0) { ?>
                        <?php foreach ($view_link as $k => $vlink) { ?>
                        <dt>PDF</dt>
<!--                        <dt>PDF 주소 --><?php //echo $k++; ?><!--</dt>-->
                        <dd> <a href="<?php echo $vlink['href']; ?>" target="_blank"><b><?php echo get_text($view['wr_subject']) . ".pdf"; ?></b></a></dd>
                        <?php } ?>
                        <?php } ?>
                    </dl>
                </div>
            </div>
        </div>

        <?php /* 본문 내용 시작 */?>
        <br>
        <div id="board_view_con" class="board-view-con view-content"><?php echo $view_content; ?></div>
        <?php echo $config['cf_editor'] == 'tuieditor' ? $bbs->tuieditor_viewer("board_view_con"): ''; ?>
        <?php /* 본문 내용 끝 */?>

        <?php /* 게시물 상단고정 시작 */
            $bo_notice = explode(',', $board['bo_notice']);
            $sql = "select count(*) as cnt from {$g5['eyoom_wrfixed']} where bo_table='{$bo_table}' and wr_id='{$wr_id}' and bf_open='y' ";
            $wr_fixed = sql_fetch($sql);
        ?>
        <?php if ($eyoom_board['bo_use_wrfixed'] == '1' && (isset($member['mb_id']) && $member['mb_id'] == $view['mb_id'] || $is_admin) && !in_array($wr_id, $bo_notice) && $wr_fixed['cnt']==0) { ?>
        <div id="wrfixed" class="text-center m-b-10 margin-bottom-10">
            <a href="javascript:void(0);" id="bo_wrfixed" class="btn-e btn-e-deep-purple btn-e-md">게시물 <?php echo $eyoom_board['bo_wrfixed_date']; ?>일간 상단노출 (<?php echo number_format($eyoom_board['bo_wrfixed_point']); ?>포인트 소모)</a>
        </div>
        <script>
        $(function() {
            $(document).on("click","#bo_wrfixed",function() {
                if (confirm("본 게시물을 상단에 <?php echo $eyoom_board['bo_wrfixed_date']; ?>일간 노출하는데 총 <?php echo number_format($eyoom_board['bo_wrfixed_point']); ?>포인트가 소모됩니다.\n정말로 상단노출을 진행하시겠습니다?")) {
                    var url = "<?php echo EYOOM_CORE_URL; ?>/board/wr_fixed.php";
                    $.post(url, {bo_table: '<?php echo $bo_table; ?>', wr_id: '<?php echo $wr_id; ?>'}, function(data) {
                        alert(data.msg);
                    }, "json");
                } else {
                    return false;
                }
            });
        });
        </script>
        <?php } ?>
        <?php /* 게시물 상단고정 끝 */ ?>

        <?php /* 서명 시작 */?>
        <?php if ($is_signature && $view['mb_id']!='anonymous') { ?>
            <?php include_once(EYOOM_CORE_PATH . '/signature/signature.skin.php'); ?>
        <?php } ?>
        <?php /* 서명 끝 */?>
    </div>

    <?php /* 이전 다음글 버튼 */?>
    <div class="view-btm-btn">
        <?php if (!$wmode) { ?>
        <?php if ($prev_href || $next_href) { ?>
        <ul class="">
            <?php if ($prev_href) { ?>
            <li class="view-btm-btn-lft"><a href="<?php echo $prev_href; ?>" type="button">이전글</a></li>
            <?php } ?>
            <?php if ($next_href) { ?>
            <li class="view-btm-btn-rgt"><a href="<?php echo $next_href; ?>" type="button">다음글</a></li>
            <?php } ?>
        </ul>
        <?php } ?>
        <?php } ?>
        <div class="view-btm-btn-list"><a href="<?php echo $list_href; ?>" type="button">목록</a></div>
    </div>

    <?php /* 소셜버튼 시작 */?>
    <?php if ($board['bo_use_sns']) { ?>
        <?php include_once(EYOOM_CORE_PATH . '/board/sns.skin.php'); ?>
    <?php } ?>
    <?php /* 소셜버튼 끝 */?>

<!--    --><?php //if($member['mb_level'] >= $board['bo_comment_level'] ){?>
<!--    --><?php ///* 댓글 시작 */?>
<!--    --><?php //include_once(G5_BBS_PATH . '/view_comment.php'); ?>
<!--    --><?php ///* 댓글 끝 */?>
<!--    --><?php //} ?>

    <?php /* 링크 버튼 시작 */?>
    <div class="board-view-bot">
        <?php echo $link_buttons; ?>
    </div>
    <?php /* 링크 버튼 끝 */?>
</article>

<script src="<?php echo G5_URL; ?>/js/viewimageresize.js"></script>
<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/clipboard/clipboard.min.js"></script>
<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/magnific-popup/magnific-popup.min.js"></script>
<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/fotorama/fotorama.js"></script>
<?php if ($eyoom_board['bo_use_addon_coding'] == '1') { ?>
<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/prism/prism.min.js"></script>
<?php } ?>
<?php if ($eyoom_board['bo_use_addon_map'] == '1' && ($config['cf_map_google_id'] || $config['cf_map_naver_id'] || $config['cf_map_daum_id'])) { ?>
<?php if ($config['cf_map_google_id']) { ?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $config['cf_map_google_id']; ?>" async defer></script>
<?php } ?>
<?php if ($config['cf_map_naver_id']) { ?>
<script src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=<?php echo $config['cf_map_naver_id']; ?>&submodules=geocoder"></script>
<?php } ?>
<?php if ($config['cf_map_daum_id']) { ?>
<script src="//dapi.kakao.com/v2/maps/sdk.js?appkey=<?php echo $config['cf_map_daum_id']; ?>&libraries=services"></script>
<?php } ?>
<script src="<?php echo EYOOM_THEME_URL; ?>/js/eyoom.map.js"></script>
<script>
$(window).load(function() {
    $(".map-content-wrap").each(function(){
        var id      = $(this).find('div').attr('id');
        var type    = $(this).attr('data-map-type');
        var name    = $(this).attr('data-map-name');
        var x       = $(this).attr('data-map-x');
        var y       = $(this).attr('data-map-y');
        var address = $(this).attr('data-map-address');

        switch(type) {
            case 'google': <?php echo $config['cf_map_google_id'] ? 'loading_google_map(id, x, y, name, address);': ''; ?> break;
            case 'naver': <?php echo $config['cf_map_naver_id'] ? 'loading_naver_map(id, x, y, name, address);': ''; ?> break;
            case 'daum': <?php echo $config['cf_map_daum_id'] ? 'loading_daum_map(id, x, y, name, address);': ''; ?> break;
        }
    });
});
</script>
<?php } ?>
<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(window).load(function() {
    $("a.view_file_download").click(function(e) {
        if (!g5_is_member) {
            Swal.fire({
                title: "알림!",
                text: "다운로드 권한이 없습니다. 로그인 후 이용 가능합니다.",
                confirmButtonColor: "#e53935",
                icon: "error",
                confirmButtonText: "확인"
            });
            return false;
        }

        e.preventDefault();
        var linkURL = $(this).attr("href")+"&js=on";
        view_file_download_link(linkURL);
    });
    function view_file_download_link(linkURL) {
        Swal.fire({
            title: "안내",
            html: "<div class='alert alert-warning text-start'>파일을 다운로드 하면 포인트가 <span class='text-crimson'><?php echo number_format($board['bo_download_point']); ?></span> 점 적용됩니다.<ol class='m-t-10'><li>포인트는 게시물당 한번만 적용되며, 다음에 다시 다운로드 하여도 중복하여 적용되지 않습니다.</li><li>본인이 올린 파일은 다운로드 하여도 포인트는가 변동되지 않습니다.</li></ol></div><span>정말로 다운로드 하시겠습니까?</span>",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#00897b",
            confirmButtonText: "다운로드",
            cancelButtonText: "취소"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = linkURL;
            }
        });
    }
});
<?php } ?>

function close_modal(wr_id) {
    window.parent.closeModal(wr_id);
}

function board_move(href) {
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}

$(window).load(function() {    
    // 이미지 리사이즈
    $(".board-view-atc").viewimageresize();

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx, $good;
        if (this.id == "good_button") {
            $tx = $(".board-view-act-good");
            $good = 'good';
        } else {
            $tx = $(".board-view-act-nogood");
            $good = 'nogood';
        }

        excute_good(this.href, $(this), $tx, $good);
        return false;
    });

    <?php if ($eyoom_board['bo_use_yellow_card'] == '1' && $is_member) { ?>
    // 게시물 신고
    $('.yellowcard-modal .modal-body button').click(function () {
        <?php if ($eb_5['yc_blind'] == 'y') { ?>
        Swal.fire({
            title: "알림!",
            text: "이미 블라인드 처리된 글은 신고 처리하실 수 없습니다.",
            confirmButtonColor: "#e53935",
            icon: "error",
            confirmButtonText: "확인"
        });
        return;
        <?php } ?>

        var cmt_id = $("#modal_cmt_id").val();
        var yc_reason = $(':radio[name="ycard_reason"]:checked').val();
        if (!yc_reason) {
            Swal.fire({
                title: "알림!",
                text: "'신고사유'를 선택해 주세요.",
                confirmButtonColor: "#e53935",
                icon: "warning",
                confirmButtonText: "확인"
            });
            return;
        } else {
            var bo_table = '<?php echo $bo_table; ?>';
            var wr_id = '<?php echo $wr_id; ?>';
            var url = '<?php echo EYOOM_CORE_URL; ?>/board/yellow_card.php';
            $.post(url, { bo_table: bo_table, wr_id: wr_id, cmt_id: cmt_id, action: "add", reason: yc_reason }, function() {
                Swal.fire({
                    title: "알림!",
                    text: "정상적으로 신고처리 하였습니다.",
                    confirmButtonColor: "#e53935",
                    icon: "success",
                    confirmButtonText: "확인"
                }).then(() => {
                    document.location.href = '<?php echo str_replace('&amp;','&',get_pretty_url($bo_table, $wr_id)); ?>';
                });
            });
        }
    });

    // 게시물 신고 취소
    $('#cancel_yellow_card, .cancel_yellow_card, .cancel_cmt_yellow_card').click(function() {
        <?php if ($eb_5['yc_blind'] == 'y') { ?>
        Swal.fire({
            title: "알림!",
            text: "이미 블라인드 처리된 글은 신고취소 처리하실 수 없습니다.",
            confirmButtonColor: "#e53935",
            icon: "warning",
            confirmButtonText: "확인"
        });
        return;
        <?php } ?>

        var cmt_id = $("#modal_cmt_id").val();
        Swal.fire({
            title: "신고취소!",
            text: "신고취소 처리하시겠습니까?",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#00897b",
            confirmButtonText: "확인",
            cancelButtonText: "취소"
        }).then((result) => {
            if (result.isConfirmed) {
                var bo_table = '<?php echo $bo_table; ?>';
                var wr_id = '<?php echo $wr_id; ?>';
                var url = '<?php echo EYOOM_CORE_URL; ?>/board/yellow_card.php';
                $.post(url, { bo_table: bo_table, wr_id: wr_id, cmt_id: cmt_id, action: "cancel" }, function() {
                    document.location.href = '<?php echo str_replace('&amp;','&',get_pretty_url($bo_table, $wr_id)); ?>';
                });
            }
        });
    });

    // 원글의 신고취소를 위해 modal_cmt_id 값을 리셋
    $('#yellow_card').click(function() {
        $("#modal_cmt_id").val('');
    });

    <?php if ($blind_direct) { ?>
    // 블라인드 처리 권한을 가진 회원
    $('.btn-blind, .btn-cmt-blind').click(function() {
        var id = $(this).attr('id');
        var cmt_id = $(this).attr('data-cmt-id');
        if (typeof(cmt_id) == 'undefined') var cmt_id = '';

        switch(id) {
            case 'direct_blind':
                Swal.fire({
                    title: "블라인드!",
                    text: "본 게시물을 바로 블라인드 처리합니다. 계속 진행하시겠습니까?",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonColor: "#e53935",
                    confirmButtonText: "확인",
                    cancelButtonText: "취소"
                }).then((result) => {
                    if (result.isConfirmed) {
                        var action = 'db'; // direct blind
                        var re_id = !cmt_id ? 'cancel_blind' : 'cancel_cmt_blind_li_'+cmt_id;
                        var re_class = !cmt_id ? 'board-view-btn btn-blind' : 'btn-cmt-blind btn-blind';
                        var re_text = '블라인드 취소';

                        direct_blind(cmt_id, action, re_id, re_class, re_text);

                        window.location.reload();
                    }
                });
                break;
            case 'cancel_blind':
                Swal.fire({
                    title: "블라인드!",
                    text: "본 게시물을 블라인드 취소처리합니다. 계속 진행하시겠습니까?",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonColor: "#e53935",
                    confirmButtonText: "확인",
                    cancelButtonText: "취소"
                }).then((result) => {
                    if (result.isConfirmed) {
                        var action = 'cb'; // cancel blind
                        var re_id = !cmt_id ? 'direct_blind' : 'direct_cmt_blind_li_'+cmt_id;
                        var re_class = !cmt_id ? 'board-view-btn btn-blind' : 'btn-cmt-blind btn-blind';
                        var re_text = '블라인드';

                        direct_blind(cmt_id, action, re_id, re_class, re_text);

                        window.location.reload();
                    }
                });
                break;
            case 'direct_cmt_blind_li_'+cmt_id:
                Swal.fire({
                    title: "블라인드!",
                    text: "본 댓글을 바로 블라인드 처리합니다. 계속 진행하시겠습니까?",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonColor: "#e53935",
                    confirmButtonText: "확인",
                    cancelButtonText: "취소"
                }).then((result) => {
                    if (result.isConfirmed) {
                        var action = 'db'; // direct blind
                        var re_id = 'cancel_cmt_blind_li_'+cmt_id;
                        var re_class = 'btn-cmt-blind';

                        direct_blind(cmt_id, action, re_id, re_class, re_text);

                        window.location.reload();
                    }
                });
                break;
            case 'cancel_cmt_blind_li_'+cmt_id:
                Swal.fire({
                    title: "블라인드!",
                    text: "본 댓글을 블라인드 취소처리합니다. 계속 진행하시겠습니까?",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonColor: "#e53935",
                    confirmButtonText: "확인",
                    cancelButtonText: "취소"
                }).then((result) => {
                    if (result.isConfirmed) {
                        var action = 'cb'; // cancel blind
                        var re_id = 'direct_cmt_blind_li_'+cmt_id;
                        var re_class = 'btn-cmt-blind';

                        direct_blind(cmt_id, action, re_id, re_class, re_text);

                        window.location.reload();
                    }
                });
                break;
        }

        var direct_blind = function(cmt_id, action, re_id, re_class, re_text) {
            if (typeof(action) != 'undefined') {
                $.post(
                    '<?php echo EYOOM_CORE_URL; ?>/board/direct_blind.php',
                    { bo_table: "<?php echo $bo_table; ?>", wr_id: "<?php echo $wr_id; ?>", cmt_id: cmt_id, action: action },
                    function(data) {
                        if (!cmt_id) {
                            $('.btn-blind').attr('id', re_id);
                            $('.btn-blind').attr('class', re_class);
                            $('.btn-blind').text(re_text);
                        } else {
                            $('.btn-cmt-blind').attr('id', re_id);
                            $('.btn-cmt-blind').attr('class', re_class);
                        }
                    }, "json"
                );
            }
        }
    });
    <?php } ?>

    <?php } ?>

    <?php if ($eyoom_board['bo_use_rating'] == '1' && $is_member) { ?>
    $(".rating > input, .rating-mobile > input").click(function() {
        var score = $(this).val();
        Swal.fire({
            title: "별점평가",
            html: "<div class='alert alert-warning'>별점 <span>" + score + "</span> 점을 클릭하였습니다.</div><span>본 게시물의 별점평가에 참여하시겠습니까?</span>",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#00897b",
            confirmButtonText: "확인",
            cancelButtonText: "취소"
        }).then((result) => {
            if (result.isConfirmed) {
                var bo_table = '<?php echo $bo_table; ?>';
                var wr_id = '<?php echo $wr_id; ?>';
                var url = '<?php echo EYOOM_CORE_URL; ?>/board/star_rating.php';
                $.post(url, { bo_table: bo_table, wr_id: wr_id, score: score }, function() {
                    document.location.href = '<?php echo str_replace('&amp;','&',get_pretty_url($bo_table, $wr_id)); ?>';
                });
            }
        });
    });
    <?php } ?>

    // 핀 설정
    $('.board-pin-btn').click(function() {
        var id = $(this).attr('id');
        switch(id) {
            case 'save_pin':
                var action = 'save';
                var re_id = 'cancel_pin';
                var re_class = 'board-view-btn board-pin-btn';
                var re_text = '해제';

                pin_process(action, re_id, re_class, re_text);
                break;
            case 'cancel_pin':
                var action = 'cancel';
                var re_id = 'save_pin';
                var re_class = 'board-view-btn board-pin-btn';
                var re_text = '저장';

                pin_process(action, re_id, re_class, re_text);
                break;
        }

        function pin_process(action, re_id, re_class, re_text) {
            if (typeof(action) != 'undefined') {
                $.post(
                    '<?php echo EYOOM_CORE_URL; ?>/board/pin_process.php',
                    { bo_table: "<?php echo $bo_table; ?>", wr_id: "<?php echo $wr_id; ?>", action: action },
                    function(data) {
                        if (!data.error) {
                            $('.board-pin-btn').attr('id', re_id);
                            $('.board-pin-btn').attr('class', re_class);
                            $('#pin-text').text(re_text);

                            if (action == 'save') {
                                var str = '정상적으로 핀을 저장하였습니다. 마이페이지 > 핀보드에서 보실 수 있습니다.';
                            } else if (action == 'cancel') {
                                var str = '정상적으로 핀을 해제하였습니다.';
                            }
                            Swal.fire({
                                title: "알림!",
                                text: str,
                                confirmButtonColor: "#e53935",
                                icon: "success",
                                confirmButtonText: "확인"
                            });
                        } else {
                            Swal.fire({
                                title: "알림!",
                                text: "핀 처리하지 못하였습니다.",
                                confirmButtonColor: "#e53935",
                                icon: "error",
                                confirmButtonText: "확인"
                            });
                        }
                    }, "json"
                );
            }
        }
    });
});

function excute_good(href, $el, $tx, $good) {
    $.post(
        href,
        { js: "on" },
        function(data) {
            if (data.error) {
                Swal.fire({
                    title: "알림",
                    text: data.error,
                    confirmButtonColor: "#e53935",
                    confirmButtonText: "닫기"
                });
                return false;
            }

            if (data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if ($good == 'nogood') {
                    Swal.fire({
                        title: "비추천 완료",
                        text: "이 글을 비추천하였습니다.",
                        icon: "success",
                        confirmButtonColor: "#e53935",
                        confirmButtonText: "닫기"
                    });
                } else if ($good == 'good') {
                    Swal.fire({
                        title: "추천 완료",
                        text: "이 글을 추천하였습니다.",
                        icon: "success",
                        confirmButtonColor: "#e53935",
                        confirmButtonText: "닫기"
                    });
                }
            }
        }, "json"
    );
}

<?php if ($is_admin) { ?>
$(window).load(function() {
    $(".set_bo_skin").change(function() {
        var skin = $(this).val();
        if (!skin) {
            Swal.fire({
                title: "알림",
                text: '스킨을 선택해 주세요.',
                confirmButtonColor: "#e53935",
                icon: "warning",
                confirmButtonText: "확인"
            });
        } else {
            var bo_table = '<?php echo $bo_table; ?>';
            var wr_id = '<?php echo $wr_id; ?>';
            var url = '<?php echo EYOOM_CORE_URL; ?>/board/set_bo_skin.php';
            $.post(url, { bo_table: bo_table, skin: skin }, function() {
                document.location.href = '<?php echo str_replace('&amp;','&',get_pretty_url($bo_table, $wr_id)); ?>';
            });
        }
    });
});
<?php } ?>
</script>