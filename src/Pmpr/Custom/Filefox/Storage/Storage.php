<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6796bb890f96f             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Storage; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Container; use Pmpr\Custom\Filefox\Setting\Setting; use Pmpr\Custom\Filefox\Storage\Engine\Dropbox; use Pmpr\Custom\Filefox\Storage\Engine\Engine; use Pmpr\Custom\Filefox\Storage\Model\Account; use Pmpr\Custom\Filefox\Storage\Model\Replica; class Storage extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\144\x5f\141\x74\x74\x61\x63\150\155\x65\156\x74", [$this, "\143\151\163\163\153\155\x71\x61\167\163\x69\163\145\163\x71\x77"])->qcsmikeggeemccuu("\144\x65\x6c\145\x74\145\137\141\x74\164\141\143\x68\x6d\145\156\164", [$this, "\171\x71\x6d\157\145\161\153\141\x71\x6d\145\x67\167\167\x71\x63"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\147\145\x74\137\x72\145\x70\154\x69\x63\141\x5f\154\x69\x6e\153", [$this, "\163\171\171\167\x63\x79\167\165\x71\167\x75\x67\153\x65\163\x6d"], 10, 2)->aqaqisyssqeomwom("\x67\145\x74\x5f\141\143\143\x6f\x75\156\164\x5f\144\157\x77\x6e\154\157\141\144\x5f\x6c\x69\x6e\153\137\x74\x65\170\x74", [$this, "\x7a\x67\x65\161\167\x77\x79\167\163\x6f\x77\161\x75\x6b\143\x69"], 10, 2); } public function mameiwsayuyquoeq() { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Replica::symcgieuakksimmu(); Account::symcgieuakksimmu(); } } public function zgeqwwywsowqukci($cmwygeyygwqaemaq, $aeiwmoeicwaiwmwu) : string { if ($aeiwmoeicwaiwmwu && (is_array($aeiwmoeicwaiwmwu) || is_object($aeiwmoeicwaiwmwu))) { $qmeagsomwsiaeugs = Replica::symcgieuakksimmu(); $mekgeyuqyeggqiqq = $qmeagsomwsiaeugs->mwyqswsaeeewsosm($aeiwmoeicwaiwmwu); if ($mekgeyuqyeggqiqq > 0) { $eiwicgsqoiaeawkk = $qmeagsomwsiaeugs->iekyeyicoyyawomk()->iscemaoqqckmkago(Constants::msaosoagkukqsiue, $aeiwmoeicwaiwmwu); $cmwygeyygwqaemaq = (string) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($eiwicgsqoiaeawkk, Constants::aygocssywaomaqga, __("\x44\157\167\x6e\x6c\157\141\144", PR__CST__FILEFOX)); } else { $cmwygeyygwqaemaq = __("\104\x6f\x77\156\154\x6f\x61\x64\x20\x61\x74\x20\154\157\x77\x20\163\160\145\x65\x64", PR__CST__FILEFOX); } } else { $cmwygeyygwqaemaq = ''; } return $cmwygeyygwqaemaq; } public function syywcywuqwugkesm($iwywmkygwewiamwm, $aeiwmoeicwaiwmwu) { if (is_numeric($aeiwmoeicwaiwmwu)) { $qmeagsomwsiaeugs = Replica::symcgieuakksimmu(); $aeiwmoeicwaiwmwu = (array) $qmeagsomwsiaeugs->iekyeyicoyyawomk()->akkkoiiymmamsauc($aeiwmoeicwaiwmwu); if (isset($aeiwmoeicwaiwmwu[Constants::gouqcwikiiygyasc], $aeiwmoeicwaiwmwu[Constants::cqycgsyykemiygou])) { $kgauuisuyiawsqoi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aeiwmoeicwaiwmwu, Constants::ogigqueukwysusii); $iueqawqgamaswqgo = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aeiwmoeicwaiwmwu, Constants::oqaigmmwsmaqmoiw); if (!$kgauuisuyiawsqoi || !$iueqawqgamaswqgo || $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->wguceomqgwouoyks(date("\x59\x2d\x6d\x2d\144\x20\x48\72\x69", strtotime($iueqawqgamaswqgo) + MINUTE_IN_SECONDS))) { if ($goqqimcssiyagkwy = $this->skcaayuyuugiwoco($qmeagsomwsiaeugs->iekyeyicoyyawomk()->iscemaoqqckmkago(Constants::msaosoagkukqsiue, $aeiwmoeicwaiwmwu))) { $kgauuisuyiawsqoi = $goqqimcssiyagkwy->aaaycaqymuikesme($aeiwmoeicwaiwmwu[Constants::cqycgsyykemiygou]); if ($kgauuisuyiawsqoi) { $iwywmkygwewiamwm = $kgauuisuyiawsqoi; $aeiwmoeicwaiwmwu[Constants::ogigqueukwysusii] = $kgauuisuyiawsqoi; $aeiwmoeicwaiwmwu[Constants::oqaigmmwsmaqmoiw] = date("\131\x2d\x6d\x2d\144\x20\x48\72\x69\x3a\163", time() + (HOUR_IN_SECONDS * 4 - 10)); $qmeagsomwsiaeugs->gssiscqyqsacmeca()->gsegsiocqmsoayii($aeiwmoeicwaiwmwu, true); } } } else { $iwywmkygwewiamwm = $kgauuisuyiawsqoi; } } } return $iwywmkygwewiamwm; } public function cisskmqawsisesqw($cwgqkcumeaswoscu) { if ($this->qaquiwmmicuimewa($cwgqkcumeaswoscu)) { $ueekmuimuqwyoowy = $this->eeoawiosaioiwasw(); foreach ($ueekmuimuqwyoowy as $goqqimcssiyagkwy) { try { $occymigcemkqucuw = $goqqimcssiyagkwy->cgwsoaeeaomscacg($cwgqkcumeaswoscu); Replica::symcgieuakksimmu()->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::ciywsqoeiymemsys => $occymigcemkqucuw ? Constants::gymusgeumuwomwuy : Constants::uasuowkaguiwoouw, Constants::cqycgsyykemiygou => $cwgqkcumeaswoscu, Constants::msaosoagkukqsiue => $goqqimcssiyagkwy->gmooemokieoeokag(Constants::gouqcwikiiygyasc)], true); } catch (Exception $wgaoewqkwgomoaai) { $mmeioagwmyscwumo = 1; } } } } public function yqmoeqkaqmegwwqc($cwgqkcumeaswoscu) { if ($this->qaquiwmmicuimewa($cwgqkcumeaswoscu)) { $ueekmuimuqwyoowy = $this->eeoawiosaioiwasw([Constants::eqewsqmqmsiocaeg, Constants::eiwauyokukqyueis, Constants::cemyyceucooociss]); foreach ($ueekmuimuqwyoowy as $goqqimcssiyagkwy) { try { if ($goqqimcssiyagkwy->uagqwamoeaygcmmc($cwgqkcumeaswoscu)) { $qmeagsomwsiaeugs = Replica::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $mksyucucyswaukig = $qmeagsomwsiaeugs->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::cqycgsyykemiygou, $cwgqkcumeaswoscu), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::msaosoagkukqsiue, $goqqimcssiyagkwy->gmooemokieoeokag(Constants::gouqcwikiiygyasc))]); if ($aokagokqyuysuksm = $qmeagsomwsiaeugs->mwyqswsaeeewsosm($mksyucucyswaukig)) { $qmeagsomwsiaeugs->gssiscqyqsacmeca()->sgcuwcowgwimgsgk($aokagokqyuysuksm); } } } catch (Exception $wgaoewqkwgomoaai) { $mmeioagwmyscwumo = 1; } } } } public function qaquiwmmicuimewa($cwgqkcumeaswoscu) : bool { $cqiuiecmyyqkgeoa = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ikocqgeqiykwwyqs($cwgqkcumeaswoscu); $moommoeyqsccsiay = (array) $this->weysguygiseoukqw(Setting::omgsyegqyicmqaio, []); return $cqiuiecmyyqkgeoa && $moommoeyqsccsiay && in_array($cqiuiecmyyqkgeoa, $moommoeyqsccsiay, true); } public function eeoawiosaioiwasw($iueymcwwscwqkiyq = Constants::eqewsqmqmsiocaeg) : array { $ueekmuimuqwyoowy = []; $ygikoqaokckisawo = Account::symcgieuakksimmu()->iekyeyicoyyawomk()->yassqyiieqeywoqi(Constants::ciywsqoeiymemsys, $iueymcwwscwqkiyq); if ($ygikoqaokckisawo) { foreach ($ygikoqaokckisawo as $eiwicgsqoiaeawkk) { if ($goqqimcssiyagkwy = $this->skcaayuyuugiwoco($eiwicgsqoiaeawkk)) { $ueekmuimuqwyoowy[] = $goqqimcssiyagkwy; } } } return $ueekmuimuqwyoowy; } public function skcaayuyuugiwoco($eiwicgsqoiaeawkk) : ?Engine { $goqqimcssiyagkwy = null; $jwsqucqyaoaasykk = Account::symcgieuakksimmu(); switch ($jwsqucqyaoaasykk->ogegcqqcukiaqscy(Constants::mekcgmewamwqgsok, $eiwicgsqoiaeawkk)) { case Constants::aqssgwgkyaeaymmo: $goqqimcssiyagkwy = Dropbox::ocmycskcuiawkecq($jwsqucqyaoaasykk->mwyqswsaeeewsosm($eiwicgsqoiaeawkk), (array) $eiwicgsqoiaeawkk); break; } return $goqqimcssiyagkwy; } }
