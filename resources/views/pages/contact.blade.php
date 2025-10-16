@extends('layouts.app')
@section('title', __('messages.contact'))

@section('content')
<section class="max-w-7xl mx-auto px-4 py-12 grid md:grid-cols-2 gap-8 items-start">

  {{-- نموذج التواصل --}}
  <div class="bg-white border rounded-2xl p-6 shadow-sm">
    <h1 class="text-3xl md:text-4xl font-extrabold text-[#1EA8A8] mb-2">
      {{ __('messages.contact_title') }}
    </h1>
    <p class="text-gray-600 mb-6">{{ __('messages.contact_sub') }}</p>

    @if (session('success'))
      <div class="mb-4 rounded-lg bg-green-50 text-green-800 border border-green-200 p-3">
        {{ __('messages.success_message') }}
      </div>
    @endif
    @if ($errors->any())
      <div class="mb-4 rounded-lg bg-red-50 text-red-800 border border-red-200 p-3">
        {{ __('messages.error_message') }}
      </div>
    @endif

    <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
      @csrf
      <div>
        <label class="block text-sm font-medium mb-1 text-gray-700">{{ __('messages.name') }}</label>
        <input name="name" value="{{ old('name') }}" class="w-full rounded-lg border-gray-300 focus:ring-[#1EA8A8] focus:border-[#1EA8A8]" placeholder="{{ __('messages.name') }}">
        @error('name') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
      </div>

      <div>
        <label class="block text-sm font-medium mb-1 text-gray-700">{{ __('messages.email') }}</label>
        <input type="email" name="email" value="{{ old('email') }}" class="w-full rounded-lg border-gray-300 focus:ring-[#1EA8A8] focus:border-[#1EA8A8]" placeholder="example@domain.com">
        @error('email') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
      </div>

      <div>
        <label class="block text-sm font-medium mb-1 text-gray-700">{{ __('messages.message') }}</label>
        <textarea rows="5" name="message" class="w-full rounded-lg border-gray-300 focus:ring-[#1EA8A8] focus:border-[#1EA8A8]" placeholder="...">{{ old('message') }}</textarea>
        @error('message') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
      </div>

      <label class="inline-flex items-center gap-2 text-sm text-gray-600">
        <input type="checkbox" name="agree" value="1" class="rounded border-gray-300 text-[#1EA8A8] focus:ring-[#1EA8A8]" {{ old('agree') ? 'checked' : '' }}>
        {{ __('messages.agree') }}
      </label>
      @error('agree') <p class="text-xs text-red-600">{{ $message }}</p> @enderror

      <div>
        <button class="px-6 py-3 rounded-xl bg-[#1EA8A8] text-white font-medium hover:opacity-90 transition">
          {{ __('messages.send') }}
        </button>
      </div>
    </form>
  </div>

  {{-- لماذا نحن؟ --}}
  <div class="bg-white border rounded-2xl p-6 shadow-sm">
    <h4 class="text-xl font-bold mb-3 text-[#1EA8A8]">{{ __('messages.why_us') }}</h4>
    <p class="text-gray-600 mb-4">
      {{ __('messages.why_intro') }}
    </p>
    <ul class="list-disc pr-5 text-sm text-gray-700 space-y-2">
      <li>{{ __('messages.why_text_1') }}</li>
      <li>{{ __('messages.why_text_2') }}</li>
      <li>{{ __('messages.why_text_3') }}</li>
      <li>{{ __('messages.why_text_4') }}</li>
      <li>{{ __('messages.why_text_5') }}</li>
    </ul>
  </div>
</section>
@endsection
