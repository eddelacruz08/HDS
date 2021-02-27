<hr>
<div class="row">
  <div class="col-md-12">
    <div class="card border-success" style="border-radius: 0px;">
      <div class="card-body">
      <form action="<?= base_url() ?>guests/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
        <div class="row">
          <div class="col-md-12">
            <div class="card bg-light ">
              <div class="card-body">
                  <label class="card-title"><h3><i class="far fa-id-badge"></i> Personal Information</h3></label>
              </div>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-md-9">
          <div class="card bg-light ">
            <div class="card-body">
              <div class="row">
                <div class="col-md-7">
                  <div class="form-group">
                    <label for="full_name">Full Name</label>
                    <input type="text" class="form-control" name="full_name" value="<?= isset($rec['full_name']) ? $rec['full_name'] : ''?>" id="full_name" placeholder="Full Name">
                    <?php if (isset($errors['full_name'])): ?>
                      <div class="text-danger">
                          <?= $errors['full_name']?>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>

              <div class="col-md-5">
                <div class="form-group">
                  <label for="birthdate">Birth Date</label>
                  <input type="date" class="form-control" name="birthdate" value="<?= isset($rec['birthdate']) ? $rec['birthdate'] : ''?>" id="birthdate">
                  <?php if (isset($errors['birthdate'])): ?>
                    <div class="text-danger">
                        <?= $errors['birthdate']?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>

              <div class="col-md-7">
                <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="text" class="form-control" name="email" value="<?= isset($rec['email']) ? $rec['email'] : ''?>" id="email" placeholder="Email Address">
                  <?php if (isset($errors['email'])): ?>
                    <div class="text-danger">
                        <?= $errors['email']?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>

              <div class="col-md-5">
                <div class="form-group">
                  <label for="gender">Gender</label>
                  <select type="text" class="form-control"  name="gender" value="<?= isset($rec['gender']) ? $rec['gender'] : ''?>" id="gender" placeholder="Gender">
                    <option value="" selected disabled>-- Select --</option>
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                  </select>
                  <?php if (isset($errors['gender'])): ?>
                    <div class="text-danger">
                      <?= $errors['gender']?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="cellphone_no">Contact No.</label>
                  <input type="text" class="form-control" name="cellphone_no" value="<?= isset($rec['cellphone_no']) ? $rec['cellphone_no'] : ''?>" id="cellphone_no" placeholder="Contact No.">
                  <?php if (isset($errors['cellphone_no'])): ?>
                    <div class="text-danger">
                      <?= $errors['cellphone_no']?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                 <label for="landline_no">Landline No.</label><span> (optional)</span>
                 <input type="text" class="form-control" name="landline_no" value="<?= isset($rec['landline_no']) ? $rec['landline_no'] : ''?>" id="landline_no" placeholder="Landline No.">
                 <?php if (isset($errors['landline_no'])): ?>
                   <div class="text-danger">
                       <?= $errors['landline_no']?>
                   </div>
                 <?php endif; ?>
               </div>
             </div>

             <div class="col-md-4">
               <div class="form-group">
                 <label for="user_type">Guest Type</label>
                 <select type="text" class="form-control"  name="user_type" value="<?= isset($rec['user_type']) ? $rec['user_type'] : ''?>" id="user_type">
                   <option value="" selected disabled>-- Select --</option>
                   <option value="s">Student</option>
                   <option value="f">Faculty</option>
                   <option value="e">Employee</option>
                   <option value="o">Outsider</option>
                 </select>
                 <?php if (isset($errors['user_type'])): ?>
                   <div class="text-danger">
                       <?= $errors['user_type']?>
                   </div>
                 <?php endif; ?>
               </div>
             </div>
          </div>
        </div>
      </div>
    </div>
        <div class="col-md-3">
          <div class="card bg-dark ">
            <div class="card-body">
              <center>
                <h5>Qr Code Scanner <i class="fas fa-qrcode"></i></h5>
              </center>
              <video class="video" id="preview"></video>
            </div>
          </div>
        </div>
      </div>

        <div class="card bg-light">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" name="address" value="<?= isset($rec['address']) ? $rec['address'] : ''?>" id="address" placeholder="Address">
                  <?php if (isset($errors['address'])): ?>
                    <div class="text-danger">
                        <?= $errors['address']?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="city">City</label>
                  <input type="text" class="form-control" name="city" value="<?= isset($rec['city']) ? $rec['city'] : ''?>" id="city" placeholder="City">
                  <?php if (isset($errors['city'])): ?>
                    <div class="text-danger">
                        <?= $errors['city']?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="province">Province</label>
                  <input type="text" class="form-control" name="province" value="<?= isset($rec['province']) ? $rec['province'] : ''?>" id="province" placeholder="Province">
                  <?php if (isset($errors['province'])): ?>
                    <div class="text-danger">
                        <?= $errors['province']?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="postal">Postal</label>
                  <input type="text" class="form-control" name="postal" value="<?= isset($rec['postal']) ? $rec['postal'] : ''?>" id="postal" placeholder="Postal">
                  <?php if (isset($errors['postal'])): ?>
                    <div class="text-danger">
                        <?= $errors['postal']?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
             </div>
          </div>
        </div>
        <br>

        <script type="text/javascript">
          let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
          scanner.addListener('scan', function (content) {
            console.log(content);
            var audio = new Audio('http://localhost/HDS/public/js/scanner.mp3');
            audio.play();
          });
          Instascan.Camera.getCameras().then(function (cameras) {
            if (cameras.length > 0) {
              scanner.start(cameras[0]);
            } else {
              console.error('No cameras found.');
            }
          }).catch(function (e) {
            console.error(e);
          });

          scanner.addListener('scan', function(cont){

            var parts = cont.split(':');

            document.getElementById('full_name').value = parts[0];
            if (parts[1] == 'Male') {
              gender = 'm';
            }else{
              gender = 'f';
            }
            document.getElementById('gender').value = gender;
            document.getElementById('birthdate').value = parts[2];
            document.getElementById('email').value = parts[3];
            document.getElementById('cellphone_no').value = parts[4];
            if (parts[5] == 'Student') {
              guest_type = 's';
            }else if (parts[5] == 'Faculty') {
              guest_type = 'f';
            }else if (parts[5] == 'Employee') {
              guest_type = 'e';
            }else if (parts[5] == 'Outsider') {
              guest_type = 'o';
            }
            document.getElementById('user_type').value = guest_type;
            document.getElementById('address').value = parts[6];
            document.getElementById('city').value = parts[7];
            document.getElementById('province').value = parts[8];
            document.getElementById('postal').value = parts[9];

          });
        </script>

        <div class="row">
          <div class="col-md-12">
            <button type="submit" class="btn btn-success float-right" style="width:15%;"><i class="fas fa-paper-plane"></i> Submit</button>
          </div>
        </div>
      </form>



      </div>
    </div>
  </div>
</div>
<br>
