        <div id="Content">
            <div class="content_wrapper clearfix">

                <!-- .sections_group -->
                <div class="sections_group">

                    <div class="extra_content">
                        <div class="section the_content no_content">
                            <div class="section_wrapper">
                                <div class="the_content_wrapper"></div>
                            </div>
                        </div>
                    </div>

                    <div class="section">
                        <div class="section_wrapper clearfix">
                            <!--  Filter Area -->
                            <!-- One full width row-->
                            <div class="column one post-nav ">
                                <?= $pager->links('view', 'front_full') ?>
                            </div>
                            <div class="column one column_blog">
                                <div class="blog_wrapper isotope_wrapper">
                                    <!-- Blog timeline element-->
                                    <div class="posts_group lm_wrapper timeline">
                                        <?php if ($posts) : ?>
                                            <?php foreach ($posts as $post) : ?>
                                                <div class="post-item isotope-item clearfix post-2283 post  format-standard has-post-thumbnail  category-stories tag-design">
                                                    <div class="date_label">
                                                        <i class="icon-clock"></i> <?= date('d F Y', strtotime($post['created_at'])) ?>
                                                    </div>
                                                    <div class="image_frame post-photo-wrapper scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a>
                                                                <div class="mask">
                                                                </div>
                                                                <img width="576px" height="450px" src="<?php echo base_url(); ?>/perpustakaan_file/blogs/images/<?= $post['post_image']; ?>" class="scale-with-grid wp-post-image" alt="home_university_blog_1" />
                                                            </a>
                                                            <div class="image_links double">
                                                                <a href="<?php echo base_url(); ?>/perpustakaan_file/blogs/images/<?= $post['post_image']; ?>" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a><a href="<?= base_url() . "/blogs/read/" . $post['post_slug']; ?>" class="link"><i class="icon-link"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-desc-wrapper">
                                                        <div class="post-desc">
                                                            <div class="post-meta clearfix">
                                                                <div class="author-date">
                                                                    <span class="vcard author post-author"><span class="label">Ditulis oleh </span>
                                                                        <i class="icon-user" style="color:darkblue"></i> <span class="fn"><a><?= $post['admin_nama_lengkap']; ?></a></span></span>
                                                                    <span class="date"><span class="label">at </span><i class="icon-clock"></i>
                                                                        <span class="post-date updated"> <?= date('d M Y h:i A', strtotime($post['created_at'])) ?>
                                                                        </span></span>
                                                                </div>
                                                                <div class="category">
                                                                    <span class="cat-btn">Categories <i class="icon-down-dir"></i></span>
                                                                    <div class="cat-wrapper">
                                                                        <ul class="post-categories">
                                                                            <li>
                                                                                <a href="#" rel="category tag">News</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" rel="category tag">Stories</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="post-title">
                                                                <h2 class="entry-title">
                                                                    <a href="<?= base_url() . "/blogs/read/" . $post['post_slug']; ?>">
                                                                        <?php if (strlen($post['post_title']) >= 70) { ?>
                                                                            <?= substr(strip_tags(html_entity_decode($post['post_title'])), 0, 70) . ' ...'; ?>
                                                                        <?php } else { ?>
                                                                            <?= strip_tags(html_entity_decode($post['post_title'])); ?>
                                                                        <?php } ?>
                                                                    </a>
                                                                </h2>
                                                            </div>
                                                            <div class="post-excerpt">
                                                                <?= substr(strip_tags(html_entity_decode($post['post'])), 0, 200) . ' ...'; ?>

                                                            </div>
                                                            <div class="post-footer">
                                                                <div class="button-love">
                                                                    <span class="love-text">Dilihat:</span>
                                                                    <i class="icon-clock" style="color:brown;"></i>

                                                                    <span class="label"><?= $post['post_view']; ?> Kali</span>

                                                                    <a class="mfn-love " data-id="2283">
                                                                    </a>
                                                                </div>
                                                                <div class="post-links">
                                                                    <i class="icon-comment-empty-fa"></i><a href="<?= base_url() . "/blogs/read/" . $post['post_slug'] . "#comments"; ?>" class="post-comments">0</a><i class="icon-doc-text"></i><a href="<?= base_url() . "/blogs/read/" . $post['post_slug']; ?>" class="post-more">Read more</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="column one post-nav ">
                                <?= $pager->links('view', 'front_full') ?>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- .four-columns - sidebar -->
                <!-- Sidebar area-->
                <?php include('side_bar.php'); ?>

            </div>
        </div>