# Fila POS

A modern Point of Sale (POS) system built with **Laravel** and **Filament**, designed for small and medium businesses. It provides product, inventory, sales, and user management in a clean and extensible interface.

## Installation

```bash
# Clone repository
git clone https://github.com/devghor/fila-pos.git
cd fila-pos

# Install PHP dependencies
composer install

# Install JS dependencies
npm install && npm run build

# Copy environment file
cp .env.example .env

# Generate app key
php artisan key:generate

# Run migrations & seed database
php artisan migrate --seed

# Start development server
php artisan serve

php artisan shield:super-admin
