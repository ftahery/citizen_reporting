<!DOCTYPE html>
<html lang="en">
<head>

    @include(('vendorLayouts.meta'))

    <title>{{ $appTitle->title }} - Vendor</title>

    @include('vendorLayouts.css')

    @yield('css')

</head>

<body class="page-body page-fade-only">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->


<div class="main-content">
<div class="row header_top">

    <!-- Profile Info and Notifications -->
    <div class="col-md-6 col-sm-8 clearfix">

        <ul class="user-info pull-left pull-none-xsm" style="margin-top:2px;">

            <!-- Profile Info -->
            <li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('assets/images/thumb-1@2x.png') }}" alt="" class="img-circle" width="44" />
                    {{ $userInfo->username }}
                </a>

              
            </li>

        </ul>


    </div>


    <!-- Raw Links -->
    <div class="col-md-6 col-sm-4 clearfix hidden-xs">

        <ul class="list-inline links-list pull-right">

            <li class="sep"></li>

            <li>
                <a href="{{ url($configName.'/logout') }}">
                    Log Out <i class="entypo-logout right"></i>
                </a>
            </li>
        </ul>

    </div>

</div>
@if (!str_contains($pathURL['path'], 'home'))
<div style="width:100%;margin-bottom:20px;"></div>


<ol class="breadcrumb bc-3" >
   
    <li>
        <a href="{{ url($configName.'/home') }}"><i class="entypo-gauge"></i>Home</a>
    </li>
    
    @yield('breadcrumb')
</ol>
@endif
<h2>@yield('pageheading')</h2>
<br />

   <h2>Sorry, Your Contract Date has expired! Please renew your contract to access this application.</h2>


</div> <!-- /container -->

@include('vendorLayouts.scripts')



@yield('scripts')

    @include('vendorLayouts.bottom')

