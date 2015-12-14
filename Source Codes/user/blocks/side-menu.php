<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li>
            <a href="../../dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>

        <li>
            <?php if ($user_role == 'Manager'): ?>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#shops_for_manager"><i class="fa fa-shopping-bag"></i> Shop <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="shops_for_manager" class="collapse">
                    <li>
                        <a href="my-shop.php"><i class="fa fa-fw fa-code-fork"></i> My Shop</a>
                    </li>

                    <li>
                        <a href="add-new-shop.php"><i class="fa fa-fw fa-plus"></i> New Shop</a>
                    </li>
                </ul>
            <?php elseif ($user_role == 'No Role'): ?>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#shops_for_no_role"><i class="fa fa-shopping-bag"></i> Shop <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="shops_for_no_role" class="collapse">
                    <li>
                        <a href="add-new-shop.php"><i class="fa fa-fw fa-plus"></i> New Shop</a>
                    </li>
                </ul>
            <?php else: ?>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#shops_for_staff"><i class="fa fa-shopping-bag"></i> Shop <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="shops_for_staff" class="collapse">
                    <li>
                        <a href="my-shop.php"><i class="fa fa-fw fa-code-fork"></i> My Shop</a>
                    </li>
                </ul>
            <?php endif; ?>
        </li>
    </ul>
</div>
<!-- /.navbar-collapse -->