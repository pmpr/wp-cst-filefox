<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661e1e346ba59             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Custom\Filefox\Interfaces\CommonInterface; abstract class Container extends BaseClass implements CommonInterface { public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function aiwmwqwgqmyscwwe($kesssewsiegssiya, $maygkiawicqomkuc, $dieeqwiqwmwakmew, string $aqykuigiuwmmcieu = self::eoaiagsgqsmskugs) : array { $uyuaosigqymaqsaa = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->ciugwooasaqcywas($kesssewsiegssiya, [self::aisguagukaewucii => $aqykuigiuwmmcieu, self::mkucwyayaakigquq => false, self::cuoyscoiacswuauq => [self::ygyiacciqgemekwc => self::ieiyckasqmcyekim, [self::ascagqcquwgmygkm => $maygkiawicqomkuc, self::ciyoccqkiamemcmm => "\42" . $dieeqwiqwmwakmew . "\x22", self::ykemsyouoqyoaysg => self::augocsiaqqukkuui], [self::ascagqcquwgmygkm => $maygkiawicqomkuc, self::ciyoccqkiamemcmm => $dieeqwiqwmwakmew, self::ykemsyouoqyoaysg => "\75"]]]); return $this->mycoayosisckwogq($uyuaosigqymaqsaa, $aqykuigiuwmmcieu, $maygkiawicqomkuc, $dieeqwiqwmwakmew); } private function mycoayosisckwogq($uyuaosigqymaqsaa, $aqykuigiuwmmcieu, $maygkiawicqomkuc, $dieeqwiqwmwakmew) : array { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $sogksuscggsicmac = []; foreach ($uyuaosigqymaqsaa as $aokagokqyuysuksm => $iwewcwusemqaiggk) { $kuguwoaesuqsqysu = $aoskwucuugeuaeus->igawqaomowicuayw($aokagokqyuysuksm, $maygkiawicqomkuc, true); if (!($kuguwoaesuqsqysu && (is_numeric($kuguwoaesuqsqysu) && $dieeqwiqwmwakmew != $kuguwoaesuqsqysu || is_array($kuguwoaesuqsqysu) && !in_array($dieeqwiqwmwakmew, $kuguwoaesuqsqysu)))) { goto foeeqckqsyockkak; } goto oqugqwcyomiaaoqu; foeeqckqsyockkak: $okcscwesammossuq = $aoskwucuugeuaeus->mmoaikqueyiwcesm($aokagokqyuysuksm, [self::aisguagukaewucii => $aqykuigiuwmmcieu, self::mkucwyayaakigquq => false]); if ($okcscwesammossuq) { goto iekumemscwieugqw; } $sogksuscggsicmac[$aokagokqyuysuksm] = $iwewcwusemqaiggk; goto hoeeyiowekaeemko; iekumemscwieugqw: $sogksuscggsicmac[$aokagokqyuysuksm] = [self::miceosguuseyyuqe => $iwewcwusemqaiggk, self::geocwaecmeeskuci => $this->mycoayosisckwogq($okcscwesammossuq, $aqykuigiuwmmcieu, $maygkiawicqomkuc, $dieeqwiqwmwakmew)]; hoeeyiowekaeemko: oqugqwcyomiaaoqu: } eeqesooyqagwawae: return $sogksuscggsicmac; } }
