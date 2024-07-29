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

    <link rel="stylesheet" crossorigin="" href="assets/compiled/css/app.css" />
    <link rel="stylesheet" crossorigin="" href="assets/compiled/css/app-dark.css" />
    <link rel="stylesheet" crossorigin="" href="assets/compiled/css/iconly.css" />
    <link rel="stylesheet" href="assets/compiled/css/copy-button.css" />
</head>

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="${home}">AVEE</a>
                        </div>
                        <div class="theme-toggle d-flex gap-2 align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                                height="20" preserveaspectratio="xMidYMid meet" viewbox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                        opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input me-0" type="checkbox" id="toggle-dark"
                                    style="cursor: pointer" />
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20"
                                preserveaspectratio="xMidYMid meet" viewbox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                                </path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>

                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        <li class="sidebar-item">
                            <a href="#sintaks" class="sidebar-link">
                                <i class="bi bi-tv-fill"></i>
                                <span>Sintaks PHP</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#struktur" class="sidebar-link">
                                <i class="bi bi-cpu"></i>
                                <span>Struktur kendali</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#function" class="sidebar-link">
                                <i class="bi bi-alt"></i>
                                <span>Function</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#string" class="sidebar-link">
                                <i class="bi bi-body-text"></i>
                                <span>String</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#array" class="sidebar-link">
                                <i class="bi bi-database"></i>
                                <span>Array</span>
                            </a>
                        </li>
                        <li class="sidebar-item has-sub" id="Form Validation">
                            <a href="#" class="sidebar-link">
                                <i class="bi bi-database-fill"></i>
                                <span>Database</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="crud" class="submenu-link">Main</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="crud/create.php" class="submenu-link">Create</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h1 class="m-0" id="sintaks"><i class="bi bi-code-slash"></i> Sintaks PHP</h1>
            </div>
            <div class="page-content">
                <div class="card">
                    <div class="card-content fs-5 p-4">
                        <h1>Default output</h1>
                        <p>cara menampilkan tulisan dalam php ada beberapa sintaks yaitu echo, print, print_r, var_dumb
                        </p>
                        <div class="highlight mb-3">
                            <p class="m-0"><?php echo "Hello world!" ?></p>
                            <p class="m-0"><?php print "Hello world!" ?></p>
                            <p class="m-0"><?php print_r("Hello world!") ?></p>
                            <p class="m-0"><?php var_dump("Hello world!") ?></p>
                        </div>
                        <div class="bd-code-snippet">
                            <div class="highlight">
                                <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="cl"><span class="nt">&lt;?php</span></span></span>
  <span class="line"><span class="cl"><span class="nt">echo "Hello world!"</span></span></span>
  <span class="line"><span class="cl"><span class="nt">print "Hello world!"</span></span></span>
  <span class="line"><span class="cl"><span class="nt">print_r "Hello world!"</span></span></span>
  <span class="line"><span class="cl"><span class="nt">var_dump "Hello world!"</span></span></span>
<span class="line"><span class="cl"><span class="nt">?&gt;</span></span></span></code></pre>
                            </div>
                        </div>
                        <!-- variable -->
                        <div>
                            <h1 class="mt-5">Variable</h1>
                            <p></p>
                            <div class="highlight mb-3">
                                <?php
                                $nama = "KennDeClouv";
                                ?>
                                <p><?php echo $nama ?></p>
                            </div>
                            <div class="bd-code-snippet">
                                <div class="highlight">
                                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="cl"><span class="nt">&lt;?php</span></span></span>
  <span class="line"><span class="cl"><span class="nt">$nama = "KennDeClouv"</span></span></span>
  <span class="line"><span class="cl"><span class="nt">echo $nama</span></span></span>
<span class="line"><span class="cl"><span class="nt">?&gt;</span></span></span></code></pre>
                                </div>
                            </div>
                        </div>
                        <!-- operator -->
                        <div>
                            <h1 class="mt-5">Operator</h1>
                            <p></p>
                            <div class="highlight mb-3">
                                <?php
                                $a = 10;
                                $b = 20;
                                ?>
                                <p><?php echo $a + $b ?></p>
                            </div>
                            <div class="bd-code-snippet">
                                <div class="highlight">
                                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="cl"><span class="nt">&lt;?php</span></span></span>
  <span class="line"><span class="cl"><span class="nt">$a = 10;</span></span></span>
  <span class="line"><span class="cl"><span class="nt">$b = 20;</span></span></span>
  <span class="line"><span class="cl"><span class="nt">echo $a + $b</span></span></span>
