@php
    $segments = collect(request()->segments())->filter(fn($s) => $s !== 'admin' && !is_numeric($s));
    $url = url('/admin');
@endphp
<nav class="text-sm mb-4" aria-label="Breadcrumb">
    <ol class="list-none p-0 flex rtl:space-x-reverse space-x-2">
        <li><a href="{{ route('admin.dashboard') }}" class="text-gray-500 hover:underline">الرئيسية</a></li>
        @foreach($segments as $index => $segment)
            @php $url .= '/' . $segment; @endphp
            <li>
                <span>/</span>
                <a href="{{ $url }}" class="text-gray-500 hover:underline">{{ __(ucfirst($segment)) }}</a>
            </li>
        @endforeach
    </ol>
</nav>
