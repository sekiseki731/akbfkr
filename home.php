<?php
/**
 * Top Page template file
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage FSV BASIC
 * @since FSV BASIC 1.1
 */
?>

<?php get_header(); ?>

	<div id="main" class="main-content-area">

		<div class="component-inner">

			<div id="wrapbox" class="main-content-wrap">

				<div id="primary" class="main-content-site" role="main"><?php

					$options = fsvbasic_get_theme_options();

					if ( !isset( $options[ 'welcome_title' ] ) ) { $opWelcomeTitle = 'Welcome Title'; }
					else { $opWelcomeTitle = $options[ 'welcome_title' ]; }

					if ( !isset( $options[ 'welcome_text' ] ) ) { $opWelcomeText = 'Welcome To Our Site!'; }
					else { $opWelcomeText = $options[ 'welcome_text' ]; }

					if ( ( $opWelcomeTitle ) || ( $opWelcomeText ) ) : ?>

					<div id="topmain-welcome-area" class="topmain-welcome-area">

						<?php if ( $opWelcomeTitle ) : ?><h2 class="topmain-welcome-title"><?php echo $opWelcomeTitle; ?></h2><?php endif;
						if ( $opWelcomeText ) : ?><div class="topmain-welcome-contents"><?php echo $opWelcomeText; ?></div><?php endif; ?>

					</div>

					<?php endif; ?>

					<div id="topmain-widget-area" class="topmain-widget-area">

						<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>

							<?php dynamic_sidebar( 'sidebar-6' ); ?>

						<?php else : // is_active_sidebar( 'sidebar-3' ) ?>


						<?php endif; // is_active_sidebar( 'sidebar-6' ) ?>
                        
<!-- from here you can write main content-->
  <p class="reservdBtn"><a href="http://akiba2960.com/reserved/">RESERVATION</a></p> 
                    
                    </div><!-- #topmain-widget-area -->

				</div><!-- #primary -->

				<?php get_sidebar( 'left' ); ?>

			</div>

			<?php get_sidebar( 'right' ); ?>

		</div>

	</div><!-- #main -->

<?php get_footer(); ?>
