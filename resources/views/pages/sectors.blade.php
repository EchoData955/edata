@extends('layouts.app')
@section('title', __('messages.sectors'))

@section('content')
<section class="max-w-7xl mx-auto px-4 py-12">
  {{-- العنوان والوصف --}}
  <header class="mb-10 text-center md:text-start">
    <h1 class="text-3xl md:text-4xl font-extrabold text-[#1EA8A8]">
      {{ __('messages.sectors_title') }}
    </h1>
    <p class="text-gray-600 mt-2">
      {{ __('messages.sectors_intro') }}
    </p>
  </header>

  {{-- كروت القطاعات (محتوى جديد) --}}
  @php
    $items = [
      [
        'title' => 'sector_retail_title',
        'desc'  => 'sector_retail_desc',
        'bul'   => ['sector_retail_b1','sector_retail_b2','sector_retail_b3'],
      ],
      [
        'title' => 'sector_education_title',
        'desc'  => 'sector_education_desc',
        'bul'   => ['sector_edu_b1','sector_edu_b2','sector_edu_b3'],
      ],
      [
        'title' => 'sector_health_title',
        'desc'  => 'sector_health_desc',
        'bul'   => ['sector_health_b1','sector_health_b2','sector_health_b3'],
      ],
      [
        'title' => 'sector_logistics_title',
        'desc'  => 'sector_logistics_desc',
        'bul'   => ['sector_log_b1','sector_log_b2','sector_log_b3'],
      ],
    ];
  @endphp

  <div class="grid md:grid-cols-2 gap-6">
    @foreach ($items as $s)
      <article class="bg-white border rounded-2xl p-6 transition hover:shadow-md hover:-translate-y-0.5 hover:border-[#1EA8A8]">
        <h3 class="text-xl font-bold mb-1 text-[#1EA8A8]">{{ __('messages.'.$s['title']) }}</h3>
        <p class="text-gray-600 mb-3">{{ __('messages.'.$s['desc']) }}</p>
        <ul class="list-disc pr-5 text-sm text-gray-700 space-y-1">
          @foreach ($s['bul'] as $b)
            <li>{{ __('messages.'.$b) }}</li>
          @endforeach
        </ul>
      </article>
    @endforeach
  </div>

  {{-- CTA مختصر --}}
  <div class="text-center mt-10">
    <a href="{{ route('contact') }}"
       class="inline-flex items-center justify-center px-5 py-3 rounded-xl bg-[#1EA8A8] text-white hover:opacity-90 transition">
      {{ __('messages.contact') }} — {{ __('messages.book') }}
    </a>
  </div>
</section>
@endsection
