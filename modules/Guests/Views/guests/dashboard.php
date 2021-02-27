<h1>Ako lang to</h1>

  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <center><h3>Health Declaration Form Qr Code</h3></center>
        </div>
      </div>
      <hr>
        <div class="row">
          <div class="col-md-12">
              <form action="<?= base_url() ?>guests/dashboard" method="post">
                        <div class="row">
                          <div class="col-md-6 offset-md-6">
                            <input type="hidden" name="visit_id" value="<?=$visit_id?>">
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                          </div>
                        </div>
                  </form>
            <p style="clear: both"></p>
          </div>
          <!-- /.tab-content -->
        </div><!-- /.card-body -->
      </div>
    <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div>
