<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67977cbb169a2             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Frontend\Page; use Pmpr\Common\Foundation\Frontend\Page; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Frontend\Ajax; use Pmpr\Custom\Filefox\Setting\Setting; use Pmpr\Custom\Filefox\Traits\CommonTrait; use WC_Download_Handler; class Download extends Page { use CommonTrait; public function qiccuiwooiquycsg() { $this->wegcaymyqqoyewmw(Constants::kucuwimmakgiieom)->oakemcgacwakmawm()->ekgmmugauoasqwyc()->gswweykyogmsyawy(__("\104\x6f\167\x6e\154\157\141\144", PR__CST__FILEFOX))->wmsaakuicamguoam($this->weysguygiseoukqw(Setting::swaueacqeaiooqgc)); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x74\x65\x6d\160\154\x61\164\145\137\x72\145\x64\x69\x72\x65\x63\164", [$this, "\143\x65\x69\x75\x73\151\143\163\x61\167\x77\141\x61\141\155\161"])->qcsmikeggeemccuu("\x6e\x6f\x6e\143\x65\137\x6c\151\x66\145", [$this, "\147\x79\145\145\x61\x67\x73\147\x6d\x79\x65\x65\151\155\x71\x71"], 10, 2); if (isset($_GET[Constants::kucuwimmakgiieom], $_GET[Constants::mwkumwoeyuaukcms], $_GET[Constants::wygwikaqsmcmosas])) { $this->qcsmikeggeemccuu("\x69\156\151\x74", [$this, "\161\151\161\x71\147\x77\x6d\143\161\x65\x71\171\157\161\x73\167"]); } parent::wigskegsqequoeks(); } public function ceiusicsawwaaamq() { if ($this->sgeaogakoscmysgc() && $this->ukasiaicaycyecou() && Constants::yquayuasseumiiii === $this->weysguygiseoukqw(Setting::escgemeiskgmcwim, Constants::yquayuasseumiiii)) { $this->gwqgmkqcgwwmweom(); } } public function gwqgmkqcgwwmweom() { $gwqgmkqcgwwmweom = $this->weysguygiseoukqw(Setting::okawgmqeyoeeugeo); if (!$gwqgmkqcgwwmweom || !$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc($gwqgmkqcgwwmweom)) { $gwqgmkqcgwwmweom = $this->caokeucsksukesyo()->kyqakacqeumicgag()->umeecawcsseswoec(); } if ($migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($gwqgmkqcgwwmweom)) { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->cquikcuwossiessu($migiiksoiymissge); exit; } } public function qiqqgwmcqeqyoqsw() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::wygwikaqsmcmosas), Constants::cgmyyekauckqmwyg)) { $umkkkaqkwugkemce = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::woicooamkeqiaemo, 0); $aiooqyausygaasqm = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::kucuwimmakgiieom); if ($aiooqyausygaasqm && $umkkkaqkwugkemce) { $aeiwmoeicwaiwmwu = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::mwkumwoeyuaukcms, 0); if ($aeiwmoeicwaiwmwu > 0) { $iwywmkygwewiamwm = $this->ocksiywmkyaqseou("\147\145\x74\137\162\145\160\x6c\151\x63\141\137\x6c\151\156\x6b", '', $aeiwmoeicwaiwmwu); if ($iwywmkygwewiamwm) { exit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom($iwywmkygwewiamwm)); } } $esaqeawoigqgagum = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ckoygqywcuqasqea($aiooqyausygaasqm); WC_Download_Handler::download($esaqeawoigqgagum, $umkkkaqkwugkemce); } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); switch ($ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::escgemeiskgmcwim, Constants::yquayuasseumiiii)) { case Constants::eoskkkieowogacws: $uamcoiueqaamsqma = $ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::uimoysyiwqyoegui); $this->caokeucsksukesyo()->giiecckwoyiawoyy()->die($uamcoiueqaamsqma); break; default: case Constants::yquayuasseumiiii: $this->gwqgmkqcgwwmweom(); break; } } } public function gyeeagsgmyeeimqq($iwwoeyqsyeiikuyk, $aiamqeawckcsuaou) { if (Constants::wygwikaqsmcmosas === $aiamqeawckcsuaou) { $iwwoeyqsyeiikuyk = MINUTE_IN_SECONDS; } return $iwwoeyqsyeiikuyk; } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->oaaywquaycsmykuc(); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, "\144\157\167\x6e\x6c\x6f\x61\144", "\144\157\x77\x6e\154\157\141\x64\x2e\x6a\163")->simswskycwagoeqy())->qgkgieacuwasgiuy($this, [Constants::wyucqaeuuqkesque => ["\147\145\164\x5f\x75\x72\154" => Ajax::gumsmyccuyyqsmoc, "\147\145\164\137\144\x6f\167\x6e\154\157\141\144\137\x6c\151\x6e\x6b\x73" => Ajax::kikskooimuqywswe], Constants::eoskkkieowogacws => ["\146\x69\154\145\137\x6e\x6f\164\x5f\146\x6f\x75\156\144" => __("\106\151\x6c\145\x20\160\141\162\x61\155\145\x74\145\162\x20\x6d\x69\163\163\x69\x6e\x67\x2e", PR__CST__FILEFOX)]]); } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = []; if ($this->ukasiaicaycyecou()) { $mmeioagwmyscwumo = 1; } else { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $qogsmwakwacwqogk = $eiicaiwgqkgsekce->gkwaaeusmsaywikg(Constants::kekgqaemqessuwmq); if ($umkkkaqkwugkemce = $this->imqksoqiawkuqies($qogsmwakwacwqogk)) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $owmuuoycwiskaeme = 0; if ($this->weysguygiseoukqw(Setting::akoqkkisyueccwcu)) { $owmuuoycwiskaeme = (int) $this->weysguygiseoukqw(Setting::euioekgyyaegcoqa, 0); } $uqiiskyaukiiasik = $this->caokeucsksukesyo()->kugiyqykwaskawsc()->sggkkiiqkekaomig([Constants::uissasisiuymwsmu => $this->weysguygiseoukqw(Setting::gemeksocqsmskcyg), Constants::yeowwkiiyimoykye => [Constants::eqewsqmqmsiocaeg => true, Constants::DURATION => $owmuuoycwiskaeme, "\x73\150\x6f\167\x50\145\162\143\x65\x6e\164\141\x67\x65" => true]]); $qookweymeqawmcwo = ["\x70\162\157\147\x72\145\x73\163\142\x61\162" => $uqiiskyaukiiasik, "\x77\141\151\x74\x5f\145\x6e\141\142\154\x65\x64" => $this->weysguygiseoukqw(Setting::akoqkkisyueccwcu), "\163\x74\x61\x72\x74\x5f\142\165\x74\164\x6f\156" => $this->weysguygiseoukqw(Setting::qemieaasiccekaui, __("\x53\x74\141\x72\x74\x20\104\x6f\x77\x6e\154\157\x61\144", PR__CST__FILEFOX)), "\x73\x74\x61\162\164\137\155\x65\163\x73\141\x67\145" => $this->weysguygiseoukqw(Setting::uikuwskagqmcqacm), "\144\x6f\167\x6e\x6c\157\x61\x64\x5f\x62\165\x74\164\x6f\156" => $this->weysguygiseoukqw(Setting::qqsmqwwiioemkiie, __("\x44\157\x77\156\154\x6f\141\144", PR__CST__FILEFOX)), "\x64\x6f\167\156\x6c\157\141\x64\137\155\145\x73\163\x61\147\145" => $this->weysguygiseoukqw(Setting::ogckyyegowyqgyma), Constants::qescuiwgsyuikume => $seumokooiykcomco->qcgakseyaikigqco($umkkkaqkwugkemce)]; } } return $qookweymeqawmcwo; } public function ukasiaicaycyecou() : bool { $iyoakscesymascsc = true; $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($qogsmwakwacwqogk = $eiicaiwgqkgsekce->gkwaaeusmsaywikg(Constants::kekgqaemqessuwmq)) { $umkkkaqkwugkemce = $this->imqksoqiawkuqies($qogsmwakwacwqogk); if ($umkkkaqkwugkemce && $this->caokeucsksukesyo()->aqasygcsqysmmyke()->sywcyoouayqkqisk($umkkkaqkwugkemce)) { $iyoakscesymascsc = false; } } return $iyoakscesymascsc; } }
