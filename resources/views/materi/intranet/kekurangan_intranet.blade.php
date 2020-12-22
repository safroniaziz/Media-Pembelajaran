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
            <li><a href="{{ route('intranet') }}"><i class="fa fa-list"></i> Pengertian Intranet
            <li><a href="{{ route('sejarah_intranet') }}"><i class="fa fa-list"></i> Sejarah Intranet</a></li>
            <li><a href="{{ route('kelebihan_intranet') }}"><i class="fa fa-list"></i> Kelebihan Intranet</a></li>
            <li class="active"><a href="{{ route('kekurangan_intranet') }}" style="background-color:#337ab7 !important; color:white;"><i class="fa fa-list"></i> Kekurangan Intranet</a></li>
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
                <a href="{{ route('kelebihan_intranet') }}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                <button disabled class="btn btn-primary btn-sm"><i class="fa fa-arrow-right"></i>&nbsp; Selanjutnya</button>
            </div>
            <div class="table-responsive mailbox-messages" style="margin: 15px 15px 0px 0px;">
                <ol>
                <strong>Berikut Adalah Kekurangan Dari Intranet : </strong>
                    <li>Memerlukan pelatihan yang membutuhkan waktu cukup lama untuk mendidik anggota dalam menggunakan intranet.
                    </li>
                    <li>Membutuhkan tenaga ahli dalam membangun dan mengembangkan intranet dalam suatu organisasi karena tidak bisa dilakukan oleh sembarang orang.
                    </li>
                    <li>Memungkinkan terjadinya overload (data penuh) karena bebasnya pengiriman pesan antar pengguna intranet jika tidak dilakukan kontrol yang tepat.
                    </li>
                    <li>Dapat menyebarkan informasi yang salah juga mungkin beredar melalui intranet, sehingga kesadaran moral setiap pengguna sangat diperlukan.
                    </li>
                    <li>Intranet dapat berdampak kepada banyak resource yang digunakan sehingga membutuhkan biaya lagi untuk membangun server yang handal.
                    </li>

                </ol>
            <!-- /.table -->
            </div>
            <!-- /.mail-box-messages -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer no-padding">
                <div class="mailbox-controls" style="text-align: center">
                    <a href="{{ route('kelebihan_intranet') }}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                <button disabled class="btn btn-primary btn-sm"><i class="fa fa-arrow-right"></i>&nbsp; Selanjutnya</button>
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