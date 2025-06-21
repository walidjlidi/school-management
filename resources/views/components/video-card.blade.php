@props(['title' => '', 'thumbnail' => 'https://via.placeholder.com/300x169'])
<div class="bg-white rounded shadow overflow-hidden relative">
    <img src="{{ $thumbnail }}" alt="{{ $title }}" class="w-full h-40 object-cover">
    <button class="absolute inset-0 flex items-center justify-center text-white bg-black bg-opacity-40 hover:bg-opacity-50">
        <i class="fa fa-play-circle text-4xl"></i>
    </button>
    <div class="p-2">
        <h3 class="text-sm font-medium line-clamp-2">{{ $title }}</h3>
    </div>
</div>
