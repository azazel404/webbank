@extends('layouts.backend.struktur')
@extends('layouts.datatables.datatables')
@section('title', '| Index')

@section('body')
@include('includes.backend.dashboard.side')
    <div class="content-inner">
      <!-- Page Header-->
      <header class="page-header">
        <div class="container-fluid">
          <h2 class="no-margin-bottom">Dashboard</h2>
        </div>
      </header>
      <div class="card-header d-flex align-items-center">
        <h3 class="h4"><a href="{{ route('adminpost.create') }}">Table Post</a></h3>
      </div>
      <div class="card-body">
        <div class="table-responsive table-bordered datatable dataTable" id="post-table" width="100%">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
      </section>
@include('includes.backend.dashboard.footer')
@endsection
@push('pageRelatedJs')
	<script>
		$(document).ready(function(){
			var table = $('#post-table').DataTable({
				processing: true,
				serverSide: true,
				ajax: {
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
					url: '{!! route('adminpost.ajax') !!}',
					type: 'POST'
				},
				columns: [
					{ data: 'id', name: 'id' },
					{ data: 'question', name: 'question' },
					{ data: 'answer', name: 'answer' },
					{ data: 'urut', name: 'urut' },
					{ data: 'status', name: 'status' },
					{ data: 'type', name: 'type' },
					{ data: 'action', name: 'action' },
				]
			});
			$(table.table().container()).removeClass( 'form-inline');
		});
	</script>
@endpush
