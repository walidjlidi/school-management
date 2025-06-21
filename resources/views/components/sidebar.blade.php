<div id="sidebar" class="bg-[#1C4636] text-white w-64 space-y-2 py-4 px-2 fixed sm:relative h-full top-0 right-0 transform -translate-x-full sm:translate-x-0 transition-transform duration-200 z-30" x-data="{ videoOpen: false }">
    <nav class="space-y-1">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center px-2 py-2 rounded hover:bg-[#23623F] {{ request()->routeIs('admin.dashboard') ? 'bg-[#23623F]' : '' }}">
            <i class="fa fa-home ml-2"></i>
            <span>لوحة التحكم</span>
        </a>
        <a href="{{ route('admin.students.index') }}" class="flex items-center px-2 py-2 rounded hover:bg-[#23623F] {{ request()->routeIs('admin.students.*') ? 'bg-[#23623F]' : '' }}">
            <i class="fa fa-users ml-2"></i>
            <span>الطلاب</span>
        </a>
        <a href="{{ route('admin.tutors.index') }}" class="flex items-center px-2 py-2 rounded hover:bg-[#23623F] {{ request()->routeIs('admin.tutors.*') ? 'bg-[#23623F]' : '' }}">
            <i class="fa fa-chalkboard-teacher ml-2"></i>
            <span>المعلمين</span>
        </a>
        <a href="{{ route('admin.materials.index') }}" class="flex items-center px-2 py-2 rounded hover:bg-[#23623F] {{ request()->routeIs('admin.materials.*') ? 'bg-[#23623F]' : '' }}">
            <i class="fa fa-book ml-2"></i>
            <span>المواد</span>
        </a>
        <button type="button" @click="videoOpen = !videoOpen" class="w-full flex items-center justify-between px-2 py-2 rounded hover:bg-[#23623F]" :class="{'bg-[#23623F]': videoOpen}">
            <span class="flex items-center">
                <i class="fa fa-film ml-2"></i>
                <span>مكتبة الفيديو</span>
            </span>
            <i :class="videoOpen ? 'fa fa-chevron-up' : 'fa fa-chevron-down'"></i>
        </button>
        <div x-show="videoOpen" class="pl-6 space-y-1">
            <a href="{{ route('admin.videos.index') }}" class="block px-2 py-2 rounded hover:bg-[#23623F] {{ request()->routeIs('admin.videos.index') ? 'bg-[#23623F]' : '' }}">إدارة الفيديوهات</a>
        </div>
        <a href="{{ route('admin.users.index') }}" class="flex items-center px-2 py-2 rounded hover:bg-[#23623F] {{ request()->routeIs('admin.users.*') ? 'bg-[#23623F]' : '' }}">
            <i class="fa fa-user ml-2"></i>
            <span>المستخدمون</span>
        </a>
        <form method="POST" action="{{ route('admin.logout') }}" class="pt-4">
            @csrf
            <button class="w-full flex items-center px-2 py-2 rounded hover:bg-[#23623F] text-left">
                <i class="fa fa-sign-out-alt ml-2"></i>
                <span>خروج</span>
            </button>
        </form>
    </nav>
</div>
