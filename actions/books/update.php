<?php
require_once __DIR__ . '/../../repositories/book-repository.php';

if (isset($_POST['update']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $id          = $_POST['id'] ?? null;
    $title       = $_POST['title'] ?? '';
    $isbn        = $_POST['isbn'] ?? '';
    $year        = $_POST['year'] ?? '';
    $stock       = $_POST['stock'] ?? '';
    $category_id = $_POST['category_id'] ?? '';
    $description = $_POST['description'] ?? '';
    $author_ids  = $_POST['author_ids'] ?? [];

    print_r($_POST);
}