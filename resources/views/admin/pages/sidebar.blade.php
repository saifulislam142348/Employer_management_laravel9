<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Employer Admin Panel <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.index')}}">
            <i class="las la-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
       Employee Interface(user)
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="las la-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <h5 class="collapse-header">Employees Components:</h5>
               
                <a class="collapse-item " href="{{route('admin.registration')}}"> Registration</a>
                 <a class="collapse-item" href="{{route('admin.employee')}}"> Employees</a>
                 <a class="collapse-item" href="{{route('admin.bonus')}}">Bonus</a>
                 <a class="collapse-item" href="{{route('admin.salaryPrepared')}}">Salary Prepared</a>
                 <a class="collapse-item" href="{{route('admin.attendence')}}">Attendences</a>
                 <a class="collapse-item" href="{{route('admin.leave')}}">leaves</a>
                
              
              
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="las la-wrench"></i>
            <span>Setting</span>
            
        </a>
        
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">

            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Employees Setting</h6>
               
                    <a class="collapse-item " href="{{route('admin.department')}}">Department </a>
                  <a class="collapse-item" href="{{route('admin.designation')}}">Designation</a>
                  <a class="collapse-item" href="{{route('admin.department.designation')}}">Department & Designation</a>
                <a class="collapse-item" href="{{route('admin.month')}}">Monthes</a>
                <a class="collapse-item" href="#">Employees ForgetPassword</a>
                
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
       Emmployer interface(admin)
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="lar la-folder-open"></i>
            <span>Reports</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Employee Reports</h6>
                <a class="collapse-item" href="">Department Reports</a>
                <a class="collapse-item" href=""> Designation Reports</a>
                <a class="collapse-item" href=""> Attemdences Reports</a>
                <a class="collapse-item" href=""> Bonuses Reports</a>
                <a class="collapse-item" href=""> Leaves Reports</a>
                
           
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="las la-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
   
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
       
        <button class="rounded-circle las la-angle-double-left" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
   
</ul>