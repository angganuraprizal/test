@extends('layouts.admin')
@section('title') Table @endsection
@section('subtitle') Admin @endsection

@section('breadcrumb')
<nav align="center">
	<ol class="breadcrumb float-right" >
		<li class="breadcrumb-item">
			<a href="{{ url('home')}}"><i class="ion ion-home"></i> Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="{{ route('barang.index')}}">Barang</a>
		</li>
		<li class="breadcrumb-item active">
			Create
		</li>
	</ol>
</nav>
@endsection

@section('content')
<div class="col-md-12">
	<div class="card card-default widget">
		<div class="card-heading">
			<div class="card-controls">
				<!-- <a href="#" class="widget-minify"><i class="fa fa-chevron-up"></i></a>
				<a href="#" class="widget-close"><i class="fa fa-times"></i></a> -->
			</div>
			<h3 class="card-title">Tambah Kategori</h3>
		</div>
		<div class="card-body">
			<form action="{{ route('barang.store') }}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group {{ $errors->has('kategori_id') ? ' has-error' : '' }}">
					<label class="control-label">Kategori</label>
					<select name="kategori_id" class="form-control">
						@foreach($kategori as $data)
						<option value="{{$data->id}}">{{$data->kategori}}</option>
						@endforeach
					</select>
					@if ($errors->has('kategori_id'))
					<span class="help-block">
						<strong>{{ $errors->first('kategori_id') }}</strong>
					</span>
					@endif
				</div>

				<div class="form-group {{ $errors->has('nama_barang') ? ' has-error' : '' }}">
					<label class="control-label">Nama Barang</label>
					<input type="text" name="nama_barang" class="form-control"  required>
					@if ($errors->has('nama_barang'))
					<span class="help-block">
						<strong>{{ $errors->first('nama_barang') }}</strong>
					</span>
					@endif
				</div>

				<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
					<label class="control-label">Harga</label>
					<input type="text" name="harga" class="form-control"  required>
					@if ($errors->has('harga'))
					<span class="help-block">
						<strong>{{ $errors->first('harga') }}</strong>
					</span>
					@endif
				</div>

				<div class="row">
					<!-- foto 1 -->
					<div class="col-md-3">
						<div class="form-group {{ $errors->has('foto1') ? ' has-error' : '' }}">
							<label class="control-label">Foto 1</label>
							<input type="file" name="foto1" class="form-control" accept="/img" required>
							@if ($errors->has('foto'))
							<img src="{{ asset('/img/'.$barangs->foto1) }}" style="width: 250px; height: 250px;" alt="">
							<span class="help-block">
								<strong>{{ $errors->first('foto1') }}</strong>
							</span>
							@endif
						</div>
					</div>
					<!-- foto 2 -->
					<div class="col-md-3">
						<div class="form-group {{ $errors->has('foto2') ? ' has-error' : '' }}">
							<label class="control-label">Foto 2</label>
							<input type="file" name="foto2" class="form-control" accept="/img">
							@if ($errors->has('foto'))
							<img src="{{ asset('/img/'.$barangs->foto2) }}" style="width: 250px; height: 250px;" alt="">
							<span class="help-block">
								<strong>{{ $errors->first('foto2') }}</strong>
							</span>
							@endif
						</div>
					</div>
					<!-- foto 3 -->
					<div class="col-md-3">
						<div class="form-group {{ $errors->has('foto3') ? ' has-error' : '' }}">
							<label class="control-label">Foto 3</label>
							<input type="file" name="foto3" class="form-control" accept="/img">
							@if ($errors->has('foto'))
							<img src="{{ asset('/img/'.$barangs->foto3) }}" style="width: 250px; height: 250px;" alt="">
							<span class="help-block">
								<strong>{{ $errors->first('foto3') }}</strong>
							</span>
							@endif
						</div>
					</div>
					<!-- foto 4 -->
					<div class="col-md-3">
						<div class="form-group {{ $errors->has('foto4') ? ' has-error' : '' }}">
							<label class="control-label">Foto 4</label>
							<input type="file" name="foto4" class="form-control" accept="/img">
							@if ($errors->has('foto'))
							<img src="{{ asset('/img/'.$barangs->foto4) }}" style="width: 250px; height: 250px;" alt="">
							<span class="help-block">
								<strong>{{ $errors->first('foto4') }}</strong>
							</span>
							@endif
						</div>
					</div>
				</div>
				
				<div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
					<label class="control-label">Deskripsi</label>
					<textarea id="text" type="ckeditor" name="deskripsi" class="ckeditor" required=""></textarea>
					@if ($errors->has('deskripsi'))
					<span class="help-block">
						<strong>{{ $errors->first('deskripsi') }}</strong>
					</span>
					@endif
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Tambah</button>
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
</div><!-- /.col-md-12 -->
@endsection