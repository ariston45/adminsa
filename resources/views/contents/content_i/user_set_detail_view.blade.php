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
	<section class="content" style="font-size: 15px;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card card-default">
						<div class="card-header">
							<h3 class="card-title">
								<i class="fas fa-list-alt mr-8"></i>
								Detail Data User
							</h3>
							<div class="float-right">
								<a href="#" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-perbarui-data-user">
									<b> <i class="fas fa-edit" style="margin-right: 3px;"></i> Perbarui</b>
								</a>
								<a href="#" class="btn btn-primary btn-xs">
									<b> <i class="fas fa-trash-alt" style="margin-right: 3px;"></i> Hapus</b>
								</a>
								<a href="#" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Close">
									<i class="fas fa-times-circle"></i>
								</a>
							</div>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-sm-3">
									<div class="text-center">
										<img class="custom-profile-user-img img-fluid custom-img-circle" src="{{ url('storage/user.png') }}" alt="User profile picture">
									</div>
									<div style="text-align: center;">
									</div>
								</div>
								<div class="col-sm-9">
									<strong>Username</strong>
									<p class="text-muted">
										Username User
									</p>
									<strong>Fullname</strong>
									<p class="text-muted">
										Nama User
									</p>
									<strong>Position</strong>
									<p class="text-muted">
										Admin
									</p>
									<strong>Email</strong>
									<p class="text-muted">
										example@domain.com
									</p>
									<strong>Phone Number</strong>
									<p class="text-muted">
										+62-851-0101-xxxx
									</p>
									<strong>Address</strong>
									<p class="text-muted">
										Jl. xxxx No. xxxxx
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<div class="modal fade" id="modal-perbarui-data-user" style="padding-right: 17px;" aria-modal="true" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title">Large Modal</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<form action="" autocomplete="new-password">
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-3">
							<div class="text-center">
								<img class="custom-profile-user-img-i img-fluid custom-img-circle" src="{{ url('storage/user.png') }}" alt="User profile picture">
							</div>
							<div style="text-align: center;">
								<button type="button" class="btn btn-xs btn-default">Unggah Photo</button>
							</div>
						</div>
						<div class="col-sm-9">
							<div class="form-group">
								<label for="nama_pengguna">Nama Pengguna</label>
								<input class="form-control form-control-sm rounded-0" type="text"  placeholder="user_name">
							</div>
							<div class="form-group">
								<label for="nama_lengkap">Nama Lengkap</label>
								<input class="form-control form-control-sm rounded-0" type="text"  placeholder="Nama Lengkap">
							</div>
							<div class="form-group">
								<label for="akses_pengguna">Akses Pengguna</label>
								<input class="form-control form-control-sm rounded-0" type="text"  placeholder="Nama Lengkap">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input class="form-control form-control-sm rounded-0" type="email"  placeholder="xxx@example.com" autocomplete="off">
							</div>
							<div class="form-group">
								<label for="email">Nomor Telepon</label>
								<input class="form-control form-control-sm rounded-0" type="text"  placeholder="+00 - xxx - xxxx - xxxx" autocomplete="off">
							</div>
							<div class="form-group">
								<label for="email">Alamat</label>
								<input class="form-control form-control-sm rounded-0" type="text"  placeholder="Jl. xxx No. n" autocomplete="off">
							</div>
							<hr>
							<div class="form-group">
								<label for="email">Password</label>
								<input class="form-control form-control-sm rounded-0" type="password"  placeholder="***" autocomplete="new-password">
							</div>
							<div class="form-group">
								<label for="email">Konfirmasi Password</label>
								<input class="form-control form-control-sm rounded-0" type="password"  placeholder="***">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default btn-xs custom-btn-modal" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary btn-xs custom-btn-modal">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@push('css')
<style>
.custom-profile-user-img{
	border: 3px solid #adb5bd;
  margin: 0 auto;
  padding: 3px;
  width: 150px;
	margin-bottom: 15px;
}
.custom-profile-user-img-i{
	border: 3px solid #adb5bd;
  margin: 0 auto;
  padding: 3px;
  width: 120px;
	margin-bottom: 15px;
}
.custom-img-circle{
	border-radius: 20%;
}
.modal-header{
	padding: 12px;
}
.modal-body{
	padding: 12px;
	font-size: 14px;
}
.custom-btn-modal{
	margin: 0px;
}
</style>
@endpush
@push('script')

@endpush