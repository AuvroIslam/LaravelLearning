# Laravel Learning Journey - Ninja Network

Welcome to my Laravel learning project! This repository documents my journey learning Laravel PHP framework by building the **Ninja Network** application.

## 🚀 Project Setup

This project was created following these steps:

### Prerequisites
1. **Install Laravel Herd** - Local development environment for Laravel
2. **Project Location** - Must be inside Laravel Herd folder for proper functionality
3. **Base Terminal** - Use system terminal for commands

### Project Creation
```bash
laravel new ninja_network
```
- Selected all default options during setup
- Project automatically configured with Laravel's standard structure

### Development Server
The project runs locally at: **ninja_network.test**

![Project Preview](previews/image.png)

## 📁 Major Project Structure

Understanding Laravel's key directories:

### `/app` - Application Logic
- Contains models, controllers, and core application code
- **Controllers**: Handle HTTP requests and responses
- **Models**: Interact with database and business logic

### `/database` - Database Management
- **Migrations**: Database schema version control
- **Seeders**: Sample data for development
- **Factories**: Generate fake data for testing

### `/resources` - Frontend Assets
- **Views**: Blade templates (`.blade.php` files)
- **CSS/JS**: Styling and JavaScript files
- **Lang**: Localization files

### `/routes` - URL Routing
- **web.php**: Web routes for the application
- **api.php**: API routes
- **console.php**: Artisan commands

## 🎯 Learning Progress

### ✅ Completed
- [x] Laravel Herd installation and setup
- [x] Project creation with `laravel new ninja_network`
- [x] Understanding basic project structure
- [x] Modified welcome view with custom content
- [x] Learned about Blade templating basics

### 🔄 Currently Learning
- [ ] Routing and Controllers
- [ ] Database migrations and models
- [ ] Blade templating advanced features
- [ ] Authentication system
- [ ] Form handling and validation

### 📝 Key Changes Made

#### Welcome View Modifications
Located in: `resources/views/welcome.blade.php`

**Important Laravel concept learned:**
```php
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
```
This line demonstrates:
- **Blade syntax**: `{{ }}` for echoing variables
- **Laravel helpers**: `app()->getLocale()` gets current application locale
- **PHP functions**: `str_replace()` converts underscores to hyphens for valid HTML lang attribute

## 🛠️ Development Commands

```bash
# Start development server (if not using Herd)
php artisan serve

# Run migrations
php artisan migrate

# Create new controller
php artisan make:controller ControllerName

# Create new model
php artisan make:model ModelName

# Clear application cache
php artisan cache:clear
```

## 📚 Learning Resources

- [Laravel Documentation](https://laravel.com/docs)
- [Laravel Bootcamp](https://bootcamp.laravel.com)
- [Laracasts](https://laracasts.com)
- [Laravel News](https://laravel-news.com)

## 🎯 Project Goals

This learning project aims to cover:
1. **MVC Architecture** - Understanding Model-View-Controller pattern
2. **Routing** - Creating and managing application routes
3. **Database Operations** - Migrations, models, and Eloquent ORM
4. **Authentication** - User registration and login system
5. **Frontend Integration** - Working with Blade templates and assets
6. **Testing** - Writing and running tests
7. **Deployment** - Preparing application for production

## 📊 Project Status

**Created**: Learning Phase  
**Framework**: Laravel (Latest)  
**PHP Version**: Compatible with Laravel requirements  
**Database**: SQLite (default for development)  
**Frontend**: Blade templates with basic HTML/CSS

---

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
