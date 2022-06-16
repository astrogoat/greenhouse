<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGreenhouseSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('greenhouse.enabled', false);
        $this->migrator->add('greenhouse.business', '');
    }

    public function down()
    {
        $this->migrator->delete('greenhouse.enabled');
        $this->migrator->delete('greenhouse.business');
    }
}
