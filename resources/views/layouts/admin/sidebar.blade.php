<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition"><div class="os-resize-observer-host"><div class="os-resize-observer observed" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer observed"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 900px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;"><div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('/admin-assets/image/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{route('admin.home')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.customer.index')}}" class="nav-link">
              <i class="fas fa-users nav-icon"></i>
              <p>Customers</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Menu
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.category.index')}}" class="nav-link">
                  <i class="fas fa-certificate nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.order.index')}}" class="nav-link">
              <i class="fab fa-first-order nav-icon"></i>
              <p>Orders</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.offer.index')}}" class="nav-link">
              <i class="fas fa-dice-three nav-icon"></i>
              <p>Offers</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.branch.index')}}" class="nav-link">
              <i class="fas fa-code-branch nav-icon"></i>
              <p>Branch</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-chart-bar nav-icon"></i>
              <p>
                Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.report.customer')}}" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Customers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.report.order')}}" class="nav-link">
                  <i class="fas fa-certificate nav-icon"></i>
                  <p>Orders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.report.item')}}" class="nav-link">
                  <i class="fab fa-first-order nav-icon"></i>
                  <p>Items</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.report.extra')}}" class="nav-link">
                  <i class="fas fa-dice-three nav-icon"></i>
                  <p>Extra</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.report.order-status')}}" class="nav-link">
                  <i class="fas fa-dice-three nav-icon"></i>
                  <p>Order Status</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.report.order-customer')}}" class="nav-link">
                  <i class="fas fa-dice-three nav-icon"></i>
                  <p>Order / Customer</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>
                Setting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.user.index')}}" class="nav-link">
                  <i class="fas fa-user-shield nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.role.index')}}" class="nav-link">
                  <i class="fas fa-key nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
  </div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="height: 27.2655%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar-corner"></div></div>
</aside>