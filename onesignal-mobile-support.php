<?php
function onesignal_send_notification_filter($fields, $new_status, $old_status, $post)
{
    $fields['isAndroid'] = true;
    $fields['isIos'] = true;
    $fields['isAnyWeb'] = false;
    $fields['isChrome'] = false;
    $fields['data'] = array(
        "myappurl" => $fields['url']
    );
    /* Unset the URL to prevent opening the browser when the notification is clicked */
    unset($fields['url']);
    return $fields;
}
