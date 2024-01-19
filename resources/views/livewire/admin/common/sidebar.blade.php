<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">
            <!-- Sidenav Menu Heading (Account)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <form class="form-inline me-auto d-none d-lg-block mt-2 sidenav-menu-heading ">
                <div class="input-group input-group-joined input-group-solid">
                    <input class="form-control pe-0" type="search" id="menu-search" placeholder="Search" aria-label="Search" />
                    <div class="input-group-text"><i data-feather="search"></i></div>
                </div>
            </form>
            
            <!-- Sidenav Menu Heading (Core)-->
            <div class="sidenav-menu-heading  sidenav-menu-heading-account">Core</div>
            <!-- Sidenav Accordion (Dashboard)-->
            <a class="nav-link collapsed" href="{{route('admin.dashboard')}}" >
                <div class="nav-link-icon"><i data-feather="home"></i></div>
                Dashboards
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>

            <?php $adminMenus = adminMenus(); ?>


            @if(null!==($adminMenus))
            @foreach($adminMenus as $key=>$menu)
            <!-- Sidenav Heading (Custom)-->
            <div class="sidenav-menu-heading">{{$key}}</div>

            <!-- Sidenav Accordion (Pages)-->
            @if(null!==($menu))
            @foreach($menu as $ke=>$men)
            <?php $collapse = str_replace(' ', '', $ke); ?>
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapse{{$collapse}}" aria-expanded="false" aria-controls="collapse{{$collapse}}">
                <div class="nav-link-icon"><i data-feather="{{@$men['icon']}}"></i></div>
                {{__($ke)}}
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapse{{$collapse}}" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                    @if(null!==($men))
                    @foreach ($men as $k => $value)
                    @if($k !== 'icon')
                    <a class="nav-link collapsed" href="{{$value}}">
                        {{__($k)}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    @endif
                    @endforeach
                    @endif

                </nav>
            </div>
            @endforeach
            @endif
            @endforeach
            @endif


            
           
            <?php 

          $w_pages = App\Models\WidgetPages::where('status','active')->get();

          ?>

          @if(null!==($w_pages))
            <div class="sidenav-menu-heading">{{__('Settings')}}</div>

            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseSettings" aria-expanded="false" aria-controls="collapseSettings">
                <div class="nav-link-icon"><i data-feather="tool"></i></div>
                {{__("Settings")}}
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseSettings" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavCourses">
                    <!-- Nested Sidenav Accordion (Designations -> Navigation)-->

         
          
                    @foreach($w_pages as $w_p)
                    <a class="nav-link collapsed" href="{{route('admin.widgets_data',$w_p->slug)}}">
                        {{$w_p->title}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    @endforeach 
                </nav>
            </div>
            @endif
            
            <!-- Sidenav Link (Tables)-->
        </div>
    </div>
    <!-- Sidenav Footer-->
    <!-- <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle">Logged in as:</div>
            <div class="sidenav-footer-title">Valerie Luna</div>
        </div>
    </div> -->
</nav>
