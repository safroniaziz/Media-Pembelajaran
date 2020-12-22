@extends('layouts')
@section('alert')
<div class="callout callout-info">
    <h4>Petunjuk Penggunaan!</h4>

    <p>Silahkan pilih terlebih dahulu menu yang anda inginkan</p>
  </div>
@endsection
@section('content')
<div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-list-alt"></i>&nbsp;Menu Yang Tersedia</h3>
    </div>
    <div class="box-body">
      <div class="row">
         <!-- ./col -->
         <div class="col-lg-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
                <h3 style="font-size: 3rem">HALAMAN HOME</h3>
                <p>Dashboard dan Informasi Singkat</p>
            </div>
            <div class="icon">
              <i class="fa fa-home"></i>
            </div>
            <a href="{{ route('home') }}" class="small-box-footer">LIHAT MATERI <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

          <div class="col-lg-6 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3 style="font-size: 3rem">MATERI INTERNET</h3>
  
                <p>Materi dasar-dasar jaringan internet</p>
              </div>
              <div class="icon">
                <i class="fa fa-globe"></i>
              </div>
              <a href="{{ route('internet') }}" class="small-box-footer">LIHAT MATERI <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3 style="font-size: 3rem">MATERI INTRANET</h3>
                <p>Materi dasar-dasar jaringan intranet</p>
              </div>
              <div class="icon">
                <i class="fa fa-university"></i>
              </div>
              <a href="{{ route('intranet') }}" class="small-box-footer">LIHAT MATERI <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3 style="font-size: 3rem">CONTOH & PERBEDAAN </h3>
  
                <p>Contoh sederhana dari internet dan intranet</p>
              </div>
              <div class="icon">
                <i class="fa fa-list"></i>
              </div>
              <a href="{{ route('contoh') }}" class="small-box-footer">LIHAT MATERI <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
         
          <div class="col-lg-6 col-xs-12">
              <!-- small box -->
              <div class="small-box bg-orange">
                <div class="inner">
                    <h3 style="font-size: 3rem">LATIHAN SOAL</h3>
    
                    <p>Latihan soal-soal yang berhubungan dengan internet</p>
                </div>
                <div class="icon">
                  <i class="fa fa-list-alt"></i>
                </div>
                <a href="{{ route('latihan') }}" class="small-box-footer">MULAI LATIHAN <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-6 col-xs-12">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                    <h3 style="font-size: 3rem">Daftar Pustaka</h3>
    
                    <p>Sumber materi yang didapatkan</p>
                </div>
                <div class="icon">
                  <i class="fa fa-list-alt"></i>
                </div>
                <a href="{{ route('dapus') }}" class="small-box-footer">LIHAT DAFTAR PUSTAKA <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
        </div>
    </div>
    <!-- /.box-body -->
  </div>
@endsection