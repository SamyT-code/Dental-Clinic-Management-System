<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Render DB (doesnt last long)
// $dbconn = pg_connect("postgresql://dental_clinic_db_jlct_user:u1Brn4dDKJR5qVvJcWPgWt1oRteiFKb6@dpg-cukgcodds78s739nrlj0-a.virginia-postgres.render.com/dental_clinic_db_jlct");

$dbconn = pg_connect("postgresql://neondb_owner:npg_8yEIBgKxeVJ1@ep-frosty-glade-a4irks7k-pooler.us-east-1.aws.neon.tech/neondb?sslmode=require");


// SUPRESS WARNINGS
// if (!$dbconn) {
//     die("Database connection failed: " . pg_last_error());
// } else {
//     echo "Database connected successfully!";
// }