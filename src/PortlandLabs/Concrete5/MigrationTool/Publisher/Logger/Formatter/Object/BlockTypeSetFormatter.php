<?php
namespace PortlandLabs\Concrete5\MigrationTool\Publisher\Logger\Formatter\Object;

use HtmlObject\Link;
use PortlandLabs\Concrete5\MigrationTool\Entity\Publisher\Log\Object\LoggableObject;

defined('C5_EXECUTE') or die("Access Denied.");

class BlockTypeSetFormatter extends AbstractStandardFormatter
{

    public function getSkippedDescription(LoggableObject $object)
    {
        return t('Block type set %s already exists.', $object->getHandle());
    }

    public function getPublishStartedDescription(LoggableObject $object)
    {
        return t('Began installing block type set %s.', $object->getHandle());
    }

    public function getPublishCompleteDescription(LoggableObject $object)
    {
        return t('Block type set %s installed.', $object->getHandle());
    }



}
