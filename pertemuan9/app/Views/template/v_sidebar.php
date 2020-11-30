<nav id="sidebar">
            <div class="sidebar-header">
                <h3>Admin</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="<?= base_url(); ?>">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Master</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="<?= base_url('admin/users'); ?>">List User</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/users/create'); ?>">Create User</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </nav>