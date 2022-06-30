<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Main</li>

                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="mdi mdi-speedometer"></i>
                        <span>Dashboard</span>
                    </a>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow" aria-expanded="false">
                        <i class="mdi mdi-share-variant"></i>
                        <span>Event</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="true">
                        <li><a href="{{ route('event.index')}}" aria-expanded="false"><i class="fas fa-user"></i></i> Event</a></li>
                    </ul>
                </li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
