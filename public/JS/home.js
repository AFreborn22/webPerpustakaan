document.addEventListener("DOMContentLoaded", function(event) {
    const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId);

        // Validate that all variables exist
        if (toggle && nav && bodypd && headerpd) {
            toggle.addEventListener("click", () => {
                // Show navbar
                nav.classList.toggle("show");
                // Change icon
                toggle.classList.toggle("bx-x");
                // Add padding to body
                bodypd.classList.toggle("body-pd");
                // Add padding to header
                headerpd.classList.toggle("body-pd");
            });

            document.addEventListener("click", (e) => {
                const target = e.target;
                // Close sidebar if the target is outside the sidebar
                if (!target.closest("#nav-bar") && !target.closest("#header-toggle")) {
                    nav.classList.remove("show");
                    toggle.classList.remove("bx-x");
                    bodypd.classList.remove("body-pd");
                    headerpd.classList.remove("body-pd");
                }
            });
        }
    };

    showNavbar("header-toggle", "nav-bar", "body-pd", "header");

    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll(".nav_link");

    function colorLink() {
        if (linkColor) {
            linkColor.forEach((l) => l.classList.remove("active"));
            this.classList.add("active");
        }
    }
    linkColor.forEach((l) => l.addEventListener("click", colorLink));


    // Your code to run since DOM is loaded and ready
});


