# 🚀 Deployment Checklist

## ✅ Pre-Deployment Checklist

### 1. **Environment Setup**
- [ ] Update `.env` file with production settings
- [ ] Set `APP_ENV=production`
- [ ] Set `APP_DEBUG=false`
- [ ] Configure database credentials
- [ ] Configure email settings (SMTP)
- [ ] Set `APP_URL` to your domain

### 2. **Security**
- [ ] Generate new `APP_KEY` if needed
- [ ] Update Google Analytics ID in `.env`
- [ ] Configure email server for contact form
- [ ] Set proper file permissions

### 3. **Database**
- [ ] Create production database
- [ ] Run migrations: `php artisan migrate --force`
- [ ] Seed data if needed

### 4. **Files & Assets**
- [ ] Upload all files to hosting
- [ ] Create storage link: `php artisan storage:link`
- [ ] Optimize images (compress with TinyPNG)
- [ ] Set proper permissions (755 for folders, 644 for files)

## 🚀 Deployment Steps

### 1. **Upload Files**
```bash
# Upload all files to your hosting
# Set permissions
chmod -R 755 storage bootstrap/cache
chmod -R 644 storage/logs/*.log
```

### 2. **Environment Configuration**
```bash
# Copy .env.example to .env
cp .env.example .env

# Edit .env with your production settings
nano .env
```

### 3. **Install Dependencies**
```bash
composer install --no-dev --optimize-autoloader
npm install --production
npm run build
```

### 4. **Laravel Setup**
```bash
# Generate app key
php artisan key:generate

# Run migrations
php artisan migrate --force

# Create storage link
php artisan storage:link

# Generate sitemap
php artisan sitemap:generate
```

### 5. **Optimization**
```bash
# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Cache for production
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## 🔧 Post-Deployment

### 1. **Testing**
- [ ] Test homepage loads correctly
- [ ] Test contact form sends emails
- [ ] Test admin panel login
- [ ] Test all navigation links
- [ ] Test responsive design on mobile

### 2. **SEO Setup**
- [ ] Submit sitemap to Google Search Console
- [ ] Add Google Analytics tracking
- [ ] Test robots.txt accessibility
- [ ] Check meta tags on all pages

### 3. **Monitoring**
- [ ] Set up error logging
- [ ] Monitor email delivery
- [ ] Check server performance
- [ ] Set up backup system

## 🛠️ Troubleshooting

### Common Issues:
1. **500 Error**: Check file permissions and .env configuration
2. **Contact form not working**: Verify SMTP settings
3. **Images not loading**: Check storage link and permissions
4. **Slow loading**: Optimize images and enable caching

### Useful Commands:
```bash
# Check Laravel logs
tail -f storage/logs/laravel.log

# Check server error logs
tail -f /var/log/apache2/error.log

# Clear all caches
php artisan optimize:clear

# Regenerate autoloader
composer dump-autoload
```

## 📞 Support

If you encounter issues:
1. Check Laravel logs in `storage/logs/`
2. Verify all environment variables
3. Test locally first
4. Contact hosting support if needed

---

**Good luck with your deployment! 🎉**
