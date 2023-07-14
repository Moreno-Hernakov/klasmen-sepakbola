<!-- BEGIN: Side Menu -->
<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <span class="hidden xl:block text-white text-lg ml-3">
            bolakubet.com
        </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="{{ route('club.index') }}" class="side-menu @yield('club')">
                <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                <div class="side-menu__title">Club</div>
            </a>
        </li>
        <li>
            <a href="{{ route('history.index') }}" class="side-menu @yield('history')">
                <div class="side-menu__icon"> <i data-lucide="user"></i> </div>
                <div class="side-menu__title">history</div>
            </a>
        </li>
       
            
    </ul>
</nav>
<!-- END: Side Menu -->