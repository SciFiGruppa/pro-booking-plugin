<?php
/**
 * Plugin Name: Course booking
 * Description: Plugin for handling course booking.
 */

/* Security measure: This script dies if it is accessed directly as opposed to through WP functions */
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

global $wpdb; /* Instantiated Wordpress database object */
$bookingTableName = "ringom_bookings";

/**
 * Adds a booking.
 * @param $userID int ID of the user that booked a course.
 * @param $courseID int ID of the course the user booked
 */
function addBooking($userID, $courseID) {
    if(! (is_int($userID) && isCourseExist($courseID))) {
        die("UserID not int or courseID does not exist!");
        //TODO display error message and log to file or smth.
    }

    $this->wpdb->insert(
                    $this->bookingTableName,
                    array(
                        "courseID" => $courseID,
                        "userID"   => $userID
                    ),
                    array(
                        "%d",
                        "%d"
                    )
    );
}

function isCourseExist($courseID) {
    //TODO
    return true;
}




