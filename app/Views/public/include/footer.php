<footer id="Footer" class="clearfix">

    <div class="widgets_wrapper">
        <div class="container">
            <!-- One Third (1/3) Column -->
            <div class="column one-third">
                <!-- Text Area -->
                <aside class="widget widget_text">
                    <h4>Shortcut links</h4>
                    <div class="textwidget">
                        <ul class="flv_list">
                            <li>
                                <a href="#">Velit mauris</a>
                            </li>
                            <li>
                                <a href="#">Entum feuis</a>
                            </li>
                            <li>
                                <a href="#">Aliquam massa </a>
                            </li>
                            <li>
                                <a href="#">Egestas quam</a>
                            </li>
                        </ul>
                        <ul class="flv_list">
                            <li>
                                <a href="#">Aenean ligula</a>
                            </li>
                            <li>
                                <a href="#">Dapibus at dolor</a>
                            </li>
                            <li>
                                <a href="#">Molestie id</a>
                            </li>
                            <li>
                                <a href="#">Vestibulum</a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
            <!-- One Third (1/3) Column -->
            <div class="column one-third">
                <!-- Text Area -->
                <aside class="widget widget_text">
                    <h4>Tentang Kami</h4>
                    <div class="textwidget">

                    </div>
                </aside>
            </div>
            <!-- One Third (1/3) Column -->
            <div class="column one-third">
                <!-- Text Area -->
                <aside class="widget widget_text">
                    <h4>Hubungi Kami</h4>
                    <div class="textwidget">
                        <dl class="row">
                            <dt class="col-lg-4 col-md-4 col-sm-12"> Alamat</dt>
                            <dd class="col-lg-8 col-md-8 col-sm-12"><?= esc($settings['alamat_sekolah']); ?></dd>
                            <dt class="col-lg-4 col-md-4 col-sm-12"> Telepon</dt>
                            <dd class="col-lg-8 col-md-8 col-sm-12"><?= esc($settings['telpon_sekolah']); ?></dd>
                            <dt class="col-lg-4 col-md-4 col-sm-12">Email</dt>
                            <dd class="col-lg-8 col-md-8 col-sm-12"><?= esc($settings['email_sekolah']); ?></dd>
                        </dl>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <!-- Footer copyright-->
    <div class="footer_copy">
        <div class="container">
            <div class="column one">
                <a id="back_to_top" href="#" class="button button_left button_js"><span class="button_icon"><i class="icon-up-open-big"></i></span></a>

                <!-- Copyrights -->
                <div class="copyright">
                    &copy; <?php echo date("Y"); ?> <?= esc($settings['sort_sekolah']); ?> - Hand-crafted & Made with ♥ from <a target="_blank" rel="nofollow" href="https://hostrya.com">Hostrya</a>
                </div>

                <!--Social info area-->
                <ul class="social">
                    <li class="skype">
                        <a href="#" title="Skype"><i class="icon-skype"></i></a>
                    </li>
                    <li class="facebook">
                        <a href="#" title="Facebook"><i class="icon-facebook"></i></a>
                    </li>
                    <li class="googleplus">
                        <a href="#" title="Google+"><i class="icon-gplus"></i></a>
                    </li>
                    <li class="twitter">
                        <a href="#" title="Twitter"><i class="icon-twitter"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</footer>