        <?php $success=$this->session->flashdata('success'); ?>
          <?php $er=$this->session->flashdata('er'); ?>
          <?php if(!empty($success)) { ?>
            <div class="alert alert-success fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> <?php   echo $success;  ?>
            </div>
          <?php } ?>
          <?php if(!empty($er)) { ?>
              <div class="alert alert-danger fade in">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Failed!</strong> <?php   echo $er;  ?>
              </div>
          <?php } ?>
          <?php if(!empty(validation_errors())) { ?>
              <div class="alert alert-danger fade in">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Failed! Validation error!!</strong> <?php echo validation_errors(); ?>
              </div>
          <?php } ?>

          <?php if(isset($error)){?>
              <div class="alert alert-danger fade in">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Photo Uploading Error!</strong> <?php echo $error; ?>
              </div>
          <?php } ?>

          <?php if(isset($restrited)){?>
              <div class="alert alert-danger fade in">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Restricted!</strong> <?php echo $restricted; ?>
              </div>
          <?php } ?>

          <?php if(!empty($logout_success)) { ?>
            <div class="alert alert-success fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> <?php   echo $logout_success;  ?>
            </div>
          <?php } ?>
          