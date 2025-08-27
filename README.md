# Portfolio Website - Muhammad Rafly Juliano

A modern, responsive portfolio website built with Laravel and Tailwind CSS.

## 🌟 Features

- **Modern Design**: Clean and professional design with smooth animations
- **Responsive**: Fully responsive across all devices
- **SEO Optimized**: Meta tags, sitemap, and robots.txt for better search engine visibility
- **Performance**: Optimized with lazy loading, preload, and DNS prefetch
- **Security**: Security headers and best practices implemented
- **Contact Form**: Functional contact form with email notifications
- **Social Media Integration**: Links to GitHub, LinkedIn, Instagram, and Email

## 🛠️ Tech Stack

- **Backend**: Laravel 11
- **Frontend**: Tailwind CSS, Alpine.js
- **Animations**: AOS (Animate On Scroll)
- **Icons**: Font Awesome
- **Deployment**: Custom deployment script with optimization

## 📁 Project Structure

```
portfolio/
├── app/
│   ├── Console/Commands/GenerateSitemap.php
│   ├── Http/Controllers/ContactController.php
│   └── Http/Middleware/SecurityHeaders.php
├── resources/views/
│   ├── layouts/app.blade.php
│   ├── home.blade.php
│   ├── about.blade.php
│   ├── skill.blade.php
│   └── errors/
│       ├── 404.blade.php
│       └── 500.blade.php
├── public/
│   ├── cv/
│   ├── images/
│   ├── robots.txt
│   └── sitemap.xml
├── deploy.sh
└── DEPLOYMENT_CHECKLIST.md
```

## 🚀 Getting Started

1. **Clone the repository**
   ```bash
   git clone https://github.com/Flyano10/my_portfolio.git
   cd my_portfolio
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure database** (if needed)
   ```bash
   php artisan migrate
   ```

5. **Generate sitemap**
   ```bash
   php artisan sitemap:generate
   ```

6. **Start development server**
   ```bash
   php artisan serve
   ```

## 📧 Contact Form Setup

The contact form uses Laravel's mail system. Configure your mail settings in `.env`:

```env
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-email
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email
MAIL_FROM_NAME="${APP_NAME}"
```

## 🚀 Deployment

Use the provided deployment script:

```bash
chmod +x deploy.sh
./deploy.sh
```

Or follow the manual steps in `DEPLOYMENT_CHECKLIST.md`.

## 📱 Social Media Links

- **GitHub**: [@Flyano10](https://github.com/Flyano10)
- **LinkedIn**: [Muhammad Rafly Juliano](https://www.linkedin.com/in/muhammad-rafly-juliano-037688287)
- **Instagram**: [@liianno_](https://www.instagram.com/liianno_)
- **Email**: raflyjuliano62@gmail.com

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

**Built with ❤️ by Muhammad Rafly Juliano**
