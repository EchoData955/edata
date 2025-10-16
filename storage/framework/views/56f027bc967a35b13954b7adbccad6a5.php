<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" dir="<?php echo e(app()->getLocale()==='ar' ? 'rtl' : 'ltr'); ?>">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $__env->yieldContent('title','EData'); ?></title>
  <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/js/app.js']); ?>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;800&display=swap" rel="stylesheet">
  <style>
    body{font-family:'Cairo',ui-sans-serif,system-ui}

    /* ارتفاع موحّد لكروت الإحصائيات */
    .kpi-card{ height: 10rem; }              
    @media (min-width: 768px){
      .kpi-card{ height: 11rem; }            
    }

    .no-scrollbar::-webkit-scrollbar{ display:none; }
    .no-scrollbar{ scrollbar-width: none; }

    .reveal {
      opacity: 0;
      transform: translateY(12px);
      transition: opacity .6s ease, transform .6s ease;
      will-change: opacity, transform;
    }
    .reveal.in {
      opacity: 1;
      transform: translateY(0);
      transition-delay: var(--d, 0s);
    }
    @media (prefers-reduced-motion: reduce) {
      .reveal,
      .reveal.in {
        transition: none !important;
        transform: none !important;
        opacity: 1 !important;
      }
    }
  </style>

  <?php echo $__env->yieldContent('meta'); ?>
  <link rel="icon" href="<?php echo e(asset('favicon.ico')); ?>" type="image/ico">
</head>

<body class="bg-gray-50 text-gray-900">
<header id="siteNav" class="sticky top-0 z-50 bg-white/90 backdrop-blur border-b transition-shadow">
  <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between gap-4 flex-nowrap">
    <a href="<?php echo e(route('home')); ?>" class="flex items-center gap-2 shrink-0">
      <img
        src="<?php echo e(asset('images/logo-mark.svg')); ?>"
        alt="EData"
        class="h-12 md:h-14 lg:h-16 w-auto transition-transform hover:scale-[1.02]"
      >
    </a>

    
    <button id="menuBtn"
            class="md:hidden p-2 rounded-lg border hover:bg-gray-50 shrink-0"
            aria-label="<?php echo e(app()->getLocale()==='ar' ? 'فتح القائمة' : 'Open menu'); ?>"
            aria-expanded="false">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
           viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>

    <?php
      $link = fn($nameKey,$route)=>'<a href="'.route($route).'" class="'.
        (request()->routeIs($route)?'text-[#1EA8A8] font-semibold':'hover:text-[#1EA8A8]').'">'.
        e(__('messages.'.$nameKey)).'</a>';
    ?>

    <nav aria-label="Primary"
         class="hidden md:flex items-center gap-5 text-sm whitespace-nowrap flex-nowrap overflow-x-auto no-scrollbar">
      <?php echo $link('services','services'); ?>

      <?php echo $link('sectors','sectors'); ?>

      <?php echo $link('cases','cases'); ?>

      <?php echo $link('about','about'); ?>

      <?php echo $link('partners','partners'); ?>

      <?php echo $link('contact','contact'); ?>


      <a href="<?php echo e(route('contact')); ?>"
        class="inline-flex items-center justify-center h-9 px-4 rounded-full bg-[#1EA8A8] text-white hover:opacity-90 shrink-0">
        <?php echo e(__('messages.book')); ?>

      </a>

      <a href="<?php echo e(route('lang.switch', app()->getLocale()==='ar' ? 'en' : 'ar')); ?>"
        class="inline-flex items-center justify-center h-9 px-4 rounded-lg border border-gray-300 hover:bg-gray-50 shrink-0">
        <?php echo e(__('messages.language')); ?>

      </a>
    </nav>
  </div>

  <nav id="mobileMenu" class="md:hidden hidden border-t bg-white">
    <div class="px-4 py-3 flex flex-col gap-3 text-sm">
      <a href="<?php echo e(route('services')); ?>"><?php echo e(__('messages.services')); ?></a>
      <a href="<?php echo e(route('sectors')); ?>"><?php echo e(__('messages.sectors')); ?></a>
      <a href="<?php echo e(route('cases')); ?>"><?php echo e(__('messages.cases')); ?></a>
      <a href="<?php echo e(route('about')); ?>"><?php echo e(__('messages.about')); ?></a>
      <a href="<?php echo e(route('partners')); ?>"><?php echo e(__('messages.partners_title')); ?></a>
      <a href="<?php echo e(route('contact')); ?>"><?php echo e(__('messages.contact')); ?></a>
      <a href="<?php echo e(route('contact')); ?>" class="mt-2 px-3 py-2 text-center rounded-xl bg-[#1EA8A8] text-white hover:opacity-90">
        <?php echo e(__('messages.book')); ?>

      </a>
      <a href="<?php echo e(route('lang.switch', app()->getLocale()==='ar' ? 'en' : 'ar')); ?>" class="px-3 py-2 text-center rounded-xl border">
        <?php echo e(__('messages.language')); ?>

      </a>
    </div>
  </nav>