<span class="line"><span class="cl"><span class="nt">?&gt;</span></span></span>
<span class="line"><span class="cl"><span class="nt">// operator lainnya + - / * %</span></span></span>
</code></pre>
                                </div>
                            </div>
                        </div>
                        <!-- operator -->
                        <div>
                            <h1 class="mt-5">Penggabungan string / concat</h1>
                            <p></p>
                            <div class="highlight mb-3">
                                <?php
                                $nama_depan = "Kenn";
                                $nama_belakang = "DeClouv";
                                ?>
                                <p class="m-0"><?php echo $nama_depan . $nama_belakang ?></p>
                                <p class="m-0"><?php echo $nama_depan . " " . $nama_belakang ?></p>
                            </div>
                            <div class="bd-code-snippet">
                                <div class="highlight">
                                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="cl"><span class="nt">&lt;?php</span></span></span>
  <span class="line"><span class="cl"><span class="nt">$nama_depan = "Kenn";</span></span></span>
  <span class="line"><span class="cl"><span class="nt">$nama_belakang = "DeClouv";</span></span></span>
  <span class="line"><span class="cl"><span class="nt">echo $nama_depan.$nama_belakang</span></span></span>
  <span class="line"><span class="cl"><span class="nt">echo $nama_depan. " " .$nama_belakang</span></span></span>
<span class="line"><span class="cl"><span class="nt">?&gt;</span></span></span>
</code></pre>
                                </div>
                            </div>
                        </div>
                        <!-- assignment -->
                        <div>
                            <h1 class="mt-5">Assignment</h1>
                            <p>contoh assignment =, +=, -=, *=, /=, %=, .=</p>
                            <div class="highlight mb-3">
                                <?php
                                $c = 10;
                                $c += 5;

                                $nama_lengkap = "Kenn";
                                $nama_lengkap .= " ";
                                $nama_lengkap .= "DeClouv"
                                    ?>
                                <p class="m-0"><?php echo $c ?></p>
                                <p class="m-0"><?php echo $nama_lengkap ?></p>
                            </div>
                            <div class="bd-code-snippet">
                                <div class="highlight">
                                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="cl"><span class="nt">&lt;?php</span></span></span>
  <span class="line"><span class="cl"><span class="nt">$c = 10;</span></span></span>
  <span class="line"><span class="cl"><span class="nt">$c += 5;</span></span></span>
  <span class="line"><span class="cl"><span class="nt">echo $c</span></span></span>
  <span class="line"><span class="cl"><span class="nt"></span></span></span>
  <span class="line"><span class="cl"><span class="nt">$nama_lengkap = "Kenn";</span></span></span>
  <span class="line"><span class="cl"><span class="nt">$nama_lengkap .= " ";</span></span></span>
  <span class="line"><span class="cl"><span class="nt">$nama_lengkap .= "DeClouv"</span></span></span>
  <span class="line"><span class="cl"><span class="nt">echo $nama_lengkap</span></span></span>
<span class="line"><span class="cl"><span class="nt">?&gt;</span></span></span>
</code></pre>
                                </div>
                            </div>
                        </div>
                        <!-- perbandingan -->
                        <div>
                            <h1 class="mt-5">Perbandingan</h1>
                            <p>contoh perbandingan <,>, <=,>=, ==, !=</p>
                            <div class="highlight mb-3">
                                <p class="m-0"><?php var_dump(1 > 5) ?></p>
                                <p class="m-0"><?php var_dump(1 == "1") ?></p>
                            </div>
                            <div class="bd-code-snippet">
                                <div class="highlight">
                                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="cl"><span class="nt">&lt;?php</span></span></span>
  <span class="line"><span class="cl"><span class="nt">var_dump(1 > 5) </span></span></span>
  <span class="line"><span class="cl"><span class="nt">var_dump(1 == "1") </span></span></span>
<span class="line"><span class="cl"><span class="nt">?&gt;</span></span></span>
</code></pre>
                                </div>
                            </div>
                        </div>
                        <!-- perbandingan -->
                        <div>
                            <h1 class="mt-5">Identitas</h1>
                            <p>contoh identitas ===, !==</p>
                            <div class="highlight mb-3">
                                <p class="m-0"><?php var_dump(1 === 1) ?></p>
                                <p class="m-0"><?php var_dump(1 === "1") ?></p>
                            </div>
                            <div class="bd-code-snippet">
                                <div class="highlight">
                                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="cl"><span class="nt">&lt;?php</span></span></span>
  <span class="line"><span class="cl"><span class="nt">var_dump(1 === 1) </span></span></span>
  <span class="line"><span class="cl"><span class="nt">var_dump(1 === "1") </span></span></span>
