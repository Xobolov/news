<div id="slide-out" class="side-nav sn-bg-4 fixed">
    <ul class="custom-scrollbar">

        <!-- Logo -->
        <li class="logo-sn waves-effect py-3">
            <div class="text-center">
                <a href="{{route('panel.dashboard')}}" class="pl-0"><img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png"></a>
            </div>
        </li>

        <!-- Search Form -->
        <li>
            <form class="search-form" role="search">
                <div class="md-form mt-0 waves-light">
                    <input type="text" class="form-control py-2" placeholder="Search">
                </div>
            </form>
        </li>

        <!-- Side navigation links -->
        <li>
            <ul class="collapsible collapsible-accordion">

                <!-- Simple link -->
                <li>
                    <a href="{{route('panel.dashboard')}}" class="collapsible-header waves-effect">
                        <i class="w-fa fas fa-tachometer-alt"></i>Dashboards
                    </a>
                </li>
                <li>
                    <a href="{{route('panel.categories.index')}}" class="collapsible-header waves-effect">
                        <i class="w-fa fas fa-tachometer-alt"></i>Categories
                    </a>
                </li>
                <li>
                    <a href="{{route('panel.posts.index')}}" class="collapsible-header waves-effect">
                        <i class="w-fa fas fa-tachometer-alt"></i>Posts
                    </a>
                </li>

            </ul>
        </li>
        <!-- Side navigation links -->

    </ul>
    <div class="sidenav-bg mask-strong"></div>
</div>
