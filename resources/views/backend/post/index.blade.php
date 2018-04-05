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
      <div class="card-header d-flex align-items-center">
         <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Tables</li>
            </ul>
          </div>
      </div>
      <section class="tables">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12" >
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Article Table</h3>
                          <div class="actions ml-auto">
                              <a href="{{ route('adminpost.create') }}" title="New Post" data-toggle="tooltip" data-placement="left" class="btn btn-lg">
                              <span class="fas fa-plus-circle entypo-plus"></span>
                              </a>
                          </div>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive ">
                        <table class="table table-bordered">
                          <thead>
                         <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Category</th>
                            <th>Tipe Post</th>
                            <th>Date Created</th>
                            <th colspan="2" style="text-align:center">Action</th>
                          </tr>
                          </thead>
                          <tbody>
					        @foreach ($posts as $post)
                        <tr>
                          <th>{{ $post->id }}</th>
                          <td>{{ substr($post->title, 0, 30) }}{{ strlen($post->title) > 30 ? "..." : "" }}</td>
                          <td>{!! substr($post->content, 0, 30) !!}{{ strlen($post->content) > 30 ? "..." : "" }}</td>
                          <td>{{ $post->category }}</td>
                          <td>{{ $post->post_type }}</td>
                          <td>{{ date('M  j- Y', strtotime($post->created_at)) }}</td>
                          <td><a href="{{ route('adminpost.edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a></td>
                          <td><a href="javascript:void(0)" id="btnDelete" data-toggle="modal" class="btn btn-default btn-sm" data-id="{{$post->id}}">delete</a></td>
                        </tr>
					        @endforeach
				                </tbody>
                        </table>
                      </div>
                      <div class="text-center">
				              {!! $posts->links(); !!}
			                </div>
                    </div>
                  </div>
                </div>
      </section>
@include('includes.modal_delete_table')
@include('includes.backend.dashboard.footer')
@endsection
