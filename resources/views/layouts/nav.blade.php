     <!-- ========== App Menu ========== -->
     <div class="app-menu navbar-menu">
         <!-- LOGO -->
         <div class="navbar-brand-box">
             <!-- Dark Logo-->
             <a href="/admin" class="logo logo-dark">
                 <span class="logo-sm">
                     <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                 </span>
                 <span class="logo-lg">
                     <img src="{{ asset('assets/images/suluck.png') }}" alt="" height="17">
                 </span>
             </a>
             <!-- Light Logo-->
             <a href="/admin" class="logo logo-light">
                 <span class="logo-sm">
                     <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                 </span>
                 <span class="logo-lg">
                     <img src="{{ asset('assets/images/suluck.png') }}" alt="" height="36">
                 </span>
             </a>
             <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                 id="vertical-hover">
                 <i class="ri-record-circle-line"></i>
             </button>
         </div>

         <div id="scrollbar">
             <div class="container-fluid">

                 <div id="two-column-menu">
                 </div>
                 <ul class="navbar-nav" id="navbar-nav">
                     <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                     <li class="nav-item">
                         <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button"
                             aria-expanded="false" aria-controls="sidebarLayouts">
                             <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Layouts</span>
                         </a>
                         <div class="collapse menu-dropdown" id="sidebarLayouts">
                             <ul class="nav nav-sm flex-column">
                                 <li class="nav-item">
                                     <a href="{{ url('admin/states') }}" class="nav-link"
                                         data-key="t-horizontal">Test</a>
                                 </li>
                                 {{-- <li class="nav-item">
                                     <a href="{{ url('admin/city') }}" class="nav-link"
                                         data-key="t-horizontal">Cities</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('admin/township') }}" class="nav-link"
                                         data-key="t-horizontal">Township</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('admin/branch') }}" class="nav-link" data-key="t-cover"> Branch
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('admin/bank') }}" class="nav-link" data-key="t-cover"> Bank
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('admin/area') }}" class="nav-link" data-key="t-horizontal">Area</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('admin/area_assign') }}" class="nav-link"
                                         data-key="t-horizontal">Area Assign</a>
                                 </li>


                                 <li class="nav-item">
                                     <a href="{{ url('admin/currency') }}" class="nav-link"
                                         data-key="t-horizontal">Currency</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('admin/cashback_plan') }}" class="nav-link"
                                         data-key="t-horizontal">Cash Back Plan </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('admin/banner-image') }}" class="nav-link"
                                         data-key="t-horizontal">Banner Image</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('admin/weight') }}" class="nav-link"
                                         data-key="t-checkboxs-radios"> Weight</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('admin/third-party-agent') }}" class="nav-link"
                                         data-key="t-checkboxs-radios"> Third Party Agent </a>
                                 </li> --}}
                             </ul>
                         </div>
                     </li> <!-- end Dashboard Menu -->

                     {{-- <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>


                     <li class="nav-item">
                         <a class="nav-link menu-link" href="#sidebarCharts" data-bs-toggle="collapse" role="button"
                             aria-expanded="false" aria-controls="sidebarForms">
                             <i class="ri-account-circle-line"></i> <span data-key="t-forms">User</span>
                         </a>
                         <div class="collapse menu-dropdown" id="sidebarCharts">
                             <ul class="nav nav-sm flex-column">
                                 <li class="nav-item">
                                     <a href="{{ url('admin/user') }}" class="nav-link"
                                         data-key="t-horizontal">User</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('admin/user_has_credit') }}" class="nav-link"
                                         data-key="t-horizontal">User Has Credit</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('admin/user_request_credit') }}" class="nav-link"
                                         data-key="t-horizontal">User Request Credit</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('admin/user_has_member_type') }}" class="nav-link"
                                         data-key="t-horizontal">User Has Member Type</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('admin/user_has_tree') }}" class="nav-link"
                                         data-key="t-horizontal">User Has Tree </a>
                                 </li>


                             </ul>
                         </div>
                     </li>

                     <li class="nav-item">
                         <a class="nav-link menu-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button"
                             aria-expanded="false" aria-controls="sidebarIcons">
                             <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Rider</span>
                         </a>
                         <div class="collapse menu-dropdown" id="sidebarIcons">
                             <ul class="nav nav-sm flex-column">
                                 <li class="nav-item">
                                     <a href="{{ url('admin/rider') }}" class="nav-link" data-key="t-cover"> Rider
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('admin/rider_attendance') }}" class="nav-link"
                                         data-key="t-cover"> Rider Attendance
                                     </a>
                                 </li>
                             </ul>

                         </div>
                     </li>

                     <li class="nav-item">
                         <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse" role="button"
                             aria-expanded="false" aria-controls="sidebarForms">
                             <i class=" ri-shopping-cart-2-line"></i> <span data-key="t-forms">Order</span>
                         </a>
                         <div class="collapse menu-dropdown" id="sidebarForms">
                             <ul class="nav nav-sm flex-column">
                                 <li class="nav-item">
                                     <a href="{{ url('admin/pick-up') }}" class="nav-link"
                                         data-key="t-basic-elements">Pick Up</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('admin/item-to-sort') }}" class="nav-link"
                                         data-key="t-basic-elements">Pick Up Detail Log</a>
                                 </li>

                                 <li class="nav-item">
                                     <a href="{{ url('admin/cod-evidence') }}" class="nav-link"
                                         data-key="t-basic-elements">Cod Evidence</a>
                                 </li>

                                 <li class="nav-item">
                                     <a href="{{ url('admin/delivery-items') }}" class="nav-link"
                                         data-key="t-basic-elements">Delivery Items</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="{{ url('admin/tracking-history') }}" class="nav-link"
                                        data-key="t-basic-elements">Tracking History</a>
                                </li>
                             </ul>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link menu-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button"
                             aria-expanded="false" aria-controls="sidebarMaps">
                             <i class="ri-truck-line"></i> <span data-key="t-maps">Packing Item Type</span>
                         </a>
                         <div class="collapse menu-dropdown" id="sidebarMaps">
                             <ul class="nav nav-sm flex-column">
                                 <li class="nav-item">
                                     <a href="{{ url('admin/delivery_type') }}" class="nav-link"
                                         data-key="t-pickers"> Delivery Type </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('admin/item_type') }}" class="nav-link"
                                         data-key="t-form-select"> Item Type </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('admin/payment_type') }}" class="nav-link"
                                         data-key="t-basic-elements">Receiver's Payment Type</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('admin/su-luck-payment-type') }}" class="nav-link"
                                         data-key="t-basic-elements">Su Luck's Payment Type</a>
                                 </li>


                             </ul>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse"
                             role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                             <i class="ri-shopping-cart-2-line"></i> <span data-key="t-maps">Quick Order</span>
                         </a>
                         <div class="collapse menu-dropdown" id="sidebarMultilevel">
                             <ul class="nav nav-sm flex-column">
                                 <li class="nav-item">
                                     <a href="{{ url('admin/delivery') }}" class="nav-link"
                                         data-key="t-basic-elements">Delivery</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('admin/quick_order') }}" class="nav-link"
                                         data-key="t-basic-elements">Quick Order</a>

                             </ul>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link menu-link" href="#sidebarTables" data-bs-toggle="collapse"
                             role="button" aria-expanded="false" aria-controls="sidebarForms">
                             <i class="ri-file-list-3-line"></i> <span data-key="t-forms">Marketing</span>
                         </a>
                         <div class="collapse menu-dropdown" id="sidebarTables">
                             <ul class="nav nav-sm flex-column">
                                 <li class="nav-item">
                                     <a href="{{ url('admin/advertisments') }}" class="nav-link"
                                         data-key="t-horizontal">Advertisement</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('admin/quote') }}" class="nav-link" data-key="t-basic"> Quote
                                     </a>
                                 </li>

                             </ul>
                         </div>
                     </li>

                     <li class="nav-item">
                         <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                             aria-expanded="false" aria-controls="sidebarForms">
                             <i class="ri-file-list-3-line"></i> <span data-key="t-forms">Shop</span>
                         </a>
                         <div class="collapse menu-dropdown" id="sidebarPages">
                             <ul class="nav nav-sm flex-column">
                                 <li class="nav-item">
                                     <a href="{{ url('admin/Category') }}" class="nav-link"
                                         data-key="t-basic-elements">Category</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('admin/sub_Category') }}" class="nav-link"
                                         data-key="t-form-select"> Sub Category </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('admin/item') }}" class="nav-link"
                                         data-key="t-checkboxs-radios"> Item</a>
                                 </li>
                             </ul>
                         </div>
                     </li> --}}
                 </ul>
             </div>
             <!-- Sidebar -->
         </div>

         <div class="sidebar-background"></div>
     </div>
     <!-- Left Sidebar End -->
     <!-- Vertical Overlay-->
     <div class="vertical-overlay"></div>
     <!-- ============================================================== -->
