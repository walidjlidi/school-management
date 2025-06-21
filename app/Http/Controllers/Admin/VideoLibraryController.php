<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class VideoLibraryController extends Controller
{
    public function index(): View
    {
        $videos = [
            ['title' => 'درس تجريبي 1', 'thumbnail' => 'https://via.placeholder.com/300x169'],
            ['title' => 'درس تجريبي 2', 'thumbnail' => 'https://via.placeholder.com/300x169'],
            ['title' => 'درس تجريبي 3', 'thumbnail' => 'https://via.placeholder.com/300x169'],
            ['title' => 'درس تجريبي 4', 'thumbnail' => 'https://via.placeholder.com/300x169'],
            ['title' => 'درس تجريبي 5', 'thumbnail' => 'https://via.placeholder.com/300x169'],
        ];

        $filters = ['الكل', 'القرآن الكريم', 'العقيدة', 'الحديث النبوي'];

        return view('admin.videos.index', [
            'featured' => 2,
            'categories' => count($filters) - 1,
            'views' => 1500,
            'videos' => count($videos),
            'filters' => $filters,
            'activeFilter' => 'الكل',
            'videoList' => $videos,
        ]);
    }
}
