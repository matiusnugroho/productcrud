<div class="form-group row">
    <label class="col-form-label col-sm-2 text-sm-right">Product Name</label>
    <div class="col-sm-10">
    {!!Form::text('product_name',null,['class'=>'form-control','placeholder'=>"product name"])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-form-label col-sm-2 text-sm-right">Category</label>
    <div class="col-sm-10">
    {!!Form::select('category_id',$category_list,null,['class' => 'form-control'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-form-label col-sm-2 text-sm-right">Unit</label>
    <div class="col-sm-10">
    {!!Form::select('unit_id',$unit_list,null,['class' => 'form-control'])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-form-label col-sm-2 text-sm-right">Price</label>
    <div class="col-sm-10">
    {!!Form::text('price',null,['class'=>'form-control','placeholder'=>"product price"])!!}
    </div>
</div>
<div class="form-group row">
    <label class="col-form-label col-sm-2 text-sm-right">Stock</label>
    <div class="col-sm-10">
    {!!Form::text('stock',null,['class'=>'form-control','placeholder'=>"product stock"])!!}
    </div>
</div>