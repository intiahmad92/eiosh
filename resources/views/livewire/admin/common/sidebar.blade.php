<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">
            <!-- Sidenav Menu Heading (Account)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <div class="sidenav-menu-heading d-sm-none">Account</div>
            <!-- Sidenav Link (Alerts)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <a class="nav-link d-sm-none" href="#!">
                <div class="nav-link-icon"><i data-feather="bell"></i></div>
                Alerts
                <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
            </a>
            <!-- Sidenav Link (Messages)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <a class="nav-link d-sm-none" href="#!">
                <div class="nav-link-icon"><i data-feather="mail"></i></div>
                Messages
                <span class="badge bg-success-soft text-success ms-auto">2 New!</span>
            </a>
            <!-- Sidenav Menu Heading (Core)-->
            <div class="sidenav-menu-heading">Core</div>
            <!-- Sidenav Accordion (Dashboard)-->
            <a class="nav-link collapsed" href="{{route('admin.dashboard')}}" >
                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                Dashboards
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            
            <!-- Sidenav Heading (Custom)-->
            <div class="sidenav-menu-heading">Custom</div>

            <!-- Sidenav Accordion (Pages)-->
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseCMSPages" aria-expanded="false" aria-controls="collapseCMSPages">
                <div class="nav-link-icon"><i data-feather="grid"></i></div>
                {{__('CMS Pages')}}
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseCMSPages" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                    <a class="nav-link collapsed" href="{{url('admin/cms-pages')}}">
                        {{__('CMS Pages List')}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <a class="nav-link collapsed" href="{{url('admin/cms-pages/add')}}">
                        {{__('Create Page')}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                </nav>
            </div>

            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseSlider" aria-expanded="false" aria-controls="collapseSlider">
                <div class="nav-link-icon"><i data-feather="grid"></i></div>
                {{__('Slider')}}
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseSlider" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                    <a class="nav-link collapsed" href="{{url('admin/slider')}}">
                        {{__('Slider List')}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <a class="nav-link collapsed" href="{{url('admin/slider/add')}}">
                        {{__('Create Slide')}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                </nav>
            </div>

            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseDocuments" aria-expanded="false" aria-controls="collapseDocuments">
                <div class="nav-link-icon"><i data-feather="grid"></i></div>
                {{__('Documents')}}
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseDocuments" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                    <a class="nav-link collapsed" href="{{url('admin/documents')}}">
                        {{__('Documents List')}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    
                </nav>
            </div>


            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapsejennings-analysis" aria-expanded="false" aria-controls="collapsejennings-analysis">
                <div class="nav-link-icon"><i data-feather="grid"></i></div>
                {{__('Paul Jennings Analysis')}}
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsejennings-analysis" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                    <a class="nav-link collapsed" href="{{url('admin/paul-jennings-analysis')}}">
                        {{__('Analysis List')}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <a class="nav-link collapsed" href="{{url('admin/paul-jennings-analysis-categories')}}">
                        {{__('Categories List')}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <a class="nav-link collapsed" href="{{url('admin/paul-jennings-analysis-sections')}}">
                        {{__('Sections List')}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                </nav>
            </div>


            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                <div class="nav-link-icon"><i data-feather="grid"></i></div>
                {{__('Posts')}}
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                    <a class="nav-link collapsed" href="{{url('admin/blogs')}}">
                        {{__('Posts List')}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <a class="nav-link collapsed" href="{{url('admin/blogs/add')}}">
                        {{__('Create Post')}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                </nav>
            </div>

            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseApps1" aria-expanded="false" aria-controls="collapseApps1">
                <div class="nav-link-icon"><i data-feather="globe"></i></div>
                {{__('Post Categories')}}
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseApps1" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavAppsMenu">
                    <a class="nav-link collapsed" href="{{url('admin/blog-categories')}}">
                        {{__('Post Categories List')}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <a class="nav-link collapsed" href="{{url('admin/blog-categories/add')}}">
                        {{__('Create Category')}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                </nav>
            </div>


            <!-- Sidenav Accordion (Teachers)-->


            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseApps" aria-expanded="false" aria-controls="collapseApps">
                <div class="nav-link-icon"><i data-feather="globe"></i></div>
                {{__('Best Services')}}
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseApps" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavAppsMenu">
                    <a class="nav-link collapsed" href="{{url('admin/best-services')}}">
                        {{__('Best Services List')}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <a class="nav-link collapsed" href="{{url('admin/best-services/add')}}">
                        {{__('Create Service')}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                </nav>
            </div> 


            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseContent" aria-expanded="false" aria-controls="collapseContent">
                <div class="nav-link-icon"><i data-feather="globe"></i></div>
                {{__('Services Content')}}
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseContent" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavAppsMenu">
                    <a class="nav-link collapsed" href="{{url('admin/services-content')}}">
                        {{__('Services Content List')}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <a class="nav-link collapsed" href="{{url('admin/services-content/add')}}">
                        {{__('Create Service Content')}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                </nav>
            </div> 
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseServiceApps1" aria-expanded="false" aria-controls="collapseServiceApps1">
                <div class="nav-link-icon"><i data-feather="globe"></i></div>
                {{__('Service Categories')}}
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseServiceApps1" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavAppsMenu">
                    <a class="nav-link collapsed" href="{{url('admin/service-categories')}}">
                        {{__('Service Categories List')}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <a class="nav-link collapsed" href="{{url('admin/service-categories/add')}}">
                        {{__('Create Service Category')}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                </nav>
            </div>

            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseCaseStudies" aria-expanded="false" aria-controls="collapseCaseStudies">
                <div class="nav-link-icon"><i data-feather="grid"></i></div>
                {{__('Case Studies')}}
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseCaseStudies" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                    <a class="nav-link collapsed" href="{{url('admin/blogs')}}">
                        {{__('Case Studies List')}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <a class="nav-link collapsed" href="{{url('admin/blogs/add')}}">
                        {{__('Create Case Study')}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                </nav>
            </div>

           
            <!-- Sidenav Accordion (Students)-->
            <!-- Sidenav Heading (Components)-->
            <div class="sidenav-menu-heading">{{__('Access')}}</div>
            

            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapsecompany-logos" aria-expanded="false" aria-controls="collapsecompany-logos">
                <div class="nav-link-icon"><i data-feather="package"></i></div>
                {{__("Company Logos")}}
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsecompany-logos" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavCourses">
                    <a class="nav-link collapsed" href="{{url('admin/company-logos')}}">
                        {{__("Company Logos List")}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <a class="nav-link collapsed" href="{{url('admin/company-logos/add')}}">
                        {{__("Create Company Logo")}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseBlogCategories" aria-expanded="false" aria-controls="collapseBlogCategories">
                <div class="nav-link-icon"><i data-feather="package"></i></div>
                {{__("Articles Categories")}}
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseBlogCategories" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavCourses">
                    <a class="nav-link collapsed" href="{{url('admin/articles-tips-categories')}}">
                        {{__("Articles Categories List")}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <a class="nav-link collapsed" href="{{url('admin/articles-tips-categories/add')}}">
                        {{__("Create Category")}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                </nav>
            </div>


            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseCourses" aria-expanded="false" aria-controls="collapseCourses">
                <div class="nav-link-icon"><i data-feather="package"></i></div>
                {{__("Testimonials")}}
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseCourses" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavCourses">
                    <!-- Nested Sidenav Accordion (Designations -> Navigation)-->
                    <a class="nav-link collapsed" href="{{url('admin/testimonials')}}">
                        {{__("Testimonials List")}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <a class="nav-link collapsed" href="{{url('admin/testimonials/add')}}">
                        {{__("Create Testimonial")}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                </nav>
            </div>

            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseTags" aria-expanded="false" aria-controls="collapseTags">
                <div class="nav-link-icon"><i data-feather="package"></i></div>
                {{__("Site Tags")}}
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseTags" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavCourses">
                    <a class="nav-link collapsed" href="{{url('admin/assset-tags')}}">
                        {{__("Asset's Tag List")}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <a class="nav-link collapsed" href="{{url('admin/assset-tags/add')}}">
                        {{__("Create Asset's Tag")}}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                </nav>
            </div>
            
           
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
