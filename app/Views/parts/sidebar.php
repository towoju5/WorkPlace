<!-- Side Nav START -->
<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable mt-4">

            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="<?=base_url('admin/index')?>">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="<?=base_url('admin/e-card')?>">
                    <span class="icon-holder">
                        <i class="anticon anticon-idcard"></i>
                    </span>
                    <span class="title">Generate Card</span>
                </a>
            </li>
            
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="<?=base_url('admin/subjects')?>">
                    <span class="icon-holder">
                        <i class="anticon anticon-ordered-list"></i>
                    </span>
                    <span class="title">Manage Subject</span>
                </a>
            </li>
            
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="<?=base_url('admin/employee')?>">
                    <span class="icon-holder">
                        <i class="fas fa-user"></i>
                    </span>
                    <span class="title">Manage Staffs</span>
                </a>
            </li>
            
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="<?=base_url('admin/class')?>">
                    <span class="icon-holder">
                        <i class="fas fa-user-edit"></i>
                    </span>
                    <span class="title">Manage Classes</span>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fas fa-user-graduate"></i>
                    </span>
                    <span class="title">Manage Results</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?=base_url('admin/results')?>"><i class="anticon anticon-right mr-2"></i> View All </a>
                    </li>
                    <li>
                        <a href="<?=base_url('admin/upload_results')?>"><i class="anticon anticon-right mr-2"></i> Add New </a>
                    </li>
                </ul>
            </li>
            
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="<?=base_url('admin/settings')?>">
                    <span class="icon-holder">
                        <i class="anticon anticon-setting"></i>
                    </span>
                    <span class="title">Website Settings</span>
                </a>
            </li>
            
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="<?=base_url('logout')?>">
                    <span class="icon-holder">
                    <i class="anticon anticon-logout"></i>
                    </span>
                    <span class="title">Logout</span>
                </a>
            </li>

        </ul>
    </div>
</div>
<!-- Side Nav END -->
