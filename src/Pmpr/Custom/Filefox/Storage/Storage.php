<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d4b1bd0fa             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Storage; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Container; use Pmpr\Custom\Filefox\Setting\Setting; use Pmpr\Custom\Filefox\Storage\Engine\Dropbox; use Pmpr\Custom\Filefox\Storage\Engine\Engine; use Pmpr\Custom\Filefox\Storage\Model\Account; use Pmpr\Custom\Filefox\Storage\Model\Replica; class Storage extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('add_attachment', [$this, 'cisskmqawsisesqw'])->qcsmikeggeemccuu('delete_attachment', [$this, 'yqmoeqkaqmegwwqc']); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom('get_replica_link', [$this, 'syywcywuqwugkesm'], 10, 2)->aqaqisyssqeomwom('get_account_download_link_text', [$this, 'zgeqwwywsowqukci'], 10, 2); } public function mameiwsayuyquoeq() { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Replica::symcgieuakksimmu(); Account::symcgieuakksimmu(); } } public function zgeqwwywsowqukci($cmwygeyygwqaemaq, $aeiwmoeicwaiwmwu) : string { if ($aeiwmoeicwaiwmwu && (is_array($aeiwmoeicwaiwmwu) || is_object($aeiwmoeicwaiwmwu))) { $qmeagsomwsiaeugs = Replica::symcgieuakksimmu(); $mekgeyuqyeggqiqq = $qmeagsomwsiaeugs->mwyqswsaeeewsosm($aeiwmoeicwaiwmwu); if ($mekgeyuqyeggqiqq > 0) { $eiwicgsqoiaeawkk = $qmeagsomwsiaeugs->iekyeyicoyyawomk()->iscemaoqqckmkago(Constants::msaosoagkukqsiue, $aeiwmoeicwaiwmwu); $cmwygeyygwqaemaq = (string) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($eiwicgsqoiaeawkk, Constants::aygocssywaomaqga, __('Download', PR__CST__FILEFOX)); } else { $cmwygeyygwqaemaq = __('Download at low speed', PR__CST__FILEFOX); } } else { $cmwygeyygwqaemaq = ''; } return $cmwygeyygwqaemaq; } public function syywcywuqwugkesm($iwywmkygwewiamwm, $aeiwmoeicwaiwmwu) { if (is_numeric($aeiwmoeicwaiwmwu)) { $qmeagsomwsiaeugs = Replica::symcgieuakksimmu(); $aeiwmoeicwaiwmwu = (array) $qmeagsomwsiaeugs->iekyeyicoyyawomk()->akkkoiiymmamsauc($aeiwmoeicwaiwmwu); if (isset($aeiwmoeicwaiwmwu[Constants::gouqcwikiiygyasc], $aeiwmoeicwaiwmwu[Constants::cqycgsyykemiygou])) { $kgauuisuyiawsqoi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aeiwmoeicwaiwmwu, Constants::ogigqueukwysusii); $iueqawqgamaswqgo = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aeiwmoeicwaiwmwu, Constants::oqaigmmwsmaqmoiw); if (!$kgauuisuyiawsqoi || !$iueqawqgamaswqgo || $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->wguceomqgwouoyks(date('Y-m-d H:i', strtotime($iueqawqgamaswqgo) + MINUTE_IN_SECONDS))) { if ($goqqimcssiyagkwy = $this->skcaayuyuugiwoco($qmeagsomwsiaeugs->iekyeyicoyyawomk()->iscemaoqqckmkago(Constants::msaosoagkukqsiue, $aeiwmoeicwaiwmwu))) { $kgauuisuyiawsqoi = $goqqimcssiyagkwy->aaaycaqymuikesme($aeiwmoeicwaiwmwu[Constants::cqycgsyykemiygou]); if ($kgauuisuyiawsqoi) { $iwywmkygwewiamwm = $kgauuisuyiawsqoi; $aeiwmoeicwaiwmwu[Constants::ogigqueukwysusii] = $kgauuisuyiawsqoi; $aeiwmoeicwaiwmwu[Constants::oqaigmmwsmaqmoiw] = date('Y-m-d H:i:s', time() + (HOUR_IN_SECONDS * 4 - 10)); $qmeagsomwsiaeugs->gssiscqyqsacmeca()->gsegsiocqmsoayii($aeiwmoeicwaiwmwu, true); } } } else { $iwywmkygwewiamwm = $kgauuisuyiawsqoi; } } } return $iwywmkygwewiamwm; } public function cisskmqawsisesqw($cwgqkcumeaswoscu) { if ($this->qaquiwmmicuimewa($cwgqkcumeaswoscu)) { $ueekmuimuqwyoowy = $this->eeoawiosaioiwasw(); foreach ($ueekmuimuqwyoowy as $goqqimcssiyagkwy) { try { $occymigcemkqucuw = $goqqimcssiyagkwy->cgwsoaeeaomscacg($cwgqkcumeaswoscu); Replica::symcgieuakksimmu()->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::ciywsqoeiymemsys => $occymigcemkqucuw ? Constants::gymusgeumuwomwuy : Constants::uasuowkaguiwoouw, Constants::cqycgsyykemiygou => $cwgqkcumeaswoscu, Constants::msaosoagkukqsiue => $goqqimcssiyagkwy->gmooemokieoeokag(Constants::gouqcwikiiygyasc)], true); } catch (Exception $wgaoewqkwgomoaai) { $mmeioagwmyscwumo = 1; } } } } public function yqmoeqkaqmegwwqc($cwgqkcumeaswoscu) { if ($this->qaquiwmmicuimewa($cwgqkcumeaswoscu)) { $ueekmuimuqwyoowy = $this->eeoawiosaioiwasw([Constants::eqewsqmqmsiocaeg, Constants::eiwauyokukqyueis, Constants::cemyyceucooociss]); foreach ($ueekmuimuqwyoowy as $goqqimcssiyagkwy) { try { if ($goqqimcssiyagkwy->uagqwamoeaygcmmc($cwgqkcumeaswoscu)) { $qmeagsomwsiaeugs = Replica::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $mksyucucyswaukig = $qmeagsomwsiaeugs->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::cqycgsyykemiygou, $cwgqkcumeaswoscu), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::msaosoagkukqsiue, $goqqimcssiyagkwy->gmooemokieoeokag(Constants::gouqcwikiiygyasc))]); if ($aokagokqyuysuksm = $qmeagsomwsiaeugs->mwyqswsaeeewsosm($mksyucucyswaukig)) { $qmeagsomwsiaeugs->gssiscqyqsacmeca()->sgcuwcowgwimgsgk($aokagokqyuysuksm); } } } catch (Exception $wgaoewqkwgomoaai) { $mmeioagwmyscwumo = 1; } } } } public function qaquiwmmicuimewa($cwgqkcumeaswoscu) : bool { $cqiuiecmyyqkgeoa = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ikocqgeqiykwwyqs($cwgqkcumeaswoscu); $moommoeyqsccsiay = (array) $this->weysguygiseoukqw(Setting::omgsyegqyicmqaio, []); return $cqiuiecmyyqkgeoa && $moommoeyqsccsiay && in_array($cqiuiecmyyqkgeoa, $moommoeyqsccsiay, true); } public function eeoawiosaioiwasw($iueymcwwscwqkiyq = Constants::eqewsqmqmsiocaeg) : array { $ueekmuimuqwyoowy = []; $ygikoqaokckisawo = Account::symcgieuakksimmu()->iekyeyicoyyawomk()->yassqyiieqeywoqi(Constants::ciywsqoeiymemsys, $iueymcwwscwqkiyq); if ($ygikoqaokckisawo) { foreach ($ygikoqaokckisawo as $eiwicgsqoiaeawkk) { if ($goqqimcssiyagkwy = $this->skcaayuyuugiwoco($eiwicgsqoiaeawkk)) { $ueekmuimuqwyoowy[] = $goqqimcssiyagkwy; } } } return $ueekmuimuqwyoowy; } public function skcaayuyuugiwoco($eiwicgsqoiaeawkk) : ?Engine { $goqqimcssiyagkwy = null; $jwsqucqyaoaasykk = Account::symcgieuakksimmu(); switch ($jwsqucqyaoaasykk->ogegcqqcukiaqscy(Constants::mekcgmewamwqgsok, $eiwicgsqoiaeawkk)) { case Constants::aqssgwgkyaeaymmo: $goqqimcssiyagkwy = Dropbox::ocmycskcuiawkecq($jwsqucqyaoaasykk->mwyqswsaeeewsosm($eiwicgsqoiaeawkk), (array) $eiwicgsqoiaeawkk); break; } return $goqqimcssiyagkwy; } }
