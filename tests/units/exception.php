<?php

namespace mageekguy\atoum\tests\units;

use \mageekguy\atoum;

require_once(__DIR__ . '/../../runners/autorunner.php');

class exception extends atoum\test
{
	public function testConstruct()
	{
		$this->assert->exception(new atoum\exception())->isInstanceOf('\runtimeException');
	}
}

?>
