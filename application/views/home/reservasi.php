<h1>Reservasi</h1>

<form method="post" action="<?= base_url('Homepage/reservasi')?>">
<div class="container">
   <div class="panel panel-primary">
      <div class="panel-body">
         <div class="row">
            <div class="col-md-12">
               <div class="form-group">
                  <label class="control-label">Nama</label>
                  <input type="text" class="form-control" name="nama" id="nama">
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="form-group">
                  <label class="control-label">Nomor Telp/HP</label>
                  <input type="text" class="form-control" name="phone" id="phone">
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="form-group">
                  <label class="control-label">Email</label>
                  <input type="text" class="form-control" name="email" id="email">
               </div>
            </div>
         </div>
         <div class="row">
            <div class='col-md-12'>
               <div class="form-group">

               	<!-- Date pickernya masih belum berfungsi -->

                  <label class="control-label">Appointment Time</label>
                  <div class="input-group date" data-provide="datepicker" id="datetimepicker1">
                     <input type='text' class="form-control" />
                     <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                     </span>
                  </div>
               </div>
            </div>
         </div>
         <!-- ini untuk Jenis produk yg dipilih -->
         <!-- Tutorial untuk database dll : https://www.itsolutionstuff.com/post/php-how-to-make-dependent-dropdown-list-using-jquery-ajaxexample.html -->
         <div class="form-group">
                <label for="title">Jenis Produk yg anda pilih:</label>
                <select name="jenis" class="form-control" style="height: 35px" >
                    <option value="">--- Silahkan Pilih ---</option>
                    <!-- place holder -->
                    <option value="Produk">Produk</option>
                    <option value="Jasa">Jasa</option>

                    <!-- Database -->
                       <!--  require('db_config.php');
                        $sql = "SELECT * FROM demo_state";
                        $result = $mysqli->query($sql);
                        while($row = $result->fetch_assoc()){
                            echo "<option value='".$row['id']."'>".$row['name']."</option>";
                        } -->
                </select>
            </div>
            <!-- <div class="form-group">
                <label for="title">Jenis Produknya:</label>
                <select name="city" class="form-control" style="height: 35px">
                </select>
            </div> -->
<!-- Database juga -->
<!-- <script>
$( "select[name='state']" ).change(function () {
    var stateID = $(this).val();
    if(stateID) {
        $.ajax({
            url: "ajaxpro.php",
            dataType: 'Json',
            data: {'id':stateID},
            success: function(data) {
                $('select[name="city"]').empty();
                $.each(data, function(key, value) {
                    $('select[name="city"]').append('<option value="'+ key +'">'+ value +'</option>');
                });
            }
        });
    }else{
        $('select[name="city"]').empty();
    }
});
</script> -->

     <!--    <div class="row">
           <div class="col-md-12">
              <div class="form-group">
                 <label class="control-label">Jumlah</label>
                 <input type="text" class="form-control" name="jumlah" id="jumlah">
              </div>
           </div>
        </div> -->

         <input type="submit" class="btn btn-primary" value="Submit">
      </div>
   </div>
</div>

</form>

<script type='text/javascript'>
				$('#datetimepicker1').datetimepicker({
					format: 'yyyy-mm-dd hh:ii'
				});
</script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>



<!--===================================================================== -->
