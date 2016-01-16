@extends('layout.backend.main')

@section('backend.main.header.html.styles')
@endsection

@section('backend.main.header.html.scripts')
@endsection

@section('backend.main.header.html.title')
    Boxed Layout
@endsection

@section('backend.main.body.class')
    layout-boxed sidebar-mini
@endsection

@section('backend.main.header.content.title')
    Boxed Layout
@endsection

@section('backend.main.header.content.description')
    alternative layout
@endsection

@section('backend.main.header.content.breadcrumb')
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Layout</a></li>
    <li class="active">Boxed</li>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="callout callout-info">
            <h4>Tip!</h4>

            <p>Add the layout-boxed class to the body tag to get this layout. The boxed layout is helpful when working on
                large screens because it prevents the site from stretching very wide.</p>
        </div>
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Title</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                Start creating your amazing application!
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                Footer
            </div>
            <!-- /.box-footer-->
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