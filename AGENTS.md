# AGENTS.md - CTS Student Management Portal (CSMP) Architecture & Standards

## 🚀 Project Vision

**CSMP** is a high-fidelity Student Management Portal designed for speed, security, and a premium user experience. It leverages **Laravel 12** and **TailwindCSS 4.2+** to deliver a unified, zero-config monograph.

---

## 📂 System Architecture

### 1. Unified Monograph

The project is built as a single, self-contained monograph:

- **Root (`./`)**: Contains all backend logic and configuration.
- **Frontend Assets (`public/`)**: Storage for static images and manual-include assets only.
- **Vite Assets (`resources/`)**: Source for compiled/bundled CSS and JS (managed via `app.css` and `app.js`).
- **Views (`resources/views/`)**: Blade templates with a modular component system (`components/nav/`, `components/auth/`, etc.).

### 2. Technical Stack

- **Backend**: Laravel 12 + Livewire 3
- **Frontend**: TailwindCSS v4.2+ (Vanilla, Zero-Config)
- **Infrastructure**: MariaDB 11.4 + phpMyAdmin (via Docker Compose)
- **PDF Core**: `spatie/browsershot` + Puppeteer

---

## 🎨 Frontend & Styling Standards

### 1. Unified Premium Aesthetic

All UI must feel state-of-the-art, using a "Glassmorphism" inspired design system.

- **The "Solid on Blurred" Pattern**:
  - **Containers**: Wrap primary content in **`backdrop-blur-md`** or **`backdrop-blur-3xl`**.
  - **Cards**: Use solid backgrounds (e.g., `bg-white/90` or `bg-slate-900/90`) to ensure legibility on blurred backgrounds.
  - **Corners**: Strictly use **`rounded-2xl`** (16px) for all primary UI elements (cards, buttons, modals).

### 2. Design Tokens & Typography

- **Typography**: Strictly use **"Outfit"** (Google Fonts) for regular text and headers.
- **Color Palette**:
  - **Primary**: `slate-900` (Light) / `slate-50` (Dark).
  - **Accent**: `rose-500` (Rose) for primary actions and branding.
  - **Status**: `emerald-500` (Success), `rose-500` (Error), `amber-500` (Warning).

### 3. Iconography & Masks

We use a modular SVG mask system to maintain zero-config compatibility and dynamic coloring:

- **Implementation**: Use Tailwind mask utilities (`mask-no-repeat mask-center mask-contain`).
- **Styling**: Apply the SVG path via `style="mask-image: url(...)"`.
- **Coloring**: Use standard Tailwind `text-` classes to colorize the mask.

### 4. Zero-Config Dark Mode

- **Variant**: Strictly use the **`in-[.dark]:`** native Tailwind variant (instead of the standard `dark:`) for all dark mode styles.
- **State**: The theme is managed via the **`flux.appearance`** localStorage key and synchronized with **Flux UI**.
- **Visuals**: Use `bg-slate-950` with subtle glass overlays for dark mode containers.

### 5. Animation (Tailwind v4)

- **Transitions**: Use `transition-all duration-300 ease-in-out` for all interactive elements.
- **Entry**: Leverage the **`starting:`** variant for mount animations (e.g., `starting:opacity-0 starting:translate-y-4`).

---

## ⚙️ Environment & Configuration Standards

### 1. Dynamic Configuration (`config/app.php`)

- **Rule**: All application identity (Names, GitHub URLs), administrative credentials, and institutional data (Name, Address, Phone, Map URL) **must** be stored in `.env` and mapped directly inside the `config/app.php` array.
- **Usage**: Always use the `config()` helper in Blade templates (e.g., `{{ config('app.name') }}`, `{{ config('app.superadmin.email') }}`, or `{{ config('app.institute.name') }}`). Never use `env()` directly in views.
- **Reason**: This prevents hardcoded values and protects against headers/footers revealing defaults in production.

### 2. Local vs. Production Execution

- **Tracking `.env`**: Because the `.env` file is tracked in this repository to synchronize shared settings, the application's default `APP_ENV` and `APP_DEBUG` are strictly set to `production` and `false` to prevent accidental leakages.
- **Local Development**: The `npm run dev` (`package.json`) script automatically injects `APP_ENV=local APP_DEBUG=true` using the `cross-env` package before spinning up the Laravel backend. This ensures cross-platform compatibility (Windows/Mac/Linux) while safely guaranteeing a debug environment locally without risking production servers.

---

## 🛠️ Performance & Dev Lifecycle

### 1. Development Hot Reloading (HMR) & Vite

- **Requirement**: Always run `npm run dev` (or `bun run dev`) in parallel with `php artisan serve`.
- **HMR**: Vite automatically detects changes and "hot-swaps" CSS/JS without a browser reload.
- **Watching Files**: In `vite.config.js`, you only need to define your main entry points (e.g., `app.css` and `app.js`) in the `input` array. Vite automatically watches any sub-files imported directly within those streams (such as `@import` for CSS or standard JS imports). Do not manually list every component file.

### 2. PHP Optimization (OPcache)

Ensure instant PHP/Blade updates by setting **`opcache.revalidate_freq=0`** in your system `php.ini`. Refer to the `README.md` for `sed` one-liners to automate this.

---

## 🛠️ JS & Utility Architecture

### 1. Global Utilities (`app.js`)

The `resources/js/app.js` file is the primary entry point for global logic. It handles:

- **Theme Toggle**: Synchronizes light/dark modes with Flux and LocalStorage.
- **Password Toggles**: Global `window.togglePassword` helper for auth forms.
- **Environment Checks**: Protocol detection and debug warnings.

### 2. Page-Specific Scripts

page specific scripts should be added in the page itself or resources/<page>.js if too too much long script.

---

## 🚀 Development Workflow

### 1. Local Setup

```bash
# Start Database & phpMyAdmin (Metroid Dark UI enabled by default)
docker-compose up -d

# Seed the base roles and Super Admin account
php artisan migrate --seed
```

### 2. PDF Rendering

Puppeteer is already included in the `package.json` dependencies for high-fidelity ID card generation. Simply run:

```bash
npm install
```

---

Update this file after each notable changes.

_Last updated: March 2026 - Documentation Consolidation & Quality Polish (Nested Config Sync)._
