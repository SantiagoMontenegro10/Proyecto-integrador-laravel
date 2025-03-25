document.querySelectorAll('.dropdown-toggle').forEach(button => {
    button.addEventListener('click', () => {
        const dropdownId = button.getAttribute('data-collapse-toggle');
        const dropdown = document.getElementById(dropdownId);
        
        // Cerrar todos los dropdowns antes de abrir el seleccionado
        document.querySelectorAll('.dropdown').forEach(el => {
            if (el !== dropdown) el.classList.add('hidden');
        });

        // Alternar la visibilidad del dropdown seleccionado
        dropdown.classList.toggle('hidden');
    });
});

// Cerrar dropdowns si se hace clic fuera de ellos
document.addEventListener('click', (event) => {
    if (!event.target.closest('.dropdown-toggle')) {
        document.querySelectorAll('.dropdown').forEach(el => el.classList.add('hidden'));
    }
});

//menu hamburguesa

const menuToggle = document.querySelector("[data-drawer-toggle='logo-sidebar']");
const sidebar = document.getElementById("logo-sidebar");

if (menuToggle && sidebar) {
    menuToggle.addEventListener("click", function () {
        sidebar.classList.toggle("-translate-x-full");
    });

}

//modo claro oscuro

const themeToggle = document.getElementById("theme-toggle");
const html = document.documentElement;
const isDark = localStorage.getItem("theme") === "dark";

html.classList.toggle("dark", isDark);
document.getElementById("icon-sun").classList.toggle("hidden", !isDark);
document.getElementById("icon-moon").classList.toggle("hidden", isDark);

themeToggle.addEventListener("click", () => {
    const darkMode = html.classList.toggle("dark");
    localStorage.setItem("theme", darkMode ? "dark" : "light");

    document.getElementById("icon-sun").classList.toggle("hidden", !darkMode);
    document.getElementById("icon-moon").classList.toggle("hidden", darkMode);
});