// Function to redirect mobile users to the desktop version
function redirectToDesktop() {
    // Check if the user agent indicates a mobile device
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        // Redirect to the desktop version of the site
        window.location.href = "https://bbaronsam.github.io/baronsam.io/";
    }
}

// Call the redirection function when the page finishes loading
window.onload = redirectToDesktop;
