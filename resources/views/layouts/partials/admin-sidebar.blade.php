<div id="adminSidebar" class="bg-gray-800 text-white w-64 space-y-2 py-4 px-2 fixed sm:relative h-full top-0 right-0 transform -translate-x-full sm:translate-x-0 transition-transform duration-200 z-30">
    <nav class="space-y-1">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center px-2 py-2 rounded hover:bg-gray-700 {{ Route::is('admin.dashboard') ? 'bg-gray-700' : '' }}">
            <i class="fa fa-home ml-2"></i>
            <span>لوحة التحكم</span>
        </a>
        <a href="{{ route('admin.students.index') }}" class="flex items-center px-2 py-2 rounded hover:bg-gray-700 {{ Route::is('admin.students.*') ? 'bg-gray-700' : '' }}">
            <i class="fa fa-users ml-2"></i>
            <span>الطلاب</span>
        </a>
        <a href="{{ route('admin.tutors.index') }}" class="flex items-center px-2 py-2 rounded hover:bg-gray-700 {{ Route::is('admin.tutors.*') ? 'bg-gray-700' : '' }}">
            <i class="fa fa-chalkboard-teacher ml-2"></i>
            <span>المعلمين</span>
        </a>
        <a href="{{ route('admin.materials.index') }}" class="flex items-center px-2 py-2 rounded hover:bg-gray-700 {{ Route::is('admin.materials.*') ? 'bg-gray-700' : '' }}">
            <i class="fa fa-book ml-2"></i>
            <span>المواد</span>
        </a>
        <a href="{{ route('admin.users.index') }}" class="flex items-center px-2 py-2 rounded hover:bg-gray-700 {{ Route::is('admin.users.*') ? 'bg-gray-700' : '' }}">
            <i class="fa fa-user ml-2"></i>
            <span>المستخدمون</span>
        </a>
    </nav>
</div>
