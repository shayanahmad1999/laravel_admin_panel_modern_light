<!--  BEGIN TOPBAR  -->
<div class="topbar-nav header navbar" role="banner">
    <nav id="topbar">
        <ul class="navbar-nav theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a href="index.html">
                    <img src="assets/img/90x90.jpg" class="navbar-logo" alt="logo">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="index.html" class="nav-link"> CORK </a>
            </li>
        </ul>

        <ul class="list-unstyled menu-categories" id="topAccordion">

            <li class="menu single-menu active">
                <a href="{{route('admin.dashboard')}}">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>
            
            <li class="menu single-menu">
                <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                        <span>Components</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="components" data-parent="#topAccordion">
                    <li>
                        <a href="{{route('admin.modal')}}"> Modals </a>
                    </li>                            
                    <li>
                        <a href="{{route('admin.card')}}"> Cards </a>
                    </li>
                    <li>
                        <a href="{{route('admin.carousal')}}">Carousel</a>
                    </li>
                    <li>
                        <a href="{{route('admin.sweetAlert')}}"> Sweet Alerts </a>
                    </li>
                    <li>
                        <a href="{{route('admin.notification')}}"> Notification </a>
                    </li>
                    <li>
                        <a href="{{route('admin.pricingTable')}}"> Pricing Table </a>
                    </li>
                </ul>
            </li>

            <li class="menu single-menu">
                <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                        <span>Tables</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="tables"  data-parent="#topAccordion">
                    <li>
                        <a href="{{route('admin.basicTable')}}"> Basic </a>
                    </li>
                    <li class="sub-sub-submenu-list">
                        <a href="#datatable" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> DataTables <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="datatable" data-parent="#datatable">
                            <li>
                                <a href="{{route('admin.basicDataTable')}}"> Basic </a>
                            </li>
                            <li>
                                <a href="{{route('admin.customDataTable')}}"> Custom </a>
                            </li>
                            <li>
                                <a href="{{route('admin.rangeSearchDataTable')}}"> Range Search </a>
                            </li>
                            <li>
                                <a href="{{route('admin.html5ExportDataTable')}}"> HTML5 Export </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="menu single-menu">
                <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                        <span>Forms</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="forms"  data-parent="#topAccordion">
                    <li>
                        <a href="{{route('admin.basicForm')}}"> Basic </a>
                    </li>
                    <li>
                        <a href="{{route('admin.inputGroup')}}"> Input Group </a>
                    </li>
                    <li>
                        <a href="{{route('admin.layouts')}}"> Layouts </a>
                    </li>
                    <li>
                        <a href="{{route('admin.validation')}}"> Validation </a>
                    </li>
                    <li>
                        <a href="{{route('admin.inputMask')}}"> Input Mask </a>
                    </li>
                    <li>
                        <a href="{{route('admin.select2')}}"> Select2 </a>
                    </li>
                    <li>
                        <a href="{{route('admin.switches')}}"> Switches </a>
                    </li>
                    <li>
                        <a href="{{route('admin.wizards')}}"> Wizards </a>
                    </li>
                    <li>
                        <a href="{{route('admin.fileUpload')}}"> File Upload </a>
                    </li>
                    <li>
                        <a href="form_quill.html"> Quill Editor </a>
                    </li>
                    <li>
                        <a href="form_markdown.html"> Markdown Editor </a>
                    </li>
                    <li>
                        <a href="form_clipboard.html"> Clipboard </a>
                    </li>
                    <li>
                        <a href="form_typeahead.html"> Typeahead </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
<!--  END TOPBAR  -->