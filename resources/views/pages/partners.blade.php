@extends('layouts.app')
@section('title', __('messages.partners_title'))

@section('content')
<section class="max-w-7xl mx-auto px-4 py-12 text-center">
  {{-- العنوان والوصف --}}
  <h1 class="text-3xl md:text-4xl font-extrabold text-[#1EA8A8] mb-6">
    {{ __('messages.partners_title') }}
  </h1>
  <p class="text-gray-600 mb-10">
    {{ __('messages.partners_desc') }}
  </p>

  {{-- شعارات الشركاء --}}
  <div class="flex flex-wrap justify-center items-center gap-10 bg-white border rounded-2xl shadow-sm p-8">
    <img src="{{ asset('images/partners/amazon.png') }}"   alt="Amazon"   class="h-10 md:h-14 opacity-80 hover:opacity-100 transition" loading="lazy">
    <img src="{{ asset('images/partners/tableau.png') }}"  alt="Tableau"  class="h-10 md:h-14 opacity-80 hover:opacity-100 transition" loading="lazy">
    <img src="{{ asset('images/partners/powerbi.png') }}"  alt="Power BI" class="h-10 md:h-14 opacity-80 hover:opacity-100 transition" loading="lazy">
    <img src="{{ asset('images/partners/microsoft.png') }}" alt="Microsoft" class="h-10 md:h-14 opacity-80 hover:opacity-100 transition" loading="lazy">
    <img src="{{ asset('images/partners/google.png') }}"    alt="Google"    class="h-10 md:h-14 opacity-80 hover:opacity-100 transition" loading="lazy">
  </div>

  {{-- CTA --}}
  <div class="mt-10">
    <a href="{{ route('contact') }}"
       class="inline-flex items-center justify-center px-6 py-3 rounded-xl bg-[#1EA8A8] text-white hover:opacity-90 transition">
      🤝 {{ __('messages.join_partners') }}
    </a>
  </div>
</section>
@endsection
