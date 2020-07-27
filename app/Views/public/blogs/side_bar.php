                <div class="sidebar sidebar-1 four columns">
                    <div class="widget-area clearfix ">
                        <!-- Search form-->
                        <aside id="search-2" class="widget widget_search">
                        </aside>
                        <!-- Text Area -->
                        <aside class="widget widget_text">
                            <h3>About our school</h3>
                            <div class="textwidget">
                                Mauris imperdiet, urna mi, gravida sod ales. <span class="tooltip" data-tooltip="Donec nisl ac turpis">Vivamus hendrerit</span> nulla erat ornare tortor in vestibulum id.
                            </div>
                        </aside>
                        <!-- Recent posts -->
                        <aside id="categories-2" class="widget widget_categories">
                            <h3>Categories</h3>
                            <ul>
                                <?php foreach ($cate_list as $cate) { ?>
                                    <li class="cat-item cat-item-5">
                                        <a href="<?= base_url() ?>/categories/<?= $cate['categories_slug'] ?>"><?= $cate['categories_name'] ?></a>
                                    </li>
                                <?php
                                } ?>
                            </ul>
                        </aside>
                        <aside class="widget widget_mfn_recent_posts">
                            <h3>Popular posts</h3>
                            <div class="Recent_posts">
                                <ul>
                                    <?php foreach ($top_view as $post) { ?>
                                        <li class="post ">
                                            <a href="<?= base_url() . "/blogs/read/" . $post['post_slug']; ?>">
                                                <div class="photo"><img width="80" height="80" src="<?php echo base_url(); ?>/front_css/school/images/home_university_blog_1-80x80.jpg" class="scale-with-grid wp-post-image" alt="home_university_blog_1" /><span class="c"><?= $post['post_view']; ?></span>
                                                </div>
                                                <div class="desc">
                                                    <?php if (strlen($post['post_title']) >= 30) { ?>
                                                        <h6><b><?= substr(strip_tags(html_entity_decode($post['post_title'])), 0, 30) . ' ...'; ?></b></h6>
                                                    <?php } else { ?>
                                                        <h6><b><?= strip_tags(html_entity_decode($post['post_title'])); ?></b></h6>
                                                    <?php } ?>
                                                    <span class="date"><i class="icon-clock"></i><?= date('d M Y', strtotime($post['created_at'])) ?>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                    <?php
                                    } ?>
                                </ul>
                            </div>
                        </aside>
                        <aside class="widget widget_mfn_recent_posts">
                            <h3>Latest posts</h3>
                            <div class="Recent_posts">
                                <ul>
                                    <?php foreach ($latest_post as $post) { ?>
                                        <li class="post ">
                                            <a href="<?= base_url() . "/blogs/read/" . $post['post_slug']; ?>">
                                                <div class="photo"><img width="80" height="80" src="<?php echo base_url(); ?>/front_css/school/images/home_university_blog_1-80x80.jpg" class="scale-with-grid wp-post-image" alt="home_university_blog_1" /><span class="c"><?= $post['post_view']; ?></span>
                                                </div>
                                                <div class="desc">
                                                    <?php if (strlen($post['post_title']) >= 30) { ?>
                                                        <h6><b><?= substr(strip_tags(html_entity_decode($post['post_title'])), 0, 30) . ' ...'; ?></b></h6>
                                                    <?php } else { ?>
                                                        <h6><b><?= strip_tags(html_entity_decode($post['post_title'])); ?></b></h6>
                                                    <?php } ?>
                                                    <span class="date"><i class="icon-clock"></i><?= date('d M Y', strtotime($post['created_at'])) ?>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                    <?php
                                    } ?>
                                </ul>
                            </div>
                        </aside>
                        <!-- Categories Area -->

                    </div>
                </div>