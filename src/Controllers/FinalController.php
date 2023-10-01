<?php

namespace GenConfig\GenPackLoader\Controllers;

use Illuminate\Routing\Controller;
use GenConfig\GenPackLoader\Events\LaravelInstallerFinished;
use GenConfig\GenPackLoader\Helpers\EnvironmentManager;
use GenConfig\GenPackLoader\Helpers\FinalInstallManager;
use GenConfig\GenPackLoader\Helpers\InstalledFileManager;

class FinalController extends Controller
{
    /**
     * Update installed file and display finished view.
     *
     * @param \GenConfig\GenPackLoader\\Helpers\InstalledFileManager $fileManager
     * @param \GenConfig\GenPackLoader\\Helpers\FinalInstallManager $finalInstall
     * @param \GenConfig\GenPackLoader\\Helpers\EnvironmentManager $environment
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function finish(InstalledFileManager $fileManager, FinalInstallManager $finalInstall, EnvironmentManager $environment)
    {



        return view('pdo::finished');
    }
}
