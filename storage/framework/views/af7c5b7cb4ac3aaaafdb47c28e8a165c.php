
<?php $__env->startSection('title','الرسائل الواردة'); ?>

<?php $__env->startSection('content'); ?>
<section class="max-w-6xl mx-auto px-4 py-12">
  <h1 class="text-3xl font-bold mb-6">📩 الرسائل الواردة</h1>

  <?php if($messages->isEmpty()): ?>
    <p class="text-gray-500">لا توجد رسائل حتى الآن.</p>
  <?php else: ?>
  <div class="overflow-x-auto bg-white border rounded-2xl shadow-sm">
    <table class="min-w-full text-sm text-right">
      <thead class="bg-gray-50 border-b text-gray-700">
        <tr>
          <th class="px-4 py-2">الاسم</th>
          <th class="px-4 py-2">البريد الإلكتروني</th>
          <th class="px-4 py-2">الرسالة</th>
          <th class="px-4 py-2">التاريخ</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="border-b hover:bg-gray-50">
          <td class="px-4 py-2"><?php echo e($m->name); ?></td>
          <td class="px-4 py-2"><?php echo e($m->email); ?></td>
          <td class="px-4 py-2"><?php echo e(Str::limit($m->message, 80)); ?></td>
          <td class="px-4 py-2 text-gray-500"><?php echo e($m->created_at->diffForHumans()); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
  <?php endif; ?>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\projects\EData\Website\edata\resources\views/admin/messages.blade.php ENDPATH**/ ?>