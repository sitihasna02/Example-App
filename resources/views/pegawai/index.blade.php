<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Laravel</title>
    <link rel="stylesheet" href="   https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="text-center mt-5 " >DATA PEGAWAI</div>

    <a href="/create" class="btn btn-outline-success">
        + Tambah Data
    </a>
    <table class="table  table-bordered border-primary">
      <thead>
        <tr>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Alamat</th>
          <th scope="col">Opsi</th>

        </tr>
      </thead>
      @foreach ($pegawai as $p)
        <tbody>
        <tr>
          <td>{{$p->name}}</td>
          <td>{{$p->email}}</td>
          <td>{{$p->alamat}}</td>
          <td>
              <a href="{{route('pegawai.edit',$p->id)}}" class="btn btn-outline-warning">Edit</a>
               <a href="{{route('pegawai.delete',$p->id)}}" class="btn btn-outline-danger">Delete</a>
          </td>
          
        </tr>
    </tbody>
      @endforeach
      
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>