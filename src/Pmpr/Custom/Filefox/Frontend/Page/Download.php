<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64c137b917016             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Frontend\Page; use Pmpr\Custom\Filefox\Frontend\Ajax; use Pmpr\Custom\Filefox\Setting; use Pmpr\Custom\Filefox\Storage\Model\Replica; use Pmpr\Custom\Filefox\Traits\CommonTrait; use WC_Download_Handler; class Download extends Common { use CommonTrait; public function __construct() { $this->slug = self::kucuwimmakgiieom; $this->crawlable = false; $this->isPrivate = false; $this->disableCache = true; $this->hasBreadcrumb = false; parent::__construct(); } public function gogaagekwoisaqgu() { $this->title = __("\x44\157\x77\x6e\154\x6f\x61\144", PR__CST__FILEFOX); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\164\x65\x6d\x70\x6c\x61\164\x65\137\162\145\x64\x69\x72\x65\143\x74", [$this, "\x63\145\x69\x75\163\151\143\163\x61\x77\167\x61\x61\x61\155\x71"])->qcsmikeggeemccuu("\156\157\156\x63\x65\137\x6c\x69\146\x65", [$this, "\x67\x79\145\145\141\147\163\x67\x6d\171\x65\x65\151\x6d\161\x71"], 10, 2); if (!isset($_GET[self::kucuwimmakgiieom], $_GET[self::mwkumwoeyuaukcms], $_GET[self::wygwikaqsmcmosas])) { goto omqiayeucoioqoao; } $this->qcsmikeggeemccuu("\x69\x6e\x69\x74", [$this, "\x71\151\161\x71\x67\x77\x6d\143\161\x65\161\171\157\x71\x73\167"]); omqiayeucoioqoao: parent::wigskegsqequoeks(); } public function gyeeagsgmyeeimqq($iwwoeyqsyeiikuyk, $aiamqeawckcsuaou) { if (!(self::wygwikaqsmcmosas === $aiamqeawckcsuaou)) { goto ugqaaewwmkocwwgy; } $iwwoeyqsyeiikuyk = MINUTE_IN_SECONDS; ugqaaewwmkocwwgy: return $iwwoeyqsyeiikuyk; } public function qiqqgwmcqeqyoqsw() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if (!$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($eiicaiwgqkgsekce->yyqgamuwwakgciey(self::wygwikaqsmcmosas), self::cgmyyekauckqmwyg)) { goto wakmayaoqoskekqy; } $umkkkaqkwugkemce = $eiicaiwgqkgsekce->yyqgamuwwakgciey(self::woicooamkeqiaemo, 0); $aiooqyausygaasqm = $eiicaiwgqkgsekce->yyqgamuwwakgciey(self::kucuwimmakgiieom); if (!($aiooqyausygaasqm && $umkkkaqkwugkemce)) { goto ueigkucgaucgeimc; } $aeiwmoeicwaiwmwu = $eiicaiwgqkgsekce->yyqgamuwwakgciey(self::mwkumwoeyuaukcms, 0); if (!($aeiwmoeicwaiwmwu > 0)) { goto kqgcyoscsusgoaqi; } $iwywmkygwewiamwm = $this->ocksiywmkyaqseou("\147\145\164\x5f\162\x65\x70\154\x69\143\141\137\x6c\x69\156\153", '', $aeiwmoeicwaiwmwu); if (!$iwywmkygwewiamwm) { goto wgewmqieuamsoayy; } exit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom($iwywmkygwewiamwm)); wgewmqieuamsoayy: kqgcyoscsusgoaqi: $esaqeawoigqgagum = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ckoygqywcuqasqea($aiooqyausygaasqm); WC_Download_Handler::download($esaqeawoigqgagum, $umkkkaqkwugkemce); ueigkucgaucgeimc: $ykquycoiqesuckco = Setting::symcgieuakksimmu(); switch ($ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::escgemeiskgmcwim, self::yquayuasseumiiii)) { case self::eoskkkieowogacws: $uamcoiueqaamsqma = $ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::uimoysyiwqyoegui); $this->caokeucsksukesyo()->giiecckwoyiawoyy()->die($uamcoiueqaamsqma); goto sggawugoykqcmsug; default: case self::yquayuasseumiiii: $this->gwqgmkqcgwwmweom(); goto sggawugoykqcmsug; } wkeuuycukmuqiaom: sggawugoykqcmsug: wakmayaoqoskekqy: } public function enqueue() { $gaumukogkkgkiiuo = $this->miocmcoykayoyyau(); $gcegymooyemmaysk = 0; $ykquycoiqesuckco = Setting::symcgieuakksimmu(); if (!$ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::akoqkkisyueccwcu)) { goto qmuwoecuacmkwgem; } $gcegymooyemmaysk = (int) $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::euioekgyyaegcoqa, 0); qmuwoecuacmkwgem: $gaumukogkkgkiiuo->oeoquuwkoywiuesy($gaumukogkkgkiiuo->owygwqwawqoiusis("\x64\x6f\167\156\x6c\x6f\141\x64", $gaumukogkkgkiiuo->get("\144\157\167\156\x6c\157\x61\144\56\x6a\x73"))->simswskycwagoeqy())->iagmuqogkyysiick(["\x77\x61\x69\x74" => $gcegymooyemmaysk, "\141\152\x61\x78" => ["\x67\x65\164\x5f\165\162\154" => Ajax::gumsmyccuyyqsmoc, "\147\145\x74\137\x64\x6f\x77\156\154\x6f\141\x64\x5f\154\151\x6e\x6b\x73" => Ajax::kikskooimuqywswe], self::eoskkkieowogacws => ["\x66\x69\x6c\145\x5f\156\x6f\164\x5f\146\157\165\x6e\x64" => __("\106\x69\154\x65\40\160\x61\162\x61\155\x65\164\x65\162\40\x6d\151\163\163\151\x6e\x67\56", PR__CST__FILEFOX)]]); } public function ceiusicsawwaaamq() { if (!($this->sgeaogakoscmysgc() && $this->ukasiaicaycyecou())) { goto mwsmsguqqkcwiiuk; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); if (!(self::yquayuasseumiiii === $ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::escgemeiskgmcwim, self::yquayuasseumiiii))) { goto owmuceyswmgueasi; } $this->gwqgmkqcgwwmweom(); owmuceyswmgueasi: mwsmsguqqkcwiiuk: } public function gwqgmkqcgwwmweom() { $gwqgmkqcgwwmweom = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::okawgmqeyoeeugeo); if (!(!$gwqgmkqcgwwmweom || !$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc($gwqgmkqcgwwmweom))) { goto eeauyscekuckoues; } $gwqgmkqcgwwmweom = $this->caokeucsksukesyo()->kyqakacqeumicgag()->umeecawcsseswoec(); eeauyscekuckoues: if (!($migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($gwqgmkqcgwwmweom))) { goto eogwckcymuugikuy; } $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->cquikcuwossiessu($migiiksoiymissge); exit; eogwckcymuugikuy: } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = []; if ($this->ukasiaicaycyecou()) { goto wagqgeqymeqoeuyi; } $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $qogsmwakwacwqogk = $eiicaiwgqkgsekce->gkwaaeusmsaywikg(self::kekgqaemqessuwmq); if (!($umkkkaqkwugkemce = $this->imqksoqiawkuqies($qogsmwakwacwqogk))) { goto msemumccgceyugmg; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $qookweymeqawmcwo = [self::qescuiwgsyuikume => $seumokooiykcomco->qcgakseyaikigqco($umkkkaqkwugkemce), "\167\141\151\164\x5f\145\x6e\x61\x62\154\x65\x64" => $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::akoqkkisyueccwcu), "\167\x61\x69\x74\x5f\155\145\163\163\141\147\145" => $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::gemeksocqsmskcyg), "\163\x74\141\162\x74\137\x62\165\164\x74\x6f\x6e" => $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::qemieaasiccekaui, __("\x53\x74\141\x72\x74\40\x44\157\x77\x6e\x6c\157\141\x64", PR__CST__FILEFOX)), "\x73\x74\x61\x72\164\x5f\155\x65\x73\x73\x61\x67\145" => $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::uikuwskagqmcqacm), "\x64\157\x77\x6e\x6c\x6f\x61\x64\x5f\x62\165\164\164\x6f\x6e" => $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::qqsmqwwiioemkiie, __("\104\x6f\x77\156\154\x6f\x61\144", PR__CST__FILEFOX)), "\x64\x6f\167\156\154\157\x61\144\x5f\x6d\x65\x73\x73\141\147\145" => $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::ogckyyegowyqgyma)]; msemumccgceyugmg: goto qoqskyuuwueqkquk; wagqgeqymeqoeuyi: $mmeioagwmyscwumo = 1; qoqskyuuwueqkquk: return $qookweymeqawmcwo; } public function ukasiaicaycyecou() : bool { $iyoakscesymascsc = true; $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if (!($qogsmwakwacwqogk = $eiicaiwgqkgsekce->gkwaaeusmsaywikg(self::kekgqaemqessuwmq))) { goto wcugqegqsuuuwqao; } $umkkkaqkwugkemce = $this->imqksoqiawkuqies($qogsmwakwacwqogk); $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); if (!($umkkkaqkwugkemce && $ekymkycgewkiouqe->muyguqkesakyuyuy($umkkkaqkwugkemce))) { goto iwsuawwqomaowuii; } $iyoakscesymascsc = false; iwsuawwqomaowuii: wcugqegqsuuuwqao: return $iyoakscesymascsc; } }
