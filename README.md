<div align="center">
  <img
    src="https://raw.githubusercontent.com/soymadip/SDMP/6f32408ce61383db61fa4f31ed74013b9dfa7ed0/src/images/favicon/android-chrome-512x512.png"
    width=150
    alt="CSMP"
  >
  <h1>CSMP</h1>
  <h4>CRUD Student Management Portal written in Laravel</h4>
  <p>This is a premium, modern student management system.</p>
</div>

## 🛠️ Getting Started

This project is a native Laravel application. Ensure you have PHP 8.4, Composer, and Node.js/Bun installed locally.

### 1. Installation

Clone the repository and install dependencies:

```bash
composer install
npm install # or bun install
```

### 2. Environment Setup

Open the environment file and configure your local database

Then:

```bash
php artisan key:generate
```

### 3. Database Migration

Run migrations to set up your local database:

```bash
php artisan migrate --seed
```

### 4. Running the Application

Start the development server and Vite HMR:

```bash
# Terminal 1: Laravel Server
php artisan serve

# Terminal 2: Vite HMR (Tailwind v4)
npm run dev # or bun run dev
```

## 📂 Project Structure

- `app/`: Laravel application core (Models, Controllers, Providers).
- `public/`: Static assets (images, JavaScript, CSS).
- `resources/views/`: Blade templates and components.
  - `components/`: Organized into `nav/`, `auth/`, `branding/`, and `ui/`.

## 🚀 Tech Stack

- **Backend**: Laravel 12, PHP 8.4, Livewire 3
- **Frontend**: TailwindCSS 4, Flux UI
- **Database**: MariaDB 10.11 / MySQL 8.0
- **PDF Generation**: `spatie/browsershot` (Requires Puppeteer)

---

For detailed developer guidelines and styling rules, refer to **[`AGENTS.md`](AGENTS.md)**.
