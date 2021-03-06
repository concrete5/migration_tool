<?php
namespace PortlandLabs\Concrete5\MigrationTool\Publisher\Routine;

use PortlandLabs\Concrete5\MigrationTool\Publisher\Command\ClearBatchCommand;
use PortlandLabs\Concrete5\MigrationTool\Publisher\Command\CreateConfigValuesCommand;

defined('C5_EXECUTE') or die("Access Denied.");

class CreateConfigValuesRoutine extends AbstractRoutine
{

    public function getCommandClass()
    {
        return CreateConfigValuesCommand::class;
    }

}
