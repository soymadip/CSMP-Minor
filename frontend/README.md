
<center>
<h1>CSMP Frontend Dir</h1>
<p>This dir contains All frontend code for all pages.</p>
</center>

<br>

## Setup Instructions

### Windows

0. Install VSCode.
1. Download NodeJS: [`https://nodejs.org/dist/v24.5.0/node-v24.5.0-x64.msi`](https://nodejs.org/dist/v24.5.0/node-v24.5.0-x64.msi)
2. Double click the `node-v24.5.0-x64.msi` & install it.
3. Open windows Terminal or PowerShell
4. Clone This repository: `git clone https://github.com/soymadip/CSMP-Minor`
5. Switch to `frontend` dir: `cd CSMP-Minor\frontend`
6. Open the folder with VSCode: `code .`
7. Open Terminal in VSCode, run: `npm run dev`, this will open live preview server in browser.
8. In browser, go to 'html` dir, you will find all html files.
9. As you change in code, the page should update itself, else reload browser.


### Linux

1. You are not dumb right? Figure out yourself
2. Make changes, push to GitHub.


# Architecture & Structure

```bash
frontend/
├── src/
│   ├── html/ # Page templates (auth.html, home.html, etc.)
│   ├── css/  # Tailwind source and compiled app.css
│   ├── js/   # Modularized logic (utils.js, auth.js, etc.)
│   └── img/  # Static assets and SVG icon collections
├── tailwind.config.js
└── package.json
```

## CSS & Design Standards

### 1. Typography & Theme
- **Font**: "Outfit" (Google Fonts) is the primary typeface.
- **Theme**: Powered by DaisyUI 5. Use `.theme-controller` for toggles.

### 2. Design Rules
- **Corners**: Strictly use `rounded-2xl` for primary cards and buttons.
- **Backgrounds**: Use "Solid on Blurred" pattern (Solid `bg-base-100` cards on top of `backdrop-blur-md` containers).

### 3. Icon System (Mask Image)
To keep icons colorable via Tailwind text classes, use the `.icon-mask` utility with SVGs from `src/img/svg/`:

```html
<span class="icon-mask w-5 h-5 text-primary" 
      style="mask-image: url('../img/svg/home.svg');">
</span>
```

### 4. Compilation

To get the `app.css`, run `npm run dev` in the terminal.

# JS

The JavaScript logic is modularized for better maintainability:

- **[`utils.js`](src/js/utils.js)**: The central utility hub. Contains global logic like theme toggling, shared UI utilities (e.g., password visibility toggle), and environment safety checks.
- **[`auth.js`](src/js/auth.js)**: Specific logic for the authentication page, including tab switching (Login/Register) and handling entry modes via URL parameters.
- **[`home.js`](src/js/home.js)**: Supplemental logic for the home page.

