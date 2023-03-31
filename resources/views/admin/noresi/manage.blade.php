@extends("admin.layouts.default")
@section('breadcrumbs')
    <li class="breadcrumb-item active"><a href="{{ route("admin.noresi.index") }}">Data Distribusi</a></li>
    @if(isset($data))
		<li class="breadcrumb-item active" aria-current="page">{{$data->no_resi}}</li>
        <li class="breadcrumb-item active" aria-current="page">{{trans('admiko.page_breadcrumbs_edit')}}</li>
    @else
        <li class="breadcrumb-item active" aria-current="page">{{trans('admiko.page_breadcrumbs_add')}}</li>
    @endIf
@endsection
@section('pageTitle')
<h1>Data Distribusi</h1>
@endsection
@section('pageInfo')
@endsection
@section('backBtn')
<a href="{{ route("admin.noresi.index") }}"><i class="fas fa-angle-left"></i> {{trans('admiko.page_back_btn')}}</a>
@endsection
@section('content')
<div class="card formPage noresi_manage admikoForm">
    <legend class="action">{{ isset($data) ? trans('admiko.update') : trans('admiko.add_new') }}</legend>
    <form method="POST" action="{{ $admiko_data['formAction'] }}" enctype="multipart/form-data" class="needs-validation" novalidate>
        @if(isset($data)) @method('PUT') @endIf
        @csrf
        <div class="card-body">
            @if ($errors->any())<div class="row"><div class="col-2"></div><div class="col"><div class="invalid-feedback d-block">@foreach($errors->all() as $error) {{$error}}<br> @endforeach</div></div></div>@endif
            <div class="row">
                
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="no_resi" class="col-md-2 col-form-label">No Resi:</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="no_resi" name="no_resi"  placeholder="No Resi"  value="{{{ old('no_resi', isset($data)?$data->no_resi : '') }}}">
                            <div class="invalid-feedback @if ($errors->has('no_resi')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="no_resi_help" class="text-muted"></small>
                        </div>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="nama_distributor" class="col-md-2 col-form-label">Nama Distributor:</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="nama_distributor" name="nama_distributor"  placeholder="Nama Distributor"  value="{{{ old('nama_distributor', isset($data)?$data->nama_distributor : '') }}}">
                            <div class="invalid-feedback @if ($errors->has('nama_distributor')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="nama_distributor_help" class="text-muted"></small>
                        </div>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="kota_distributor" class="col-md-2 col-form-label">Kota Distributor:</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="kota_distributor" name="kota_distributor"  placeholder="Kota Distributor"  value="{{{ old('kota_distributor', isset($data)?$data->kota_distributor : '') }}}">
                            <div class="invalid-feedback @if ($errors->has('kota_distributor')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="kota_distributor_help" class="text-muted"></small>
                        </div>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="jenis_barang" class="col-md-2 col-form-label">Jenis Barang:</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="jenis_barang" name="jenis_barang"  placeholder="Jenis Barang"  value="{{{ old('jenis_barang', isset($data)?$data->jenis_barang : '') }}}">
                            <div class="invalid-feedback @if ($errors->has('jenis_barang')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="jenis_barang_help" class="text-muted"></small>
                        </div>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="form-group row">
                        <label for="kategori_pengguna" class="col-md-2 col-form-label">Kategori Pengguna:</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="kategori_pengguna" name="kategori_pengguna"  placeholder="Kategori Pengguna"  value="{{{ old('kategori_pengguna', isset($data)?$data->kategori_pengguna : '') }}}">
                            <div class="invalid-feedback @if ($errors->has('kategori_pengguna')) d-block @endif">{{trans('admiko.required_text')}}</div>
                            <small id="kategori_pengguna_help" class="text-muted"></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer form-actions" id="form-group-buttons">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary float-start me-1 mb-1 mb-sm-0 save-button">{{trans('admiko.table_save')}}</button>
                    <a href="{{ route("admin.noresi.index") }}" class="btn btn-secondary float-end" role="button">{{trans('admiko.table_cancel')}}</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection