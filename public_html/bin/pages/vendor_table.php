<?php
if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}
if (!isset($_GET['limit'])) {
    $limit = 10;
} else {
    $limit = $_GET['limit'];
}

echo getData($limit, $page); ?>