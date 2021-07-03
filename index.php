<!DOCTYPE html>
<html>

  <style>
    input[type=text], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    textarea {
      width: 100%;
      height: 150px;
      padding: 12px 20px;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      
      resize: none;
    }
    input[type=submit] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    input[type=submit]:hover {
      background-color: #45a049;
    }
    
    div {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
    </style>

<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>E-Surat Kementrian Pendidikan</b></h1>
  <p>Selamat datang di template surat kementrian pendidikan</p>
</header>

<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <div class="w3-container">
      <h3><b>Konten Surat</b></h3>
    </div>

    <div class="w3-container">
      <form action="send.php" target="_blank" method="post">
        Nomor Surat :  <input type="text" name="nomor"><br>
        Lampiran : <input type="text" name="lampiran"><br>
        Hal : <input type="text" name="hal"><br>
        Yth : <input type="text" name="yth"><br><br><br>
        Isi Surat : <textarea type="text" name="surat"></textarea><br>
      
        <h4><b>Data diri Penulis surat</b></h4>
        Nama :  <input type="text" name="nama"><br>
        Jabatan : <input type="text" name="jabatan"><br>
        NIP : <input type="text" name="nip"><br><br>
        <p><button class="w3-button w3-padding-large w3-white w3-border"><b>Kirim</b></button></p>
        
        </form>
      <div class="w3-row">
        
      </div>
    </div>
  </div>
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card w3-margin w3-margin-top">
    <div class="w3-container w3-white">
      <h4><b>Keterangan KOP Surat</b></h4>
      <p><b>Alamat  :</b> Jl. Jenderal Sudirman Senayan, Jakarta</p>
      <p><b>Telepon :</b> 5711144</p>
      <p><b>Laman   :</b> www.kemdikbud.go.id</p>
    </div>
  </div>
  
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

</body>
</html>