<span class="line"><span class="cl"><span class="nt">?&gt;</span></span></span>
</code></pre>
                                </div>
                            </div>
                        </div>
                        <!-- logika -->
                        <div>
                            <h1 class="mt-5">logika</h1>
                            <p>contoh logika &&, ||, !</p>
                            <div class="highlight mb-3">
                                <p class="m-0"><?php var_dump(1 < 2 && 2 < 3) ?></p>
                                <p class="m-0"><?php var_dump(1 > 2 && 2 < 3) ?></p>
                                <p class="m-0"><?php var_dump(1 > 2 || 2 < 3) ?></p>
                            </div>
                            <div class="bd-code-snippet">
                                <div class="highlight">
                                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="cl"><span class="nt">&lt;?php</span></span></span>
  <span class="line"><span class="cl"><span class="nt">var_dump(1 < 2 && 2 < 3)</span></span></span>
  <span class="line"><span class="cl"><span class="nt">var_dump(1 > 2 && 2 < 3)</span></span></span>
  <span class="line"><span class="cl"><span class="nt">var_dump(1 > 2 || 2 < 3)</span></span></span>
<span class="line"><span class="cl"><span class="nt">?&gt;</span></span></span>
</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- STRUKTUR KENDALI -->
            <h1 class="mb-0 mt-5" id="struktur"><i class="bi bi-cpu mb-3"></i> Struktur Kendali</h1>
            <div class="card mt-4 fs-5">
                <div class="card-body ">
                    <!-- for -->
                    <div>
                        <h2 class="">For</h2>
                        <div class="highlight">
                            <?php
                            for ($i = 0; $i < 3; $i++) {
                                echo "<p class='m-0'>Hello world!</p>";
                            }
                            ?>
                        </div>
                        <div class="highlight mt-4">
                            <div class="bd-code-snippet">
                                <div class="highlight">
                                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="cl"><span class="nt">&lt;?php</span></span></span>
  <span class="line"><span class="cl"><span class="nt">for ($i = 0; $i < 3; $i++) {</span></span></span>
  <span class="line"><span class="cl"><span class="nt">    echo "&lt;p class='m-0'&gt;Hello world!&lt;/p&gt;;</span></span></span>
  <span class="line"><span class="cl"><span class="nt">}</span></span></span>
<span class="line"><span class="cl"><span class="nt">?&gt;</span></span></span></code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- while -->
                    <div>
                        <h2 class="mt-4">While</h2>
                        <div class="highlight">
                            <?php
                            $i = 0;
                            while ($i < 5) {
                                echo "<p class='m-0'>Hello world!</p>";
                                $i++;
                            }
                            ?>
                        </div>
                        <div class="highlight mt-4">
                            <div class="bd-code-snippet">
                                <div class="highlight">
                                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="cl"><span class="nt">&lt;?php</span></span></span>
  <span class="line"><span class="cl"><span class="nt">$i = 0;</span></span></span>
  <span class="line"><span class="cl"><span class="nt">while ($i < 5) {</span></span></span>
  <span class="line"><span class="cl"><span class="nt">    echo "&lt;p class='m-0'&gt;Hello world!&lt;/p&gt;;</span></span></span>
  <span class="line"><span class="cl"><span class="nt">    $i++;</span></span></span>
  <span class="line"><span class="cl"><span class="nt">}</span></span></span>
<span class="line"><span class="cl"><span class="nt">?&gt;</span></span></span></code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- do -->
                    <div>
                        <h2 class="mt-4">Do while</h2>
                        <div class="highlight">
                            <?php
                            $i = 3;
                            do {
                                echo "<p class='m-0'>Hello world!</p>";
                                $i++;
                            } while ($i < 3);
                            ?>
                        </div>
                        <div class="highlight mt-4">
                            <div class="bd-code-snippet">
                                <div class="highlight">
                                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="cl"><span class="nt">&lt;?php</span></span></span>
  <span class="line"><span class="cl"><span class="nt">$i = 3;</span></span></span>
  <span class="line"><span class="cl"><span class="nt">do {</span></span></span>
  <span class="line"><span class="cl"><span class="nt">    echo "&lt;p class='m-0'&gt;Hello world!&lt;/p&gt;;</span></span></span>
  <span class="line"><span class="cl"><span class="nt">    $i++;</span></span></span>
  <span class="line"><span class="cl"><span class="nt">} while ($i < 3);</span></span></span>
<span class="line"><span class="cl"><span class="nt">?&gt;</span></span></span></code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- contoh -->
                    <div>
                        <h2 class="mt-4">Contoh</h2>
                        <div class="highlight">
                            <table class="table table-responsive">
                                <?php
                                for ($i = 0; $i < 3; $i++) {
                                    echo "<tr>";
                                    for ($j = 0; $j < 5; $j++) {
                                        echo "<td>$i,$j</td>";
                                    }
                                    echo "</tr>";
                                }
                                ?>
                            </table>
                        </div>
                        <div class="highlight mt-4">
                            <div class="bd-code-snippet">
                                <div class="highlight">
                                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="cl"><span class="nt">&lt;?php</span></span></span>
