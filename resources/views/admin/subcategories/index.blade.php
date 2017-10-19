@include('admin.includes.header')
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="x_panel tile">

                <div class="x_title">

                    <h2>Sub Category List</h2>
                    <div class="clearfix"></div>
                    <hr>
                    <a href="{{ route('subcategories.create') }}" class="btn btn-primary">Add Sub Category Item</a>

                </div>

                <div class="x_content">

                    <table width="100%" class="table table-responsive bordered">

                        <tr>
                            <th>Sub Category Name</th>
                            <th>Category Name</th>
                            <th colspan="2">Actions</th>
                        </tr>

                        @foreach($subcategories as $menu)
                            <tr>
                                <td>{{ $menu->sub_cat_name }}</td>
                                <?php
                                    $categoryName = \App\Categorie::select('cat_name')->where('id', $menu->cat_id)->first();
                                    //$categoryName = \App\Categorie::where('id', $menu->cat_id)->pluck('cat_name');
                                ?>
                                <td>{{$categoryName->cat_name}}</td>
                                <td><a href="{{ route('subcategories.edit', $menu->id) }}" class="btn btn-warning" style="font-size: 12px;">Edit</a></td>
                                <td>{!! Form::open(['method'=>'delete', 'route'=>['subcategories.destroy', $menu->id]]) !!}
                                    {!! Form::submit('Delete', ['class'=>'btn btn-danger custom-delete-button', 'onclick'=>'return confirm("Are you sure you want to delete this record?")']) !!}
                                    {!! Form::close() !!}</td>
                            </tr>
                        @endforeach

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>
@include('admin.includes.footer')