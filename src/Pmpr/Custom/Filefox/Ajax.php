<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6448ec21453e8             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox; class Ajax extends Container { public function wigskegsqequoeks() { $this->koaegcswmcqsiykq("\147\145\164\137\x72\145\154\141\164\x65\x64\137\164\145\162\155\163", [$this, "\145\141\x79\151\x65\x6d\165\153\161\157\x75\x61\x6f\153\161\141"]); } public function eayiemukqouaokqa() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $kesssewsiegssiya = $eiicaiwgqkgsekce->yyqgamuwwakgciey(self::gmmygyiecgmggaam); $dieeqwiqwmwakmew = $eiicaiwgqkgsekce->yyqgamuwwakgciey("\x72\x65\x6c\141\x74\x65\x64\x5f\x74\157"); $maygkiawicqomkuc = $eiicaiwgqkgsekce->yyqgamuwwakgciey("\162\145\x6c\141\164\145\x64\137\x74\157\137\x74\141\x78"); $uyuaosigqymaqsaa = $this->aiwmwqwgqmyscwwe($kesssewsiegssiya, $maygkiawicqomkuc, $dieeqwiqwmwakmew); $keccaugmemegoimu = $this->iowaeiauaiawquqi($uyuaosigqymaqsaa); $this->uaggqsoeugksgooc(true, array_values($keccaugmemegoimu)); } public function iowaeiauaiawquqi($uyuaosigqymaqsaa, int $iqaosyayeiuaisqi = 1) : array { $keccaugmemegoimu = []; foreach ($uyuaosigqymaqsaa as $aokagokqyuysuksm => $iwewcwusemqaiggk) { if (is_string($iwewcwusemqaiggk)) { goto myoicgcuugciueis; } if (!is_array($iwewcwusemqaiggk)) { goto qwigomakwmyiwkgo; } if (!isset($iwewcwusemqaiggk[self::miceosguuseyyuqe], $iwewcwusemqaiggk[self::geocwaecmeeskuci])) { goto qgoiooayqmqqsiok; } $keccaugmemegoimu[$aokagokqyuysuksm] = [self::TEXT => $iwewcwusemqaiggk[self::miceosguuseyyuqe], self::ciyoccqkiamemcmm => $aokagokqyuysuksm, "\143\154\141\163\163" => "\154\x65\166\145\x6c\55{$iqaosyayeiuaisqi}"]; $keccaugmemegoimu += $this->iowaeiauaiawquqi($iwewcwusemqaiggk[self::geocwaecmeeskuci], $iqaosyayeiuaisqi + 1); qgoiooayqmqqsiok: qwigomakwmyiwkgo: goto asmecuqiyyswueqe; myoicgcuugciueis: $keccaugmemegoimu[$aokagokqyuysuksm] = [self::TEXT => $iwewcwusemqaiggk, self::ciyoccqkiamemcmm => $aokagokqyuysuksm, "\143\x6c\141\163\163" => "\x6c\145\166\x65\154\x2d{$iqaosyayeiuaisqi}"]; asmecuqiyyswueqe: qogqewiwmwiwskgm: } qiaqsassksqiuyae: return $keccaugmemegoimu; } }
