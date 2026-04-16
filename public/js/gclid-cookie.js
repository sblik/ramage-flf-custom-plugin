(function () {
    const params = new URLSearchParams(window.location.search);
    const urlGclid = params.get('gclid');

    if (urlGclid) {
        console.log("picked up gclid");
        document.cookie = 'gclid=' + urlGclid + '; max-age=' + (90 * 24 * 3600) + '; path=/';
    }
})();