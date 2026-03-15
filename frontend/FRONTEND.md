# FRONTEND.md - Frontend Documentation

## 🎨 Unified Premium Aesthetic

The frontend of **CSMP-Minor** is designed to feel state-of-the-art and professional. All UI contributions must adhere to these standards:

### 1. The "Solid on Blurred" Pattern
- **Layouts**: Wrap primary content sections in a `backdrop-blur-md` container.
- **Cards**: Secondary/Content cards should use solid backgrounds (`bg-base-100`) to maintain readability on top of blurred overlays.
- **Corners**: Strictly use **`rounded-2xl`** (16px) for cards, modals, and buttons.

### 2. Design System & Styling
- **Core**: TailwindCSS 4 + DaisyUI 5.
- **Typography**: "Outfit" (Google Fonts) as the primary font family.
- **Icons**: Modular SVG system using `mask-image`. 
    - *Usage*: Use the `.icon-mask` utility with `src/img/svg/` assets to allow dynamic coloring via Tailwind text classes.

## 🛠️ JavaScript Architecture

The JS layer is decoupled from HTML templates and modularized for better maintainability:

- **`utils.js`**: Pure utilities and global listeners (Theme Toggle, Password Toggle, Environment Safeguards).
- **Page-specific JS**: Files like `auth.js` or `home.js` should only contain logic unique to that page (e.g., tab switching, form validation).

## 🚀 Standards for Components

1. **Responsiveness**: Use `min-h-[calc(100vh-64px)]` and `items-center` patterns to ensure content fits the viewport.
2. **Interactive Elements**: Use standard DaisyUI components but consistently apply `rounded-2xl` and custom transitions.
3. **Themes**: Every component must work in both `dark` and `light` modes. Test with the internal theme controller.

## 🛠️ Development Tools

- **Local Preview**: Run `npm run dev` in this directory to start the Tailwind watcher and live development server.
- **Deployment**: The `src/` directory is the source of truth; `app.css` is generated via the Tailwind build process.

---

