<!DOCTYPE html>
<!--
This is a minimum template page.
-->
<html>
    @include('partials.backend.main.header.html')

    <body @yield('backend.main.body.options', '') class="@yield('backend.main.body.class', '')">

    <!-- Content Wrapper. Contains page content -->
    <div class="@yield('backend.minimum.content.wrapper.class', 'content-wrapper')">
        @yield('content')
    </div><!-- /.content-wrapper -->

    @include('partials.backend.main.scripts-minimum')

    </body>
</html>