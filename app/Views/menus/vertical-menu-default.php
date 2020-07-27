<?php $request = \Config\Services::request();
$menu = get_main_menu($group_id); ?>



<?php for ($i = 0; $i < count($menu->main_menu, true); $i++) { ?>
    <?php if (count($menu->main_menu[$i]->parent_menu, true) == 0) : ?>
        <li class="<?php if ($request->uri->getSegment(1) == url_title($menu->main_menu[$i]->url)) : ?>current_page_item<?php else : ?><?php endif; ?>"><a href="<?php echo base_url() . '/' . $menu->main_menu[$i]->url ?>">
                <span><?php echo $menu->main_menu[$i]->title ?></span></a></li>
    <?php else : ?>
        <li>
            <a href="<?php echo base_url() . '/' . $menu->main_menu[$i]->url ?>"><span><?php echo $menu->main_menu[$i]->title ?></span></a>
            <ul class="sub-menu" style="display: none;">
                <?php for ($b = 0; $b < count($menu->main_menu[$i]->parent_menu, true); $b++) :
                    if (!isset($menu->main_menu[$i]->parent_menu[$b]->parent_submenu)) : ?>
                        <li><a href="#"><?php echo
                                            $menu->main_menu[$i]->parent_menu[$b]->title ?></a></li>
                    <?php else : ?>
                        <li class="dropdown dropdown-submenu"><a href="<?php echo base_url() . '/' .
                                                                            $menu->main_menu[$i]->parent_menu[$b]->url ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo
                                                                                                                                                                                $menu->main_menu[$i]->parent_menu[$b]->title ?></a>
                            <?php if (isset($menu->main_menu[$i]->parent_menu[$b]->parent_submenu)) :
                            ?>
                                <ul class="dropdown-menu">
                                    <?php foreach ($menu->main_menu[$i]->parent_menu[$b]->parent_submenu
                                        as $par_sub) :

                                    ?>
                                        <li><a href="<?php echo
                                                            $par_sub->url ?>"><?php echo
                                                                                    $par_sub->title ?>
                                            </a></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>

                        </li>
                    <?php endif; ?>
                <?php endfor; ?>
            </ul>
        </li>
    <?php endif; ?>
<?php } ?>