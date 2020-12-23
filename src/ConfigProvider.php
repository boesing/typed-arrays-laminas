<?php
declare(strict_types=1);

namespace Boesing\TypedArrays\Laminas;

use Boesing\TypedArrays\MapFactoryInterface;
use Boesing\TypedArrays\OrderedListFactoryInterface;
use Boesing\TypedArrays\TypedArrayFactory;

final class ConfigProvider
{
    /**
     * @return array<string,mixed>
     */
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getServiceDependencies(),
        ];
    }

    /**
     * @return array<string,mixed>
     */
    public function getServiceDependencies(): array
    {
        return [
            'factories' => [
                TypedArrayFactory::class => static function (): TypedArrayFactory {
                    return new TypedArrayFactory();
                },
            ],
            'aliases' => [
                MapFactoryInterface::class => TypedArrayFactory::class,
                OrderedListFactoryInterface::class => TypedArrayFactory::class,
            ],
        ];
    }
}
