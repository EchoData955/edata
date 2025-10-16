@extends('layouts.app')
@section('title', __('messages.cases'))

@section('content')
<section class="max-w-7xl mx-auto px-4 py-12">
  <header class="mb-8 text-center md:text-start">
    <h1 class="text-3xl md:text-4xl font-extrabold text-[#1EA8A8]">
      {{ __('messages.cases') }}
    </h1>
    <p class="text-gray-600 mt-2">
      {{ __('messages.cases_intro') }}
    </p>
  </header>

  @php
    // عناصر مختلفة كلياً عن الرئيسية
    $cases = [
      ['t'=>'case_marketing_title',    'd'=>'case_marketing_desc',    'img'=>'https://images.unsplash.com/photo-1556761175-b413da4baf72?q=80&w=1200&auto=format&fit=crop'], // Marketing
      ['t'=>'case_supply_title',       'd'=>'case_supply_desc',       'img'=>'https://images.unsplash.com/photo-1510812431401-41d2bd2722f3?q=80&w=1200&auto=format&fit=crop'], // Supply chain
      ['t'=>'case_churn_title',        'd'=>'case_churn_desc',        'img'=>'https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1200&auto=format&fit=crop'], // Churn ML
      ['t'=>'case_sales_title',        'd'=>'case_sales_desc',        'img'=>'https://images.unsplash.com/photo-1551281044-8a5f04635942?q=80&w=1200&auto=format&fit=crop'], // Sales BI
      ['t'=>'case_health_title',       'd'=>'case_health_desc',       'img'=>'https://images.unsplash.com/photo-1579154204601-01588f351e67?q=80&w=1200&auto=format&fit=crop'], // Healthcare
      ['t'=>'case_logistics_title',    'd'=>'case_logistics_desc',    'img'=>'https://images.unsplash.com/photo-1529070538774-1843cb3265df?q=80&w=1200&auto=format&fit=crop'], // Logistics routes
    ];
  @endphp

  <div class="grid md:grid-cols-3 gap-6">
    @foreach ($cases as $c)
      <article class="bg-white rounded-2xl overflow-hidden border transition hover:shadow-md hover:-translate-y-0.5 hover:border-[#1EA8A8]">
        <img src="{{ $c['img'] }}" alt="" class="w-full h-44 object-cover" loading="lazy" decoding="async">
        <div class="p-4">
          <h3 class="font-bold mb-1 text-[#1EA8A8]">{{ __('messages.'.$c['t']) }}</h3>
          <p class="text-sm text-gray-600 leading-relaxed">{{ __('messages.'.$c['d']) }}</p>
        </div>
      </article>
    @endforeach
  </div>
</section>
@endsection
