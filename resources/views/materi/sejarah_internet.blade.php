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
            <li class="active"><a href="#" style="background-color:#337ab7 !important; color:white;"><i class="fa fa-list"></i> Sejarah Internet</a></li>
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
            <h3 class="box-title"><i class="fa fa-list"></i>&nbsp;Sejarah Internet</h3>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <div class="mailbox-controls" style="text-align: center">
                <a href="{{ route('internet') }}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                <a href="{{ route('manfaat_internet') }}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-right"></i>&nbsp; Selanjutnya</a>
            </div>
            <div class="table-responsive mailbox-messages" style="margin: 15px 15px 0px 0px;">
                <ol>
                    <li style="font-weight: bold;">Sejarah Internet Di Dunia</li>
                    <ol>
                        <li>
                            <p>
                                1969 → ARPANET (Edvanced Research
                            Project Agency Network)
                            Tujuan untuk membuat suatu jaringan
                            komputer yang tersebar dan menghindari
                            pemusatan informasi di satu titik yang dipandang
                            rawan untuk dihancurkan
                            </p>
                            <p>
                                Menghubungkan 4 buah situs :
                                <ul>
                                    <li>Stanford research Institute (SRI)</li>
                                    <li>University of California at Santa barbara
                                        (UCSB)</li>
                                        <li>University of California at Los Angeles (UCLA)</li>
                                        <li>University of Utah</li>
                                </ul>
                            </p>
                        </li>

                        <li>
                            <p>
                                1984 → ARPANET di bagi menjadi 2,yaitu :
                            
                                <ul>
                                    <li>ARPANET → Non Militer (Riset)</li>
                                    <li>MILNet → Militer
                                        DARPA Internet / Internet</li>
                                </ul>
                            </p>
                        </li>
                        <li>
                            <p>
                                1986 → Internet untuk kalangan umum
                            </p>
                        </li>
                        </p>
                    </ol>

                    <li style="font-weight: bold;">Sejarah Internet Di Indonesia</li>
                    <ol>
                        <li>
                            <p>
                                1983 → UINet (Dr. Joseph F.P. Luhukay)
                            </p>
                            <p>
1983 → UNINet (University Network)

                            </p>
                                <ul>
                                    <li>Universitas Indonesia</li>
                                    <li> Institut Teknologi Bandung</li>
                                        <li>Institut Pertanian Bogor</li>
                                        <li>Universitas Gadjah Mada</li>
                                        <li>Institut Teknologi Surabaya</li>
                                        <li>Universitas Hasanudin</li>
                                        <li>Ditjen Dikti</li>
                                </ul>
                            </p>
                        </li>

                        <li>
                            <p>
                                1990 → Paguyuban Network
                            </p>
                        </li>

                        <li>
                            <p>
                                1992 – 1994 → M. Samik-Ibrahim,
                                Suryono Adisoemarta, Muhammad Ihsan,
                                Robby Soebiakto, Putu, Firman Siregar,
                                Adi Indrayanto, Onno W. Purbo 
                            </p>
                        </li>
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
                    <a href="{{ route('internet') }}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                <a href="{{ route('manfaat_internet') }}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-right"></i>&nbsp; Selanjutnya</a>
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