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
            <li class="active"><a  style="background-color:#337ab7 !important; color:white;" href="{{ route('sejarah_intranet') }}"><i class="fa fa-list"></i> Sejarah Intranet</a></li>
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
                <a href="{{ route('intranet') }}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                <a href="{{ route('sejarah_intranet') }}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-right"></i>&nbsp; Selanjutnya</a>
            </div>
            <div class="table-responsive mailbox-messages" style="margin: 15px 15px 0px 0px;">
                <ol>
                <strong>Sejarah Intranet</strong>
                        <p style="text-align: justify; text-indent: 0.5in; margin-top:5px;">
                            Sebelum lebih dalam mengenai intranet, kita perlu tahu dahulu bagaimana sejarah intranet itu sendiri. Intranet muncul dari ditemukannya World Wide Web (WWW) oleh Tim Berners Lee beserta rekan-rekannya pada tahun 1989. Pada saat itu, internet dan jaringan komputer pribadi masih sangat populer di berbagai perusahaan dan organisasi.    
                        </p>
                        <p style="text-align: justify; text-indent: 0.5in; margin-top:5px;">
                            Barulah pada tahun 1995, intranet mulai diperkenalkan oleh beberapa provider produk jaringan dengan format sesuai kebutuhan organisasi berupa web pada suatu perusahaan. Ada berbagai perusahaan yang mulai menggunakan intranet dalam melakukan kegiatan seperti berkomunikasi data standar hingga mengirimkan informasi dan data rahasia.   
                        </p>
                        </li>
                        <p style="text-align: justify; text-indent: 0.5in; margin-top:5px;">
                            Semakin berkembangnya intranet juga tidak pernah lepas dari perkembangan internet. Keduanya dapat membantu menyelesaikan berbagai jenis masalah dalam perusahaan, seperti efektivitas dan efisiensi kerja. Selain itu, intranet juga digunakan sebagai alat untuk membantu aplikasi seperti manajemen proyek, manajemen hubungan dengan pelanggan yang tujuannya adalah untuk meningkatkan produktivitas perusahaan atau organisasi.
                        </p>
                </ol>

                </ol>
            <!-- /.table -->
            </div>
            <!-- /.mail-box-messages -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer no-padding">
                <div class="mailbox-controls" style="text-align: center">
                    <a href="{{ route('intranet') }}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
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