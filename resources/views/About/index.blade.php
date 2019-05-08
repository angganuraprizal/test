@extends('layouts.frontend')
@section('About')
@foreach($galeris as $data)
<div class="slide col-md-3">
	<div class="productImage">
		<img src="{{asset('/img/'.$data->gambar.'' )}}" alt="featured-product-img">
		<div class="productMasking">
		</div>
	</div>
</div>
@endforeach
@endsection