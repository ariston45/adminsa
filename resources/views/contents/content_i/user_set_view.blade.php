@extends('layout.layout')
@section('title')
<title>Syahira CRM | Pengaturan User</title>
@endsection
@section('content')
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row" >
				<div class="col-sm-6">
					<h1 class="m-0">Pengaturan User</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Pengaturan</a></li>
						<li class="breadcrumb-item active">User</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card card-default">
						<div class="card-header">
							<h3 class="card-title">
								<i class="far fa-list-alt mr-8"></i>
								Data User
							</h3>
						</div>
						<div class="card-body">
							<table id="tabel_user" class="table table-bordered tabel-customs">
								<thead>
									<tr>
										<th style="width: 10px">No</th>
										<th>Full Name</th>
										<th>Username</th>
										<th>Email</th>
										<th style="width: 40px">Menu</th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection
@push('css')
{{-- <link rel="stylesheet" href="{{ URL('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}"> --}}
{{-- <link rel="stylesheet" href="{{ URL('plugins/datatables_adminlte2/media/css/dataTables.bootstrap.min.css')}}"> --}}
{{-- <link rel="stylesheet" href="{{ URL('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}"> --}}
{{-- <link rel="stylesheet" href="{{ URL('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}"> --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap4.min.css">
{{-- <link rel="stylesheet" href="{{ URL('plugins/datatables_adminlte2/extensions/Responsive/css/responsive.bootstrap.css')}}"> --}}
<style>
<style>
.tabel-customs {
  border-collapse: collapse;
  font-size: 11px;
}
.tabel-customs > thead {
  background-color: #0079BA;
  color: #f2f2f2;
}
.tabel-customs > thead > tr > th {
  padding: 6px 8px;
}
.tabel-customs > tbody > tr > td {
  padding: 2px 8px;
}
.tabel-customs tr:nth-child(even){background-color: #f2f2f2;}
</style>

@endpush
@push('script')
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap4.min.js"></script>

{{-- <script src="{{ URL('plugins/datatables_adminlte2/media/js/jquery.dataTables.min.js')}}"></script> --}}
{{-- <script src="{{ URL('plugins/datatables_adminlte2/media/js/dataTables.bootstrap4.min.js')}}"></script> --}}
{{-- <script src="{{ URL('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script> --}}
{{-- <script src="{{ URL('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script> --}}
{{-- <script src="{{ URL('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script> --}}
{{-- <script src="{{ URL('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script> --}}
{{-- <script src="{{ URL('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script> --}}
{{-- <script src="{{ URL('plugins/datatables_adminlte2/extensions/Responsive/js/dataTables.responsive.js')}}"></script> --}}
<script>
$(document).ready(function (){
	var id;
	tabel_user = $('#tabel_user').DataTable({
		processing: true,serverSide: true,responsive: true,lengthChange: true,
		ajax: {
			"url": "{!! route('source-data-user') !!}",
			"type": "POST",
			"data": {
				"_token": "{{ csrf_token() }}",
				"id" : id
			} 
		},
		columns: [
			{data: 'DT_RowIndex', name: 'DT_RowIndex'},
			{data: 'name', name: 'name', orderable: true, searchable: true },
			{data: 'username', name: 'username', orderable: true, searchable: true },
			{data: 'email', name: 'email', orderable: true, searchable: true },
			{data: 'menu', name: 'menu', orderable: true, searchable: true },
		]
	}),
	$('#save').click(function() {
		$('#notif').hide();
		var formData = $('#form-tambah-siswa').serialize();
		$.ajax({
			type: 'POST',
			url: "{{ url('crud/create-grup-anggota') }}",
			data: formData,
			success: function(data) {
				if (data == 1) {
					swal(
						'Berhasil!',
						'Data guru berhasil disimpan.',
						'success'
					)
					tabel_user.ajax.reload();
				}else{
					$('#notif').html(data).show();
					$('#frame-notif').show();
				}
			}
		})
	});
});
</script>
@endpush