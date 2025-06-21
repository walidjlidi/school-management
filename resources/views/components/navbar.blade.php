<nav class="bg-white border-b flex items-center justify-between h-14 px-4">
    <div class="flex items-center space-x-2 rtl:space-x-reverse">
        <button id="sidebarToggle" class="sm:hidden text-gray-600"><i class="fa fa-bars"></i></button>
        <h1 class="font-bold text-lg">@yield('page-title', 'لوحة التحكم')</h1>
    </div>
    <div class="flex items-center space-x-4 rtl:space-x-reverse" x-data="{ langOpen: false }">
        <div class="relative">
            <button @click="langOpen = !langOpen" class="flex items-center text-gray-700">
                <span>العربية</span>
                <i class="fa fa-chevron-down mx-1 text-xs"></i>
            </button>
            <div x-show="langOpen" @click.away="langOpen=false" class="absolute right-0 mt-2 bg-white border rounded shadow">
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">العربية</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">English</a>
            </div>
        </div>
        <div class="flex items-center space-x-2 rtl:space-x-reverse">
            <i class="fa fa-user text-gray-600"></i>
            <span>directeur</span>
            <a href="#" class="text-red-600"><i class="fa fa-sign-out-alt"></i></a>
        </div>
    </div>
</nav>
