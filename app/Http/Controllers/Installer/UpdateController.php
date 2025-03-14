<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.1   |
    |              on 2021-11-27 07:54:03              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*
* Copyright (C) Incevio Systems, Inc - All Rights Reserved
* Unauthorized copying of this file, via any medium is strictly prohibited
* Proprietary and confidential
* Written by Munna Khan <help.zcart@gmail.com>, September 2018
*/
 namespace App\Http\Controllers\Installer; use Illuminate\Routing\Controller; use App\Http\Controllers\Installer\Helpers\InstalledFileManager; use App\Http\Controllers\Installer\Helpers\DatabaseManager; class UpdateController extends Controller { use \App\Http\Controllers\Installer\Helpers\MigrationsHelper; public function welcome() { return view("\151\x6e\x73\164\141\154\154\x65\x72\56\x75\x70\144\x61\x74\x65\56\x77\145\154\143\x6f\x6d\145"); } public function overview() { $migrations = $this->getMigrations(); $dbMigrations = $this->getExecutedMigrations(); return view("\x69\x6e\163\x74\x61\154\154\145\x72\56\165\160\144\141\x74\145\56\x6f\x76\x65\162\x76\x69\x65\167", ["\156\x75\155\142\x65\162\117\146\125\160\x64\x61\x74\x65\163\120\x65\x6e\144\x69\x6e\x67" => count($migrations) - count($dbMigrations)]); } public function database() { $databaseManager = new DatabaseManager(); $response = $databaseManager->migrateAndSeed(); return redirect()->route("\114\141\x72\141\x76\x65\154\125\x70\144\x61\164\145\x72\x3a\x3a\146\151\x6e\141\154")->with(["\x6d\x65\163\x73\141\x67\145" => $response]); } public function finish(InstalledFileManager $fileManager) { $fileManager->update(); return view("\x69\x6e\163\164\x61\x6c\x6c\145\x72\x2e\165\160\144\x61\x74\x65\x2e\x66\x69\x6e\x69\163\150\145\x64"); } }
