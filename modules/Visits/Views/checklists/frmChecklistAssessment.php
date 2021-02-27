<br>
<div class="card">
  <div class="card-body">
    <div class="row">
        <div class="col-md-12">
          <center><h1>Patient need to take assessment.</h1></center>
          <hr>
          <center><h3 class="mt-3"><u><?=ucfirst($profile[0]['full_name'])?></u></h3></center>
          <center><h6 class="mt-3">Please guide the patient!</h6></center>
        </div>
      </div>
            <div class="row">
              <div class="col-md-12">
                  <form action="<?= base_url() ?>checklists/<?= isset($rec) ? 'edit/'.$rec['visit_id'].'/'.$profile[0]['id'] : 'capture/'.$profile[0]['id'] ?>" method="post">
                      <div class="row">
                          <div class="form-group">
                                <label class="control-label" for="status_defined"></label>
                                <input type="hidden" name="status_defined" value="a">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <center><button style="width: 100%;" type="submit" class="btn btn-warning">Okay </button></center>
                          </div>
                      </div>
                 </form>
    <p style="clear: both"></p>
      </div>
    </div>
  </div>
    </div>
  </div>
    </div>
  </div>
