<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6791523b74ba2             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Storage; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Container; use Pmpr\Custom\Filefox\Setting\Setting; use Pmpr\Custom\Filefox\Storage\Engine\Dropbox; use Pmpr\Custom\Filefox\Storage\Engine\Engine; use Pmpr\Custom\Filefox\Storage\Model\Account; use Pmpr\Custom\Filefox\Storage\Model\Replica; class Storage extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x64\x5f\141\x74\164\x61\x63\150\155\145\156\x74", [$this, "\143\151\163\x73\x6b\x6d\161\141\x77\163\151\163\x65\x73\x71\167"])->qcsmikeggeemccuu("\144\145\154\145\164\145\137\141\x74\164\x61\x63\x68\155\x65\156\x74", [$this, "\171\161\155\x6f\145\x71\153\141\161\155\x65\147\x77\167\161\143"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\x67\x65\x74\x5f\x72\145\160\x6c\x69\143\141\137\154\x69\156\153", [$this, "\163\171\x79\x77\143\x79\167\x75\x71\x77\165\x67\x6b\x65\x73\155"], 10, 2)->aqaqisyssqeomwom("\147\145\x74\137\x61\x63\143\x6f\165\156\164\x5f\144\157\x77\156\x6c\x6f\141\144\137\154\151\x6e\153\137\164\145\x78\x74", [$this, "\x7a\x67\x65\161\167\x77\171\x77\163\x6f\x77\161\165\x6b\x63\x69"], 10, 2); } public function mameiwsayuyquoeq() { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Replica::symcgieuakksimmu(); Account::symcgieuakksimmu(); } } public function zgeqwwywsowqukci($cmwygeyygwqaemaq, $aeiwmoeicwaiwmwu) : string { if ($aeiwmoeicwaiwmwu && (is_array($aeiwmoeicwaiwmwu) || is_object($aeiwmoeicwaiwmwu))) { $qmeagsomwsiaeugs = Replica::symcgieuakksimmu(); $mekgeyuqyeggqiqq = $qmeagsomwsiaeugs->mwyqswsaeeewsosm($aeiwmoeicwaiwmwu); if ($mekgeyuqyeggqiqq > 0) { $eiwicgsqoiaeawkk = $qmeagsomwsiaeugs->iekyeyicoyyawomk()->iscemaoqqckmkago(Constants::msaosoagkukqsiue, $aeiwmoeicwaiwmwu); $cmwygeyygwqaemaq = (string) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($eiwicgsqoiaeawkk, Constants::aygocssywaomaqga, __("\x44\x6f\x77\x6e\x6c\x6f\141\x64", PR__CST__FILEFOX)); } else { $cmwygeyygwqaemaq = __("\x44\157\167\x6e\x6c\x6f\x61\144\x20\141\164\x20\154\x6f\167\40\x73\160\x65\145\144", PR__CST__FILEFOX); } } else { $cmwygeyygwqaemaq = ''; } return $cmwygeyygwqaemaq; } public function syywcywuqwugkesm($iwywmkygwewiamwm, $aeiwmoeicwaiwmwu) { if (is_numeric($aeiwmoeicwaiwmwu)) { $qmeagsomwsiaeugs = Replica::symcgieuakksimmu(); $aeiwmoeicwaiwmwu = (array) $qmeagsomwsiaeugs->iekyeyicoyyawomk()->akkkoiiymmamsauc($aeiwmoeicwaiwmwu); if (isset($aeiwmoeicwaiwmwu[Constants::gouqcwikiiygyasc], $aeiwmoeicwaiwmwu[Constants::cqycgsyykemiygou])) { $kgauuisuyiawsqoi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aeiwmoeicwaiwmwu, Constants::ogigqueukwysusii); $iueqawqgamaswqgo = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aeiwmoeicwaiwmwu, Constants::oqaigmmwsmaqmoiw); if (!$kgauuisuyiawsqoi || !$iueqawqgamaswqgo || $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->wguceomqgwouoyks(date("\x59\55\155\x2d\144\40\x48\72\x69", strtotime($iueqawqgamaswqgo) + MINUTE_IN_SECONDS))) { if ($goqqimcssiyagkwy = $this->skcaayuyuugiwoco($qmeagsomwsiaeugs->iekyeyicoyyawomk()->iscemaoqqckmkago(Constants::msaosoagkukqsiue, $aeiwmoeicwaiwmwu))) { $kgauuisuyiawsqoi = $goqqimcssiyagkwy->aaaycaqymuikesme($aeiwmoeicwaiwmwu[Constants::cqycgsyykemiygou]); if ($kgauuisuyiawsqoi) { $iwywmkygwewiamwm = $kgauuisuyiawsqoi; $aeiwmoeicwaiwmwu[Constants::ogigqueukwysusii] = $kgauuisuyiawsqoi; $aeiwmoeicwaiwmwu[Constants::oqaigmmwsmaqmoiw] = date("\x59\55\155\x2d\144\x20\x48\x3a\x69\x3a\163", time() + (HOUR_IN_SECONDS * 4 - 10)); $qmeagsomwsiaeugs->gssiscqyqsacmeca()->gsegsiocqmsoayii($aeiwmoeicwaiwmwu, true); } } } else { $iwywmkygwewiamwm = $kgauuisuyiawsqoi; } } } return $iwywmkygwewiamwm; } public function cisskmqawsisesqw($cwgqkcumeaswoscu) { if ($this->qaquiwmmicuimewa($cwgqkcumeaswoscu)) { $ueekmuimuqwyoowy = $this->eeoawiosaioiwasw(); foreach ($ueekmuimuqwyoowy as $goqqimcssiyagkwy) { try { $occymigcemkqucuw = $goqqimcssiyagkwy->cgwsoaeeaomscacg($cwgqkcumeaswoscu); Replica::symcgieuakksimmu()->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::ciywsqoeiymemsys => $occymigcemkqucuw ? Constants::gymusgeumuwomwuy : Constants::uasuowkaguiwoouw, Constants::cqycgsyykemiygou => $cwgqkcumeaswoscu, Constants::msaosoagkukqsiue => $goqqimcssiyagkwy->gmooemokieoeokag(Constants::gouqcwikiiygyasc)], true); } catch (Exception $wgaoewqkwgomoaai) { $mmeioagwmyscwumo = 1; } } } } public function yqmoeqkaqmegwwqc($cwgqkcumeaswoscu) { if ($this->qaquiwmmicuimewa($cwgqkcumeaswoscu)) { $ueekmuimuqwyoowy = $this->eeoawiosaioiwasw([Constants::eqewsqmqmsiocaeg, Constants::eiwauyokukqyueis, Constants::cemyyceucooociss]); foreach ($ueekmuimuqwyoowy as $goqqimcssiyagkwy) { try { if ($goqqimcssiyagkwy->uagqwamoeaygcmmc($cwgqkcumeaswoscu)) { $qmeagsomwsiaeugs = Replica::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $mksyucucyswaukig = $qmeagsomwsiaeugs->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::cqycgsyykemiygou, $cwgqkcumeaswoscu), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::msaosoagkukqsiue, $goqqimcssiyagkwy->gmooemokieoeokag(Constants::gouqcwikiiygyasc))]); if ($aokagokqyuysuksm = $qmeagsomwsiaeugs->mwyqswsaeeewsosm($mksyucucyswaukig)) { $qmeagsomwsiaeugs->gssiscqyqsacmeca()->sgcuwcowgwimgsgk($aokagokqyuysuksm); } } } catch (Exception $wgaoewqkwgomoaai) { $mmeioagwmyscwumo = 1; } } } } public function qaquiwmmicuimewa($cwgqkcumeaswoscu) : bool { $cqiuiecmyyqkgeoa = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ikocqgeqiykwwyqs($cwgqkcumeaswoscu); $moommoeyqsccsiay = (array) $this->weysguygiseoukqw(Setting::omgsyegqyicmqaio, []); return $cqiuiecmyyqkgeoa && $moommoeyqsccsiay && in_array($cqiuiecmyyqkgeoa, $moommoeyqsccsiay, true); } public function eeoawiosaioiwasw($iueymcwwscwqkiyq = Constants::eqewsqmqmsiocaeg) : array { $ueekmuimuqwyoowy = []; $ygikoqaokckisawo = Account::symcgieuakksimmu()->iekyeyicoyyawomk()->yassqyiieqeywoqi(Constants::ciywsqoeiymemsys, $iueymcwwscwqkiyq); if ($ygikoqaokckisawo) { foreach ($ygikoqaokckisawo as $eiwicgsqoiaeawkk) { if ($goqqimcssiyagkwy = $this->skcaayuyuugiwoco($eiwicgsqoiaeawkk)) { $ueekmuimuqwyoowy[] = $goqqimcssiyagkwy; } } } return $ueekmuimuqwyoowy; } public function skcaayuyuugiwoco($eiwicgsqoiaeawkk) : ?Engine { $goqqimcssiyagkwy = null; $jwsqucqyaoaasykk = Account::symcgieuakksimmu(); switch ($jwsqucqyaoaasykk->ogegcqqcukiaqscy(Constants::mekcgmewamwqgsok, $eiwicgsqoiaeawkk)) { case Constants::aqssgwgkyaeaymmo: $goqqimcssiyagkwy = Dropbox::ocmycskcuiawkecq($jwsqucqyaoaasykk->mwyqswsaeeewsosm($eiwicgsqoiaeawkk), (array) $eiwicgsqoiaeawkk); break; } return $goqqimcssiyagkwy; } }
