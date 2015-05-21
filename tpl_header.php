<?php
/**
 * Template header, included in the main and detail files
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>

<!-- ********** HEADER ********** -->
<div id="dokuwiki__header"><div class="pad group">

    <?php tpl_includeFile('header.html') ?>

    <div class="headings group">
        <ul class="a11y skip">
            <li><a href="#dokuwiki__content"><?php echo $lang['skip_to_content']; ?></a></li>
        </ul>

        <h1><?php
            // get logo either out of the template images folder or data/media folder
            // $logoSize = array();
            // $logo = tpl_getMediaFile(array(':wiki:logo.png', ':logo.png', 'images/logo.png'), false, $logoSize);

	        $logo = "lib/tpl/dokuwiki-philgo/images/logo-philgo.png";
	        $_title = "<div class='philgo-title'>필리핀 정보 백과</div><div class='philgo-title-power'>Powered by 필고 <a href='//www.philgo.com' target='_blank'>www.philgo.com</a></div>";

            // display logo and wiki title in a link to the home page
            tpl_link(
                wl('처음'),
                '<img src="'.$logo.'" '.$logoSize[3].' alt="" /> <span>'.$_title.'</span>',
                'accesskey="h" title="[H]"'
            );
        ?></h1>
        <?php if ($conf['tagline']): ?>
            <p class="claim"><?php echo $conf['tagline']; ?></p>
        <?php endif ?>
    </div>

    <div class="tools group">
        <!-- SITE TOOLS -->
        <div id="dokuwiki__sitetools">
            <h3 class="a11y"><?php echo $lang['site_tools']; ?></h3>
            <?php tpl_searchform(); ?>
            <div class="mobileTools">
                <?php tpl_actiondropdown($lang['tools']); ?>
            </div>
            <ul>
                <?php
                    tpl_action('recent', 1, 'li');
                    tpl_action('media', 1, 'li');
                    tpl_action('index', 1, 'li');
                ?>
            </ul>
        </div>

    </div>

    <!-- BREADCRUMBS -->
    <?php if($conf['breadcrumbs'] || $conf['youarehere']): ?>
        <div class="breadcrumbs">
            <?php if($conf['youarehere']): ?>
                <div class="youarehere"><?php tpl_youarehere() ?></div>
            <?php endif ?>
            <?php if($conf['breadcrumbs']): ?>
                <div class="trace"><?php tpl_breadcrumbs() ?></div>
            <?php endif ?>
        </div>
    <?php endif ?>

    <?php html_msgarea() ?>

    <hr class="a11y" />
</div></div><!-- /header -->


<script>
	var $ = jQuery;
	var resize_count = 0;
	$(window).load(function () {
		resize_iframe();
	});
	$(function(){
		resize_iframe();
		setTimeout(function () { resize_iframe(); }, 1000);	// resize after 1 second for sure.
		setTimeout(function () { resize_iframe(); }, 3000);	// resize after 3 seconds for sure.
		setTimeout(function () { resize_iframe(); }, 5000);	// resize after 5 seconds for sure.
		setTimeout(function () { resize_iframe(); }, 15000);	// resize after 15 seconds for sure.
		setTimeout(function () { resize_iframe(); }, 30000);	// resize after 30 seconds for sure.
		setTimeout(function () { resize_iframe(); }, 60000);	// resize after 1 MINUTE for sure.
		// if it takes more than 1 minute, then let's assume that the internet is too slow.
	});
	function resize_iframe()
	{
		resize_count ++;
		var height = $('body').height();
		var data = { 'code' : 'resize', 'height': height, 'count': resize_count };
		parent.postMessage( data, '*' );
	}
</script>
