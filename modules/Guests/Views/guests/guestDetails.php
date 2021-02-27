
<div class="card">
  <div class="card-header">
    <ul class="nav nav-pills">
      <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab"><i class="fas fa-clipboard-check"></i> Recent Checklist</a></li>
      <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab"><i class="fas fa-calendar-check"></i> Recent Visits</a></li>
      <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab"><i class="fas fa-history"></i> Health History Checklist</a></li>
    </ul>
  </div><!-- /.card-header -->
  <div class="card-body">
    <div class="tab-content">
      <div class="active tab-pane" id="activity">
        <!-- Post -->
        <?php if (empty($latest_checklist)): ?>
          <p class="card-text" style="font-style: italic;"><i class="fas fa-spinner"></i> None</p>
        <?php else: ?>
              <p>
                <label>Legend: </label>
                <button type="button" class="btn btn-danger" name="button"></button><span> Defined</span>
                <button type="button" class="btn btn-success" name="button"></button><span> Undefined</span>
                <a href="<?=base_url().'guests/print/'. $profile[0]['id'] ?>"><button class="btn btn-link float-right" type="button" name="button"> <i class="fas fa-file-pdf text-red"></i> Download Recent Checklist PDF</button></a>
              </p>
              <hr>

          <form>
            <?php foreach ($latest_checklist as $health): ?>
              <div class="row">
                <div class="col-md-4">
                  <label for="">Temperature</label>
                  <p>
                    <span><?= $health['temperature'] >= 37.1 ? '<span style="color: red"><button type="button" class="btn btn-danger">'.$temp.' ℃.</button></span>': '<span style="color: green"><button type="button" class="btn btn-success">'.$temp.' ℃.</button></span>'?></span>
                  </p>
                </div>
                <div class="col-md-4">
                  <label for="">Place Visited :</label>
                  <p>
                    <span><button type="button" class="btn btn-default" style="border-bottom: 1px solid gray;"><?= $health['department']?></button></span>
                  </p>
                </div>
                <div class="col-md-4">
                  <?php if($health['status_defined'] == 'a'){ ?>
                    <button class="btn btn-default btn-md" style="border: 1px solid black;" type="button" name="button" disabled>
                      <?php echo 'Already Assessed!'; ?>
                    </button>
                    <?php
                  }elseif($health['status_defined'] == 'u'){
                    ?>
                    <button class="btn btn-default btn-md" style="border: 1px solid black;" type="button" name="button" disabled>
                      <?php echo 'No illness was detected.'; ?>
                    </button>
                    <?php
                  }else{
                    ?>
                    <button class="btn float-right" type="button" name="button">
                      <?php users_action('checklists', $_SESSION['userPermmissions'], $health['visit_id'], $profile[0]['id']); ?>
                    </button>
                    <?php
                  }
                  ?>
                </div>
              </div>

              <hr>
              <label for="">1. Are you experiencing:</label>
              <p>A. Fever greater than 38℃ (Lagnat:) |
                <!-- </style> -->
                <span style="float:right"><?= $health['one_a'] >= 'yes' ? '<span style="color: red "><button type="button" class="btn btn-danger">'.ucfirst($health['one_a']).' Date: '.date('F d, Y', strtotime($health['one_a_date'])).'</button></span>': '<span style="color: green"><button type="button" class="btn btn-success justify">'.ucfirst($health['one_a']).'</button></span>'?></span>

              </p>

              <p>B. Cough and/or colds (Ubo at/ sipon) |
                <span style="float:right"><?= $health['one_b'] >= 'yes' ? '<span style="color: red"><button type="button" class="btn btn-danger">'.ucfirst($health['one_b']).' Date: '.date('F d, Y', strtotime($health['one_b_date'])).'</button></span>': '<span style="color: green"><button type="button" class="btn btn-success justify">'.ucfirst($health['one_b']).'</button></span>'?></span>

              </p>
              <p>C. Body pains (pananakit ng katawan) |
                <span style="float:right"><?= $health['one_c'] >= 'yes' ? '<span style="color: red"><button type="button" class="btn btn-danger">'.ucfirst($health['one_c']).' Date: '.date('F d, Y', strtotime($health['one_c_date'])).'</button></span>': '<span style="color: green"><button type="button" class="btn btn-success">'.ucfirst($health['one_c']).'</button></span>'?></span>
              </p>
              <p>D. Sore throat (pananakit ng lalamunan/hirap lumunok) |
                <span style="float:right"><?= $health['one_d'] >= 'yes' ? '<span style="color: red"><button type="button" class="btn btn-danger">'.ucfirst($health['one_d']).' Date: '.date('F d, Y', strtotime($health['one_d_date'])).'</button></span>': '<span style="color: green"><button type="button" class="btn btn-success">'.ucfirst($health['one_d']).'</button></span>'?></span>
              </p>
              <p>E. Shortness of breath (hirap sa paghinga) |
                <span style="float:right"><?= $health['one_e'] >= 'yes' ? '<span style="color: red"><button type="button" class="btn btn-danger">'.ucfirst($health['one_e']).' Date: '.date('F d, Y', strtotime($health['one_e_date'])).'</button></span>': '<span style="color: green"><button type="button" class="btn btn-success">'.ucfirst($health['one_e']).'</button></span>'?></span>
              </p>
              <p>F. Diarrhea (pagtatae) |
                <span style="float:right"><?= $health['one_f'] >= 'yes' ? '<span style="color: red"><button type="button" class="btn btn-danger">'.ucfirst($health['one_f']).' Date: '.date('F d, Y', strtotime($health['one_f_date'])).'</button></span>': '<span style="color: green"><button type="button" class="btn btn-success">'.ucfirst($health['one_f']).'</button></span>'?></span>
              </p>
              <label for="">2. TRAVEL HISTORY:</label>
              <p>For the last 14 days, did you travel to a country or a place with high number of COVID-19 patients? |
                <span style="float:right"><?= $health['two_travel'] >= 'yes' ? '<span style="color: red"><button type="button" class="btn btn-danger">'.ucfirst($health['two_travel']).' Address: '.ucfirst($health['two_travel_address']).'</button></span>': '<span style="color: green"><button type="button" class="btn btn-success">'.ucfirst($health['two_travel']).'</button></span>'?></span>
              </p>
              <label for="">3. Did you have any close contact or interaction with any of the following:</label>
              <p>•	Individuals providing direct care, and/or working with individuals infected with COVID-19, and/or visiting or staying in the same environment with COVID-19 patient? |
                <span style="float:right"><?= $health['three_contact_one'] >= 'yes' ? '<span style="color: red"><button type="button" class="btn btn-danger">'.ucfirst($health['three_contact_one']).'</button></span>': '<span style="color: green"><button type="button" class="btn btn-success">'.ucfirst($health['three_contact_one']).'</button></span>'?></span>
              </p>
              <p>•	In close proximity or shared the same room with a COVID-19 patient? |
                <span style="float:right"><?= $health['three_contact_two'] >= 'yes' ? '<span style="color: red"><button type="button" class="btn btn-danger">'.ucfirst($health['three_contact_two']).'</button></span>': '<span style="color: green"><button type="button" class="btn btn-success">'.ucfirst($health['three_contact_two']).'</button></span>'?></span>
              </p>
              <p>•	Travelled together with COVID-19 patient? |
                <span style="float:right"><?= $health['three_contact_three'] >= 'yes' ? '<span style="color: red"><button type="button" class="btn btn-danger">'.ucfirst($health['three_contact_three']).'</button></span>': '<span style="color: green"><button type="button" class="btn btn-success">'.ucfirst($health['three_contact_three']).'</button></span>'?></span>
              </p>
              <p>•	Living with a COVID-19 patient within a 14-day period after the onset of his/her symptoms? |
                <span style="float:right"><?= $health['three_contact_four'] >= 'yes' ? '<span style="color: red"><button type="button" class="btn btn-danger">'.ucfirst($health['three_contact_four']).'</button></span>': '<span style="color: green"><button type="button" class="btn btn-success">'.ucfirst($health['three_contact_four']).'</button></span>'?></span>
              </p>
              <label for="">4. Do you have pre-existing illness?</label>
              <p> Do you have pre-existing illness? |
                <span style="float:right"><?= $health['four_existing'] >= 'yes' ? '<span style="color: red"><button type="button" class="btn btn-danger">'.ucfirst($health['four_existing']).' Pre-illness: '.ucfirst($health['four_existing_specify']).'</button></span>': '<span style="color: green"><button type="button" class="btn btn-success">'.ucfirst($health['four_existing']).'</button></span>'?></span>
              </p>
              <label for="">5. Are you pregnant?</label>
              <p> Are you pregnant? |
                <span style="float:right"><?= $health['five_pregnant'] >= 'yes' ? '<span style="color: red"><button type="button" class="btn btn-danger">'.ucfirst($health['five_pregnant']).'</button></span>': '<span style="color: green"><button type="button" class="btn btn-success">'.ucfirst($health['five_pregnant']).'</button></span>'?></span>
              </p>
            <?php endforeach; ?>
          </form>
        <?php endif; ?>
        <!-- /.post -->
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="timeline">
          <?php if (empty($recent_visits)): ?>
            <p style="font-style: italic;"><i class="fas fa-spinner"></i> None</p>
          <?php else: ?>
            <a class="text-white" href="<?=base_url().'visits/'.$profile['0']['id']?>"><button type="button" class="btn btn-default" style="border: 1px solid gray;"><i class="fas fa-calendar-check"></i> Recent Visits </button></a>
            <hr>
            <table  style="width: 100%;">
              <?php foreach ($recent_visits as $recent_visit): ?>
                <tr style="border-bottom: 1px solid #ddd">
                  <td>
                    <span class="float-left"><?=date('F d, Y h:i a', strtotime($recent_visit['created_at']))?> <?=$recent_visit['updated_at'] == '' ? ' - Active': ' - ' . date('F d, Y h:i a', strtotime($recent_visit['updated_at']))?></span>
                  </td>
                </tr>
              <?php endforeach; ?>
            </table>
          <?php endif; ?>
      </div>
      <!-- /.tab-pane -->

      <div class="tab-pane" id="settings">
        <?php if (empty($health_summary)): ?>
          <p class="card-text" style="font-style: italic;"><i class="fas fa-spinner"></i> None</p>
        <?php else: ?>
          <div id="accordion">
            <?php foreach ($health_summary as $summary): ?>
              <div class="card">
                <div class="card-header" id="heading<?=$summary['id']?>">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse<?=$summary['id']?>" aria-expanded="false" aria-controls="collapse<?=$summary['id']?>">
                      <?=date('F d, Y h:i a', strtotime($summary['created_at']))?>
                    </button>
                    <!-- <button class="btn btn-link float-right" name="download" data-target="<?=$summary['id']?>" aria-expanded="true" aria-controls="<?=$summary['id']?>">
                    <a href="<?=base_url().'patients/print/'. $profile[0]['id'] ?>">  <i class="fas fa-file-pdf text-red"></i> Download PDF</a>
                    </button> -->
                  </h5>
                </div>
                <div id="collapse<?=$summary['id']?>" class="collapse" aria-labelledby="heading<?=$summary['id']?>" data-parent="#accordion">
                  <div class="card-body">
                    <form>
                      <p>
                        <label>Legend: </label>
                        <button type="button" class="btn btn-danger" name="button"></button><span> Defined</span>
                        <button type="button" class="btn btn-success" name="button"></button><span> Undefined</span>
                        <a href="<?=base_url().'guests/print_summary/'. $profile[0]['id'].'/'. $summary['id'] ?>"><button class="btn btn-link float-right" type="button" name="button"> <i class="fas fa-file-pdf text-red"></i> Download Checklist PDF</button></a>
                        <!-- <a href="<?=base_url().'guests/print/'. $summary['id'] ?>"><button class="btn btn-link float-right" type="button" name="button"> <i class="fas fa-file-pdf text-red"></i> Download Checklist PDF</button></a> -->
                      </p>
                      <div class="row">
                        <div class="col-md-4">
                          <label for="">Temperature</label>
                          <p>
                            <span><?= $summary['temperature'] >= 37.1 ? '<span style="color: red"><button type="button" class="btn btn-danger">'.$summary['temperature'].' ℃.</button></span>': '<span style="color: green"><button type="button" class="btn btn-success">'.$summary['temperature'].' ℃.</button></span>'?></span>
                          </p>
                        </div>
                        <div class="col-md-4">
                          <label for="">Place Visited :</label>
                          <p>
                            <span><button type="button" class="btn btn-default" style="border-bottom: 1px solid gray;"><?= $summary['department']?></button></span>
                          </p>
                        </div>
                        <div class="col-md-4">
                          <?php if($summary['status_defined'] == 'a'){ ?>
                            <button class="btn btn-default btn-md" style="border: 1px solid black;" type="button" name="button" disabled>
                              <?php echo 'Already Assessed!'; ?>
                            </button>
                            <?php
                          }elseif($summary['status_defined'] == 'u'){
                            ?>
                            <button class="btn btn-default btn-md" style="border: 1px solid black;" type="button" name="button" disabled>
                              <?php echo 'No illness was detected.'; ?>
                            </button>
                            <?php
                          }else{
                            ?>
                            <button class="btn float-right" type="button" name="button">
                              <?php users_action('checklists', $_SESSION['userPermmissions'], $summary['id'], $profile[0]['id']); ?>
                            </button>
                            <?php
                          }
                          ?>
                        </div>
                      </div>
                      <hr>
                      <label for="">1. Are you experiencing:</label>
                      <p>A. Fever greater than 38℃ (Lagnat:) |
                        <!-- </style> -->
                        <span style="float:right"><?= $summary['one_a'] >= 'yes' ? '<span style="color: red "><button type="button" class="btn btn-danger">'.ucfirst($summary['one_a']).' Date: '.date('F d, Y', strtotime($summary['one_a_date'])).'</button></span>': '<span style="color: green"><button type="button" class="btn btn-success justify">'.ucfirst($summary['one_a']).'</button></span>'?></span>

                      </p>

                      <p>B. Cough and/or colds (Ubo at/ sipon) |
                        <span style="float:right"><?= $summary['one_b'] >= 'yes' ? '<span style="color: red"><button type="button" class="btn btn-danger">'.ucfirst($summary['one_b']).' Date: '.date('F d, Y', strtotime($summary['one_b_date'])).'</button></span>': '<span style="color: green"><button type="button" class="btn btn-success justify">'.ucfirst($summary['one_b']).'</button></span>'?></span>

                      </p>
                      <p>C. Body pains (pananakit ng katawan) |
                        <span style="float:right"><?= $summary['one_c'] >= 'yes' ? '<span style="color: red"><button type="button" class="btn btn-danger">'.ucfirst($summary['one_c']).' Date: '.date('F d, Y', strtotime($summary['one_c_date'])).'</button></span>': '<span style="color: green"><button type="button" class="btn btn-success">'.ucfirst($summary['one_c']).'</button></span>'?></span>
                      </p>
                      <p>D. Sore throat (pananakit ng lalamunan/hirap lumunok) |
                        <span style="float:right"><?= $summary['one_d'] >= 'yes' ? '<span style="color: red"><button type="button" class="btn btn-danger">'.ucfirst($summary['one_d']).' Date: '.date('F d, Y', strtotime($summary['one_d_date'])).'</button></span>': '<span style="color: green"><button type="button" class="btn btn-success">'.ucfirst($summary['one_d']).'</button></span>'?></span>
                      </p>
                      <p>E. Shortness of breath (hirap sa paghinga) |
                        <span style="float:right"><?= $summary['one_e'] >= 'yes' ? '<span style="color: red"><button type="button" class="btn btn-danger">'.ucfirst($summary['one_e']).' Date: '.date('F d, Y', strtotime($summary['one_e_date'])).'</button></span>': '<span style="color: green"><button type="button" class="btn btn-success">'.ucfirst($summary['one_e']).'</button></span>'?></span>
                      </p>
                      <p>F. Diarrhea (pagtatae) |
                        <span style="float:right"><?= $summary['one_f'] >= 'yes' ? '<span style="color: red"><button type="button" class="btn btn-danger">'.ucfirst($summary['one_f']).' Date: '.date('F d, Y', strtotime($summary['one_f_date'])).'</button></span>': '<span style="color: green"><button type="button" class="btn btn-success">'.ucfirst($summary['one_f']).'</button></span>'?></span>
                      </p>
                      <label for="">2. TRAVEL HISTORY:</label>
                      <p>For the last 14 days, did you travel to a country or a place with high number of COVID-19 patients? |
                        <span style="float:right"><?= $summary['two_travel'] >= 'yes' ? '<span style="color: red"><button type="button" class="btn btn-danger">'.ucfirst($summary['two_travel']).' Address: '.ucfirst($summary['two_travel_address']).'</button></span>': '<span style="color: green"><button type="button" class="btn btn-success">'.ucfirst($summary['two_travel']).'</button></span>'?></span>
                      </p>
                      <label for="">3. Did you have any close contact or interaction with any of the following:</label>
                      <p>•	Individuals providing direct care, and/or working with individuals infected with COVID-19, and/or visiting or staying in the same environment with COVID-19 patient? |
                        <span style="float:right"><?= $summary['three_contact_one'] >= 'yes' ? '<span style="color: red"><button type="button" class="btn btn-danger">'.ucfirst($summary['three_contact_one']).'</button></span>': '<span style="color: green"><button type="button" class="btn btn-success">'.ucfirst($summary['three_contact_one']).'</button></span>'?></span>
                      </p>
                      <p>•	In close proximity or shared the same room with a COVID-19 patient? |
                        <span style="float:right"><?= $summary['three_contact_two'] >= 'yes' ? '<span style="color: red"><button type="button" class="btn btn-danger">'.ucfirst($summary['three_contact_two']).'</button></span>': '<span style="color: green"><button type="button" class="btn btn-success">'.ucfirst($summary['three_contact_two']).'</button></span>'?></span>
                      </p>
                      <p>•	Travelled together with COVID-19 patient? $summary
                        <span style="float:right"><?= $summary['three_contact_three'] >= 'yes' ? '<span style="color: red"><button type="button" class="btn btn-danger">'.ucfirst($summary['three_contact_three']).'</button></span>': '<span style="color: green"><button type="button" class="btn btn-success">'.ucfirst($summary['three_contact_three']).'</button></span>'?></span>
                      </p>
                      <p>•	Living with a COVID-19 patient within a 14-day period after the onset of his/her symptoms? |
                        <span style="float:right"><?= $summary['three_contact_four'] >= 'yes' ? '<span style="color: red"><button type="button" class="btn btn-danger">'.ucfirst($summary['three_contact_four']).'</button></span>': '<span style="color: green"><button type="button" class="btn btn-success">'.ucfirst($summary['three_contact_four']).'</button></span>'?></span>
                      </p>
                      <label for="">4. Do you have pre-existing illness?</label>
                      <p> Do you have pre-existing illness? |
                        <span style="float:right"><?= $summary['four_existing'] >= 'yes' ? '<span style="color: red"><button type="button" class="btn btn-danger">'.ucfirst($summary['four_existing']).' Pre-illness: '.ucfirst($summary['four_existing_specify']).'</button></span>': '<span style="color: green"><button type="button" class="btn btn-success">'.ucfirst($summary['four_existing']).'</button></span>'?></span>
                      </p>
                      <label for="">5. Are you pregnant?</label>
                      <p> Are you pregnant? |
                        <span style="float:right"><?= $summary['five_pregnant'] >= 'yes' ? '<span style="color: red"><button type="button" class="btn btn-danger">'.ucfirst($summary['five_pregnant']).'</button></span>': '<span style="color: green"><button type="button" class="btn btn-success">'.ucfirst($summary['five_pregnant']).'</button></span>'?></span>
                      </p>
                    </form>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
      <!-- /.tab-pane -->
    </div>
    <!-- /.tab-content -->
  </div><!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
