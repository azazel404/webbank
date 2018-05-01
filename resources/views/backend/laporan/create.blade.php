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
          <h2 class="no-margin-bottom">Laporan</h2>

        </div>
      </header>
     <section class="forms">
           <div class="container-fluid">
              <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">New Laporan</h3>
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
                       {!! Form::open(array('route' => 'adminreport.store', 'method' => 'POST','class' => 'form-horizontal', 'enctype'=>'multipart/form-data')) !!}

                        <div class="form-group row">
                          {{ Form::label('laporan', 'Photos',array('class' => 'col-sm-3 form-control-label')) }}
                            <div class="col-sm-9">
                          {{ Form::file('laporan')}}
                        </div>
                        </div>
                        <div class="form-group row">
                          {{ Form::label('description', 'description',array('class' => 'col-sm-3 form-control-label')) }}
                            <div class="col-sm-9">
                          {{ Form::text('description',null, array('class' => 'form-control', 'placeholder' => 'description', 'required' => 'required')) }}
                        </div>
                        </div>
                        <div class="form-group row">
                          {{ Form::label('nama_laporan', 'nama laporan',array('class' => 'col-sm-3 form-control-label')) }}
                            <div class="col-sm-9">
                          {{ Form::text('nama_laporan',null, array('class' => 'form-control', 'placeholder' => 'nama laporan', 'required' => 'required')) }}
                        </div>
                        </div>
                        <div class="form-group row">
                          {{ Form::label('tipe_laporan', 'type laporan',array('class' => 'col-sm-3 form-control-label')) }}
                            <div class="col-sm-9">
                          {{ Form::text('tipe_laporan',null, array('class' => 'form-control', 'placeholder' => 'type laporan', 'required' => 'required')) }}
                        </div>
                        </div>
                        <div class="form-group row">
                          {{ Form::label('tahun', 'tahun',array('class' => 'col-sm-3 form-control-label')) }}
                            <div class="col-sm-9">
                          {{ Form::text('tahun',null, array('class' => 'form-control', 'placeholder' => 'tahun', 'required' => 'required')) }}
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
