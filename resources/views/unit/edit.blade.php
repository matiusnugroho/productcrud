@extends('base')
@section('content')
<div class="page-head">
          <h2 class="page-head-title">Blank Page</h2>
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
              <li class="breadcrumb-item"><a href="pages-blank-header.html#">Home</a></li>
              <li class="breadcrumb-item"><a href="pages-blank-header.html#">Pages</a></li>
              <li class="breadcrumb-item active">Blank Page Header</li>
            </ol>
          </nav>
        </div>
        <div class="main-content container-fluid">
		<div class="card">
		<div class="card-header">
				<h5 class="card-title mb-0">Edit Unit</h5>
			</div>
			<div class="card-body">
			{!! Form::model($unit,['route' => ['unit.update',$unit->id],'method'=>'patch']) !!}
			@include('unit.form')
			<div class="form-group row">
				<div class="col-sm-10 ml-sm-auto">
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
			</div>
			{!!Form::close()!!}
			</div>
		</div>
        </div>
@endsection