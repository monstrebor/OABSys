<div class="sidebar">
    @inject('Image', 'App\Services\Image')
    <ul class="nav flex-column">
        <span class="text-center text-[70px] text-[rgb(255,173,65)]">O.B.S</span>
        <div class="w-full flex justify-center">
            <span>
                <img src="{{ $Image->imagePublisher(Auth::user()->avatar ?? 'MENU') }}" class="img-fluid rounded-circle"
                    style="width: 40px; height: 40px; object-fit: cover;" />
            </span>
            <span>Name:</span>
        </div>
        <hr class="mt-20 bg-[rgb(238,184,148)] p-1">
        <div class="font-bold">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-home"></i> <span>Dashboard</span></a>
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
