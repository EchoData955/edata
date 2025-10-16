@extends('layouts.app')

@section('title', __('messages.hero_title'))

@section('content')
{{-- HERO --}}
<section class="max-w-7xl mx-auto px-4 py-16 grid md:grid-cols-2 gap-10 items-center">
  <div>
    <span class="inline-flex items-center gap-2 text-xs bg-[#1EA8A8]/10 text-[#1EA8A8] px-3 py-1 rounded-full mb-3">
      {{ __('messages.ai_analytics') }}
    </span>

    <h1 class="text-3xl md:text-5xl font-bold text-[#1EA8A8] mb-3">
      {{ __('messages.hero_title') }}
    </h1>

    <p class="text-gray-600 text-lg leading-relaxed mb-4">
      {{ __('messages.hero_sub') }}
    </p>

    {{-- شرائط ثقة --}}
    <ul class="flex flex-wrap gap-2 text-sm text-gray-600 mb-6">
      <li class="px-3 py-1 rounded-full border bg-white">🗓️ {{ __('messages.contact_sub') }}</li>
      <li class="px-3 py-1 rounded-full border bg-white">⭐ {{ __('messages.customer_satisfaction') }}</li>
      <li class="px-3 py-1 rounded-full border bg-white">🚀 {{ __('messages.projects_done') }}</li>
    </ul>

    <div class="flex flex-wrap gap-3">
      <a href="{{ route('contact') }}"
         class="px-5 py-3 rounded-xl bg-[#1EA8A8] text-white hover:opacity-90 active:scale-[.98] transition shadow-sm"
         aria-label="{{ __('messages.cta_quote') }}">
         {{ __('messages.cta_quote') }}
      </a>
      <a href="{{ route('services') }}"
         class="px-5 py-3 rounded-xl border hover:border-[#1EA8A8] hover:bg-[#1EA8A8]/10 text-gray-700 transition"
         aria-label="{{ __('messages.cta_services') }}">
         {{ __('messages.cta_services') }}
      </a>
    </div>

    {{-- تلميحة تمرير --}}
    <div class="mt-6 text-sm text-gray-500">
      ✨ {{ app()->getLocale()==='ar' ? 'انزل للأسفل لرؤية الأعمال والدراسات' : 'Scroll to see work samples' }}
    </div>
  </div>

  <div class="h-56 md:h-72 bg-white rounded-2xl shadow relative overflow-hidden">
    <img
      src="{{ asset('images/hero.png') }}"
      alt="{{ app()->getLocale()==='ar' ? 'لقطة توضيحية للوحة تحكم ذكية' : 'Illustrative shot of a smart dashboard' }}"
      class="w-full h-full object-contain"
      width="1000" height="600" loading="eager" decoding="async">
    <div class="absolute bottom-4 {{ app()->getLocale()==='ar' ? 'right-4' : 'left-4' }} bg-white/95 backdrop-blur rounded-xl px-4 py-2 text-sm shadow">
      <span class="font-bold text-[#1EA8A8]">{{ __('messages.improve_costs') }}</span>
      <div class="text-gray-600">{{ __('messages.case_label') }}</div>
    </div>
  </div>
</section>

{{-- القطاعات --}}
<section class="max-w-7xl mx-auto px-4">
  <h2 class="text-2xl font-bold mb-4">{{ __('messages.sectors_title') }}</h2>
  <div class="grid sm:grid-cols-4 gap-3">
    <a class="rounded-xl border bg-white py-4 text-center hover:border-[#1EA8A8]" aria-label="{{ __('messages.retail') }}">{{ __('messages.retail') }}</a>
    <a class="rounded-xl border bg-white py-4 text-center hover:border-[#1EA8A8]" aria-label="{{ __('messages.education') }}">{{ __('messages.education') }}</a>
    <a class="rounded-xl border bg-white py-4 text-center hover:border-[#1EA8A8]" aria-label="{{ __('messages.health') }}">{{ __('messages.health') }}</a>
    <a class="rounded-xl border bg-white py-4 text-center hover:border-[#1EA8A8]" aria-label="{{ __('messages.logistics') }}">{{ __('messages.logistics') }}</a>
  </div>
</section>

