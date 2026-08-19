<div class="w-full bg-slate-400 h-[50px]">
    <div class="flex justify-end">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</div>
