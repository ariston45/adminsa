@extends('layout.layout')
@section('title')
<title>AdminLTE 3 | Dashboard</title>
@endsection
@section('content')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row" >
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
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
                <i class="fas fa-exclamation-triangle mr-8"></i>
                Alerts
              </h3>
            </div>
            <div class="card-body">
              Text here..
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
@push('css')
  
@endpush
@push('script')
  
@endpush