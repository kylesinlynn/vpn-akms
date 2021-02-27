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
Migration is to create db tables to your database.
And you can launch now.

# Do you want to contribute?

## Requirements

- Familiar with Tailwind CSS 
- Familiar with Laravel PHP Framework and Database ORM architecture

# Key Features

- Admin Login, Logout
- Minimal Admin Dashboard
- CRUD Operation 

# Contact To Developer?

https://www.facebook.com/aungmyatmoe834


# Website

https://vpn.mcy.asia/

# Created Date

26 Feb 2021 
