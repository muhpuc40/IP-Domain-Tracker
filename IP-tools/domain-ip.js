document.getElementById('track-ip').addEventListener('click', function () {
    const ipOrDomain = document.getElementById('ip-input').value;

    if (!ipOrDomain) {
        alert('Please enter a valid IP or domain.');
        return;
    }

    // Check if the input is a domain or IP by using regex
    const isDomain = /^[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(ipOrDomain);

    if (isDomain) {
        // Convert domain to IP address using DNS lookup (using an API or a custom DNS resolver service)
        fetch(`https://dns.google/resolve?name=${ipOrDomain}&type=A`)
            .then(response => response.json())
            .then(data => {
                if (data.Answer && data.Answer.length > 0) {
                    const ipAddress = data.Answer[0].data;
                    trackIP(ipAddress); // Call the function to track IP
                } else {
                    alert('Could not resolve domain to IP.');
                }
            })
            .catch(error => {
                console.error('Error resolving domain to IP:', error);
            });
    } else {
        // If it's an IP address, track it directly
        trackIP(ipOrDomain);
    }
});

function trackIP(ipAddress) {
    fetch(`https://ipapi.co/${ipAddress}/json/`)
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                alert('Invalid IP address.');
                return;
            }

            // Update the information fields
            document.getElementById('ip').innerText = data.ip;
            document.getElementById('city').innerText = data.city;
            document.getElementById('region').innerText = data.region;
            document.getElementById('country').innerText = data.country_name;
            document.getElementById('isp').innerText = data.org;

            // Display map using Leaflet.js
            const lat = data.latitude;
            const lon = data.longitude;

            // Initialize the map
            const map = L.map('map').setView([lat, lon], 13);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 18,
                attribution: '© OpenStreetMap'
            }).addTo(map);

            // Add a marker to the location
            L.marker([lat, lon]).addTo(map)
                .bindPopup(`<b>${data.city}, ${data.country_name}</b><br>ISP: ${data.org}`)
                .openPopup();
        })
        .catch(error => {
            console.error('Error fetching the IP data:', error);
        });
}
