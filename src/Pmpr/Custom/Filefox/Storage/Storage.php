<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65195dbf28615             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Storage; use Exception; use Pmpr\Custom\Filefox\Container; use Pmpr\Custom\Filefox\Setting; use Pmpr\Custom\Filefox\Storage\Engine\Engine; use Pmpr\Custom\Filefox\Storage\Engine\Dropbox; use Pmpr\Custom\Filefox\Storage\Model\Account; use Pmpr\Custom\Filefox\Storage\Model\Model; use Pmpr\Custom\Filefox\Storage\Model\Replica; class Storage extends Container { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\x64\x5f\141\164\164\141\x63\x68\155\145\x6e\x74", [$this, "\143\151\163\163\153\155\x71\x61\x77\163\x69\163\x65\163\x71\x77"])->qcsmikeggeemccuu("\144\x65\x6c\145\164\x65\x5f\x61\x74\x74\x61\x63\150\x6d\x65\x6e\x74", [$this, "\171\161\x6d\157\x65\161\153\141\x71\x6d\x65\147\x77\167\x71\x63"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\147\x65\164\x5f\x72\x65\160\154\x69\143\x61\x5f\x6c\151\156\153", [$this, "\x73\x79\171\167\x63\x79\167\x75\x71\167\165\147\x6b\145\163\x6d"], 10, 2)->aqaqisyssqeomwom("\147\x65\164\137\x61\x63\x63\157\x75\x6e\x74\x5f\144\157\167\156\x6c\157\141\144\x5f\x6c\151\156\x6b\x5f\x74\145\170\164", [$this, "\x7a\147\x65\161\x77\167\171\x77\163\x6f\167\x71\165\x6b\x63\151"], 10, 2); } public function iemaakgqgqosiecm() { Model::symcgieuakksimmu(); } public function zgeqwwywsowqukci($cmwygeyygwqaemaq, $aeiwmoeicwaiwmwu) : string { $cmwygeyygwqaemaq = ''; if (!($aeiwmoeicwaiwmwu && (is_array($aeiwmoeicwaiwmwu) || is_object($aeiwmoeicwaiwmwu)))) { goto kecwuwwcwokuksyq; } $qmeagsomwsiaeugs = Replica::symcgieuakksimmu(); $mekgeyuqyeggqiqq = $qmeagsomwsiaeugs->keeuqgyooycqoygw($aeiwmoeicwaiwmwu); if ($mekgeyuqyeggqiqq > 0) { goto mswsoaimesegiiic; } $cmwygeyygwqaemaq = __("\x44\x6f\x77\x6e\x6c\157\x61\144\x20\x61\164\x20\x6c\157\167\40\163\x70\145\x65\144", PR__CST__FILEFOX); goto egasokooagakisiy; mswsoaimesegiiic: $eiwicgsqoiaeawkk = $qmeagsomwsiaeugs->iscemaoqqckmkago(self::msaosoagkukqsiue, $aeiwmoeicwaiwmwu); $cmwygeyygwqaemaq = (string) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($eiwicgsqoiaeawkk, self::aygocssywaomaqga, __("\x44\157\x77\156\154\157\141\144", PR__CST__FILEFOX)); egasokooagakisiy: kecwuwwcwokuksyq: return $cmwygeyygwqaemaq; } public function syywcywuqwugkesm($iwywmkygwewiamwm, $aeiwmoeicwaiwmwu) { if (!is_numeric($aeiwmoeicwaiwmwu)) { goto qmeoaqmsuseueqiy; } $qmeagsomwsiaeugs = Replica::symcgieuakksimmu(); $aeiwmoeicwaiwmwu = (array) $qmeagsomwsiaeugs->akkkoiiymmamsauc($aeiwmoeicwaiwmwu); if (!isset($aeiwmoeicwaiwmwu[self::gouqcwikiiygyasc], $aeiwmoeicwaiwmwu[self::cqycgsyykemiygou])) { goto ickcmqoiosquugwe; } $kgauuisuyiawsqoi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aeiwmoeicwaiwmwu, self::ogigqueukwysusii); $iueqawqgamaswqgo = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aeiwmoeicwaiwmwu, self::oqaigmmwsmaqmoiw); if (!$kgauuisuyiawsqoi || !$iueqawqgamaswqgo || $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->wguceomqgwouoyks(date("\x59\55\155\55\144\x20\110\x3a\151", strtotime($iueqawqgamaswqgo) + MINUTE_IN_SECONDS))) { goto goeoymmqqqeeoime; } $iwywmkygwewiamwm = $kgauuisuyiawsqoi; goto eiawsoasmscmqswa; goeoymmqqqeeoime: if (!($goqqimcssiyagkwy = $this->skcaayuyuugiwoco($qmeagsomwsiaeugs->iscemaoqqckmkago(self::msaosoagkukqsiue, $aeiwmoeicwaiwmwu)))) { goto qmiwsequckckoaei; } $kgauuisuyiawsqoi = $goqqimcssiyagkwy->aaaycaqymuikesme($aeiwmoeicwaiwmwu[self::cqycgsyykemiygou]); if (!$kgauuisuyiawsqoi) { goto qgegkeomwscwwiuw; } $iwywmkygwewiamwm = $kgauuisuyiawsqoi; $aeiwmoeicwaiwmwu[self::ogigqueukwysusii] = $kgauuisuyiawsqoi; $aeiwmoeicwaiwmwu[self::oqaigmmwsmaqmoiw] = date("\131\55\x6d\55\x64\x20\110\x3a\x69\x3a\163", time() + (HOUR_IN_SECONDS * 4 - 10)); $qmeagsomwsiaeugs->gscuuyuyauokoyuo($aeiwmoeicwaiwmwu, true); qgegkeomwscwwiuw: qmiwsequckckoaei: eiawsoasmscmqswa: ickcmqoiosquugwe: qmeoaqmsuseueqiy: return $iwywmkygwewiamwm; } public function cisskmqawsisesqw($cwgqkcumeaswoscu) { if (!$this->qaquiwmmicuimewa($cwgqkcumeaswoscu)) { goto cgewcsueoyaeikgm; } $ueekmuimuqwyoowy = $this->eeoawiosaioiwasw(); foreach ($ueekmuimuqwyoowy as $goqqimcssiyagkwy) { try { $occymigcemkqucuw = $goqqimcssiyagkwy->cgwsoaeeaomscacg($cwgqkcumeaswoscu); Replica::symcgieuakksimmu()->gscuuyuyauokoyuo([self::ciywsqoeiymemsys => $occymigcemkqucuw ? self::gymusgeumuwomwuy : self::uasuowkaguiwoouw, self::cqycgsyykemiygou => $cwgqkcumeaswoscu, self::msaosoagkukqsiue => $goqqimcssiyagkwy->gmooemokieoeokag(self::gouqcwikiiygyasc)], true); } catch (Exception $wgaoewqkwgomoaai) { $mmeioagwmyscwumo = 1; } cuoqqgaygogsmmic: } ygkcacsyyckescqs: cgewcsueoyaeikgm: } public function yqmoeqkaqmegwwqc($cwgqkcumeaswoscu) { if (!$this->qaquiwmmicuimewa($cwgqkcumeaswoscu)) { goto twkmiuomimomscew; } $ueekmuimuqwyoowy = $this->eeoawiosaioiwasw([self::eqewsqmqmsiocaeg, self::eiwauyokukqyueis, self::cemyyceucooociss]); foreach ($ueekmuimuqwyoowy as $goqqimcssiyagkwy) { try { if (!$goqqimcssiyagkwy->uagqwamoeaygcmmc($cwgqkcumeaswoscu)) { goto eyiamcekkgkiawqy; } $qmeagsomwsiaeugs = Replica::symcgieuakksimmu(); $mksyucucyswaukig = $qmeagsomwsiaeugs->oqomcmyuuakigusk([self::cqycgsyykemiygou => $cwgqkcumeaswoscu, self::msaosoagkukqsiue => $goqqimcssiyagkwy->gmooemokieoeokag(self::gouqcwikiiygyasc)]); if (!($aokagokqyuysuksm = $qmeagsomwsiaeugs->keeuqgyooycqoygw($mksyucucyswaukig))) { goto mqccmesakuemceqi; } $qmeagsomwsiaeugs->sgcuwcowgwimgsgk($aokagokqyuysuksm); mqccmesakuemceqi: eyiamcekkgkiawqy: } catch (Exception $wgaoewqkwgomoaai) { $mmeioagwmyscwumo = 1; } igymseewwyiocoug: } sukskmcwsoysiuqu: twkmiuomimomscew: } public function qaquiwmmicuimewa($cwgqkcumeaswoscu) : bool { $cqiuiecmyyqkgeoa = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ikocqgeqiykwwyqs($cwgqkcumeaswoscu); $moommoeyqsccsiay = (array) $this->weysguygiseoukqw(Setting::omgsyegqyicmqaio, []); return $cqiuiecmyyqkgeoa && $moommoeyqsccsiay && in_array($cqiuiecmyyqkgeoa, $moommoeyqsccsiay); } public function eeoawiosaioiwasw($iueymcwwscwqkiyq = self::eqewsqmqmsiocaeg) : array { $ueekmuimuqwyoowy = []; $jwsqucqyaoaasykk = Account::symcgieuakksimmu(); $ygikoqaokckisawo = $jwsqucqyaoaasykk->cwkywyqksyucoyia([self::ciywsqoeiymemsys => $iueymcwwscwqkiyq]); if (!$ygikoqaokckisawo) { goto yssscwioiyygssec; } foreach ($ygikoqaokckisawo as $eiwicgsqoiaeawkk) { if (!($goqqimcssiyagkwy = $this->skcaayuyuugiwoco($eiwicgsqoiaeawkk))) { goto qcessicwuikwqsis; } $ueekmuimuqwyoowy[] = $goqqimcssiyagkwy; qcessicwuikwqsis: qwcegcuowwgiccos: } kooskuwkuayiuose: yssscwioiyygssec: return $ueekmuimuqwyoowy; } public function skcaayuyuugiwoco($eiwicgsqoiaeawkk) : ?Engine { $goqqimcssiyagkwy = null; $jwsqucqyaoaasykk = Account::symcgieuakksimmu(); switch ($jwsqucqyaoaasykk->ogegcqqcukiaqscy(self::mekcgmewamwqgsok, $eiwicgsqoiaeawkk)) { case self::aqssgwgkyaeaymmo: $goqqimcssiyagkwy = Dropbox::ocmycskcuiawkecq($jwsqucqyaoaasykk->keeuqgyooycqoygw($eiwicgsqoiaeawkk), (array) $eiwicgsqoiaeawkk); goto ieumumsgyguceusy; } coywmiyqgsweuiic: ieumumsgyguceusy: return $goqqimcssiyagkwy; } }
