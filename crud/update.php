<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Docs</title>

    <link rel="shortcut icon"
        href="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2033%2034'%20fill-rule='evenodd'%20stroke-linejoin='round'%20stroke-miterlimit='2'%20xmlns:v='https://vecta.io/nano'%3e%3cpath%20d='M3%2027.472c0%204.409%206.18%205.552%2013.5%205.552%207.281%200%2013.5-1.103%2013.5-5.513s-6.179-5.552-13.5-5.552c-7.281%200-13.5%201.103-13.5%205.513z'%20fill='%23435ebe'%20fill-rule='nonzero'/%3e%3ccircle%20cx='16.5'%20cy='8.8'%20r='8.8'%20fill='%2341bbdd'/%3e%3c/svg%3e"
        type="image/x-icon" />
    <link rel="shortcut icon"
        href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC"
        type="image/png" />

    <link rel="stylesheet" crossorigin="" href="../assets/compiled/css/app.css" />
    <link rel="stylesheet" crossorigin="" href="../assets/compiled/css/app-dark.css" />
    <link rel="stylesheet" crossorigin="" href="../assets/compiled/css/iconly.css" />
    <link rel="stylesheet" href="../assets/compiled/css/copy-button.css" />
</head>

<body>
    <script src="../assets/static/js/initTheme.js"></script>
    <div id="app">

        <div class="container">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <!-- STRING -->
            <h1 class="mb-0" id="array"><i class="bi bi-database"></i> CRUD</h1>
            <?php
            require '../conn.php';
            require '../functions.php';
            $id = $_GET["id"];

            $data = query("SELECT * FROM accounts WHERE id = $id")[0];

            if (isset($_POST["submit"])) {
                $name = $_POST["nama"];
                $umur = $_POST["umur"];
                $tanggal = $_POST["tanggal_lahir"];
                $alamat = $_POST["alamat"];

                $query = "UPDATE accounts SET
                        nama = '$name',
                        umur = '$umur',
                        tanggal_lahir = '$tanggal',
                        alamat = '$alamat' WHERE id = $id";

                mysqli_query($conn, $query);
                if (mysqli_affected_rows($conn) > 0) {
                    echo "
                    <script>
                        alert('data berhasil diubah')
                        document.location.href = 'index.php'
                    </script>";
                } else {
                    echo "
                    <script>
                        alert('data gagal diubah!')
                        document.location.href = 'index.php'
                    </script>";
                }
            }

            ?>
            <div class="card mt-4">
                <div class="card-body fs-5">
                    <!-- array -->
                    <div>
                        <div class="">
                            <h4 class="mt-3">Update data</h4>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form form-vertical" method="POST">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group has-icon-left">
                                                        <label for="first-name-icon">Nama</label>
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control"
                                                                value="<?php print_r($data["nama"]) ?>"
                                                                id="first-name-icon" name="nama" required>
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-person"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group has-icon-left">
                                                        <label for="first-name-icon">Umur</label>
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control"
                                                                value="<?php print_r($data["umur"]) ?>"
                                                                id="first-name-icon" name="umur" required>
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-alt"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group has-icon-left">
                                                        <label for="first-name-icon">Tanggal lahir</label>
                                                        <div class="position-relative">
                                                            <input type="date" class="form-control"
                                                                value="<?php print_r($data["tanggal_lahir"]) ?>"
                                                                id="first-name-icon" name="tanggal_lahir" required>
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-calendar"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group has-icon-left">
                                                        <label for="first-name-icon">Alamat</label>
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control"
                                                                value="<?php print_r($data["alamat"]) ?>"
                                                                id="first-name-icon" name="alamat" required>
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-house"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <div class="checkbox mt-2">
                                                            <input type="checkbox" id="remember-me-v"
                                                                class="form-check-input" checked="">
                                                            <label for="remember-me-v">Remember Me</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1"
                                                        name="submit">Submit</button>
                                                    <a href="index.php"
                                                        class="btn btn-light-secondary me-1 mb-1">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card fs-5">
                <div class="card-body">
                    <div class="bd-code-snippet">
                        <div class="highlight">
                            <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="cl"><span class="nt">&lt;?php</span></span></span>
  <span class="line"><span class="cl"><span class="nt">require '../conn.php';
  require '../functions.php';

  //collect data id
  $id = $_GET["id"];

  //collect information
  $data = query("SELECT * FROM accounts WHERE id = $id")[0];

  //check if submit button clicked
  if (isset($_POST["submit"])) {
      $name = $_POST["nama"];
      $umur = $_POST["umur"];
      $tanggal = $_POST["tanggal_lahir"];
      $alamat = $_POST["alamat"];
      $query = "UPDATE accounts SET
              nama = '$name',
              umur = '$umur',
              tanggal_lahir = '$tanggal',
              alamat = '$alamat' WHERE id = $id";

      //quary
      mysqli_query($conn, $query);

      //
      if (mysqli_affected_rows($conn) > 0) {
          echo "
          &lt;script&gt;
              alert('data berhasil diubah')
              document.location.href = 'index.php'
          &lt;/script&gt;";
      } else {
          echo "
          &lt;script&gt;
              alert('data gagal diubah!')
              document.location.href = 'index.php'
          &lt;/script&gt;";
      }
  }
</span></span></span>
<span class="line"><span class="cl"><span class="nt">?&gt;</span></span></span></code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/static/js/components/dark.js"></script>
    <script src="../assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../assets/compiled/js/app.js"></script>
</body>

</html>