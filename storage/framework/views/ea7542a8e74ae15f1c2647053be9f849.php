
<?php $__env->startSection('title', __('messages.sectors')); ?>

<?php $__env->startSection('content'); ?>
<section class="max-w-7xl mx-auto px-4 py-12">
  
  <header class="mb-10 text-center md:text-start">
    <h1 class="text-3xl md:text-4xl font-extrabold text-[#1EA8A8]">
      <?php echo e(__('messages.sectors_title')); ?>

    </h1>
    <p class="text-gray-600 mt-2">
      <?php echo e(__('messages.sectors_intro')); ?>

    </p>
  </header>

  
  <?php
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
  ?>

  <div class="grid md:grid-cols-2 gap-6">
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <article class="bg-white border rounded-2xl p-6 transition hover:shadow-md hover:-translate-y-0.5 hover:border-[#1EA8A8]">
        <h3 class="text-xl font-bold mb-1 text-[#1EA8A8]"><?php echo e(__('messages.'.$s['title'])); ?></h3>
        <p class="text-gray-600 mb-3"><?php echo e(__('messages.'.$s['desc'])); ?></p>
        <ul class="list-disc pr-5 text-sm text-gray-700 space-y-1">
          <?php $__currentLoopData = $s['bul']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e(__('messages.'.$b)); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>

  
  <div class="text-center mt-10">
    <a href="<?php echo e(route('contact')); ?>"
       class="inline-flex items-center justify-center px-5 py-3 rounded-xl bg-[#1EA8A8] text-white hover:opacity-90 transition">
      <?php echo e(__('messages.contact')); ?> — <?php echo e(__('messages.book')); ?>

    </a>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\projects\EData\Website\edata\resources\views/pages/sectors.blade.php ENDPATH**/ ?>