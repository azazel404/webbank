@extends('layouts.backend.struktur')
@extends('layouts.datatables.datatables')
@section('title', '| Index')

@section('body')
@include('includes.backend.dashboard.side')
    <div class="content-inner">
      <!-- Page Header-->
      <header class="page-header">
        <div class="container-fluid">
          <h2 class="no-margin-bottom">Biodata</h2>
        </div>
      </header>
      <div class="card-header d-flex align-items-center">
         <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Tables</li>
                <li class="breadcrumb-item active">Biodata</li>
            </ul>
          </div>
      </div>
      <section class="tables">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12" >
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Biodata Table</h3>
                          <div class="actions ml-auto">
                              <a href="{{ route('adminbiodata.create') }}" title="New Post" data-toggle="tooltip" data-placement="left" class="btn btn-lg">
                              <span class="fas fa-plus-circle entypo-plus"></span>
                              </a>
                          </div>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive ">
                        <table class="table table-bordered" id="post-table">
                          <thead>
                         <tr>
                            <th>No</th>
                            <th>image</th>
                            <th>Nama</th>
                            <!-- <th>Content</th> -->
                            <th>Nik</th>
                            <th>No handphone</th>
                            <th>jabatan</th>
                            <th style="text-align:center">Action</th>
                          </tr>
                          </thead>
                          <tbody>
				                </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
      </section>
      <div class="modal fade" id="modalDelete">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <p>Are you sure to delete this post ?</p>
              <form action="{{route('adminbiodata.delete')}}" method="post">
                  {{csrf_field()}}
                  <input id="idBiodata" type="hidden" name="id" value="">
            </div>
            <div class="modal-footer">
              <a href="javascript:void(0)" class="btn btn-default" data-dismiss="modal">Close</a>
              <button type="submit" class="btn btn-primary">Yes sure.</button>
              </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

@include('includes.backend.dashboard.footer')
@push('pageRelatedJs')
@if (Session::has('notifier.notice'))
        <script>
            new PNotify({!! Session::get('notifier.notice') !!});
        </script>
    @endif
	<script>

  $(document).on('click', '#btnDelete', function(){

    //send data id ke form modal
    $('#idBiodata').val($(this).data('id'));

    //munculin modal
    $('#modalDelete').modal('show');
  });
		$(document).ready(function(){
			var table = $('#post-table').DataTable({
				processing: true,
				serverSide: true,
				ajax: {
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
					url: '{!! route('adminbiodata.ajax') !!}',
					type: 'POST'
				},
				columns: [
					{ data: 'id', name: 'id' },
          { data: 'cover', name: 'cover',
          render: function( data, type, full, meta ) {
                          return "<img src=\"/img/biodata/" + data + "\" height=\"80px\" width='80px' class='profile-img'/>";
                      }
                    },
					{ data: 'nama', name: 'nama' },
					{ data: 'nik', name: 'nik' },
					{ data: 'no_hp', name: 'no_hp' },
					{ data: 'jabatan', name: 'jabatan' },
					{ data: 'action', name: 'action' },
				]
			});
			$(table.table().container()).removeClass( 'form-inline');
		});
	</script>
@endpush
@endsection
