<div class="w-full bg-[rgb(238,184,148)] h-[50px] main--content">
    <div class="header--wrapper sticky-header flex w-full justify-between">
        @inject('Time', 'App\Services\Time')
        @inject('Image', 'App\Services\Image')
        <div class="header--title text-center ml-[60px]">
            <span class="text-[20px] font-bold">{{ $Time->getGreeting() }}, {{ Auth::user()->name }}</span>
            <h2 class="font-semibold text-xl">@yield('function')</h2>
        </div>
        <div class="flex justify-end mt-2 pt-0">
            <div class="dropdown mr-4">
                <button class="btn btn-secondary p-0 rounded-circle overflow-hidden" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ $Image->imagePublisher(Auth::user()->avatar ?? 'MENU') }}"
                        class="img-fluid rounded-circle" style="width: 40px; height: 40px; object-fit: cover;" />
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('admin.profile')}}">Profile</a></li>
                    <li><a class="dropdown-item" href="{{route('admin.settings')}}">Setting</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
