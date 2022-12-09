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
								<i class="fas fa-list-alt mr-8"></i>
								Detail Data User
							</h3>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-sm-3">
									<div class="text-center">
										<img class="custom-profile-user-img img-fluid img-circle" src="{{ url('storage/image512.png') }}" alt="User profile picture">
									</div>
									<div style="text-align: center;">
										<a href="#" class="btn btn-primary btn-sm"><b>Ganti Gambar</b></a>
									</div>
								</div>
								<div class="col-sm-9">
									Test
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection

@push('css')
<style>
.custom-profile-user-img{
	border: 3px solid #adb5bd;
  margin: 0 auto;
  padding: 3px;
  width: 150px;
	margin-bottom: 20px;
}
</style>
@endpush
@push('script')

@endpush