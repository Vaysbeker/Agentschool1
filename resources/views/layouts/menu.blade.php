<!-- need to remove -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Агентства
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('new-agency') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Добавить агентство</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('agency') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Список агентств</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                    Курсы
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="../forms/general.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Коучинг агентов с 0 до результата</p>
                    </a>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('lesson1') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Урок №1</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('agency') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Список агентств</p>
                        </a>
                    </li>
                </ul>
                </li>
                <li class="nav-item">
                    <a href="../forms/advanced.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Advanced Elements</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../forms/editors.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Editors</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../forms/validation.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Validation</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                    Колцентр
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="../forms/general.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Коучинг агентов с 0 до результата</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../forms/advanced.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Advanced Elements</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../forms/editors.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Editors</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../forms/validation.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Validation</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                    Отчеты
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="../forms/general.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Коучинг агентов с 0 до результата</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../forms/advanced.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Advanced Elements</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../forms/editors.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Editors</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../forms/validation.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Validation</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                    Настройки
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="../forms/general.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Общие</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../forms/advanced.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Справочники</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Пользователи
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview" style="display: none;">
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li><a class="nav-link" href="{{ route('users.index') }}">{{trans('admin.Users Management')}}</a></li>
                            <li><a class="nav-link" href="{{ route('roles.index') }}">Роли</a></li>
                            <li><a class="nav-link" href="{{ route('products.index') }}">Товары</a></li>
                        @endguest

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="../forms/validation.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Переводы</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
