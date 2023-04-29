<?php
/**
 * This file is part of the coding-standard package.
 *
 * Copyright (c) 2020-2023, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

use Rector\Config\RectorConfig;
use Rector\Php80\Rector\FunctionLike\UnionTypesRector;
use Rector\Php81\Rector\FuncCall\NullToStrictStringFuncCallArgRector;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src',
    ]);

    // register a single rule
    // $rectorConfig->rule(\Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector::class);

    $rectorConfig->sets([
        SetList::DEAD_CODE,
        LevelSetList::UP_TO_PHP_81,
    ]);

    // define sets of rules
    // $rectorConfig->sets([
    //     LevelSetList::UP_TO_PHP_81
    // ]);

    $rectorConfig->skip(
        [
            UnionTypesRector::class,
            NullToStrictStringFuncCallArgRector::class,
        ],
    );
};
