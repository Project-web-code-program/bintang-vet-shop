@extends('layout.master')

@section('content')
<div class="box box-info" id="pendaftaran-pasien-app">
  <div class="box-header with-border">
    <h3 class="box-title">Pendaftaran Pasien</h3>
    <div class="inner-box-title">
      <div class="section-left-box-title">
        <button class="btn btn-info openFormAdd">Tambah</button>
      </div>
      <div class="section-right-box-title">
        <div class="input-search-section m-r-10px">
          <input type="text" class="form-control" placeholder="cari..">
          <i class="fa fa-search" aria-hidden="true"></i>
        </div>
        <select id="filterCabang" style="width: 50%"></select>
      </div>
    </div>
  </div>

  <div class="box-body table-responsive">
    <table class="table table-striped text-nowrap">
      <thead>
        <tr>
          <th>No</th>
          <th class="onOrdering" data='id_register' orderby="none">No. Registrasi <span class="fa fa-sort"></span></th>
          <th class="onOrdering" data='id_member' orderby="none">No. Pasien <span class="fa fa-sort"></span></th>
          <th class="onOrdering" data='pet_name' orderby="none">Nama Hewan <span class="fa fa-sort"></span></th>
          <th class="onOrdering" data='complaint' orderby="none">Keluhan <span class="fa fa-sort"></span></th>
          <th class="onOrdering" data='registrant' orderby="none">Nama Pendaftar <span class="fa fa-sort"></span></th>
          <th class="onOrdering" data='branch_name' orderby="none">Dokter yang menangani <span class="fa fa-sort"></span></th>
          <th class="onOrdering" data='registrant' orderby="none">Status <span class="fa fa-sort"></span></th>
          <th class="onOrdering" data='created_by' orderby="none">Dibuat Oleh <span class="fa fa-sort"></span></th>
          <th class="onOrdering" data='created_at' orderby="none">Tanggal dibuat <span class="fa fa-sort"></span></th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody id="list-pendaftaran-pasien"></tbody>
    </table>
  </div>
  <!-- /.box-body -->

  @component('pendaftaran.pendaftaran-pasien.modal-pendaftaran-pasien') @endcomponent
  @component('layout.modal-confirmation') @endcomponent
  @component('layout.message-box') @endcomponent
</div>
@endsection
@section('script-content')
  <script src="{{ asset('main/js/pendaftaran/pendaftaran-pasien/pendaftaran-pasien.js') }}"></script>  
@endsection
@section('vue-content')

@endsection