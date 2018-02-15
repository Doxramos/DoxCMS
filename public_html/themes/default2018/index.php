<?php
if(IsUser() == true) {
    ThemeLoadPart("parts", "page.php");
} else {
    ThemeLoadPart("parts", "login.php");
}