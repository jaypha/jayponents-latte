# Jayponents Latte

Written by Jason den Dulk

A template engine adaptor to enable Latte useable with Jayponents.

## Requirements

PHP v5.4.0 or greater.
Jayponents
Nette Latte 

## Installation

```
composer require jaypha/jayponents-latte
```

## Usage

Create a Latte Engine as normal. Create an engine adaptor and set the
template adaptor in Component.

### Examples

use Jaypha\Jayponents\Component;
use Jaypha\Jayponents\Latte\LatteEngineAdaptor;

$latte = new Latte\Engine();
$adaptor = new LatteEngineAdaptor($latte);

// Can make the template adaptor the default for all components.
Component::setDefaultEngine($adaptor);

// Can assign template adaptor to individual components.
$component = new Component();
$component->setEngine($adaptor);

## jayp Macro

Within Latte templates, you include a component using 'jayp'

### Example

{jayp $content}

## License

Copyright (C) 2017-8 Jaypha.  
Distributed under the Boost Software License, Version 1.0.  
See http://www.boost.org/LICENSE_1_0.txt

