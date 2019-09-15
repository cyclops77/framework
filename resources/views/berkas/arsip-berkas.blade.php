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
   <form method="POST" action="{{url('/send/ini-berkas')}}" enctype="multipart/form-data">
          {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Nama File</label>
    <input type="text" class="form-control" placeholder="Nama File" name="nama_file">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Catatan</label>
    <input type="text" class="form-control" name="alias">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Keterangan</label>
    <input type="text" class="form-control" name="keterangan">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Lampiran</label>
    <input type="file" class="form-control" name="file">
  </div>
  
  
  <button type="submit" class="btn btn-primary">
    Simpan Lampiran Saya
  </button>

</form>
</div>
  </div>
</body>
</html>