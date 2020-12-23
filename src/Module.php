<?php
declare(strict_types=1);

namespace Boesing\TypedArrays\Laminas;

final class Module
{
    /**
     * @return array<string,mixed>
     */
    public function getServiceConfig(): array
    {
        return (new ConfigProvider())->getServiceDependencies();
    }
}
