<?php

use Illuminate\Http\Request;

$request = new Request();
$role = $request->user;

// dd($data_user);
// dd(Session::get('variableName'));

?>

<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">

                <?php if (auth()->user()->id_role == 3) { ?>
                    <li><a href="/" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                    <li><a href="/jadwal" class="active"><i class="fa fa-calendar"></i> <span>Schedule Kalibrasi</span></a></li>
                    <li><a href="/proses" class=""><i class="lnr lnr-hourglass"></i> <span>On Proces</span></a></li>
                    <li><a href="/alat" class=""><i class="lnr lnr-pushpin"></i> <span>Data Alat Ukur</span></a></li>
                <?php } else if (auth()->user()->id_role == 2) { ?>
                    <li><a href="/" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                    <li><a href="/" class=""><i class="lnr lnr-hourglass"></i> <span>Judgment</span></a></li>
                    <li><a href="/" class=""><i class="lnr lnr-pushpin"></i> <span>Selesai Kalibrasi</span></a></li>
                    <li><a href="/" class=""><i class="lnr lnr-pushpin"></i> <span>Buat Laporan</span></a></li>
                <?php } else if (auth()->user()->id_role == 1) { ?>
                    <li><a href="/" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                    <li><a href="/user" class=""><i class="lnr lnr-user"></i> <span>Data user</span></a></li>
                <?php } ?>

            </ul>
        </nav>
    </div>
</div>