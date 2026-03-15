<div align="center">
  <img
    src="https://raw.githubusercontent.com/soymadip/SDMP/6f32408ce61383db61fa4f31ed74013b9dfa7ed0/src/images/favicon/android-chrome-512x512.png"
    width=150
    alt="CSMP"
  >
  <h1>CSMP</h1>
  <h4>CRUD Student Management Portal written in Laravel</h4>
  <p>This is minor project.</p>
</div>

## 🛠️ Getting Started

This project is fully Dockerized. Ensure you have Docker and Docker Compose installed.

### Edit the Env

Edit the [.env](./.env) file with your own credentials. Do not touch which are marked not to edit.

### Start the application

```bash
docker-compose up
```

### Development with Auto-sync

```bash
docker compose watch
```

### Stop the application

```bash
docker-compose down
```

## 🌐 Access Points

- **Web App**: [`http://localhost:8000`](http://localhost:8000)
- **Database Dashboard**: [`http://localhost:8080`](http://localhost:8080)
- **Database URL**: `mysql://admin:admin@localhost:3306/csmp`

## 📂 Project Structure

- `laravel/`: Backend core and Livewire components.
- `frontend/`: Modernized UI assets and styles.

## 🚀 Tech Stack

- **Backend**: Laravel 12, PHP 8.4
- **Frontend**: Livewire 3, TailwindCSS 4, DaisyUI 5
- **Database**: MariaDB 10.11

### Packages

- livewire starter kit (Without Volt)

- spatie/laravel-permission

- spatie/browsershot
