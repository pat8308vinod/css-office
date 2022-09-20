 <!-- partial -->
 <div class="container-fluid page-body-wrapper">
     <!-- partial:partials/_sidebar.html -->
     <nav class="sidebar sidebar-offcanvas" id="sidebar">
         <ul class="nav">
        
             <li class="nav-item">
                 <a class="nav-link" href="{{route('Dashboard')}}">
                     <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                     <span class="menu-title">Dashboard</span>
                 </a>
             </li>
             {{-- <li class="nav-item">
                 <a class="nav-link" href="">
                     <span class="icon-bg"><i class="mdi mdi-blogger menu-icon"></i></span>
                     <span class="menu-title">Blog</span>
                 </a>
             </li> --}}
             <li class="nav-item">
                 <a class="nav-link" href="{{ route('Contacts') }}">
                     <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
                     <span class="menu-title">Contact</span>
                 </a>
             </li>
         </ul>
     </nav>