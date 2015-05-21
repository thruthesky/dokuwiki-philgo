<?php
/**
 * Template footer, included in the main and detail files
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>

<!-- ********** FOOTER ********** -->
<div id="dokuwiki__footer"><div class="pad">
    <?php /* tpl_license('');  license text */?>
	<div class="license">
		필고 위키는 크리에이티브 커먼즈 3.0 라이선스를 따르며
		무료로 공개하는 자료만 올릴 수 있습니다.
	</div>





		<div class="buttons">
	    <!-- buttons on bottom -->
    </div>
</div></div><!-- /footer -->




	<section class="philgo-usage">
		<table>
			<tr valign="top">
				<td>


					<ul>
						<li class="how-to-use"><a href="./doku.php?id=wiki:사용_방법">필고 위키 사용방법</a></li>
						<li class="how-to-edit"><a href="./doku.php?id=wiki:페이지_수정_방법">페이지 수정하기</a></li>
						<li class="how-to-create"><a href="./doku.php?id=wiki:페이지_생성_방법">페이지 생성하기</a></li>
					</ul>

				</td>
				<td>
					<!-- USER TOOLS -->
					<?php if ($conf['useacl']): ?>
						<div id="philgo-usertools">
							<h3 class="a11y"><?php echo $lang['user_tools']; ?></h3>
							<ul>
								<?php
								if (!empty($_SERVER['REMOTE_USER'])) {
									echo '<li class="user">';
									tpl_userinfo(); /* 'Logged in as ...' */
									echo '</li>';
								}
								tpl_action('admin', 1, 'li');
								tpl_action('profile', 1, 'li');
								tpl_action('register', 1, 'li');
								tpl_action('login', 1, 'li');
								?>
							</ul>
						</div>
					<?php endif ?>
				</td>
			</tr>
		</table>
	</section>


<?php
tpl_includeFile('footer.html');
