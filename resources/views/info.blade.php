@extends('layouts.home')

@section('title')
    Info Website
@endsection
@section('content')
<div class="container-fluid">
   <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pengembang</h6>
            </div>
            <div class="card-body">
                 Website Perpuzzz dikelola dan dikembangkan secara individual oleh Larasati Nur Latifah. 
                 Website Perpuzzz merupakan website layanan admin perpustakaan yang dibuat dengan bantuan Framework Laravel.
                 Website Perpuzzz dibuat dengan bantuan Template SB Admin yang didownload dari <a href="https://colorlib.com/wp/">colorlib</a>.
                 <br/>
                 Website Perpuzzz didevelop sebagai syarat tugas akhir Mata Kuliah Manajemen Sistem Informasi yang diampu oleh Dosen Pradana Setialana, S.Pd., M.Eng.
            </div>
        </div>
                    <!-- Collapsable Card Example -->
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">Versi Website</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse " id="collapseCardExample">
                  <div class="card-body">
                    Perpuzzz : Sistem Manajemen Perpustakaan Versi 1.0
                  </div>
                </div>
              </div>
</div>

@endsection
