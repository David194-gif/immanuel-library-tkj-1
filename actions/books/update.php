<?php
require_once __DIR__ . '/../../repositories/book-repository.php';

if (isset($_POST['update']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    print_r($_POST);
    
}