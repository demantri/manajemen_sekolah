{{-- sidebar --}}
<li class="nav-item">
    <a class="nav-link" href="/"><i class="fa fa-fw fa-home"></i>Dashboard</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="/event"><i class="fa fa-fw fa-calendar"></i>Event</a>
</li>

{{-- <li class="nav-item">
    <a class="nav-link" href={{route('absensi')}}><i class="fa fa-fw fa-calendar"></i>Absensi</a>
</li> --}}

<li class="nav-item ">
    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#absensi-1" aria-controls="absensi-1"><i class="fa fa-fw fa-user-circle"></i>Absensi <span class="badge badge-success">6</span></a>
    <div id="absensi-1" class="collapse absensi" style="">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{route('absensi_pegawai')}}">Absensi Pegawai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('absensi_murid')}}">Absensi Murid</a>
            </li>
        </ul>
    </div>
</li>


<li class="nav-item ">
    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Masterdata <span class="badge badge-success">6</span></a>
    <div id="submenu-1" class="collapse submenu" style="">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="/siswa">Siswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/guru">Guru</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/kelas">Kelas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/tahun_ajaran">Tahun Ajaran</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/status">Status</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/user">User</a>
            </li>
        </ul>
    </div>
</li>

<li class="nav-item ">
    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#transaksi-1" aria-controls="transaksi-1"><i class="fa fa-fw fa-user-circle"></i>Transaksi Sekolah <span class="badge badge-success">6</span></a>
    <div id="transaksi-1" class="collapse transaksi" style="">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="dashboard-finance.html">Pembayaran SPP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dashboard-sales.html">Laporan Pembayaran SPP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dashboard-sales.html">Laporan Keuangan</a>
            </li>
        </ul>
    </div>
</li>

{{-- ada subkategori --}}
{{-- <li class="nav-item ">
    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
    <div id="submenu-1" class="collapse submenu" style="">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">E-Commerce</a>
                <div id="submenu-1-2" class="collapse submenu" style="">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">E Commerce Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ecommerce-product.html">Product List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ecommerce-product-single.html">Product Single</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ecommerce-product-checkout.html">Product Checkout</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dashboard-finance.html">Finance</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dashboard-sales.html">Sales</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1">Infulencer</a>
                <div id="submenu-1-1" class="collapse submenu" style="">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard-influencer.html">Influencer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="influencer-finder.html">Influencer Finder</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="influencer-profile.html">Influencer Profile</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</li> --}}

{{-- <li class="nav-item">
    <a class="nav-link" href="dashboard-sales.html"><i class="fa fa-fw fa-user-circle"></i>Pembayaran SPP</a>
</li> --}}
{{-- end --}}
