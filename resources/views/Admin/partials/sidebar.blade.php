<div class="sidebar">
    @inject('Image', 'App\Services\Image')
    <ul class="nav flex-column">
        <span class="text-center text-[70px] text-[rgb(255,173,65)]">O.B.S</span>
        <div class="grid place-items-center h-32">
            <div class=" flex flex-col items-center">
                <img src="{{ asset('image/image.png') }}" class="sidebar_div img-fluid rounded-full w-20 h-20 object-cover" />
                <span class="mt-2">Name:</span>
            </div>
        </div>
        <hr class="sidebar_div mt-20 bg-[rgb(238,184,148)] p-1">
        <div class="font-bold">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.home') }}"><i class="fas fa-home"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-user"></i> <span>Profile</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-cog"></i> <span>Settings</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#"><i class="fas fa-ban"></i> <span>Disabled</span></a>
            </li>
        </div>
    </ul>
</div>
