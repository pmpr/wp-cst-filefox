<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65ae45d7e16a5             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Storage; use Exception; use Pmpr\Custom\Filefox\Container; use Pmpr\Custom\Filefox\Setting; use Pmpr\Custom\Filefox\Storage\Engine\Engine; use Pmpr\Custom\Filefox\Storage\Engine\Dropbox; use Pmpr\Custom\Filefox\Storage\Model\Account; use Pmpr\Custom\Filefox\Storage\Model\Model; use Pmpr\Custom\Filefox\Storage\Model\Replica; class Storage extends Container { public function mameiwsayuyquoeq() { Model::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\x64\x5f\x61\x74\164\x61\143\150\155\145\x6e\x74", [$this, "\x63\151\163\163\153\155\x71\141\167\x73\x69\x73\x65\163\x71\x77"])->qcsmikeggeemccuu("\144\145\x6c\x65\164\145\137\x61\164\164\141\143\150\x6d\145\156\164", [$this, "\171\161\155\157\145\161\x6b\x61\x71\x6d\145\147\x77\167\161\x63"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\147\145\x74\x5f\x72\145\160\x6c\x69\x63\x61\137\154\x69\156\x6b", [$this, "\x73\x79\171\x77\x63\171\x77\165\161\x77\x75\x67\x6b\x65\163\x6d"], 10, 2)->aqaqisyssqeomwom("\147\x65\164\x5f\141\x63\x63\157\165\x6e\x74\x5f\x64\x6f\x77\x6e\x6c\x6f\x61\x64\137\154\151\156\153\137\x74\x65\170\164", [$this, "\172\147\x65\x71\x77\167\171\167\x73\x6f\x77\161\x75\153\143\x69"], 10, 2); } public function zgeqwwywsowqukci($cmwygeyygwqaemaq, $aeiwmoeicwaiwmwu) : string { $cmwygeyygwqaemaq = ''; if (!($aeiwmoeicwaiwmwu && (is_array($aeiwmoeicwaiwmwu) || is_object($aeiwmoeicwaiwmwu)))) { goto mqicocmqegwukkwg; } $qmeagsomwsiaeugs = Replica::symcgieuakksimmu(); $mekgeyuqyeggqiqq = $qmeagsomwsiaeugs->keeuqgyooycqoygw($aeiwmoeicwaiwmwu); if ($mekgeyuqyeggqiqq > 0) { goto asiqwuoswmigcaki; } $cmwygeyygwqaemaq = __("\104\157\x77\x6e\154\157\141\144\40\141\164\x20\x6c\x6f\167\x20\x73\160\x65\x65\x64", PR__CST__FILEFOX); goto ciykoyeioqgyaeqo; asiqwuoswmigcaki: $eiwicgsqoiaeawkk = $qmeagsomwsiaeugs->iscemaoqqckmkago(self::msaosoagkukqsiue, $aeiwmoeicwaiwmwu); $cmwygeyygwqaemaq = (string) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($eiwicgsqoiaeawkk, self::aygocssywaomaqga, __("\104\x6f\x77\156\x6c\157\x61\x64", PR__CST__FILEFOX)); ciykoyeioqgyaeqo: mqicocmqegwukkwg: return $cmwygeyygwqaemaq; } public function syywcywuqwugkesm($iwywmkygwewiamwm, $aeiwmoeicwaiwmwu) { if (!is_numeric($aeiwmoeicwaiwmwu)) { goto oomguqikqokqwgku; } $qmeagsomwsiaeugs = Replica::symcgieuakksimmu(); $aeiwmoeicwaiwmwu = (array) $qmeagsomwsiaeugs->akkkoiiymmamsauc($aeiwmoeicwaiwmwu); if (!isset($aeiwmoeicwaiwmwu[self::gouqcwikiiygyasc], $aeiwmoeicwaiwmwu[self::cqycgsyykemiygou])) { goto acsqgiuageaasiyy; } $kgauuisuyiawsqoi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aeiwmoeicwaiwmwu, self::ogigqueukwysusii); $iueqawqgamaswqgo = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aeiwmoeicwaiwmwu, self::oqaigmmwsmaqmoiw); if (!$kgauuisuyiawsqoi || !$iueqawqgamaswqgo || $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->wguceomqgwouoyks(date("\131\55\155\55\144\40\110\72\x69", strtotime($iueqawqgamaswqgo) + MINUTE_IN_SECONDS))) { goto ouamogymawucwswu; } $iwywmkygwewiamwm = $kgauuisuyiawsqoi; goto mugqyyeayeyggqqk; ouamogymawucwswu: if (!($goqqimcssiyagkwy = $this->skcaayuyuugiwoco($qmeagsomwsiaeugs->iscemaoqqckmkago(self::msaosoagkukqsiue, $aeiwmoeicwaiwmwu)))) { goto emmsycooskoqmgeg; } $kgauuisuyiawsqoi = $goqqimcssiyagkwy->aaaycaqymuikesme($aeiwmoeicwaiwmwu[self::cqycgsyykemiygou]); if (!$kgauuisuyiawsqoi) { goto qgeugwymkkiacwoc; } $iwywmkygwewiamwm = $kgauuisuyiawsqoi; $aeiwmoeicwaiwmwu[self::ogigqueukwysusii] = $kgauuisuyiawsqoi; $aeiwmoeicwaiwmwu[self::oqaigmmwsmaqmoiw] = date("\131\x2d\155\x2d\144\40\x48\x3a\151\x3a\x73", time() + (HOUR_IN_SECONDS * 4 - 10)); $qmeagsomwsiaeugs->gscuuyuyauokoyuo($aeiwmoeicwaiwmwu, true); qgeugwymkkiacwoc: emmsycooskoqmgeg: mugqyyeayeyggqqk: acsqgiuageaasiyy: oomguqikqokqwgku: return $iwywmkygwewiamwm; } public function cisskmqawsisesqw($cwgqkcumeaswoscu) { if (!$this->qaquiwmmicuimewa($cwgqkcumeaswoscu)) { goto guykyqecgswcsmws; } $ueekmuimuqwyoowy = $this->eeoawiosaioiwasw(); foreach ($ueekmuimuqwyoowy as $goqqimcssiyagkwy) { try { $occymigcemkqucuw = $goqqimcssiyagkwy->cgwsoaeeaomscacg($cwgqkcumeaswoscu); Replica::symcgieuakksimmu()->gscuuyuyauokoyuo([self::ciywsqoeiymemsys => $occymigcemkqucuw ? self::gymusgeumuwomwuy : self::uasuowkaguiwoouw, self::cqycgsyykemiygou => $cwgqkcumeaswoscu, self::msaosoagkukqsiue => $goqqimcssiyagkwy->gmooemokieoeokag(self::gouqcwikiiygyasc)], true); } catch (Exception $wgaoewqkwgomoaai) { $mmeioagwmyscwumo = 1; } wyuemgggaqogsmsq: } samwkqgwouggsguc: guykyqecgswcsmws: } public function yqmoeqkaqmegwwqc($cwgqkcumeaswoscu) { if (!$this->qaquiwmmicuimewa($cwgqkcumeaswoscu)) { goto ogsaaqsaogcqiouy; } $ueekmuimuqwyoowy = $this->eeoawiosaioiwasw([self::eqewsqmqmsiocaeg, self::eiwauyokukqyueis, self::cemyyceucooociss]); foreach ($ueekmuimuqwyoowy as $goqqimcssiyagkwy) { try { if (!$goqqimcssiyagkwy->uagqwamoeaygcmmc($cwgqkcumeaswoscu)) { goto ousiuuwgwkiyikyq; } $qmeagsomwsiaeugs = Replica::symcgieuakksimmu(); $mksyucucyswaukig = $qmeagsomwsiaeugs->oqomcmyuuakigusk([self::cqycgsyykemiygou => $cwgqkcumeaswoscu, self::msaosoagkukqsiue => $goqqimcssiyagkwy->gmooemokieoeokag(self::gouqcwikiiygyasc)]); if (!($aokagokqyuysuksm = $qmeagsomwsiaeugs->keeuqgyooycqoygw($mksyucucyswaukig))) { goto kqqiegkuqagcqsya; } $qmeagsomwsiaeugs->sgcuwcowgwimgsgk($aokagokqyuysuksm); kqqiegkuqagcqsya: ousiuuwgwkiyikyq: } catch (Exception $wgaoewqkwgomoaai) { $mmeioagwmyscwumo = 1; } miweggwqeiaeweia: } kkumywowcoycymeo: ogsaaqsaogcqiouy: } public function qaquiwmmicuimewa($cwgqkcumeaswoscu) : bool { $cqiuiecmyyqkgeoa = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ikocqgeqiykwwyqs($cwgqkcumeaswoscu); $moommoeyqsccsiay = (array) $this->weysguygiseoukqw(Setting::omgsyegqyicmqaio, []); return $cqiuiecmyyqkgeoa && $moommoeyqsccsiay && in_array($cqiuiecmyyqkgeoa, $moommoeyqsccsiay); } public function eeoawiosaioiwasw($iueymcwwscwqkiyq = self::eqewsqmqmsiocaeg) : array { $ueekmuimuqwyoowy = []; $jwsqucqyaoaasykk = Account::symcgieuakksimmu(); $ygikoqaokckisawo = $jwsqucqyaoaasykk->cwkywyqksyucoyia([self::ciywsqoeiymemsys => $iueymcwwscwqkiyq]); if (!$ygikoqaokckisawo) { goto cwwmimggaaecmucw; } foreach ($ygikoqaokckisawo as $eiwicgsqoiaeawkk) { if (!($goqqimcssiyagkwy = $this->skcaayuyuugiwoco($eiwicgsqoiaeawkk))) { goto aomysykcgikegiau; } $ueekmuimuqwyoowy[] = $goqqimcssiyagkwy; aomysykcgikegiau: ikqqskkqqwmwssoo: } iwekmyyccgiyuecc: cwwmimggaaecmucw: return $ueekmuimuqwyoowy; } public function skcaayuyuugiwoco($eiwicgsqoiaeawkk) : ?Engine { $goqqimcssiyagkwy = null; $jwsqucqyaoaasykk = Account::symcgieuakksimmu(); switch ($jwsqucqyaoaasykk->ogegcqqcukiaqscy(self::mekcgmewamwqgsok, $eiwicgsqoiaeawkk)) { case self::aqssgwgkyaeaymmo: $goqqimcssiyagkwy = Dropbox::ocmycskcuiawkecq($jwsqucqyaoaasykk->keeuqgyooycqoygw($eiwicgsqoiaeawkk), (array) $eiwicgsqoiaeawkk); goto awoaooyoeoyeeqee; } ogqmesokykywseys: awoaooyoeoyeeqee: return $goqqimcssiyagkwy; } }
