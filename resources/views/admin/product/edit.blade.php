@extends('admin.layout.admin')

@section('content')

    <h3>Add Product</h3>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {!! Form::model($product,['route' => ['product.update',$product->id], 'method' => 'PUT', 'files' => true]) !!}
            <div class="form-group">
                {{ Form::label('name', 'Nombre del libro') }}
                {{ Form::text('name', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
            </div>

            <div class="form-group">
                {{ Form::label('description', 'Descriptción') }}
                {{ Form::text('description', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('price', 'Precio') }}
                {{ Form::text('price', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('size', 'Valoración') }}
                {{ Form::select('size', [ 'small' => 'Mala', 'medium' => 'Buena','large'=>'Excelente'], null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('category_id', 'Categorias') }}
                {{ Form::select('category_id', $categories, null, ['class' => 'form-control','placeholder'=>'Seleccione Categoria']) }}
            </div>

            <div class="form-group">
                {{ Form::label('image', 'Imagen') }}
                {{ Form::file('image',array('class' => 'form-control')) }}
            </div>

             {{ Form::submit('Editar', array('class' => 'btn btn-default')) }}
            {!! Form::close() !!}


        </div>
    </div>



@endsection