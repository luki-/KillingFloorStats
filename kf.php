<?PHP 
//------ CONFIGURATION AREA ------\\
	DEFINE('KFStats', 'http://steamcommunity.com/profiles/%s/statsfeed/1250/?schema=1');
	
	//MySQL Database (optional, used only for cache)
	DEFINE('db_host', 'DATABASE HOST');
	DEFINE('db_user', 'DATABASE USER');
	DEFINE('db_pass', 'DATABASE PASS');
	DEFINE('db_name', 'DATABASE NAME');
	DEFINE('db_table', 'kfstats_cache');
	
	DEFINE('FILES_PATH', './'); //relative path to additional files (jQuery + swf with chart)
	DEFINE('CHART_WIDTH', 1000);
	DEFINE('CHART_HEIGHT', 550);
	
	$playerlist = array(
		//list of players' profiles (SteamID64 + display name)
		array('id' => '7656119XXXXXXXXXX', 'name' => 'visible nick'),
	);
	
	//List of maps in English achievements descriptions
	//'Map name' => array('of', 'apinames', 'of', 'map-related', 'achievements') or false if not required
	$maplist = array(
		'Abusement Park'		=> false,
		'Aperture'				=> false,
		'Bedlam'				=> array('winasylumnormal', 'winasylumhard', 'winasylumsuicidal', 'winasylumhell'),
		'Biohazard'				=> false,
		'Biotics Lab'			=> false,
		'Crash'					=> false,
		'Departed'				=> false,
		'Farm'					=> false,
		'Filth\'s Cross'		=> false,
		'Foundry'				=> false,
		'Hellride'				=> false,
		'Hillbilly Horror'		=> false,
		'Hospital Horrors'		=> false,
		'Icebreaker'			=> false,
		'Ice Cave'				=> false,
		'Manor'					=> false,
		'Moonbase'				=> false,
		'Mountain Pass'			=> false,
		'Offices'				=> false,
		'Santa\'s Evil Lair'	=> false,
		'Suburbia'				=> false,
		'Steamland'				=> array('winsteamlandnormal', 'winsteamlandhard', 'winsteamlandsuicidal', 'winsteamlandhell'),
		'Steamland Objective'	=> array('winsteamlandobjnormal', 'winsteamlandobjhard', 'winsteamlandobjsuicidal', 'winsteamlandobjhell'),
		'Waterworks'			=> false,
		'West London'			=> false,
		'Wyre'					=> false,
	);
	
	//Similar as above
	$difficultylist = array(
		'Normal',
		'Hard',
		'Suicidal',
		'Hell on Earth',
	);
	
	//Visible names and types (for icons) for stats
	$statlist = array(
		'kills'								=> array('visible_name' => 'Total Kills', 'type' => 'misc'),
		'cashdonated'						=> array('visible_name' => 'Cash Donated', 'type' => 'misc'),
		'feedingkills'						=> array('visible_name' => 'Feeding Kills', 'type' => 'misc'),
		'bloatkills'						=> array('visible_name' => 'Bloat Kills', 'type' => 'misc'),
		'sirenkills'						=> array('visible_name' => 'Siren Kills', 'type' => 'misc'),
		'solesurvivorwaves'					=> array('visible_name' => 'Sole Survivor Waves', 'type' => 'misc'),
		'totalzedtime'						=> array('visible_name' => 'Total Zed Time', 'type' => 'misc'),
		'crawlerskilledinmidair'			=> array('visible_name' => 'Crawlers Killed in Midair', 'type' => 'misc'),
		'droppedtier3weapons'				=> array('visible_name' => 'Dropped Tier3 Weapons', 'type' => 'misc'),
		'halloweenkills'					=> array('visible_name' => 'Halloween Zeds killed', 'type' => 'misc'),
		'halloweenscrakekills'				=> array('visible_name' => 'Halloween Scrakes killed', 'type' => 'misc'),
		
		'damagehealed'						=> array('visible_name' => 'Damage Healed', 'type' => 'medic'),
		'selfheals'							=> array('visible_name' => 'Self Heals', 'type' => 'medic'),
		'teammateshealedwithmp7'			=> array('visible_name' => 'Teammates Healed With MP7 Medic Gun', 'type' => 'medic'),
		'xmaspointshealedwithmp5'			=> array('visible_name' => 'XMas point healed with MP5', 'type' => 'medic'),
		
		'shotgundamage'						=> array('visible_name' => 'Support Damage', 'type' => 'support'),
		'weldingpoints'						=> array('visible_name' => 'Welding Points', 'type' => 'support'),
		'fleshpoundskilledwithaa12'			=> array('visible_name' => 'Fleshpounds Killed With AA12 Shotgun', 'type' => 'support'),
		
		'headshotkills'						=> array('visible_name' => 'Sharpshooter Kills', 'type' => 'sharp'),
		'burningcrossbowkills'				=> array('visible_name' => 'Burning Crossbow Kills', 'type' => 'sharp'),
		
		'bullpupdamage'						=> array('visible_name' => 'Commando Damage', 'type' => 'commando'),
		'stalkerkills'						=> array('visible_name' => 'Stalkers Killed', 'type' => 'commando'),
		'enemieskilledwithscar'				=> array('visible_name' => 'Enemies Killed with SCAR', 'type' => 'commando'),
		'enemieskilledwithfnfal'			=> array('visible_name' => 'Enemies killed with FN-Fal', 'type' => 'commando'),
		'enemieskilledwithbullpup'			=> array('visible_name' => 'Enemies killed with Bullpup', 'type' => 'commando'),
		
		'meleedamage'						=> array('visible_name' => 'Melee Damage', 'type' => 'berserker'),
		
		'flamethrowerdamage'				=> array('visible_name' => 'Firebug Damage', 'type' => 'firebug'),
		'mac10burndamage'					=> array('visible_name' => 'Mac10 Burn Damage', 'type' => 'firebug'),
		'xmashuskskilledwithhuskcannon'		=> array('visible_name' => 'XMas Husks killed with Husk cannon', 'type' => 'firebug'),
		
		'explosivesdamage'					=> array('visible_name' => 'Demolition Damage', 'type' => 'demo'),
		'gibbedfleshpounds'					=> array('visible_name' => 'Gibbed Fleshpounds', 'type' => 'demo'),
		'stalkerskilledwithexplosives'		=> array('visible_name' => 'Stalkers Killed with Explosives', 'type' => 'demo'),
		'gibbedenemies'						=> array('visible_name' => 'Gibbed Enemies', 'type' => 'demo'),
		'demolitionspipebombkills'			=> array('visible_name' => 'Demolitions Pipebomb Kills', 'type' => 'demo'),
		'enemiesgibbedwithm79'				=> array('visible_name' => 'Enemies Gibbed with M79', 'type' => 'demo'),
		
		'zedsetfirewithtrenchonhillbilly'	=> array('visible_name' => 'Zeds Set On Fire With Trench (HillBilly)', 'type' => 'misc'),
		'zedkilledduringhillbilly'			=> array('visible_name' => 'Zeds Killed During HillBilly', 'type' => 'misc'),
		// 'stat46'							=> array('visible_name' => 'HillBilly Achievements Completed', 'type' => 'misc'),
		
		'fleshpoundskilledwithaxe'			=> array('visible_name' => 'Fleshpounds Killed with Axe', 'type' => 'misc'),
		'zedskilledwhileairborne'			=> array('visible_name' => 'Zeds Killed While Airbone', 'type' => 'misc'),
		'zedskilledwhilezapped'				=> array('visible_name' => 'Zeds Killed While Zapped', 'type' => 'misc'),
		
		// 'testing1'						=> array('visible_name' => 'Stat XX', 'type' => 'misc'),
		'medicprestige'						=> array('visible_name' => 'Medic Prestige', 'type' => 'medic'),
		'supportprestige'					=> array('visible_name' => 'Support Prestige', 'type' => 'support'),
		'sharpshooterprestige'				=> array('visible_name' => 'Sharpshooter Prestige', 'type' => 'sharp'),
		'commandoprestige'					=> array('visible_name' => 'Commando Prestige', 'type' => 'commando'),
		'berserkerprestige'					=> array('visible_name' => 'Berserker Prestige', 'type' => 'berserker'),
		'firebugprestige'					=> array('visible_name' => 'Firebug Prestige', 'type' => 'firebug'),
		'demoprestige'						=> array('visible_name' => 'Demo Prestige', 'type' => 'demo'),
	);
	
	//List with in-game perks and requirements for promotion to a higher level
	$perks = array(
		'medic'		=> array(
			'name'			=> 'Field Medic',
			'requirements'	=> array(
				'damagehealed'	=> array(
					1 => 200,
					2 => 750,
					3 => 4000,
					4 => 12000,
					5 => 25000,
					6 => 100000
				),
			),
		),
		'support'	=> array(
			'name'			=> 'Support Specialist',
			'requirements'	=> array(
				'shotgundamage'	=> array(
					1 => 25000,
					2 => 100000,
					3 => 500000,
					4 => 1500000,
					5 => 3500000,
					6 => 5500000
				),
				'weldingpoints'	=> array(
					1 => 2000,
					2 => 7000,
					3 => 35000,
					4 => 120000,
					5 => 250000,
					6 => 370000
				),
			),
		),
		'sharp'		=> array(
			'name'			=> 'Sharpshooter',
			'requirements'	=> array(
				'headshotkills'	=> array(
					1 => 30,
					2 => 100,
					3 => 700,
					4 => 2500,
					5 => 5500,
					6 => 8500
				),
			),
		),
		'commando'	=> array(
			'name'			=> 'Commando',
			'requirements'	=> array(
				'bullpupdamage'	=> array(
					1 => 25000,
					2 => 100000,
					3 => 500000,
					4 => 1500000,
					5 => 3500000,
					6 => 5500000
				),
				'stalkerkills'	=> array(
					1 => 30,
					2 => 100,
					3 => 350,
					4 => 1200,
					5 => 2400,
					6 => 3600
				),
			),
		),
		'berserker'	=> array(
			'name'			=> 'Berserker',
			'requirements'	=> array(
				'meleedamage'	=> array(
					1 => 25000,
					2 => 100000,
					3 => 500000,
					4 => 1500000,
					5 => 3500000,
					6 => 5500000
				),
			),
		),
		'firebug'	=> array(
			'name'			=> 'Firebug',
			'requirements'	=> array(
				'flamethrowerdamage'	=> array(
					1 => 25000,
					2 => 100000,
					3 => 500000,
					4 => 1500000,
					5 => 3500000,
					6 => 5500000
				),
			),
		),
		'demo'	=> array(
			'name'			=> 'Demolition',
			'requirements'	=> array(
				'explosivesdamage'	=> array(
					1 => 25000,
					2 => 100000,
					3 => 500000,
					4 => 1500000,
					5 => 3500000,
					6 => 5500000
				),
			),
		),
	);
	
	//Count of other (non-maps) achievements
	$other_count = 124;
	
	//Only applicable when using MySQL database
	$cache_time = 300; // 60 * 5 -> 5 minutes
		
