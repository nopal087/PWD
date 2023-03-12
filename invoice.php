<?php
 session_start();
 $total = NULL;
 $post = $_POST;
 
 /* untuk invoice bisa di ambil dari database, karena pada dasarnya invoice tidak akan pernah recordnya itu di delete  */ 
 /* berapa jumlah invoice kemudian di tambahkan 1 */
 $numrows_invoice_db = 313;
 $invoice = $numrows_invoice_db + 1;
?>


<!DOCTYPE html>
 <head>
  <style type="text/css">
  body{background:#efefef;font-family:arial;}
  #wrapshopcart{width:70%;margin:3em auto;padding:30px;background:#fff;box-shadow:0 0 15px #ddd;}
  h1{margin:0;padding:0;font-size:2.5em;font-weight:bold;}
  p{font-size:1em;margin:0;}
  table{margin:2em 0 0 0; border:1px solid #eee;width:100%; border-collapse: separate;border-spacing:0;}
  table th{background:#fafafa; border:none; padding:20px ; font-weight:normal;text-align:left;}
  table td{background:#fff; border:none; padding:12px  20px; font-weight:normal;text-align:left; border-top:1px solid #eee;}
  table tr.total td{font-size:1.5em;}
  .btnsubmit{display:inline-block;padding:10px;border:1px solid #ddd;background:#eee;color:#000;text-decoration:none;margin:2em 0;}
  form{margin:2em 0 0 0;}
  label{display:inline-block;width:auto;}
  input[type=text]{border:1px solid #bbb;padding:10px;width:30em;}
  textarea{border:1px solid #bbb;padding:10px;width:30em;height:5em;vertical-align:text-top;margin:0.3em 0 0 0;}
  .submitbtn{font-size:1.5em;display:inline-block;padding:10px;border:1px solid #ddd;background:#eee;color:#000;text-decoration:none;margin:0.5em 0 0 8em;};
  
  </style>
 </head>
 
 <body>
  <div id="wrapshopcart">
   <h1>Bukti pembayaran <?php echo $invoice;?></h1>
   <p>Silahkan save halaman ini atau lakukan screenshot sebagai bukti dan kirimkan ke no wa 085712666154  </p>
   
   <h3>Berikut adalah data lengkap Anda : </h3>
   <label>Nama Lengkap : <?php echo $post['nama_depan'] . ' ' . $post['nama_belakang'] ;?> </label><br />
   <label>Email : <?php echo $post['email'] ;?> </label><br />
   <label>No HP : <?php echo $post['no_hp'] ;?></label><br />
   <label>Alamat : <?php echo $post['alamat'] ;?></label><br />
   
   <h3>Produk Yang Anda Beli : </h3>
   <table>
    <tr><th width="70%">Produk</th><th width="10%">Quantity</th><th width="20%">Jumlah</th></tr>
    
    <?php foreach($_SESSION['cart'] as $row):?>
     <?php 
      $jumlah = $_SESSION['price'][$row['productid']] * $row['qty']; 
      $total += $jumlah;
     ?>
    
     <tr><td><?php echo $row['product'];?></td><td><?php echo $row['qty'];?></td><td><?php echo $jumlah; ?></td></tr>
    <?php endforeach;?>
    
    <tr class="total"><td></td><td >Total</td><td><?php echo $total;?></td></tr>
   </table>   
   
   <h3>Silahkan Lakukan Pembayaran Ke sini Rek BRI 0000111122233444 atas nama Muhammad Naufal Faruq</h3>
   <p>Sebutkan nama bank Anda .. </p>
   
   
  </div>
 </body>
</html>