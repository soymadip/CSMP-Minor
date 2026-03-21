/**
 * Switch between Login and Register tabs
 * @param {string} mode - 'login' or 'register'
 */
function switchTab(mode) {
  const loginTab = document.getElementById("login-tab");
  const registerTab = document.getElementById("register-tab");
  const loginSection = document.getElementById("login-section");
  const registerSection = document.getElementById("register-section");
  const authTitle = document.getElementById("auth-title");

  const activeClasses = ["bg-rose-500", "text-white", "shadow-lg", "shadow-rose-500/20"];
  const inactiveClasses = ["text-rose-100/40"];

  if (mode === "login") {
    loginTab.classList.add(...activeClasses);
    loginTab.classList.remove(...inactiveClasses);
    registerTab.classList.remove(...activeClasses);
    registerTab.classList.add(...inactiveClasses);
    loginSection.classList.add("active");
    registerSection.classList.remove("active");
    authTitle.innerText = "Welcome Back";
  } else {
    registerTab.classList.add(...activeClasses);
    registerTab.classList.remove(...inactiveClasses);
    loginTab.classList.remove(...activeClasses);
    loginTab.classList.add(...inactiveClasses);
    registerSection.classList.add("active");
    loginSection.classList.remove("active");
    authTitle.innerText = "Create Account";
  }
}

// Handle query parameters on load
window.addEventListener('load', () => {
  const urlParams = new URLSearchParams(window.location.search);
  const mode = urlParams.get("mode");
  if (mode === "register") {
    switchTab("register");
  }
});
