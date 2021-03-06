<?php

/*
 * This file is part of the doyo/code-coverage project.
 *
 * (c) Anthonius Munthi <https://itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Doyo\Bridge\CodeCoverage\Report;

use SebastianBergmann\CodeCoverage\Report\Xml\Facade;

class XML extends AbstractReportProcessor
{
    protected $defaultOptions = [
        'target' => 'build/xml',
    ];

    protected function createProcessor(array $options)
    {
        $options['version'] = 'DoyoLabs-CustomCoverage';

        return parent::createProcessor($options); // TODO: Change the autogenerated stub
    }

    public function getProcessorClass(): string
    {
        return Facade::class;
    }

    public function getOutputType(): string
    {
        return static::OUTPUT_DIR;
    }

    public function getType(): string
    {
        return 'xml';
    }
}
