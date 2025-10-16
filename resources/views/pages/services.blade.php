@extends('layouts.app')
@section('title', __('messages.services'))

@section('content')
<section class="max-w-7xl mx-auto px-4 py-12">
  {{-- العنوان --}}
  <h1 class="text-4xl font-extrabold text-[#1EA8A8] mb-4 text-center">
    {{ __('messages.our_services') }}
  </h1>

  {{-- مقدّمة خفيفة (لو مافي ترجمة، بيظهر نص افتراضي) --}}
  <p class="text-center text-gray-600 mb-10">
    {{ __('messages.services_intro') ?? 'نقدّم حلول ذكاء أعمال، ونماذج تنبؤية، وأنظمة أتمتة مصممة خصيصًا لاحتياجاتك.' }}
  </p>

  <div class="grid md:grid-cols-3 gap-10">
    {{-- الخدمة 1 --}}
    <div class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-transform duration-300">
      <div class="flex items-center justify-center mb-4 text-[#1EA8A8]">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 17v-2m3 2v-6m3 6V9m4 12H5a2 2 0 01-2-2V5a2 2 0 012-2h12l4 4v14a2 2 0 01-2 2z" />
        </svg>
      </div>
      <h3 class="text-xl font-bold mb-2 text-center text-[#1EA8A8]">{{ __('messages.bi_systems') }}</h3>
      <p class="text-gray-600 text-sm text-center mb-4">
        {{ __('messages.bi_desc') }}
      </p>
      <ul class="text-sm text-gray-600 list-disc pr-6 space-y-1">
        <li>{{ __('messages.kpi_alerts') }}</li>
        <li>{{ __('messages.multi_sources_direct') }}</li>
        <li>{{ __('messages.publish_ready') }}</li>
      </ul>
    </div>

    {{-- الخدمة 2 --}}
    <div class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-transform duration-300">
      <div class="flex items-center justify-center mb-4 text-[#1EA8A8]">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.868v4.264a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 4.354a9 9 0 100 15.292 9 9 0 000-15.292z" />
        </svg>
      </div>
      <h3 class="text-xl font-bold mb-2 text-center text-[#1EA8A8]">{{ __('messages.ml_models') }}</h3>
      <p class="text-gray-600 text-sm text-center mb-4">
        {{ __('messages.ml_desc') }}
      </p>
      <ul class="text-sm text-gray-600 list-disc pr-6 space-y-1">
        <li>{{ __('messages.data_analysis_cleaning') }}</li>
        <li>{{ __('messages.model_training_eval') }}</li>
        <li>{{ __('messages.model_deploy_api') }}</li>
      </ul>
    </div>

    {{-- الخدمة 3 --}}
    <div class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-transform duration-300">
      <div class="flex items-center justify-center mb-4 text-[#1EA8A8]">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 12h6m2 8H7a2 2 0 01-2-2V6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v10a2 2 0 01-2 2z" />
        </svg>
      </div>
      <h3 class="text-xl font-bold mb-2 text-center text-[#1EA8A8]">{{ __('messages.etl_systems') }}</h3>
      <p class="text-gray-600 text-sm text-center mb-4">
        {{ __('messages.etl_desc') }}
      </p>
      <ul class="text-sm text-gray-600 list-disc pr-6 space-y-1">
        <li>{{ __('messages.etl_automations') }}</li>
        <li>{{ __('messages.smart_alerts') }}</li>
        <li>{{ __('messages.cloud_finance_integration') }}</li>
      </ul>
    </div>
  </div>

  {{-- CTA ختامي --}}
  <div class="text-center mt-12">
    <a href="{{ route('contact') }}"
       class="inline-flex items-center justify-center px-5 py-3 rounded-xl bg-[#1EA8A8] text-white hover:opacity-90 transition">
      {{ __('messages.contact') }} — {{ __('messages.book') }}
    </a>
  </div>
</section>
@endsection
