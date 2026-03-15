# GEMINI.md - CSMP-Minor Project Overview

## 🚀 Introduction

**CSMP-Minor** is a **Faculty Management Portal** (rebranded from student-focused) built primarily with **Laravel 12**. It is designed to manage academic records, departmental workflows, and administrative tasks for teachers and staff.

**Core Mission**: Providing a premium, modern interface for educators to manage university operations with minimal friction.

## 📂 Project Structure

The project encompasses three main pillars:

- **`laravel/`**: Backend core and Livewire components.
- **`frontend/`**: Modernized UI layer (Tailwind 4 + DaisyUI 5). For specific frontend guidelines, see [`frontend/FRONTEND.md`](frontend/FRONTEND.md).

## 🔑 Key Functionalities by Role

The portal is optimized for academic staff:

- **Faculty/Teacher**: Registration and academic record management.
- **Admin**: Staff approval workflows and portal management.
- **Superadmin**: Full system control.

## 🛠️ Tech Stack

- **Framework**: Laravel 12 + Livewire
- **Styling**: TailwindCSS 4 + DaisyUI 5
- **Icons**: Standardized SVG assets using `mask-image` for coloring.

## 🛠️ Development Workflow

- **Frontend**: Run `npm run dev` in `./frontend/` for Tailwind watcher and live preview.
- **Backend**: Standard Artisan commands in `./laravel/`.

---

update the gemini.md and frontend.md after changes
