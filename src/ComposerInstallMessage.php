<?php


namespace Rapid;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;
class ComposerInstallMessage
{
   public static function postPackageInstall(PackageEvent $event)
    {
        $installedPackage = $event->getOperation()->getPackage();
        // do stuff
        echo "testing composer script";
    }
}
