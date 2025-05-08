<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <?php if($_SESSION['sys_user']['position'] == 'manager'){ ?>
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php address($page) ?>index.php?title=SB Admin 2 - Dashboard">
        <div class="sidebar-brand-text mx-3"> Restaurant</div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php style($page, 'index') ?>">
        <a class="nav-link" href="<?php address($page) ?>index.php?title=SB Admin 2 - Dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>


    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHandling" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Handling</span>
        </a>
        <div id="collapseHandling" class="collapse <?php style_show($page,'login'); style_show($page,'register'); style_show($page,'forget'); style_show($page,'404'); style_show($page,'blank'); ?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                
                <h6 class="collapse-header">Users:</h6>
                <a class="collapse-item <?php style($page,'login') ?>" href="<?php address($page) ?>login.php?title=SB Admin 2 - Login">Login</a>
                <a class="collapse-item <?php style($page,'register') ?>" href="<?php address($page) ?>register.php?title=SB Admin 2 - Register">Register Users</a>
                <a class="collapse-item <?php style($page,'register') ?>" href="<?php address($page) ?>tables.php?title=SB Admin 2 - Tables">Users Table</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Workers:</h6>
                <a class="collapse-item <?php style($page,'register') ?>" href="<?php address($page) ?>registeremployee.php?title=SB Admin 2 - Register Employee">Register Workers</a>
                <a class="collapse-item <?php style($page,'register') ?>" href="<?php address($page) ?>workerstable.php?title=SB Admin 2 - Register Employee">Workers Table</a>
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item  <?php style($page, 'create') ?>" href="<?php address($page) ?>menu/create.php?title=SB Admin 2 - Create Menu">Create Menu Items</a>
                <a class="collapse-item <?php style($page,'create') ?>" href="<?php address($page) ?>menu/menutable.php?title=SB Admin 2 - Menu Table">Menu Table</a>


            </div>
        </div>
    </li>
<?php } ?>

        <!-- Nav Item - Tables -->
    <li class="nav-item <?php style($page, 'order') ?>">
        <a class="nav-link" href="<?php address($page) ?>../backend/orders/order.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Order</span></a>
    </li>
    <li class="nav-item <?php style($page, 'order') ?>">
        <a class="nav-link" href="<?php address($page) ?>../backend/orders/orderstable.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Orders Table</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>