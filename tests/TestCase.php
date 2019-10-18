<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Spatie\Snapshots\MatchesSnapshots;

abstract class TestCase extends BaseTestCase
{
    use MatchesSnapshots;

    protected function setUp(): void
    {
        parent::setUp();

        $this->settingUp();
    }

    public function settingUp()
    {
        //
    }

    protected function getSnapshotDirectory(): string
    {
        return base_path('tests/_snapshots_');
    }

    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
