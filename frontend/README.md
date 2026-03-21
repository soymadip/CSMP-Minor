<center>
<h1>CSMP Frontend Dir</h1>
<p>This dir contains All frontend code for all pages.</p>
</center>

<br>

## Setup Instructions

### For Backend Dev

make sure to copy [utils.js](./src/js/utils.js), [common.css](./src/css/common.css) to backend with any file.

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

## Guidelines & Standards

Technical details, design standards, and JavaScript architecture are documented in:
👉 **[FRONTEND.md](FRONTEND.md)**

### Key Topics in FRONTEND.md:

- **Design Language**: The "Solid on Blurred" pattern and `rounded-2xl` rules.
- **Icon System**: Built-in Tailwind v4 mask utilities.
- **Dark Mode**: Native `in-[.dark]:` variant for zero-config toggling.
- **JS Architecture**: Roles of `utils.js` and modular page scripts.
- **Component Standards**: Responsive viewport fitting and theme support.
