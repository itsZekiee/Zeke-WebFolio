<div align="center">

# 🌐 Zeke WebFolio

### A Modern Laravel-Powered Web Portfolio

[![Laravel](https://img.shields.io/badge/Laravel-11. x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![Blade](https://img.shields.io/badge/Blade-51. 1%25-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com/docs/blade)
[![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)](https://opensource.org/licenses/MIT)

**A comprehensive demonstration of full-stack development capabilities**

[Live Demo](#) · [Report Bug](https://github.com/itsZekiee/Zeke-WebFolio/issues) · [Request Feature](https://github.com/itsZekiee/Zeke-WebFolio/issues)

</div>

---

## 📋 About The Project

**Zeke WebFolio** is a professional web portfolio built with Laravel, showcasing modern full-stack development practices. This project demonstrates proficiency in PHP backend development, frontend integration, and database management through a clean, responsive portfolio interface.

### ✨ Key Features

- 🎨 **Dynamic Project Showcase** - Manage and display projects with detailed descriptions, technologies, and live links
- 💼 **Skills Overview** - Interactive presentation of technical skills and competencies
- 📧 **Contact System** - Functional contact form with email integration
- 🎯 **Admin Dashboard** - Content management system for easy updates
- 📱 **Responsive Design** - Fully optimized for desktop, tablet, and mobile devices
- 🔐 **Secure Authentication** - Laravel's built-in authentication system
- 🚀 **Performance Optimized** - Fast loading times with optimized assets

---

## 🛠️ Built With

This portfolio leverages modern web technologies and follows Laravel best practices:

| Technology | Purpose | Percentage |
|-----------|---------|------------|
| **Blade Templates** | Frontend templating engine | 51.1% |
| **PHP** | Backend logic and API | 44.4% |
| **CSS** | Styling and animations | 4.1% |
| **JavaScript** | Interactive functionality | 0.4% |

### Core Technologies

- **[Laravel 11.x](https://laravel.com)** - PHP Framework
- **[Blade](https://laravel.com/docs/blade)** - Templating Engine
- **[MySQL](https://www.mysql.com/)** - Database
- **[Vite](https://vitejs.dev/)** - Asset Bundling
- **[Tailwind CSS](https://tailwindcss.com/)** - Utility-first CSS Framework

---

## 🚀 Getting Started

Follow these steps to set up the project locally. 

### Prerequisites

Ensure you have the following installed: 

- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL/MariaDB

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/itsZekiee/Zeke-WebFolio.git
   cd Zeke-WebFolio
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node dependencies**
   ```bash
   npm install
   ```

4. **Configure environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Set up database**
   - Create a new MySQL database
   - Update `.env` file with your database credentials: 
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Run migrations**
   ```bash
   php artisan migrate
   ```

7. **Seed the database (optional)**
   ```bash
   php artisan db:seed
   ```

8. **Build assets**
   ```bash
   npm run dev
   ```

9. **Start the development server**
   ```bash
   php artisan serve
   ```

10. **Access the application**
    - Visit:  `http://localhost:8000`

---

## 📁 Project Structure

```
Zeke-WebFolio/
├── app/                    # Application core
│   ├── Http/              # Controllers & Middleware
│   ├── Models/            # Eloquent Models
│   └── Services/          # Business Logic
├── config/                # Configuration files
├── database/              # Migrations & Seeders
│   ├── migrations/        # Database migrations
│   └── seeders/           # Database seeders
├── public/                # Public assets
│   ├── css/              # Compiled CSS
│   ├── js/               # Compiled JavaScript
│   └── images/           # Images & media
├── resources/             # Frontend resources
│   ├── views/            # Blade templates
│   ├── css/              # Source CSS
│   └── js/               # Source JavaScript
├── routes/                # Route definitions
│   ├── web.php           # Web routes
│   └── api. php           # API routes
├── storage/               # Storage files
└── tests/                 # Test files
```

---

## 💡 Usage

### Adding New Projects

1. Log in to the admin dashboard
2. Navigate to "Projects" section
3. Click "Add New Project"
4. Fill in project details, upload images, and save

### Updating Skills

1. Access the admin panel
2. Go to "Skills" management
3. Add, edit, or remove skills as needed

### Managing Contact Messages

- All contact form submissions are stored in the database
- Access them through the admin dashboard under "Messages"

---

## 🧪 Testing

Run the test suite: 

```bash
# Run all tests
php artisan test

# Run tests with coverage
php artisan test --coverage
```

---

## 🤝 Contributing

Contributions are welcome! Here's how you can help:

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

---

## 📝 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

## 👤 Author

**Zeke**

- GitHub: [@itsZekiee](https://github.com/itsZekiee)
- Portfolio: [Zeke WebFolio](https://github.com/itsZekiee/Zeke-WebFolio)

---

## 🙏 Acknowledgments

- [Laravel](https://laravel.com) - The PHP Framework for Web Artisans
- [Tailwind CSS](https://tailwindcss.com) - For the amazing utility-first CSS framework
- [Heroicons](https://heroicons.com) - Beautiful hand-crafted SVG icons
- The Laravel community for excellent documentation and support

---

## 📊 Project Stats

![Project Language Composition](https://img.shields.io/badge/Blade-51.1%25-FF2D20?style=flat-square)
![Project Language Composition](https://img.shields.io/badge/PHP-44.4%25-777BB4?style=flat-square)
![Project Language Composition](https://img.shields.io/badge/CSS-4.1%25-1572B6?style=flat-square)
![Project Language Composition](https://img.shields.io/badge/JavaScript-0.4%25-F7DF1E?style=flat-square)

---

<div align="center">

**[⬆ Back to Top](#-zeke-webfolio)**

Made with ❤️ and Laravel

</div>
