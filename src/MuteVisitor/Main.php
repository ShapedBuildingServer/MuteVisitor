<?php

/*
 *  ____ _____ ____
 * |  __|  __ |  __| 
 * |__  |  __ |__  |  
 * |____|_____|____|
 *
 *
 */

namespace MuteVisitor;

use pocketmine\command\CommandExecutor;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;

class Main extends PluginBase implements Listener {
	
	public function onCommand(CommandSender $sender, Command $command, $label, array $args){
		switch($command->getName()){
			case "mutevisitor":
			   $name = $sender->getName();
			   $this->mutePlayer[$name] = [];
			   $sender->sendMessage($name . "have been mute!");
			break;
			case "unmutevisitor":
			   $name = $sender->getName();
			   $this->unmutePlayer[$name] = [];
			   $sender->sendMessage($name . "have been unmute!");
			break;
			case "mvhelp":
			   $sender->sendMessage("MuteVisitor Help:");
			   $sender->sendMessage(" /mutevisitor - Mute all visitor rank to talk");
			   $sender->sendMessage(" /unmutevisitor - UnMute visitor rank to talk");
		}
    
    // 
	}
