<?php
// $Id: page.tpl.php,v 1.1 2008/07/01 11:15:38 interfacewebdesign Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <title><?php print $head_title ?></title>
    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
    <!--[if lt IE 7]>
      <?php print phptemplate_get_ie_styles(); ?>
    <![endif]-->
  </head>
  <body<?php print phptemplate_body_class($left, $right); ?>>
<div class="Wraper">
	<div class="Maincontiner">
    	<div class="Headerwraper">
        	<div class="Rightlinkswraper">
				<?php if (isset($primary_links)) : ?>
				  <?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
                <?php endif; ?>
                </div>
        	<div class="Logowraper"><?php if ($site_name) { ?><a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a><?php } ?></div>
        </div>
        <div class="Midalwraper">
            <div class="Midalcontiner">
                <div class="Midalcontiner1">
                    <?php if ($left): ?>
                    <div id="sidebar-left" class="sidebar">
                      <?php print $left ?>
                    </div>
                  <?php endif; ?>
            
                  <div id="center"><div id="squeeze">
                      <?php print $breadcrumb; ?>
                      <?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
                      <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
                      <?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs title"' : ' class="title"') .'>'. $title .'</h2>'; endif; ?>
                      <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
                      <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
                      <?php if ($show_messages && $messages): print $messages; endif; ?>
                      <?php print $help; ?>
                      <div class="clear-block">
                        <?php print $content ?>
                      </div>
                      <?php print $feed_icons ?>
                      
                  </div></div> <!-- /.left-corner, /.right-corner, /#squeeze, /#center -->
            
                  <?php if ($right): ?>
                    <div id="sidebar-right" class="sidebar">
                      <?php print $right ?>
                    </div>
                  <?php endif; ?>
                </div>
        	</div>
            <div class="Footerwraper">
            <div class="footer-content"><?php print $footer_message . $footer ?></div>
                    <div class="Footerbottomlinks">
                      <div class="Footerrightcontiner"><img src="<?php print base_path(). path_to_theme() ?>/images/leftcor.jpg" alt="img" width="18" height="38" /></div>
                        <div class="Footermidalcontiner">
						<?php if (isset($primary_links)) : ?>
						  <?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
                        <?php endif; ?>
        				</div>
                            <div class="Footerleftcontiner"><img src="<?php print base_path(). path_to_theme() ?>/images/leftconrner.jpg" alt="img" width="18" height="38" /></div>
                    </div>
                    <div class="Interface"><strong>Drupal Theme by InterFace </strong></div>
            </div>
		</div>
	</div>
</div>
  <?php print $closure ?>
  </body>
</html>
