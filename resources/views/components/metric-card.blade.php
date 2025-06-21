@props(['icon', 'count', 'label'])
<div class="bg-white shadow rounded p-4 flex flex-col items-center justify-center">
    <i class="{{ $icon }} text-3xl text-green-700 mb-2"></i>
    <div class="text-2xl font-bold">{{ $count }}</div>
    <div class="text-gray-600 mt-1">{{ $label }}</div>
</div>
