<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6793da2a64aaa             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Storage; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Container; use Pmpr\Custom\Filefox\Setting\Setting; use Pmpr\Custom\Filefox\Storage\Engine\Dropbox; use Pmpr\Custom\Filefox\Storage\Engine\Engine; use Pmpr\Custom\Filefox\Storage\Model\Account; use Pmpr\Custom\Filefox\Storage\Model\Replica; class Storage extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\x64\137\141\164\164\141\x63\x68\155\145\x6e\164", [$this, "\143\x69\x73\163\x6b\155\161\141\x77\163\151\163\145\163\x71\167"])->qcsmikeggeemccuu("\x64\x65\x6c\x65\x74\145\x5f\141\164\x74\141\143\150\155\x65\x6e\x74", [$this, "\171\x71\x6d\x6f\145\x71\153\x61\161\x6d\145\147\x77\x77\x71\x63"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\147\x65\164\x5f\x72\x65\x70\x6c\151\143\x61\137\154\x69\156\x6b", [$this, "\163\x79\171\x77\143\171\167\x75\x71\167\165\147\153\x65\163\155"], 10, 2)->aqaqisyssqeomwom("\x67\145\164\137\141\143\143\157\x75\156\164\137\144\x6f\167\x6e\x6c\157\x61\144\137\x6c\151\156\153\x5f\164\145\x78\164", [$this, "\172\147\145\161\x77\x77\x79\x77\x73\157\x77\x71\165\x6b\x63\151"], 10, 2); } public function mameiwsayuyquoeq() { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Replica::symcgieuakksimmu(); Account::symcgieuakksimmu(); } } public function zgeqwwywsowqukci($cmwygeyygwqaemaq, $aeiwmoeicwaiwmwu) : string { if ($aeiwmoeicwaiwmwu && (is_array($aeiwmoeicwaiwmwu) || is_object($aeiwmoeicwaiwmwu))) { $qmeagsomwsiaeugs = Replica::symcgieuakksimmu(); $mekgeyuqyeggqiqq = $qmeagsomwsiaeugs->mwyqswsaeeewsosm($aeiwmoeicwaiwmwu); if ($mekgeyuqyeggqiqq > 0) { $eiwicgsqoiaeawkk = $qmeagsomwsiaeugs->iekyeyicoyyawomk()->iscemaoqqckmkago(Constants::msaosoagkukqsiue, $aeiwmoeicwaiwmwu); $cmwygeyygwqaemaq = (string) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($eiwicgsqoiaeawkk, Constants::aygocssywaomaqga, __("\x44\x6f\167\x6e\x6c\x6f\x61\x64", PR__CST__FILEFOX)); } else { $cmwygeyygwqaemaq = __("\104\x6f\167\156\154\x6f\141\x64\40\x61\x74\x20\x6c\x6f\x77\x20\x73\160\145\x65\x64", PR__CST__FILEFOX); } } else { $cmwygeyygwqaemaq = ''; } return $cmwygeyygwqaemaq; } public function syywcywuqwugkesm($iwywmkygwewiamwm, $aeiwmoeicwaiwmwu) { if (is_numeric($aeiwmoeicwaiwmwu)) { $qmeagsomwsiaeugs = Replica::symcgieuakksimmu(); $aeiwmoeicwaiwmwu = (array) $qmeagsomwsiaeugs->iekyeyicoyyawomk()->akkkoiiymmamsauc($aeiwmoeicwaiwmwu); if (isset($aeiwmoeicwaiwmwu[Constants::gouqcwikiiygyasc], $aeiwmoeicwaiwmwu[Constants::cqycgsyykemiygou])) { $kgauuisuyiawsqoi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aeiwmoeicwaiwmwu, Constants::ogigqueukwysusii); $iueqawqgamaswqgo = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aeiwmoeicwaiwmwu, Constants::oqaigmmwsmaqmoiw); if (!$kgauuisuyiawsqoi || !$iueqawqgamaswqgo || $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->wguceomqgwouoyks(date("\x59\x2d\x6d\55\x64\40\110\x3a\x69", strtotime($iueqawqgamaswqgo) + MINUTE_IN_SECONDS))) { if ($goqqimcssiyagkwy = $this->skcaayuyuugiwoco($qmeagsomwsiaeugs->iekyeyicoyyawomk()->iscemaoqqckmkago(Constants::msaosoagkukqsiue, $aeiwmoeicwaiwmwu))) { $kgauuisuyiawsqoi = $goqqimcssiyagkwy->aaaycaqymuikesme($aeiwmoeicwaiwmwu[Constants::cqycgsyykemiygou]); if ($kgauuisuyiawsqoi) { $iwywmkygwewiamwm = $kgauuisuyiawsqoi; $aeiwmoeicwaiwmwu[Constants::ogigqueukwysusii] = $kgauuisuyiawsqoi; $aeiwmoeicwaiwmwu[Constants::oqaigmmwsmaqmoiw] = date("\131\55\155\55\x64\x20\110\x3a\x69\x3a\163", time() + (HOUR_IN_SECONDS * 4 - 10)); $qmeagsomwsiaeugs->gssiscqyqsacmeca()->gsegsiocqmsoayii($aeiwmoeicwaiwmwu, true); } } } else { $iwywmkygwewiamwm = $kgauuisuyiawsqoi; } } } return $iwywmkygwewiamwm; } public function cisskmqawsisesqw($cwgqkcumeaswoscu) { if ($this->qaquiwmmicuimewa($cwgqkcumeaswoscu)) { $ueekmuimuqwyoowy = $this->eeoawiosaioiwasw(); foreach ($ueekmuimuqwyoowy as $goqqimcssiyagkwy) { try { $occymigcemkqucuw = $goqqimcssiyagkwy->cgwsoaeeaomscacg($cwgqkcumeaswoscu); Replica::symcgieuakksimmu()->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::ciywsqoeiymemsys => $occymigcemkqucuw ? Constants::gymusgeumuwomwuy : Constants::uasuowkaguiwoouw, Constants::cqycgsyykemiygou => $cwgqkcumeaswoscu, Constants::msaosoagkukqsiue => $goqqimcssiyagkwy->gmooemokieoeokag(Constants::gouqcwikiiygyasc)], true); } catch (Exception $wgaoewqkwgomoaai) { $mmeioagwmyscwumo = 1; } } } } public function yqmoeqkaqmegwwqc($cwgqkcumeaswoscu) { if ($this->qaquiwmmicuimewa($cwgqkcumeaswoscu)) { $ueekmuimuqwyoowy = $this->eeoawiosaioiwasw([Constants::eqewsqmqmsiocaeg, Constants::eiwauyokukqyueis, Constants::cemyyceucooociss]); foreach ($ueekmuimuqwyoowy as $goqqimcssiyagkwy) { try { if ($goqqimcssiyagkwy->uagqwamoeaygcmmc($cwgqkcumeaswoscu)) { $qmeagsomwsiaeugs = Replica::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $mksyucucyswaukig = $qmeagsomwsiaeugs->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::cqycgsyykemiygou, $cwgqkcumeaswoscu), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::msaosoagkukqsiue, $goqqimcssiyagkwy->gmooemokieoeokag(Constants::gouqcwikiiygyasc))]); if ($aokagokqyuysuksm = $qmeagsomwsiaeugs->mwyqswsaeeewsosm($mksyucucyswaukig)) { $qmeagsomwsiaeugs->gssiscqyqsacmeca()->sgcuwcowgwimgsgk($aokagokqyuysuksm); } } } catch (Exception $wgaoewqkwgomoaai) { $mmeioagwmyscwumo = 1; } } } } public function qaquiwmmicuimewa($cwgqkcumeaswoscu) : bool { $cqiuiecmyyqkgeoa = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ikocqgeqiykwwyqs($cwgqkcumeaswoscu); $moommoeyqsccsiay = (array) $this->weysguygiseoukqw(Setting::omgsyegqyicmqaio, []); return $cqiuiecmyyqkgeoa && $moommoeyqsccsiay && in_array($cqiuiecmyyqkgeoa, $moommoeyqsccsiay, true); } public function eeoawiosaioiwasw($iueymcwwscwqkiyq = Constants::eqewsqmqmsiocaeg) : array { $ueekmuimuqwyoowy = []; $ygikoqaokckisawo = Account::symcgieuakksimmu()->iekyeyicoyyawomk()->yassqyiieqeywoqi(Constants::ciywsqoeiymemsys, $iueymcwwscwqkiyq); if ($ygikoqaokckisawo) { foreach ($ygikoqaokckisawo as $eiwicgsqoiaeawkk) { if ($goqqimcssiyagkwy = $this->skcaayuyuugiwoco($eiwicgsqoiaeawkk)) { $ueekmuimuqwyoowy[] = $goqqimcssiyagkwy; } } } return $ueekmuimuqwyoowy; } public function skcaayuyuugiwoco($eiwicgsqoiaeawkk) : ?Engine { $goqqimcssiyagkwy = null; $jwsqucqyaoaasykk = Account::symcgieuakksimmu(); switch ($jwsqucqyaoaasykk->ogegcqqcukiaqscy(Constants::mekcgmewamwqgsok, $eiwicgsqoiaeawkk)) { case Constants::aqssgwgkyaeaymmo: $goqqimcssiyagkwy = Dropbox::ocmycskcuiawkecq($jwsqucqyaoaasykk->mwyqswsaeeewsosm($eiwicgsqoiaeawkk), (array) $eiwicgsqoiaeawkk); break; } return $goqqimcssiyagkwy; } }
