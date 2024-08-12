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
            
        <li><a class="app-menu__item" href="#"><i
                    class="app-menu__icon bi bi-buildings"></i><span class="app-menu__label">Lista de Chamados</span></a></li>
        
        <li><a class="app-menu__item" href="#"><i
            class="app-menu__icon bi bi-buildings"></i><span class="app-menu__label">Notificações</span></a></li>
    </ul>
</aside>
