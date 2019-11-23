@extends('layouts.admin')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col p-md-0">
                <h4>Basic Forms</h4>
            </div>
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                    </li>
                    <!-- <li class="breadcrumb-item"><a href="javascript:void()">Forms</a>
                            </li> -->
                    <li class="breadcrumb-item active">Kategori
                    </li>
                </ol>
            </div>
        </div>

        <div class="row" style="margin-top:20px;">
            <div class="col-12">
                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Tambah Kategori</h4>
                        <div class="basic-form">
                            <form action="{{route('kategori_proses_tambah')}}" method="POST">
                            	@csrf
                                <div class="form-group">
                                    <label class="text-label">Kategori*</label>
                                    <input type="text" name="kategori" class="form-control" placeholder="Masukkan Kategori Produk" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-form mr-2">Submit</button>
                                <a href="" class="btn btn-light text-dark btn-form">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- #/ container -->
</div>
@endsection