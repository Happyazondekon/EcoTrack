<aside id="sidebar-left" class="sidebar-left">
    <div class="sidebar-header">
        <div class="sidebar-title">
            Navigation
        </div>
        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html"
            data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>
    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li>
                        <a class="nav-link" href="{{ route('admin') }}">
                            <i class="bx bx-home-alt" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li
                        class="nav-parent {{ Request::routeIs(['departements.*', 'roles.*', 'communes.*', 'arrondissements.*', 'articles.*']) ? 'nav-active' : '' }}">
                        <a href="#" class="nav-link ">
                            <i class="bx bx-file" aria-hidden="true"></i>
                            <span>Créations</span>
                        </a>

                        <ul class="nav nav-children">
                            <li>
                                <a href="{{ route('departements.index') }}"
                                    class="nav-link {{ Request::routeIs('departements.*') ? 'nav-active' : '' }}">
                                    Departements
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('communes.index') }}"
                                    class="nav-link {{ Request::routeIs('communes.*') ? 'nav-active' : '' }}">
                                    Communes
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('arrondissements.index') }}"
                                    class="nav-link {{ Request::routeIs('arrondissements.*') ? 'nav-active' : '' }}">
                                    Arrondissements
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('articles.index') }}"
                                    class="nav-link {{ Request::routeIs('articles.*') ? 'nav-active' : '' }}">
                                    Articles
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('roles.index') }}"
                                    class="nav-link {{ Request::routeIs('roles.*') ? 'nav-active' : '' }}">
                                    Rôles
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link" href="mailbox-folder.html">
                            <span class="float-end badge badge-primary">182</span>
                            <i class="bx bx-envelope" aria-hidden="true"></i>
                            <span>Mailbox</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="extra-ajax-made-easy.html">
                            <i class="bx bx-loader-circle" aria-hidden="true"></i>
                            <span>Ajax</span>
                        </a>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="bx bx-detail" aria-hidden="true"></i>
                            <span>Forms</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="forms-basic.html">
                                    Basic
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="forms-advanced.html">
                                    Advanced
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="forms-validation.html">
                                    Validation
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="forms-layouts.html">
                                    Layouts
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="bx bx-table" aria-hidden="true"></i>
                            <span>Tables</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="tables-basic.html">
                                    Basic
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="tables-advanced.html">
                                    Advanced
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="tables-responsive.html">
                                    Responsive
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="tables-editable.html">
                                    Editable
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="tables-ajax.html">
                                    Ajax
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="tables-pricing.html">
                                    Pricing
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="bx bx-collection" aria-hidden="true"></i>
                            <span>Menu Levels</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a>
                                    First Level
                                </a>
                            </li>
                            <li class="nav-parent">
                                <a class="nav-link" href="#">
                                    Second Level
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a>
                                            Second Level Link #1
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            Second Level Link #2
                                        </a>
                                    </li>
                                    <li class="nav-parent">
                                        <a class="nav-link" href="#">
                                            Third Level
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a>
                                                    Third Level Link #1
                                                </a>
                                            </li>
                                            <li>
                                                <a>
                                                    Third Level Link #2
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <hr class="separator" />
            <div class="sidebar-widget widget-tasks">
                <div class="widget-header">
                    <h6>Projects</h6>
                    <div class="widget-toggle">+</div>
                </div>
                <div class="widget-content">
                    <ul class="list-unstyled m-0">
                        <li><a href="#">Porto HTML5 Template</a></li>
                        <li><a href="#">Tucson Template</a></li>
                        <li><a href="#">Porto Admin</a></li>
                    </ul>
                </div>
            </div>
            <hr class="separator" />
            <div class="sidebar-widget widget-stats">
                <div class="widget-header">
                    <h6>Company Stats</h6>
                    <div class="widget-toggle">+</div>
                </div>
                <div class="widget-content">
                    <ul>
                        <li>
                            <span class="stats-title">Stat 1</span>
                            <span class="stats-complete">85%</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary progress-without-number"
                                    role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 85%;">
                                    <span class="sr-only">85% Complete</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="stats-title">Stat 2</span>
                            <span class="stats-complete">70%</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary progress-without-number"
                                    role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 70%;">
                                    <span class="sr-only">70% Complete</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="stats-title">Stat 3</span>
                            <span class="stats-complete">2%</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary progress-without-number"
                                    role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 2%;">
                                    <span class="sr-only">2% Complete</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <script>
            // Maintain Scroll Position
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');
                    sidebarLeft.scrollTop = initialPosition;
                }
            }
        </script>
    </div>
</aside>
