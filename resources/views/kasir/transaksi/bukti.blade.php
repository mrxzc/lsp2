@extends('layouts.kasir')
@section('content')
<style>
    @media print{
        body * { visibility:hidden}
        .print-area, .print-area * {visibility: visible}
        .print-area { position:absolute; left:0; top:0;}
    }
</style>
<div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col p-md-0">
                        <h4>Produk</h4>
                    </div>
                    <div class="col p-md-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <!-- <li class="breadcrumb-item"><a href="javascript:void()">Forms</a>
                            </li> -->
                            <li class="breadcrumb-item active">Produk
                            </li>
                        </ol>
                    </div>
                </div>

                @if($message = Session::get('sukses'))
                <div class="alert alert-primary alert-dismissible fade show" style="margin-top:20px;">
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button> <strong>{{$message}}</strong></div>
                @endif

                <div class="row" style="margin-top:20px;">
                    <div class="col-xl-12">
                        <div class="col-lg-12">
                            <div class="card button-card">
                                <div class="card-body">
                                    {{-- <h4 class="card-title card-intro-title">Button with icons</h4> --}}
                                    <center>
                                    <div class="button-icon">
                                        <a class="btn btn-rounded btn-warning" onclick="window.print()"><span class="flaticon-shapes"> </span>Cetak</a>
                                       
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row print-area">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">

                                <div>
                                @foreach($checkout as $checkouts)
                                <h3>Kode Invoice : {{$checkouts->kode_unik}}</h3>
                                @endforeach
                                
                                </div>

                                <div>
                                @foreach($checkout as $checkouts)
                                <h5>Saldo : Rp. {{$checkouts->saldo}}</h5>
                                @endforeach
                                
                                </div>

                                <div>
                                @foreach($checkout as $checkouts)
                                <h5>Kembalian : Rp. {{$checkouts->kembalian}}</h5>
                                @endforeach
                                
                                </div>

                               
                                <table id="datatable" class="display table table-striped table-hover" cellspacing="0" width="100%">
                                       <thead>
                                        <tr>
                                            <th>Produk</th>
                                            <th>Jumlah</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                  <tbody>
                                  @foreach($kode_unik as $kode_uniks)
                                  @foreach($kode_uniks->relasicart as $produks)
                                  <tr>
                                    <td>{{$produks->nama}}</td>
                                    <td>{{$kode_uniks->jumlah}}</td>
                                    <td>Rp. {{$kode_uniks->sub_total}}</td>
                                  </tr>
                                  @endforeach
                                  @endforeach
                                  </tbody>

                                  <tfoot>
                                  @foreach($checkout as $checkouts)
                                    <tr>
                                      <td></td>
                                      <td>Total</td>
                                      <td>Rp. {{$checkouts->total}}</td>
                                    </tr>
                                    @endforeach
                                  </tfoot>

                                
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
@section('js')

<script src="/gleek/gleek/assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="/gleek/gleek/main/js/plugins-init/datatables.init.js"></script>
@endsection
@endsection