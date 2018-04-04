<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header text-center">MAIN NAVIGATION</li>
            <!-- Product Menu -->
            <li class="treeview active">
                <a href="#">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    <span>Products</span>
                    <span class="pull-right-container">
                        <span class="fa fa-angle-left pull-right"></span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('product.create') }}"><i class="fa fa-plus-square" aria-hidden="true"></i> Create</a></li>
                    <li><a href="{{ route('product.index') }}"><i class="fa fa-th-list" aria-hidden="true"></i> All</a></li>
                </ul>
            </li>
            <!-- Bulk order -->
            <li class="">
                <a href="{{ route('orders') }}">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i> <span>Orders</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">1</small>
                    </span>
                </a>
            </li>
            <!-- Bulk order -->
            <li class="">
                <a href="{{ route('bulkOrderData') }}">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i> <span>Bulk order inquiry</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">1</small>
                    </span>
                </a>
            </li>
            <!-- contact us order -->
            <li class="">
                <a href="{{ route('contactUsData') }}">
                    <i class="fa fa-envelope"></i> <span>Contact us inquiry</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">1</small>
                    </span>
                </a>
            </li>
        </ul>
    </section>
</aside>