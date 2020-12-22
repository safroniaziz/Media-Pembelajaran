@extends('layouts')

@section('content')
<div class="col-md-2">
<a href="{{ route('home') }}" class="btn btn-primary btn-block margin-bottom"><i class="fa fa-home"></i>&nbsp; Kembali Ke Home</a>

</div>
<div class="col-md-12">
    <div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-list"></i>&nbsp;Latihan Soal</h3>
        <!-- /.box-tools -->
    </div>
    @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
      </div>
    @endif
    <!-- /.box-header -->
    <div class="box-body no-padding">
        <div class="table-responsive mailbox-messages" style="margin: 15px 15px 0px 0px;">
         <form action="{{ route('latihan.simpan') }}" method="POST">
            {{ csrf_field() }} {{ method_field('POST') }}
             <div class="row" style="padding: 0px 10px 10px 10px;">
                <div class="form-group col-md-6">
                    <label for="">Masukan Nama Lengkap Anda</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Kelas Berapa Anda</label>
                    <select name="kelas" id="" class="form-control" required>
                        <option value="vii">Kelas 7 SMP</option>
                        <option value="viii">Kelas 8 SMP</option>
                        <option value="ix">Kelas 9 SMP</option>
                    </select>
                </div>
             </div>
             <div class="row" style="padding: 0px 10px 10px 10px;">
                <div class="col-md-6">
                    <ol style="">
                        <li style="margin-top: 15px;">Jaringan yang bisa digunakan kapan saja dinamakan?</li>
                        <input type="radio" required name="satu" value="10">
                        <label style="font-weight: 500">Internet</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="satu" value="0">
                        <label style="font-weight: 500">Intranet</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="satu" value="0">
                        <label style="font-weight: 500">Afternet</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="satu" value="0">
                        <label style="font-weight: 500">Befornet</label>&nbsp;&nbsp;&nbsp;&nbsp;

                        <li style="margin-top: 15px;">Jaringan yang bisa digunakan hanya di gedung dinamakan?</li>
                        <input type="radio" required name="dua" value="0">
                        <label style="font-weight: 500">Internet</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="dua" value="10">
                        <label style="font-weight: 500">Intranet</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="dua" value="0">
                        <label style="font-weight: 500">Afternet</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="dua" value="0">
                        <label style="font-weight: 500">Befornet</label>&nbsp;&nbsp;&nbsp;&nbsp;

                        <li style="margin-top: 15px;">Jaringan Yang Pertama Kali Diciptakan Adalah ?</li>
                        <input type="radio" required name="tiga" value="10">
                        <label style="font-weight: 500">Internet</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="tiga" value="0">
                        <label style="font-weight: 500">Intranet</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="tiga" value="0">
                        <label style="font-weight: 500">Afternet</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="tiga" value="0">
                        <label style="font-weight: 500">Befornet</label>&nbsp;&nbsp;&nbsp;&nbsp;

                        <li style="margin-top: 15px;">Salah Satu Ilmuwan yang mengemukakan pendapat tentang internet adalah?</li>
                        <input type="radio" required name="empat" value="10">
                        <label style="font-weight: 500">Supriyanto</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="empat" value="0">
                        <label style="font-weight: 500">Supriana</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="empat" value="0">
                        <label style="font-weight: 500">Yanto Supri</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="empat" value="0">
                        <label style="font-weight: 500">Yana</label>&nbsp;&nbsp;&nbsp;&nbsp;

                        <li style="margin-top: 15px;">Salah Satu Ilmuwan yang mengemukakan pendapat tentang intranet adalah?</li>
                        <input type="radio" required name="lima" value="0">
                        <label style="font-weight: 500">Supriyanto</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="lima" value="0">
                        <label style="font-weight: 500">Supriana</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="lima" value="10">
                        <label style="font-weight: 500">Miftahul Amin</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="lima" value="0">
                        <label style="font-weight: 500">Yana</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    </ol>
                </div>

                <div class="col-md-6">
                    <ol start="6">
                        <li style="margin-top: 15px;">Sistem komunikasi global yang
                            menghubungkan komputer - komputer dan
                            jaringan-jaringan komputer di seluruh dunia adalah ?</li>
                        <input type="radio" required name="enam" value="10">
                        <label style="font-weight: 500">Internet</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="enam" value="0">
                        <label style="font-weight: 500">Intranet</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="enam" value="0">
                        <label style="font-weight: 500">Afternet</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="enam" value="0">
                        <label style="font-weight: 500">Befornet</label>&nbsp;&nbsp;&nbsp;&nbsp;

                        <li style="margin-top: 15px;">Sistem komunikasi jaringan yang
                            bersifat lokal adalah?</li>
                        <input type="radio" required name="tujuh" value="0">
                        <label style="font-weight: 500">Internet</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="tujuh" value="10">
                        <label style="font-weight: 500">Intranet</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="tujuh" value="0">
                        <label style="font-weight: 500">Afternet</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="tujuh" value="0">
                        <label style="font-weight: 500">Befornet</label>&nbsp;&nbsp;&nbsp;&nbsp;

                        <li style="margin-top: 15px;">Arpanet adalah jenis dari ?</li>
                        <input type="radio" required name="delapan" value="0">
                        <label style="font-weight: 500">afternet</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="delapan" value="0">
                        <label style="font-weight: 500">Intranet</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="delapan" value="0">
                        <label style="font-weight: 500">Afternet</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="delapan" value="10">
                        <label style="font-weight: 500">Internet</label>&nbsp;&nbsp;&nbsp;&nbsp;

                        <li style="margin-top: 15px;">Sejarah internet di indonesia dimulai pada tahun?</li>
                        <input type="radio" required name="sembilan" value="10">
                        <label style="font-weight: 500">1983</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="sembilan" value="0">
                        <label style="font-weight: 500">1934</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="sembilan" value="0">
                        <label style="font-weight: 500">1987</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="sembilan" value="0">
                        <label style="font-weight: 500">1978</label>&nbsp;&nbsp;&nbsp;&nbsp;

                        <li style="margin-top: 15px;">Salah Satu Keuntungan internet adalah?</li>
                        <input type="radio" required name="sepuluh" value="0">
                        <label style="font-weight: 500">Perjudian</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="sepuluh" value="0">
                        <label style="font-weight: 500">Penipuan</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="sepuluh" value="10">
                        <label style="font-weight: 500">E-Learning</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" required name="sepuluh" value="0">
                        <label style="font-weight: 500">Pembajakan</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    </ol>
                </div>

                <div class="col-md-12" style="text-align: center">
                    <button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-close"></i>&nbsp; Ulangi</button>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i>&nbsp; Simpan</button>
                </div>
             </div>
         </form>
        <!-- /.table -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Kelas</th>
                            <th>Jumlah Benar</th>
                            <th>Nilai </th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no=1;
                        @endphp
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->kelas }}</td>
                                <td>{{ $data->jumlah_benar }} Soal </td>
                                <td>{{ $data->nilai }} </td>
                                <td>
                                    @if ($data->status == "0")
                                        Belum Lulus
                                        @else
                                        Lulus
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.mail-box-messages -->
    </div>
    <!-- /.box-body -->
    <div class="box-footer no-padding">
          
    </div>
    </div>
    <!-- /. box -->
</div>
@endsection