<?php

namespace App\Enums;

use App\Traits\HasEnumAccessors;

enum TypeEnum: string
{

    use HasEnumAccessors;


    case Programming = 'Programming';
    case Framework = 'Framework';
    case UI_Framework = 'UI Component Framework';
    case Web_Server = 'Web Server';
    case Library = 'Library';
    case Tools = 'Tools';
    case Cloud_Server = 'Cloud Server';
    case Database = 'Database';
    case LMS = 'Open Source Learning Management System';
}
