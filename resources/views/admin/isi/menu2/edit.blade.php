<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Edit data</title>
</head>
<body>
<form action="{{ url('pancongs2/'.$pancong2->id) }}" method="post" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    <div class="mb-3">
        <label for="exampleinputid" class="form-label">Id</label>
        <input type="text" class="form-control" id="exampleinputid" name="id" value="{{ $pancong2->id }}">
    </div> 
    <div class="mb-3">
        <label for="exampleinputnama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="exampleinputnama" name="menu" value="{{ $pancong2->menu }}">
    </div>
    <div class="mb-3">
        <label for="exampleInputharga" class="form-label">Harga</label>
        <input type="text" class="form-control" id="exampleInputharga" name="harga" value="{{ $pancong2->harga }}">
    </div>
    <div class="mb-3">
        <label for="exampleinputdeskripsi" class="form-label">Deskripsi</label>
        <input type="text" class="form-control" id="exampleinputdeskripsi" name="detail" value="{{ $pancong2->detail }}">
    </div> 
    <div class="mb-3">
        <label for="exampleinputfoto" class="form-label">Foto</label>
        <input type="file" class="form-control" id="exampleinputfoto" name="foto">
        <img src="{{ asset('img/' . $pancong2->foto) }}" alt="Foto Lama" style="max-width: 100px; margin-top: 10px;">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


