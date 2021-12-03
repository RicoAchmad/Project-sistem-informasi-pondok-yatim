
<nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item sidebar-category">
                    <p>Navigation</p>
                    <span></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin')}}">
                        <i class="mdi mdi-view-quilt menu-icon"></i>
                        <span class="menu-title">Beranda</span>
                        <div class="badge badge-info badge-pill">2</div>
                    </a>
                </li>
                <li class="nav-item sidebar-category">
                    <p>Components</p>
                    <span></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                        aria-controls="ui-basic">
                        <i class="mdi mdi-palette menu-icon"></i>
                        <span class="menu-title">Lainnya...</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" 
                                    href="{{ url('admin/pemasukan') }}">Data Pemasukan</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/donatur') }}">
                        <i class="mdi mdi-view-headline menu-icon"></i>
                        <span class="menu-title">Data Donatur</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/pengeluaran') }}">
                        <i class="mdi mdi-grid-large menu-icon"></i>
                        <span class="menu-title">Data Pengeluaran</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/anak-asuh') }}">
                        <i class="mdi mdi-emoticon menu-icon"></i>
                        <span class="menu-title">Data Anak</span>
                    </a>
                </li>
            </ul>
        </nav>