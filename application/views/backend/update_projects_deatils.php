<?php $projects_deatils = $this->db->get_where('project_deatils', array('id' => $project_deatils_id))->row_array(); ?>
  <div class="row">
  	<div class="col-md-2"></div>
  	<div class="col-md-8">
  		<form method="post" action="<?php echo site_url('admin/projects_deatils/update/'.$project_deatils_id); ?>" class="custom_form">
      <h4 class="mt-1" style="text-align: center;">Project Deatils</h4>
        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="validationCustom01">Project Name</label>
            <input type="text" name="name" value="<?php echo $projects_deatils['name'] ?>" class="form-control" id="validationCustom01" required>
          </div>
          <div class="col-md-12 mb-3">
          <input type="file" name="file" class="custom-file-input" id="validatedCustomFile">
            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
        </div>  
          <div class="col-md-12 mb-3">
            <label for="validationCustom02">Tittle</label>
            <input type="text" name="tittle" value="<?php echo $projects_deatils['tittle'] ?>" class="form-control" id="validationCustom02" required>
          </div>

          <div class="col-md-12 mb-3">
            <label for="validationCustomUsername">Client Name</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend"></span>
              </div>
              <input type="text" name="client" value="<?php echo $projects_deatils['client'] ?>" class="form-control" id="validationCustomUsername"  aria-describedby="inputGroupPrepend" required>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="validationCustom03">Website Name</label>
            <input type="text" name="website" value="<?php echo $projects_deatils['website'] ?>" class="form-control" id="validationCustom03"required>
          </div>

          <div class="col-md-12 mb-3">
            <label for="validationCustom04">Completed Date</label>
            <input type="text" name="date" value="<?php echo $projects_deatils['complite'] ?>" class="form-control" id="validationCustom04" required>
          </div>

          <div class="col-md-12 mb-3">
            <label for="validationCustom05">Deatils</label>
           <textarea name="deatils" value="<?php echo $projects_deatils['deatils'] ?>" class="form-control" placeholder="Deatils about project"></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <input type="submit" class="btn btn-primary w-50" name="" value="Update">
          </div>
          <div class="col-12 text-center">
            <a class="btn btn-info" href="<?php echo site_url('admin/projects_deatils'); ?>">
              Back
            </a>
          </div>
        </div>
  </form>
</div>
