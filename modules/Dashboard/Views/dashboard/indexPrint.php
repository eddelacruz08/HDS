<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="<?= base_url() ?>/public/img/PUPLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/adminlte.css">
    <link href="<?= base_url() ?>public/plugins/select2/css/select2.min.css"/>
    <link href="<?= base_url() ?>public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css"/>
    <!-- <link rel="stylesheet" href="<?= base_url() ?>public/css/bootstrap-theme.min.css"> -->
    <link rel="stylesheet" href="<?= base_url() ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/font-awesome/css/all.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/css/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/css/style.css">
    <link href="<?= base_url() ?>public/plugins/chart.js/Chart.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>public/DataTables/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>public/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
    <script type="text/javascript" src="<?= base_url() ?>public/font-awesome/js/all.min.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>public/css/ionicons.min.css">

    <style media="screen">
    @media print {
      #noPrint{
          display:none;
            }
        }
    </style>
    <title><?= SYSTEM_NAME ?></title>
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <div class="container-fluid">

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
                  <div class="row" id="noPrint">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                              <div class="col-md-6">
                                  <h3 class="text-dark"><i class="fas fa-tachometer-alt"> </i> <?=$function_title?> </h3>
                              </div>
                              <div class="col-md-6">
                                <a href="<?=base_url().'dashboard'?>">
                                  <button type="button" class="btn btn-default float-right noPrint" name="button"><i class="fas fa-arrow-left"></i> Go Back</button>
                                </a>
                              </div>
                            </div>
                      </div>
                      <!-- /.card-body -->
                    </div>

                  </div>
                  <!-- /.col -->
                <!-- /.row -->

              <div class="col-md-8">
                <!-- PIE CHART -->
                      <div class="card">
                        <div class="card-header">
                            <h2 class="card-title"><i class="fas fa-chart-pie"> </i> Pie Chart</h2>
                            <button onclick="window.print();" type="button" class="btn float-right noPrint"> <i class="fas fa-print"></i>
                            Print Report
                            </button>
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
                                <div class="small-box bg-gray" style="margin-bottom: 5px; padding: 10px; height: 100%;">
                                    <?php foreach ($patient_total as $patients){
                                      $patients_count = $patients['COUNT(*)'];
                                    }
                                    ?>
                                    <center><h2><?= $patients_count?></h2>

                                    <h4>Total of Guest(s)</h4></center>
                                  <a href="<?= base_url()?>guests" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                  <div class="icon bottom" style="height: 100%;">
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
        </div>
      </div>
    </div>

        <!-- Optional JavaScript -->
        <script src="<?= base_url() ?>public/js/jquery.min.js"></script>
        <script src="<?= base_url() ?>public/dist/js/adminlte.min.js"></script>
        <script src="<?= base_url() ?>public/plugins/chart.js/Chart.min.js"></script>
        <script src="<?= base_url() ?>public/js/moment.min.js"></script>
        <script src="<?= base_url() ?>public/plugins/daterangepicker/daterangepicker.js"></script>
        <script src="<?= base_url() ?>public/plugins/moment/moment-with-locales.js"></script>
        <script src="<?= base_url() ?>public/plugins/select2/js/select2.full.min.js"></script>
        <script>
          $(function () {
            //Initialize Select2 Elements
            $('.select2bs4').select2({
              theme: 'bootstrap4'
            })
          })
        </script>
        <script type="text/javascript">
          var baseURL = "<?php echo base_url(); ?>";
        </script>
        <script>
            $(document).ready(function () {
                $(".text").hide();
                $("#one_a").click(function () {
                    $(".text").show();
                });
                $("#one_a1").click(function () {
                    $(".text").hide();
                });
            });
            $(document).ready(function () {
                $(".text1").hide();
                $("#one_b").click(function () {
                    $(".text1").show();
                });
                $("#one_b1").click(function () {
                    $(".text1").hide();
                });
            });
            $(document).ready(function () {
                $(".text2").hide();
                $("#one_c").click(function () {
                    $(".text2").show();
                });
                $("#one_c1").click(function () {
                    $(".text2").hide();
                });
            });
            $(document).ready(function () {
                $(".text3").hide();
                $("#one_d").click(function () {
                    $(".text3").show();
                });
                $("#one_d1").click(function () {
                    $(".text3").hide();
                });
            });
            $(document).ready(function () {
                $(".text4").hide();
                $("#one_e").click(function () {
                    $(".text4").show();
                });
                $("#one_e1").click(function () {
                    $(".text4").hide();
                });
            });
            $(document).ready(function () {
                $(".text5").hide();
                $("#one_f").click(function () {
                    $(".text5").show();
                });
                $("#one_f1").click(function () {
                    $(".text5").hide();
                });
            });
            $(document).ready(function () {
                $(".text6").hide();
                $("#two_travel").click(function () {
                    $(".text6").show();
                });
                $("#two_travel1").click(function () {
                    $(".text6").hide();
                });
            });
            $(document).ready(function () {
                $(".text7").hide();
                $("#four_existing").click(function () {
                    $(".text7").show();
                });
                $("#four_existing1").click(function () {
                    $(".text7").hide();
                });
            });
        </script>

        <script src="<?= base_url() ?>public/js/popper.min.js"></script>
        <script src="<?= base_url() ?>public/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>public/js/scripts.js"></script>
        <script src="<?= base_url() ?>public/js/sweetalert2@9.js"></script>
        <!-- <script src="<?= base_url() ?>public/select2/dist/js/select2.min.js"></script> -->
        <script src="<?= base_url() ?>public/chart/Chart.min.js"></script>
        <script src="<?= base_url() ?>public/DataTables/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>public/DataTables/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?= base_url() ?>public/chart/utils.js"></script>
        <script src="<?= base_url() ?>public/js/myAlerts.js"></script>

        <script src="<?= base_url() ?>public/js/select2.full.min.js"></script>
        <script src="<?= base_url() ?>public/js/myJavascript.js"></script>
        <script src="<?= base_url() ?>public/js/user_profile.js"></script>
        <script src="<?= base_url() ?>public/js/loader.js"></script>

        <script>
        $(document).ready(function(){
          $('input[type="radio"]').click(function(){
              var inputValue = $(this).attr("id");
              var targetBox = $("." + inputValue);
              $(".box").not(targetBox).hide();
              $(targetBox).show();
              });
          });
          $(document).ready(function(){
          $('input[type="radio"]').click(function(){
              var inputValue = $(this).attr("id");
              var targetBox = $("." + inputValue);
              $(".box2").not(targetBox).hide();
              $(targetBox).show();
              });
          });
            $(document).ready(function() {
                $('[data-toggle="tooltip"]').tooltip();
            });

            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
            });

            $(document).ready(function() {
                $('.index-table').DataTable({
                });
            });

        </script>
        <script>
        $(function () {
          /* ChartJS
          * -------
          * Here we will create a few charts using ChartJS
          */

          //-------------
          //- PIE CHART -
          //-------------
          // Get context with jQuery - using jQuery's .get() method.
          <?php if (isset($student_total)): ?>
          var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
          var pieData        = {
            labels: [
              'Student(s)',
              'Faculty(s)',
              'Employee(s)',
              'Outsider(s)',
            ],
            datasets: [
              {
                data: [
                  <?php
                  foreach ($student_total as $student) {
                    ?>
                      <?php echo ucwords($student['COUNT(*)']) ?>,
                    <?php
                  }
                  ?>
                  <?php
                  foreach ($faculty_total as $faculty) {
                    ?>
                      <?php echo ucwords($faculty['COUNT(*)']) ?>,
                    <?php
                  }
                  ?>
                  <?php
                  foreach ($employee_total as $employee) {
                    ?>
                      <?php echo ucwords($employee['COUNT(*)']) ?>,
                    <?php
                  }
                  ?>
                  <?php
                  foreach ($outsider_total as $outsider) {
                    ?>
                      <?php echo ucwords($outsider['COUNT(*)']) ?>,
                    <?php
                  }
                  ?>

                ],
                backgroundColor : ['#00c0ef', '#f56954', '#00a65a', '#f39c12'],
              }
            ]
          }
          var pieOptions     = {
            maintainAspectRatio : false,
            responsive : true,
          }
          //Create pie or douhnut chart
          // You can switch between pie and douhnut using the method below.
          var pieChart = new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
          })
          <?php endif; ?>

            //-------------
            //- DONUT CHART -
            //-------------
            //STUDENTS
            // Get context with jQuery - using jQuery's .get() method.
            <?php if (isset($student_male)): ?>
            var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
            var donutData        = {
              labels: [
                  'Male',
                  'Female'
              ],
              datasets: [
                {
                  data: [
                    <?php
                    foreach ($student_male as $male) {
                      ?>
                        <?php echo $male['COUNT(*)'] ?>,
                      <?php
                    }
                    ?>
                    <?php
                    foreach ($student_female as $female) {
                      ?>
                        <?php echo $female['COUNT(*)'] ?>
                      <?php
                    }
                    ?>
                  ],
                  backgroundColor : ['#00c0ef', '#f56954'],
                }
              ]
            }
            var donutOptions     = {
              maintainAspectRatio : false,
              responsive : true,
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            var donutChart = new Chart(donutChartCanvas, {
              type: 'doughnut',
              data: donutData,
              options: donutOptions
            })
            <?php endif; ?>
            //-------------
            //- DONUT CHART -
            //-------------
            //Faculty
            // Get context with jQuery - using jQuery's .get() method.
            <?php if (isset($faculty_male)): ?>
            var donutChartCanvas = $('#donutChart2').get(0).getContext('2d')
            var donutData        = {
              labels: [
                  'Male',
                  'Female'
              ],
              datasets: [
                {
                  data: [
                    <?php
                    foreach ($faculty_male as $male) {
                      ?>
                        <?php echo ucwords($male['COUNT(*)']) ?>,
                      <?php
                    }
                    ?>
                    <?php
                    foreach ($faculty_female as $female) {
                      ?>
                        <?php echo ucwords($female['COUNT(*)']) ?>
                      <?php
                    }
                    ?>
                  ],
                  backgroundColor : ['#00c0ef', '#f56954'],
                }
              ]
            }
            var donutOptions     = {
              maintainAspectRatio : false,
              responsive : true,
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            var donutChart = new Chart(donutChartCanvas, {
              type: 'doughnut',
              data: donutData,
              options: donutOptions
            })
            <?php endif; ?>
            //-------------
            //- DONUT CHART -
            //-------------
            //Employee
            // Get context with jQuery - using jQuery's .get() method.
            <?php if (isset($employee_male)): ?>
            var donutChartCanvas = $('#donutChart3').get(0).getContext('2d')
            var donutData        = {
              labels: [
                  'Male',
                  'Female'
              ],
              datasets: [
                {
                  data: [
                    <?php
                    foreach ($employee_male as $male) {
                      ?>
                        <?php echo ucwords($male['COUNT(*)']) ?>,
                      <?php
                    }
                    ?>
                    <?php
                    foreach ($employee_female as $female) {
                      ?>
                        <?php echo ucwords($female['COUNT(*)']) ?>
                      <?php
                    }
                    ?>
                  ],
                  backgroundColor : ['#00c0ef', '#f56954'],
                }
              ]
            }
            var donutOptions     = {
              maintainAspectRatio : false,
              responsive : true,
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            var donutChart = new Chart(donutChartCanvas, {
              type: 'doughnut',
              data: donutData,
              options: donutOptions
            })
            <?php endif; ?>
            //-------------
            //- DONUT CHART -
            //-------------
            //Outsider
            // Get context with jQuery - using jQuery's .get() method.
            <?php if (isset($outsider_male)): ?>
            var donutChartCanvas = $('#donutChart4').get(0).getContext('2d')
            var donutData        = {
              labels: [
                  'Male',
                  'Female'
              ],
              datasets: [
                {
                  data: [
                    <?php
                    foreach ($outsider_male as $male) {
                      ?>
                        <?php echo ucwords($male['COUNT(*)']) ?>,
                      <?php
                    }
                    ?>
                    <?php
                    foreach ($outsider_female as $female) {
                      ?>
                        <?php echo ucwords($female['COUNT(*)']) ?>
                      <?php
                    }
                    ?>
                  ],
                  backgroundColor : ['#00c0ef', '#f56954'],
                }
              ]
            }
            var donutOptions     = {
              maintainAspectRatio : false,
              responsive : true,
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            var donutChart = new Chart(donutChartCanvas, {
              type: 'doughnut',
              data: donutData,
              options: donutOptions
            })
            <?php endif; ?>
          })
        </script>


      </body>
    </html>