{{-- نماذج من الأعمال --}}
<section class="max-w-7xl mx-auto px-4 pt-12">
  <h2 class="text-2xl font-bold mb-4">{{ __('messages.work_samples') }}</h2>

  <div class="grid md:grid-cols-3 gap-6">
    {{-- بطاقة 1 --}}
    <article class="bg-white border rounded-2xl p-4 shadow-sm hover:shadow-md transition flex flex-col justify-between h-full min-h-[420px]">
      <a href="{{ asset('images/food-delivery/cover.jpg') }}" target="_blank" rel="noopener">
        <img
          src="{{ asset('images/food-delivery/cover.jpg') }}"
          alt="{{ __('messages.food_title') }}"
          class="rounded-lg mb-3 w-full h-44 object-cover object-top translate-y-2"
          loading="lazy" width="800" height="350">
      </a>

      <div class="flex-1 flex flex-col justify-between">
        <div>
          <h3 class="font-bold text-lg text-[#1EA8A8] leading-snug">
            {{ __('messages.food_title') }}
          </h3>
          <p class="text-gray-600 text-sm mt-1 line-clamp-3">
            {{ __('messages.food_desc') }}
          </p>
        </div>

        <div class="mt-3 flex flex-wrap gap-2">
          @foreach (['shot-1.jpg','shot-2.jpg','shot-3.jpg'] as $shot)
            <a href="{{ asset('images/food-delivery/'.$shot) }}" target="_blank" rel="noopener" class="block" title="{{ __('messages.view_full') }}">
              <img
                src="{{ asset('images/food-delivery/'.$shot) }}"
                alt="{{ __('messages.food_title') }} - {{ $shot }}"
                class="h-16 w-24 object-cover rounded border"
                loading="lazy" width="200" height="120">
            </a>
          @endforeach
        </div>

        <span class="block text-xs text-gray-500 mt-3">
          {{ __('messages.food_tags') }}
        </span>
      </div>
    </article>

    {{-- بطاقة 2 --}}
    <article class="bg-white border rounded-2xl p-4 shadow-sm hover:shadow-md transition flex flex-col justify-between h-full min-h-[420px]">
      <a href="{{ asset('images/marketing/cover.jpg') }}" target="_blank" rel="noopener">
        <img
          src="{{ asset('images/marketing/cover.jpg') }}"
          alt="{{ __('messages.marketing_title') }}"
          class="rounded-lg mb-3 w-full h-44 object-cover object-top translate-y-2"
          loading="lazy" width="800" height="350">
      </a>

      <div class="flex-1 flex flex-col justify-between">
        <div>
          <h3 class="font-bold text-lg text-[#1EA8A8] leading-snug">
            {{ __('messages.marketing_title') }}
          </h3>
          <p class="text-gray-600 text-sm mt-1 line-clamp-3">
            {{ __('messages.marketing_desc') }}
          </p>
        </div>

        <div class="mt-3 flex flex-wrap gap-2">
          @foreach (['shot-1.jpg'] as $shot)
            <a href="{{ asset('images/marketing/'.$shot) }}" target="_blank" rel="noopener" class="block" title="{{ __('messages.view_full') }}">
              <img
                src="{{ asset('images/marketing/'.$shot) }}"
                alt="{{ __('messages.marketing_title') }} - {{ $shot }}"
                class="h-16 w-24 object-cover rounded border"
                loading="lazy" width="200" height="120">
            </a>
          @endforeach
        </div>

        <span class="block text-xs text-gray-500 mt-3">
          {{ __('messages.marketing_tags') }}
        </span>
      </div>
    </article>

    {{-- بطاقة 3 --}}
    <article class="bg-white border rounded-2xl p-4 shadow-sm hover:shadow-md transition flex flex-col justify-between h-full min-h-[420px]">
      <a href="{{ asset('images/marketing-campaign/cover.jpg') }}" target="_blank" rel="noopener">
        <img
          src="{{ asset('images/marketing-campaign/cover.jpg') }}"
          alt="{{ __('messages.campaign_title') }}"
          class="rounded-lg mb-3 w-full h-44 object-cover object-top translate-y-2"
          loading="lazy" width="800" height="350">
      </a>

      <div class="flex-1 flex flex-col justify-between">
        <div>
          <h3 class="font-bold text-lg text-[#1EA8A8] leading-snug">
            {{ __('messages.campaign_title') }}
          </h3>
          <p class="text-gray-600 text-sm mt-1 line-clamp-3">
            {{ __('messages.campaign_desc') }}
          </p>
        </div>

        <div class="mt-3 flex flex-wrap gap-2">
          @foreach (['shot-1.jpg'] as $shot)
            <a href="{{ asset('images/marketing-campaign/'.$shot) }}" target="_blank" rel="noopener" class="block" title="{{ __('messages.view_full') }}">
              <img
                src="{{ asset('images/marketing-campaign/'.$shot) }}"
                alt="{{ __('messages.campaign_title') }} - {{ $shot }}"
                class="h-16 w-24 object-cover rounded border"
                loading="lazy" width="200" height="120">
            </a>
          @endforeach
        </div>

        <span class="block text-xs text-gray-500 mt-3">
          {{ __('messages.campaign_tags') }}
        </span>
      </div>
    </article>
  </div>
