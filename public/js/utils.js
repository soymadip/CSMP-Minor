// Common utilities and global logic

/**
 * Global theme toggle functionality
 */
function initThemeToggle() {
  const themeToggle = document.getElementById("theme-toggle-input");
  const htmlElement = document.documentElement;

  if (themeToggle) {
    // Check for saved theme or default to dark (matching current project preference)
    const savedTheme = localStorage.getItem("flux.appearance") || "dark";
    
    // Sync toggle state with saved theme
    themeToggle.checked = savedTheme === "dark";

    // Handle theme change using Flux synchronization if available
    themeToggle.addEventListener("change", function () {
      const appearance = this.checked ? "dark" : "light";
      if (window.Flux && typeof window.Flux.applyAppearance === 'function') {
        window.Flux.applyAppearance(appearance);
      } else {
        // Fallback if Flux is not available
        if (appearance === "dark") {
          htmlElement.classList.add("dark");
        } else {
          htmlElement.classList.remove("dark");
        }
        localStorage.setItem("flux.appearance", appearance);
      }
    });
  }
}

/**
 * Toggle password visibility for an input field
 * @param {string} inputId - ID of the password input
 * @param {HTMLElement} btn - The button element that was clicked
 */
function togglePassword(inputId, btn) {
  const passwordInput = document.getElementById(inputId);
  const icon = btn.querySelector("svg");
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.025 10.025 0 014.132-5.413m0 0L2.458 2.458M12 5c1.11 0 2.162.24 3.125.674M12 12a3 3 0 00-4.8 3.2m0 0l-1.6-1.6m4.8 1.6L12 12M15 12a3 3 0 11-6 0 3 3 0 016 0zm6.362-.3a10.05 10.05 0 01-1.362 3.125" />`;
  } else {
    passwordInput.type = "password";
    icon.innerHTML =
      '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />';
  }
}

/**
 * Check if the application is accessed via local file protocol
 * and show a warning if necessary.
 */
function checkLocalProtocol() {
  const localWarning = document.getElementById("local-warning");
  if (window.location.protocol === "file:" && localWarning) {
    localWarning.classList.remove("hidden");
  }
}

// Initialize on DOM load
document.addEventListener("DOMContentLoaded", function () {
  initThemeToggle();
  checkLocalProtocol();
});
