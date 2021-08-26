<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="{{ route('admin.category.index') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Category<span class="fa arrow"></span></a>

                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{ route('admin.project.index') }}"><i class="fa fa-cube fa-fw"></i> Project<span class="fa arrow"></span></a>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{ route('admin.report.index') }}"><i class="fa fa-cube fa-fw"></i> Report<span class="fa arrow"></span></a>

                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{ route('admin.task.index') }}"><i class="fa fa-cube fa-fw"></i> Task<span class="fa arrow"></span></a>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{ route('admin.user.index') }}"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>


