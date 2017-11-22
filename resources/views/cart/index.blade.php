@extends('layouts.main')

@section('content')
    <div class="row">
        <h3>Artículos en el carrito</h3>


        <table class="table table-hover">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Valoración</th>
                <th>Acción</th>
            </tr>
            </thead>
            <tbody>
            @foreach(Cart::content() as $cartItem)
                <tr>
                    <td>{{$cartItem->name}}</td>
                    <td>{{$cartItem->price}}</td>
                    <td width="50px">
                        {!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
                        <input name="qty" type="text" value="{{$cartItem->qty}}">


                    </td>
                    <td>
                        <div > {!! Form::select('size', ['small'=>'Ḿalo','medium'=>'Bueno','large'=>'Excelente'] , $cartItem->options->has('size')?$cartItem->options->size:'' ) !!}
                           </div>

                    </td>

                    <td>
                        <input style="float: left"  type="submit" class="button success small" value="Ok">
                        {!! Form::close() !!}

                        <form action="{{route('cart.destroy',$cartItem->rowId)}}"  method="POST">
                           {{csrf_field()}}
                           {{method_field('DELETE')}}
                           <input class="button small alert" type="submit" value="Eliminar">
                         </form>
                    </td>
                </tr>
            @endforeach

            <tr>
                <td></td>
                <td>
                    Descuento: Q{{Cart::tax()}} <br>
                    Sub Total: Q {{Cart::subtotal()}} <br>
                    Total: Q {{Cart::total()}}
                </td>
                <td>Artículos: {{Cart::count()}}

                </td>
                <td></td>
                <td></td>

            </tr>
            </tbody>
        </table>

        <a href="{{route('checkout.shipping')}}" class="button">Checkout</a>
        <a href="{{route('pdf-cotizacion')}}" class="button">descargar</a>
    </div>



@endsection