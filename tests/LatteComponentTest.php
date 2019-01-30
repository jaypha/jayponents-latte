<?php
//----------------------------------------------------------------------------
//
//----------------------------------------------------------------------------

use PHPUnit\Framework\TestCase;
use Jaypha\Jayponents\Component;
use Jaypha\Jayponents\Latte\LatteEngineAdaptor;
use Latte\Engine;

class LatteComponentTest extends TestCase
{
  function testLatte()
  {
    $latte = new Engine();
    $latte->setTempDirectory(__DIR__);

    $c = new Component();
    $c->setEngine(new LatteEngineAdaptor($latte));
    $c->setTemplate(__DIR__."/template1.latte");
    $c->set("abc", "tent");
    $c->set("mon", "nom");

    // Important to note that the template file does end with a newline.
    // This may not appear in some text editors.
    $this->assertEquals("123tentxyznom.latte\n", $c);
  }

  public static function tearDownAfterClass()
  {
    // Clean up cache files
    array_map('unlink', glob(__DIR__."/*-template1.latte-*"));
  }
}

//----------------------------------------------------------------------------
// Copyright (C) 2018 Jaypha.
// License: BSL-1.0
// Author: Jason den Dulk
//

