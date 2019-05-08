@extends('layouts.admin')
@section('title') Table @endsection
@section('subtitle') Galeri @endsection

@section('breadcrumb')
<nav align="center">
	<ol class="breadcrumb" >
		<li class="breadcrumb-item">
			<a href="{{ url('home')}}"><i class="ion ion-home"></i> Home</a>
		</li>
		<li class="breadcrumb-item active">
			Galeri
		</li>
	</ol>
</nav>
@endsection

@section('content')
<div class="col-md-12">
	<div class="card card-default widget">
		<div class="card-heading">
			<div class="card-controls">
				<a href="#" class="widget-minify"><i class="fa fa-chevron-up"></i></a>
				<a href="#" class="widget-close"><i class="fa fa-times"></i></a>
			</div>
			<h3 class="card-title">Table Galeri</h3>
			<br>
			<div class="card-title">
				<a id="modal-create" href="{{ route('galeri.create') }}" class="btn btn-round btn-primary" title="Add"><i class="fa fa-plus">&nbsp;</i>Add Galeri</a>
			</div>
		</div>
		<div class="card-body">
			<table class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>No</th>
						<th>Gambar</th>
						<th>Keterangan</th>
						<th colspan="3">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $nomor = 1; ?>
					@php $no = 1; @endphp
					@foreach($galeris as $data)
					<tr>
						<td>{{ $no++ }}</td>
						<td>
							<img src="{{asset('/img/'.$data->gambar.'' )}}" width="70" height="70">
						</td>
						<td><p>{!!str_limit($data->keterangan)!!}</p></td>
						<td>
							<a class="btn btn-success" href="{{ route('galeri.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<form method="post" action="{{ route('galeri.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div><!-- /.col-md-12 -->
@endsection