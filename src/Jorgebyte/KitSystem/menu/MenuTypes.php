<?php

declare(strict_types=1);

/*
 *    KitSystem
 *    Api: 5.3.0
 *    Version: 1.0.0
 *    Author: Jorgebyte
 */

namespace Jorgebyte\KitSystem\menu;

enum MenuTypes: string
{
    case EDIT_KIT = 'editkit';
    case PREVIEW_KIT = 'previewkit';
}
