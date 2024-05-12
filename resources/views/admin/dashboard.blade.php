@include('layouts.header')

<body class="">
  <div class="wrapper ">
    @include('layouts.sidebar')
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <!-- End Navbar -->
      <div class="latar">
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-bell"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
            <div class="content-body">
                <div class="card">
                    <div class="card-header">
                    <div class="text-header">Application</div>
                  <div class="text-head"> > Dashboard</div>
                  <div class="line"></div>
                  <div class="body-text">Dashboard</div>
                        <div class="text-center">
        Showing 1 to 10 of 150 entries
    </div>
    <div class="search-container">
        <input type="text" placeholder="Search...">
        <button type="submit"><i class="fa fa-search"></i></button>
    </div>

                        <table class="table-badan">
  <tr>
    <th>No</th>
    <th>Nama Kegiatan</th>
    <th>Rumpun Kegiatan</th>
    <th>Status Usulan</th>
    <th>Status Monitoring, Evaluasi, dan Penilaian</th>
    <th>Nilai</th>
    <th>Actions</th>

    


  </tr>
  <tr>
    <td>1</td>
    <td>Pelatihan X Akt XI Tahun 2023 Klasikal</td>
    <td>Pendidikan</td>
    <td class="green"> Ditindaklanjuti oleh Penjamin Mutu</td>
    <td class="green">Penilaian telah dilakukan oleh Penjamin Mutu</td>
    <td class=>80</td>
    <td class=>Download</td>

  </tr>
  <tr>
    <td>1</td>
    <td>Pelatihan X Akt XI Tahun 2023 Klasikal</td>
    <td>Pendidikan</td>
    <td class="green"> Ditindaklanjuti oleh Penjamin Mutu</td>
    <td class="yellow"> Menunggu Penilaian oleh Penjamin Mutu</td>
<td>-</td>

<td class=>Download </td>




  </tr>
  <tr>
    <td>1</td>
    <td>Pelatihan X Akt XI Tahun 2023 Klasikal</td>
    <td>Pendidikan</td>
    <td class="green"> Ditindaklanjuti oleh Penjamin Mutu</td>
    
<td>-</td>
<td>-</td>

<td class=>Download </td>

  </tr>
  <tr>
    <td>1</td>
    <td>Pelatihan X Akt XI Tahun 2023 Klasikal</td>
    <td>Pendidikan</td>
    <td class="yellow"> Menunggu Penilaian oleh Penjamin Mutu</td>

    <td>-</td>

    <td>-</td>
    <td class=>Download </td>

  </tr>
  
</table>
</div>
<div class="pagination-container">
        <div class="pagination">
            <a href="#">&laquo;&laquo;</a>
            <a href="#">&laquo;</a>
            <a href="#">...</a>
            <a href="#">1</a>
            <a href="#" class="active">2</a>
            <a href="#">3</a>
            <a href="#">...</a>
            <a href="#">&raquo;</a>
            <a href="#">&raquo;&raquo;</a>
        </div>
        <div class="page-size-selector">
            <select class="uniq-page">
                <option>10</option>
                <option>20</option>
                <option>50</option>
                <option>100</option>
            </select>
        </div>
    </div>
    </div>



      </div>
    </div>            
  <!--   Core JS Files   -->
  @include('layouts.script')
</body>

</html>