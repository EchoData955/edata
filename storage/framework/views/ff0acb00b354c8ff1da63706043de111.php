
<?php $__env->startSection('title', __('messages.contact')); ?>

<?php $__env->startSection('content'); ?>
<section class="max-w-7xl mx-auto px-4 py-12 grid md:grid-cols-2 gap-8 items-start">

  
  <div class="bg-white border rounded-2xl p-6 shadow-sm">
    <h1 class="text-3xl md:text-4xl font-extrabold text-[#1EA8A8] mb-2">
      <?php echo e(__('messages.contact_title')); ?>

    </h1>
    <p class="text-gray-600 mb-6"><?php echo e(__('messages.contact_sub')); ?></p>

    <?php if(session('success')): ?>
      <div class="mb-4 rounded-lg bg-green-50 text-green-800 border border-green-200 p-3">
        <?php echo e(__('messages.success_message')); ?>

      </div>
    <?php endif; ?>
    <?php if($errors->any()): ?>
      <div class="mb-4 rounded-lg bg-red-50 text-red-800 border border-red-200 p-3">
        <?php echo e(__('messages.error_message')); ?>

      </div>
    <?php endif; ?>

    <form action="<?php echo e(route('contact.store')); ?>" method="POST" class="space-y-4">
      <?php echo csrf_field(); ?>
      <div>
        <label class="block text-sm font-medium mb-1 text-gray-700"><?php echo e(__('messages.name')); ?></label>
        <input name="name" value="<?php echo e(old('name')); ?>" class="w-full rounded-lg border-gray-300 focus:ring-[#1EA8A8] focus:border-[#1EA8A8]" placeholder="<?php echo e(__('messages.name')); ?>">
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-xs text-red-600 mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <div>
        <label class="block text-sm font-medium mb-1 text-gray-700"><?php echo e(__('messages.email')); ?></label>
        <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="w-full rounded-lg border-gray-300 focus:ring-[#1EA8A8] focus:border-[#1EA8A8]" placeholder="example@domain.com">
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-xs text-red-600 mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <div>
        <label class="block text-sm font-medium mb-1 text-gray-700"><?php echo e(__('messages.message')); ?></label>
        <textarea rows="5" name="message" class="w-full rounded-lg border-gray-300 focus:ring-[#1EA8A8] focus:border-[#1EA8A8]" placeholder="..."><?php echo e(old('message')); ?></textarea>
        <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-xs text-red-600 mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <label class="inline-flex items-center gap-2 text-sm text-gray-600">
        <input type="checkbox" name="agree" value="1" class="rounded border-gray-300 text-[#1EA8A8] focus:ring-[#1EA8A8]" <?php echo e(old('agree') ? 'checked' : ''); ?>>
        <?php echo e(__('messages.agree')); ?>

      </label>
      <?php $__errorArgs = ['agree'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-xs text-red-600"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

      <div>
        <button class="px-6 py-3 rounded-xl bg-[#1EA8A8] text-white font-medium hover:opacity-90 transition">
          <?php echo e(__('messages.send')); ?>

        </button>
      </div>
    </form>
  </div>

  
  <div class="bg-white border rounded-2xl p-6 shadow-sm">
    <h4 class="text-xl font-bold mb-3 text-[#1EA8A8]"><?php echo e(__('messages.why_us')); ?></h4>
    <p class="text-gray-600 mb-4">
      <?php echo e(__('messages.why_intro')); ?>

    </p>
    <ul class="list-disc pr-5 text-sm text-gray-700 space-y-2">
      <li><?php echo e(__('messages.why_text_1')); ?></li>
      <li><?php echo e(__('messages.why_text_2')); ?></li>
      <li><?php echo e(__('messages.why_text_3')); ?></li>
      <li><?php echo e(__('messages.why_text_4')); ?></li>
      <li><?php echo e(__('messages.why_text_5')); ?></li>
    </ul>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\projects\EData\Website\edata\resources\views/pages/contact.blade.php ENDPATH**/ ?>