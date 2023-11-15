<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
            <a href="{{route('personal.main.index')}}" class="brand-link nav-item">
                <i class="fas fa-home mx-2"></i>
                <span class="brand-text font-weight-light">Some blog</span>
            </a>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('personal.liked.index')}}" class="nav-link">
                        <i class="nav-icon far fa-heart"></i>
                        <p>
                            {{ __('Liked Posts') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('personal.comment.index')}}" class="nav-link">
                        <i class="nav-icon far fa-comment"></i>
                        <p>
                            {{ __('Comments') }}
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>
