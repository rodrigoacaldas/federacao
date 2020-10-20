<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>

    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Menu</li>

                <li>
                    <a href="{{route('home')}}" @if((Request::segment(1) == 'home') ||( Request::segment(1) == null)) class="mm-active" @endif>
                        <i class="metismenu-icon pe-7s-graph2"> </i>Home
                    </a>
                </li>

                <li>
                    <a href="{{route('athletes.index')}}" @if((Request::segment(1) == 'atletas')) class="mm-active" @endif>
                        <i class="metismenu-icon pe-7s-users"> </i>Atletas
                    </a>
                </li>

                <li>
                    <a href="{{route('clubs.index')}}" @if((Request::segment(1) == 'clubes')) class="mm-active" @endif>
                        <i class="metismenu-icon pe-7s-date"> </i>Clubes
                    </a>
                </li>

                @php $subgroupCadastro = array("Teste") @endphp
                <li @if( in_array(Request::segment(1) , $subgroupCadastro)) class="mm-active" @endif>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-way"></i>
                        Cadastros
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul @if( in_array(Request::segment(1) , $subgroupCadastro)) class="mm-show" @endif >

                        <li>
                            <a href="{{route('home')}}"  @if(Request::segment(1) == 'goals') class="mm-active" @endif>
                                <i class="metismenu-icon"></i> Metas
                            </a>
                        </li>

                        @can('isSuper')
                            <li>
                                <a href="{{route('modalities.index')}}" @if((Request::segment(1) == 'modalidades')) class="mm-active" @endif>
                                    <i class="metismenu-icon pe-7s-note2"> </i>Modalidades
                                </a>
                            </li>
                        @endcan

                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
