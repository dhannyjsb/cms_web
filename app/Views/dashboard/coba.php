<?php $request = \Config\Services::request(); ?>

<h1>Upload to GDrive</h1>

<?php echo form_open_multipart(base_url($request->uri->getSegment(1) . '/coba_upload'), 'novalidate id="form_upload2 class="form_upload2"'); ?>
Pilih File:
<input type="file" name="file" id="file">
<input type="submit" value="Upload File" name="submit">
<?php form_close(); ?>

<div class="shortened">
    <p>Your call was successful! Check your drive for the following files:</p>
    <ul>
        <li><a href="https://drive.google.com/open?id=1tNRDGNLEmRsnfsPcaCB4X2i2JRi5GnEQ " target="_blank">asdasdasd </a></li>
    </ul>
</div>