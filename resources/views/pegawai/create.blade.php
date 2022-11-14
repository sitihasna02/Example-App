<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    h2{
      text-align: center
    }
    button{
      right: 10px;
    }
  </style>
</head>
<body>

<div class="container mt-3">
  <h2>Register</h2>
  <form action="{{ route('pegawai.store') }}"  method="POST">
    @csrf
    <div class="mb-3 mt-3">
      <label for="name">Nama</label>
      <input type="text" class="form-control" id="name"  placeholder="Enter email" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="alamat">alamat</label>
      <input type="text" class="form-control" id="alamat" placeholder="Enter alamat" name="alamat">
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <button type="submit" class="btn btn-success" >Submit</button>
    </div>
    
  </form>
</div>

</body>
</html>
