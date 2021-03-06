<?php

declare(strict_types=1);

namespace cosmicpe\mcmmo\database\sqlite;

interface SQLiteStmt{
	
	public const INIT_PLAYERS = "cosmicpe.mcmmo.init.players";
	public const INIT_SKILLS = "cosmicpe.mcmmo.init.skills";
	public const INIT_SUB_SKILLS = "cosmicpe.mcmmo.init.sub_skills";

	public const SAVE_PLAYER = "cosmicpe.mcmmo.players.save";

	public const LOAD_SKILLS = "cosmicpe.mcmmo.skills.load";
	public const SAVE_SKILLS = "cosmicpe.mcmmo.skills.save";

	public const LOAD_SUB_SKILLS = "cosmicpe.mcmmo.sub_skills.load";
	public const SAVE_SUB_SKILLS = "cosmicpe.mcmmo.sub_skills.save";
}