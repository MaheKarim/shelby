<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">{{config('app.name')}}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">DG</a>
        </div>
        <ul class="sidebar-menu">

            <li class="menu-header">Administrator</li>

            <li class="nav-item dropdown {{ (Request::is('domains') || Request::is('domains/*')) ? 'active' : '' }}">
                <a href="{{ route('admin.domains.index') }}" class="nav-link has-dropdown"><i class="fas fa-globe"></i> <span>Domains</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('domians/create') ? 'active' : '' }}">
                        <a class="nav-link" href="#"><i class="fas fa-plus"></i> <span>New</span></a>
                    </li>
                    <li class="{{ Request::is('domians') ? 'active' : '' }}">
                        <a class="nav-link" href="#"><i class="fas fa-list"></i> <span>All</span></a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ (Request::is('users') || Request::is('users/*')) ? 'active' : '' }}">
                <a href="{{ route('admin.users.index') }}" class="nav-link has-dropdown"><i class="fas fa-users"></i> <span>Users</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('users/create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.users.create') }}"><i class="fa fa-plus"></i> <span>New</span></a>
                    </li>
                    <li class="{{ Request::is('users') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.users.index') }}"><i class="fas fa-list"></i> <span>All</span></a>
                    </li>
                </ul>
            </li>

            <li class="nav-item {{ Request::is('contact-msg') ? 'active' : '' }}">
                <a href="{{ route('admin.show') }}" class="nav-link">
                    <i class="fas fa-paper-plane"></i>
                    <span>Contacts</span>
                </a>
            </li>

            <li class="menu-header">Setup</li>

            <li class="nav-item dropdown {{ (Request::is('city') || Request::is('city/*')) ? 'active' : '' }}">
                <a href="{{ route('admin.city.index') }}" class="nav-link has-dropdown"><i class="fas fa-users"></i> <span>City</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('city/create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.city.create') }}"><i class="fa fa-plus"></i> <span>New</span></a>
                    </li>
                    <li class="{{ Request::is('city') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.city.index') }}"><i class="fas fa-list"></i> <span>All</span></a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ (Request::is('areas') || Request::is('areas/*')) ? 'active' : '' }}">
                <a href="{{ route('admin.areas.index') }}" class="nav-link has-dropdown"><i class="fas fa-plus"></i> <span>Areas</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('areas/create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.areas.create') }}"><i class="fa fa-plus"></i> <span>New</span></a>
                    </li>
                    <li class="{{ Request::is('areas') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.areas.index') }}"><i class="fas fa-list"></i> <span>All</span></a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ (Request::is('business-hours') || Request::is('business-hours/*')) ? 'active' : '' }}">
                <a href="{{ route('restaurant-admin.business-hours.index') }}" class="nav-link has-dropdown"><i class="fas fa-hourglass"></i> <span>Business Hours</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('users/create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.users.create') }}"><i class="fa fa-plus"></i> <span>New</span></a>
                    </li>
                    <li class="{{ Request::is('users') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.users.index') }}"><i class="fas fa-list"></i> <span>All</span></a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ (Request::is('setup-restaurants') || Request::is('setup-restaurants/*')) ? 'active' : '' }}">
                <a href="{{ route('restaurant-admin.restaurants.index') }}" class="nav-link has-dropdown"><i class="fas fa-cogs" aria-hidden="true"></i> <span>Restaurants</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('setup-restaurants/create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('restaurant-admin.restaurants.create') }}"><i class="fa fa-plus"></i> <span>New</span></a>
                    </li>
                    <li class="{{ Request::is('setup-restaurants') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('restaurant-admin.restaurants.index') }}"><i class="fas fa-list"></i> <span>All</span></a>
                    </li>
                </ul>
            </li>

            <li class="menu-header">Menu</li>

            <li class="nav-item dropdown {{ (Request::is('cuisines') || Request::is('cuisines/*')) ? 'active' : '' }}">
                <a href="{{ route('restaurant-admin.cuisines.index') }}" class="nav-link has-dropdown"><i class="fas fa-cogs" aria-hidden="true"></i> <span>Cuisines</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('cuisines') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('restaurant-admin.cuisines.create') }}"><i class="fa fa-plus"></i> <span>New</span></a>
                    </li>
                    <li class="{{ Request::is('cuisines') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('restaurant-admin.cuisines.index') }}"><i class="fas fa-list"></i> <span>All</span></a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ (Request::is('/item-addons') || Request::is('item-addons/*')) ? 'active' : '' }}">
                <a href="{{ route('restaurant-admin.addons.index') }}" class="nav-link has-dropdown"><i class="fas fa-hamburger" aria-hidden="true"></i> <span>Addon</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('item-addons') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('restaurant-admin.addons.create') }}"><i class="fa fa-plus"></i> <span>New</span></a>
                    </li>
                    <li class="{{ Request::is('item-addons') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('restaurant-admin.addons.index') }}"><i class="fas fa-list"></i> <span>All</span></a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ (Request::is('/menus') || Request::is('menus/*')) ? 'active' : '' }}">
                <a href="{{ route('restaurant-admin.menus.index') }}" class="nav-link has-dropdown"><i class="fas fa-lemon" aria-hidden="true"></i> <span>Menus</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('item-addons') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('restaurant-admin.menus.create') }}"><i class="fa fa-plus"></i> <span>New</span></a>
                    </li>
                    <li class="{{ Request::is('item-addons') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('restaurant-admin.menus.index') }}"><i class="fas fa-list"></i> <span>All</span></a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ (Request::is('/items') || Request::is('items/*')) ? 'active' : '' }}">
                <a href="{{ route('restaurant-admin.items.index') }}" class="nav-link has-dropdown"><i class="fas fa-blender" aria-hidden="true"></i> <span>Items</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('item-addons') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('restaurant-admin.items.create') }}"><i class="fa fa-plus"></i> <span>New</span></a>
                    </li>
                    <li class="{{ Request::is('item-addons') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('restaurant-admin.items.index') }}"><i class="fas fa-list"></i> <span>All</span></a>
                    </li>
                </ul>
            </li>

            <li class="menu-header">Order</li>

            <li class="nav-item dropdown {{ (Request::is('/customers') || Request::is('customers/*')) ? 'active' : '' }}">
                <a href="{{ route('restaurant-admin.customers.index') }}" class="nav-link has-dropdown"><i class="fas fa-pizza-slice" aria-hidden="true"></i> <span>Customers</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('item-addons') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('restaurant-admin.customers.create') }}"><i class="fa fa-plus"></i> <span>New</span></a>
                    </li>
                    <li class="{{ Request::is('item-addons') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('restaurant-admin.customers.index') }}"><i class="fas fa-list"></i> <span>All</span></a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ (Request::is('/orders') || Request::is('orders/*')) ? 'active' : '' }}">
                <a href="{{ route('restaurant-admin.orders.index') }}" class="nav-link has-dropdown"><i class="fas fa-flask" aria-hidden="true"></i> <span>Orders</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('orders') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('restaurant-admin.orders.create') }}"><i class="fa fa-plus"></i> <span>New</span></a>
                    </li>
                    <li class="{{ Request::is('orders') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('restaurant-admin.orders.index') }}"><i class="fas fa-list"></i> <span>All</span></a>
                    </li>
                </ul>
            </li>





        </ul>
    </aside>
</div>
