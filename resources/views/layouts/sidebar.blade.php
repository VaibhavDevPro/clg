<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
     data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px"
     data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Wrapper-->
    <div id="kt_app_sidebar_wrapper" class="app-sidebar-wrapper">
        <div class="hover-scroll-y my-5 my-lg-2 mx-4" data-kt-scroll="true"
             data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
             data-kt-scroll-dependencies="#kt_app_header" data-kt-scroll-wrappers="#kt_app_sidebar_wrapper"
             data-kt-scroll-offset="5px">
            <!--begin::Sidebar menu-->
            <div id="kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false"
                 class="app-sidebar-menu-primary menu menu-column menu-rounded menu-sub-indention menu-state-bullet-primary px-3 mb-5">

                @php
                    // Fetch menus without any role or permission checks
                    $menus = \App\Helpers\MenuHelper::getMenus();
                @endphp

                @forelse ($menus as $menu)
                    @php
                        // Determine if the current route matches any route of this menu item
                        $active = in_array(Route::currentRouteName(), @$menu['routes'] ?? []) ? 'active' : '';
                    @endphp

                    <!--begin:Menu link-->
                    <div class="menu-item">
                        <a class="menu-link {{ $active }}" href="{{ $menu['url'] }}">
                            <span class="menu-icon">
                                <span class="material-symbols-outlined fs-2 me-3">{{ $menu['icon'] }}</span>
                            </span>
                            <span class="menu-title">{{ $menu['title'] }}</span>
                        </a>
                    </div>
                    <!--end:Menu link-->

                @empty
                    <!-- Handle case where no menus are available -->
                    <div class="menu-item">
                        <span class="menu-link">No available menus</span>
                    </div>
                @endforelse
            </div>
            <!--end::Sidebar menu-->
        </div>
    </div>
</div>
