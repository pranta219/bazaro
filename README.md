# Bazaro Laravel Application - README

## 📋 Project Overview

This is a **Laravel 11.x eCommerce application** converted from the Bazaro static HTML template. It follows MVC architecture and Laravel best practices.

## 🚀 Features

✅ Product catalog with categories  
✅ Session-based shopping cart  
✅ Product comparison (max 3 products)  
✅ Order processing & checkout  
✅ Authentication-ready (Laravel Breeze)  
✅ Responsive design  
✅ Sample products seeded  

## 📦 Requirements

- PHP 8.2 or higher
- Composer
- MySQL or SQLite
- Node.js & NPM (for Laravel Breeze)

## 🛠️ Installation

### Step 1: Install Dependencies
```bash
composer install
```

### Step 2: Configure Environment
```bash
cp .env.example .env
php artisan key:generate
```

Edit `.env` file:
```env
APP_NAME="Bazaro"
APP_URL=http://localhost:8000

DB_CONNECTION=sqlite
# Or for MySQL:
# DB_CONNECTION=mysql
# DB_DATABASE=bazaro
# DB_USERNAME=root
# DB_PASSWORD=
```

###Step 3: Database Setup
```bash
# Run migrations
php artisan migrate

# Seed sample products
php artisan db:seed --class=ProductSeeder
```

### Step 4: Install Authentication (Optional)
```bash
composer require laravel/breeze --dev
php artisan breeze:install
npm install && npm run dev
php artisan migrate
```

### Step 5: Start Development Server
```bash
php artisan serve
```

Visit: **http://localhost:8000**

## 📁 Project Structure

```
laravel-app/
├── app/
│   ├── Http/Controllers/     # All controllers
│   └── Models/                # Eloquent models
├── database/
│   ├── migrations/            # Database migrations
│   └── seeders/               # Data seeders
├── public/assets/             # Static assets (CSS, JS, images)
├── resources/views/           # Blade templates
├── routes/web.php             # Web routes
└── README.md
```

## 🗄️ Database Schema

### Products Table
- Product information (name, price, category, etc.)
- JSON fields for gallery, sizes, colors
- Featured flag for homepage display

### Orders Table
- Order details and totals
- User relationship (nullable for guests)
- Status tracking (pending, processing, completed, cancelled)

### Order Items Table  
- Individual items in each order
- Product snapshots at time of purchase
- Size and color selection

## 🛒 Cart & Compare System

- **Cart**: Session-based, persists across pages
- **Compare**: Maximum 3 products, session-based
- **Checkout**: Requires authentication
- **Orders**: Saved to database with all item details

## 📍 Routes

| HTTP Method | URI | Controller@Method |
|-------------|-----|-------------------|
| GET | `/` | HomeController@index |
| GET | `/products` | ProductController@index |
| GET | `/product/{slug}` | ProductController@show |
| GET | `/cart` | CartController@index |
| POST | `/cart/add` | CartController@add |
| GET | `/compare` | CompareController@index |
| GET | `/checkout` | OrderController@checkout 🔒 |

🔒 = Requires authentication

## 🎨 Frontend Assets

All original assets are preserved in `public/assets/`:
- Bootstrap 5
- Swiper.js (carousel)
- Custom CSS & animations
- Product images and icons

## 🔧 Development

### Adding New Products
```bash
php artisan tinker
```

```php
App\Models\Product::create([
    'name' => 'New Product',
    'slug' => 'new-product',
    'price' => 49.99,
    'category' => 'Bags',
    'image' => 'assets/img/product/new.jpg',
    'stock' => 100,
]);
```

### Clearing Cache
```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
```

## 📝 To-Do

- [ ] Complete remaining Blade views
- [ ] Add product search functionality
- [ ] Implement user dashboard
- [ ] Add email notifications
- [ ] Create admin panel
- [ ] Add payment gateway integration

## 📄 License

This project structure is based on Laravel framework (MIT License).

## 🆘 Support

For Laravel documentation: https://laravel.com/docs

For Composer issues: https://getcomposer.org/doc/

---

**Note**: Ensure PHP and Composer are installed before running this application. See `installation_requirements.md` for detailed setup instructions.
