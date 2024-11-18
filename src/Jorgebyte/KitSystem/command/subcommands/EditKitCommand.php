<?php

declare(strict_types=1);

/*
 *    KitSystem
 *    Api: 5.3.0
 *    Version: 1.0.0
 *    Author: Jorgebyte
 */

namespace Jorgebyte\KitSystem\command\subcommands;

use CortexPE\Commando\BaseSubCommand;
use CortexPE\Commando\constraint\InGameRequiredConstraint;
use Jorgebyte\KitSystem\command\args\KitArgument;
use Jorgebyte\KitSystem\form\FormManager;
use Jorgebyte\KitSystem\form\FormTypes;
use Jorgebyte\KitSystem\kit\Kit;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;

class EditKitCommand extends BaseSubCommand
{
    public function __construct()
    {
        parent::__construct("edit", "KitSystem - Edit a kit");
        $this->setPermission("kitsystem.command.editkit");
    }

    protected function prepare(): void
    {
        $this->registerArgument(0, new KitArgument("kit", true));
        $this->addConstraint(new InGameRequiredConstraint($this));
    }

    public function onRun(CommandSender $sender, string $aliasUsed, array $args): void
    {
        /** @var Player $sender */
        if (isset($args["kit"])) {
            /** @var Kit $kit */
            $kit = $args["kit"];
            FormManager::sendForm($sender, FormTypes::WHAT_TO_EDIT_SUBFORM->value, [$kit->getName()]);
            return;
        }
        FormManager::sendForm($sender, FormTypes::SELECT_KIT->value, ["editkit"]);
    }
}
