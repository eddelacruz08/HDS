
<br>
        </div>
            <div class="container-fluid">
                <?php foreach ($student_total as $student){
                  $student_count = $student['COUNT(*)'];
                }
                ?>
                <?php foreach ($faculty_total as $faculty){
                  $faculty_count = $faculty['COUNT(*)'];
                }
                ?>
                <?php foreach ($employee_total as $employee){
                  $employee_count = $employee['COUNT(*)'];
                }
                ?>
                <?php foreach ($outsider_total as $outsider){
                  $outsider_count = $outsider['COUNT(*)'];
                }
                ?>
                  <div class="row">
                    <div class="col-12">
                      <div class="row">
                          <div class="col-md-8">
                              <!-- <h3 class="text-gray" id="clockDisplay"> </h3> -->
                              <?php
                                date_default_timezone_get();
                                echo"<h3 class='text-gray'>".date('F d, Y | h:i a')."</h3>";
                              ?>
                          </div>
                          <div class="col-md-4">
                            <?php foreach ($guest_defined as $students_wow){
                              $students_count_wow = $students_wow['count_guest_define'];
                            }
                            ?>
                            <?php if(!empty($students_count_wow)):?>
                            <button type="button" id="print-btn" class="btn btn-default btn-lg float-right buttun" style="border: 0; background-color: lightgray;" data-toggle="modal" data-target="#modal-lg">
                            <i class="fas fa-bell"> </i> Patient Detected <span class="badge badge-danger" style="font-size: 15px;"> <?= $students_count_wow?></span>
                              <audio src="http://localhost/HDS/public/js/notification.mp3" autoplay></audio>
                            </button>
                            <?php else:?>
                              <button type="button" id="print-btn" class="btn btn-lg float-right noPrint" style="background-color: white; border: 1px solid gray;" data-toggle="modal" data-target="#modal-lg">
                                <i class="fas fa-bell"> </i>  Patient Detected <span class="badge badge-success" style="font-size: 15px;"> <?= $students_count_wow?></span>
                              </button>
                            <?php endif;?>
                          </div>
                        </div>
                        <br>
                      <div class="card">
                        <div class="card-body"style="padding: 20px;">
                          <div class="row">
                              <div class="col-md-6">
                                <h4 class="text-dark"><i class="fas fa-tachometer-alt"> </i> <?=$function_title?> </h4>
                              </div>
                              <div class="col-md-6">
                              <button onclick="window.print();" type="button" class="btn float-right" id="print-btn">
                                <i class="fas fa-print"></i> Print Dashboard
                              </button>
                              </div>
                            </div>
                          </div>
                          <!-- /.card-body -->
                            <!-- modal -->
                            <div class="modal fade" id="modal-lg">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title">Defined Patient</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <table align="center" class="table table-sm">
                                          <thead>
                                            <tr class="text-center">
                                              <th>#</th>
                                              <th>Full Name</th>
                                              <th>Body Temperature</th>
                                              <th>Status</th>
                                              <th>Action</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <?php $ctr = 1;?>
                                            <?php foreach ($guest_defined_list as $guest_status_list): ?>
                                              <?php
                                              if($guest_status_list['status_defined'] == 'd'){
                                                $status_defined = 'Defined';
                                              }
                                              elseif($guest_status_list['status_defined'] == 'u'){
                                                $status_defined = 'Undefined';
                                              }else{
                                                $status_defined = 'Nothing';
                                              }
                                              ?>
                                            <tr class="text-center" id="<?php echo $guest_status_list['id']; ?>">
                                              <th scope="row"><?= $ctr++ ?></th>
                                              <td><?= ucwords($guest_status_list['full_name']) ?></td>
                                              <td style="color: red; font-size: 20px;">
                                                <?= $guest_status_list['temperature']?> ℃
                                              </td>
                                              <td>
                                                <?= $status_defined ?>
                                              </td>
                                              <td>
                                                <?php users_action('checklists', $_SESSION['userPermmissions'], $guest_status_list['visit_id'], $guest_status_list['patient_id']); ?>
                                              </td>
                                            </tr>
                                          <?php endforeach;?>
                                          </tbody>
                                        </table>

                                      </div>
                                      <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Okay</button>
                                      </div>
                                    </div>
                                    <!-- /.modal-content -->
                                  </div>
                                  <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->

                    </div>

                  </div>
                  <!-- /.col -->
                <!-- /.row -->

              <div class="col-md-8">
                <!-- PIE CHART -->
                      <div class="card">
                        <div class="card-header">
                            <h2 class="card-title"><i class="fas fa-chart-pie"> </i> Pie Chart</h2>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <div class="d-md-flex">
                            <div class="flex-fill">
                              <!-- Map will be created here -->
                              <div class="row">
                              <div class="card-body col-md-8">
                                <canvas id="pieChart" style="min-height: 230px; height: 230px; max-height: 250px; max-width: 100%; margin: 0;"></canvas>
                              </div>
                              <div class="card-body col-md-4">
                                <div class="small-box bg-gray" style="margin-bottom: 5px; padding: 10px;">
                                    <?php foreach ($patient_total as $patients){
                                      $patients_count = $patients['COUNT(*)'];
                                    }
                                    ?>
                                    <center><h2><?= $patients_count?></h2>

                                    <h4>Total of Guest(s)</h4></center>
                                  <a href="<?= base_url()?>guests" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                  <div class="icon">
                                    <i class="fas fa-users"></i>
                                  </div>
                                </div>
                              </div>
                              </div>
                            </div>
                          </div><!-- /.d-md-flex -->
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                  </div>
                  <div class="col-md-4">
                      <!-- /.info-box -->
                      <div class="info-box mb-3 bg-info">
                        <span class="info-box-icon"><i class="fas fa-user-graduate"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Total of Student(s)</span>
                          <span class="info-box-number"><?=$student_count?></span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>

                      <!-- /.info-box -->
                      <div class="info-box mb-3 bg-danger">
                        <span class="info-box-icon"><i class="fas fa-chalkboard-teacher"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Total of Faculty(s)</span>
                          <span class="info-box-number"><?=$faculty_count?></span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                      <div class="info-box mb-3 bg-success">
                        <span class="info-box-icon"><i class="fas fa-user-tie"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Total of Employee(s)</span>
                          <span class="info-box-number"><?=$employee_count?></span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- Info Boxes Style 2 -->
                      <div class="info-box mb-3 bg-warning">
                        <span class="info-box-icon"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Total of Outsider(s)</span>
                          <span class="info-box-number"><?=$outsider_count?></span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
            <!-- /.info-box -->

          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="card">

              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3 text-center">
                    <div class="card-body text-blue"> Student's Gender
                    </div>
                    <canvas id="donutChart" style="min-height: 150px; height: 150px; max-height: 150px; max-width: 100%;"></canvas>
                  </div>
                  <div class="col-md-3 text-center">
                    <div class="card-body text-danger"> Faculty's Gender
                    </div>
                    <canvas id="donutChart2" style="min-height: 150px; height: 150px; max-height: 150px; max-width: 100%;"></canvas>
                  </div>
                  <div class="col-md-3 text-center">
                    <div class="card-body text-success"> Employee's Gender
                    </div>
                    <canvas id="donutChart3" style="min-height: 150px; height: 150px; max-height: 150px; max-width: 100%;"></canvas>
                  </div>
                  <div class="col-md-3 text-center">
                    <div class="card-body text-yellow"> Outsider's Gender
                    </div>
                    <canvas id="donutChart4" style="min-height: 150px; height: 150px; max-height: 150px; max-width: 100%;"></canvas>
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- <section class="content"> -->
          <!-- Info boxes -->
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <div class="info-box-content">
                  <span class="info-box-text bg-info text-center">Student</span>
                  <?php foreach ($student_male as $male):?>
                      <span class="info-box-text"><i class="text-info fas fa-mars"></i> Male: <?php echo $male['COUNT(*)'] ?></span>
                    <?php endforeach;?>
                  <?php foreach ($student_female as $female):?>
                  <span class="info-box-text"><i class="text-danger fas fa-venus"></i> Female: <?php echo $female['COUNT(*)'] ?></span>
                    <?php endforeach;?>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <div class="info-box-content">
                  <span class="info-box-text bg-danger text-center">Faculty</span>
                  <?php foreach ($faculty_male as $male):?>
                      <span class="info-box-text"><i class="text-info fas fa-mars"></i> Male: <?php echo $male['COUNT(*)'] ?></span>
                    <?php endforeach;?>
                  <?php foreach ($faculty_female as $female):?>
                  <span class="info-box-text"><i class="text-danger fas fa-venus"></i> Female: <?php echo $female['COUNT(*)'] ?></span>
                    <?php endforeach;?>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <div class="info-box-content">
                  <span class="info-box-text bg-success text-center">Employee</span>
                  <?php foreach ($employee_male as $male):?>
                      <span class="info-box-text"><i class="text-info fas fa-mars"></i> Male: <?php echo $male['COUNT(*)'] ?></span>
                    <?php endforeach;?>
                  <?php foreach ($employee_female as $female):?>
                  <span class="info-box-text"><i class="text-danger fas fa-venus"></i> Female: <?php echo $female['COUNT(*)'] ?></span>
                    <?php endforeach;?>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <div class="info-box-content">
                  <span class="info-box-text bg-warning text-center">Outsider</span>
                  <?php foreach ($outsider_male as $male):?>
                      <span class="info-box-text"><i class="text-info fas fa-mars"></i> Male: <?php echo $male['COUNT(*)'] ?></span>
                    <?php endforeach;?>
                  <?php foreach ($outsider_female as $female):?>
                  <span class="info-box-text"><i class="text-danger fas fa-venus"></i> Female: <?php echo $female['COUNT(*)'] ?></span>
                    <?php endforeach;?>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
