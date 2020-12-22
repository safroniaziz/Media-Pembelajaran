@extends('layouts')

@section('content')
<div class="col-md-2">
<a href="{{ route('home') }}" class="btn btn-primary btn-block margin-bottom"><i class="fa fa-home"></i>&nbsp; Kembali Ke Home</a>

</div>
<div class="col-md-12">
    <div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-list"></i>&nbsp;Daftar Pustaka</h3>
        <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
        <div class="table-responsive mailbox-messages" style="margin: 15px 15px 0px 0px;">
          <table class="table table-bordered table-hover" style="margin:20px;">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Sumber Pustaka</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>1.</td>
                      <td>https://docs.google.com/presentation/d/1LdfKNFSTwa98g78TR0ynyRFYPqWPH8m912a3P6sZB1s/edit?usp=drivesdk</td>
                  </tr>
                  <tr>
                      <td>2.</td>
                      <td>
                        https://romeltea.com/pengertian-dan-dasar-dasar-internet/
                      </td>
                  </tr>
                  <tr>
                      <td>3.</td>
                      <td>https://b-pikiran.cekkembali.com/intranet/</td>
                  </tr>
              </tbody>
          </table>
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