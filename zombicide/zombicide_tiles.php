﻿<?
	// Tile declaration as arrays
	// Each side were described as a three sections
	// connections between tiles, where	
	// S = Street
	// B = Building
	// P = Prison Corridors
	// F = Open Field, Wasteland
	// M = Mall Corridors
	// H = Hospital Corridors

	function load_collection() {
		global $collection;
		global $selection;
		// if a custom selection was made, load speccific tile sets
		if (isset($selection)) {
			foreach($selection as $set){
				// load set 1 tiles, base set of the game
				if ($set == "S1") {
					// echo "<p>S1 selected</p>";
					$collection[] = array("code" => "1B", "ocode" => "3B", "top" => "SSS", "right" => "SSS", "bottom" => "SBB", "left" => "BBS", "rooms" => 3,	"manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
					$collection[] = array("code" => "1C", "ocode" => "3C", "top" => "SSS", "right" => "SSS", "bottom" => "SBB", "left" => "BBS", "rooms" => 3, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
					$collection[] = array("code" => "2B", "ocode" => "6B", "top" => "BBS", "right" => "SSS", "bottom" => "SSS", "left" => "SBB", "rooms" => 4, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
					$collection[] = array("code" => "2C", "ocode" => "6C", "top" => "SSS", "right" => "SSS", "bottom" => "SBB", "left" => "BBS", "rooms" => 4, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
					$collection[] = array("code" => "3B", "ocode" => "1B", "top" => "BBS", "right" => "SSS", "bottom" => "SBB", "left" => "BBB", "rooms" => 3, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
					$collection[] = array("code" => "3C", "ocode" => "1C", "top" => "BBS", "right" => "SSS", "bottom" => "SBB", "left" => "BBB", "rooms" => 3, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
					$collection[] = array("code" => "4B", "ocode" => "5B", "top" => "BBS", "right" => "SSS", "bottom" => "SBB", "left" => "BBB", "rooms" => 4, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
					$collection[] = array("code" => "4C", "ocode" => "5C", "top" => "SBB", "right" => "BBB", "bottom" => "BBS", "left" => "SSS", "rooms" => 4, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
					$collection[] = array("code" => "4D", "ocode" => "5D", "top" => "BBS", "right" => "SSS", "bottom" => "SBB", "left" => "BBB", "rooms" => 4, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
					$collection[] = array("code" => "4E", "ocode" => "5E", "top" => "BBS", "right" => "SSS", "bottom" => "SBB", "left" => "BBB", "rooms" => 4, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
					$collection[] = array("code" => "5B", "ocode" => "4B", "top" => "SSS", "right" => "SSS", "bottom" => "SBS", "left" => "SSS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
					$collection[] = array("code" => "5C", "ocode" => "4C", "top" => "SBS", "right" => "SSS", "bottom" => "SSS", "left" => "SSS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
					$collection[] = array("code" => "5D", "ocode" => "4D", "top" => "SBS", "right" => "SSS", "bottom" => "SSS", "left" => "SSS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
					$collection[] = array("code" => "5E", "ocode" => "4E", "top" => "SSS", "right" => "SSS", "bottom" => "SSS", "left" => "SBS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
					$collection[] = array("code" => "5F", "ocode" => "7B", "top" => "SSS", "right" => "SSS", "bottom" => "SBS", "left" => "SSS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
					$collection[] = array("code" => "6B", "ocode" => "2B", "top" => "SBS", "right" => "SSS", "bottom" => "SBS", "left" => "SSS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
					$collection[] = array("code" => "6C", "ocode" => "2C", "top" => "SBS", "right" => "SSS", "bottom" => "SBS", "left" => "SSS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
					$collection[] = array("code" => "7B", "ocode" => "5F", "top" => "SSS", "right" => "SSS", "bottom" => "SSS", "left" => "SSS", "rooms" => 1, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
				}
				// load set 2 tiles, Prison Outbreak
				if ($set == "S2") {
					// echo "<p>S2 selected</p>";
					$collection[] = array("code" => "10P", "ocode" => "18P", "top" => "PBS", "right" => "SSS", "bottom" => "SSS", "left" => "SBP", "rooms" => 3, "manhole" => 1, "scorridor" => 1, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
					$collection[] = array("code" => "11P", "ocode" => "7P", "top" => "BBS", "right" => "SBB", "bottom" => "BPB", "left" => "BPB",	"rooms" => 5, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
					$collection[] = array("code" => "12P", "ocode" => "3P", "top" => "BPP", "right" => "PBS", "bottom" => "SBP", "left" => "PPB",	"rooms" => 5, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 4, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
					$collection[] = array("code" => "13P", "ocode" => "9P", "top" => "BBB", "right" => "BPB", "bottom" => "BBB", "left" => "BPB",	"rooms" => 10, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 10, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
					$collection[] = array("code" => "14P", "ocode" => "5P", "top" => "BBB", "right" => "BPB", "bottom" => "BPB", "left" => "BPB",	"rooms" => 4, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
					$collection[] = array("code" => "15P", "ocode" => "1P", "top" => "BPB", "right" => "BPB", "bottom" => "BBB", "left" => "BPB", "rooms" => 4,	"manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
					$collection[] = array("code" => "16P", "ocode" => "17P", "top" => "SBP", "right" => "PPP", "bottom" => "PBS", "left" => "SPS", "rooms" => 2, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
					$collection[] = array("code" => "17P", "ocode" => "16P", "top" => "SBS", "right" => "SSS", "bottom" => "SBS", "left" => "SSS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
					$collection[] = array("code" => "18P", "ocode" => "10P", "top" => "SBS", "right" => "SSS", "bottom" => "SBS", "left" => "SSS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
					$collection[] = array("code" => "8P", "ocode" => "2P", "top" => "SBP", "right" => "PPP", "bottom" => "PBS", "left" => "SSS", "rooms" => 5, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 5, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
					$collection[] = array("code" => "9P", "ocode" => "13P", "top" => "PBS", "right" => "SSS", "bottom" => "SSS", "left" => "SBP", "rooms" => 3, "manhole" => 1, "scorridor" => 1, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
					$collection[] = array("code" => "1P", "ocode" => "15P", "top" => "SSS", "right" => "SSS", "bottom" => "SBB", "left" => "BBS",	"rooms" => 0, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
					$collection[] = array("code" => "2P", "ocode" => "8P", "top" => "BBS", "right" => "SSS", "bottom" => "SSS", "left" => "SBB", "rooms" => 0, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
					$collection[] = array("code" => "3P", "ocode" => "12P", "top" => "SBS", "right" => "SSS", "bottom" => "SSS", "left" => "SSS", "rooms" => 2,	"manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
					$collection[] = array("code" => "4P", "ocode" => "6P", "top" => "SBS", "right" => "SSS", "bottom" => "SSS", "left" => "SSS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
					$collection[] = array("code" => "5P", "ocode" => "14P", "top" => "BBS", "right" => "SSS", "bottom" => "SBB", "left" => "BBB", "rooms" => 5,	"manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
					$collection[] = array("code" => "7P", "ocode" => "11P", "top" => "PBS", "right" => "SSS", "bottom" => "SBP", "left" => "PPP", "rooms" => 5,	"manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 5, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
					$collection[] = array("code" => "6P", "ocode" => "4P", "top" => "SBB", "right" => "BBB", "bottom" => "BBS", "left" => "SSS", "rooms" => 5, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
				}
				// load toxic city mall tiles
				if ($set == "TC") {
					// echo "<p>TC selected</p>";
					$collection[] = array("code" => "1M", "ocode" => "8M", "top" => "SSS", "right" => "SSS", "bottom" => "SMM", "left" => "MBS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "TC", "chosen" => "N");
					$collection[] = array("code" => "2M", "ocode" => "7M", "top" => "SSS", "right" => "SSS", "bottom" => "SBM", "left" => "MMS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "TC", "chosen" => "N");
					$collection[] = array("code" => "3M", "ocode" => "6M", "top" => "MBS", "right" => "SSS", "bottom" => "SBM", "left" => "MMM", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "TC", "chosen" => "N");
					$collection[] = array("code" => "4M", "ocode" => "5M", "top" => "MBS", "right" => "SSS", "bottom" => "SBM", "left" => "MMM", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "TC", "chosen" => "N");
					$collection[] = array("code" => "5M", "ocode" => "4M", "top" => "MMM", "right" => "MMM", "bottom" => "MBS", "left" => "SBM", "rooms" => 3, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "TC", "chosen" => "N");
					$collection[] = array("code" => "7M", "ocode" => "2M", "top" => "MMM", "right" => "MMM", "bottom" => "MBS", "left" => "SBM", "rooms" => 3, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "TC", "chosen" => "N");
					$collection[] = array("code" => "8M", "ocode" => "1P", "top" => "SSS", "right" => "SSS", "bottom" => "SSS", "left" => "SSS", "rooms" => 0, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "TC", "chosen" => "N");
					$collection[] = array("code" => "6M", "ocode" => "3M", "top" => "MMM", "right" => "MBS", "bottom" => "SBM", "left" => "MMM", "rooms" => 3, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "TC", "chosen" => "N");
				}
				// load set 3, rue morgue tiles
				if ($set == "S3") {
					// echo "<p>S3 selected</p>";
					$collection[] = array("code" => "1R", "ocode" => "1V", "top" => "SSS", "right" => "SSS", "bottom" => "SBS", "left" => "SBS", "rooms" => 3, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S3", "chosen" => "N");
					$collection[] = array("code" => "1V", "ocode" => "1R", "top" => "BHB", "right" => "BHB", "bottom" => "BBB", "left" => "BHB", "rooms" => 5, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 8, "tents" => 0, "set" => "S3", "chosen" => "N");
					$collection[] = array("code" => "2R", "ocode" => "2V", "top" => "SBS", "right" => "SSS", "bottom" => "SBB", "left" => "BBS", "rooms" => 4, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S3", "chosen" => "N");
					$collection[] = array("code" => "2V", "ocode" => "2R", "top" => "BHB", "right" => "BHB", "bottom" => "BBS", "left" => "SBB", "rooms" => 5, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 6, "tents" => 0, "set" => "S3", "chosen" => "N");
					$collection[] = array("code" => "3R", "ocode" => "3V", "top" => "BBS", "right" => "SSS", "bottom" => "SBS", "left" => "SBB", "rooms" => 5, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S3", "chosen" => "N");
					$collection[] = array("code" => "3V", "ocode" => "3R", "top" => "BBB", "right" => "BHB", "bottom" => "BBS", "left" => "SHB", "rooms" => 4, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 4, "tents" => 0, "set" => "S3", "chosen" => "N");
					$collection[] = array("code" => "4R", "ocode" => "4V", "top" => "SSS", "right" => "SSS", "bottom" => "SBS", "left" => "SBS", "rooms" => 3, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S3", "chosen" => "N");
					$collection[] = array("code" => "4V", "ocode" => "4R", "top" => "BBS", "right" => "SSS", "bottom" => "SBB", "left" => "BHB", "rooms" => 4, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 2, "tents" => 0, "set" => "S3", "chosen" => "N");
					$collection[] = array("code" => "5R", "ocode" => "5V", "top" => "SSS", "right" => "SSS", "bottom" => "SBS", "left" => "SSS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S3", "chosen" => "N");
					$collection[] = array("code" => "5V", "ocode" => "5R", "top" => "BBB", "right" => "BHB", "bottom" => "BHB", "left" => "BHB", "rooms" => 4, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 6, "tents" => 0, "set" => "S3", "chosen" => "N");
					$collection[] = array("code" => "8R", "ocode" => "8V", "top" => "SSS", "right" => "SSS", "bottom" => "SBB", "left" => "BBS", "rooms" => 3, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S3", "chosen" => "N");
					$collection[] = array("code" => "8V", "ocode" => "8R", "top" => "FFS", "right" => "SSS", "bottom" => "SFF", "left" => "FFF", "rooms" => 0, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 4, "set" => "S3", "chosen" => "N");
					$collection[] = array("code" => "9R", "ocode" => "9V", "top" => "SSS", "right" => "SBB", "bottom" => "BBS", "left" => "SSS", "rooms" => 0, "manhole" => 1, "scorridor" => 0, "heliport" => 1, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S3", "chosen" => "N");
					$collection[] = array("code" => "9V", "ocode" => "9R", "top" => "FFS", "right" => "SSS", "bottom" => "SFF", "left" => "FFF", "rooms" => 0, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 5, "set" => "S3", "chosen" => "N");
					$collection[] = array("code" => "7R", "ocode" => "7V", "top" => "BBS", "right" => "SSS", "bottom" => "SBB", "left" => "BBB", "rooms" => 5, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S3", "chosen" => "N");
					$collection[] = array("code" => "7V", "ocode" => "7R", "top" => "SSS", "right" => "SSS", "bottom" => "SFF", "left" => "FFS", "rooms" => 0, "manhole" => 1, "scorridor" => 0, "heliport" => 1, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 4, "set" => "S3", "chosen" => "N");
					$collection[] = array("code" => "6R", "ocode" => "6V", "top" => "SBS", "right" => "SSS", "bottom" => "SBS", "left" => "SSS", "rooms" => 3, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S3", "chosen" => "N");
					$collection[] = array("code" => "6V", "ocode" => "6R", "top" => "SSS", "right" => "SSS", "bottom" => "SBB", "left" => "BBS", "rooms" => 4, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 2, "tents" => 0, "set" => "S3", "chosen" => "N");
				}	
				// load angry neighbors tiles
				if ($set == "AN") {
					// echo "<p>AN selected</p>";
					$collection[] = array("code" => "10R", "ocode" => "10V", "top" => "SBS", "right" => "SSS", "bottom" => "SBS", "left" => "SSS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 1, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "AN", "chosen" => "N");
					$collection[] = array("code" => "10V", "ocode" => "10R", "top" => "SBS", "right" => "SBB", "bottom" => "BBB", "left" => "BBS", "rooms" => 6, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 1, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "AN", "chosen" => "N");
					$collection[] = array("code" => "11R", "ocode" => "11V", "top" => "SBS", "right" => "SSS", "bottom" => "SSS", "left" => "SSS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "AN", "chosen" => "N");
					$collection[] = array("code" => "11V", "ocode" => "11R", "top" => "SBS", "right" => "SSS", "bottom" => "SSS", "left" => "SBS", "rooms" => 3, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "AN", "chosen" => "N");	
					$collection[] = array("code" => "12R", "ocode" => "12V", "top" => "SBS", "right" => "SBS", "bottom" => "SSS", "left" => "SSS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 1, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "AN", "chosen" => "N");
					$collection[] = array("code" => "12V", "ocode" => "12R", "top" => "BBB", "right" => "BBB", "bottom" => "BBS", "left" => "SBB", "rooms" => 3, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 1, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "AN", "chosen" => "N");
				}
			}
		}
		// if no selection was made, load all tiles
		else {
			// echo "<p>Nada selecionado, carrega todos.</p>";
			// load set 1 tiles, base set of the game
			$collection[] = array("code" => "1B", "ocode" => "3B", "top" => "SSS", "right" => "SSS", "bottom" => "SBB", "left" => "BBS", "rooms" => 3,	"manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
			$collection[] = array("code" => "1C", "ocode" => "3C", "top" => "SSS", "right" => "SSS", "bottom" => "SBB", "left" => "BBS", "rooms" => 3, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
			$collection[] = array("code" => "2B", "ocode" => "6B", "top" => "BBS", "right" => "SSS", "bottom" => "SSS", "left" => "SBB", "rooms" => 4, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
			$collection[] = array("code" => "2C", "ocode" => "6C", "top" => "SSS", "right" => "SSS", "bottom" => "SBB", "left" => "BBS", "rooms" => 4, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
			$collection[] = array("code" => "3B", "ocode" => "1B", "top" => "BBS", "right" => "SSS", "bottom" => "SBB", "left" => "BBB", "rooms" => 3, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
			$collection[] = array("code" => "3C", "ocode" => "1C", "top" => "BBS", "right" => "SSS", "bottom" => "SBB", "left" => "BBB", "rooms" => 3, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
			$collection[] = array("code" => "4B", "ocode" => "5B", "top" => "BBS", "right" => "SSS", "bottom" => "SBB", "left" => "BBB", "rooms" => 4, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
			$collection[] = array("code" => "4C", "ocode" => "5C", "top" => "SBB", "right" => "BBB", "bottom" => "BBS", "left" => "SSS", "rooms" => 4, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
			$collection[] = array("code" => "4D", "ocode" => "5D", "top" => "BBS", "right" => "SSS", "bottom" => "SBB", "left" => "BBB", "rooms" => 4, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
			$collection[] = array("code" => "4E", "ocode" => "5E", "top" => "BBS", "right" => "SSS", "bottom" => "SBB", "left" => "BBB", "rooms" => 4, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
			$collection[] = array("code" => "5B", "ocode" => "4B", "top" => "SSS", "right" => "SSS", "bottom" => "SBS", "left" => "SSS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
			$collection[] = array("code" => "5C", "ocode" => "4C", "top" => "SBS", "right" => "SSS", "bottom" => "SSS", "left" => "SSS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
			$collection[] = array("code" => "5D", "ocode" => "4D", "top" => "SBS", "right" => "SSS", "bottom" => "SSS", "left" => "SSS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
			$collection[] = array("code" => "5E", "ocode" => "4E", "top" => "SSS", "right" => "SSS", "bottom" => "SSS", "left" => "SBS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
			$collection[] = array("code" => "5F", "ocode" => "7B", "top" => "SSS", "right" => "SSS", "bottom" => "SBS", "left" => "SSS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
			$collection[] = array("code" => "6B", "ocode" => "2B", "top" => "SBS", "right" => "SSS", "bottom" => "SBS", "left" => "SSS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
			$collection[] = array("code" => "6C", "ocode" => "2C", "top" => "SBS", "right" => "SSS", "bottom" => "SBS", "left" => "SSS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
			$collection[] = array("code" => "7B", "ocode" => "5F", "top" => "SSS", "right" => "SSS", "bottom" => "SSS", "left" => "SSS", "rooms" => 1, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S1", "chosen" => "N");
			// load set 2 tiles, Prison Outbreak
			$collection[] = array("code" => "10P", "ocode" => "18P", "top" => "PBS", "right" => "SSS", "bottom" => "SSS", "left" => "SBP", "rooms" => 3, "manhole" => 1, "scorridor" => 1, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
			$collection[] = array("code" => "11P", "ocode" => "7P", "top" => "BBS", "right" => "SBB", "bottom" => "BPB", "left" => "BPB",	"rooms" => 5, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
			$collection[] = array("code" => "12P", "ocode" => "3P", "top" => "BPP", "right" => "PBS", "bottom" => "SBP", "left" => "PPB",	"rooms" => 5, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 4, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
			$collection[] = array("code" => "13P", "ocode" => "9P", "top" => "BBB", "right" => "BPB", "bottom" => "BBB", "left" => "BPB",	"rooms" => 10, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 10, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
			$collection[] = array("code" => "14P", "ocode" => "5P", "top" => "BBB", "right" => "BPB", "bottom" => "BPB", "left" => "BPB",	"rooms" => 4, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
			$collection[] = array("code" => "15P", "ocode" => "1P", "top" => "BPB", "right" => "BPB", "bottom" => "BBB", "left" => "BPB", "rooms" => 4,	"manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
			$collection[] = array("code" => "16P", "ocode" => "17P", "top" => "SBP", "right" => "PPP", "bottom" => "PBS", "left" => "SPS", "rooms" => 2, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
			$collection[] = array("code" => "17P", "ocode" => "16P", "top" => "SBS", "right" => "SSS", "bottom" => "SBS", "left" => "SSS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
			$collection[] = array("code" => "18P", "ocode" => "10P", "top" => "SBS", "right" => "SSS", "bottom" => "SBS", "left" => "SSS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
			$collection[] = array("code" => "8P", "ocode" => "2P", "top" => "SBP", "right" => "PPP", "bottom" => "PBS", "left" => "SSS", "rooms" => 5, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 5, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
			$collection[] = array("code" => "9P", "ocode" => "13P", "top" => "PBS", "right" => "SSS", "bottom" => "SSS", "left" => "SBP", "rooms" => 3, "manhole" => 1, "scorridor" => 1, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
			$collection[] = array("code" => "1P", "ocode" => "15P", "top" => "SSS", "right" => "SSS", "bottom" => "SBB", "left" => "BBS",	"rooms" => 0, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
			$collection[] = array("code" => "2P", "ocode" => "8P", "top" => "BBS", "right" => "SSS", "bottom" => "SSS", "left" => "SBB", "rooms" => 0, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
			$collection[] = array("code" => "3P", "ocode" => "12P", "top" => "SBS", "right" => "SSS", "bottom" => "SSS", "left" => "SSS", "rooms" => 2,	"manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
			$collection[] = array("code" => "4P", "ocode" => "6P", "top" => "SBS", "right" => "SSS", "bottom" => "SSS", "left" => "SSS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
			$collection[] = array("code" => "5P", "ocode" => "14P", "top" => "BBS", "right" => "SSS", "bottom" => "SBB", "left" => "BBB", "rooms" => 5,	"manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
			$collection[] = array("code" => "7P", "ocode" => "11P", "top" => "PBS", "right" => "SSS", "bottom" => "SBP", "left" => "PPP", "rooms" => 5,	"manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 5, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
			$collection[] = array("code" => "6P", "ocode" => "4P", "top" => "SBB", "right" => "BBB", "bottom" => "BBS", "left" => "SSS", "rooms" => 5, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S2", "chosen" => "N");
			// load toxic city mall tiles
			$collection[] = array("code" => "1M", "ocode" => "8M", "top" => "SSS", "right" => "SSS", "bottom" => "SMM", "left" => "MBS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "TC", "chosen" => "N");
			$collection[] = array("code" => "2M", "ocode" => "7M", "top" => "SSS", "right" => "SSS", "bottom" => "SBM", "left" => "MMS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "TC", "chosen" => "N");
			$collection[] = array("code" => "3M", "ocode" => "6M", "top" => "MBS", "right" => "SSS", "bottom" => "SBM", "left" => "MMM", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "TC", "chosen" => "N");
			$collection[] = array("code" => "4M", "ocode" => "5M", "top" => "MBS", "right" => "SSS", "bottom" => "SBM", "left" => "MMM", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "TC", "chosen" => "N");
			$collection[] = array("code" => "5M", "ocode" => "4M", "top" => "MMM", "right" => "MMM", "bottom" => "MBS", "left" => "SBM", "rooms" => 3, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "TC", "chosen" => "N");
			$collection[] = array("code" => "7M", "ocode" => "2M", "top" => "MMM", "right" => "MMM", "bottom" => "MBS", "left" => "SBM", "rooms" => 3, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "TC", "chosen" => "N");
			$collection[] = array("code" => "8M", "ocode" => "1P", "top" => "SSS", "right" => "SSS", "bottom" => "SSS", "left" => "SSS", "rooms" => 0, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "TC", "chosen" => "N");
			$collection[] = array("code" => "6M", "ocode" => "3M", "top" => "MMM", "right" => "MBS", "bottom" => "SBM", "left" => "MMM", "rooms" => 3, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "TC", "chosen" => "N");
			// load set 3, rue morgue tiles
			$collection[] = array("code" => "1R", "ocode" => "1V", "top" => "SSS", "right" => "SSS", "bottom" => "SBS", "left" => "SBS", "rooms" => 3, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S3", "chosen" => "N");
			$collection[] = array("code" => "1V", "ocode" => "1R", "top" => "BHB", "right" => "BHB", "bottom" => "BBB", "left" => "BHB", "rooms" => 5, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 8, "tents" => 0, "set" => "S3", "chosen" => "N");
			$collection[] = array("code" => "2R", "ocode" => "2V", "top" => "SBS", "right" => "SSS", "bottom" => "SBB", "left" => "BBS", "rooms" => 4, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S3", "chosen" => "N");
			$collection[] = array("code" => "2V", "ocode" => "2R", "top" => "BHB", "right" => "BHB", "bottom" => "BBS", "left" => "SBB", "rooms" => 5, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 6, "tents" => 0, "set" => "S3", "chosen" => "N");
			$collection[] = array("code" => "3R", "ocode" => "3V", "top" => "BBS", "right" => "SSS", "bottom" => "SBS", "left" => "SBB", "rooms" => 5, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S3", "chosen" => "N");
			$collection[] = array("code" => "3V", "ocode" => "3R", "top" => "BBB", "right" => "BHB", "bottom" => "BBS", "left" => "SHB", "rooms" => 4, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 4, "tents" => 0, "set" => "S3", "chosen" => "N");
			$collection[] = array("code" => "4R", "ocode" => "4V", "top" => "SSS", "right" => "SSS", "bottom" => "SBS", "left" => "SBS", "rooms" => 3, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S3", "chosen" => "N");
			$collection[] = array("code" => "4V", "ocode" => "4R", "top" => "BBS", "right" => "SSS", "bottom" => "SBB", "left" => "BHB", "rooms" => 4, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 2, "tents" => 0, "set" => "S3", "chosen" => "N");
			$collection[] = array("code" => "5R", "ocode" => "5V", "top" => "SSS", "right" => "SSS", "bottom" => "SBS", "left" => "SSS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S3", "chosen" => "N");
			$collection[] = array("code" => "5V", "ocode" => "5R", "top" => "BBB", "right" => "BHB", "bottom" => "BHB", "left" => "BHB", "rooms" => 4, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 6, "tents" => 0, "set" => "S3", "chosen" => "N");
			$collection[] = array("code" => "8R", "ocode" => "8V", "top" => "SSS", "right" => "SSS", "bottom" => "SBB", "left" => "BBS", "rooms" => 3, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S3", "chosen" => "N");
			$collection[] = array("code" => "8V", "ocode" => "8R", "top" => "FFS", "right" => "SSS", "bottom" => "SFF", "left" => "FFF", "rooms" => 0, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 4, "set" => "S3", "chosen" => "N");
			$collection[] = array("code" => "9R", "ocode" => "9V", "top" => "SSS", "right" => "SBB", "bottom" => "BBS", "left" => "SSS", "rooms" => 0, "manhole" => 1, "scorridor" => 0, "heliport" => 1, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S3", "chosen" => "N");
			$collection[] = array("code" => "9V", "ocode" => "9R", "top" => "FFS", "right" => "SSS", "bottom" => "SFF", "left" => "FFF", "rooms" => 0, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 5, "set" => "S3", "chosen" => "N");
			$collection[] = array("code" => "7R", "ocode" => "7V", "top" => "BBS", "right" => "SSS", "bottom" => "SBB", "left" => "BBB", "rooms" => 5, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S3", "chosen" => "N");
			$collection[] = array("code" => "7V", "ocode" => "7R", "top" => "SSS", "right" => "SSS", "bottom" => "SFF", "left" => "FFS", "rooms" => 0, "manhole" => 1, "scorridor" => 0, "heliport" => 1, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 4, "set" => "S3", "chosen" => "N");
			$collection[] = array("code" => "6R", "ocode" => "6V", "top" => "SBS", "right" => "SSS", "bottom" => "SBS", "left" => "SSS", "rooms" => 3, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "S3", "chosen" => "N");
			$collection[] = array("code" => "6V", "ocode" => "6R", "top" => "SSS", "right" => "SSS", "bottom" => "SBB", "left" => "BBS", "rooms" => 4, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 2, "tents" => 0, "set" => "S3", "chosen" => "N");
			// load angry neighbors tiles
			$collection[] = array("code" => "10R", "ocode" => "10V", "top" => "SBS", "right" => "SSS", "bottom" => "SBS", "left" => "SSS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 1, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "AN", "chosen" => "N");
			$collection[] = array("code" => "10V", "ocode" => "10R", "top" => "SBS", "right" => "SBB", "bottom" => "BBB", "left" => "BBS", "rooms" => 6, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 1, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "AN", "chosen" => "N");
			$collection[] = array("code" => "11R", "ocode" => "11V", "top" => "SBS", "right" => "SSS", "bottom" => "SSS", "left" => "SSS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "AN", "chosen" => "N");
			$collection[] = array("code" => "11V", "ocode" => "11R", "top" => "SBS", "right" => "SSS", "bottom" => "SSS", "left" => "SBS", "rooms" => 3, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 0, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "AN", "chosen" => "N");	
			$collection[] = array("code" => "12R", "ocode" => "12V", "top" => "SBS", "right" => "SBS", "bottom" => "SSS", "left" => "SSS", "rooms" => 2, "manhole" => 1, "scorridor" => 0, "heliport" => 0, "hole" => 1, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "AN", "chosen" => "N");
			$collection[] = array("code" => "12V", "ocode" => "12R", "top" => "BBB", "right" => "BBB", "bottom" => "BBS", "left" => "SBB", "rooms" => 3, "manhole" => 0, "scorridor" => 0, "heliport" => 0, "hole" => 1, "cell" => 0, "bed" => 0, "tents" => 0, "set" => "AN", "chosen" => "N");
		}
	}
	
	//load_collection();
	
	//foreach($collection as $value){ 
	//	 echo "<p>" . $value['code'] . " " . $value['set'] . "</p>";
	//}
?>