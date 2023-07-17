<?php

require_once './Database/db.php';
require_once 'models/Item.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'list';

switch ($action) {
    case 'list':
        $items = Item::getAll();
        include 'views/item_list.php';
        break;
    case 'create':
        $item = new Item();
        if (isset($_POST['submit'])) {
            $item->name = $_POST['name'];
            $item->description = $_POST['description'];
            $item->save();
            header('Location: index.php');
            exit;
        }
        include 'views/edit_item.php';
        break;
    case 'edit':
        $item = Item::getById($_GET['id']);
        if (isset($_POST['submit'])) {
            $item->name = $_POST['name'];
            $item->description = $_POST['description'];
            $item->save();
            header('Location: index.php');
            exit;
        }
        include 'views/edit_item.php';
        break;
    case 'delete':
        Item::delete($_GET['id']);
        header('Location: index.php');
        exit;
        break;
    default:
        header('Location: index.php');
        exit;
}