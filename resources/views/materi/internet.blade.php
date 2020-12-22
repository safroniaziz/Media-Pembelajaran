@extends('layouts')

@section('content')
<section class="content-header">
    <h1>
    Materi Internet
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
    <div class="col-md-3">
        <a href="{{ route('home') }}" class="btn btn-primary btn-block margin-bottom"><i class="fa fa-home"></i>&nbsp; Kembali Ke Home</a>

        <div class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Daftar Materi Internet</h3>

            <div class="box-tools">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            </div>
        </div>
        <div class="box-body no-padding">
            <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="{{ route('internet') }}" style="background-color:#337ab7 !important; color:white;"><i class="fa fa-list"></i> Pengertidan & Dasar Internet
            <li><a href="{{ route('sejarah_internet') }}"><i class="fa fa-list"></i> Sejarah Internet</a></li>
            <li><a href="{{ route('manfaat_internet') }}"><i class="fa fa-list"></i> Dampak Positif Internet</a></li>
            <li><a href="{{ route('dampak_internet') }}"><i class="fa fa-list"></i> Dampak Negatif Internet</a></li>
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
            <h3 class="box-title"><i class="fa fa-list"></i>&nbsp;Pengertian dan Dasar-Dasar Internet</h3>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <div class="mailbox-controls" style="text-align: center">
                <button class="btn btn-warning btn-sm" disabled><i class="fa fa-arrow-left"></i>&nbsp; Kembali</button>
                <a href="{{ route('sejarah_internet') }}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-right"></i>&nbsp; Selanjutnya</a>
            </div>
            <div class="table-responsive mailbox-messages" style="margin: 15px 15px 0px 0px;">
                <ol>
                    <li style="font-weight: bold;">Pengertian Internet (Interconnected
                        Network)</li>
                        <p style="text-align: justify; text-indent: 0.5in; margin-top:5px;">
                            Sistem komunikasi global yang
                            menghubungkan komputer - komputer dan
                            jaringan-jaringan komputer di seluruh dunia
                            tanpa mengenal batas teritorial, hukum, dan
                            budaya sebagai sarana komunikasi dan
                            menyebarkan informasi.
                        </p>
                        <p  style="text-align: justify; text-indent: 0.5in;">
                            Internet –kependekan dari interconnection-networking– adalah seluruh jaringan komputer yang saling terhubung menggunakan standar sistem global Transmission Control Protocol/Internet Protocol Suite (TCP/IP) sebagai protokol pertukaran paket (packet switching communication protocol) untuk melayani miliaran pengguna di seluruh dunia.Rangkaian internet yang terbesar dinamakan Internet. Cara menghubungkan rangkaian dengan kaidah ini dinamakan internetworking (“antarjaringan”) (Wikipedia).
                        </p>
                        <li style="font-weight: bold;">Berikut ini Pengertian Internet Menurut Para Ahli:</li>
                            <p>
                                <strong>Onno Purbo</strong> (dalam Prihatna, 2005): internet pada dasarnya adalah suatu media yang dipakai untuk mengefesiensikan proses komunikasi yang disambungkan lewat berbagai aplikasi semacam Web, VoIP, E-mail.
                            </p>
                            <p>
                                <strong>Oetomo</strong> (2002): internet adalah singkatan atau akronom dari international network, yang didefinisikan juga sebagai suatu jaringan komputer yang sangat besar, terdiri dari beberapa jaringan kecil saling terhubung satu sama lain.
                            </p>
                            <p>
                                <strong>Supriyanto</strong> (2006): pengertian internet adalah suatu hubungan antara berbagai jenis komputer dan juga dengan jaringan di dunia yang punya sistem operasi dan juga aplikasi yang berbeda-beda, dimana hubungan tersebut memanfaatkan kemajuan perangkat komunikasi semacam telepon dan satelit yang memakai protokol standar dalam melakukan hubungan komunikasi, yaitu protokol TCP/IP (Transmission Control/Internet Protocol).    
                            </p>
                </ol>
            <!-- /.table -->
            </div>
            <!-- /.mail-box-messages -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer no-padding">
                <div class="mailbox-controls" style="text-align: center">
                    <button class="btn btn-warning btn-sm" disabled><i class="fa fa-arrow-left"></i>&nbsp; Kembali</button>
                    <a href="{{ route('sejarah_internet') }}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-right"></i>&nbsp; Selanjutnya</a>
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