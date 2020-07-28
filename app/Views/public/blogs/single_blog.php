        <?php $session = \Config\Services::session(); ?>
        <!-- Main Content -->
        <div id="Content">
            <div class="content_wrapper clearfix">

                <!-- .sections_group -->
                <div class="sections_group">

                    <div id="post-2287" class="post-2287 post  format-standard has-post-thumbnail  category-stories">

                        <div class="section section-post-header">
                            <div class="section_wrapper clearfix">

                                <!-- Posts Navigation -->
                                <!-- One full width row-->
                                <!-- Post Header-->
                                <!-- One full width row-->
                                <div class="column one post-header">

                                    <div class="column one post-nav">
                                        <a class="list-nav" href="<?php base_url(); ?>/blogs"><i class="icon-layout"></i>Kembali</a>
                                    </div>

                                    <div class="title_wrapper">

                                        <h1 class="entry-title"><?= $post['post_title']; ?></h1>

                                        <div class="post-meta clearfix">

                                            <div class="author-date">
                                                <span class="vcard author post-author"> Published by <i class="icon-user"></i> <span class="fn"><a href="#"><?= $post['admin_nama_lengkap']; ?></a></span> </span>
                                                <span class="date"> at <i class="icon-clock"></i>
                                                    <time class="entry-date" datetime="2014-05-03T09:37:11+00:00" itemprop="datePublished" pubdate>
                                                        <?= date('d M Y h:i A', strtotime($post['created_at'])) ?>
                                                    </time> </span>
                                            </div>

                                            <div class="category meta-categories">
                                                <span class="cat-btn">Categories <i class="icon-down-dir"></i></span>
                                                <div class="cat-wrapper">
                                                    <ul class="post-categories">
                                                        <li>
                                                            <a href="#" rel="category tag">Stories</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="category mata-tags">
                                                <span class="cat-btn">Tags <i class="icon-down-dir"></i></span>
                                                <div class="cat-wrapper">
                                                    <ul></ul>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <!-- Post Featured Element (image / video / gallery)-->
                                <!-- One full width row-->
                                <div class="column one single-photo-wrapper">

                                    <div class="share_wrapper">
                                        <span class='st_facebook_vcount' displayText='Facebook'></span>
                                        <span class='st_twitter_vcount' displayText='Tweet'></span>
                                        <span class='st_pinterest_vcount' displayText='Pinterest'></span>
                                        <span class='st_whatsapp_vcount' displayText='WhatsApp'></span>

                                        <script src="https://w.sharethis.com/button/buttons.js"></script>
                                        <script>
                                            stLight.options({
                                                publisher: "5ef830d4dd16750013bd35b3",
                                                doNotHash: false,
                                                doNotCopy: false,
                                                hashAddressBar: false
                                            });
                                        </script>
                                    </div>

                                    <div class="image_frame scale-with-grid ">
                                        <div class="image_wrapper">
                                            <a href="<?php echo base_url(); ?>/perpustakaan_file/blogs/images/<?= $post['post_image']; ?>" rel="prettyphoto">
                                                <div class="mask"></div><img width="1200" height="480" src="<?php echo base_url(); ?>/perpustakaan_file/blogs/images/<?= $post['post_image']; ?>" class="scale-with-grid wp-post-image" alt="home_university_blog_3" />
                                            </a>
                                            <div class="image_links">
                                                <a href="<?php echo base_url(); ?>/perpustakaan_file/blogs/images/<?= $post['post_image']; ?>" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- Post Content-->
                        <div class="post-wrapper-content">

                            <div class="entry-content">
                                <div class="section the_content has_content">
                                    <div class="section_wrapper">
                                        <div class="the_content_wrapper">
                                            <?= html_entity_decode($post['post']) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="section section-post-footer">
                                <div class="section_wrapper clearfix">

                                    <!-- One full width row-->
                                    <div class="column one post-pager"></div>

                                </div>
                            </div>

                            <!--Author Info Area-->
                            <div class="section section-post-about">
                                <div class="section_wrapper clearfix">

                                    <!-- One full width row-->
                                    <div class="column one author-box">
                                        <div class="author-box-wrapper">
                                            <div class="avatar-wrapper">
                                                <img alt='admin' src='https://0.gravatar.com/avatar/057e2eb392b95a2ecfc9d32d554e3917?s=64&amp;d=mm&amp;r=g' class='avatar avatar-64 photo' height='64' width='64' />
                                            </div>
                                            <div class="desc-wrapper">
                                                <h5><a href="#"><?= $post['admin_nama_lengkap']; ?></a></h5>
                                                <div class="desc"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Comments area-->
                        <div class="section section-post-comments">
                            <div class="section_wrapper clearfix">
                                <!-- One full width row-->
                                <div class="column one comments" id="comments">
                                    <div id="respond" class="comment-respond" style="padding-top: 20px;">
                                        <?php if ($post['type_komentar'] == 0) { ?>
                                            <h3 id="reply-title" class="comment-reply-title">Tuliskan Komentar</h3>
                                            <p class="must-log-in">
                                                Kolom komentar dinonaktifkan.
                                            </p>
                                        <?php } ?>
                                        <?php if ($post['type_komentar'] == 1) { ?>
                                            <?php if (!$session->has('is_login')) { ?>
                                                <h3 id="reply-title" class="comment-reply-title">Tuliskan Komentar</h3>
                                                <p class="must-log-in">
                                                    Anda harus <a href="#" onclick="toggleModal()">logged in</a> untuk menuliskan komentar.
                                                </p>
                                            <?php } else { ?>
                                                <h3 id="reply-title" class="comment-reply-title">Tuliskan Komentar</h3>
                                                <div class="column_attr ">
                                                    <div id="contactWrapper">
                                                        <?php echo form_open(base_url('blogs/tambah_komentar'), 'class="login-form" id="post_komentar" '); ?>
                                                        <!-- One Third (1/3) Column -->
                                                        <div class="column one-third">
                                                            <label>Name:</label><span>
                                                                <input type="text" name="name_komentar" id="name_komentar" size="40" aria-required="true" aria-invalid="false" value="<?= $data_user['nama_lengkap']; ?>" readonly>
                                                                <input type="hidden" name="comment_post_id" value="<?= $post['post_id']; ?>">
                                                                <input type="hidden" name="comment_parrent_id" value="0">
                                                            </span>
                                                        </div>
                                                        <!-- One Third (1/3) Column -->
                                                        <div class="column one-third">
                                                            <label>E-mail address:</label><span>
                                                                <input type="email" name="email_komentar" id="email_komentar" size="40" aria-required="true" aria-invalid="false" value="<?= $data_user['email']; ?>" readonly>
                                                            </span>
                                                        </div>
                                                        <!-- One Third (1/3) Column -->
                                                        <div class="column one-third">
                                                            <label>Status:</label><span>
                                                                <input type="text" name="kelas_komentar" id="kelas_komentar" size="40" aria-invalid="false" value="<?= $data_user['nama_role']; ?>" readonly>
                                                            </span>
                                                        </div>
                                                        <div class="column one">
                                                            <label>Message:</label><span> <textarea name="isi_komentar" id="isi_komentar" class="flv_style_38" rows="10" required required="required"></textarea></span>
                                                        </div>
                                                        <div class="column one">
                                                            <input type="submit" value="Kirim Komentar" id="submit" ;">
                                                        </div>
                                                        <?php echo form_close(); ?>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        <?php } ?>
                                        <?php if ($post['type_komentar'] == 2) { ?>
                                            <?php if (!$session->has('is_login')) { ?>
                                                <h3 id="reply-title" class="comment-reply-title">Tuliskan Komentar</h3>
                                                <p class="must-log-in">
                                                    Anda bisa <a href="#" onclick="toggleModal()">logged in</a>.
                                                </p>
                                                <div class="column_attr ">
                                                    <div id="contactWrapper">
                                                        <?php echo form_open(base_url('blogs/tambah_komentar'), 'class="login-form" id="post_komentar" '); ?>
                                                        <!-- One Third (1/3) Column -->
                                                        <div class="column one-third">
                                                            <label>Name:</label><span>
                                                                <input type="text" name="name_komentar" id="name_komentar" size="40" aria-required="true" aria-invalid="false">
                                                                <input type="hidden" name="comment_post_id" value="<?= $post['post_id']; ?>">
                                                                <input type="hidden" name="comment_parrent_id" value="0">
                                                            </span>
                                                        </div>
                                                        <!-- One Third (1/3) Column -->
                                                        <div class="column one-third">
                                                            <label>E-mail address:</label><span>
                                                                <input type="email" name="email_komentar" id="email_komentar" size="40" aria-required="true" aria-invalid="false">
                                                            </span>
                                                        </div>
                                                        <!-- One Third (1/3) Column -->
                                                        <div class="column one-third">
                                                            <label>Status:</label><span>
                                                                <input type="text" name="kelas_komentar" id="kelas_komentar" size="40" aria-invalid="false" value="Umum" readonly>
                                                            </span>
                                                        </div>
                                                        <div class="column one">
                                                            <label>Message:</label><span> <textarea name="isi_komentar" id="isi_komentar" class="flv_style_38" rows="10" aria-invalid="false"></textarea></span>
                                                        </div>
                                                        <div class="column one">
                                                            <input type="submit" value="Kirim Komentar" id="submit" ;">
                                                        </div>
                                                        <?php echo form_close(); ?>
                                                    </div>
                                                </div>
                                            <?php } else { ?>

                                                <h3 id="reply-title" class="comment-reply-title">Tuliskan Komentar</h3>
                                                <div class="column_attr ">
                                                    <div id="contactWrapper">
                                                        <?php echo form_open(base_url('blogs/tambah_komentar'), 'class="login-form" id="post_komentar" '); ?>
                                                        <!-- One Third (1/3) Column -->
                                                        <div class="column one-third">
                                                            <label>Name:</label><span>
                                                                <input type="text" name="name_komentar" id="name_komentar" size="40" aria-required="true" aria-invalid="false">
                                                                <input type="hidden" name="comment_post_id" value="<?= $post['post_id']; ?>">
                                                                <input type="hidden" name="comment_parrent_id" value="0">
                                                            </span>
                                                        </div>
                                                        <!-- One Third (1/3) Column -->
                                                        <div class="column one-third">
                                                            <label>E-mail address:</label><span>
                                                                <input type="email" name="email_komentar" id="email_komentar" size="40" aria-required="true" aria-invalid="false">
                                                            </span>
                                                        </div>
                                                        <!-- One Third (1/3) Column -->
                                                        <div class="column one-third">
                                                            <label>Status:</label><span>
                                                                <input type="text" name="kelas_komentar" id="kelas_komentar" size="40" aria-invalid="false" value="<?php if ($session->has('is_admin_login')) {
                                                                                                                                                                        echo "Admin";
                                                                                                                                                                    } else {
                                                                                                                                                                        echo "Siswa";
                                                                                                                                                                    } ?>" readonly>
                                                            </span>
                                                        </div>
                                                        <div class="column one">
                                                            <label>Message:</label><span> <textarea name="isi_komentar" id="isi_komentar" class="flv_style_38" rows="10" aria-invalid="false"></textarea></span>
                                                        </div>
                                                        <div class="column one">
                                                            <input type="submit" value="Kirim Komentar" id="submit" ;">
                                                        </div>
                                                        <?php echo form_close(); ?>
                                                    </div>
                                                </div>
                                            <?php } ?>

                                        <?php } ?>

                                    </div>
                                    <ul id="comments">
                                        <h3 id="reply-title" class="comment-reply-title" style="padding-top: 20px;"> <?= count($data_komentar); ?> Komentar</h3>

                                        <?php
                                        if (count($data_komentar) > 0) {
                                            foreach ($data_komentar as $row) { ?>
                                                <li class="cmmnt">
                                                    <div class="avatar"><img src="https://0.gravatar.com/avatar/057e2eb392b95a2ecfc9d32d554e3917?s=64&d=mm&r=g" width="55" height="55" alt="DarkCubes photo avatar"></div>
                                                    <div class="cmmnt-content">
                                                        <header><a class="userlink"><?= $row['nama_komentator']; ?></a></header>
                                                        <span class="pubdate"><b><?= $row['status_komentator']; ?></b> - <?= date('d M Y h:i A', strtotime($row['created_at'])) ?></span>
                                                        <p><?= $row['isi_komentar']; ?></p>
                                                    </div>
                                                    <!-- <ul class="replies">
                                                        <li class="cmmnt">
                                                            <div class="avatar"><a href="javascript:void(0);"><img src="http://0.gravatar.com/avatar/057e2eb392b95a2ecfc9d32d554e3917?s=64&d=mm&r=g" width="55" height="55" alt="Sir_Pig photo avatar"></a></div>
                                                            <div class="cmmnt-content">
                                                                <header><a href="javascript:void(0);" class="userlink">Sir_Pig</a></header>
                                                                <span class="pubdate">posted 1 week ago</span>
                                                                <p>Sed felis lorem, venenatis sed malesuada vitae, tempor vel turpis. Mauris in dui velit, vitae mollis risus.</p>
                                                            </div>
                                                        </li>
                                                    </ul>-->
                                                </li>
                                            <?php
                                            }
                                        } else { ?>
                                            <p class="must-log-in">Tidak ada Komentar</p>
                                        <?php  } ?>

                                    </ul>
                                    <!-- #comments -->

                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- .four-columns - sidebar -->
                <!-- Sidebar area-->
                <?php include('side_bar.php'); ?>
            </div>
        </div>