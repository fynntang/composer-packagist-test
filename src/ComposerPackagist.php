<?php

namespace Fynn;

class ComposerPackagist
{

    public function getPackages()
    {
        $packages = [];

        $json = file_get_contents('https://packagist.org/packages/list.json');
        $data = json_decode($json, true);

        foreach ($data['packageNames'] as $package) {
            $packages[] = $package;
        }

        return $packages;
    }
}