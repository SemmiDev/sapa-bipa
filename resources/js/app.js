import './bootstrap';

// Keep only the UI interaction logic
function setupDropdowns() {
    const dropdown = document.querySelector(".dropdown");
    const dropdownMenu = document.querySelector(".dropdown-menu");
    const dropdownButton = dropdown?.querySelector("button");
    const dropdownIcon = dropdownButton?.querySelector("svg");

    if (dropdown && dropdownMenu && dropdownButton && dropdownIcon) {
        let timeoutId;

        dropdown.addEventListener("mouseenter", () => {
            clearTimeout(timeoutId); // Bersihkan timeout jika ada
            dropdownMenu.classList.remove("opacity-0", "invisible", "translate-y-1");
            dropdownMenu.classList.add("opacity-100", "visible", "translate-y-0");
            dropdownIcon.classList.add("rotate-180");
        });

        dropdown.addEventListener("mouseleave", () => {
            timeoutId = setTimeout(() => {
                dropdownMenu.classList.add("opacity-0", "invisible", "translate-y-1");
                dropdownMenu.classList.remove("opacity-100", "visible", "translate-y-0");
                dropdownIcon.classList.remove("rotate-180");
            }, 200); // Penundaan 200ms
        });

        // Tambahkan event listener untuk menjaga menu tetap terlihat saat hover di dropdown-menu
        dropdownMenu.addEventListener("mouseenter", () => {
            clearTimeout(timeoutId); // Batalkan timeout saat kursor masuk ke menu
        });

        dropdownMenu.addEventListener("mouseleave", () => {
            timeoutId = setTimeout(() => {
                dropdownMenu.classList.add("opacity-0", "invisible", "translate-y-1");
                dropdownMenu.classList.remove("opacity-100", "visible", "translate-y-0");
                dropdownIcon.classList.remove("rotate-180");
            }, 200);
        });
    }

    // Mobile dropdown (tetap sama)
    const mobileDropdownButton = document.querySelector(".mobile-dropdown-button");
    const mobileDropdownMenu = document.querySelector(".mobile-dropdown-menu");
    const mobileDropdownIcon = mobileDropdownButton?.querySelector("svg");

    if (mobileDropdownButton && mobileDropdownMenu && mobileDropdownIcon) {
        mobileDropdownButton.addEventListener("click", (e) => {
            e.preventDefault();
            mobileDropdownMenu.classList.toggle("hidden");
            mobileDropdownIcon.classList.toggle("rotate-180");
        });
    }
}

function setupMobileMenu() {
    const mobileMenuButton = document.getElementById("mobile-menu-button")
    const mobileMenu = document.getElementById("mobile-menu")
    const menuIcons = mobileMenuButton?.querySelectorAll("svg")

    if (mobileMenuButton && mobileMenu && menuIcons) {
        mobileMenuButton.addEventListener("click", () => {
            const isHidden = mobileMenu.classList.contains("hidden")

            if (isHidden) {
                mobileMenu.classList.remove("hidden")
                menuIcons[0].classList.add("hidden")
                menuIcons[1].classList.remove("hidden")
            } else {
                mobileMenu.classList.add("hidden")
                menuIcons[0].classList.remove("hidden")
                menuIcons[1].classList.add("hidden")
            }
        })
    }
}

// Initialize UI components on DOMContentLoaded
document.addEventListener("DOMContentLoaded", () => {
    setupDropdowns()
    setupMobileMenu()

    // Update active navigation link based on current URL path
    const currentPath = window.location.pathname
    document.querySelectorAll(".nav-link, .mobile-nav-link").forEach((link) => {
        const linkRoute = link.getAttribute("href")
        if (linkRoute === currentPath || (currentPath.startsWith(linkRoute) && linkRoute !== "/")) {
            link.classList.remove("text-gray-700")
            link.classList.add("text-primary-orange", "bg-orange-100")
        } else {
            link.classList.remove("text-primary-orange", "bg-orange-100")
            link.classList.add("text-gray-700")
        }
    })
})


// Auto-hide alerts after 5 seconds
document.addEventListener("DOMContentLoaded", () => {
    const alerts = document.querySelectorAll('[role="alert"]')

    alerts.forEach((alert) => {
        setTimeout(() => {
            alert.style.transition = "opacity 0.5s ease-out"
            alert.style.opacity = "0"

            setTimeout(() => {
                alert.remove()
            }, 500)
        }, 5000)
    })
})

// Confirm delete actions
window.confirmDelete = (message = "Are you sure you want to delete this item?") => confirm(message)

// Auto-resize textareas
document.addEventListener("DOMContentLoaded", () => {
    const textareas = document.querySelectorAll("textarea")

    textareas.forEach((textarea) => {
        textarea.addEventListener("input", function () {
            this.style.height = "auto"
            this.style.height = this.scrollHeight + "px"
        })
    })
})
