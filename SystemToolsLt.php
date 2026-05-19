<?php

namespace Apps\Tms\Packages\System\Tools\Lt;

use System\Base\BasePackage;

class SystemToolsLt extends BasePackage
{
    //protected $modelToUse = ::class;

    protected $packageName = 'systemtoolslt';

    public $systemtoolslt;

    public function getSystemToolsLtById($id)
    {
        $systemtoolslt = $this->getById($id);

        if ($systemtoolslt) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }

    public function addSystemToolsLt($data)
    {
        //
    }

    public function updateSystemToolsLt($data)
    {
        $systemtoolslt = $this->getById($id);

        if ($systemtoolslt) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }

    public function removeSystemToolsLt($data)
    {
        $systemtoolslt = $this->getById($id);

        if ($systemtoolslt) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }
}