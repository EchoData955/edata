# Dockerfile
FROM webdevops/php-nginx:8.3-alpine

WORKDIR /app

# composer داخل الحاوية
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# (اختياري) بناء أصول Vite داخل الحاوية
RUN apk add --no-cache nodejs npm

# انسخ المشروع
COPY . /app

# ثبّت الـ PHP deps
RUN composer install --no-dev --prefer-dist --no-interaction --no-progress

# (اختياري) بناء أصول Vite (إذا عندك Vite)

RUN npm ci && npm run build

# صلاحيات Laravel
RUN chown -R application:application /app/storage /app/bootstrap/cache

# اجعل Nginx يقدّم public/
ENV WEB_DOCUMENT_ROOT=/app/public

# إعدادات إنتاجية
ENV APP_ENV=production
ENV PHP_DISPLAY_ERRORS=0

# Cache للكونفيج والروتس والـviews عند التشغيل
CMD php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache \
    && supervisord

