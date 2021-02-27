# The VPN Servers List Project

This project is open source project.

# Deployment Steps

```bash
git clone https://github.com/mmcyberyouth/mcy_vpn
cd mcy_vpn
composer install # or update
cp .env.example .env 
nano .env
```
and change to Host, Password and DB name of your Host Server.

```bash
php artisan key:generate # Larvael application necessary application key
php artisan migrate
```
Migration is to create db table to your database.
And you can launch now.

# Features

Admin Register,Login Logout
CRUD System 
Minimal Admin Panel

# Usage

First Register Account at `/register` and it will redirect to `/login` page.

You will need to login to reach dashboard.

If you reach to the dashboard,you can do CRUD.

# Contact To Developer?

https://www.facebook.com/aungmyatmoe834

# Website

https://vpn.mcy.asia/
