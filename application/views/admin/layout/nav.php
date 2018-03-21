<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo base_url(); ?>admin/artikel">GenPi Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
    aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="<?php echo base_url(); ?>"><i class="fa fa-laptop"></i> Visit Homepage
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>admin/artikel">
                    <i class="fa fa-pencil-square-o"></i> Post
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="DropdownPost" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                    <i class="fa fa-wrench"></i> Setting
                </a>
                <div class="dropdown-menu" aria-labelledby="DropdownPost">
                    <a class="dropdown-item" href="<?php echo base_url(); ?>admin/artikel">Homepage</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>admin/kategori">Social Media</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>admin/user">
                    <i class="fa fa-users"></i> Users
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>auth/logout"><i class="fa fa-power-off"></i> Log Out</a>
            </li>
        </ul>
    </div>
</nav>
