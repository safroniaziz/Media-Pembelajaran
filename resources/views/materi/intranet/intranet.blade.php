@extends('layouts')

@section('content')
<section class="content-header">
    <h1>
    Materi Intranet
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
    <div class="col-md-3">
        <a href="{{ route('home') }}" class="btn btn-primary btn-block margin-bottom"><i class="fa fa-home"></i>&nbsp; Kembali Ke Home</a>

        <div class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Daftar Materi Intranet</h3>

            <div class="box-tools">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            </div>
        </div>
        <div class="box-body no-padding">
            <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="{{ route('intranet') }}" style="background-color:#337ab7 !important; color:white;"><i class="fa fa-list"></i> Pengertian Intranet
            <li><a href="{{ route('sejarah_intranet') }}"><i class="fa fa-list"></i> Sejarah Intranet</a></li>
            <li><a href="{{ route('kelebihan_intranet') }}"><i class="fa fa-list"></i> Kelebihan Intranet</a></li>
            <li><a href="{{ route('kekurangan_intranet') }}"><i class="fa fa-list"></i> Kekurangan Intranet</a></li>
            </ul>
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /. box -->
        <div class="box box-solid">
        <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
        <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-list"></i>&nbsp;Pengertian Intranet</h3>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <div class="mailbox-controls" style="text-align: center">
                <button class="btn btn-warning btn-sm" disabled><i class="fa fa-arrow-left"></i>&nbsp; Kembali</button>
                <a href="{{ route('sejarah_intranet') }}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-right"></i>&nbsp; Selanjutnya</a>
            </div>
            <div class="table-responsive mailbox-messages" style="margin: 15px 15px 0px 0px;">
                <ol>
                <strong>Berikut sejumlah pengertian Intranet menurut para ahli</strong>
                    <li style="font-weight: bold;">Miftakul Amin</li>
                        <p style="text-align: justify; text-indent: 0.5in; margin-top:5px;">
                            “intranet adalah local area network (LAN) dengan menggunakan standar komunikasi dan segala fasilitas Internet, dan diibaratkan berInternet dalam lingkungan lokal.”
                        </p>
                        <li style="font-weight: bold;">Turban, King, Lee, dan Liang (2010)</li>
                        <p style="text-align: justify; text-indent: 0.5in; margin-top:5px;">
                            “intranet merupakan suatu jaringan perusahaan ataupun pemerintah atau organisasi yang menggunakan tools dalam internet, seperti web browser dan internet protocol dan digunakan perusahaan sebagai media komunikasi dan kolaborasi.”    
                        </p>
                        <li style="font-weight: bold;">O’Brien dan Marakas (2011)
                        </li>
                        <p style="text-align: justify; text-indent: 0.5in; margin-top:5px;">
                            “Intranet adalah suatu jaringan di dalam sebuah organisasi dengan menggunakan teknologi internet (seperti web browser dan server, TCP/IP protokol jaringan, penerbitan dokumen HTML hypermedia dan database, dan lain-lain) untuk menyediakan lingkungan internet dalam suatu perusahaan untuk berbagi informasi, komunikasi, kolaborasi, serta dukungan dari proses bisnis.”
                        </p>
                        Dari pengertian diatas dapat disimpulkan intranet adalah sebagai sebuah jaringan dengan menggunakan teknologi internet namun hanya dalam lingkup tertentu atau terbatas seperti satu perusahaan atau satu organisasi.


                </ol>
            <!-- /.table -->
            </div>
            <!-- /.mail-box-messages -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer no-padding">
                <div class="mailbox-controls" style="text-align: center">
                    <button class="btn btn-warning btn-sm" disabled><i class="fa fa-arrow-left"></i>&nbsp; Kembali</button>
                    <a href="{{ route('sejarah_intranet') }}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-right"></i>&nbsp; Selanjutnya</a>
                </div>
        </div>
        </div>
        <!-- /. box -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@endsection