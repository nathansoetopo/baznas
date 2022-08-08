<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">Baznas</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">SBR</a>
        </div>
        <ul class="sidebar-menu">
            @if (auth()->user()->hasRole('admin'))
            <li class="menu-header">Dashboard</li>
            <li>
                <a class="nav-link" href="{{ url('/admin') }}"><i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Index</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ url('admin/dana-tersalurkan') }}"> <span>Data Penyaluran</span></a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('admin/laporan-zis') }}"> <span>Laporan Data Zis</span></a>
                    </li>
                </ul>
            </li>

            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-newspaper"></i> <span>Kabar</span></a>
                <ul class="dropdown-menu">
                    @foreach ($category as $c)
                        <li>
                            <a class="nav-link" href="/admin/kabar/{{$c->id}}/category"><span>{{$c->display}}</span></a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-holding-usd"></i> <span>Layanan</a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ url('admin/inspirasi') }}"> <span>Rekening</span></a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('admin/inspirasi') }}"> <span>Layanan Pembayaran</span></a>
                    </li>
                </ul>
            </li>
            @endif
        </ul>

    </aside>
</div>
