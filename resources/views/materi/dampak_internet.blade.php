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
            <li><a href="{{ route('internet') }}"><i class="fa fa-list"></i> Pengertidan & Dasar Internet
            <li><a href="{{ route('sejarah_internet') }}"><i class="fa fa-list"></i> Sejarah Internet</a></li>
            <li><a href="{{ route('manfaat_internet') }}"><i class="fa fa-list"></i> Dampak Positif Internet</a></li>
            <li class="active"><a href=""  style="background-color:#337ab7 !important; color:white;"><i class="fa fa-list"></i> Dampak Negatif Internet</a></li>
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
            <h3 class="box-title"><i class="fa fa-list"></i>&nbsp;Manfaat Internet</h3>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <div class="mailbox-controls" style="text-align: center">
                <a href="{{ route('manfaat_internet') }}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                <button class="btn btn-primary btn-sm" disabled><i class="fa fa-arrow-right"></i>&nbsp; Selanjutnya</button>
            </div>
            <div class="table-responsive mailbox-messages" style="margin: 15px 15px 0px 0px;">
                <ol>
                    <li style="font-weight: bold;">Hacking</li>
                    <p>
                        Usaha memasuki sebuah jaringan dengan
maksud mengekplorasi ataupun mencari kelemahan
sistem jaringan
                    </p>

                    <li style="font-weight: bold;">Cracking</li>
                    <p>
                        Usaha memasuki secara illegal sebuah jaringan
dengan maksud mencuri, mengubah atau menghancurkan file
yang di simpan pada jaringan tersebut 
                    </p>

                    <li style="font-weight: bold;">Pornografi</li>
                    <li style="font-weight: bold;">Penipuan</li>
                    <li style="font-weight: bold;">Perjudian</li>
                    <li style="font-weight: bold;">Pembajakan Karya Intelektual</li>
                   
                </ol>
            <!-- /.table -->
            </div>
            <!-- /.mail-box-messages -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer no-padding">
                <div class="mailbox-controls" style="text-align: center">
                    <a href="{{ route('manfaat_internet') }}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                <button class="btn btn-primary btn-sm" disabled><i class="fa fa-arrow-right"></i>&nbsp; Selanjutnya</button>
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