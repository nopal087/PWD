<?php
 session_start();
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
  label{display:inline-block;width:12em;}
  input[type=text]{border:1px solid #bbb;padding:10px;width:30em;}
  textarea{border:1px solid #bbb;padding:10px;width:30em;height:5em;vertical-align:text-top;margin:0.3em 0 0 0;}
  .submitbtn{font-size:1.5em;display:inline-block;padding:10px;border:1px solid #ddd;background:#eee;color:#000;text-decoration:none;margin:0.5em 0 0 8em;};
  
  </style>
 </head>
 
 <body>
  <div id="wrapshopcart">
   <h1>Form Registrasi</h1>
   <p>Silakan lengkapi form di bawah ini untuk melanjutkan ke tahap pembayaran : </p>
   
   <form action="orderan.php" method="POST">
   <label>Nama Depan : </label><input type="text" name="nama_depan" class="inputan" /><br />
   <label>Nama Belakang : </label><input type="text" name="nama_belakang" class="inputan" /><br />
   <label>Email : </label><input type="text" name="email" class="inputan" /><br />
   <label>No HP : </label><input type="text" name="no_hp" class="inputan" /><br />
   <label>Alamat :</label><textarea name="alamat" class="textan"></textarea><br />
   <input type="submit" name="kirim" value="Kirim Isi Formulir!" class="submitbtn" />
   </form>
   
   
  </div>
   
 </body>
</html>
