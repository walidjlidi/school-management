@extends('layouts.dashboard')
@section('page-title', 'مكتبة الفيديو')
@section('content')
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
    <x-metric-card icon="fa fa-star" :count="$featured" label="الفيديوهات المميزة" />
    <x-metric-card icon="fa fa-tags" :count="$categories" label="التصنيفات" />
    <x-metric-card icon="fa fa-eye" :count="$views" label="إجمالي المشاهدات" />
    <x-metric-card icon="fa fa-video" :count="$videos" label="إجمالي الفيديوهات" />
</div>
<h2 class="font-bold mb-2">تصفية حسب التصنيف</h2>
<div class="flex space-x-2 rtl:space-x-reverse overflow-x-auto mb-4">
    @foreach($filters as $filter)
        <x-filter-pill :active="$activeFilter === $filter">{{ $filter }}</x-filter-pill>
    @endforeach
</div>
<div class="flex justify-between items-center mb-4">
    <div class="relative w-1/2 max-w-xs">
        <input type="text" placeholder="ابحث في الفيديوهات" class="border rounded w-full px-3 py-1 pr-8">
        <i class="fa fa-search absolute top-2.5 right-3 text-gray-400"></i>
    </div>
    <x-video-modal />
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach($videoList as $video)
        <x-video-card :title="$video['title']" :thumbnail="$video['thumbnail']" />
    @endforeach
</div>
@endsection
