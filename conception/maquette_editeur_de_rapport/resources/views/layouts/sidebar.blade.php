<style>
    .sidebar-mini.sidebar-collapse .main-sidebar:hover, .sidebar-mini.sidebar-collapse .main-sidebar.sidebar-focused {
    
    width: 4.6rem !important;
    
  }
  .main-sidebar:hover p {
        display: none !important;
    }
</style>

<aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed">
 

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>

</aside>