<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Tambah data</title>
</head>
<body>
<form action="{{ url('/admins') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleinputnama" class="form-label">Username</label>
        <input type="text" class="form-control" id="exampleinputnama" name="nama">
    </div>
    <div class="mb-3">
        <label for="exampleInputpesanan" class="form-label">Pesanan</label>
        <input type="text" class="form-control" id="exampleInputpesanan" name="pesanan">
    </div>
    <div class="mb-3">
        <label for="exampleinputharga" class="form-label">Harga</label>
        <input type="text" class="form-control" id="exampleinputharga" name="harga">
    </div> 
    <div class="mb-3">
        <label for="exampleinputjumlah" class="form-label">Jumlah</label>
        <input type="text" class="form-control" id="exampleinputjumlah" name="jumlah">
    </div>
    <div class="mb-3">
        <label for="exampleInputtotal" class="form-label">Total</label>
        <input type="text" class="form-control" id="exampleInputtotal" name="total">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


