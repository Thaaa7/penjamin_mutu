<div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          PT
        </a>
        <a href="#" class="simple-text logo-normal">
          CorpU
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="{{ route('admin') }}">
              <i class="now-ui-icons design_app"></i>
              <p>Usulan Kegiatan</p>
            </a>
          </li>
          <li>
            <a href="{{ route('icons') }}">
              <i class="now-ui-icons education_atom"></i>
              <p>Pembentukan COP</p>
            </a>
          </li>
          <li>
            <a href="{{ route('maps') }}">
              <i class="now-ui-icons location_map-big"></i>
              <p>Dashboard Kegiatan</p>
            </a>
          </li>
          <li>
            <a href="{{ route('notif') }}">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Data Pengajuan</p>
            </a>
          </li>
          <li>
            <a href="{{ route('user') }}">
              <i class="now-ui-icons users_single-02"></i>
              <p>Data Konversi JP</p>
            </a>
          </li>
          <li>
            <a href="{{ route('tables')}}">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Dashboard COP</p>
            </a>
          </li>
        </ul>
      </div>
    </div>