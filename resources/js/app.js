import './bootstrap';
// ==== Count-up on view (re-trigger on every enter) ==================
(function initCounters() {
  const els = document.querySelectorAll('[data-counter]');
  if (!els.length) return;

  const prefersReduced = window.matchMedia?.('(prefers-reduced-motion: reduce)').matches;

  function easeOutCubic(t) {
    return 1 - Math.pow(1 - t, 3);
  }

  function reset(el) {
    const decimals = parseInt(el.dataset.decimals || '0', 10);
    const prefix   = el.dataset.prefix || '';
    const suffix   = el.dataset.suffix || '';
    el.textContent = prefix + (0).toFixed(decimals) + suffix;
    el.dataset.animating = '0';
  }

  function animate(el) {
    if (el.dataset.animating === '1') return; // منع التشغيل المتوازي
    el.dataset.animating = '1';

    const end      = parseFloat(el.dataset.to || '0');
    const decimals = parseInt(el.dataset.decimals || '0', 10);
    const prefix   = el.dataset.prefix || '';
    const suffix   = el.dataset.suffix || '';
    const duration = parseInt(el.dataset.duration || '1400', 10);

    if (prefersReduced) {
      el.textContent = prefix + end.toFixed(decimals) + suffix;
      el.dataset.animating = '0';
      return;
    }

    const start = 0;
    const startTime = performance.now();

    function tick(now) {
      const progress = Math.min(1, (now - startTime) / duration);
      const eased    = easeOutCubic(progress);
      const value    = start + (end - start) * eased;

      el.textContent = prefix + value.toFixed(decimals) + suffix;

      if (progress < 1) {
        requestAnimationFrame(tick);
      } else {
        el.textContent = prefix + end.toFixed(decimals) + suffix;
        el.dataset.animating = '0';
      }
    }
    requestAnimationFrame(tick);
  }

  if ('IntersectionObserver' in window) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        const el = entry.target;
        if (entry.isIntersecting) {
          // ظاهر → شغّل العدّاد
          animate(el);
        } else {
          // اختفى → رجّعه للصفر عشان يعيد التشغيل لاحقًا
          reset(el);
        }
      });
    }, { threshold: 0.45 }); // عدّل الحساسية لو حبيت

    els.forEach((el) => {
      reset(el);     // نضمن البداية صفر
      io.observe(el);
    });
  } else {
    // متصفحات قديمة: شغّل مرّة واحدة
    els.forEach(animate);
  }
})();


// ==== Partners infinite marquee (seamless + RTL/LTR + guard) ====
document.querySelectorAll('[data-marquee] ul').forEach((ul) => {
  // منع التهيئة المزدوجة (خصوصًا مع Vite HMR)
  if (ul.dataset.initialized === '1') return;
  ul.dataset.initialized = '1';

  // لو حصل خطأ في البناء، اعرف من الكونسول
  console.log('[marquee] init on', ul);

  // سرعة التحريك
  const baseSpeed = parseFloat(ul.dataset.speed) || 0.6;

  // الاتجاه حسب اللغة
  const isRTL = document.documentElement.getAttribute('dir') === 'rtl';
  const speed = isRTL ? -Math.abs(baseSpeed) : Math.abs(baseSpeed);

  // تحسين الأداء
  ul.style.willChange = 'transform';

  // بدل innerHTML (اللي ممكن يكرر listeners)، ننسخ العناصر فعليًا
  const children = Array.from(ul.children).map((li) => li.cloneNode(true));
  children.forEach((clone) => ul.appendChild(clone));

  let pos = 0;
  let hovering = false;

  const wrapper = ul.closest('.overflow-hidden');
  if (wrapper) {
    const stop = () => (hovering = true);
    const go   = () => (hovering = false);
    wrapper.addEventListener('mouseenter', stop);
    wrapper.addEventListener('mouseleave', go);
    wrapper.addEventListener('touchstart', stop, { passive: true });
    wrapper.addEventListener('touchend',   go,   { passive: true });
  }

  function step() {
    if (!hovering) {
      pos += speed;

      // نصف العرض (لأننا ضاعفنا العناصر)
      const half = ul.scrollWidth / 2;

      // لفّ مستمر بدون قفز
      if (pos >=  half) pos -= half;
      if (pos <= -half) pos += half;

      // لاحظ: نستخدم -pos، ومع speed السالب للـ RTL يتحرك يمين
      ul.style.transform = `translateX(${-pos}px)`;
    }
    requestAnimationFrame(step);
  }
  step();

  // للتشخيص
  console.log('[marquee] dir:', isRTL ? 'rtl' : 'ltr', 'speed:', speed);
});
