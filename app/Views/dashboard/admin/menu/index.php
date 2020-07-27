<style type="text/css">
    .placeholder {
        outline: 1px dashed #4183C4;
    }

    .mjs-nestedSortable-error {
        background: #fbe3e4;
        border-color: transparent;
    }

    #tree {
        width: 550px;
        margin: 0;
    }

    ol {
        max-width: auto;
        padding-left: 30px;
        list-style-type: none;

    }

    ol.sortable,
    ol.sortable ol {
        list-style-type: none;

    }

    .sortable li div {
        border: 1px solid #d4d4d4;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        cursor: move;
        border-color: #D4D4D4 #D4D4D4 #BCBCBC;
        margin: 0;
        padding: 3px;

    }

    li.mjs-nestedSortable-collapsed.mjs-nestedSortable-hovering div {
        border-color: #999;
    }

    .disclose,
    .expandEditor {
        cursor: pointer;
        width: 20px;
        display: none;
    }

    .sortable li.mjs-nestedSortable-collapsed>ol {
        display: none;
    }

    .sortable li.mjs-nestedSortable-branch>div>.disclose {
        display: inline-block;
    }

    .sortable span.ui-icon {
        display: inline-block;
        margin: 0;
        padding: 1px;
    }

    .menuDiv {
        background: #FFF;
    }

    .menuEdit {
        background: #EBEBEB;

    }

    .itemTitle {
        vertical-align: middle;
        cursor: pointer;
        padding-left: 20px;
    }

    .deleteMenu {
        float: right;
        cursor: pointer;
    }

    h1 {
        font-size: 2em;
        margin-bottom: 0;
    }

    h2 {
        font-size: 1.2em;
        font-weight: 400;
        font-style: italic;
        margin-top: .2em;
        margin-bottom: 1.5em;
    }

    h3 {
        font-size: 1em;
        margin: 1em 0 .3em;
    }

    p,
    ol,
    ul,
    pre,
    form {
        margin-top: 0;
        margin-bottom: 1em;
    }

    dl {
        margin: 0;
    }

    dd {
        margin: 0;
        padding: 0 0 0 1.5em;
    }

    code {
        background: #e5e5e5;
    }

    input {
        vertical-align: text-bottom;
    }

    .notice {
        color: #c33;
    }
</style>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Tahun Pelajaran</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('admin/'); ?>">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Tahun Pelajaran
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- users edit start -->
            <section class="basic-datatable">
                <div class="row ">
                    <div class="col-md-8 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-header">
                                    <div class="col-md-8">
                                        <div class="h4">Posisi Menu</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <?php echo form_open(base_url('/admin/menu_settings/save'), 'class="form-horizontal ", id="form_menu"');  ?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <?= $menu_ul; ?>
                                        </div>

                                    </div>

                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-default btn-success float-right" id="btn-save-menu">Simpan Posisi</button>
                                        </div>
                                        <?= form_close(); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-header">
                                    <div class="col-md-8">
                                        <div class="h4">Menu Baru</div>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <?php echo form_open(base_url('/admin/menu_settings/add'), 'class="form-horizontal ", id="form_add"');  ?>
                                    <div class="row">
                                        <div class="col-12">
                                            <fieldset class="form-label-group">
                                                <input name="title" type="text" class="form-control" id="floating-label1" placeholder="Menu Label">
                                                <label for="floating-label1">Menu Label</label>
                                            </fieldset>
                                            <fieldset class="form-label-group">
                                                <input name="url" type="text" class="form-control" id="floating-label1" placeholder="Menu Url">
                                                <label for="floating-label1">Menu Url</label>

                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-default btn-success float-right" id="btn-add-menu">Tambah Menu</button>
                                        </div>
                                    </div>
                                </div>
                                <?= form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
    </section>

</div>
</div>
<script>
    $(document).ready(function() {
        var ns = $('ol.sortable').nestedSortable({
            forcePlaceholderSize: true,
            handle: 'div',
            helper: 'clone',
            items: 'li',
            opacity: .6,
            placeholder: 'placeholder',
            revert: 250,
            tabSize: 25,
            tolerance: 'pointer',
            toleranceElement: '> div',
            maxLevels: 2,
            isTree: true,
            expandOnHover: 700,
            startCollapsed: false,
            update: function() {
                $('#btn-save-menu').attr('disabled', false);
            }
        });


        $('#btn-save-menu').attr('disabled', true);
        $('#form_menu').submit(function() {
            menu_serialized = $('ol.sortable').nestedSortable('serialize');
            $('#btn-save-menu').attr('disabled', true);
            var test = document.querySelector('input[name=csrf_token_web]').value;
            menu_serialized += '&csrf_token_web=' + test;
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: menu_serialized,
                error: function() {
                    $('#btn-save-menu').attr('disabled', false);
                    alert("ERROR");

                },
                success: function(data) {
                    alert("MenuController has been saved");
                }
            });
            return false;
        });

        $('#form_add').submit(function() {
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                error: function() {
                    $('#btn-save-menu').attr('disabled', false);
                    alert("ERROR");
                },
                success: function(data) {
                    $('#form_add')[0].reset();
                    $('#easymm')
                        .append(data);

                }
            });
            return false;
        });
    });
</script>