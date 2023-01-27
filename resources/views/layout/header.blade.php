

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            <img src="{{url('assets/img/logo-qwords1.png')}}" alt="" style="background-image:transparant">
            <span>{{$heder}}</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li class="dropdown"><a href="#"><span>Hosting</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>Cloud Hosting</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                @foreach($menu as $menu)
                                <li><a href="{{$menu['link']}}">{{$menu['title']}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Domain</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                @foreach($menu1 as $menu1)
                                <li><a href="{{$menu1['link']}}">{{$menu1['title']}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Performances</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                @foreach($menu2 as $menu2)
                                <li><a href="{{$menu2['link']}}">{{$menu2['title']}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Internet Access</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        @foreach($menu3 as $menu3)
                        <li><a href="{{$menu3['link']}}">{{$menu3['title']}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Server</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        @foreach($menu4 as $menu4)
                        <li><a href="{{$menu4['link']}}">{{$menu4['title']}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Email Suite</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        @foreach($menu5 as $menu5)
                        <li><a href="{{$menu5['link']}}">{{$menu5['title']}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Others</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                @foreach($menu6 as $menu6)
                                <li><a href="{{$menu6['link']}}">{{$menu6['title']}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Customer Care</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                @foreach($menu7 as $menu7)
                                <li><a href="{{$menu7['link']}}">{{$menu7['title']}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                <li><a class="nav-link scrollto" href="https://www.qwords.com/promo/">Promo</a></li>
                <li class="dropdown" style="backgorund-color:red"><a href="#"><span><i class="ri-lock-2-line"></i> Login</span></a>
                    <ul>
                        @foreach($menu8 as $menu8)
                        <li><a href="{{$menu8['link']}}">{{$menu8['title']}}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->