<span class="line"><span class="cl"><span class="nt">    for ($i=0; $i < 3; $i++) { </span></span></span>
<span class="line"><span class="cl"><span class="nt">        echo "&lt;tr&gt;";</span></span></span>
  <span class="line"><span class="cl"><span class="nt">        for ($j=0; $j < 5; $j++) { </span></span></span>
  <span class="line"><span class="cl"><span class="nt">            echo "&lt;td&gt; $i,$j&lt;/td&gt;";</span></span></span>
  <span class="line"><span class="cl"><span class="nt">        }</span></span></span>
<span class="line"><span class="cl"><span class="nt">        echo "&lt;/tr&gt; ";</span></span></span>
<span class="line"><span class="cl"><span class="nt">    }</span></span></span>
<span class="line"><span class="cl"><span class="nt">?&gt;</span></span></span></code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- contoh -->
                    <div>
                        <h2 class="mt-4">Contoh templating</h2>
                        <div class="highlight">
                            <table class="table table-responsive">
                                <?php for ($i = 0; $i < 3; $i++) { ?>
                                    <tr>
                                        <?php for ($j = 0; $j < 5; $j++) { ?>
                                            <td><?= "$i,$j" ?></td>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                        <div class="highlight mt-4">
                            <div class="bd-code-snippet">
                                <div class="highlight">
                                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="line"><span class="cl"><span class="nt">   &lt;?php for ($i = 0; $i < 3; $i++) { ?&gt;</span></span></span>
<span class="line"><span class="cl"><span class="nt">       &lt;tr&gt;</span></span></span>
<span class="line"><span class="cl"><span class="nt">           &lt;?php for ($j=0; $j < 5; $j++) { &gt;</span></span></span>
<span class="line"><span class="cl"><span class="nt">               &lt;td&gt;&lt;?php echo "$i,$j" ?&gt;&lt;/td&gt;</span></span></span>
<span class="line"><span class="cl"><span class="nt">           &lt;?php }?&gt;</span></span></span>
<span class="line"><span class="cl"><span class="nt">       &lt;/tr&gt;</span></span></span>
<span class="line"><span class="cl"><span class="nt">   &lt;?php } ?&gt;</span></span></span></code></pre>
                                </div>
                            </div>
                        </div>
                        <div class="highlight mt-2">
                            <div class="bd-code-snippet">
                                <div class="highlight">
                                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="line"><span class="cl"><span class="nt">   &lt;?php for ($i = 0; $i < 3; $i++) : ?&gt;</span></span></span>
<span class="line"><span class="cl"><span class="nt">       &lt;tr&gt;</span></span></span>
<span class="line"><span class="cl"><span class="nt">           &lt;?php for ($j=0; $j < 5; $j++) : &gt;</span></span></span>
<span class="line"><span class="cl"><span class="nt">               &lt;td&gt;&lt;?= "$i,$j" ?&gt;&lt;/td&gt;</span></span></span>
<span class="line"><span class="cl"><span class="nt">           &lt;?php endfor;?&gt;</span></span></span>
<span class="line"><span class="cl"><span class="nt">       &lt;/tr&gt;</span></span></span>
<span class="line"><span class="cl"><span class="nt">   &lt;?php endfor; ?&gt;</span></span></span></code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- penlondisian -->
                    <div>
                        <h2 class="mt-4">Pengkondisian</h2>
                        <div class="highlight">
                            <?php
                            $nilai = 750;
                            if ($nilai < 74) {
                                echo "KKM";
                            } elseif ($nilai > 75 && $nilai <= 100) {
                                echo "LULUS";
                            } elseif ($nilai > 100) {
                                echo "NILAI INVALID";
                            } else {
                                echo "PAS";
                            }
                            ?>
                        </div>
                        <div class="highlight mt-4">
                            <div class="bd-code-snippet">
                                <div class="highlight">
                                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="cl"><span class="nt">&lt;?php</span></span></span>
<span class="line"><span class="cl"><span class="nt">   $nilai = 750;</span></span></span>
<span class="line"><span class="cl"><span class="nt">   if ($nilai < 74) {</span></span></span>
<span class="line"><span class="cl"><span class="nt">       echo "KKM";</span></span></span>
<span class="line"><span class="cl"><span class="nt">   }elseif ($nilai > 75 && $nilai <= 100) {</span></span></span>
<span class="line"><span class="cl"><span class="nt">       echo "LULUS";</span></span></span>
<span class="line"><span class="cl"><span class="nt">   }elseif ($nilai > 100) {</span></span></span>
<span class="line"><span class="cl"><span class="nt">       echo "NILAI INVALID";</span></span></span>
<span class="line"><span class="cl"><span class="nt">   }else{</span></span></span>
<span class="line"><span class="cl"><span class="nt">       echo "PAS";</span></span></span>
<span class="line"><span class="cl"><span class="nt">   }</span></span></span>
<span class="line"><span class="cl"><span class="nt">?&gt;</span></span></span></code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FUNCTION -->
            <h1 class="mb-0 mt-5" id="function"><i class="bi bi-alt mb-3"></i> Function</h1>
            <div class="card mt-4">
                <div class="card-body fs-5">
                    <!-- date -->
                    <div>
                        <h2>date();</h2>
                        <div class="highlight mt-3">
                            <p class="m-0"><?php echo date("l"); ?></p>
                            <p class="m-0"><?php echo date("l", time() + 60 * 60 * 24 * 10); ?></p>
                            <p class="m-0"><?php echo date("m.d.y"); ?></p>
                            <p class="m-0"><?php echo date("M D Y"); ?></p>
                            <p class="m-0"><?php echo time(); ?></p>
                            <p class="m-0"><?php echo date("j, n, Y"); ?></p>
                            <p class="m-0"><?php echo date("D M j G:i:s T Y"); ?></p>
                            <p class="m-0"><?php echo date("F j, Y, g:i a"); ?></p>
                        </div>
                        <div class="highlight mt-2">
                            <div class="bd-code-snippet">
                                <div class="highlight">
                                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="cl"><span class="nt">&lt;?php</span></span></span>
      <span class="line"><span class="cl"><span class="nt">echo date("l");</span></span></span> 
      <span class="line"><span class="cl"><span class="nt">echo date("l", time()+60*60*24*10);</span></span></span> 
      <span class="line"><span class="cl"><span class="nt">echo date("m.d.y");</span></span></span> 
      <span class="line"><span class="cl"><span class="nt">echo date("M.D.Y");</span></span></span> 
      <span class="line"><span class="cl"><span class="nt">echo time();</span></span></span> 
      <span class="line"><span class="cl"><span class="nt">echo date("j, n, Y");</span></span></span>   
      <span class="line"><span class="cl"><span class="nt">echo date("D M j G:i:s T Y");</span></span></span>   
      <span class="line"><span class="cl"><span class="nt">echo date("F j, Y, g:i a");</span></span></span> 
    <span class="line"><span class="cl"><span class="nt">?&gt;</span></span></span></code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- date -->
                    <div>
                        <h2 class="mt-4">mktime();</h2>
                        <div class="highlight mt-3">
                            <p class="m-0"><?php echo mktime(0, 0, 0, 5, 27, 2006); ?></p>
                            <p class="m-0"><?php echo date("l", mktime(0, 0, 0, 5, 27, 2006)); ?></p>
                            <p class="m-0"><?php echo date("D d M Y ", mktime(0, 0, 0, 5, 27, 2006)); ?></p>
                        </div>
                        <div class="highlight mt-2">
                            <div class="bd-code-snippet">
                                <div class="highlight">
                                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="cl"><span class="nt">&lt;?php</span></span></span>
  <span class="line"><span class="cl"><span class="nt">echo mktime(0,0,0,5,27,2006);</span></span></span> 
  <span class="line"><span class="cl"><span class="nt">echo date("l",mktime(0,0,0,5,27,2006)):</span></span></span> 
  <span class="line"><span class="cl"><span class="nt">echo date("D d M Y ",mktime(0,0,0,5,27,2006));</span></span></span> 
<span class="line"><span class="cl"><span class="nt">?&gt;</span></span></span></code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- date -->
                    <div>
                        <h2 class="mt-4">strtotime();</h2>
                        <div class="highlight mt-3">
                            <p class="m-0"><?php echo strtotime("27 may 2006"); ?></p>
                            <p class="m-0"><?php echo date("l", strtotime("27 may 2006")); ?></p>
                        </div>
                        <div class="highlight mt-2">
                            <div class="bd-code-snippet">
                                <div class="highlight">
                                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="cl"><span class="nt">&lt;?php</span></span></span>
  <span class="line"><span class="cl"><span class="nt">echo strtotime("27 may 2006");</span></span></span> 
  <span class="line"><span class="cl"><span class="nt">echo date("l",strtotime("27 may 2006"));</span></span></span> 
<span class="line"><span class="cl"><span class="nt">?&gt;</span></span></span></code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- STRING -->
            <h1 class="mb-0 mt-5" id="string"><i class="bi bi-body-text mb-3"></i> String</h1>
            <div class="card mt-4">
                <div class="card-body fs-5">
                    <!-- date -->
                    <div>
                        <h2>str();</h2>
                        <div class="highlight mt-3">
                            <p class="m-0"><?php echo strlen("hello world!") ?></p>
                            <p class="m-0"><?php echo strpos("Hello, World!", "World"); ?></p>
                            <p class="m-0"><?php echo substr("Hello, World!", 7, 5); ?></p>
                            <p class="m-0"><?php echo str_replace("World", "PHP", "Hello, World!"); ?></p>
                            <p class="m-0"><?php echo strtolower("HELLO, WORLD!"); ?></p>
                            <p class="m-0"><?php echo strtoupper("hello, world!"); ?></p>
                            <p class="m-0"><?php echo trim("  Hello, World!  "); ?></p>
                        </div>
                        <div class="highlight mt-2">
                            <div class="bd-code-snippet">
                                <div class="highlight">
                                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="cl"><span class="nt">&lt;?php</span></span></span>
  <span class="line"><span class="cl"><span class="nt">echo strlen("Hello, World!"); </span></span></span>
  <span class="line"><span class="cl"><span class="nt">echo strpos("Hello, World!", "World");</span></span></span>
  <span class="line"><span class="cl"><span class="nt">echo substr("Hello, World!", 7, 5); </span></span></span>
  <span class="line"><span class="cl"><span class="nt">echo str_replace("World", "PHP", "Hello, World!"); </span></span></span>
  <span class="line"><span class="cl"><span class="nt">echo strtolower("HELLO, WORLD!");</span></span></span>
  <span class="line"><span class="cl"><span class="nt">echo strtoupper("hello, world!"); </span></span></span>
  <span class="line"><span class="cl"><span class="nt">echo trim("  Hello, World!  ");</span></span></span>
<span class="line"><span class="cl"><span class="nt">?&gt;</span></span></span></code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- date -->
                    <div>
                        <h2 class="mt-4">array();</h2>
                        <div class="highlight mt-3">
                            <p class="m-0"><?php $array = [1, 2];
                            array_push($array, 3, 4);
                            print_r($array); ?></p>
                            <p class="m-0"><?php $array = [1, 2, 3, 4];
                            array_pop($array);
                            print_r($array); ?></p>
                            <p class="m-0"><?php $array1 = [1, 2];
                            $array2 = [3, 4];
                            $result = array_merge($array1, $array2);
                            print_r($result); ?></p>
                            <p class="m-0"><?php $array1 = [1, 2, 3, 4];
                            $array2 = [3, 4, 5, 6];
                            $result = array_diff($array1, $array2);
                            print_r($result); ?></p>
                            <p class="m-0"><?php $array = ["a" => 1, "b" => 2, "c" => 3];
                            print_r(array_keys($array)); ?></p>
                            <p class="m-0"><?php $array = ["a" => 1, "b" => 2, "c" => 3];
                            print_r(array_values($array)); ?></p>

                        </div>
                        <div class="highlight mt-2">
                            <div class="bd-code-snippet">
                                <div class="highlight">
                                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="cl"><span class="nt">&lt;?php</span></span></span>
  <span class="line"><span class="cl"><span class="nt">$array = [1, 2];
  array_push($array, 3, 4);
  print_r($array);</span></span></span>

  <span class="line"><span class="cl"><span class="nt">$array = [1, 2, 3, 4];
  array_pop($array);
  print_r($array);</span></span></span>

  <span class="line"><span class="cl"><span class="nt">$array1 = [1, 2];
  $array2 = [3, 4];
  $result = array_merge($array1, $array2);
  print_r($result);</span></span></span>

  <span class="line"><span class="cl"><span class="nt">$array1 = [1, 2, 3, 4];
  $array2 = [3, 4, 5, 6];
  $result = array_diff($array1, $array2);
  print_r($result);</span></span></span>

  <span class="line"><span class="cl"><span class="nt">$array = ["a" => 1, "b" => 2, "c" => 3];
  print_r(array_keys($array));</span></span></span>

  <span class="line"><span class="cl"><span class="nt">$array = ["a" => 1, "b" => 2, "c" => 3];
  print_r(array_values($array));</span></span></span>
<span class="line"><span class="cl"><span class="nt">?&gt;</span></span></span></code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- file system function -->
                    <div>
                        <h2 class="mt-4">file system function</h2>
                        <div class="highlight mt-3">
                            <p class="m-0"><?php
                            $file = fopen("test.txt", "w");
                            fwrite($file, "Hello, World!");
                            fclose($file);

                            // file_get_contents, file_put_contents
                            file_put_contents("test.txt", "Hello, PHP!");
                            echo file_get_contents("test.txt");

                            // unlink
                            unlink("test.txt");
                            ?></p>
                        </div>
                        <div class="highlight mt-2">
                            <div class="bd-code-snippet">
                                <div class="highlight">
                                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="cl"><span class="nt">&lt;?php</span></span></span>
<span class="line"><span class="cl"><span class="nt">$file = fopen("test.txt", "w");
fwrite($file, "Hello, World!");
fclose($file);

// file_get_contents, file_put_contents
file_put_contents("test.txt", "Hello, PHP!");
echo file_get_contents("test.txt");

// unlink
unlink("test.txt");</span></span></span>
<span class="line"><span class="cl"><span class="nt">?&gt;</span></span></span>
</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- file system function -->
                    <div>
                        <h2 class="mt-4">math</h2>
                        <div class="highlight mt-3">
                            <p class="m-0"><?php echo abs(-5); ?></p>
                            <p class="m-0"><?php echo ceil(4.2); ?></p>
                            <p class="m-0"><?php echo floor(4.7); ?></p>
                            <p class="m-0"><?php echo max(1, 3, 5, 2, 4); ?></p>
                            <p class="m-0"><?php echo min(1, 3, 5, 2, 4); ?></p>
                            <p class="m-0"><?php echo rand(1, 10); ?></p>
                            <p class="m-0"><?php echo round(4.5); ?></p>
                        </div>
                        <div class="highlight mt-2">
                            <div class="bd-code-snippet">
                                <div class="highlight">
                                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="cl"><span class="nt">&lt;?php</span></span></span>
  <span class="line"><span class="cl"><span class="nt">echo abs(-5); // Output: 5</span></span></span>
  <span class="line"><span class="cl"><span class="nt">echo ceil(4.2); // Output: 5</span></span></span>
  <span class="line"><span class="cl"><span class="nt">echo floor(4.7); // Output: 4</span></span></span>
  <span class="line"><span class="cl"><span class="nt">echo max(1, 3, 5, 2, 4); // Output: 5</span></span></span>
  <span class="line"><span class="cl"><span class="nt">echo min(1, 3, 5, 2, 4); // Output: 1</span></span></span>
  <span class="line"><span class="cl"><span class="nt">echo rand(1, 10); // Output: Random number between 1 and 10</span></span></span>
  <span class="line"><span class="cl"><span class="nt">echo round(4.5); // Output: 5</span></span></span>
<span class="line"><span class="cl"><span class="nt">?&gt;</span></span></span>
</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- file system function -->
                    <div>
                        <h2 class="mt-4">math</h2>
                        <div class="highlight mt-3">
                            <p class="m-0"><?php // json_encode
                            $data = ["name" => "John", "age" => 30];
                            $json = json_encode($data);
                            echo $json; // Output: {"name":"John","age":30} ?></p>
                            <p class="m-0"><?php // json_decode
                            $json = '{"name":"John","age":30}';
                            $data = json_decode($json, true);
                            print_r($data); // Output: Array ( [name] => John [age] => 30 ) ?></p>
                        </div>
                        <div class="highlight mt-2">
                            <div class="bd-code-snippet">
                                <div class="highlight">
                                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="cl"><span class="nt">&lt;?php</span></span></span>
  <span class="line"><span class="cl"><span class="nt">// json_encode
  $data = ["name" => "John", "age" => 30];
  $json = json_encode($data);
  echo $json; // Output: {"name":"John","age":30}</span></span></span>
  
  <span class="line"><span class="cl"><span class="nt">// json_decode
  $json = '{"name":"John","age":30}';
  $data = json_decode($json, true);
  print_r($data); // Output: Array ( [name] => John [age] => 30 )</span></span></span>
<span class="line"><span class="cl"><span class="nt">?&gt;</span></span></span>
</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- file system function -->
                    <div>
                        <h2 class="mt-4">function</h2>
                        <div class="highlight mt-3">
                            <?php
                            function salam($nama = 'woila')
                            {
                                return "selamat pagi $nama";
                            }
                            ; ?>
                            <p class="m-0"><?= salam("KennDeClouv") ?></p>
                        </div>
                        <div class="highlight mt-2">
                            <div class="bd-code-snippet">
                                <div class="highlight">
                                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="cl"><span class="nt">&lt;?php</span></span></span>
  <span class="line"><span class="cl"><span class="nt">function salam($nama = 'woila'){
    return "selamat pagi $nama";
  };</span></span></span>
<span class="line"><span class="cl"><span class="nt">?&gt;</span></span></span>
</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- STRING -->
            <h1 class="mb-0 mt-5" id="array"><i class="bi bi-database mb-3"></i> array</h1>
            <div class="card mt-4">
                <div class="card-body fs-5">
                    <!-- array -->
                    <div>
                        <h2>array() & []</h2>
                        <div class="highlight mt-3">
                            <?php
                            $hari = array("senin", "selasa", "rabu", "kamis");
                            $bulan = ["jan", "feb", "mar", "apr"];

                            $hari[] = "jum'at";
                            $hari[] = "sabtu";
                            $hari[] = "minggu";
                            ?>
                            <p class="m-0"><?php echo print_r($hari) ?></p>
                            <p class="m-0"><?php echo var_dump($bulan) ?></p>
                            <p class="m-0"><?php echo $hari[0] ?></p>
                            <p class="m-0"><?php echo $bulan[3] ?></p>
                        </div>
                        <div class="highlight mt-2">
                            <div class="bd-code-snippet">
                                <div class="highlight">
                                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="cl"><span class="nt">&lt;?php</span></span></span>
  <span class="line"><span class="cl"><span class="nt">//cara lama
  $hari = array("senin","selasa","rabu","kamis");
  print_r($hari)

  //cara baru
  $bulan = ["jan","feb","mar","apr"];
  var_dumb($bulan)

  echo $hari[0]
  echo $bulan[3]

  $hari[]="jum'at";
  $hari[]="sabtu";
  $hari[]="minggu";</span></span></span>
<span class="line"><span class="cl"><span class="nt">?&gt;</span></span></span></code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- array -->
                    <div>
                        <h2 class="mt-4">contoh</h2>
                        <?php
                        $angka = ["1", "4", "8", "11", "14", "17", "20"]
                            ?>
                        <div class="highlight">
                            <div class="d-flex gap-3">
                                <?php for ($i = 0; $i < count($angka); $i++): ?>
                                    <div class="bg-primary p-3 rounded">
                                        <?= $angka[$i] ?>
                                    </div>
                                <?php endfor; ?>
                            </div>
                            <div class="mt-3 d-flex gap-3">
                                <?php foreach ($angka as $a): ?>
                                    <div class="bg-primary p-3 rounded">
                                        <?= $a ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="highlight mt-2">
                            <div class="bd-code-snippet">
                                <div class="highlight">
                                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="cl"><span class="nt">&lt;?php</span></span></span>
  <span class="line"><span class="cl"><span class="nt">&lt;div class="d-flex gap-3"&gt;
      &lt;?php for ($i = 0; $i < count($angka); $i++): ?&gt;
          &lt;div class="bg-primary p-3 rounded"&gt;
              &lt;?= $angka[$i] ?&gt;
          &lt;/div&gt;
      &lt;?php endfor; ?&gt;
  &lt;/div&gt;
  &lt;div class="mt-3 d-flex gap-3"&gt;
      &lt;?php foreach ($angka as $a): ?&gt;
          &lt;div class="bg-primary p-3 rounded"&gt;
              &lt;?= $a ?&gt;
          &lt;/div&gt;
      &lt;?php endforeach; ?&gt;
  &lt;/div&gt;</span></span></span>
<span class="line"><span class="cl"><span class="nt">?&gt;</span></span></span></code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- array -->
                    <div class="mt-4">
                        <?php
                        $dataa = [
                            ["KennDeClouv", "18", "27 may 2006", "Malang"],
                            ["RihaaDeClouv", "17", "15 july 2007", "Madiun"],
                        ]
                            ?>
                        <div class="highlight">
                            <table class="table table-responsive">
                                <thead>
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    <th>Tanggal</th>
                                    <th>Alamat</th>
                                </thead>
                                <tbody>
                                    <?php foreach ($dataa as $dt): ?>
                                        <tr>
                                            <td><?= $dt[0] ?></td>
                                            <td><?= $dt[1] ?></td>
                                            <td><?= $dt[2] ?></td>
                                            <td><?= $dt[3] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="highlight mt-2">
                            <div class="bd-code-snippet">
                                <div class="highlight">
                                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="php"><span class="line"><span class="cl"><span class="nt">&lt;?php</span></span></span>
  <span class="line"><span class="cl"><span class="nt">&lt;table class="table table-responsive"&gt;
      &lt;thead&gt;
          &lt;th&gt;Nama&lt;/th&gt;
          &lt;th&gt;Umur&lt;/th&gt;
          &lt;th&gt;Tanggal&lt;/th&gt;
          &lt;th&gt;Alamat&lt;/th&gt;
      &lt;/thead&gt;
      &lt;tbody&gt;
          &lt;?php foreach ($dataa as $dt): ?&gt;
              &lt;tr&gt;
                  &lt;td&gt;<?= $dt[0] ?>&lt;/td&gt;
                  &lt;td&gt;<?= $dt[1] ?>&lt;/td&gt;
                  &lt;td&gt;<?= $dt[2] ?>&lt;/td&gt;
                  &lt;td&gt;<?= $dt[3] ?>&lt;/td&gt;
              &lt;/tr&gt;
          &lt;?php endforeach; ?&gt;
      &lt;/tbody&gt;
  &lt;/table&gt;</span></span></span>
<span class="line"><span class="cl"><span class="nt">?&gt;</span></span></span></code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/static/js/components/dark.js"></script>
    <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/compiled/js/app.js"></script>
</body>

</html>