<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
            <a href="{{route('admin.main.index')}}" class="brand-link nav-item">
                <i class="fas fa-home mx-2"></i>
                <span class="brand-text font-weight-light">Some blog</span>
            </a>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>
                            {{ __('Users') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.posts.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-icons"></i>
                        <p>
                            {{ __('Posts') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.categories.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-filter"></i>
                        <p>
                            {{ __('Categories') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.tags.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>
                            {{ __('Tags') }}
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>
