<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <h3>Main Page Appearance Settings</h3>      
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <h4>Sliding Banner Content</h4>
      <a class="btn btn-primary" style="margin-bottom: 10px;" href="<?php echo base_url('manage/new_banner')?>">Add New</a>
      <p>Ukuran yang disarankan 1836x702 atau gambar dengan ratio yang sama</p>
      <table class="table table-bordered">
        <thead><tr>
          <th>Picture</th>
          <th>Caption</th>
          <th>Link</th>
          <th>Action</th>
        </tr></thead>
        <tbody>
          <?php if ($banners!=NULL):?>
          <?php foreach ($banners as $banner):?>
            <tr>
              <td><?php echo $banner->picture?></td>
              <td><?php echo $banner->caption?></td>
              <td><?php echo $banner->link?></td>
              <td>Edit | Delete</td>
            </tr>
          <?php endforeach?>
        <?php endif?>
        </tbody>
      </table>
    </div>
  </div>
</div>



