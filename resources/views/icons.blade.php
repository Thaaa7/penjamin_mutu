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
                  <div class="text-head"> >Dashboard</div>
                  <div class="line"></div>
                    


<div class="text-center">
    <h1>LIHAT DOKUMEN<p>
      INPUT KEGIATAN DAN <p> KERANGKA ACUAN<P> KERJA(KAK)</h1>
    <h6>Lihat kerangka acuan Kerja(KAK)</h6>
</div>

<img src="" alt="">

<div class="center-text">
    <h6>Disposisi dari Ketua Harian CorpU</h6>
    <h6>Catatan dari Admin CorpU</h6>
</div>

<div class="document-preview">
    <a href="#" target="_blank">Lihat KAK.pdf</a>
</div>

<form action="#">
    <div class="input-group">
        <label for="saran">Input Saran dan Rekomendasi</label>
        <textarea id="saran" name="saran" rows="4"></textarea>
    </div>

    <div class="input-group">
        <label for="tindaklanjut">Tindaklanjuti Usulan</label>
        <textarea id="tindaklanjut" name="tindaklanjut" rows="4"></textarea>
    </div>

    <div class="input-group">
        <label for="penjamin_mutu">Penjamin Mutu</label>
        <input type="text" id="penjamin_mutu" name="penjamin_mutu">
    </div>

    <div class="checkbox-group">
        <input type="checkbox" id="persetujuan" name="persetujuan">
        <label for="persetujuan">Dengan mencentang kolom checkbox ini, saya menyatakan telah menyetujui dan akan melakukan tindaklanjut terhadap form pengajuan ini dengan benar dan sebaik-baiknya</label>
    </div>

    <button type="submit">Tindaklanjuti</button>
</form>

                      
  
</table>
</div>
<div class="form-group">
                  <label for="editor" class="form-label">Tata Tertib Kegiatan</label>
                  <div class="editor" id="editor" contenteditable="true">
                    Content of the editor.
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
  </div>
  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('editor');
  </script>
  <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/js/multi-select-tag.js"></script>
  <script>
    new MultiSelectTag('Rumpun Kegiatan')  // id
  </script>
  <script>
    new MultiSelectTag('Bentuk Kegiatan')  // id
  </script>
  <script>
    new MultiSelectTag('Jenis Kegiatan')  // id
  </script>

  <!--   Core JS Files   -->
  @include('layouts.script')
</body>

</html>
  <!--   Core JS Files   -->
  @include('layouts.script')
</body>

</html>