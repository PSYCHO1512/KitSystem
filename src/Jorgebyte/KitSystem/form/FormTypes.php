<?php

declare(strict_types=1);

/*
 *    KitSystem
 *    Api: 5.3.0
 *    Version: 1.0.0
 *    Author: Jorgebyte
 */

namespace Jorgebyte\KitSystem\form;

enum FormTypes: string
{
    case CREATE_KIT = 'createkit';
    case EDIT_KIT_DATA = 'editkitdata';
    case GIVEKIT = 'givekit';
    case GIVEKITALL = 'givekitall';
    case KITS = 'kits';
    case SELECT_KIT = 'selectkit';
    // [Categories] \\
    case CATEGORY = 'category';
    case CREATE_CATEGORY = 'createcategory';
    case SELECT_CATEGORY = 'selectcategory';
    // SubForms \\
    case DELETE_KIT_SUBFORM = 'deletekitsubform';
    case DELETE_CATEGORY_SUBFORM = 'deletecategorysubform';
    case EDIT_CATEGORY_FORM = 'whattoeditcategoryform';
    /** this is from the kits */
    case WHAT_TO_EDIT_SUBFORM = 'whattoeditsubform';
}