</section>

{{-- خدماتنا --}}
<section class="max-w-7xl mx-auto px-4 pt-12 grid md:grid-cols-3 gap-6">
  <div class="bg-white rounded-2xl p-6 border">
    <h3 class="font-bold mb-2">{{ __('messages.bi_systems') }}</h3>
    <p class="text-sm text-gray-600">{{ __('messages.bi_desc') }}</p>
  </div>

  <div class="bg-white rounded-2xl p-6 border">
    <h3 class="font-bold mb-2">{{ __('messages.ml_models') }}</h3>
    <p class="text-sm text-gray-600">{{ __('messages.ml_desc') }}</p>
  </div>

  <div class="bg-white rounded-2xl p-6 border">
    <h3 class="font-bold mb-2">{{ __('messages.etl_systems') }}</h3>
    <p class="text-sm text-gray-600">{{ __('messages.etl_desc') }}</p>
  </div>
</section>

{{-- من نحن + أرقام --}}
<section class="max-w-7xl mx-auto px-4 pt-12">
  <div class="grid md:grid-cols-3 gap-6 items-stretch" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
    {{-- كرت من نحن --}}
    <div class="rounded-2xl bg-white border p-6 shadow-sm flex flex-col justify-center {{ app()->getLocale() === 'ar' ? 'order-1 md:order-1' : 'order-2 md:order-3' }}">
      <h3 class="text-xl font-bold mb-3">{{ __('messages.about_us') }}</h3>
      <p class="text-gray-600 mb-3">{{ __('messages.about_desc') }}</p>
      <ul class="list-disc pr-5 text-sm text-gray-600 space-y-1">
        <li>{{ __('messages.partners') }}</li>
        <li>{{ __('messages.mvp') }}</li>
        <li>{{ __('messages.docs_training') }}</li>
      </ul>
    </div>

    {{-- شبكة الإحصاءات --}}
    <div class="md:col-span-2 grid grid-cols-2 gap-4 {{ app()->getLocale() === 'ar' ? 'order-2 md:order-2' : 'order-1 md:order-1' }}">
      <div class="rounded-2xl bg-white border p-6 flex flex-col justify-center items-center text-center shadow-sm hover:shadow-md transition">
        <div class="text-4xl font-extrabold text-[#1EA8A8] leading-none">
          <span data-counter data-to="92" data-suffix="%" data-decimals="0">0</span>
        </div>
        <div class="text-sm text-gray-500 mt-1">{{ __('messages.customer_satisfaction') }}</div>
      </div>

      <div class="rounded-2xl bg-white border p-6 flex flex-col justify-center items-center text-center shadow-sm hover:shadow-md transition">
        <div class="text-4xl font-extrabold text-[#1EA8A8] leading-none">
          <span data-counter data-to="15" data-suffix="+">0</span>
        </div>
        <div class="text-sm text-gray-500 mt-1">{{ __('messages.projects_done') }}</div>
      </div>

      <div class="rounded-2xl bg-white border p-6 flex flex-col justify-center items-center text-center shadow-sm hover:shadow-md transition">
        <div class="text-2xl font-extrabold text-[#1EA8A8] leading-none">
          {{ __('messages.fast_delivery') }}
        </div>
      </div>

      <div class="rounded-2xl bg-white border p-6 flex flex-col justify-center items-center text-center shadow-sm hover:shadow-md transition">
        <div class="text-4xl font-extrabold text-[#1EA8A8] leading-none">
          <span data-counter data-to="4">0</span>
        </div>
        <div class="text-sm text-gray-500 mt-1">{{ __('messages.sectors_served') }}</div>
      </div>
    </div>
  </div>
</section>

