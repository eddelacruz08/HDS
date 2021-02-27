
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
  <div class="row">
    <div class="col-md-12">
      <h1> <?=$function_title?> </h1>
    </div>
  </div>
  <br>
  <div class="card bg-light ">
    <div class="card-body">


      <div class="row">
        <div class="col-md-3">
          <?php user_add_link('guests', $_SESSION['userPermmissions']) ?>
        </div>
        <div class="col-md-3 offset-md-6">
          <?php guests_print('guests', $_SESSION['userPermmissions']) ?>
        </div>
      </div>
      <br>
       <div class="table-responsive">
         <table class="table table-sm table-striped table-bordered index-table">
          <thead class="thead-dark">
            <tr class="text-center">
              <th>#</th>
              <th>Full Name</th>
              <th>Guest Type</th>
              <th>Gender</th>
              <th>Email</th>
              <th>Contact no.</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $cnt = 1; ?>
            <?php foreach($guests as $patient): ?>
              <?php
              if($patient['user_type'] == 's'){
                $user_type = 'Student';
              }
              elseif($patient['user_type'] == 'f'){
                $user_type = 'Faculty';
              }
              elseif($patient['user_type'] == 'e'){
                $user_type = 'Employee';
              }
              elseif($patient['user_type'] == 'o'){
                $user_type = 'Outsider';
              }else{
                $user_type = 'Nothing';
              }
              ?>
            <tr class="text-center">
              <th scope="row"><?= $cnt++ ?></th>
              <td><?= ucwords($patient['full_name']) ?></td>
              <td><?= $user_type ?></td>
              <td><?= ucfirst($patient['gender'] == 'm' ? 'Male': 'Female') ?></td>
              <td><?= $patient['email'] ?></td>
              <td><?= ucwords($patient['cellphone_no']) ?></td>
              <td class="text-center">
                <?php
                  users_action('guests', $_SESSION['userPermmissions'], $patient['id']);
                ?>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
       </div>
      </div>
   </div>
<hr>
