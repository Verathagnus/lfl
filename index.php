<?php
function isMobileDevice() {
    // Check the user agent string to detect a mobile device
    $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
    $mobileAgents = ['iphone', 'android', 'ipad', 'ipod', 'blackberry', 'opera mini', 'iemobile', 'mobile'];

    // If the user agent matches one of the mobile devices
    foreach ($mobileAgents as $agent) {
        if (strpos($userAgent, $agent) !== false) {
            return true;
        }
    }
    return false;
}

// Redirect to the appropriate index file
if (isMobileDevice()) {
    header('Location: index_mobile.html'); // Redirect to the mobile version
} else {
    header('Location: index_desktop.html'); // Redirect to the desktop version
}
exit();
?>
