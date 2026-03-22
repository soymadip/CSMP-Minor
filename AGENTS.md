# AGENTS.md - CTS Student Management Portal (CSMP) Overview

## 🚀 Introduction

**CTS Student Management Portal (CSMP)** is a comprehensive management system built primarily with **Laravel 12**.

**Core Mission**: Providing a premium, modern interface for educators to manage university operations with minimal friction.

## 📂 Project Structure

The project is structured as a unified **Laravel 12** monograph:

- **`./`**: The project root is a unified **Laravel 12** monograph.
- **`public/`**: Contains all static assets (img, js, vanilla css).
- **`resources/views/`**: Blade templates including ported high-fidelity layouts.
  - **`components/`**: Organized into `nav/`, `auth/`, `branding/`, and `ui/` subdirectories for modularity.

## 🛠️ Tech Stack

- **Framework**: Laravel 12 + Livewire 3
- **Styling**: TailwindCSS 4.2+ (Vanilla, Zero-Config).
- **Icons**: Standardized SVG assets using built-in Tailwind mask utilities.
- **PDF Generation**: `spatie/browsershot` + Puppeteer for high-fidelity ID card rendering.
- **Typography**: "Outfit" (Global) and "Merriweather" (Institutional Header).
- **Standard**: Manual dark mode uses the **`in-[.dark]:`** native variant. Integrated with **Flux UI** for theme synchronization across all pages. Premium glassmorphism uses **`backdrop-blur-3xl`**.

## 🎨 Frontend & Styling Guidelines

### 1. The "Solid on Blurred" Pattern

- **Layouts**: Wrap primary content sections in a **`backdrop-blur-md`** or **`backdrop-blur-3xl`** container.
- **Cards**: Secondary/Content cards should use solid backgrounds to maintain readability on top of blurred overlays.
- **Corners**: Strictly use **`rounded-2xl`** (16px) for cards, modals, and buttons.

### 2. Zero-Config AI Guidelines

To maintain the **100% Zero-Config Vanilla Tailwind v4** architecture, follow these rules:

- **No Custom CSS**: Do not add custom `@theme`, `@utility`, or `@variant` blocks to `tailwind.css`.
- **Animations**: Use the **`starting:`** variant for entry animations (e.g., `starting:opacity-0 starting:translate-y-4`).
- **Icons**: Use built-in Tailwind mask utilities (e.g., `mask-no-repeat mask-center mask-contain`).
- **Dark Mode**: Supports a manual theme toggle synchronized with Flux. The preference is stored in `localStorage` under **`flux.appearance`**.
  - Strictly use the **`in-[.dark]:`** variant instead of the standard `dark:` prefix.
  - Toggles must call `window.Flux.applyAppearance(appearance)` for synchronization.
  - Early detection script in `partials/head.blade.php` defaults to `dark` to prevent FOUC.

## 🛠️ JavaScript Architecture

The JS layer is decoupled from HTML templates and modularized:

- **`utils.js`**: Pure utilities and global listeners. Handles the Theme Toggle via the `#theme-toggle-input` selector.
- **Page-specific JS**: Files like `home.js` or `auth.js` contain specific logic using vanilla Tailwind classes.

## 🛠️ Development Workflow

- **Native Development**: Run `php artisan serve` and `npm run dev` in the root directory for a hot-reloading development experience.
- **Vite**: Run `npm run build` in the root directory to process CSS and JS for production.
- **Database**: Ported to a native **MariaDB/MySQL** setup for high-performance data management.
- **PDF Infrastructure**: Requires `npm install puppeteer` locally for Browsershot to function.

---

Last updated: March 2026 - Concluding Documentation Consolidation and Reorganization.
