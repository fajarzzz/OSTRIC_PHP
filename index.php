<?php
require_once "crud.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/3555968637.js" crossorigin="anonymous"></script>
   <title>OSTRIC CRUD</title>
</head>

<body>
   <!-- Title -->
   <h1 id="title">OSTRIC CRUD</h1>

   <!-- Form Create-->
   <div class="offset-md-4 col-md-4">
      <form>
         <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama">
            <div id="namaBarang" class="form-text">Nama produk kalian</div>
         </div>
         <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" class="form-control" id="stok">
            <div id="stokBarang" class="form-text">Jumlah stok tersedia</div>
         </div>
         <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga">
            <div id="hargaBarang" class="form-text">Harga produk</div>
         </div>
         <div class="d-grid gap-2">
            <button type="submit" class="btn btn-block btn-success"><i class="fas fa-plus"></i></button>
         </div>
      </form>
   </div>

   <!-- Tabel Data -->
   <div class="offset-md-1 col-md-10 py-5">
      <table class="table text-center table-striped">
         <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Harga</th>
            <th></th>
         </tr>
         <tr>
            <td>1</td>
            <td>Sampo</td>
            <td>5</td>
            <td>Rp12000</td>
            <td>
               <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
               <a href="" class="btn btn-success"><i class="far fa-edit"></i></a>
            </td>
         </tr>
      </table>
   </div>


</body>

</html>