
<?php $__env->startSection('title', __('messages.partners_title')); ?>

<?php $__env->startSection('content'); ?>
<section class="max-w-7xl mx-auto px-4 py-12 text-center">
  
  <h1 class="text-3xl md:text-4xl font-extrabold text-[#1EA8A8] mb-6">
    <?php echo e(__('messages.partners_title')); ?>

  </h1>
  <p class="text-gray-600 mb-10">
    <?php echo e(__('messages.partners_desc')); ?>

  </p>

  
  <div class="flex flex-wrap justify-center items-center gap-10 bg-white border rounded-2xl shadow-sm p-8">
    <img src="<?php echo e(asset('images/partners/amazon.png')); ?>"   alt="Amazon"   class="h-10 md:h-14 opacity-80 hover:opacity-100 transition" loading="lazy">
    <img src="<?php echo e(asset('images/partners/tableau.png')); ?>"  alt="Tableau"  class="h-10 md:h-14 opacity-80 hover:opacity-100 transition" loading="lazy">
    <img src="<?php echo e(asset('images/partners/powerbi.png')); ?>"  alt="Power BI" class="h-10 md:h-14 opacity-80 hover:opacity-100 transition" loading="lazy">
    <img src="<?php echo e(asset('images/partners/microsoft.png')); ?>" alt="Microsoft" class="h-10 md:h-14 opacity-80 hover:opacity-100 transition" loading="lazy">
    <img src="<?php echo e(asset('images/partners/google.png')); ?>"    alt="Google"    class="h-10 md:h-14 opacity-80 hover:opacity-100 transition" loading="lazy">
  </div>

  
  <div class="mt-10">
    <a href="<?php echo e(route('contact')); ?>"
       class="inline-flex items-center justify-center px-6 py-3 rounded-xl bg-[#1EA8A8] text-white hover:opacity-90 transition">
      🤝 <?php echo e(__('messages.join_partners')); ?>

    </a>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\projects\EData\Website\edata\resources\views/pages/partners.blade.php ENDPATH**/ ?>