//------ END OF CONFIGURATION ------\\
	
	$mapachs_count = count($maplist) * count($difficultylist);
	
	function t($phrase) {
		global $translations;
		//TO DO
		return $phrase;
	}
	
	function getMap($ach_desc, $apiname)
	{
		global $maplist;
		foreach ($maplist as $map => $apinames) {
			if($apinames) {
				if(in_array($apiname, $apinames))
					return $map;
			} else
				if(strpos($ach_desc, $map) !== false)
					return $map;
		}
		return false;
	}
	
	function getDifficulty($ach_desc)
	{
		global $difficultylist;
		
		foreach ($difficultylist as $difficulty)
			if (strpos($ach_desc, $difficulty) !== false)
				return $difficulty;
		return false;
	}
	
	function getPlayerPerksLevels(&$player) {
		global $perks;
		$player['perks'] = array();
		foreach($perks as $perk_id => $perk) {
			$level = array();
			foreach($perk['requirements'] as $statname => $requiredvalues) {
				$level[$statname] = 0;
				for($i = 1; $i <= 6; $i++)
					if($player['stats'][$statname] >= $requiredvalues[$i])
						$level[$statname] = $i;
					else
						break;
			}
			$player['perks'][$perk_id] = min($level);
		}
	}
	
	function getAchievements($players) {
		global $cache_time;
		
		$db = @mysqli_connect(db_host, db_user, db_pass);
		if ($db)
			mysqli_select_db($db, db_name);
	
		$mc = curl_multi_init();
		
		foreach ($players as &$p) {
			if ($db) {
				$q = mysqli_query($db, "SELECT `lastupdate`, `data_stats` FROM `" . db_table . "` WHERE `id` = '" . mysqli_real_escape_string($db, $p['id']) . "' LIMIT 1");
				if ($q && (mysqli_num_rows($q) != 0)) {
					$q = mysqli_fetch_array($q, MYSQLI_ASSOC);
					$p['data_stats'] = $q['data_stats'];
					if ((time() - $q['lastupdate']) <= $cache_time)
						//if(!isset($_GET['forceupdate']))
						continue;
				}
			}
			
			$c = curl_init();
			curl_setopt($c, CURLOPT_URL, sprintf(KFStats, $p['id']));
			curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
			curl_multi_add_handle($mc, $c);
			$p['handle_stats'] = $c;
		}
		
		$running = null;
		do {
			curl_multi_exec($mc, $running);
			usleep(500);
		} while ($running > 0);
		
		foreach ($players as &$p) {
			$p['profile_private'] = false;
			if (isset($p['handle_stats'])) {
				$ci_stats = curl_getinfo($p['handle_stats']);
				if (($ci_stats['http_code'] == 200) && ($ci_stats['size_download'] > 1024)) {
					$p['data_stats'] = curl_multi_getcontent($p['handle_stats']);
					if ($db)
						$q = mysqli_query($db, "REPLACE INTO `" . db_table . "` (`id`, `lastupdate`, `data_stats`) VALUES ('" . mysqli_real_escape_string($db, $p['id']) . "', UNIX_TIMESTAMP(), '" . mysqli_real_escape_string($db, $p['data_stats']) . "');");
				} else
					$p['profile_private'] = true;
				curl_multi_remove_handle($mc, $p['handle_stats']);
				curl_close($p['handle_stats']);
				unset($p['handle_stats']);
			}
			
			$xml = simplexml_load_string($p['data_stats'], 'SimpleXMLElement', LIBXML_NOERROR | LIBXML_NOWARNING);
			if (($xml instanceof SimpleXMLElement) && (count($xml) != 0)) {
				if (isset($xml->achievements->item)) {
					$p['achs'] = array('other_closed' => 0, 'maps_closed' => 0);
					foreach ($xml->achievements->item as $ach)
					{
						$map = getMap((string)$ach->description, (string)$ach->APIName);
						$diff = getDifficulty((string)$ach->description);
						
						if ($map && $diff) {
							$p['achs'][$diff][$map] = (int)$ach->value == 1;
							if ((int)$ach->value == 1)
								$p['achs']['maps_closed']++;
						} else
							if ((int)$ach->value == 1)
								$p['achs']['other_closed']++;
					}
				}
				if (isset($xml->stats->item)) {
					$p['stats'] = array();
					foreach ($xml->stats->item as $stat)
						$p['stats'][(string)$stat->APIName] = (string)$stat->value;
				}
			}
			unset($p['data_stats']);
			getPlayerPerksLevels($p);
		}
		
		curl_multi_close($mc);
		
		return $players;
	}
	
	$playerlist = getAchievements($playerlist);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="author" content="Luki, PixelDuck"/>
		<link rel="shortcut icon" href="http://www.kf-wiki.com/images/a/a2/Pound_icon_64.png" type="image/x-icon"/>
		<title><?=t('Killing Floor :: Stats')?></title>
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<link href="http://fonts.googleapis.com/css?family=Cuprum&amp;subset=latin" rel="stylesheet" type="text/css">
		<style type="text/css">
			body {
				background-color: #222222;
				color: #a1a1a1;
				font: 14px 'Cuprum', sans-serif;
				padding: 0;
			}
			#maps td, #stats_container div {
				border: 1px solid #2d2d2d;
				height: 20px;
				padding: 4px 5px;
			}
			table {
				border-collapse: collapse;
				text-align: left;
				font-size: 14px;
				margin-bottom: 50px !important;
				table-layout: fixed;
			}
			.complete {
				color: #FFBF28;
			}
			.achievement_unlocked {
				background-color: #ffbf28;
				text-align: center;
				color: #000;
				margin: 1px;
				text-shadow: 0 1px 0 rgba(255, 255, 255, 0.3);
			}
			.achievement_locked {
				background-color: #959595;
				text-align: center;
				color: #000;
				margin: 1px;
				text-shadow: 0 1px 0 rgba(255, 255, 255, 0.3);
			}
			.achievement_unknown {
				text-align: center;
				background-color: #000;
				color: #777;
				margin: 1px;
			}
			#maps td.invisible {
				border: none;
				background: none;
				min-width: 8px;
				padding: 0;
			}
			a {
				text-decoration: none;
				color: #fff;
				display: block;
			}
			#maps .maps {
				width: 150px;
			}
			#maps tr.map-row:hover {
				background: #151515;
			}
			#maps tr.map-row:hover td.invisible {
				background: #222222;
			}
			#maps tr.map-row:hover td.achievement_unlocked {
				background: #a17611;
			}
			#maps tr.map-row:hover td.achievement_locked {
				background: #5c5c5c;
			}
			
			#stats_container {
				overflow: auto;
				width: 1205px;
			}
			#stats_container div.stat {
				display: inline-block;
				float: left;
				cursor: pointer;
				padding-left: 20px;
				margin: 2px;
				width: 210px;
			}
			#stats_container div.stat_type_misc {
				background: url('<?=FILES_PATH?>images/misc.png') left 1px no-repeat;
			}
			#stats_container div.stat_type_medic, td.perk_container span.perk_medic {
				background: url('<?=FILES_PATH?>images/medic.png') left no-repeat;
			}
			#stats_container div.stat_type_support, td.perk_container span.perk_support {
				background: url('<?=FILES_PATH?>images/support.png') left no-repeat;
			}
			#stats_container div.stat_type_sharp, td.perk_container span.perk_sharp {
				background: url('<?=FILES_PATH?>images/sharp.png') left no-repeat;
			}
			#stats_container div.stat_type_commando, td.perk_container span.perk_commando {
				background: url('<?=FILES_PATH?>images/commando.png') left no-repeat;
			}
			#stats_container div.stat_type_berserker, td.perk_container span.perk_berserker {
				background: url('<?=FILES_PATH?>images/berserker.png') left no-repeat;
			}
			#stats_container div.stat_type_firebug, td.perk_container span.perk_firebug {
				background: url('<?=FILES_PATH?>images/firebug.png') left no-repeat;
			}
			#stats_container div.stat_type_demo, td.perk_container span.perk_demo {
				background: url('<?=FILES_PATH?>images/demo.png') left no-repeat;
			}

			td.perk_container span.perk_medic_red {
				background: url('<?=FILES_PATH?>images/medic_red.png') left no-repeat;
			}
			td.perk_container span.perk_support_red {
				background: url('<?=FILES_PATH?>images/support_red.png') left no-repeat;
			}
			td.perk_container span.perk_sharp_red {
				background: url('<?=FILES_PATH?>images/sharp_red.png') left no-repeat;
			}
			td.perk_container span.perk_commando_red {
				background: url('<?=FILES_PATH?>images/commando_red.png') left no-repeat;
			}
			td.perk_container span.perk_berserker_red {
				background: url('<?=FILES_PATH?>images/berserker_red.png') left no-repeat;
			}
			td.perk_container span.perk_firebug_red {
				background: url('<?=FILES_PATH?>images/firebug_red.png') left no-repeat;
			}
			td.perk_container span.perk_demo_red {
				background: url('<?=FILES_PATH?>images/demo_red.png') left no-repeat;
			}
			td.perk_container {
				width: 98px;
				padding: 13px 0 !important;
			}
			td.perk_container span.perk {
				display: inline-block;
				width: 14px;
				height: 22px;
				padding-left: 20px;
				background-position: left -3px !important;
				color: #e2cd87;
			}
			td.perk_container span.perk_red {
				color: #fc4041;
			}
			
			#stats_container div.selected, #stats_container div.stat:hover {
				background-color: #151515;
				color: #fff;
				text-shadow: 0 1px 0 #000;
			}
			
			.footer {
				background: #171717;
				padding: 10px 20px;
				margin: 25px 0 0 0;
				text-align: left;
			}
			.footer ul {
				margin: 0;
				padding: 0;
				width: 200px;
			}
			.footer li {
				list-style: none;
			}
			.footer li.achievement_unlocked,
			.footer li.achievement_locked,
			.footer li.achievement_unknown {
				padding: 3px 5px 4px 5px;
				text-transform: uppercase;
				text-align: left;
				margin: 10px 0 5px 0;
			}
			.footer .box {
				width: 200px;
				display: inline-block;
				vertical-align: top;
				margin: 0 50px 30px 0;
			}
			.footer a {
				display: inline;
			}
		</style>
	</head>
	<body>
		<center>
			<div class="content">
				<div id="maps">
					<table>
						<tbody>
							<tr>
								<td class="maps"><?=t('Maps')?></td>
								<td class="invisible"/>
