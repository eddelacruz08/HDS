<br>
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <h2><?= $function_title?></h2>
        </div>
        <div class="col-md-6">
            <button type="button" class="btn btn-danger float-right btn-md" name="button" data-toggle="modal" data-target="#modal-lg2">
              <i class="fas fa-print"></i> Generate Attendance List
            </button>
        </div>
      </div>

      <!-- modal -->
      <div class="modal fade" id="modal-lg2">
            <div class="modal-dialog modal-md">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Filter Data</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="<?=base_url(). 'visits/print'?>" method="post">
                      <div class="row">
                        <div class="col-md-12">
                          <label for="date">Date</label>
                          <div class="form-group">
                            <input type="date" class="form-control" name="date" id="date">
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-success float-right"><i class="far fa-file-pdf"></i> Generate</button>
                  </form>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->

      <br>
      <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
     <div class="table-responsive">
       <table class="table table-sm table-striped table-bordered index-table">
        <thead class="thead-dark">
          <tr class="text-center">
            <th>#</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Guest Type</th>
            <th>Active Guest</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody align="center">
          <?php $cnt = 1; ?>
          <?php foreach($visits as $visit): ?>
            <?php
            if($visit['user_type'] == 's'){
              $user_type = 'Student';
            }
            elseif($visit['user_type'] == 'f'){
              $user_type = 'Faculty';
            }
            elseif($visit['user_type'] == 'e'){
              $user_type = 'Employee';
            }
            elseif($visit['user_type'] == 'o'){
              $user_type = 'Outsider';
            }else{
              $user_type = 'Nothing';
            }
            ?>
          <tr id="<?php echo $visit['id']; ?>">
            <th scope="row"><?= $cnt++ ?></th>
            <td><?= ucwords($visit['full_name']) ?></td>
            <td><?= $visit['gender'] == 'm' ? 'Male':'Female' ?></td>
            <td><?= $user_type ?></td>
            <td><?= date('m-d-Y h:m a', strtotime($visit['created_at'])) ?> <?=$visit['updated_at'] == '' ? ' - Active': ' - ' . date('F d, Y', strtotime($visit['updated_at']))?></td>
            <td class="text-center">
              <?php
                guest_detail_link('guests', 'show-guest', $_SESSION['userPermmissions'], $visit['patient_id']);
              ?>

              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-lg">
                <i class="fas fa-sign-out-alt"></i> End Session
              </button>
              <!-- modal -->
              <div class="modal fade" id="modal-lg">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-body">
                      <br>
                      <h3 class="modal-title">Do you want to end your session?</h3>
                      <br>
                      <button type="button" class="btn btn-default float-left btn-md" data-dismiss="modal">Close</button>
                        <a href="<?= base_url(). 'visits' . '/'?><?= $visit != 0 ? 'end/' . $visit['id'] .'/'. $visit['patient_id'] : 'start/' . $visit['id']?> " class="text-white">
                         <?= $visit != 0 ? ' <button type="button" class="btn btn-success btn-md float-right" style=""> Okay</button>': ' <button type="button" class="btn btn-info btn-md" style=""><i class="fas fa-clipboard"></i> Start to take Health Declaration Form</button>'?>
                       </a>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
     </div>
   </div>
  </div>
<hr>
