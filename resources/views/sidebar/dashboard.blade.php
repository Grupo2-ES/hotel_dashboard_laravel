<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="active"> <a href="{{ route('home') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
                <li class="list-divider"></li>
                <li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Reservas </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ route('form/allbooking') }}"> Todas as Reservas </a></li>
                        <li><a href="{{ route('form/booking/add') }}"> Adicionar Reserva </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Clientes </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ route('form/allcustomers/page') }}"> Todos os Clientes </a></li>
                        <li><a href="{{ route('form/addcustomer/page') }}"> Adicionar um Cliente </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Quartos </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ route('form/allrooms/page') }}">Todos os Quartos </a></li>
                        <li><a href="{{ route('form/addroom/page') }}"> Adicionar um Quarto</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>