@extends('admin_app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h3>Daftar Sub-Kategori</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Sub Kategori</th>
						<th>Kategori</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($subcategorys as $subcategory)
					<tr>
						<td>{{$subcategory->name}}</td>
						<td>{{$subcategory->under_category_id}}</td>
					</tr>
					@endforeach

				</tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-log-12">
			 <a class="btn btn-primary" href="{{'create'}}">Tambah Sub-Kategori </a>
		</div>
	</div>
</div>

@stop()