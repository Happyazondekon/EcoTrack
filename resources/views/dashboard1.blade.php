<!doctype html>
<html class="modern fixed has-top-menu has-left-sidebar-half">

<head>
    <!-- Basic -->
    <meta charset="UTF-8">
    <title>Dashboard | Porto Admin - Responsive HTML5 Template</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,600,700,800,900" rel="stylesheet"
        type="text/css">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/morris/morris.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/datatables/media/css/dataTables.bootstrap5.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}" />

    <!-- Theme Layout -->
    <link rel="stylesheet" href="{{ asset('css/layouts/modern.css') }}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('css/skins/default.css') }}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('vendor/modernizr/modernizr.js') }}"></script>
</head>

<body>
    <section class="body">
        <!-- start: header -->
        <header class="header header-nav-menu header-nav-links">
            <div class="logo-container">
                <a href="../" class="logo">
                    <img src="img/logo-modern.png" class="logo-image" width="90" height="24"
                        alt="Porto Admin" /><img src="img/logo-default.png" class="logo-image-mobile" width="90"
                        height="41" alt="Porto Admin" />
                </a>
                <button class="btn header-btn-collapse-nav d-lg-none" data-bs-toggle="collapse"
                    data-bs-target=".header-nav">
                    <i class="fas fa-bars"></i>
                </button>
                <!-- start: header nav menu -->
                <div class="header-nav collapse">
                    <div
                        class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 header-nav-main-square">
                        <nav>
                            <ul class="nav nav-pills" id="mainNav">
                                <li class="">
                                    <a class="nav-link" href="layouts-default.html">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link dropdown-toggle" href="#">
                                        Layouts
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="nav-link" href="index.html">
                                                Landing Page
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="layouts-default.html">
                                                Default
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="layouts-modern.html">
                                                Modern
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="nav-link">
                                                Boxed
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="nav-link" href="layouts-boxed.html">
                                                        Static Header
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="layouts-boxed-fixed-header.html">
                                                        Fixed Header
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="nav-link">
                                                Horizontal Menu Header
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="nav-link" href="layouts-header-menu.html">
                                                        Pills
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="layouts-header-menu-stripe.html">
                                                        Stripe
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="layouts-header-menu-top-line.html">
                                                        Top Line
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="layouts-dark.html">
                                                Dark
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="layouts-dark-header.html">
                                                Dark Header
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="layouts-two-navigations.html">
                                                Two Navigations
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="nav-link">
                                                Tab Navigation
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="nav-link" href="layouts-tab-navigation-dark.html">
                                                        Tab Navigation Dark
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="layouts-tab-navigation.html">
                                                        Tab Navigation Light
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="layouts-tab-navigation-boxed.html">
                                                        Tab Navigation Boxed
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="layouts-light-sidebar.html">
                                                Light Sidebar
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="layouts-left-sidebar-collapsed.html">
                                                Left Sidebar Collapsed
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="layouts-left-sidebar-scroll.html">
                                                Left Sidebar Scroll
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="nav-link">
                                                Left Sidebar Big Icons
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="nav-link" href="layouts-left-sidebar-big-icons.html">
                                                        Left Sidebar Big Icons Dark
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link"
                                                        href="layouts-left-sidebar-big-icons-light.html">
                                                        Left Sidebar Big Icons Light
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="nav-link">
                                                Left Sidebar Panel
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="nav-link" href="layouts-left-sidebar-panel.html">
                                                        Left Sidebar Panel Dark
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="layouts-left-sidebar-panel-light.html">
                                                        Left Sidebar Panel Light
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="nav-link">
                                                Left Sidebar Sizes
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="nav-link" href="layouts-sidebar-sizes-xs.html">
                                                        Left Sidebar XS
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="layouts-sidebar-sizes-sm.html">
                                                        Left Sidebar SM
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="layouts-sidebar-sizes-md.html">
                                                        Left Sidebar MD
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="layouts-square-borders.html">
                                                Square Borders
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link dropdown-toggle" href="#">
                                        Pages
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="nav-link" href="pages-signup.html">
                                                Sign Up
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-signin.html">
                                                Sign In
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-recover-password.html">
                                                Recover Password
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-lock-screen.html">
                                                Locked Screen
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-user-profile.html">
                                                User Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-session-timeout.html">
                                                Session Timeout
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-calendar.html">
                                                Calendar
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-timeline.html">
                                                Timeline
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-media-gallery.html">
                                                Media Gallery
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-invoice.html">
                                                Invoice
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-blank.html">
                                                Blank Page
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-404.html">
                                                404
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-500.html">
                                                500
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-log-viewer.html">
                                                Log Viewer
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-search-results.html">
                                                Search Results
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-mega">
                                    <a class="nav-link dropdown-toggle" href="#">UI Elements</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="dropdown-mega-content">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <ul class="dropdown-mega-sub-nav">
                                                            <li>
                                                                <a class="nav-link"
                                                                    href="ui-elements-typography.html">
                                                                    Typography
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" href="#">
                                                                    Icons <span
                                                                        class="mega-sub-nav-toggle toggled float-end"
                                                                        data-toggle="collapse"
                                                                        data-target=".mega-sub-nav-sub-menu-1"></span>
                                                                </a>
                                                                <ul
                                                                    class="dropdown-mega-sub-nav mega-sub-nav-sub-menu-1 collapse in">
                                                                    <li>
                                                                        <a class="nav-link"
                                                                            href="ui-elements-icons-elusive.html">
                                                                            Elusive
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="nav-link"
                                                                            href="ui-elements-icons-font-awesome.html">
                                                                            Font Awesome
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="nav-link"
                                                                            href="ui-elements-icons-line-icons.html">
                                                                            Line Icons
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="nav-link"
                                                                            href="ui-elements-icons-meteocons.html">
                                                                            Meteocons
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="nav-link"
                                                                            href="ui-elements-icons-box-icons.html">
                                                                            Box Icons
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" href="ui-elements-tabs.html">
                                                                    Tabs
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" href="ui-elements-cards.html">
                                                                    Cards
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul class="dropdown-mega-sub-nav">
                                                            <li>
                                                                <a class="nav-link" href="ui-elements-widgets.html">
                                                                    Widgets
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" href="ui-elements-portlets.html">
                                                                    Portlets
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" href="ui-elements-buttons.html">
                                                                    Buttons
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" href="ui-elements-alerts.html">
                                                                    Alerts
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link"
                                                                    href="ui-elements-notifications.html">
                                                                    Notifications
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" href="ui-elements-modals.html">
                                                                    Modals
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" href="ui-elements-lightbox.html">
                                                                    Lightbox
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link"
                                                                    href="ui-elements-progressbars.html">
                                                                    Progress Bars
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul class="dropdown-mega-sub-nav">
                                                            <li>
                                                                <a class="nav-link" href="ui-elements-sliders.html">
                                                                    Sliders
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" href="ui-elements-carousels.html">
                                                                    Carousels
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link"
                                                                    href="ui-elements-accordions.html">
                                                                    Accordions
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" href="ui-elements-toggles.html">
                                                                    Toggles
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" href="ui-elements-nestable.html">
                                                                    Nestable
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" href="ui-elements-tree-view.html">
                                                                    Tree View
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link"
                                                                    href="ui-elements-scrollable.html">
                                                                    Scrollable
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link"
                                                                    href="ui-elements-grid-system.html">
                                                                    Grid System
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul class="dropdown-mega-sub-nav">
                                                            <li>
                                                                <a class="nav-link" href="ui-elements-charts.html">
                                                                    Charts
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" href="#">
                                                                    Animations <span
                                                                        class="mega-sub-nav-toggle toggled float-end"
                                                                        data-toggle="collapse"
                                                                        data-target=".mega-sub-nav-sub-menu-2"></span>
                                                                </a>
                                                                <ul
                                                                    class="dropdown-mega-sub-nav mega-sub-nav-sub-menu-2 collapse">
                                                                    <li>
                                                                        <a class="nav-link"
                                                                            href="ui-elements-animations-appear.html">
                                                                            Appear
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="nav-link"
                                                                            href="ui-elements-animations-hover.html">
                                                                            Hover
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" href="#">
                                                                    Loading <span
                                                                        class="mega-sub-nav-toggle toggled float-end"
                                                                        data-toggle="collapse"
                                                                        data-target=".mega-sub-nav-sub-menu-3"></span>
                                                                </a>
                                                                <ul
                                                                    class="dropdown-mega-sub-nav mega-sub-nav-sub-menu-3 collapse">
                                                                    <li>
                                                                        <a class="nav-link"
                                                                            href="ui-elements-loading-overlay.html">
                                                                            Overlay
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="nav-link"
                                                                            href="ui-elements-loading-progress.html">
                                                                            Progress
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" href="ui-elements-extra.html">
                                                                    Extra
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="nav-link dropdown-toggle">More</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a class="nav-link" href="#">
                                                Maps
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="nav-link" href="maps-google-maps.html">
                                                        Basic
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="maps-google-maps-builder.html">
                                                        Map Builder
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="maps-vector.html">
                                                        Vector
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="extra-ajax-made-easy.html">
                                                Ajax
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="nav-link" href="#">
                                                eCommerce
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="nav-link" href="ecommerce-dashboard.html">
                                                        Dashboard
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="ecommerce-products-list.html">
                                                        Products List
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="ecommerce-products-form.html">
                                                        Products Form
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="ecommerce-category-list.html">
                                                        Categories List
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="ecommerce-category-form.html">
                                                        Category Form
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="ecommerce-coupons-list.html">
                                                        Coupons List
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="ecommerce-coupons-form.html">
                                                        Coupons Form
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="ecommerce-orders-list.html">
                                                        Orders List
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="ecommerce-orders-detail.html">
                                                        Orders Detail
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="ecommerce-customers-list.html">
                                                        Customers List
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="ecommerce-customers-form.html">
                                                        Customers Form
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="">
                                            <a class="nav-link" href="mailbox-folder.html">
                                                Mailbox
                                                <span class="float-end badge badge-primary">182</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="nav-link" href="#">
                                                Forms
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="nav-link" href="forms-basic.html">
                                                        Basic
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="forms-advanced.html">
                                                        Advanced
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="forms-validation.html">
                                                        Validation
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="forms-layouts.html">
                                                        Layouts
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="nav-link" href="#">
                                                Tables
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="nav-link" href="tables-basic.html">
                                                        Basic
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="tables-advanced.html">
                                                        Advanced
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="tables-responsive.html">
                                                        Responsive
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="tables-editable.html">
                                                        Editable
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="tables-ajax.html">
                                                        Ajax
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="tables-pricing.html">
                                                        Pricing
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="nav-link" href="#">
                                                Menu Levels
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="nav-link">
                                                        First Level
                                                    </a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="nav-link" href="#">
                                                        Second Level
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="nav-link">
                                                                Second Level Link #1
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="nav-link">
                                                                Second Level Link #2
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="nav-link" href="#">
                                                                Third Level
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="nav-link">
                                                                        Third Level Link #1
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="nav-link">
                                                                        Third Level Link #2
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link"
                                                href="http://themeforest.net/item/porto-responsive-html5-template/4106987?ref=Okler">
                                                Front-End <span class="tip tip-dark">hot</span><em
                                                    class="not-included">(Not Included)</em>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link"
                                                href="https://www.okler.net/forums/topic/porto-admin-changelog/">
                                                Changelog
                                            </a>
                                        </li>
                                    </ul>
                        </nav>
                    </div>
                </div>
                <!-- end: header nav menu -->
            </div>
            <!-- start: search & user box -->
            <div class="header-right">
                <a class="btn search-toggle d-none d-md-inline-block d-xl-none" data-toggle-class="active"
                    data-target=".search"><i class="bx bx-search"></i></a>
                <form action="pages-search-results.html"
                    class="search search-style-1 nav-form d-none d-xl-inline-block">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" id="q"
                            placeholder="Search...">
                        <button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
                    </div>
                </form>
                <span class="separator"></span>
                <a class="dropdown-language nav-link" href="#" role="button" id="dropdownLanguage"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="img/blank.gif" class="flag flag-us" alt="English" /> EN
                    <i class="fas fa-chevron-down"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage">
                    <a class="dropdown-item" href="#"><img src="img/blank.gif" class="flag flag-us"
                            alt="English" /> English</a>
                    <a class="dropdown-item" href="#"><img src="img/blank.gif" class="flag flag-es"
                            alt="English" /> Español</a>
                    <a class="dropdown-item" href="#"><img src="img/blank.gif" class="flag flag-fr"
                            alt="English" /> Française</a>
                </div>
                <span class="separator"></span>
                <ul class="notifications">
                    <li>
                        <a href="#" class="dropdown-toggle notification-icon" data-bs-toggle="dropdown">
                            <i class="bx bx-task"></i>
                            <span class="badge">3</span>
                        </a>
                        <div class="dropdown-menu notification-menu large">
                            <div class="notification-title">
                                <span class="float-end badge badge-default">3</span>
                                Tasks
                            </div>
                            <div class="content">
                                <ul>
                                    <li>
                                        <p class="clearfix mb-1">
                                            <span class="message float-start">Generating Sales Report</span>
                                            <span class="message float-end text-dark">60%</span>
                                        </p>
                                        <div class="progress progress-xs light">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <p class="clearfix mb-1">
                                            <span class="message float-start">Importing Contacts</span>
                                            <span class="message float-end text-dark">98%</span>
                                        </p>
                                        <div class="progress progress-xs light">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="98"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <p class="clearfix mb-1">
                                            <span class="message float-start">Uploading something big</span>
                                            <span class="message float-end text-dark">33%</span>
                                        </p>
                                        <div class="progress progress-xs light mb-1">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="33"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle notification-icon" data-bs-toggle="dropdown">
                            <i class="bx bx-envelope"></i>
                            <span class="badge">4</span>
                        </a>
                        <div class="dropdown-menu notification-menu">
                            <div class="notification-title">
                                <span class="float-end badge badge-default">230</span>
                                Messages
                            </div>
                            <div class="content">
                                <ul>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <span class="image image-as-text">JD</span>
                                            <span class="title">Joseph Doe</span>
                                            <span class="message">Lorem ipsum dolor sit.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <span class="image image-as-text bg-secondary">JJ</span>
                                            <span class="title">Joseph Junior</span>
                                            <span class="message truncate">Truncated message. Lorem ipsum dolor sit
                                                amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin
                                                vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla
                                                molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec
                                                venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed
                                                interdum cursus dui nec venenatis. Pellentesque non nisi lobortis,
                                                rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet
                                                tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus
                                                tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo
                                                eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id.
                                                Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam
                                                tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur
                                                venenatis pharetra. Vestibulum egestas nisi quis elementum
                                                elementum.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <span class="image image-as-text bg-tertiary">MD</span>
                                            <span class="title">Monica Doe</span>
                                            <span class="message">Lorem ipsum dolor sit.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <span class="image image-as-text bg-quaternary">RD</span>
                                            <span class="title">Robert Doe</span>
                                            <span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non
                                                luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac
                                                tincidunt. Quisque eget convallis diam.</span>
                                        </a>
                                    </li>
                                </ul>
                                <hr />
                                <div class="text-end">
                                    <a href="#" class="view-more">View All</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle notification-icon" data-bs-toggle="dropdown">
                            <i class="bx bx-bell"></i>
                            <span class="badge">3</span>
                        </a>
                        <div class="dropdown-menu notification-menu">
                            <div class="notification-title">
                                <span class="float-end badge badge-default">3</span>
                                Alerts
                            </div>
                            <div class="content">
                                <ul>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <div class="image">
                                                <i class="bx bx-dislike bg-danger"></i>
                                            </div>
                                            <span class="title">Server is Down!</span>
                                            <span class="message">Just now</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <div class="image">
                                                <i class="bx bx-lock-alt bg-warning"></i>
                                            </div>
                                            <span class="title">User Locked</span>
                                            <span class="message">15 minutes ago</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <div class="image">
                                                <i class="bx bx-wifi bg-success"></i>
                                            </div>
                                            <span class="title">Connection Restaured</span>
                                            <span class="message">10/10/2023</span>
                                        </a>
                                    </li>
                                </ul>
                                <hr />
                                <div class="text-end">
                                    <a href="#" class="view-more">View All</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <span class="separator"></span>
                <div id="userbox" class="userbox">
                    <a href="#" data-bs-toggle="dropdown">
                        <span class="profile-picture profile-picture-as-text">JD</span>
                        <div class="profile-info profile-info-no-role" data-lock-name="John Doe"
                            data-lock-email="johndoe@okler.com">
                            <span class="name">Hi, <strong class="font-weight-semibold">John Doe</strong></span>
                        </div>
                        <i class="fas fa-chevron-down text-color-dark"></i>
                    </a>
                    <div class="dropdown-menu">
                        <ul class="list-unstyled">
                            <li>
                                <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i
                                        class="bx bx-user"></i> My Profile</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i
                                        class="bx bx-lock-open-alt"></i> Lock Screen</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="pages-signin.html"><i
                                        class="bx bx-log-out"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->
        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">
                <div class="sidebar-header">
                    <div class="sidebar-toggle d-none d-md-flex" data-toggle-class="sidebar-left-collapsed"
                        data-target="html" data-fire-event="sidebar-left-toggle">
                        <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>
                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">
                            <ul class="nav nav-main">
                                <li>
                                    <a class="nav-link" href="layouts-default.html">
                                        <i class="bx bx-home-alt" aria-hidden="true"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-group-label">APPs</li>
                                <li class="nav-parent nav-expanded nav-active">
                                    <a class="nav-link" href="#">
                                        <i class="bx bx-cart-alt" aria-hidden="true"></i>
                                        <span>eCommerce</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li class="nav-active">
                                            <a class="nav-link" href="ecommerce-dashboard.html">
                                                - Dashboard
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ecommerce-products-list.html">
                                                - Products List
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ecommerce-products-form.html">
                                                - Products Form
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ecommerce-category-list.html">
                                                - Categories List
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ecommerce-category-form.html">
                                                - Category Form
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ecommerce-coupons-list.html">
                                                - Coupons List
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ecommerce-coupons-form.html">
                                                - Coupons Form
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ecommerce-orders-list.html">
                                                - Orders List
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ecommerce-orders-detail.html">
                                                - Orders Detail
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ecommerce-customers-list.html">
                                                - Customers List
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ecommerce-customers-form.html">
                                                - Customers Form
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-link" href="mailbox-folder.html">
                                        <i class="bx bx-envelope" aria-hidden="true"></i>
                                        <span>Mailbox</span>
                                    </a>
                                </li>
                                <li class="nav-group-label">Visual</li>
                                <li class="nav-parent">
                                    <a class="nav-link" href="#">
                                        <i class="bx bx-layout" aria-hidden="true"></i>
                                        <span>Layouts</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a class="nav-link" href="index.html">
                                                - Landing Page
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="layouts-default.html">
                                                - Default
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="layouts-modern.html">
                                                - Modern
                                            </a>
                                        </li>
                                        <li class="nav-parent">
                                            <a>
                                                - Boxed
                                            </a>
                                            <ul class="nav nav-children">
                                                <li>
                                                    <a class="nav-link" href="layouts-boxed.html">
                                                        - Static Header
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="layouts-boxed-fixed-header.html">
                                                        - Fixed Header
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-parent">
                                            <a>
                                                - Horizontal Menu Header
                                            </a>
                                            <ul class="nav nav-children">
                                                <li>
                                                    <a class="nav-link" href="layouts-header-menu.html">
                                                        - Pills
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="layouts-header-menu-stripe.html">
                                                        - Stripe
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="layouts-header-menu-top-line.html">
                                                        - Top Line
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="layouts-dark.html">
                                                - Dark
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="layouts-dark-header.html">
                                                - Dark Header
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="layouts-two-navigations.html">
                                                - Two Navigations
                                            </a>
                                        </li>
                                        <li class="nav-parent">
                                            <a>
                                                - Tab Navigation
                                            </a>
                                            <ul class="nav nav-children">
                                                <li>
                                                    <a class="nav-link" href="layouts-tab-navigation-dark.html">
                                                        - Tab Navigation Dark
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="layouts-tab-navigation.html">
                                                        - Tab Navigation Light
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="layouts-tab-navigation-boxed.html">
                                                        - Tab Navigation Boxed
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="layouts-light-sidebar.html">
                                                - Light Sidebar
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="layouts-left-sidebar-collapsed.html">
                                                - Left Sidebar Collapsed
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="layouts-left-sidebar-scroll.html">
                                                - Left Sidebar Scroll
                                            </a>
                                        </li>
                                        <li class="nav-parent">
                                            <a>
                                                - Left Sidebar Big Icons
                                            </a>
                                            <ul class="nav nav-children">
                                                <li>
                                                    <a class="nav-link" href="layouts-left-sidebar-big-icons.html">
                                                        - Left Sidebar Big Icons Dark
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link"
                                                        href="layouts-left-sidebar-big-icons-light.html">
                                                        - Left Sidebar Big Icons Light
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-parent">
                                            <a>
                                                - Left Sidebar Panel
                                            </a>
                                            <ul class="nav nav-children">
                                                <li>
                                                    <a class="nav-link" href="layouts-left-sidebar-panel.html">
                                                        - Left Sidebar Panel Dark
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="layouts-left-sidebar-panel-light.html">
                                                        - Left Sidebar Panel Light
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-parent">
                                            <a>
                                                - Left Sidebar Sizes
                                            </a>
                                            <ul class="nav nav-children">
                                                <li>
                                                    <a class="nav-link" href="layouts-sidebar-sizes-xs.html">
                                                        - Left Sidebar XS
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="layouts-sidebar-sizes-sm.html">
                                                        - Left Sidebar SM
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="layouts-sidebar-sizes-md.html">
                                                        - Left Sidebar MD
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="layouts-square-borders.html">
                                                - Square Borders
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-group-label">Content</li>
                                <li class="nav-parent">
                                    <a class="nav-link" href="#">
                                        <i class="bx bx-file" aria-hidden="true"></i>
                                        <span>Pages</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a class="nav-link" href="pages-signup.html">
                                                - Sign Up
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-signin.html">
                                                - Sign In
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-recover-password.html">
                                                - Recover Password
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-lock-screen.html">
                                                - Locked Screen
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-user-profile.html">
                                                - User Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-session-timeout.html">
                                                - Session Timeout
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-calendar.html">
                                                - Calendar
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-timeline.html">
                                                - Timeline
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-media-gallery.html">
                                                - Media Gallery
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-invoice.html">
                                                - Invoice
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-blank.html">
                                                - Blank Page
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-404.html">
                                                - 404
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-500.html">
                                                - 500
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-log-viewer.html">
                                                - Log Viewer
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="pages-search-results.html">
                                                - Search Results
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-parent">
                                    <a class="nav-link" href="#">
                                        <i class="bx bx-cube" aria-hidden="true"></i>
                                        <span>UI Elements</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a class="nav-link" href="ui-elements-typography.html">
                                                - Typography
                                            </a>
                                        </li>
                                        <li class="nav-parent">
                                            <a class="nav-link" href="#">
                                                - Icons <span class="mega-sub-nav-toggle toggled float-end"
                                                    data-toggle="collapse"
                                                    data-target=".mega-sub-nav-sub-menu-1"></span>
                                            </a>
                                            <ul class="nav nav-children">
                                                <li>
                                                    <a class="nav-link" href="ui-elements-icons-elusive.html">
                                                        - Elusive
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="ui-elements-icons-font-awesome.html">
                                                        - Font Awesome
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="ui-elements-icons-line-icons.html">
                                                        - Line Icons
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="ui-elements-icons-meteocons.html">
                                                        - Meteocons
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="ui-elements-icons-box-icons.html">
                                                        - Box Icons
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ui-elements-tabs.html">
                                                - Tabs
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ui-elements-cards.html">
                                                - Cards
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ui-elements-widgets.html">
                                                - Widgets
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ui-elements-portlets.html">
                                                - Portlets
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ui-elements-buttons.html">
                                                - Buttons
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ui-elements-alerts.html">
                                                - Alerts
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ui-elements-notifications.html">
                                                - Notifications
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ui-elements-modals.html">
                                                - Modals
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ui-elements-lightbox.html">
                                                - Lightbox
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ui-elements-progressbars.html">
                                                - Progress Bars
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ui-elements-sliders.html">
                                                - Sliders
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ui-elements-carousels.html">
                                                - Carousels
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ui-elements-accordions.html">
                                                - Accordions
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ui-elements-toggles.html">
                                                - Toggles
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ui-elements-nestable.html">
                                                - Nestable
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ui-elements-tree-view.html">
                                                - Tree View
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ui-elements-scrollable.html">
                                                - Scrollable
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ui-elements-grid-system.html">
                                                - Grid System
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ui-elements-charts.html">
                                                - Charts
                                            </a>
                                        </li>
                                        <li class="nav-parent">
                                            <a class="nav-link" href="#">
                                                - Animations <span class="mega-sub-nav-toggle toggled float-end"
                                                    data-toggle="collapse"
                                                    data-target=".mega-sub-nav-sub-menu-2"></span>
                                            </a>
                                            <ul class="nav nav-children">
                                                <li>
                                                    <a class="nav-link" href="ui-elements-animations-appear.html">
                                                        - Appear
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="ui-elements-animations-hover.html">
                                                        - Hover
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-parent">
                                            <a class="nav-link" href="#">
                                                - Loading <span class="mega-sub-nav-toggle toggled float-end"
                                                    data-toggle="collapse"
                                                    data-target=".mega-sub-nav-sub-menu-3"></span>
                                            </a>
                                            <ul class="nav nav-children">
                                                <li>
                                                    <a class="nav-link" href="ui-elements-loading-overlay.html">
                                                        - Overlay
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="ui-elements-loading-progress.html">
                                                        - Progress
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="ui-elements-extra.html">
                                                - Extra
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-parent">
                                    <a class="nav-link" href="#">
                                        <i class="bx bx-map" aria-hidden="true"></i>
                                        <span>Maps</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a class="nav-link" href="maps-google-maps.html">
                                                - Basic
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="maps-google-maps-builder.html">
                                                - Map Builder
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="maps-vector.html">
                                                - Vector
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-link" href="extra-ajax-made-easy.html">
                                        <i class="bx bx-loader-circle" aria-hidden="true"></i>
                                        <span>Ajax</span>
                                    </a>
                                </li>
                                <li class="nav-group-label">CRUD</li>
                                <li class="nav-parent">
                                    <a class="nav-link" href="#">
                                        <i class="bx bx-detail" aria-hidden="true"></i>
                                        <span>Forms</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a class="nav-link" href="forms-basic.html">
                                                - Basic
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="forms-advanced.html">
                                                - Advanced
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="forms-validation.html">
                                                - Validation
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="forms-layouts.html">
                                                - Layouts
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-parent">
                                    <a class="nav-link" href="#">
                                        <i class="bx bx-table" aria-hidden="true"></i>
                                        <span>Tables</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a class="nav-link" href="tables-basic.html">
                                                - Basic
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="tables-advanced.html">
                                                - Advanced
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="tables-responsive.html">
                                                - Responsive
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="tables-editable.html">
                                                - Editable
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="tables-ajax.html">
                                                - Ajax
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="tables-pricing.html">
                                                - Pricing
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-group-label">Extra</li>
                                <li class="nav-parent">
                                    <a class="nav-link" href="#">
                                        <i class="bx bx-collection" aria-hidden="true"></i>
                                        <span>Menu Levels</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a>
                                                - First Level
                                            </a>
                                        </li>
                                        <li class="nav-parent">
                                            <a class="nav-link" href="#">
                                                - Second Level
                                            </a>
                                            <ul class="nav nav-children">
                                                <li>
                                                    <a>
                                                        - Second Level Link #1
                                                    </a>
                                                </li>
                                                <li>
                                                    <a>
                                                        - Second Level Link #2
                                                    </a>
                                                </li>
                                                <li class="nav-parent">
                                                    <a class="nav-link" href="#">
                                                        - Third Level
                                                    </a>
                                                    <ul class="nav nav-children">
                                                        <li>
                                                            <a>
                                                                - Third Level Link #1
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a>
                                                                - Third Level Link #2
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-link"
                                        href="http://themeforest.net/item/porto-responsive-html5-template/4106987?ref=Okler">
                                        <i class="bx bx-window-alt" aria-hidden="true"></i>
                                        <span>Front-End <em class="not-included">(Not Included)</em></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link"
                                        href="https://www.okler.net/forums/topic/porto-admin-changelog/">
                                        <i class="bx bx-book-alt" aria-hidden="true"></i>
                                        <span>Changelog</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <hr class="separator" />
                        <div class="sidebar-widget widget-tasks">
                            <div class="widget-header">
                                <h6>Projects</h6>
                            </div>
                            <div class="widget-content">
                                <ul class="list-unstyled m-0">
                                    <li><a href="#">Porto HTML5 Template</a></li>
                                    <li><a href="#">Tucson Template</a></li>
                                    <li><a href="#">Porto Admin</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <script>
                        // Maintain Scroll Position
                        if (typeof localStorage !== 'undefined') {
                            if (localStorage.getItem('sidebar-left-position') !== null) {
                                var initialPosition = localStorage.getItem('sidebar-left-position'),
                                    sidebarLeft = document.querySelector('#sidebar-left .nano-content');
                                sidebarLeft.scrollTop = initialPosition;
                            }
                        }
                    </script>
                </div>
            </aside>
            <!-- end: sidebar -->
            <section role="main" class="content-body content-body-modern">
                <header class="page-header page-header-left-inline-breadcrumb">
                    <h2 class="font-weight-bold text-6">Dashboard</h2>
                    <div class="right-wrapper">
                        <ol class="breadcrumbs">
                            <li><span>Home</span></li>
                            <li><span>eCommerce Dashboard</span></li>
                        </ol>
                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i
                                class="fas fa-chevron-left"></i></a>
                    </div>
                </header>
                <!-- start: page -->
                <div class="row">
                    <div class="col-lg-12 col-xl-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-modern">
                                    <div class="card-body p-0">
                                        <div class="widget-user-info">
                                            <div class="widget-user-info-header">
                                                <h2 class="font-weight-bold text-color-dark text-5">Hello, John Doe
                                                </h2>
                                                <p class="mb-0">Administrator</p>
                                                <div class="widget-user-acrostic bg-primary">
                                                    <span class="font-weight-bold">JD</span>
                                                </div>
                                            </div>
                                            <div class="widget-user-info-body">
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <strong class="text-color-dark text-5">$19.876,02</strong>
                                                        <h3 class="text-4-1">User Balance</h3>
                                                    </div>
                                                    <div class="col-auto">
                                                        <strong class="text-color-dark text-5">637</strong>
                                                        <h3 class="text-4-1">Products</h3>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <a href="pages-user-profile.html"
                                                            class="btn btn-light btn-xl border font-weight-semibold text-color-dark text-3 mt-4">View
                                                            Profile</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-xl-12 pb-2 pb-lg-0 mb-4 mb-lg-0">
                                <div class="card card-modern">
                                    <div class="card-body py-4">
                                        <div class="row align-items-center">
                                            <div class="col-6 col-md-4">
                                                <h3 class="text-4-1 my-0">Total Orders</h3>
                                                <strong class="text-6 text-color-dark">4825</strong>
                                            </div>
                                            <div
                                                class="col-6 col-md-4 border border-top-0 border-end-0 border-bottom-0 border-color-light-grey py-3">
                                                <h3 class="text-4-1 text-color-success line-height-2 my-0">Orders
                                                    <strong>UP &uarr;</strong>
                                                </h3>
                                                <span>30 days</span>
                                            </div>
                                            <div class="col-md-4 text-start text-md-right pe-md-4 mt-4 mt-md-0">
                                                <i
                                                    class="bx bx-cart-alt icon icon-inline icon-xl bg-primary rounded-circle text-color-light"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-12 pt-xl-2 mt-xl-4">
                                <div class="card card-modern">
                                    <div class="card-body py-4">
                                        <div class="row align-items-center">
                                            <div class="col-6 col-md-4">
                                                <h3 class="text-4-1 my-0">Average Price</h3>
                                                <strong class="text-6 text-color-dark">$39,03</strong>
                                            </div>
                                            <div
                                                class="col-6 col-md-4 border border-top-0 border-end-0 border-bottom-0 border-color-light-grey py-3">
                                                <h3 class="text-4-1 text-color-danger line-height-2 my-0">Price
                                                    <strong>DOWN &darr;</strong>
                                                </h3>
                                                <span>30 days</span>
                                            </div>
                                            <div class="col-md-4 text-start text-md-right pe-md-4 mt-4 mt-md-0">
                                                <i
                                                    class="bx bx-purchase-tag-alt icon icon-inline icon-xl bg-primary rounded-circle text-color-light pe-0"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-8 pt-2 pt-xl-0 mt-4 mt-xl-0">
                        <div class="row">
                            <div class="col">
                                <div class="card card-modern">
                                    <div class="card-header">
                                        <div class="card-actions">
                                            <a href="#" class="card-action card-action-toggle"
                                                data-card-toggle></a>
                                        </div>
                                        <h2 class="card-title">Revenue</h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <strong class="text-color-dark text-6">$19.876,02</strong>
                                                <h3 class="text-4 mt-0 mb-2">This Month</h3>
                                            </div>
                                            <div class="col-auto">
                                                <strong class="text-color-dark text-6">$14.345,26</strong>
                                                <h3 class="text-4 mt-0 mb-2">Last Month</h3>
                                            </div>
                                            <div class="col-auto">
                                                <strong class="text-color-dark text-6">$119.876,02</strong>
                                                <h3 class="text-4 mt-0 mb-2">Total Profit</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <!-- Morris: Area -->
                                                <div class="chart chart-md chart-bar-stacked-sm my-3"
                                                    id="revenueChart" style="height: 409px;"></div>
                                                <script type="text/javascript">
                                                    var revenueChartData = [{
                                                        y: 'Jan',
                                                        a: 56,
                                                        b: 65
                                                    }, {
                                                        y: 'Feb',
                                                        a: 76,
                                                        b: 96
                                                    }, {
                                                        y: 'Mar',
                                                        a: 65,
                                                        b: 75
                                                    }, {
                                                        y: 'Apr',
                                                        a: 80,
                                                        b: 90
                                                    }, {
                                                        y: 'May',
                                                        a: 55,
                                                        b: 55
                                                    }, {
                                                        y: 'Jun',
                                                        a: 75,
                                                        b: 15
                                                    }, {
                                                        y: 'Jul',
                                                        a: 79,
                                                        b: 85
                                                    }, {
                                                        y: 'Aug',
                                                        a: 54,
                                                        b: 63
                                                    }, {
                                                        y: 'Sep',
                                                        a: 78,
                                                        b: 98
                                                    }, {
                                                        y: 'Oct',
                                                        a: 35,
                                                        b: 46
                                                    }, {
                                                        y: 'Nov',
                                                        a: 35,
                                                        b: 42
                                                    }, {
                                                        y: 'Dec',
                                                        a: 72,
                                                        b: 81
                                                    }];
                                                    // See: js/examples/examples.charts.js for more settings.
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xl-4">
                        <div class="card card-modern">
                            <div class="card-body py-4">
                                <div class="row align-items-center">
                                    <div class="col-6 col-md-4">
                                        <h3 class="text-4-1 my-0">Total Customers</h3>
                                        <strong class="text-6 text-color-dark">3872</strong>
                                    </div>
                                    <div
                                        class="col-6 col-md-4 border border-top-0 border-end-0 border-bottom-0 border-color-light-grey py-3">
                                        <h3 class="text-4-1 text-color-success line-height-2 my-0">Customers <strong>UP
                                                &uarr;</strong></h3>
                                        <span>30 days</span>
                                    </div>
                                    <div class="col-md-4 text-start text-md-right pe-md-4 mt-4 mt-md-0">
                                        <i
                                            class="bx bx-user icon icon-inline icon-xl bg-primary rounded-circle text-color-light"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-modern">
                            <div class="card-header">
                                <div class="card-actions">
                                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                                </div>
                                <h2 class="card-title">Recent Activity</h2>
                            </div>
                            <div class="card-body">
                                <ul class="list list-unstyled mb-0">
                                    <li class="activity-item">
                                        <span class="activity-time">1 MIN AGO</span> <i
                                            class="fas fa-chevron-right text-color-primary"></i>
                                        <span class="activity-description">
                                            <a href="#" class="text-color-dark"><strong>John Doe</strong></a>
                                            Added <a href="#" class="text-color-dark"><strong>Black
                                                    Watch</strong></a> to Cart.
                                        </span>
                                    </li>
                                    <li class="activity-item">
                                        <span class="activity-time">2 MIN AGO</span> <i
                                            class="fas fa-chevron-right text-color-primary"></i>
                                        <span class="activity-description">
                                            <a href="#" class="text-color-dark"><strong>Order #123</strong></a>
                                            had payment refused.
                                        </span>
                                    </li>
                                    <li class="activity-item">
                                        <span class="activity-time">3 MIN AGO</span> <i
                                            class="fas fa-chevron-right text-color-primary"></i>
                                        <span class="activity-description">
                                            <a href="#" class="text-color-dark"><strong>Greg Doe</strong></a>
                                            added <a href="#" class="text-color-dark"><strong>Porto
                                                    SmartWatch</strong></a> to Cart.
                                        </span>
                                    </li>
                                    <li class="activity-item">
                                        <span class="activity-time">4 MIN AGO</span> <i
                                            class="fas fa-chevron-right text-color-primary"></i>
                                        <span class="activity-description">
                                            <a href="#" class="text-color-dark"><strong>Order #231</strong></a>
                                            had payment refused.
                                        </span>
                                    </li>
                                    <li class="activity-item">
                                        <span class="activity-time">5 MIN AGO</span> <i
                                            class="fas fa-chevron-right text-color-primary"></i>
                                        <span class="activity-description">
                                            <a href="#" class="text-color-dark"><strong>Monica Doe</strong></a>
                                            added <a href="#" class="text-color-dark"><strong>Porto
                                                    Bag</strong></a> to Cart.
                                        </span>
                                    </li>
                                </ul>
                                <a href="#"
                                    class="btn btn-light btn-xl border font-weight-semibold text-color-dark text-3 mt-3">View
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 pt-2 pt-lg-0 mt-4 mt-lg-0">
                        <div class="card card-modern">
                            <div class="card-header">
                                <div class="card-actions">
                                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                                </div>
                                <h2 class="card-title">Top 5 Selling Products</h2>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-ecommerce-simple table-borderless table-striped mb-1">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Product Name</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td width="72"><a href="#"><img
                                                            src="img/products/product-1.jpg" class="img-fluid"
                                                            width="45" alt="Porto SmartWatch" /></a></td>
                                                <td><a href="#" class="font-weight-semibold">Product Short
                                                        Name Example</a></td>
                                                <td width="90">$15</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><img src="img/products/product-2.jpg"
                                                            class="img-fluid" width="45"
                                                            alt="Porto SmartWatch" /></a></td>
                                                <td><a href="#" class="font-weight-semibold">Product Short
                                                        Name Example</a></td>
                                                <td>$15</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><img src="img/products/product-3.jpg"
                                                            class="img-fluid" width="45"
                                                            alt="Porto SmartWatch" /></a></td>
                                                <td><a href="#" class="font-weight-semibold">Product Short
                                                        Name Example</a></td>
                                                <td>$15</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><img src="img/products/product-4.jpg"
                                                            class="img-fluid" width="45"
                                                            alt="Porto SmartWatch" /></a></td>
                                                <td><a href="#" class="font-weight-semibold">Product Short
                                                        Name Example</a></td>
                                                <td>$15</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><img src="img/products/product-5.jpg"
                                                            class="img-fluid" width="45"
                                                            alt="Porto SmartWatch" /></a></td>
                                                <td><a href="#" class="font-weight-semibold">Product Short
                                                        Name Example</a></td>
                                                <td>$15</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-4 pt-2 pt-xl-0 mt-4 mt-xl-0">
                        <div class="card card-modern">
                            <div class="card-header">
                                <div class="card-actions">
                                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                                </div>
                                <h2 class="card-title">Customers By Location</h2>
                            </div>
                            <div class="card-body">
                                <label>Los Angeles (69.992)</label>
                                <div class="progress progress-xs mb-4 light rounded-0">
                                    <div class="progress-bar progress-bar-primary rounded-0" role="progressbar"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 50%;">
                                        <span class="sr-only">50%</span>
                                    </div>
                                </div>
                                <label>Miami (41.953)</label>
                                <div class="progress progress-xs mb-4 light rounded-0">
                                    <div class="progress-bar progress-bar-info rounded-0" role="progressbar"
                                        aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 35%;">
                                        <span class="sr-only">35%</span>
                                    </div>
                                </div>
                                <label>New York (23.307)</label>
                                <div class="progress progress-xs mb-4 light rounded-0">
                                    <div class="progress-bar progress-bar-primary rounded-0" role="progressbar"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 25%;">
                                        <span class="sr-only">25%</span>
                                    </div>
                                </div>
                                <label>Chicago (20.200)</label>
                                <div class="progress progress-xs mb-4 light rounded-0">
                                    <div class="progress-bar progress-bar-info rounded-0" role="progressbar"
                                        aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 22%;">
                                        <span class="sr-only">22%</span>
                                    </div>
                                </div>
                                <label>Detroit (19.550)</label>
                                <div class="progress progress-xs mb-5 light rounded-0">
                                    <div class="progress-bar progress-bar-primary rounded-0" role="progressbar"
                                        aria-valuenow="19" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 19%;">
                                        <span class="sr-only">19%</span>
                                    </div>
                                </div>
                                <a href="#"
                                    class="btn btn-light btn-xl border font-weight-semibold text-color-dark text-3 mb-4">View
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card card-modern card-modern-table-over-header">
                            <div class="card-header">
                                <div class="card-actions">
                                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                                </div>
                                <h2 class="card-title">Recent Orders</h2>
                            </div>
                            <div class="card-body">
                                <div class="datatables-header-footer-wrapper">
                                    <div class="datatable-header">
                                        <div class="row align-items-center mb-3">
                                            <div class="col-8 col-lg-auto ms-auto ml-auto mb-3 mb-lg-0">
                                                <div class="d-flex align-items-lg-center flex-column flex-lg-row">
                                                    <label class="ws-nowrap me-3 mb-0">Filter By:</label>
                                                    <select class="form-control select-style-1 filter-by"
                                                        name="filter-by">
                                                        <option value="all" selected>All</option>
                                                        <option value="1">ID</option>
                                                        <option value="2">Customer Name</option>
                                                        <option value="3">Date</option>
                                                        <option value="4">Total</option>
                                                        <option value="5">Status</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-auto ps-lg-1 mb-3 mb-lg-0">
                                                <div class="d-flex align-items-lg-center flex-column flex-lg-row">
                                                    <label class="ws-nowrap me-3 mb-0">Show:</label>
                                                    <select class="form-control select-style-1 results-per-page"
                                                        name="results-per-page">
                                                        <option value="12" selected>12</option>
                                                        <option value="24">24</option>
                                                        <option value="36">36</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-auto ps-lg-1">
                                                <div class="search search-style-1 search-style-1-lg mx-lg-auto">
                                                    <div class="input-group">
                                                        <input type="text" class="search-term form-control"
                                                            name="search-term" id="search-term"
                                                            placeholder="Search Order">
                                                        <button class="btn btn-default" type="submit"><i
                                                                class="bx bx-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-ecommerce-simple table-borderless table-striped mb-0"
                                        id="datatable-ecommerce-list" style="min-width: 640px;">
                                        <thead>
                                            <tr>
                                                <th width="3%"><input type="checkbox" name="select-all"
                                                        class="select-all checkbox-style-1 p-relative top-2"
                                                        value="" /></th>
                                                <th width="8%">ID</th>
                                                <th width="28%">Customer Name</th>
                                                <th width="18%">Date</th>
                                                <th width="18%">Total</th>
                                                <th width="15%">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td width="30"><input type="checkbox" name="checkboxRow1"
                                                        class="checkbox-style-1 p-relative top-2" value="" />
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>191</strong></a>
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>Customer Name
                                                            Example</strong></a></td>
                                                <td>Nov 21, 2019</td>
                                                <td>$200</td>
                                                <td><span class="ecommerce-status on-hold">On Hold</span></td>
                                            </tr>
                                            <tr>
                                                <td width="30"><input type="checkbox" name="checkboxRow1"
                                                        class="checkbox-style-1 p-relative top-2" value="" />
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>192</strong></a>
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>Customer Name
                                                            Example 2</strong></a></td>
                                                <td>Nov 22, 2019</td>
                                                <td>$70</td>
                                                <td><span class="ecommerce-status on-hold">On Hold</span></td>
                                            </tr>
                                            <tr>
                                                <td width="30"><input type="checkbox" name="checkboxRow1"
                                                        class="checkbox-style-1 p-relative top-2" value="" />
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>193</strong></a>
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>Customer Name
                                                            Example 3</strong></a></td>
                                                <td>Nov 23, 2019</td>
                                                <td>$20</td>
                                                <td><span class="ecommerce-status processing">Processing</span></td>
                                            </tr>
                                            <tr>
                                                <td width="30"><input type="checkbox" name="checkboxRow1"
                                                        class="checkbox-style-1 p-relative top-2" value="" />
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>194</strong></a>
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>Customer Name
                                                            Example 4</strong></a></td>
                                                <td>Nov 24, 2019</td>
                                                <td>$399</td>
                                                <td><span class="ecommerce-status on-hold">On Hold</span></td>
                                            </tr>
                                            <tr>
                                                <td width="30"><input type="checkbox" name="checkboxRow1"
                                                        class="checkbox-style-1 p-relative top-2" value="" />
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>195</strong></a>
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>Customer Name
                                                            Example 5</strong></a></td>
                                                <td>Nov 25, 2019</td>
                                                <td>$1.000</td>
                                                <td><span class="ecommerce-status processing">Processing</span></td>
                                            </tr>
                                            <tr>
                                                <td width="30"><input type="checkbox" name="checkboxRow1"
                                                        class="checkbox-style-1 p-relative top-2" value="" />
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>196</strong></a>
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>Customer Name
                                                            Example 6</strong></a></td>
                                                <td>Nov 26, 2019</td>
                                                <td>$1.300</td>
                                                <td><span class="ecommerce-status on-hold">On Hold</span></td>
                                            </tr>
                                            <tr>
                                                <td width="30"><input type="checkbox" name="checkboxRow1"
                                                        class="checkbox-style-1 p-relative top-2" value="" />
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>197</strong></a>
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>Customer Name
                                                            Example 7</strong></a></td>
                                                <td>Nov 27, 2019</td>
                                                <td>$50</td>
                                                <td><span class="ecommerce-status processing">Processing</span></td>
                                            </tr>
                                            <tr>
                                                <td width="30"><input type="checkbox" name="checkboxRow1"
                                                        class="checkbox-style-1 p-relative top-2" value="" />
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>198</strong></a>
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>Customer Name
                                                            Example 8</strong></a></td>
                                                <td>Nov 28, 2019</td>
                                                <td>$879</td>
                                                <td><span class="ecommerce-status on-hold">On Hold</span></td>
                                            </tr>
                                            <tr>
                                                <td width="30"><input type="checkbox" name="checkboxRow1"
                                                        class="checkbox-style-1 p-relative top-2" value="" />
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>199</strong></a>
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>Customer Name
                                                            Example 9</strong></a></td>
                                                <td>Nov 29, 2019</td>
                                                <td>$621</td>
                                                <td><span class="ecommerce-status completed">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td width="30"><input type="checkbox" name="checkboxRow1"
                                                        class="checkbox-style-1 p-relative top-2" value="" />
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>200</strong></a>
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>Customer Name
                                                            Example 10</strong></a></td>
                                                <td>Nov 30, 2019</td>
                                                <td>$245</td>
                                                <td><span class="ecommerce-status canceled">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td width="30"><input type="checkbox" name="checkboxRow1"
                                                        class="checkbox-style-1 p-relative top-2" value="" />
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>201</strong></a>
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>Customer Name
                                                            Example 11</strong></a></td>
                                                <td>Nov 11, 2019</td>
                                                <td>$178</td>
                                                <td><span class="ecommerce-status completed">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td width="30"><input type="checkbox" name="checkboxRow1"
                                                        class="checkbox-style-1 p-relative top-2" value="" />
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>202</strong></a>
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>Customer Name
                                                            Example 12</strong></a></td>
                                                <td>Nov 12, 2019</td>
                                                <td>$63</td>
                                                <td><span class="ecommerce-status canceled">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td width="30"><input type="checkbox" name="checkboxRow1"
                                                        class="checkbox-style-1 p-relative top-2" value="" />
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>203</strong></a>
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>Customer Name
                                                            Example 13</strong></a></td>
                                                <td>Nov 13, 2019</td>
                                                <td>$91</td>
                                                <td><span class="ecommerce-status on-hold">On Hold</span></td>
                                            </tr>
                                            <tr>
                                                <td width="30"><input type="checkbox" name="checkboxRow1"
                                                        class="checkbox-style-1 p-relative top-2" value="" />
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>204</strong></a>
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>Customer Name
                                                            Example 14</strong></a></td>
                                                <td>Nov 14, 2019</td>
                                                <td>$568</td>
                                                <td><span class="ecommerce-status processing">Processing</span></td>
                                            </tr>
                                            <tr>
                                                <td width="30"><input type="checkbox" name="checkboxRow1"
                                                        class="checkbox-style-1 p-relative top-2" value="" />
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>205</strong></a>
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>Customer Name
                                                            Example 15</strong></a></td>
                                                <td>Nov 15, 2019</td>
                                                <td>$796</td>
                                                <td><span class="ecommerce-status on-hold">On Hold</span></td>
                                            </tr>
                                            <tr>
                                                <td width="30"><input type="checkbox" name="checkboxRow1"
                                                        class="checkbox-style-1 p-relative top-2" value="" />
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>206</strong></a>
                                                </td>
                                                <td><a href="ecommerce-orders-detail.html"><strong>Customer Name
                                                            Example 16</strong></a></td>
                                                <td>Nov 16, 2019</td>
                                                <td>$213</td>
                                                <td><span class="ecommerce-status completed">Completed</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <hr class="solid mt-5 opacity-4">
                                    <div class="datatable-footer">
                                        <div class="row align-items-center justify-content-between mt-3">
                                            <div class="col-md-auto order-1 mb-3 mb-lg-0">
                                                <div class="d-flex align-items-stretch">
                                                    <div class="d-grid gap-3 d-md-flex justify-content-md-end me-4">
                                                        <select class="form-control select-style-1 bulk-action"
                                                            name="bulk-action" style="min-width: 170px;">
                                                            <option value="" selected>Bulk Actions</option>
                                                            <option value="delete">Delete</option>
                                                        </select>
                                                        <a href="ecommerce-orders-detail.html"
                                                            class="bulk-action-apply btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Apply</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-auto text-center order-3 order-lg-2">
                                                <div class="results-info-wrapper"></div>
                                            </div>
                                            <div class="col-lg-auto order-2 order-lg-3 mb-3 mb-lg-0">
                                                <div class="pagination-wrapper"></div>
                                            </div>
                                        </div>
                                    </div>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end: page -->
            </section>
        </div>
        <aside id="sidebar-right" class="sidebar-right">
            <div class="nano">
                <div class="nano-content">
                    <a href="#" class="mobile-close d-md-none">
                        Collapse <i class="fas fa-chevron-right"></i>
                    </a>
                    <div class="sidebar-right-wrapper">
                        <div class="sidebar-widget widget-calendar">
                            <h6>Upcoming Tasks</h6>
                            <div data-plugin-datepicker data-plugin-skin="dark"></div>
                            <ul>
                                <li>
                                    <time datetime="2023-04-19T00:00+00:00">04/19/2023</time>
                                    <span>Company Meeting</span>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-widget widget-friends">
                            <h6>Friends</h6>
                            <ul>
                                <li class="status-online">
                                    <figure class="profile-picture">
                                        <img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                                <li class="status-online">
                                    <figure class="profile-picture">
                                        <img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                                <li class="status-offline">
                                    <figure class="profile-picture">
                                        <img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                                <li class="status-offline">
                                    <figure class="profile-picture">
                                        <img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </section>
    <!-- Vendor -->
    <script src="{{ asset('vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
    <script src="{{ asset('vendor/popper/umd/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('vendor/common/common.js') }}"></script>
    <script src="{{ asset('vendor/nanoscroller/nanoscroller.js') }}"></script>
    <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

    <!-- Specific Page Vendor -->
    <script src="{{ asset('vendor/raphael/raphael.js') }}"></script>
    <script src="{{ asset('vendor/morris/morris.js') }}"></script>
    <script src="{{ asset('vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/media/js/dataTables.bootstrap5.min.js') }}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('js/theme.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('js/custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('js/theme.init.js') }}"></script>

    <!-- Examples -->
    <script src="{{ asset('js/examples/examples.header.menu.js') }}"></script>
    <script src="{{ asset('js/examples/examples.ecommerce.dashboard.js') }}"></script>
    <script src="{{ asset('js/examples/examples.ecommerce.datatables.list.js') }}"></script>
</body>

</html>
