document.addEventListener('DOMContentLoaded', function () {
    const adSlots = document.querySelectorAll('.ad-slot');

    adSlots.forEach(slot => {
        const img = slot.querySelector('img');
        if (img) {
            const src = img.getAttribute('src');
            // Check if the image source contains 'placehold.co'
            if (src && src.includes('placehold.co')) {
                slot.style.display = 'none';
                console.log('Hiding placeholder ad slot:', src);
            }
        }
    });
});
