@php
$menus = DB::table('menus')->get();
$menu_arr = array();
@endphp

@foreach($menus as $row)
    @php
        $menu_arr[$row->menu_name] = $row->menu_status;
    @endphp
@endforeach

<!-- Start Navbar Area -->
<div class="navbar-area" id="stickymenu">

    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="" class="logo">
            <img src="{{ asset('uploads/'.$g_setting->logo) }}" alt="">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('uploads/'.$g_setting->logo) }}" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                        @if($menu_arr['Home'] == 'Show')
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">{{ MENU_HOME }}</a>
                        </li>
                        @endif

                        @if($menu_arr['About'] == 'Show')
                        <li class="nav-item">
                            <a href="{{ route('front.about') }}" class="nav-link ">{{ MENU_ABOUT }}</a>
                        </li>
                        @endif

                        @if($menu_arr['Services'] == 'Show')
                        <li class="nav-item">
                            <a href="{{ route('front.services') }}" class="nav-link ">Products</a>
                        </li>
                        @endif

                        @if($menu_arr['Shop'] == 'Show')
                        <li class="nav-item">
                            <a href="{{ route('front.shop') }}" class="nav-link ">{{ MENU_SHOP }}</a>
                        </li>
                        @endif

                        @if($menu_arr['Blog'] == 'Show')
                        <li class="nav-item">
                            <a href="{{ route('front.blogs') }}" class="nav-link ">{{ MENU_BLOG }}</a>
                        </li>
                        @endif

                        @php
                            $dynamic_pages = DB::table('dynamic_pages')->get();
                        @endphp

                        @if(
                        ($menu_arr['Career'] == 'Hide') &&
                        ($menu_arr['Project'] == 'Hide') &&
                        ($menu_arr['Photo Gallery'] == 'Hide') &&
                        ($menu_arr['Video Gallery'] == 'Hide') &&
                        ($menu_arr['FAQ'] == 'Hide') &&
                        ($menu_arr['Team Members'] == 'Hide') &&
                        (!$dynamic_pages)
                        )

                        @else
                             @if($menu_arr['Photo Gallery'] == 'Show')
                                <li class="nav-item">
                                    <a href="{{ route('front.photo_gallery') }}" class="nav-link">Certificates</a>
                                </li>
                                @endif                        @endif


                        @if($menu_arr['Contact'] == 'Show')
                        <li class="nav-item">
                            <a href="{{ route('front.contact') }}" class="nav-link ">{{ MENU_CONTACT }}</a>
                        </li>
                        @endif

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->
