<?php
namespace PortlandLabs\Concrete5\MigrationTool\Publisher\Routine;

use PortlandLabs\Concrete5\MigrationTool\Publisher\Command\ClearBatchCommand;
use PortlandLabs\Concrete5\MigrationTool\Publisher\Command\ClosePublisherLogCommand;
use PortlandLabs\Concrete5\MigrationTool\Publisher\Command\CreateAttributeCategoriesCommand;
use PortlandLabs\Concrete5\MigrationTool\Publisher\Command\CreateConversationDataCommand;
use PortlandLabs\Concrete5\MigrationTool\Publisher\Command\CreateGroupsCommand;
use PortlandLabs\Concrete5\MigrationTool\Publisher\Command\CreateJobSetsCommand;

defined('C5_EXECUTE') or die("Access Denied.");

class ClosePublisherLogRoutine extends AbstractRoutine
{

    public function getCommandClass()
    {
        return ClosePublisherLogCommand::class;
    }

}
