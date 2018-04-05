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
                        </div>
                        <div class="form-group">
                            {{ Form::label('cover', 'cover',array('class' => 'form-control-label')) }}<br>
                            {{ Form::file('cover')}}
                        </div>
                        <div class="form-group">
                          {{ Form::label('content', 'content',array('class' => 'form-control-label')) }}
                          {{ Form::textarea('content',null,array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                          {{ Form::label('category', 'category',array('class' => 'form-control-label')) }}
                          {{ Form::text('category',null, array('class' => 'form-control', 'placeholder' => 'category', 'required' => 'required')) }}
                        </div>
                        <div class="form-group">
                          {{ Form::label('post_type', 'type post',array('class' => 'form-control-label')) }}
                          {{ Form::text('post_type', null, array('class' => 'form-control', 'placeholder' => 'type post', 'required' => 'required')) }}
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
@push('PageRelatedJs')
<script src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script>
  tinymce.init({
      selector: 'textarea',
      plugins: "link code autosave image",
      menubar: false,
      menu: {
          file: {title: 'File', items: 'newdocument'},
          edit: {title: 'Edit', items: 'undo redo | cut copy paste pastetext | selectall'},
          insert: {title: 'Insert', items: 'link media | template hr'},
          view: {title: 'View', items: 'visualaid'},
          format: {title: 'Format', items: 'bold italic underline strikethrough superscript subscript | formats | removeformat'},
          table: {title: 'Table', items: 'inserttable tableprops deletetable | cell row column'},
          tools: {title: 'Tools', items: 'spellchecker code'}
           }
  });
</script>
@endsection
