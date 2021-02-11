<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="assets/css/style.css" rel="stylesheet"> 

    <title>Hello, world!</title>
  </head>
  <body>
    
  <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="#" class>Dashboard</a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Penakar Hujan Otomatis / Hellman</h3>
                            </div>
                            <form>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="stasiun" class="form-label">Input Nama Stasiun</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="3jam">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="no_stasiun" class="form-label">No. Stasiun</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="6jam">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="kabupaten" class="form-label">Kabupaten</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="12jam">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="ketinggian" class="form-label">Ketinggian</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="3jam">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="bulan" class="form-label">Laporan Bulan</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="6jam">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="tahun" class="form-label">Tahun</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="12jam">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="form" class="form-label">Form</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="3jam">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nama_pengamat" class="form-label">Nama Pengamat</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="6jam">
                                    </div>
                                </div>
                                <br>
                                <div class="col-6">
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            </form>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h3>Intensitas Hujan Dalam Menit</h3>
                            </div>
                            <form>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-sm">
                                        <label for="input5menit" class="form-label">5 Menit</label>
                                        <input type="text" class="form-control" placeholder="5 menit pertama" aria-label="5menit">
                                    </div>
                                    <div class="col-sm">
                                        <label for="input10menit" class="form-label">10 Menit</label>
                                        <input type="text" class="form-control" placeholder="10 menit pertama" aria-label="10menit">
                                    </div>
                                    <div class="col-sm">
                                        <label for="input15menit" class="form-label">15 Menit</label>
                                        <input type="text" class="form-control" placeholder="15 menit Pertama" aria-label="15menit">
                                    </div>
                                    <div class="col-sm">
                                        <label for="input30menit" class="form-label">30 Menit</label>
                                        <input type="text" class="form-control" placeholder="30 menit pertama" aria-label="30menit">
                                    </div>
                                </div>
                                <br>
                                <div class="row g-3">
                                    <div class="col-md-3">
                                        <label for="input45menit" class="form-label">45 Menit</label>
                                        <input type="text" class="form-control" placeholder="45 menit pertama" aria-label="45menit">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="input60menit" class="form-label">60 Menit</label>
                                        <input type="text" class="form-control" placeholder="60 menit pertama" aria-label="60menit">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="input120menit" class="form-label">120 Menit</label>
                                        <input type="text" class="form-control" placeholder="120 menit Pertama" aria-label="120menit">
                                    </div>
                                </div>
                                <br>
                                <div class="col-6">
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            </form>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h3>Intensitas Hujan Dalam Jam</h3>
                            </div>
                            <form>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-3">
                                        <label for="input3jam" class="form-label">3 Jam</label>
                                        <input type="text" class="form-control" placeholder="3 jam pertama" aria-label="3jam">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="input6jam" class="form-label">6 Jam</label>
                                        <input type="text" class="form-control" placeholder="6 jam pertama" aria-label="6jam">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="input12jam" class="form-label">12 Jam</label>
                                        <input type="text" class="form-control" placeholder="12 jam Pertama" aria-label="12jam">
                                    </div>
                                </div>
                                <br>
                                <div class="col-6">
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            </form>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h3>Intensitas Hujan Per Jam</h3>
                            </div>
                            <form>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-2">
                                        <label for="stasiun" class="form-label">07 - 08</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="3jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="no_stasiun" class="form-label">08 - 09</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="6jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="kabupaten" class="form-label">09 - 10</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="12jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="ketinggian" class="form-label">10 - 11</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="3jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="bulan" class="form-label">11 - 12</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="6jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="tahun" class="form-label">12 - 13</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="12jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="form" class="form-label">13 - 14</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="3jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="nama_pengamat" class="form-label">14 - 15</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="6jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="stasiun" class="form-label">15 - 16</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="3jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="no_stasiun" class="form-label">16 - 17</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="6jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="kabupaten" class="form-label">17 - 18</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="12jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="ketinggian" class="form-label">18 - 19</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="3jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="bulan" class="form-label">19 - 20</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="6jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="form" class="form-label">20 - 21</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="3jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="nama_pengamat" class="form-label">21 - 22</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="6jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="stasiun" class="form-label">22 - 23</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="3jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="no_stasiun" class="form-label">23 - 00</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="6jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="kabupaten" class="form-label">00 - 01</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="12jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="ketinggian" class="form-label">01 - 02</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="3jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="bulan" class="form-label">02 - 03</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="6jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="tahun" class="form-label">03 - 04</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="12jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="form" class="form-label">04 - 05</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="3jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="nama_pengamat" class="form-label">05 - 06</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="6jam">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="nama_pengamat" class="form-label">06 - 07</label>
                                        <input type="text" class="form-control" placeholder="" aria-label="6jam">
                                    </div>
                                </div>
                                <br>
                                <div class="col-6">
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
    -->
  </body>
</html>