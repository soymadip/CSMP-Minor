<div align="center">
  <img
    src="./public/img/cts/logo.png"
    width=150
    alt="CSMP"
  >
  <h1>CSMP</h1>
  <h4>CRUD Student Management Portal written in Laravel</h4>
</div>

## 🛠️ Getting Started

This project is a native Laravel application. Ensure you have PHP 8.4, Composer, and Node.js/Bun installed locally. Aditionally docker is needed if you want to run the database locally.

### 1. Installation

Clone the repository and install dependencies:

```bash
composer install
npm install # or bun install
```

### 2. Environment Setup

Open the [`.env`](./.env) file and configure your App settings.

Then generate app key:

```bash
php artisan key:generate
```

### 3. Database & Docker Setup

CSMP provides a pre-configured Docker Compose setup for consistent local development:

```bash
docker-compose up -d
```

#### Services & Credentials

- **MySQL Container**: `csmp-mysql` (MariaDB 11.4)
  - **Host**: `127.0.0.1` (Local) / `mysql` (Docker Network)
  - **Port**: `3306`
  - **Credentials**: `admin` / `csmp_Admin` (defined in `.env`)
- **phpMyAdmin**: [http://localhost:8080](http://localhost:8080)
  - **Login**: Use the credentials above (Theme: Metro).

#### Migrations

Once the database is running, seed the data:

```bash
php artisan migrate --seed
```

### 4. Running the Application

Start the development server and Vite HMR:

```bash
npm run dev
```

### 5. PHP Optimization (HMR & Debugging)

If you find that your PHP or Blade changes are not reflecting instantly, your OPcache might be too aggressive. Run these commands to optimize your `php.ini` for development:

```bash
# 1. Find your php.ini path
export PHP_INI=$(php --ini | grep "Loaded Configuration File" | awk '{print $NF}' | tr -d '"')

# 2. Apply development optimizations
sudo sed -i 's/^;*opcache.revalidate_freq=.*/opcache.revalidate_freq=0/' $PHP_INI
sudo sed -i 's/^display_errors =.*/display_errors = On/' $PHP_INI
sudo sed -i 's/^display_startup_errors =.*/display_startup_errors = On/' $PHP_INI
sudo sed -i 's/^error_reporting =.*/error_reporting = E_ALL/' $PHP_INI

# 3. Restart your server
php artisan serve
```

## 📂 Project Structure

- `app/`: Laravel application core (Models, Controllers, Providers).
- `public/`: Static assets (images, JavaScript, CSS).
- `resources/views/`: Blade templates and components.
  - `components/`: Organized into `nav/`, `auth/`, `branding/`, and `ui/`.

## 🚀 Tech Stack

- **Backend**: Laravel 12, PHP 8.4, Livewire 3
- **Frontend**: TailwindCSS 4, Flux UI
- **Database**: MariaDB 11.4 / MySQL 8.0
- **PDF Generation**: `spatie/browsershot` (Requires Puppeteer)

---

For detailed developer guidelines and styling rules, refer to **[`AGENTS.md`](AGENTS.md)**.
