<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
    />
    <title>Document</title>
  </head>
  <body>
    <style>
      * {
        font-family: "Poppins", sans-serif;
      }
    </style>
    <section class="vh-100 d-flex align-items-center justify-content-center">
      <div class="card p-3" style="width: 30rem">
        <div class="card-body">
          <div class="mx-auto" style="width: 10rem">
            <img class="img-fluid" src="components/logo-moklet.png" alt="" />
          </div>
          <p class="card-title text-center h3 mt-3">Moklet Merchandise</p>
          <div class="row row-cols-1 mt-3">
            <div class="col">
              <form action="signup.process.php" method="post" enctype="multipart/form-data">
                <label for="">Nama</label><br />
                <input
                  class="w-100"
                  type="text"
                  name="nama"
                  autocomplete="off"
                /><br />
                <label class="mt-3" for="">Jenis Kelamin</label><br />
                <div class="border border-dark p-1 d-flex justify-content-between">
                  <label for="">Laki-Laki</label>
                  <input type="radio" name="jenis_kelamin" value="laki laki" />
                  <label for="">Perempuan</label>
                  <input type="radio" name="jenis_kelamin" value="perempuan" />
                  <label for="">Struk kasir</label>
                  <input
                    type="radio"
                    name="jenis_kelamin"
                    value="tidak ingin diketahui"
                  />
                </div>
                <label class="mt-3" for="">Email</label><br />
                <input
                  class="w-100"
                  type="email"
                  name="email"
                  autocomplete="off"
                /><br />
                <label class="mt-3" for="">Password</label><br />
                <input
                  class="w-100"
                  type="password"
                  name="password"
                  autocomplete="off"
                /><br />
                <label class="mt-3" for="">Alamat</label><br />
                <input
                  class="w-100"
                  type="text"
                  name="alamat"
                  autocomplete="off"
                /><br />
                <label class="mt-3" for="">Foto ( opsional )</label><br />
                <input
                  class="w-100"
                  type="file"
                  name="foto"
                  accept="image/*"
                /><br />
                <input
                  class="mt-4 w-100 text-light border border-0 rounded"
                  type="submit"
                  value="Sign up"
                  style="background-color: #e92329"
                />
              </form>
            </div>
            <div class="col mt-3">
              <div class="row">
                <div class="col">
                  <p>
                    <a class="text-dark" href="login.php"
                      >Login ?</a
                    >
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>