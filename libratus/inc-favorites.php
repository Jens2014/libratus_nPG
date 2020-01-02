				<?php // Show only favorite lists if multi option on favorites page
				if (($_gallery_page == 'favorites.php') && (getOption('favorites_multi'))) { ?>
				<div id="favorites-box">
					<h5 id="favorites-title"><i class="fa fa-star"></i>  <?php echo gettext('Favorites'); ?></h5>
					<?php printFavoritesURL(null,'','',''); ?>
				</div>
				<?php } else { ?>
				<div id="favorites-box">
					<h5 id="favorites-title"><i class="fa fa-star"></i> <?php echo gettext('Favorites'); ?></h5>
					<?php
					if ($_gallery_page == 'album.php') {
						$current = $_current_album;
					} elseif ($_gallery_page == 'image.php') {
						$current = $_current_image;
					} else {
						$current = null;
					}

					if ($current) {
					printAddToFavorites($current);
					?>
					<?php if (getOption('favorites_multi')) { ?>
					<div id="favorites_help">
						<i class="fa fa-question-circle"></i> <em><?php echo gettext('To add to a specific favorites list, type it in the input box before clicking add favorite.'); ?></em>
					</div><br />
					<?php }
					} ?>

					<?php printFavoritesURL(null,'','',''); ?>
				</div>
				<?php } ?>