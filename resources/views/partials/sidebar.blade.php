<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">{{config('app.name')}}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">Shelby</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dream Shelby</li>

            <li class="active">
                <a href="{{ route('incomes.index') }}"><i class="fas fa-fire"></i><span>Income</span></a>
            </li>
            <li class="active">
                <a href="{{ route('expenses.index') }}"><i class="fas fa-lemon"></i><span>Expense</span></a>
            </li>
            <li class="active">
                <a href="{{ route('items.index') }}"><i class="fas fa-code"></i><span>Items</span></a>
            </li>
        </ul>
    </aside>
</div>