</header>

<main><?php echo $__env->yieldContent('content'); ?></main>

<footer class="mt-16 border-t bg-white">
  <div class="max-w-7xl mx-auto px-4 py-10 grid md:grid-cols-4 gap-8 text-sm">
    <div>
      <img src="<?php echo e(asset('images/logo-mark.svg')); ?>" class="h-8 md:h-7 mb-3 w-auto mx-auto md:mx-0" alt="EData">
      <p class="text-gray-600"><?php echo e(__('messages.footer_text')); ?></p>
    </div>
    <div>
      <ul class="space-y-2 text-gray-600">
        <li><a href="<?php echo e(route('services')); ?>" class="hover:text-[#1EA8A8]"><?php echo e(__('messages.services')); ?></a></li>
        <li><a href="<?php echo e(route('sectors')); ?>"  class="hover:text-[#1EA8A8]"><?php echo e(__('messages.sectors')); ?></a></li>
        <li><a href="<?php echo e(route('cases')); ?>"    class="hover:text-[#1EA8A8]"><?php echo e(__('messages.cases')); ?></a></li>
        <li><a href="<?php echo e(route('about')); ?>"    class="hover:text-[#1EA8A8]"><?php echo e(__('messages.about')); ?></a></li>
      </ul>
    </div>
    <div>
      <h4 class="font-bold mb-3"><?php echo e(__('messages.contact')); ?></h4>
      <ul class="space-y-2 text-gray-600">
        <li>echodata@gmail.com</li>
        <li>+967 771779352</li>
        <li><a href="<?php echo e(route('contact')); ?>" class="hover:text-[#1EA8A8]"><?php echo e(__('messages.contact_form')); ?></a></li>
      </ul>
    </div>
    <div>
      <h4 class="font-bold mb-3"><?php echo e(__('messages.follow_us')); ?></h4>
      <div class="flex gap-3 text-gray-500">
        <a href="https://www.facebook.com/share/1LNQH8hyU1/" aria-label="X" class="hover:text-[#1EA8A8]">Facebook</a>
        <a href="#" aria-label="LinkedIn" class="hover:text-[#1EA8A8]">LinkedIn</a>
        <a href="https://www.instagram.com/echo__data?igsh=MXFzcWR6MjhmNnViNA==" aria-label="YouTube" class="hover:text-[#1EA8A8]">Instagram</a>
      </div>
    </div>
  </div>
  <div class="border-t py-4 text-center text-xs text-gray-500">© <?php echo e(date('Y')); ?> EData</div>
</footer>

<script>
  const nav = document.getElementById('siteNav');
  const onScroll = () => nav.classList.toggle('shadow-sm', window.scrollY > 0);
  document.addEventListener('scroll', onScroll, {passive:true}); onScroll();

  const btn = document.getElementById('menuBtn');
  const menu = document.getElementById('mobileMenu');
  if (btn && menu) btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
    btn.setAttribute('aria-expanded', menu.classList.contains('hidden') ? 'false' : 'true');
  });
</script>
<script>
  (function () {
    const els = document.querySelectorAll('.reveal');
    if (!('IntersectionObserver' in window) || els.length === 0) {
      els.forEach(el => el.classList.add('in'));
      return;
    }

    const io = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('in');
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });

    els.forEach(el => io.observe(el));
  })();
</script>

</body>
</html>
<?php /**PATH F:\projects\EData\Website\edata\resources\views/layouts/app.blade.php ENDPATH**/ ?>