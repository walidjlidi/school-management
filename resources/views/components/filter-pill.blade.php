@props(['active' => false])
<span {{ $attributes->class(['px-3 py-1 rounded-full border text-sm whitespace-nowrap cursor-pointer', $active ? 'bg-green-700 text-white' : 'text-gray-700']) }}>
    {{ $slot }}
</span>