{{-- شركاؤنا --}}
<section id="partners" class="max-w-7xl mx-auto px-4 py-16">
  <h2 class="text-2xl md:text-3xl font-bold text-center text-[#1EA8A8] mb-10">
    {{ __('messages.partners_title') ?? 'شركاؤنا' }}
  </h2>

  <div id="partnersMarquee" data-marquee class="relative group">
    <div class="overflow-hidden rounded-2xl border bg-white/70">
      <ul class="flex items-center gap-10 py-6 px-6 will-change-transform" data-speed="0.6">
        @foreach([
          ['logo'=>'images/partners/شعار-01.png','name'=>'صيدلية جاكرتا'],
          ['logo'=>'images/partners/microsoft.png','name'=>'Microsoft'],
          ['logo'=>'images/partners/amazon.png','name'=>'Amazon'],
          ['logo'=>'images/partners/tableau.png','name'=>'Tableau'],
          ['logo'=>'images/partners/powerbi.png','name'=>'Power BI'],
        ] as $p)
          <li class="shrink-0">
            <img
              src="{{ asset($p['logo']) }}"
              alt="{{ $p['name'] }}"
              class="opacity-70 group-hover:opacity-100 transition {{ $p['name'] === 'صيدلية جاكرتا' ? 'h-26 md:h-30' : 'h-10 md:h-12' }}"
              loading="lazy">
          </li>
        @endforeach
      </ul>
    </div>
  </div>

  <div class="text-center mt-12">
    <a href="{{ route('contact') }}"
       class="inline-flex items-center justify-center px-5 py-3 rounded-xl bg-[#1EA8A8] text-white hover:opacity-90 transition">
       🤝 {{ __('messages.join_partners') ?? 'انضم إلى شركائنا' }}
    </a>
  </div>
</section>

{{-- تواصل معنا --}}
<section class="max-w-7xl mx-auto px-4 pt-12 pb-16 grid md:grid-cols-2 gap-8 items-stretch">
  {{-- العمود الأيمن (لماذا نحن؟) --}}
  <aside class="rounded-2xl bg-white border p-8 flex flex-col justify-center">
    <h4 class="text-2xl font-bold text-[#1EA8A8] mb-4">{{ __('messages.why_us') }}</h4>
    <p class="text-gray-700 leading-relaxed text-sm md:text-base mb-4">
      {{ __('messages.why_intro') }}
    </p>
    <ul class="list-disc pr-6 space-y-2 text-gray-700 text-sm md:text-base">
      <li>{{ __('messages.why_text_1') }}</li>
      <li>{{ __('messages.why_text_2') }}</li>
      <li>{{ __('messages.why_text_3') }}</li>
      <li>{{ __('messages.why_text_4') }}</li>
      <li>{{ __('messages.why_text_5') }}</li>
      <li>{{ __('messages.why_text_6') }}</li>
    </ul>
  </aside>

  {{-- العمود الأيسر (نموذج التواصل) --}}
  <div class="flex flex-col h-full">
    <h3 class="text-2xl font-bold mb-2">{{ __('messages.contact_title') }}</h3>
    <p class="text-gray-600 mb-6">{{ __('messages.contact_sub') }}</p>

    <form action="{{ route('contact.store') }}" method="POST"
          class="bg-white border rounded-2xl p-6 flex flex-col gap-4 flex-1 shadow-sm">
      @csrf
      <div>
        <label class="block text-sm mb-1">{{ __('messages.name') }}</label>
        <input name="name"
               class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#1EA8A8] focus:border-[#1EA8A8]"
               placeholder="{{ __('messages.name') }}">
      </div>
      <div>
        <label class="block text-sm mb-1">{{ __('messages.email') }}</label>
        <input name="email" type="email"
               class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#1EA8A8] focus:border-[#1EA8A8]"
               placeholder="example@domain.com">
      </div>
      <div class="flex-1">
        <label class="block text-sm mb-1">{{ __('messages.message') }}</label>
        <textarea name="message" rows="4"
                  class="w-full h-full min-h-[8rem] rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#1EA8A8] focus:border-[#1EA8A8]"
                  placeholder="..."></textarea>
      </div>

      <label class="flex items-center gap-2 text-sm mt-2">
        <input name="agree" type="checkbox" class="rounded border-gray-300 mt-[2px]">
        <span class="text-gray-700">{{ __('messages.agree') }}</span>
      </label>

      <div>
        <button class="px-5 py-3 rounded-xl bg-[#1EA8A8] text-white hover:opacity-90 transition">
          {{ __('messages.send') }}
        </button>
      </div>
    </form>
  </div>
</section>
@endsection
