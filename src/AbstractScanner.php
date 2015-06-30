<?php
/*
 * This file is part of the PHP To 7 Aid project.
 *
 * (c) Giso Stallenberg <gisostallenberg@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace GisoStallenberg\phpTo7aid;

use Symfony\Component\Finder\SplFileInfo;

abstract class AbstractFinder implements FinderInterface {
    /**
     * prepares the finder for execution
     * 
     */
    abstract function prepare(SplFileInfo $file);
    
    /**
     * executes the finder
     * 
     */
    abstract function execute(SplFileInfo $file);
}