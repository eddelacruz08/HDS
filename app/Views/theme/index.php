<?= view('App\Views\theme\header') ?>
     <?php if (!empty($profile)): ?>
       <!-- Main content -->
               <div class="row mt-3">
                 <div class="col-md-3">

                   <!-- Profile Image -->
                   <div class="card card-primary card-outline">
                     <div class="card-body box-profile">
                       <div class="text-center">
                         <img class="profile-user-img img-fluid img-circle"
                              src="http://localhost/HDS/public/img/user.png"
                              alt="User profile picture">
                       </div>
                       <a href="<?=base_url().'guests/show/'.$profile[0]['id']?>">
                         <h3 class="profile-username text-center"><?=ucfirst($profile[0]['full_name'])?></h3>
                       </a>
                       <?php
                           if($profile[0]['user_type'] == 's'){$user_type = 'Student';}
                           elseif($profile[0]['user_type'] == 'f'){$user_type = 'Faculty';}
                           elseif($profile[0]['user_type'] == 'e'){$user_type = 'Employee';}
                           elseif($profile[0]['user_type'] == 'o'){$user_type = 'Outsider';}
                           else{$user_type = 'None';}
                       ?>
                       <p class="text-muted text-center"><?=ucfirst($user_type)?></p>
                       <p class="text-muted text-center"><?=ucfirst($profile[0]['gender'] == 'm' ? 'Male': 'Female').' | '.date_diff(date_create($profile[0]['birthdate']), date_create(date('Y-m-d')))->format("%y") . ' year(s) old'?></p>

                       <hr>
                       <div class="row" align="center">
                         <div class="col-sm-12">
                           <i class="fas fa-user-edit text-orange"></i> <a class="text-dark" href="<?=base_url() . 'guests/edit/' . $profile[0]['id'] ?>"> Edit</a>
                         </div>
                         <!-- <div class="col-sm-6">
                           <i class="fas fa-trash-alt text-red"></i> <a class="text-dark" href="<?=base_url() . 'guests/delete/' . $profile[0]['id'] ?>"> Delete</a>
                         </div> -->
                       </div>
                       <hr>

                         <li class="list-group-item">
                           <?php if (!empty($checklist_counts)): ?>
                           <?php foreach ($checklist_counts as $checklist_guest_count){
                             $checklist_c = $checklist_guest_count['count_checklist'];
                           }
                           ?>
                           <b>No. of Checklists</b> <a class="float-right"><?= $checklist_c ?></a>
                         <?php endif;?>
                         </li>
                         <li class="list-group-item">
                           <?php if (!empty($visit_counts)): ?>
                           <?php foreach ($visit_counts as $visit_guest_count){
                             $visit_c = $visit_guest_count['count_visit'];
                           }
                           ?>
                           <b>No. of Visits</b> <a class="float-right"><?= $visit_c ?></a>
                         <?php endif;?>
                         </li>
                         <li class="list-group-item">
                           <?php if (!empty($assess_counts)): ?>
                           <?php foreach ($assess_counts as $assess_guest_count){
                             $assess_c = $assess_guest_count['count_assess'];
                           }
                           ?>
                           <b>No. of Assess</b> <a class="float-right"><?= $assess_c ?></a>
                         <?php endif;?>
                         </li>
                         <!-- <hr>
                         <center>
                         <button type="button" style="border: 1px solid black;" class="btn btn-default btn-md" name="button"><i class="fas fa-print"></i> Generate Checklist</button>
                         </center> -->
                     </div>
                     <!-- /.card-body -->
                   </div>
                   <!-- /.card -->

                   <!-- About Me Box -->
                   <div class="card card-primary">
                     <div class="card-header">
                       <h5 class="text-center">About Me</h5>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">

                       <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                       <p class="text-muted"><?=ucwords($profile[0]['address'] . ', ' . $profile[0]['city'] . ', ' . $profile[0]['province'] . ' ' . $profile[0]['postal'])?></p>

                       <hr>

                       <strong><i class="fas fa-book mr-1"></i> Contact Number</strong>
                       <br>
                       <p class="text-muted">
                         <?='<i class="fa fa-mobile-alt"> </i> '.'| '.$profile[0]['cellphone_no']?><br>
                         <?='<i class="fas fa-phone"> </i> '.'| '.$profile[0]['landline_no']?>
                       </p>

                       <hr>
                       <strong><i class="fas fa-envelope"> </i> Email Address</strong>

                       <p class="text-muted">
                         <?=' '.$profile[0]['email']?>
                       </p>

                       <hr>

                       <strong><i class="fas fa-birthday-cake"> </i> Birthdate</strong>

                       <p class="text-muted">
                         <?=' '.date('F d, Y', strtotime($profile[0]['birthdate']))?>
                       </p>
                     </div>
                     <!-- /.card-body -->
                   </div>
                   <!-- /.card -->
                 </div>
                 <!-- /.col -->
                 <div class="col-md-9">
                   <div class="card">
                     <div class="card-body p-2">
                       <a href="<?= base_url(). 'visits' . '/'?><?= $visit_id != 0 ? 'end/' . $visit_id .'/'. $profile[0]['id'] : 'start/' . $profile[0]['id']?> " class="text-white">
                        <?= $visit_id != 0 ? ' <button type="button" class="btn btn-danger btn-md" style=""><i class="fas fa-sign-out-alt"></i> End Session</button>': ' <button type="button" class="btn btn-info btn-md" style=""><i class="fas fa-clipboard"></i> Start to take Health Declaration Form</button>'?>
                       </a>
                       <?php if ($visit_id != 0): ?>
                         <a href="<?=base_url(). 'checklists/capture/' . $profile[0]['id']?>" class="text-white" <?=$checklist_recorded == 0 ? '': 'style="pointer-events: none"'?>>
                         <button type="button" class="btn btn-default btn-md" style="border: 1px solid gray;">
                           <i id="vitalsicon" data-toggle="modal" data-target=".bd-example-modal-lg" class="fas fa-clipboard-check text-dark"></i>  Fill-up a Health Declaration Form.
                         </button>
                         </a>
                         <a href="<?=base_url(). 'checklists/scan/' . $profile[0]['id']?>" class="text-white" <?=$checklist_recorded == 0 ? '': 'style="pointer-events: none"'?>>
                         <button type="button" class="btn btn-dark btn-md float-right">
                           <i id="vitalsicon" data-toggle="modal" data-target=".bd-example-modal-lg" class="fas fa-qrcode text-white"></i> Scan Qr Code
                         </button>
                         </a>
                       <?php endif; ?>
                    </div>
                   </div>

        <?php endif; ?>
        <?php if (isset($function_title)): ?>
          <?php $data['function_title'] = $function_title ?>
          <?php echo view($viewName, $data); ?>
          <?php else: ?>
            <?php echo view($viewName); ?>
        <?php endif; ?>
<?= view('App\Views\theme\footer') ?>
<?= view('App\Views\theme\notification') ?>
