<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Id</th>
      <th scope="col">Edit</th>
      <th scope="col">Hapus</th>
    </tr>
  </thead>
  <tbody>
    @foreach($admin as $adm)
    <tr>
      <td>{{ $loop->index+1 }}</td>
      <td>{{ $adm->nama }}</td>
      <td>{{ $adm->password }}</td>
      <td>{{ $adm->id }}</td>
      <td><a href="{{ url ('admins/'.$adm->id. '/edit')}}" class="btn btn-primary">EDIT</a></td>
      <td>
        <form action="{{ url ('admins/'.$adm->id)}}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">HAPUS</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="admins/create" class="btn btn-success">TAMBAH</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>