@extends('layouts.app')
@section('title', __('messages.about'))

@section('content')
<section class="max-w-7xl mx-auto px-4 py-12">
  <header class="mb-10 text-center md:text-start">
    <h1 class="text-3xl md:text-4xl font-extrabold text-[#1EA8A8]">
      {{ __('messages.about_us') }}
    </h1>
    <p class="text-gray-600 mt-2">
      {{ __('messages.about_desc') }}
    </p>
  </header>

  <div class="grid md:grid-cols-2 gap-8 items-start">

    {{-- نقاط لماذا نحن - عبر الترجمة --}}
    <div class="bg-white rounded-2xl p-6 border">
      <ul class="list-disc pr-5 text-sm text-gray-700 space-y-2 leading-relaxed">
        <li>{!! __('messages.about_points.1') !!}</li>
        <li>{!! __('messages.about_points.2') !!}</li>
        <li>{!! __('messages.about_points.3') !!}</li>
        <li>{!! __('messages.about_points.4') !!}</li>
        <li>{!! __('messages.about_points.5') !!}</li>
      </ul>
    </div>

    {{-- الإحصاءات - نصوص عبر الترجمة --}}
    <div class="grid grid-cols-2 gap-4 auto-rows-[9rem] md:auto-rows-[10rem]">

      <div class="rounded-2xl bg-white border p-4 flex flex-col items-center justify-center text-center shadow-sm hover:shadow-md transition">
        <div class="text-3xl md:text-4xl font-extrabold text-[#1EA8A8] leading-none">
          <span data-counter data-to="92" data-suffix="%">0</span>
        </div>
        <div class="text-xs text-gray-500 mt-1">{{ __('messages.stats_satisfaction') }}</div>
      </div>

      <div class="rounded-2xl bg-white border p-4 flex flex-col items-center justify-center text-center shadow-sm hover:shadow-md transition">
        <div class="text-3xl md:text-4xl font-extrabold text-[#1EA8A8] leading-none">
          <span data-counter data-to="15" data-suffix="+">0</span>
        </div>
        <div class="text-xs text-gray-500 mt-1">{{ __('messages.stats_projects') }}</div>
      </div>

      <div class="rounded-2xl bg-white border p-4 flex flex-col items-center justify-center text-center shadow-sm hover:shadow-md transition">
        <div class="text-xl md:text-2xl font-extrabold text-[#1EA8A8] leading-none">
          {{ __('messages.stats_delivery') }}
        </div>
      </div>

      <div class="rounded-2xl bg-white border p-4 flex flex-col items-center justify-center text-center shadow-sm hover:shadow-md transition">
        <div class="text-3xl md:text-4xl font-extrabold text-[#1EA8A8] leading-none">
          <span data-counter data-to="4">0</span>
        </div>
        <div class="text-xs text-gray-500 mt-1">{{ __('messages.stats_sectors') }}</div>
      </div>

    </div>
  </div>
</section>
@endsection
