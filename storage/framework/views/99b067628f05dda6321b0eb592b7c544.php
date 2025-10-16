
<?php $__env->startSection('title', __('messages.services')); ?>

<?php $__env->startSection('content'); ?>
<section class="max-w-7xl mx-auto px-4 py-12">
  
  <h1 class="text-4xl font-extrabold text-[#1EA8A8] mb-4 text-center">
    <?php echo e(__('messages.our_services')); ?>

  </h1>

  
  <p class="text-center text-gray-600 mb-10">
    <?php echo e(__('messages.services_intro') ?? 'نقدّم حلول ذكاء أعمال، ونماذج تنبؤية، وأنظمة أتمتة مصممة خصيصًا لاحتياجاتك.'); ?>

  </p>

  <div class="grid md:grid-cols-3 gap-10">
    
    <div class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-transform duration-300">
      <div class="flex items-center justify-center mb-4 text-[#1EA8A8]">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 17v-2m3 2v-6m3 6V9m4 12H5a2 2 0 01-2-2V5a2 2 0 012-2h12l4 4v14a2 2 0 01-2 2z" />
        </svg>
      </div>
      <h3 class="text-xl font-bold mb-2 text-center text-[#1EA8A8]"><?php echo e(__('messages.bi_systems')); ?></h3>
      <p class="text-gray-600 text-sm text-center mb-4">
        <?php echo e(__('messages.bi_desc')); ?>

      </p>
      <ul class="text-sm text-gray-600 list-disc pr-6 space-y-1">
        <li><?php echo e(__('messages.kpi_alerts')); ?></li>
        <li><?php echo e(__('messages.multi_sources_direct')); ?></li>
        <li><?php echo e(__('messages.publish_ready')); ?></li>
      </ul>
    </div>

    
    <div class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-transform duration-300">
      <div class="flex items-center justify-center mb-4 text-[#1EA8A8]">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.868v4.264a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 4.354a9 9 0 100 15.292 9 9 0 000-15.292z" />
        </svg>
      </div>
      <h3 class="text-xl font-bold mb-2 text-center text-[#1EA8A8]"><?php echo e(__('messages.ml_models')); ?></h3>
      <p class="text-gray-600 text-sm text-center mb-4">
        <?php echo e(__('messages.ml_desc')); ?>

      </p>
      <ul class="text-sm text-gray-600 list-disc pr-6 space-y-1">
        <li><?php echo e(__('messages.data_analysis_cleaning')); ?></li>
        <li><?php echo e(__('messages.model_training_eval')); ?></li>
        <li><?php echo e(__('messages.model_deploy_api')); ?></li>
      </ul>
    </div>

    
    <div class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-transform duration-300">
      <div class="flex items-center justify-center mb-4 text-[#1EA8A8]">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 12h6m2 8H7a2 2 0 01-2-2V6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v10a2 2 0 01-2 2z" />
        </svg>
      </div>
      <h3 class="text-xl font-bold mb-2 text-center text-[#1EA8A8]"><?php echo e(__('messages.etl_systems')); ?></h3>
      <p class="text-gray-600 text-sm text-center mb-4">
        <?php echo e(__('messages.etl_desc')); ?>

      </p>
      <ul class="text-sm text-gray-600 list-disc pr-6 space-y-1">
        <li><?php echo e(__('messages.etl_automations')); ?></li>
        <li><?php echo e(__('messages.smart_alerts')); ?></li>
        <li><?php echo e(__('messages.cloud_finance_integration')); ?></li>
      </ul>
    </div>
  </div>

  
  <div class="text-center mt-12">
    <a href="<?php echo e(route('contact')); ?>"
       class="inline-flex items-center justify-center px-5 py-3 rounded-xl bg-[#1EA8A8] text-white hover:opacity-90 transition">
      <?php echo e(__('messages.contact')); ?> — <?php echo e(__('messages.book')); ?>

    </a>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\projects\EData\Website\edata\resources\views/pages/services.blade.php ENDPATH**/ ?>