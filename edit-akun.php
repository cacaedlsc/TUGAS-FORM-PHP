<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Adminis Stikubank</title>
<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(to right, #ff9a9e, #fad0c4);
    color: #333;
    padding-top: 120px; /* Adjusted for the navbar height */
    text-align: center;
  }
  .navbar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: maroon;
    padding: 10px 0;
    text-align: center;
    color: #fff;
    font-size: 24px;
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
  }
  .section {
    margin-top: 50px;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  h2 {
    color: maroon;
    margin-bottom: 20px;
  }
  .customform {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  input[type="text"],
  input[type="email"],
  input[type="password"],
  select {
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: 1px solid #ccc;
    width: 300px;
    font-size: 16px;
    box-sizing: border-box;
  }
  .submit-form {
    padding: 12px 24px;
    font-size: 18px;
    margin-top: 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    background-color: maroon;
    color: #fff;
    transition: background-color 0.3s ease;
  }
  .submit-form:hover {
    background-color: #8b0000;
  }
  .footer {
    width: 100%;
    text-align: center;
    position: fixed; 
    bottom: 0; 
    left: 0; 
  }

  .footer-text {
    float: center;
  }
</style>
</head>
<body>

<div class="navbar">ADMINISTRATIF FTII UNIVERSITAS STIKUBANK</div>

<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM mahasiswa WHERE id='$id'";
    $result = mysqli_query($link, $sql);
    $data = mysqli_fetch_assoc($result);
    ?>

<form method="POST" action="aksi-edit.php" class="customform">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        
        <input name="nama" class="required" placeholder="Masukkan Nama Mahasiswa" title="Nama" type="text" value="<?php echo $data['nama']; ?>" required/>
        <input name="status" type="hidden" value="ok"/>
        <input name="nim" class="required" placeholder="Masukkan NIM" title="NIM" type="text" value="<?php echo $data['nim']; ?>" required/>
        <input name="alamat" class="required" placeholder="Masukkan Alamat" title="Alamat" type="text" value="<?php echo $data['alamat']; ?>" required/>
        <input name="email" class="required" placeholder="Masukkan Email" title="email" type="email" value="<?php echo $data['email']; ?>" required/>
        <input name="no_hp" class="required" placeholder="Masukkan Nomor HP" title="Nomor HP" type="text" value="<?php echo $data['no_hp']; ?>" required/>
        <input name="jenis_kelamin" class="required" placeholder="Masukkan Jenis Kelamin (L / P)" title="Jenis Kelamin" type="text" value="<?php echo $data['jenis_kelamin']; ?>" required/>
        
        <select name="jurusan" class="required" required>
            <option value="">Pilih Jurusan</option>
            <option value="Teknik Informatika" <?php if ($data['jurusan'] === 'Teknik Informatika') echo 'selected'; ?>>Teknik Informatika</option>
            <option value="Teknik Informasi" <?php if ($data['jurusan'] === 'Teknik Informasi') echo 'selected'; ?>>Teknik Informasi</option>
            <option value="Teknik Industri" <?php if ($data['jurusan'] === 'Teknik Industri') echo 'selected'; ?>>Teknik Industri</option>
        </select>  
        
        <button class="submit-form" type="submit">Simpan Perubahan</button>
    </form>
</section>
<!-- footer -->
<footer class="footer">
  <div class="footer-text">
      <p>Copyright &copy; 2023 by Salsa E | 22.01.53.0047 | All Rights Reserved.</p>
  </div>
</footer>
</body>
</html>
