<?php

namespace App\enums;

class UserRole
{
    const ADMIN = 'admin';
    const USER = 'user';

    const TYPES = [
        self::ADMIN,
        self::USER
    ];
}
