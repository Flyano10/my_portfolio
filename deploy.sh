#!/bin/bash

echo "🚀 Starting deployment..."

# Set maintenance mode
php artisan down

# Pull latest changes
git pull origin main

# Install dependencies
composer install --no-dev --optimize-autoloader

# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Run migrations
php artisan migrate --force

# Generate sitemap
php artisan sitemap:generate

# Optimize for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Set proper permissions
chmod -R 755 storage bootstrap/cache
chmod -R 644 storage/logs/*.log

# Create storage link if not exists
php artisan storage:link

# Set maintenance mode off
php artisan up

echo "✅ Deployment completed successfully!"
echo "🌐 Your website is now live!"
