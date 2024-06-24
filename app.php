<?php
require_once 'env.php';

const BASE_DIR = __DIR__ . '/';
const APP_DIR = BASE_DIR . 'app/';
const MODEL_DIR = APP_DIR . 'models/';
const LIB_DIR = BASE_DIR . 'lib/';
const COMPONENTS_DIR = APP_DIR . 'components/';

require_once LIB_DIR . 'DB.php';
require_once MODEL_DIR . 'Thread.php';
require_once MODEL_DIR . 'Post.php';