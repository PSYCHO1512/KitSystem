<?php

declare(strict_types=1);

/*
 *    KitSystem
 *    Api: 5.3.0
 *    Version: 1.0.0
 *    Author: Jorgebyte
 */

namespace Jorgebyte\KitSystem\form\types\subforms;

use EasyUI\element\Button;
use EasyUI\variant\SimpleForm;
use Jorgebyte\KitSystem\form\FormManager;
use Jorgebyte\KitSystem\form\FormTypes;
use Jorgebyte\KitSystem\menu\MenuManager;
use Jorgebyte\KitSystem\menu\MenuTypes;
use pocketmine\player\Player;

class WhatToEditSubForm extends SimpleForm
{
    protected string $kitName;

    public function __construct(string $kitName)
    {
        $this->kitName = $kitName;
        parent::__construct("KitSystem - What do you plan to edit?");
    }

    protected function onCreation(): void
    {
        $editItemsButton = new Button("Edit Items");
        $editItemsButton->setSubmitListener(function (Player $sender): void {
            MenuManager::sendMenu($sender, MenuTypes::EDIT_KIT->value, [$this->kitName]);
        });

        $editDataButton = new Button("Edit Data");
        $editDataButton->setSubmitListener(function (Player $sender): void {
            FormManager::sendForm($sender, FormTypes::EDIT_KIT_DATA->value, [$this->kitName]);
        });

        $this->addButton($editItemsButton);
        $this->addButton($editDataButton);
    }
}
