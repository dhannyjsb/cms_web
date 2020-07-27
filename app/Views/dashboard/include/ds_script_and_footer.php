<!-- BEGIN: Footer-->
<footer class="footer footer-light">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020<a class="text-bold-800 grey darken-2" href="https://smaba.sch.id" target="_blank">SMABA,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
    </p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="<?php echo base_url(); ?>/app-assets/vendors/js/charts/apexcharts.min.js"></script>
<script src="<?php echo base_url(); ?>/app-assets/vendors/js/extensions/tether.min.js"></script>
<script src="<?php echo base_url(); ?>/app-assets/vendors/js/extensions/shepherd.min.js"></script>
<script src="<?php echo base_url(); ?>/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<script src="<?php echo base_url(); ?>/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
<script src="<?php echo base_url(); ?>/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
<script src="<?php echo base_url(); ?>/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?php echo base_url(); ?>/app-assets/js/core/app-menu.js"></script>
<script src="<?php echo base_url(); ?>/app-assets/js/core/app.js"></script>
<script src="<?php echo base_url(); ?>/app-assets/js/scripts/components.js"></script>
<script src="<?php echo base_url(); ?>/app-assets/js/scripts/jquery.inputmask.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>/app-assets/js/scripts/bs-custom-file-input.js"></script>
<script src="<?php echo base_url(); ?>/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url(); ?>/app-assets/js/scripts/extensions/sweet-alerts.js"></script>
<script src="<?php echo base_url(); ?>/app-assets/js/scripts/footer.min.js"></script>


<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<?php if (current_url() == base_url() . "/admin" or current_url() == base_url() . "/guru" or current_url() == base_url() . "/tata-usaha") { ?>
    <script src="<?php echo base_url(); ?>/app-assets/js/scripts/pages/dashboard-analytics.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/vendors/js/charts/chart.min.js"></script>

<?php } ?>
<?php if (current_url() == base_url() . "/admin/profile" or current_url() == base_url() . "/guru/profile" or current_url() == base_url() . "/tata-usaha/profile") { ?>
    <script src="<?php echo base_url(); ?>/app-assets/js/scripts/pages/app-user.js"></script>
<?php } ?>
<?php if (current_url() == base_url() . "/admin/settings") { ?>
    <script src="<?php echo base_url(); ?>/app-assets/js/scripts/pages/app-settings.js"></script>
<?php } ?>
<?php if (current_url() == base_url() . "/admin/settings/year") { ?>
    <script src="<?php echo base_url(); ?>/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/js/scripts/pages/app-settings_table.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/js/scripts/datatables/datatable.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/js/scripts/forms/select/form-select2.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<?php } ?>
<?php if (current_url() == base_url() . "/admin/tu/surat_keluar" or current_url() == base_url() . "/guru/tu/surat_keluar" or current_url() == base_url() . "/tata-usaha/tu/surat_keluar") { ?>
    <script src="<?php echo base_url(); ?>/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/js/scripts/pages/app-surat_keluar.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/js/scripts/datatables/datatable.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/js/scripts/forms/select/form-select2.js"></script>

    <script src="<?php echo base_url(); ?>/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<?php } ?>
<?php if (current_url() == base_url() . "/admin/siswa" or current_url() == base_url() . "/guru/siswa" or current_url() == base_url() . "/tata-usaha/siswa") { ?>
    <script src="<?php echo base_url(); ?>/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/js/scripts/pages/app-table.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/js/scripts/datatables/datatable.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/js/scripts/forms/select/form-select2.js"></script>

<?php } ?>
<?php if (current_url() == base_url() . "/admin/siswa/import") { ?>
    <script src="<?php echo base_url(); ?>/app-assets/js/scripts/pages/app-import.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/js/scripts/forms/select/form-select2.js"></script>

<?php } ?>

<?php if (current_url() == base_url() . "/admin/guru" or current_url() == base_url() . "/guru/guru" or current_url() == base_url() . "/tata-usaha/guru") { ?>
    <script src="<?php echo base_url(); ?>/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/js/scripts/pages/app-guru.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/js/scripts/datatables/datatable.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/js/scripts/forms/select/form-select2.js"></script>
<?php } ?>

<?php if (current_url() == base_url() . "/admin/menu_settings") { ?>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>/app-assets/js/scripts/jquery.mjs.nestedSortable.js"></script>
<?php } ?>

<!-- END: Page JS-->