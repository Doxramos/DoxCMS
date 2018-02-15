<?php
/**
 * Created by Doxramos.
 * Powered by JQuery, Font-Awesome, and Bootstrap
 * Copyright Doxramos Web Development
 *
 */
DEFINE('Raw_Public_P', dirname(__file__));
DEFINE('__PUBLIC__', ReplaceSlashes(Raw_Public_P));
LoadNextLoaders(__PUBLIC__);