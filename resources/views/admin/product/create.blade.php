@extends('admin.layout.admin')

@section('content')

    <h3>Add Product</h3>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {!! Form::open(['route' => 'product.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

            <div class="form-group">
                {{ Form::label('name', 'Nombre del libro') }}
                {{ Form::text('name', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
            </div>

            <div class="form-group">
                {{ Form::label('description', 'Descripción') }}
                {{ Form::text('description', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('price', 'Precio') }}
                {{ Form::text('price', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('size', 'Valoración') }}
                {{ Form::select('size', [ 'small' => 'Malo', 'medium' => 'Bueno','large'=>'Excelente'], null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('category_id', 'Categories') }}
                {{ Form::select('category_id', $categories, null, ['class' => 'form-control','placeholder'=>'Selecione Categoria']) }}
            </div>

            <div class="form-group">
                {{ Form::label('image', 'Imagen') }}
                {{ Form::file('image',array('class' => 'form-control')) }}
            </div>

             {{ Form::submit('Crear', array('class' => 'btn btn-default')) }}
            {!! Form::close() !!}

        </div>
    </div>



@endsection