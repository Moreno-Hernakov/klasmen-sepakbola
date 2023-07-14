 <!-- BEGIN: Top Bar -->
 <div class="top-bar">
     <!-- BEGIN: Breadcrumb -->
     <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="#">Application</a></li>
             <li class="breadcrumb-item active" aria-current="page">{{Route::current()->getName() }}</li>
         </ol>
     </nav>
     <!-- END: Breadcrumb -->
     <!-- BEGIN: Account Menu -->
     <div class="intro-x dropdown w-15 h-8">
         {{-- <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button"
             aria-expanded="false" data-tw-toggle="dropdown">
             @if (auth()->user()->photo_profile)
                 <img alt="Midone - HTML Admin Template" src="{{ asset(auth()->user()->photo_profile) }}">
             @else
                 <img alt="Midone - HTML Admin Template"
                     src="https://ui-avatars.com/api/?size=128&name={{ auth()->user()->name }}">
             @endif
         </div> --}}
         <form action="{{ route('logout') }}" method="POST" class="dropdown-item hover:bg-white/5">
            @csrf
            <button type="submit" name="logout" class="btn-outline-primary px-4 py-2 btn-rounded mr-5">
                Logout</button>
        </form>
         {{-- <div class="dropdown-menu w-56">
            
             <ul class="dropdown-content bg-primary text-white">
                 <li>
                     <form action="{{ route('logout') }}" method="POST" class="dropdown-item hover:bg-white/5">
                         @csrf
                         <button type="submit" name="logout">
                             Logout</button>
                     </form>
                 </li>
             </ul>
         </div> --}}
     </div>
     <!-- END: Account Menu -->
 </div>
 <!-- END: Top Bar -->
