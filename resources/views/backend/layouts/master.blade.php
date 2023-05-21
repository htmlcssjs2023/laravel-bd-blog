<!DOCTYPE html>
<html lang="en">
    <head>
        @include('backend.includes.head')
    </head>
    <body class="sb-nav-fixed">
        <!-- Nav -->
            @include('backend.includes.nav')
        <!-- End Nav -->
        <div id="layoutSidenav">
            <!-- Left SideNav -->
            @include('backend.includes.sidebar')
            <!-- End Left SideNav -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">@yield('page_title')</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">@yield('page_sub_title')</li>
                        </ol>
                       <!-- Main Content -->
                        @yield('content')
                       <!-- End Content -->
                        
                    </div>
                </main>
                <!-- Footer -->
                    @include('backend.includes.footer')
                <!-- End Footer -->
            </div>
        </div>
        <!-- Scripts -->
        @include('backend.includes.scripts')
    </body>
</html>
