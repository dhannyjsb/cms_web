
            <?php $menu = get_main_menu($group_id); ?>
           

             
                        <?php for ($i = 0; $i < count($menu->main_menu, true); $i++) { ?>
                            <?php if (count($menu->main_menu[$i]->parent_menu, true) == 0): ?>
                                <li><i class="bx bx-chevron-right"></i><a href="<?php echo base_url() . $menu->main_menu[$i]->url ?>"><?php echo $menu->main_menu[$i]->title ?></a></li>
                            <?php else: ?>
                                <li><i class="bx bx-chevron-right"></i>
                                    <a href="<?php echo base_url() . $menu->main_menu[$i]->url ?>"><?php
                                        echo $menu->main_menu[$i]->title ?></a>
                                    
                                        <?php for ($b = 0; $b < count($menu->main_menu[$i]->parent_menu, true); $b++):
                                            if (!isset($menu->main_menu[$i]->parent_menu[$b]->parent_submenu)): ?>
                                                <li><a href="#"><i class="bx bx-chevron-right"></i><?php echo
                                                        $menu->main_menu[$i]->parent_menu[$b]->title ?></a></li>
                                            <?php else: ?>
                                                <li class="dropdown dropdown-submenu"><a href="<?php echo base_url() .
                                                        $menu->main_menu[$i]->parent_menu[$b]->url ?>"
                                                                                         class="dropdown-toggle"
                                                                                         data-toggle="dropdown"><?php echo
                                                        $menu->main_menu[$i]->parent_menu[$b]->title ?></a>
                                                    <?php if (isset
                                                    ($menu->main_menu[$i]->parent_menu[$b]->parent_submenu)):?>
                                                        <ul class="dropdown-menu">
                                                            <?php foreach
                                                            ($menu->main_menu[$i]->parent_menu[$b]->parent_submenu
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
                                    
                                </li>
                            <?php endif; ?>
                        <?php } ?>
                   
               


