@component('mail::message')
# ¡Su compra se ha realizado con éxito! 

#Detalle de su ultima compra:

El total fue de: Q{{$order->total}}

eBooks agradece la compra. <br><br>
#eBooks ofrece estos nuevos libros: 
@component('mail::button', ['url' => ''])
Nuevos libros
@endcomponent

Gracias por la preferencia<br>
{{ config('app.name') }}
@endcomponent
