@extends('layouts.app')
@section('title', __('messages.contact'))

@section('content')
<section class="max-w-6xl mx-auto px-4 py-12">
  <h1 class="text-3xl font-bold mb-6">📩 {{ __('messages.contact') }}</h1>

  @if($messages->isEmpty())
    <p class="text-gray-500">{{ app()->getLocale()==='ar' ? 'لا توجد رسائل حتى الآن.' : 'No messages yet.' }}</p>
  @else
  <div class="overflow-x-auto bg-white border rounded-2xl shadow-sm">
    <table class="min-w-full text-sm text-right">
      <thead class="bg-gray-50 border-b text-gray-700">
        <tr>
          <th class="px-4 py-2">{{ __('messages.name') }}</th>
          <th class="px-4 py-2">{{ __('messages.email') }}</th>
          <th class="px-4 py-2">{{ __('messages.message') }}</th>
          <th class="px-4 py-2">Date</th>
        </tr>
      </thead>
      <tbody>
        @foreach($messages as $m)
        <tr class="border-b hover:bg-gray-50">
          <td class="px-4 py-2">{{ $m->name }}</td>
          <td class="px-4 py-2">{{ $m->email }}</td>
          <td class="px-4 py-2">{{ Str::limit($m->message, 80) }}</td>
          <td class="px-4 py-2 text-gray-500">{{ $m->created_at->format('Y-m-d H:i') }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  @endif
</section>
@endsection
