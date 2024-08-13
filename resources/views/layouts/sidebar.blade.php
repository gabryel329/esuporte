<aside class="app-sidebar">
    <div class="app-sidebar__user">
        @if (auth()->check())
            <div>
                <p class="app-sidebar__user-name">{{ Auth::user()->name }}</p>
            </div>
        @endif
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item active" href="/home"><i class="app-menu__icon bi bi-speedometer"></i><span
                    class="app-menu__label">Home</span></a></li>

        <li><a class="app-menu__item" href="#"><i class="app-menu__icon bi bi-headset"></i><span
                    class="app-menu__label">Lista de Chamados</span></a></li>

        <li><a class="app-menu__item" href="#"><i class="app-menu__icon bi bi-bell"></i><span
                    class="app-menu__label">Notificações</span></a></li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                    class="app-menu__icon bi bi-person-workspace"></i><span class="app-menu__label">Administração</span><i
                    class="treeview-indicator bi bi-chevron-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('responsavel.index')}}"><i class="icon bi bi-calendar-plus"></i>
                        Responsável</a></li>
                <li><a class="treeview-item" href="{{route('empresa.index')}}"><i class="icon bi bi-search"></i>
                        Empresa</a></li>
                {{-- <li>
                    <a class="treeview-item" href="#"><i class="icon bi bi-person-add"></i>Pacientes</a>
                    <ul>
                        <li><a class="treeview-item" href="{{ route('paciente.index') }}"><i
                                    class="icon bi bi-plus-circle"></i> Novo</a></li>
                        <li><a class="treeview-item" href="{{ route('paciente.index1') }}"><i
                                    class="icon bi bi-person-lines-fill"></i> Lista de Pacientes</a></li>
                    </ul>
                </li> --}}
            </ul>
        </li>
    </ul>
</aside>
