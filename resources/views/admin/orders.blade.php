@extends('admin.layout.admin')
@section('content')
    <h3>Pédidos</h3>
    <hr>

    <ul>
        @foreach($orders as $order)
            <li>
                <h4>Pédido hecho por: {{$order->user->name}} <br> Precio total + IVA:  {{$order->total}}</h4>

                <form action="{{route('toggle.deliver',$order->id)}}" method="POST" class="pull-right" id="deliver-toggle">
                    {{csrf_field()}}
                    <label for="delivered">Entregado</label>
                    <input type="checkbox" value="1" name="delivered"  {{$order->delivered==1?"checked":"" }}>
                    <input type="submit" value="Enviar e-mail">
                </form>

                <div class="clearfix"></div>
                <hr>
                <h5>Artículos</h5>
                <table class="table table-bordered">
                    <tr>
                        <th>Nombre del libro</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                    </tr>
                    @foreach($order->orderItems as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->pivot->qty}}</td>
                            <td>{{$item->pivot->total}}</td>
                        </tr>

                    @endforeach
                </table>
            </li>

        @endforeach

    </ul>
@endsection

