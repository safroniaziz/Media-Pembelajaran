@extends('layouts')

@section('content')
<div class="col-md-2">
<a href="{{ route('home') }}" class="btn btn-primary btn-block margin-bottom"><i class="fa fa-home"></i>&nbsp; Kembali Ke Home</a>

</div>
<div class="col-md-12">
    <div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-list"></i>&nbsp;Contoh dan Perbedaan Intranet dan Internet</h3>
        <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
        <div class="table-responsive mailbox-messages" style="margin: 15px 15px 0px 0px;">
            <ol>
                <strong>Internet dan Intranet</strong>
                <li>Setiap orang dapat mengakses Internet, sementara intranet hanya dapat diakses oleh anggota organisasi atau karyawan perusahaan. Biasanya, untuk mengakses intranet, pengguna harus masuk terlebih dahulu.</li>
                <li>

Masih banyak orang yang berpikir bahwa Internet dan Intranet adalah sama. Ada juga yang masih belum tahu di mana bedanya. Perbedaan paling mendasar antara keduanya adalah siapa yang dapat mengaksesnya. Setiap orang dapat mengakses Internet, sementara beberapa pengguna yang telah lulus verifikasi tidak dapat mengakses intranet. Inilah perbedaan utama antara Internet dan intranet.

Internet menghubungkan berbagai jaringan komputer di seluruh dunia, sementara intranet hanya menghubungkan beberapa komputer yang dimiliki jaringan komputer tertentu, seperti komputer yang termasuk dalam jaringan komputer perusahaan.

Intranet adalah bagian dari Internet, tetapi bukan sebaliknya.

Setiap orang dapat mengakses Internet, sementara intranet hanya dapat diakses oleh anggota organisasi atau karyawan perusahaan. Biasanya, untuk mengakses intranet, pengguna harus masuk terlebih dahulu.


ADVERTISING

Keamanan internet sangat rapuh karena aksesibilitasnya yang tinggi. Data dan informasi penting yang ditransfer atau dikirim melalui Internet dapat diungkapkan kepada pihak ketiga yang tidak berwenang. Keamanan intranet ditingkatkan karena aksesibilitasnya yang terbatas. Jika pihak eksternal dapat memperoleh informasi tentang server intranet, ini berarti bahwa sumber internal telah mengungkapkannya, yang membuatnya lebih mudah bagi perusahaan untuk mengidentifikasi sumber kebocoran.
                </li>
                <li>
                    Jumlah pengguna yang dapat mengakses Internet tidak terbatas, sedangkan jumlah pengguna intranet terbatas pada satu perusahaan atau organisasi.
                </li>
            </ol>

            <ol>
                <strong>Internet</strong>
                <li>Bisa diakses kapan saja , siapa saja , dan dimana saja.
                </li>
                <li>Sebuah jaringan computer yang sangat besar .
                </li>
                <li>Informasi yang diaksespun dapat berupa teks , grafik , suara , maupun video .
                </li>
                <li>Perkembangan sangat cepat dan luas hingga bisa diakses di seluruh dunia.
                </li>
                <li>Jaringan nya sangat luas dan cepat .
                </li>
            </ol>

            <ol>
                <strong>Intranet</strong>
                <li>Biasa digunakan di sekolah , universitas , perkantoran/perusahaan (tidak umum)
                </li>
                <li>Sebuah system jaringan dengan skala yang lebih kecil.
                </li>
                <li>Informasi berita berupa prosedur tertentu , atau kumpulan data dapat dimasukkan dalam system pusat informasi yang berdasarkan HTML (HyperText Markup Language)
                </li>
                <li>Perkembangan nya lambat dan tidak dapat diakses di seluruh dunia .
                </li>
                <li>
                    Jaringan nya tidak luas (sempit)

                </li>
            </ol>
        <!-- /.table -->
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