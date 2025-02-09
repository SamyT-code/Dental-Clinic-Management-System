<?php
// Ensure no output before session_start()
ob_start();  // Start output buffering

session_start();
session_destroy();

header('Location: index.php');
exit;

ob_end_flush();  // End output buffering
