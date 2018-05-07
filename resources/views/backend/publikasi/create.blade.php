@extends('layouts.backend.struktur')
@section('title', '| Index')

@push('pageRelatedCss')
<link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.6/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
<link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.6/css/froala_style.min.css' rel='stylesheet' type='text/css' />
@endpush
@section('body')
@include('includes.backend.dashboard.side')
    <div class="content-inner">
      <!-- Page Header-->
      <header class="page-header">
        <div class="container-fluid">
          <h2 class="no-margin-bottom">Laporan Publikasi</h2>

        </div>
      </header>
     <section class="forms">
           <div class="container-fluid">
              <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">New Laporan Publikasi</h3>
                    </div>
                    <div class="card-body">
                      @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      @endif
                       {!! Form::open(array('route' => 'adminpublikasi.store', 'method' => 'POST','class' => 'form-horizontal', 'enctype'=>'multipart/form-data')) !!}


                       <div class="form-group row">
                         {{ Form::label('nama_laporanpertama', 'nama laporan pertama',array('class' => 'col-sm-3 form-control-label')) }}
                           <div class="col-sm-9">
                         {{ Form::text('nama_laporanpertama',null, array('class' => 'form-control', 'placeholder' => 'nama laporan pertama', 'required' => 'required')) }}
                       </div>
                       </div>

                        <div class="form-group row">
                          {{ Form::label('laporanpertama', 'File Laporan',array('class' => 'col-sm-3 form-control-label')) }}
                            <div class="col-sm-9">
                          {{ Form::file('laporanpertama')}}
                        </div>
                        </div>
                        <div class="form-group row">
                          {{ Form::label('nama_laporankedua', 'nama laporan kedua',array('class' => 'col-sm-3 form-control-label')) }}
                            <div class="col-sm-9">
                          {{ Form::text('nama_laporankedua',null, array('class' => 'form-control', 'placeholder' => 'nama laporan kedua', 'required' => 'required')) }}
                        </div>
                        </div>

                         <div class="form-group row">
                           {{ Form::label('laporankedua', 'File Laporan',array('class' => 'col-sm-3 form-control-label')) }}
                             <div class="col-sm-9">
                           {{ Form::file('laporankedua')}}
                         </div>
                         </div>
                         <div class="form-group row">
                           {{ Form::label('nama_laporanketiga', 'nama laporan ketiga',array('class' => 'col-sm-3 form-control-label')) }}
                             <div class="col-sm-9">
                           {{ Form::text('nama_laporanketiga',null, array('class' => 'form-control', 'placeholder' => 'nama laporan ketiga', 'required' => 'required')) }}
                         </div>
                         </div>

                          <div class="form-group row">
                            {{ Form::label('laporanketiga', 'File Laporan',array('class' => 'col-sm-3 form-control-label')) }}
                              <div class="col-sm-9">
                            {{ Form::file('laporanketiga')}}
                          </div>
                          </div>
                          <div class="form-group row">
                            {{ Form::label('nama_laporankeempat', 'nama laporan keempat',array('class' => 'col-sm-3 form-control-label')) }}
                              <div class="col-sm-9">
                            {{ Form::text('nama_laporankeempat',null, array('class' => 'form-control', 'placeholder' => 'nama laporan keempat', 'required' => 'required')) }}
                          </div>
                          </div>

                           <div class="form-group row">
                             {{ Form::label('laporankeempat', 'File Laporan',array('class' => 'col-sm-3 form-control-label')) }}
                               <div class="col-sm-9">
                             {{ Form::file('laporankeempat')}}
                           </div>
                           </div>
                        <div class="form-group row">
                          {{ Form::label('tipe_laporan', 'type laporan',array('class' => 'col-sm-3 form-control-label')) }}
                            <div class="col-sm-9">
                          {{ Form::text('tipe_laporan',null, array('class' => 'form-control', 'placeholder' => 'type laporan', 'required' => 'required')) }}
                        </div>
                        </div>
                        <div class="form-group row">
                          {{ Form::label('tanggal', 'Tanggal',array('class' => 'col-sm-3 form-control-label')) }}
                            <div class="col-sm-9">
                          {{ Form::date('tanggal',null, array('class' => 'form-control', 'placeholder' => 'tanggal', 'required' => 'required')) }}
                        </div>
                        </div>
                        <div class="form-group">
                          {{ Form::submit('Create Post', array('class' => 'btn btn-primary btn-lg btn-block')) }}
                        </div>
                        {!! Form::close() !!}
                    </div>
                  </div>
                </div>
      </section>
@include('includes.backend.dashboard.footer')
@push('pageRelatedJs')
<script>
  $(function() {
      $('#myEditor').froalaEditor({
      dragInline: false,
      toolbarButtons: ['bold', 'italic', 'underline', 'insertImage', 'insertLink', 'undo', 'redo'],
      pluginsEnabled: ['image', 'link', 'draggable']
    })
  });
</script>
@endpush
@endsection
