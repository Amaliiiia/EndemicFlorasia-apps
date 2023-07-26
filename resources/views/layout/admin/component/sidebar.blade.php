 <div class="sidebar" data-color="blue">
     <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
     <div class="logo">
         <a href="http://www.creative-tim.com" class="simple-text logo-mini">
             EF
         </a>
         <a href="http://www.creative-tim.com" class="simple-text logo-normal">
             Endemic Florasia
         </a>
     </div>
     <div class="sidebar-wrapper" id="sidebar-wrapper">
         <ul class="nav">
             <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                 <a href="{{ url('dashboard') }}">
                     <i class="now-ui-icons design_app"></i>
                     <p>Dashboard</p>
                 </a>
             </li>
             <li class="{{ Request::is('tanaman*') ? 'active' : '' }}">
                 <a href="{{ url('tanaman') }}">
                     <i class="now-ui-icons design_bullet-list-67"></i>
                     <p>List Tanaman</p>
                 </a>
             </li>
             <li class="{{ Request::is('habitat*') ? 'active' : '' }}">
                 <a href="{{ url('habitat') }}">
                     <i class="now-ui-icons design_bullet-list-67"></i>
                     <p>List Habitat</p>
                     <!-- <a href="./icons.html">
                     <i class="now-ui-icons education_atom"></i>
                     <p>Icons</p> -->
                 </a>
             </li>
             <li class="{{ Request::is('keanekaragaman*') ? 'active' : '' }}">
                 <a href="{{ url('keanekaragaman') }}">
                     <i class="now-ui-icons design_bullet-list-67"></i>
                     <p>List Keanekaragaman</p>
                     <!-- <a href="./icons.html">
                     <i class="now-ui-icons education_atom"></i>
                     <p>Icons</p> -->
                 </a>
             </li>
             <li class="{{ Request::is('ancaman*') ? 'active' : '' }}">
                 <a href="{{ url('ancaman') }}">
                     <i class="now-ui-icons design_bullet-list-67"></i>
                     <p>List Ancaman</p>
                     <!-- <a href="./icons.html">
                     <i class="now-ui-icons education_atom"></i>
                     <p>Icons</p> -->
                 </a>
             </li>
             <li class="{{ Request::is('register*') ? 'active' : '' }}">
                 <a href="{{ url('register') }}">
                     <i class="now-ui-icons users_single-02"></i>
                     <p>Daftar Admin
                     </p>
                     <!-- <a href="./icons.html">
                     <i class="now-ui-icons education_atom"></i>
                     <p>Icons</p> -->
                 </a>
             </li>
             <!-- {{-- <li>
                 <a href="./map.html">
                     <i class="now-ui-icons location_map-big"></i>
                     <p>Maps</p>
                 </a>
             </li>
             <li>
                 <a href="./notifications.html">
                     <i class="now-ui-icons ui-1_bell-53"></i>
                     <p>Notifications</p>
                 </a>
             </li>
             <li>
                 <a href="./user.html">
                     <i class="now-ui-icons users_single-02"></i>
                     <p>User Profile</p>
                 </a>
             </li>
             <li>
                 <a href="./tables.html">
                     <i class="now-ui-icons design_bullet-list-67"></i>
                     <p>Table List</p>
                 </a>
             </li>
             <li>
                 <a href="./typography.html">
                     <i class="now-ui-icons text_caps-small"></i>
                     <p>Typography</p>
                 </a>
             </li>
             <li class="active-pro">
                 <a href="./upgrade.html">
                     <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                     <p>Upgrade to PRO</p>
                 </a>
             </li> --}} -->
             </a>
             </li>
             </li>
         </ul>
     </div>
 </div>
