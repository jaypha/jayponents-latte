<?php
//----------------------------------------------------------------------------
//
//----------------------------------------------------------------------------

use \Jaypha\Jayponents\Component;
use \Jaypha\Jayponents\Latte\LatteEngineAdaptor;

require __DIR__."/../vendor/autoload.php";

$latte = new Latte\Engine();
$latte->setTempDirectory(__DIR__."/cache");
$latte->setLoader(new Latte\Loaders\FileLoader(__DIR__));
Component::setDefaultEngine(new LatteEngineAdaptor($latte));

$page = new Component();
$page->setTemplate("template.latte");
$page->set("title", "User Profile");


$content = new Component();
$content->setTemplate("profile.latte");
$content->setVars([ "name" => "Jonathon", "word" => "ser&pity" ]);

$page->set("content", $content);
$page->display();

//echo $page;

//----------------------------------------------------------------------------
// Copyright (C) 2017 Jaypha.
// License: BSL-1.0
// Author: Jason den Dulk
//
