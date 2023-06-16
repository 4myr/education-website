<?php

namespace App\Enums;

enum AdminRole: string
{
    case Supervisor = 'supervisor';
    case Admin = 'admin';
    case ContentMaker = 'content-maker';
}
