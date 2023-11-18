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
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid mb-3">
                <span class="navbar-brand mb-0 h1 ">Edit Produk</span>
            </div>
        </nav>

        <div class="container">
            <?php
            require('./config/db.php');

                if (isset($_GET['id'])) {
                    $product_id = $_GET['id'];

                    $result = mysqli_query($db_connect, "SELECT * FROM products WHERE id = $product_id");

                    if (mysqli_num_rows($result) == 1) {
                        $row = mysqli_fetch_assoc($result);
                        ?>
                        
                        <a type="button" class="btn btn-primary mb-3" href="show.php">Lihat data produk</a>
                        <form action="./backend/edit.php" method="post" enctype="multipart/form-data">

            

                            <input type="hidden" name="id" value="<?= $row['id']; ?>">

                            <input class="form-control form-control-sm mb-3" type="text" name="name" placeholder="Input nama produk"
                                value="<?= $row['name']; ?>">

                            <input class="form-control form-control-sm mb-3" type="number" name="price" placeholder="Input harga produk"
                                value="<?= $row['price']; ?>">
                            <p>Gambar Saat Ini:
                                <?= $row['image']; ?>
                            </p>
                            
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Edit Gambar</label>
                                <input class="form-control" type="file" id="formFile" name="new_image">
                            </div>

                            <!-- <img src="<?= $row['image']; ?>" alt="Gambar Produk" width="100"> -->
                           <!-- <input type="file" name="new_image"> -->
                            <input type="hidden" name="old_image" value="<?= $row['image']; ?>">
                            <input type="hidden" name="product_id" value="<?= $product_id; ?>">
                            <input class="btn btn-primary" type="submit" value="Simpan" name="edit">
                          
                        </form>
                        <?php
                    } else {
                        echo "Produk tidak ditemukan.";
                    }
                } else {
                    echo "ID produk tidak diberikan.";
                }
                ?>
        </div>
        
    </body>
    
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