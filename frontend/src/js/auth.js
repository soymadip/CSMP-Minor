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

  if (mode === "login") {
    loginTab.classList.add("tab-active");
    loginTab.classList.remove("text-rose-100/40");
    registerTab.classList.remove("tab-active");
    registerTab.classList.add("text-rose-100/40");
    loginSection.classList.add("active");
    registerSection.classList.remove("active");
    authTitle.innerText = "Welcome Back";
  } else {
    registerTab.classList.add("tab-active");
    registerTab.classList.remove("text-rose-100/40");
    loginTab.classList.remove("tab-active");
    loginTab.classList.add("text-rose-100/40");
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
