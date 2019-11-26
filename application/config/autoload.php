<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$autoload['packages'] = array();

$autoload['libraries'] = array('database','session');

$autoload['drivers'] = array();

$autoload['helper'] = array('url','system','cookie','ip','slug','role');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('admin/store_model');
