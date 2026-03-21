# FRONTEND.md - Frontend Documentation

## 🎨 Unified Premium Aesthetic

The frontend of **CTS Student Management Portal (CSMP)** is designed to feel state-of-the-art and professional. All UI contributions must adhere to these standards:

### 0. Keep in mind both light and dark mode

### 1. The "Solid on Blurred" Pattern

- **Layouts**: Wrap primary content sections in a `backdrop-blur-md` container.
- **Cards**: Secondary/Content cards should use solid backgrounds (`bg-base-100`) to maintain readability on top of blurred overlays.
- **Corners**: Strictly use **`rounded-2xl`** (16px) for cards, modals, and buttons.

### 2. Design System & Styling

- **Core**: TailwindCSS 4.2+ (Vanilla, Zero Custom CSS).
- **Typography**: "Outfit" (Google Fonts) as the primary font family.
- **Icons**: Modular SVG system using built-in Tailwind mask utilities.
  - _Usage_: Use classes like `mask-no-repeat mask-center mask-contain` with `src/img/svg/` assets (applied via `mask-image` in the `style` attribute). Colorize using standard Tailwind `text-` classes.
- **Utilities**: Strictly avoid custom CSS utilities. Use Tailwind's arbitrary value syntax (e.g., `[mask-image:url(...)]`) or the `@theme` block for global configuration.
- **Dark Mode**: Supports a manual theme toggle via the `.dark` class on the `<html>` element.
  - _Standard_: To ensure zero-config compatibility and proper manual toggling in v4, strictly use the **`in-[.dark]:`** variant instead of the standard `dark:` prefix.
    - Example: `in-[.dark]:bg-slate-900`

### 3. Zero-Config AI Guidelines

To maintain the **100% Zero-Config Vanilla Tailwind v4** architecture, follow these rules:

- **No Custom CSS**: Do not add custom `@theme`, `@utility`, or `@variant` blocks to `tailwind.css`.
- **Animations**: Use the **`starting:`** variant for entry animations (e.g., `starting:opacity-0 starting:translate-y-4`).
- **Icons**: Use built-in Tailwind mask utilities (e.g., `mask-no-repeat mask-center mask-contain`). Use the `style` attribute for the specific SVG path.

## 🛠️ JavaScript Architecture

The JS layer is decoupled from HTML templates and modularized:

- **`utils.js`**: Pure utilities and global listeners (Theme Toggle via `.dark` class, Password Toggle, Environment Safeguards).
- **Page-specific JS**: Files like `auth.js` or `home.js` contain specific logic (e.g., tab switching) using vanilla Tailwind classes for state.

## 🚀 Standards for Components

1. **Responsiveness**: Use `min-h-[calc(100vh-64px)]` and `items-center` patterns.
2. **Interactive Elements**: Use standard Tailwind utilities (`rounded-2xl`, standard transitions).
3. **Themes**: Support `dark:` and light modes. Test with the navbar theme toggle.

## 🛠️ Development Tools

- **Local Preview**: Run `npm run dev` to start the Tailwind watcher and `live-server`.
