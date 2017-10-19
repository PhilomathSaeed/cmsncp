@include('admin.includes.header')

<div class="right_col" role="main">
    <!-- top tiles -->

    <div class="x_title">
        <h2>Edit Sub Category</h2>
        <div class="clearfix"></div>
    </div>

    <div class="x_content">
        <div class="row">

            {!! Form::model($subcategory, ['route'=>['subcategories.update', $subcategory->id], 'method'=>'PATCH', 'class'=>'form-horizontal']) !!}

            <div class="form-group">
                </label> -->
                {!! Form::label('sub_cat_name','Sub Category Name', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                    {!! Form::text('sub_cat_name', $subcategory->sub_cat_name, ['class'=>'form-control col-md-7 col-xs-12']) !!}
                    {!! $errors->has('sub_cat_name')?$errors->first('sub_cat_name'):'' !!}
                </div>
            </div>

                <div class="form-group">
                    <label for="cat_name" class="control-label col-md-3 col-sm-3 col-xs-12">Category Name</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="cat_id" class="form-control">
                            <?php
                            $categoryName = \App\Categorie::select('cat_name')->where('id', $subcategory->cat_id)->first();
                            ?>
                            <option value="{{ $subcategory->cat_id }}">{{ $categoryName->cat_name }}</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->cat_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <a href="{{ route('subcategories.index') }}" class="btn btn-primary">Cancel</a>
                    {!! Form::submit('Update', ['class'=>'btn btn-info']) !!}
                </div>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>

@include('admin.includes.footer')