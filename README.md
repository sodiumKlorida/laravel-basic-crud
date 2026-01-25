# Laravel Basic CRUD User

Project ini adalah aplikasi **Laravel Basic CRUD (Create, Read, Update, Delete)** untuk manajemen data **User**.  
Cocok untuk pembelajaran dasar Laravel seperti **migration, model, seeder, controller, dan routing**.

---

## 🚀 Fitur
- CRUD User (Create, Read, Update, Delete)
- Role User (`admin`, `user`)
- Validation form
- Search User
- Seeder data user
- Struktur Laravel standar

---

## 🧰 Teknologi
- Laravel 12
- PHP >= 8.2
- MySQL
- Composer

---

## ⚙️ Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/username/laravel-basic-crud-user.git
cd laravel-basic-crud-user
```

### 2. Install Depedency
```bash
composer intall
```

### 3 Konfigurasi Database
```bash
DB_DATABASE=laravel_crud
DB_USERNAME=root
DB_PASSWORD=
```

### 4 🛠️ Migration & Seeder
```bash
php artisan migrate:fresh --seed
```
Seeder akan membuat:
- User Admin
- User Biasa
