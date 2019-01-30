<?php
//----------------------------------------------------------------------------
//
//----------------------------------------------------------------------------

namespace Jaypha\Jayponents\Latte;

use Jaypha\Jayponents\Component;
use Jaypha\Jayponents\TemplateEngineAdaptor;
use Latte\Engine;
use Latte\Macros\MacroSet;

class LatteEngineAdaptor implements TemplateEngineAdaptor
{
  protected $engine;

  function __construct(Engine $latteEngine)
  {
    $this->engine = $latteEngine;
    $set = new MacroSet($latteEngine->getCompiler());
    $set->addMacro("jayp", "%node.word->display();");
  }

  function render(Component $component)
  {
    $this->engine->render(
      $component->getTemplate(),
      $component->getVars()
    );
  }
}

//----------------------------------------------------------------------------
// Copyright (C) 2018 Jaypha.
// License: BSL-1.0
// Author: Jason den Dulk
//
