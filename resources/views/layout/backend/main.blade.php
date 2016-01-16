<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

    @include('partials.backend.main.header.html')

    <!--
    BODY TAG OPTIONS:
    =================
    Apply one or more of the following classes to get the
    desired effect
    |---------------------------------------------------------|
    | SKINS         | skin-blue                               |
    |               | skin-black                              |
    |               | skin-purple                             |
    |               | skin-yellow                             |
    |               | skin-red                                |
    |               | skin-green                              |
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | fixed                                   |
    |               | layout-boxed                            |
    |               | layout-top-nav                          |
    |               | sidebar-collapse                        |
    |               | sidebar-mini                            |
    |---------------------------------------------------------|
    -->
    <body class="hold-transition skin-blue @yield('backend.main.body.class', 'sidebar-mini')">
    <div class="wrapper">

        @include('partials.backend.main.header.main')

        @include('partials.backend.main.sidebar.left')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            @include('partials.backend.main.header.content')

            <!-- Main content -->
            <section class="content">
                <!-- Your Page Content Here -->
                @yield('content')
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        @include('partials.backend.main.footer')

        @include('partials.backend.main.sidebar.control')

    </div><!-- ./wrapper -->

    @include('partials.backend.main.scripts')

    </body>
</html>