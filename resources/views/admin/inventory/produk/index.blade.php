@extends('layouts.admin')
@section('content')
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
                                    <a href="{{route('produk_tambah')}}" class="btn btn-rounded btn-info"><span class="flaticon-add"> </span>Tambah Produk</a>
                                        <a href="{{route('kategori_tambah')}}" class="btn btn-rounded btn-warning"><span class="flaticon-shapes"> </span>Cetak</a>
                                       
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                <table id="datatable" class="display table table-striped table-hover" cellspacing="0" width="100%">
                                       <thead>
                                        <tr>
                                            <th>Barcode</th>
                                            <th>Nama</th>
                                            <th>Kategori</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($produk as $produks)
                                        <tr>
                                            <td><a href="{{route('produk_detail', $produks->barcode)}}" title="Detail">{{$produks->barcode}}</a></td>
                                            <td>{{$produks->nama}}</td>
                                            <td>{{$produks->relasikategori->kategori}}</td>
                                            <td><a href="{{route('produk_hapus', $produks->id)}}">Delete</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                               
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