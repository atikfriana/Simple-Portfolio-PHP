# 🌐 Laravel Static Portfolio Landing Page

> Dibuat untuk menampilkan personal branding dan showcase proyek dalam bentuk landing page sederhana menggunakan **Laravel**, **Blade Template**, dan **Tailwind CSS**.

📁 Project ini tidak menggunakan database atau CRUD. Semua konten ditulis langsung pada file view Blade. Cocok untuk keperluan portfolio statis, latihan Laravel layouting, atau tugas Web Framework.

---

## 🎯 Fitur Utama

- 🖼️ **Landing Page Portfolio** – Halaman personal dengan bagian seperti:
  - Header & Hero
  - Pendidikan
  - Tools / Skills
  - Proyek / Portofolio
  - Kontak
  - Footer
- 🔧 **Tanpa Database / CRUD** – Semua data disimpan langsung di view
- 🎨 **Desain Responsif** – Styling menggunakan TailwindCSS
- 📄 **Blade Template** – Layout modular dan mudah dikembangkan

---

## 📂 Struktur Views (Simplified)

```bash
resources/views/
├── layouts/
│   └── app.blade.php        # Layout utama (header, footer)
├── partial/
│   ├── navbar.blade.php     # Navigasi
│   ├── pendidikan.blade.php
│   ├── tools.blade.php
│   ├── portfolio.blade.php
│   └── contact.blade.php
├── home.blade.php           # Halaman utama
└── welcome.blade.php        # (default laravel, bisa tidak digunakan)
````

---

## 🖼️ UI Preview

| Home                                                                                                | Tools                                                                                                 | Pendidikan + Kontak                                                                                                            |
| --------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------ |
| ![Home](https://raw.githubusercontent.com/atikfriana/landingpage-laravel/main/screenshots/home.png) | ![Tools](https://raw.githubusercontent.com/atikfriana/landingpage-laravel/main/screenshots/tools.png) | ![Pendidikan & Kontak](https://raw.githubusercontent.com/atikfriana/landingpage-laravel/main/screenshots/pendidikankontak.png) |

| Portofolio                                                                                                     | Footer                                                                                                  |
| -------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| ![Portofolio](https://raw.githubusercontent.com/atikfriana/landingpage-laravel/main/screenshots/portfolio.png) | ![Footer](https://raw.githubusercontent.com/atikfriana/landingpage-laravel/main/screenshots/footer.png) |

---

## ⚙️ Cara Menjalankan Project

1. **Clone Repositori**

   ```bash
   git clone https://github.com/atikfriana/landingpage-laravel.git
   cd landingpage-laravel
   ```

2. **Install Dependency**

   ```bash
   composer install
   npm install
   npm run dev
   ```

3. **Generate Key & .env**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Jalankan Server**

   ```bash
   php artisan serve
   ```

5. Akses di browser: [http://localhost:8000](http://localhost:8000)

---

## 📝 Catatan

* Proyek ini **tidak menggunakan database atau migrasi**
* Semua data ada di file `resources/views/partial/`
* Kamu bisa duplikasi bagian `tools`, `portfolio`, dsb langsung dari blade-nya

---

## 📄 Lisensi

MIT License © 2025
Made with ❤️ by Atika Arifiana

````

---
