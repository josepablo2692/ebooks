{{-- Side Navigation --}}
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="{{route('admin.index')}}"><i class="glyphicon glyphicon-home"></i>
                    Dashboard</a></li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Productos
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('product.index')}}">Productos</a></li>
                    <li><a href="{{route('product.create')}}">Add Producto</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Categorias
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('category.index')}}">Add Categoria</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Ordenes
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{url('admin/orders/pending')}}">Ordenes pendientes</a></li>
                    <li><a href="{{url('admin/orders/delivered')}}">Ordenes entregadas</a></li>
                    <li><a href="{{url('admin/orders')}}">Todas las ordenes</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->