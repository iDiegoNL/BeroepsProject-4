<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="https://api.adorable.io/avatars/36/{{ Auth::user()->username }}.png" class="img-circle"
                     alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->username }}</p>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{ route('admin.home') }}">
                    <i class="fa fa-home"></i> <span>Home</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <span>Events</span>
                    <span class="pull-right-container">
              <i class="fas fa-angle-left"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.events.index') }}"> View all events</a></li>
                    <li><a href="{{ route('admin.events.add') }}"> Add Event</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('admin.reservations') }}">
                    <i class="fa fa-calendar"></i> <span>Reservations</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.users') }}">
                    <i class="fa fa-users"></i> <span>Users</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
