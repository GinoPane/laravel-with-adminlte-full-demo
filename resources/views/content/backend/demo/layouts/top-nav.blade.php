@extends('layout.backend.top-nav')

@section('backend.main.header.html.styles')
@endsection

@section('backend.main.header.html.scripts')
@endsection

@section('backend.main.body.class')
    layout-top-nav
@endsection

@section('backend.main.header.html.title')
    Top Navigation Layout
@endsection

@section('backend.main.header.content.title')
    Top Navigation Layout Example
@endsection

@section('backend.main.header.content.description')
    alternative navigation
@endsection

@section('backend.main.header.content.breadcrumb')
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Layout</a></li>
    <li class="active">Top Navigation</li>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="callout callout-info">
            <h4>Tip!</h4>

            <p>Add the layout-top-nav class to the body tag to get this layout. This feature can also be used with a
                sidebar! So use this class if you want to remove the custom dropdown menus from the navbar and use regular
                links instead.</p>
        </div>
        <div class="callout callout-danger">
            <h4>Warning!</h4>

            <p>The construction of this layout differs from the normal one. In other words, the HTML markup of the navbar
                and the content will slightly differ than that of the normal layout.</p>
        </div>
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Blank Box</h3>
            </div>
            <div class="box-body">
                The great content goes here
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
@endsection

@section('backend.main.scripts')
    <!-- SlimScroll -->
    <script src="{{ asset('/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('/plugins/fastclick/fastclick.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('/js/demo.js') }}"></script>
@endsection