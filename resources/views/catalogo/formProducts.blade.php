<@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form 
        -->
        <form action="{{ url('/home/products') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Nombre:</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="task-description" class="col-sm-3 control-label">Iva:</label>
                <div class="col-sm-6">
                    <input type="text" name="tax" id="task-tax" class="form-control">
                </div>                
            </div>
            <div class="form-group">
                <label for="task-description" class="col-sm-3 control-label">Precio:</label>
                <div class="col-sm-6">
                    <input type="text" name="price" id="task-price" class="form-control">
                </div>                
            </div>
            <div class="form-group">
                <label for="task-description" class="col-sm-3 control-label">Unidades:</label>
                <div class="col-sm-6">
                    <input type="text" name="stok" id="task-stock" class="form-control">
                </div>                
            </div> 
            <div class="form-group">
                <label for="task-description" class="col-sm-3 control-label">Categoria:</label>
                <div class="col-sm-6">
                    <input type="text" name="category_id" id="task-category_id" class="form-control">
                </div>                
            </div> 

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Agregar Un Producto
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Current Tasks -->
@endsection