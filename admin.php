<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="admin.addProduct.php" method="post" enctype="multipart/form-data">
      <label for="">Nama</label>
      <input type="text" name="nama" /><br />

      <label for="">Foto</label>
      <input type="file" accept="image/*" name="foto" /><br />

      <label for="">Harga</label>
      <input type="text" name="harga" /><br />

      <label for="">Stok</label>
      <input type="text" name="stok" /><br />

      <input type="submit" value="Submit" />
    </form>
  </body>
</html>