<?PHP	foreach($playerlist as $p) { ?>
								<td colspan="<?=count($difficultylist)?>"><a href="http://steamcommunity.com/profiles/<?=$p['id']?>/stats/KillingFloor" target="_blank"<?=($p['profile_private'] === true)?' style="color: #aaa"':''?>><?=$p['name']?></a></td>
								<td class="invisible"/>
<?PHP	} ?>
							</tr>
<?PHP	foreach($maplist as $m => $apinames) { ?>
							<tr class="map-row">
								<td><?=$m?></td>
								<td class="invisible"/>
<?PHP		foreach($playerlist as $p) {
				foreach($difficultylist as $d) { ?>
								<td class="<?=(($p['achs'][$d][$m] === true)?'achievement_unlocked':(($p['achs'][$d][$m] === false)?'achievement_locked':'achievement_unknown'))?>"><?=substr($d, 0, 2)?></td>
<?PHP			} ?>
								<td class="invisible"/>
<?PHP		} ?>
							</tr>
<?PHP	} ?>
							<tr style="height: 50px">
								<td colspan="2" class="invisible"/>
<?PHP	foreach($playerlist as $p) {
			$p['percent'] = floor($p['achs']['maps_closed'] / $mapachs_count * 100); ?>
								<td colspan="<?=count($difficultylist)?>" class="invisible" style="text-align: center">
<?PHP		if($p['percent'] == 100) { ?>
									<strong class="complete">100%<br/><?=t('Completion')?></strong>
<?PHP		} else { ?>
								<?=$p['percent']?>%<br/>
								<?=abs($p['achs']['maps_closed'])?> / <?=$mapachs_count?>
<?PHP		} ?>
								</td>
								<td class="invisible"/>
<?PHP	} ?>					
							</tr>
							<tr style="border-top: 1px solid #777; height: 50px;">
								<td class="invisible"><?=t('Other achievements')?></td>
								<td class="invisible"/>
