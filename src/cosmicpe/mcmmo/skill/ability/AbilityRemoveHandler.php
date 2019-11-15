<?php

declare(strict_types=1);

namespace cosmicpe\mcmmo\skill\ability;

use cosmicpe\mcmmo\player\McMMOPlayer;

interface AbilityRemoveHandler{

	public function handleRemove(McMMOPlayer $mcmmo_player) : void;
}