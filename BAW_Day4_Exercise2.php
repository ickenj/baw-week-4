<?php

/* How many minutes are there in a week in the Bilky Way, a near parallel gallaxy if there are 26 hours in a day. */

$DaysPerWeek = 7;
$HoursPerDay = 24;
$MinutesPerHour = 60;

$MinutesPerWeek = ($HoursPerDay * $MinutesPerHour) * $DaysPerWeek;
print "Minutes Per Week on earth are " . $MinutesPerWeek . "\n";

$HoursPerDay = 26;

$MinutesPerWeek = ($HoursPerDay * $MinutesPerHour) * $DaysPerWeek;
print "Minutes Per Week in the Bilky Way are " . $MinutesPerWeek . "\n";

?>