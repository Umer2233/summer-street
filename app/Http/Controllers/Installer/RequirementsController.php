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
 namespace App\Http\Controllers\Installer; use Illuminate\Routing\Controller; use App\Http\Controllers\Installer\Helpers\RequirementsChecker; class RequirementsController extends Controller { protected $requirements; public function __construct(RequirementsChecker $checker) { $this->requirements = $checker; } public function requirements() { $phpSupportInfo = $this->requirements->checkPHPversion(config("\151\x6e\x73\164\x61\x6c\154\145\x72\x2e\143\157\162\x65\x2e\x6d\x69\x6e\120\150\160\126\x65\162\163\151\157\x6e"), config("\151\x6e\x73\x74\141\154\x6c\x65\162\x2e\x63\157\x72\x65\x2e\155\141\170\120\150\160\126\x65\x72\163\x69\157\x6e")); $requirements = $this->requirements->check(config("\x69\156\163\164\x61\154\x6c\145\x72\56\x72\145\x71\x75\x69\162\145\155\x65\x6e\x74\163")); return view("\x69\156\163\x74\141\x6c\x6c\145\162\56\x72\145\x71\x75\151\x72\145\x6d\145\x6e\164\163", compact("\x72\145\161\165\151\x72\145\x6d\145\x6e\164\x73", "\160\150\x70\x53\x75\x70\x70\x6f\x72\x74\x49\x6e\x66\157")); } }
