# 🔧 Quick Fix for Composer Installation

## Issue
Composer dependency resolution failed. This is common with Laravel 11.

## ✅ Solution: Create Fresh Laravel Project

Run these commands in **Laragon Terminal** or **PowerShell**:

### Step 1: Create Fresh Laravel Project
```powershell
# In Laragon Terminal, navigate to www directory
cd C:\laragon\www

# Create new Laravel project (this will take 2-5 minutes)
composer create-project laravel/laravel bazaro-app

# Navigate into the new project
cd bazaro-app
```

### Step 2: Copy Our Custom Files
```powershell
# Copy controllers
Copy-Item -Path "e:\Work file\bazaro\laravel-app\app\Http\Controllers\*" -Destination "C:\laragon\www\bazaro-app\app\Http\Controllers\" -Force

# Copy models
Copy-Item -Path "e:\Work file\bazaro\laravel-app\app\Models\*" -Destination "C:\laragon\www\bazaro-app\app\Models\" -Force

# Copy migrations
Copy-Item -Path "e:\Work file\bazaro\laravel-app\database\migrations\*" -Destination "C:\laragon\www\bazaro-app\database\migrations\" -Force

# Copy seeders
Copy-Item -Path "e:\Work file\bazaro\laravel-app\database\seeders\*" -Destination "C:\laragon\www\bazaro-app\database\seeders\" -Force

# Copy routes
Copy-Item -Path "e:\Work file\bazaro\laravel-app\routes\web.php" -Destination "C:\laragon\www\bazaro-app\routes\web.php" -Force

# Copy views
Copy-Item -Path "e:\Work file\bazaro\laravel-app\resources\views\*" -Destination "C:\laragon\www\bazaro-app\resources\views\" -Recurse -Force

# Copy assets
Copy-Item -Path "e:\Work file\bazaro\laravel-app\public\assets" -Destination "C:\laragon\www\bazaro-app\public\assets" -Recurse -Force
```

### Step 3: Configure & Run
```powershell
# Navigate to project
cd C:\laragon\www\bazaro-app

# Update .env for SQLite
# Open .env file and change:
# DB_CONNECTION=sqlite

# Create database
New-Item -Path database/database.sqlite -ItemType File -Force

# Run migrations
php artisan migrate

# Seed products
php artisan db:seed --class=ProductSeeder

# Start server
php artisan serve
```

Visit: **http://localhost:8000**

---

## Alternative: Manual composer.json Fix

If you prefer to fix the existing installation, edit `composer.json` and change:

```json
"require": {
    "php": "^8.1",
    "laravel/framework": "^10.0",
    "laravel/tinker": "^2.8"
}
```

Then run:
```powershell
composer update
```

---

## What Went Wrong?

Laravel 11 has strict PHP and dependency requirements. Creating a fresh project with `composer create-project` ensures all dependencies are compatible.
