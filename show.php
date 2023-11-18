<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>GlowSKin Shop</title>
  </head>
  <body>
    
    <!-- As a heading -->
    <nav class="navbar navbar-light bg-light mb-3">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Data produk</span>
    </div>
    </nav>

    <div class="container">
        <table class="table" border='1'>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama produk</th>
                    <th>harga</th>
                    <th>gambar produk</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                        require './config/db.php';

                        $products = mysqli_query($db_connect,"SELECT * FROM products");
                        $no = 1;

                        while($row = mysqli_fetch_assoc($products)) {
                    ?>
                        <tr>
                            <td><?=$no++;?></td>
                            <td><?=$row['name'];?></td>
                            <td><?=$row['price'];?></td>
                            <td><img src="<?=$row['image'];?>" width="100"></td>
                            <td>
                                <a href="<?=$row['image'];?>" download="<?=$row['image'];?>">unduh</a>
                                <a href="edit.php?id=<?=$row['id'];?>">Edit</a>
                                <a href="./backend/hapus.php?id=<?=$row['id'];?>">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
        </table>
    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>