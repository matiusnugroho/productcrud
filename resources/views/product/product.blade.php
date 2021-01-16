@extends('base')
@section('content')
<div class="page-head">
          <h2 class="page-head-title">Unit</h2>
          
        </div>
        <div class="main-content container-fluid">
		<div class="card">
			<div class="card-header">
				<h5 class="card-title mb-0">Data Unit</h5>
				<a href="{{url('product/create')}}" class="btn btn-pill btn-primary float-right">Add</a>
			</div>
			<table class="table table-striped">
				<thead>
				<tr>
						<th style="width:40%;">Name</th>
						<th>Category</th>
						<th>Unit</th>
						<th>Price</th>						
						<th class="d-none d-md-table-cell">Stock</th> 
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
				@foreach($products as $product)
					<tr>
						<td>{{$product->product_name}}</td>
						<td>{{$product->category->category_name}}</td>
						<td>{{$product->unit->unit_name}}</td>
						<td>{{$product->price}}</td>
						<td class="d-none d-md-table-cell">{{$product->stock}}</td>
						<td class="table-action">
						{!!Form::open(['route'=>['product.destroy',$product->id],'method'=>'delete'])!!}
							<a href="{{url('/product/'.$product->id.'/edit')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
							<button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></button>
							{!!Form::close()!!}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
        </div>
@endsection