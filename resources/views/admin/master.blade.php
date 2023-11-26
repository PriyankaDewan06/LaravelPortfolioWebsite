<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Mainul is a Full Steak Web Developer and Digital Marketer. Mainul is providing Web-design, web-development and full SEO services. This is his portfolio site.">
    <meta name="author" content="Muhammad Ali | Mainul Islam">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/') }}admin/assets/images/favicon.png">
    <title>@yield('title')</title>
{{--    <link rel="canonical" href="https://www.wrappixel.com/templates/niceadmin/" />--}}
    @include('admin.includes.css')

</head>

<body>

<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>

<div id="main-wrapper">

    @include('admin.menu.menu')
    @include('admin.menu.side-menu')

    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        @include('admin.includes.breadcrumb')
        <!-- ============================================================== -->
        @yield('body')
        <!-- ============================================================== -->
        @include('admin.includes.footer')
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
@include('admin.includes.customize')
<!-- ============================================================== -->

@include('admin.includes.js')

{{--my custom scripts--}}
<script>
    // data table configure
    $(document).ready(function() {
        $('#file_export').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    } );
</script>
<script>
    $(".bt-switch input[type='checkbox']").bootstrapSwitch();

</script>
</body>

</html>
