
@extends('layouts.app')

@section('title', 'МИДиС — Блог')

@section('content')
    <section id="blog" class="blog-hero section ml-[-150px] mt-[150px] mb-[50px]">
        <div class="wrap">
            <h1 class="hero__title hero__title--gradient">Блог</h1>
        </div>
    </section> 

    <section class="blog-list wrap grid grid-cols-3  gap-x-40 gap-y-10 max-w-[1300px]">
    @for($i=0; $i < 4; $i++)
    @foreach ($cards as $card)
    <div class="flex flex-col justify-between w-[420px] h-[560px] border border-white rounded-[40px] p-5 box-border">
        <img src="{{ asset($card->path_img) }}" alt="{{ $card->title }}" class="rounded-[40px]">
        <div>
            <p class="author-blog">{{ $card->author }}</p>
            <p class="title-blog">{{ $card->title }}</p>
            <p class="description-blog">{{ $card->description }}</p>
        </div>
        <p class="hashtags-blog">{{ $card->hashtag}}</p>
    </div>
    @endforeach
    @endfor
</section>
<div class="m-10 flex justify-center items-center space-x-2">
    @if ($cards->onFirstPage())
        <button disabled class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-200 text-black cursor-not-allowed">
            ←
        </button>
    @else
        <a href="{{ $cards->previousPageUrl() }}" class="w-10 h-10 flex text-black items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 transition">
            ←
        </a>
    @endif

    @for ($i = 1; $i <= $cards->lastPage(); $i++)
        @if ($i == $cards->currentPage())
            <span class="w-10 h-10 flex items-center justify-center rounded-full bg-gradient-to-r from-red-400 to-yellow-400 text-white font-semibold">
                {{ $i }}
            </span>
        @else
            <a href="{{ $cards->url($i) }}" class="w-10 h-10 flex items-center  justify-center rounded-full border border-gray-300 hover:bg-gray-100 transition">
                {{ $i }}
            </a>
        @endif
    @endfor

    @if ($cards->hasMorePages())
        <a href="{{ $cards->nextPageUrl() }}" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 transition">
            →
        </a>
    @else
        <button disabled class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-200 text-black cursor-not-allowed">
            →
        </button>
    @endif
</div>
    <x-form/>
    <x-footer />
@endsection
