     <?php
      include "db.php";
      error_reporting(0);
      $kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
      $a = mysqli_fetch_object($kontak);
      // ketika diklik pada produk akan muncul detail
      $produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id = '" . $_GET['id'] . "' ");
      $p = mysqli_fetch_object($produk);
      ?>
     <!DOCTYPE html>
     <html>

     <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Tokomerah</title>
       <link rel="stylesheet" type="text/css" href="css/style.css">
       <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     </head>

     <body>
       <!-- header -->
       <header>
         <div class="container">
           <h1><a href="index.php">Tokomerah</a></h1>
           <ul>
             <li><a href="produk.php">Produk</a></li>
             <li><a href="">Keranjang</a></li>
           </ul>
         </div>
       </header>

       <!-- Serach -->
       <div class="search">
         <div class="container">
           <form action="produk.php">
             <input type="text" name="search" placeholder="cari Produk" value="<?php echo $_GET['search'] ?>">
             <input type="hidden" name="kat" value="<?php echo $_GET['kategori'] ?>">
             <input type="submit" name="submit" value="Cari Produk">
           </form>
         </div>
       </div>

       <!-- detail keranjang -->
       <div class="section">
         <div class="container">
           <h3>Keranjang Belanja</h3>
           <br>
           <br>
           <br>
         </div>
       </div>




       <!-- footer -->
       <div class="footer">
         <div class="container">
           <h4>Alamat</h4>
           <p><?php echo $a->admin_address ?></p>

           <h4>Email</h4>
           <p><?php echo $a->admin_email ?></p>

           <h4>No.hp</h4>
           <p><?php echo $a->admin_telp ?></p>
           <small>Copyright &copy; 2021 - Muhammad Naufal Faruq - Tokomerah</small>
         </div>
       </div>

     </body>

     </html>