@extends('layouts.backend.struktur')
@section('title', '| Index')

@section('body')
@include('includes.backend.dashboard.side')
    <div class="content-inner">
      <!-- Page Header-->
      <header class="page-header">
        <div class="container-fluid">
          <h2 class="no-margin-bottom">Article</h2>

        </div>
      </header>
     <section class="forms">
           <div class="container-fluid">
              <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Edit Article</h3>
                    </div>
                    <div class="card-body">
                      <!-- <p>Lorem ipsum dolor sit amet consectetur.</p> -->
                       {!! Form::model($tarif, ['url' => route('admintarif.update', ['tarif' => $tarif]),'method' => 'PUT', 'enctype'=>'multipart/form-data']) !!}
                        <div class="form-group">
                          {{ Form::label('keterangan', 'keterangan',array('class' => 'form-control-label')) }}
                          {{ Form::text('keterangan', $tarif->keterangan ? $tarif->keterangan : old('keterangan'), array('class' => 'form-control', 'placeholder' => 'keterangan', 'required' => 'required')) }}
                        </div>
                        <div class="form-group">
                          {{ Form::label('rate', 'rate',array('class' => 'form-control-label')) }}
                          {{ Form::text('rate', $tarif->rate ? $tarif->rate : old('rate'), array('class' => 'form-control', 'placeholder' => 'rate', 'required' => 'required')) }}
                        </div>

                        <div class="form-group">
                          {{ Form::submit('Save Changes', array('class' => 'btn btn-primary btn-lg btn-block')) }}
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
