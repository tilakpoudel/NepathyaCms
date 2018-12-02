  
    <header class="header" id="site-header">
        <div class="container">
                <div class="header-content-wrapper">
                    <div class="logo">
                        <div class="logo-text">
                            <div class="logo-title">{{$title}}</div>
                        </div>
                    </div>

                    <nav id="primary-menu" class="primary-menu">
                        <a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
                            <span id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: hidden">
                                <svg width="1000px" height="1000px">
                                    <path id="pathD" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                                    <path id="pathE" d="M 300 500 L 700 500"></path>
                                    <path id="pathF" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                                </svg>
                            </span>
                        </a>
                        <ul class="primary-menu-menu" style="overflow: hidden;">
                           @foreach ($mainmenus as $mainmenu)
                            <li class="">
                                <a href="">{{$mainmenu->name}}</a>
                                   @foreach ($submenus as $submenu)
                                   @if ($submenu->main_menu_id == $mainmenu->id)
                                        <li class="dropdown-item">{{$submenu->name}}</li>
                                    @endif
                                   @endforeach
                            </li>
                           @endforeach
                            
                        </ul>
                    </nav>
                    <ul class="nav-add">
                        <li class="search search_main" style="color: black; margin-top: 5px;">
                            <a href="#" class="js-open-search">
                                <i class="seoicon-loupe"></i>
                            </a>
                        </li>
                    </ul>
                </div>
        </div>
    </header>