<?PHP	foreach($playerlist as $p) {
			$p['o_percent'] = floor($p['achs']['other_closed'] / $other_count * 100); ?>
								<td colspan="<?=count($difficultylist)?>" class="invisible" style="text-align: center">
<?PHP		if($p['o_percent'] == 100) { ?>
									<strong class="complete">100%<br/><?=t('Completion')?></strong>
<?PHP		} else { ?>
								<?=$p['o_percent']?>%<br/>
								<?=abs($p['achs']['other_closed'])?> / <?=$other_count?>
<?PHP		} ?>
								</td>
								<td class="invisible"/>
<?PHP	} ?>
							</tr>
							<tr style="border-top: 1px solid #777; height: 50px;">
								<td class="invisible"><?=t('Perks')?></td>
								<td class="invisible"/>
<?PHP	foreach($playerlist as $p) { ?>
								<td colspan="<?=count($difficultylist)?>" class="invisible perk_container" style="text-align: center">
<?PHP		foreach($perks as $perk_id => $perk) { ?>
									<span class="perk perk_<?=$perk_id . ($p['perks'][$perk_id] < 6 ? '_red perk_red' : '')?>"><?=$p['perks'][$perk_id]?></span>
<?PHP		} ?>
								</td>
								<td class="invisible"/>
<?PHP	} ?>
							</tr>
						</tbody>
					</table>
				</div>
				<div id="stats">
					<div id="chart_container">
					</div>
					<div id="stats_container">
