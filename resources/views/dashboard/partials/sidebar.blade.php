<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">FMS</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">FMS</a>
        </div>

        <ul class="sidebar-menu">
            <li class="">
                <a href="{{ route('club.index') }}"  class=""><i class="fas fa-fire"></i><span>Club</span></a>
            </li>
            <li class="">
                <a href="{{ route('history.index') }}"  class=""><i class="fas fa-user"></i><span>History</span></a>
            </li>

        </aside>
    </div>

    @push('after-script')
    <script>

        $(document).ready(function() {
            $('#btn-dropdown').on('click', function(e) {
                e.preventDefault();
                let dropdownMenu = $('.dropdown-menu-side');
                if (!dropdownMenu.hasClass('show')) {
                    dropdownMenu.slideDown(500, function() {
                        dropdownMenu.addClass('show');
                    });
                } else {
                    dropdownMenu.slideUp(500, function() {
                        dropdownMenu.removeClass('show');
                    });
                }
            });
        });
    </script>
    @endpush
