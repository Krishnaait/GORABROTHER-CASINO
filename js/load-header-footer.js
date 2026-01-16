// Load shared header and footer
document.addEventListener('DOMContentLoaded', function() {
    // Load header and footer from shared file
    fetch('/includes/header-footer.html')
        .then(response => response.text())
        .then(html => {
            // Parse the HTML
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');
            
            // Extract header and footer
            const header = doc.querySelector('header');
            const footer = doc.querySelector('footer');
            const styles = doc.querySelector('style');
            
            // Insert header at the beginning of body
            if (header) {
                document.body.insertBefore(header, document.body.firstChild);
            }
            
            // Append footer at the end of body
            if (footer) {
                document.body.appendChild(footer);
            }
            
            // Add styles to head
            if (styles) {
                document.head.appendChild(styles);
            }
        })
        .catch(error => console.error('Error loading header/footer:', error));
});
