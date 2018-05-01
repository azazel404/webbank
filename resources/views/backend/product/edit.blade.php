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
                      <h3 class="h4">Edit Product</h3>
                    </div>
                    <div class="card-body">
                      <!-- <p>Lorem ipsum dolor sit amet consectetur.</p> -->
                       {!! Form::model($product, ['url' => route('adminproduct.update', ['product' => $product]),'method' => 'PUT', 'enctype'=>'multipart/form-data']) !!}
                        <div class="form-group">
                          {{ Form::label('nama_product', 'Nama Product',array('class' => 'form-control-label')) }}
                          {{ Form::text('nama_product', $product->nama_product ? $product->nama_product : old('nama_product'), array('class' => 'form-control', 'placeholder' => 'nama_product', 'required' => 'required')) }}
                        </div>
                        <div class="form-group">
                          {{ Form::label('slug', 'sub title',array('class' => 'form-control-label')) }}
                          {{ Form::text('slug', $product->slug ? $product->slug : old('slug'), array('class' => 'form-control', 'placeholder' => 'sub title', 'required' => 'required')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('cover', 'cover',array('class' => 'form-control-label')) }}<br>
                            {{ Form::file('cover')}}
                        </div>
                        <div class="form-group">
                          {{ Form::label('description', 'description',array('class' => 'form-control-label')) }}
                          {{ Form::textarea('description', $product->description ? $product->description : old('description'), array('class' => 'form-control', 'required' => 'required' , 'id' => 'myEditor')) }}
                        </div>
                        <div class="form-group">
                         {{ Form::label('category', 'category',array('class' => 'form-control-label')) }}
                         {{ Form::text('category', $product->category ? $product->category : old('tipe_product'), array('class' => 'form-control', 'placeholder' => 'category', 'required' => 'required')) }}
                       </div>
                         <div class="form-group">
                          {{ Form::label('tipe_product', 'type Product',array('class' => 'form-control-label')) }}
                          {{ Form::text('tipe_product', $product->tipe_product ? $product->tipe_product : old('tipe_product'), array('class' => 'form-control', 'placeholder' => 'type Product', 'required' => 'required')) }}
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