<?PHP	$chart_data = array(
			'options' => array(
				'animation' => array(
					'duration' => 150,
					'easing' => 'linear',
				),
				'title' => '##PLACEHOLDER##',
				'titleTextStyle' => array(
					'color' => '#ffffff',
				),
				'legend' => array(
					'position' => 'none',
				),
				'width' => CHART_WIDTH,
				'height' => CHART_HEIGHT,
				'chartArea' => array(
					'left' => '100',
					'width' => '85%',
					'height' => '80%',
				),
				'backgroundColor' => array(
					'fill' => '#222222',
				),
				'vAxis' => array(
					'gridlines' => array(
						'color' => '#555555',
						'count' => '6',
					),
					'textStyle' => array(
						'color' => '#959595',
					),
				),
				'hAxis' => array(
					'textStyle' => array(
						'color' => '#ffffff',
						'fontSize' => '12',
					),
					'slantedText' => true,
				),
				'series' => array(
					'0' => array(
						'color' => '#ffbf28',
					),
				),
			),
			'chart' => array(), 
		);
		$charts = '';
		$row = 1;
		foreach($statlist as $s => $stat) {	?>
						<div id="stat_<?=str_replace(' ', '_', strtolower($s))?>" onclick="showChart('<?=$s?>', chart_<?=str_replace(' ', '_', strtolower($s))?>)" class="stat<?=($row == 1)?' selected':''?> stat_type_<?=$stat['type']?>">
							<?=$stat['visible_name']?>
						</div>
<?PHP		$chart_data['options']['title'] = $stat['visible_name'];
			$chart_data['chart'] = array(
				array(
					t('Nicks'),
					$stat['visible_name'],
			));
			foreach($playerlist as $p) {
				$chart_stat = array(
					$p['name'], (int)$p['stats'][$s]
				);
				$chart_data['chart'][] = $chart_stat;
			}
			$charts .= 'var chart_' . str_replace(' ', '_', strtolower($s)) . ' = \'' . str_replace('\'', '\\\'', json_encode($chart_data)) . "';\n";
			$row++;
		}	?>
					</div>
				</div>
			</div>
		</center>
		<script type="text/javascript">
			<?=$charts?>
			
			google.load('visualization', '1', {packages:['corechart']});
			
			function showChart(id, data) {
				$('#stats_container div').removeClass('selected');
				$('#stats_container #stat_' + id.replace(/ /g, '_').toLowerCase()).addClass('selected');
				data = JSON.parse(data);
				var chart_data = google.visualization.arrayToDataTable(data['chart']);
				var chart_opts = data['options'];
				
				chart.draw(chart_data, chart_opts);
			}
			
			var chart;
			$(window).load(function() {
				chart = new google.visualization.ColumnChart(document.getElementById('chart_container'));
				showChart('kills', chart_kills);
				$('#chart').show();
			});
		</script>
		<div class="footer">
			<div class="box">
				<h3><?=t('Nicks')?>:</h3>
				<ul>
					<li><?=t('White: Actual data')?></li>
					<li><?=t('Grey: Data from cache')?></li>
				</ul>
			</div>
			<div class="box">
				<h3><?=t('Legend')?>:</h3>
				<ul>
					<li>No: <?=t('Normal')?></li>
					<li>Ha: <?=t('Hard')?></li>
					<li>Su: <?=t('Suicidal')?></li>
					<li>He: <?=t('Hell on Earth')?></li>
				</ul>
			</div>
			<div class="box">
				<h3><?=t('Maps')?>:</h3>
				<ul>
					<li class="achievement_unlocked"><?=t('ORANGE-YELLOW')?></li>
					<li><?=t('Achievement Unlocked')?></li>
					<br/>
					<li class="achievement_locked"><?=t('GREY')?></li>
					<li><?=t('Achievement Locked')?></li>
					<br/>
					<li class="achievement_unknown"><?=t('BLACK')?></li>
					<li><?=t('No Data')?></li>
				</ul>
			</div>
			<p><?=sprintf(t('Minimum interval between refreshes: %ds'), $cache_time)?></p>
			<p>&copy; 2012 <a href="http://luki.net.pl" target="_blank">Luki</a>, original layout by <a href="http://nyssa.me" target="_blank">PixelDuck</a> (a member of <a href="http://sykosis.co.uk" target="_blank">Sykosis</a> clan) modified by <a href="http://luki.net.pl" target="_blank">Luki</a></p>
		</div>
	</body>
</html>
