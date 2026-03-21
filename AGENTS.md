# AGENTS.md - CTS Student Management Portal (CSMP) Overview

## 🚀 Introduction

**CTS Student Management Portal (CSMP)** is a comprehensive management system built primarily with **Laravel 12**.

**Core Mission**: Providing a premium, modern interface for educators to manage university operations with minimal friction.

## 📂 Project Structure

The project encompasses three main pillars:

- **`laravel/`**: Backend core and Livewire components.
- **`frontend/`**: Modernized UI layer (Tailwind 4.2+), Ui is ported from frontend to backend. For specific frontend guidelines, see [`frontend/FRONTEND.md`](frontend/FRONTEND.md).

## 🔑 Key Functionalities by Role

The portal is optimized for academic staff:

- **Faculty/Teacher**: Registration and academic record management.
- **Admin**: Staff approval workflows and portal management.
- **Superadmin**: Full system control.

## 🛠️ Tech Stack

- **Framework**: Laravel 12 + Livewire
- **Styling**: TailwindCSS 4.2+ (Vanilla, Zero-Config).
- **Icons**: Standardized SVG assets using built-in Tailwind mask utilities (`mask-image`).
- **Standard**: Manual dark mode uses the **`in-[.dark]:`** native variant. Transition animations use the **`starting:`** variant.

## 🛠️ Development Workflow

- **Frontend**: Run `npm run dev` in `./frontend/` for Tailwind watcher and live preview.
- **Backend**: Standard Artisan commands in `./laravel/`.

## 🛠️ Zero-Config AI Guidelines

To maintain the **100% Zero-Config Vanilla Tailwind v4** architecture, follow the specific styling rules and variants documented in **[`frontend/FRONTEND.md`](frontend/FRONTEND.md)**.

---

update the agents.md and frontend.md after changes
