import { getGoogleMapsConfig } from "./config.js";

async function loadGoogleMaps() {
    const { apiKey, mapId } = await getGoogleMapsConfig();

    await new Promise((resolve, reject) => {
        const script = document.createElement("script");
        script.src = `https://maps.googleapis.com/maps/api/js?key=${apiKey}&v=weekly`;
        script.async = true;
        script.defer = true;
        script.onload = resolve;
        script.onerror = reject;
        document.head.appendChild(script);
    });

    const { Map } = await google.maps.importLibrary("maps");
    const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

    const location = { lat: 35.26939098716046, lng: 139.01192194044734 };

    const map = new Map(document.getElementById("map"), {
        zoom: 15,
        center: location,
        mapId: mapId,
    });

    new AdvancedMarkerElement({
        position: location,
        map,
        title: "ここに会社があります！",
    });
}
window.onload = loadGoogleMaps;
