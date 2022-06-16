<?php

namespace Astrogoat\Greenhouse\Actions;

use Helix\Lego\Apps\Actions\Action;

class GreenhouseAction extends Action
{
    public static function actionName(): string
    {
        return 'Greenhouse action name';
    }

    public static function run(): mixed
    {
        return redirect()->back();
    }
}
