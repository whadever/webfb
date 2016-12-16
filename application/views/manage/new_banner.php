<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <h3>Upload New Banner</h3>      
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-xs-12">
      <?php echo form_open_multipart('manage/new_banner')?>
      <div class="form-group">
         <label class="control-label" for="banner">Banner Picture</label>
          <input type="file" class="form-control" id="banner" name="banner" required="1">
      </div>
      <div class="form-group">
         <label class="control-label" for="caption">Caption</label>
          <textarea class="form-control" id="caption" name="caption"></textarea>
      </div>
      <div class="form-group">
         <label class="control-label" for="link">Link To</label>
          <input type="text" class="form-control" id="link" name="link">
      </div>
      <div class="form-group">
        <input type="submit" name="submit" class="btn btn-primary"></a>
      </div>
      <?php echo form_close()?>
    </div>
  </div>
</div>