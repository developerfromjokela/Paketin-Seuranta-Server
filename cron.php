<?php
/**
 * Copyright (c) 2020 Paketin Seuranta Server
 * @author developerfromjokela
 */

require "config/config.php";
require "lib/fcm.php";
/**
 * This script is supposed to run in cron, and send push messages when it will be ran.
 */

// Initializing FCM API
$fcm = new FCM();

if (DEBUG)
    echo "Sending the push message\n";
// Sending the push message via FCM API
$fcm->pushNotification("/topics/update_parcels");

if (DEBUG)
    echo "Push message sent.\n";
if (DEBUG)
    echo "Exiting the script\n";
// Stopping the script
exit;

