<?php
if ($teaser) {?>
<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">
<div class="Thesun">
<div class="Textcontiner">
                            <?php if ($page == 0): ?><div class="Textheadingcontiner"><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></div><?php endif; ?>
                                <div class="Datecontiner">
                                    <div class="Datecontiner1"><?php print $submitted; ?></div>	
								</div>
                                        <div class="Textcontiner2"><?php print $picture ?><?php print $content ?>
                                        	 <div class="clear-block">
                                                <div class="meta">
                                                <?php if ($taxonomy): ?>
                                                  <div class="terms"><?php print $terms ?></div>
                                                <?php endif;?>
                                                </div>
                                            
                                                <?php if ($links): ?>
                                                  <div class="links"><?php print $links; ?></div>
                                                <?php endif; ?>
                                             </div>
                                        </div>
                                        
                                           
                        </div>


</div>
</div>
<?php } else {
//all other cases
//Anything here will show up when viewing your post at any other time, e.g. previews
?>
<?php
// $Id: node-blog.tpl.php,v 1.1 2008/07/01 11:15:38 interfacewebdesign Exp $
?>
<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">
<div class="Thesun">
<div class="Textcontiner">
                            <?php if ($page == 0): ?><div class="Textheadingcontiner"><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></div><?php endif; ?>
                                <div class="Datecontiner">
                                    <div class="Datecontiner1"><?php print $submitted; ?></div>	
								</div>
                                        <div class="Textcontiner2"><?php print $picture ?><?php print $content ?>
                                        	 <div class="clear-block">
                                                <div class="meta">
                                                <?php if ($taxonomy): ?>
                                                  <div class="terms"><?php print $terms ?></div>
                                                <?php endif;?>
                                                </div>
                                            
                                                <?php if ($links): ?>
                                                  <div class="links"><?php print $links; ?></div>
                                                <?php endif; ?>
                                             </div>
                                        </div>
                                        
                                           
                        </div>

</div>
</div>
<?php } ?>