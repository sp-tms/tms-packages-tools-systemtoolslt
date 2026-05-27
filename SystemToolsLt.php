<?php

namespace Apps\Tms\Packages\System\Tools\Lt;

use Apps\Tms\Packages\System\Tools\Lt\Model\AppsTmsSystemToolsLt;
use System\Base\BasePackage;

class SystemToolsLt extends BasePackage
{
    protected $modelToUse = AppsTmsSystemToolsLt::class;

    protected $packageName = 'systemtoolslt';

    public $systemtoolslt;

    public function init()
    {
        parent::init();

        return $this;
    }

    public function addLt($data)
    {
        if ($this->add($data)) {
            $this->addResponse('Load type added');

            return true;
        }

        $this->addResponse('Error Adding Lt', 1);
    }

    public function updateLt($data)
    {
        if ($this->update($data)) {
            $this->addResponse('Load type updated');

            return true;
        }

        $this->addResponse('Error Updating Lt', 1);
    }

    public function removeLt($data)
    {
        if ($this->remove($data['id'])) {
            $this->addResponse('Load type removed');

            return true;
        }

        $this->addResponse('Error removing load type', 1);

        return false;
    }
}