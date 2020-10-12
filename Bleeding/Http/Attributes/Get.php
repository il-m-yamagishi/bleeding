<?php

// phpcs:ignoreFile PSR1.Files.SideEffects.FoundWithSymbols

/**
 * @author Masaru Yamagishi <m-yamagishi@infiniteloop.co.jp>
 * @copyright 2020- Masaru Yamagishi
 */

declare(strict_types=1);

namespace Bleeding\Http\Attributes;

use Attribute;

/**
 * Function that processes HTTP GET Request
 * @package Bleeding\Http\Attributes
 */
#[Attribute(Attribute::TARGET_FUNCTION | Attribute::TARGET_METHOD)]
class Get
{
    private string $path;

    /**
     * Construct GET Controller
     *
     * @param string $path
     */
    public function __construct(string $path)
    {
        $this->path = $path;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }
}
