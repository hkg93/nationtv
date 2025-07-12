<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
</p>
<p align="center">
  <img src="https://raw.githubusercontent.com/hkg93/nationtv/main/public/logo-10.png" width="400" alt="nationtv_logo">
</p>
<h1 align="center">NationTV 📺</h1>

<p align="center">
  A powerful, content-driven, Laravel 12-based web platform to showcase latest news, updates, and programs. Built with modern stack including Vite, TailwindCSS, and Livewire.
</p>

---

## 📌 About NationTV

**NationTV** is a custom news content management system (CMS) developed using Laravel 12. It is designed to serve as the backend and frontend platform for a regional or national news portal.

With its modular architecture and intuitive admin features, it empowers editors and publishers to manage news, categories, media, and user feedback easily and efficiently.

---

## 🚀 Features

- ✅ Laravel 12 powered backend
- 🎨 Tailwind CSS integrated frontend
- ⚡ Vite for fast development and hot reload
- 📂 Modular structure for categories, sub-categories, and news
- 🔎 SEO friendly structure
- 📱 Responsive design
- 👥 Role-based user management (Admin, Editor, etc.)
- 🧾 News detail and listing pages
- 📸 Media upload & gallery
- 💬 Review and comment section (planned)
- 🌍 Location-based filtering (planned)

---

## 🛠️ Installation

```bash
# Clone the repository
git clone https://github.com/hkg93/nationtv.git

cd nationtv

# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install

# Create .env file and configure your DB credentials
cp .env.example .env
php artisan key:generate

# Run migrations
php artisan migrate

# Build assets
npm run build

# Start development server
php artisan serve
