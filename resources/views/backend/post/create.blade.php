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
                      <h3 class="h4">New Article</h3>
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
                       {!! Form::open(array('route' => 'adminpost.store', 'method' => 'POST', 'enctype'=>'multipart/form-data')) !!}
                        <div class="form-group">
                          {{ Form::label('title', 'title',array('class' => 'form-control-label')) }}
                          {{ Form::text('title',null, array('class' => 'form-control', 'placeholder' => 'title', 'required' => 'required')) }}

                        </div>
                        <div class="form-group">
                          {{ Form::label('slug', 'sub title',array('class' => 'form-control-label')) }}
                          {{ Form::text('slug', null, array('class' => 'form-control', 'placeholder' => 'sub title', 'required' => 'required')) }}
                          <small id="title" class="form-text text-muted">Note: subtitle wajib diisi untuk title dalam url,</small>
                        </div>
                        <div class="form-group">
                            {{ Form::label('cover', 'cover',array('class' => 'form-control-label')) }}<br>
                            {{ Form::file('cover')}}
                        </div>
                        <div class="form-group">
                          {{ Form::label('content', 'content',array('class' => 'form-control-label')) }}
                          {{ Form::textarea('content',null,array('class' => 'form-control' , 'id' => 'myEditor')) }}
                        </div>
                        <div class="form-group">
                          {{ Form::label('category', 'category',array('class' => 'form-control-label')) }}
                          {{ Form::text('category',null, array('class' => 'form-control', 'placeholder' => 'category', 'required' => 'required')) }}
                          <small id="title" class="form-text text-muted">Note: category diisi sesuai dengan pilihan tipe ini ialah : bisnis , promo , news ,</small>
                        </div>
                        <div class="form-group">
                          {{ Form::label('post_type', 'type post',array('class' => 'form-control-label')) }}
                          {{ Form::select('post_type',['news' => 'news', 'promo' => 'promo','dokumentasi' => 'dokumentasi'], null, array('class' => 'form-control', 'placeholder' => 'type post', 'required' => 'required')) }}

                        </div>
                        <div class="form-group">
                          {{ Form::label('author', 'author',array('class' => 'form-control-label')) }}
                          {{ Form::text('author', null, array('class' => 'form-control', 'placeholder' => 'author', 'required' => 'required')) }}
                          <small id="title" class="form-text text-muted">Note: diisi dengan jabatan seperti contoh : admin , publisher</small>
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
      toolbarButtons: ['bold', 'italic', 'underline', 'insertImage', 'insertLink', 'undo', 'redo','align'],
      pluginsEnabled: ['image', 'link', 'draggable']
    })
  });
</script>
@endpush
@endsection
