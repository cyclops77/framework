



<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>
<body>
  <div class="container">
   <div class="col-md-6">

    @if(session('sukses'))
    <div class="alert alert-success" >
      {{session('sukses')}}
    </div>
    @endif
    @if(session('gagal'))
    <div class="alert alert-success" >
      {{session('gagal')}}
    </div>
    @endif

<br>
   <form method="POST" action="{{url('/send/finance')}}">
          {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputPassword1">Keperluan</label>
    <input type="text" class="form-control" name="keperluan" placeholder="keperluan dana">
  </div>
  <div class="form-group">
    <label for="">Tanggal</label>
    <input type="text" class="date form-control" name="tanggal" placeholder="pilih tanggal">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Keterangan</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
    name="keterangan" placeholder="Keterangan"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">
    Kirim Laporan Keuangan
  </button>

</form>
</div>
  </div>


  <script type="text/javascript">

    $('.date').datepicker({  

       format: 'yyyy-mm-dd'

     });  

</script>  
</body>
</html>