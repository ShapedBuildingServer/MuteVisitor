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
			    if($sender->hasPermission("mv.command.mute")){
                                   foreach($this->getServer()->getOnlinePlayers() as $p){
					    $group = $this->getServer()->getPluginManager()->getPlugin("PurePerms")->getUserDataMgr()->getGroup($p);
					    $groupname = $group->getName();
					    if($groupname == "Visitor"){
				                $this->mutedRanks->sendMessage("You're not allow to talk!");
					    }
				    }
			    }else{
				$sender->sendMessage("You don't have permission to use this command!");
		            }
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
