<?php
declare(strict_types=1);

namespace Module\Contracts\Enums;

enum DebugModeEnum
{
    case NORMAL;
    case DEBUG;
    case NORMAL_PLUS_DEBUG;
}
