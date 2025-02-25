<div>
    {{-- Success is as dangerous as failure. --}}
    <form wire:submit.prevent="registerUser">
        <h3 class="mb-10 text-2xl text-white font-bold font-heading text-center">Register Account</h3>
        <div class="flex items-center pl-6 mb-3 bg-white rounded-full">
            <span class="inline-block font-bold pr-3 py-2 border-r border-gray-50 text-black">
                Name:
            </span>
            <input
                class="w-full pl-4 pr-6 py-4 font-bold placeholder-gray-500 text-black rounded-r-full focus:outline-none"
                wire:model="name" type="text">
        </div>
        @error('name')
            <span class="text-lg bg-white p-1 text-red-500">
                {{ $message }}
            </span>
        @enderror
        <div class="flex items-center pl-6 mb-3 bg-white rounded-full">
            <span class="inline-block pr-3 py-2 border-r border-gray-50">
                <svg class="w-5 h-5" width="20" height="21" viewbox="0 0 20 21" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.29593 0.492188C4.81333 0.492188 2.80078 2.50474 2.80078 4.98734C2.80078 7.46993 4.81333 9.48248 7.29593 9.48248C9.77851 9.48248 11.7911 7.46993 11.7911 4.98734C11.7911 2.50474 9.77851 0.492188 7.29593 0.492188ZM3.69981 4.98734C3.69981 3.00125 5.30985 1.39122 7.29593 1.39122C9.28198 1.39122 10.892 3.00125 10.892 4.98734C10.892 6.97342 9.28198 8.58346 7.29593 8.58346C5.30985 8.58346 3.69981 6.97342 3.69981 4.98734Z"
                        fill="black"></path>
                    <path
                        d="M5.3126 10.3816C2.38448 10.3816 0.103516 13.0524 0.103516 16.2253V19.8214C0.103516 20.0696 0.304772 20.2709 0.55303 20.2709H14.0385C14.2867 20.2709 14.488 20.0696 14.488 19.8214C14.488 19.5732 14.2867 19.3719 14.0385 19.3719H1.00255V16.2253C1.00255 13.4399 2.98344 11.2806 5.3126 11.2806H9.27892C10.5443 11.2806 11.6956 11.9083 12.4939 12.9335C12.6465 13.1293 12.9289 13.1644 13.1248 13.0119C13.3207 12.8594 13.3558 12.5769 13.2033 12.381C12.2573 11.1664 10.8566 10.3816 9.27892 10.3816H5.3126Z"
                        fill="black"></path>
                    <rect x="15" y="15" width="5" height="1" rx="0.5" fill="black"></rect>
                    <rect x="17" y="18" width="5" height="1" rx="0.5" transform="rotate(-90 17 18)"
                        fill="black"></rect>
                </svg>
            </span>
            <input
                class="w-full pl-4 pr-6 py-4 font-bold placeholder-gray-500 text-black rounded-r-full focus:outline-none"
                wire:model='email' type="email" placeholder="example@email.com">
        </div>
        @error('email')
            <span class="text-lg bg-white p-1 text-red-500">
                {{ $message }}
            </span>
        @enderror
        <div class="inline-flex mb-10">
            <input class="mr-4" type="checkbox">
            <p class="-mt-2 text-sm text-gray-200">By singning up, you agree to our <a class="text-white"
                    href="#">Terms, Data Policy</a> and <a class="text-white" href="#">Cookies.</a></p>
        </div>
        <button type="submit"
            class="py-4 w-full bg-blue-500 hover:bg-blue-600 text-white font-bold rounded-full transition duration-200">
            Register
        </button>
    </form>
</div>
