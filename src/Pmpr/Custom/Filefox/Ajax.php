<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6474c5273fce2             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox; class Ajax extends Container { public function wigskegsqequoeks() { $this->koaegcswmcqsiykq("\x67\x65\164\137\162\145\x6c\x61\x74\145\144\x5f\164\x65\x72\155\x73", [$this, "\145\x61\x79\151\x65\x6d\x75\153\161\157\165\x61\x6f\153\161\141"]); } public function eayiemukqouaokqa() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $kesssewsiegssiya = $eiicaiwgqkgsekce->yyqgamuwwakgciey(self::gmmygyiecgmggaam); $dieeqwiqwmwakmew = $eiicaiwgqkgsekce->yyqgamuwwakgciey("\x72\x65\154\141\x74\x65\144\x5f\x74\157"); $maygkiawicqomkuc = $eiicaiwgqkgsekce->yyqgamuwwakgciey("\162\x65\x6c\141\164\145\144\137\164\x6f\x5f\164\x61\x78"); $uyuaosigqymaqsaa = $this->aiwmwqwgqmyscwwe($kesssewsiegssiya, $maygkiawicqomkuc, $dieeqwiqwmwakmew); $keccaugmemegoimu = $this->iowaeiauaiawquqi($uyuaosigqymaqsaa); $this->uaggqsoeugksgooc(true, array_values($keccaugmemegoimu)); } public function iowaeiauaiawquqi($uyuaosigqymaqsaa, int $iqaosyayeiuaisqi = 1) : array { $keccaugmemegoimu = []; foreach ($uyuaosigqymaqsaa as $aokagokqyuysuksm => $iwewcwusemqaiggk) { if (is_string($iwewcwusemqaiggk)) { goto eeauyscekuckoues; } if (!is_array($iwewcwusemqaiggk)) { goto mwsmsguqqkcwiiuk; } if (!isset($iwewcwusemqaiggk[self::miceosguuseyyuqe], $iwewcwusemqaiggk[self::geocwaecmeeskuci])) { goto owmuceyswmgueasi; } $keccaugmemegoimu[$aokagokqyuysuksm] = [self::TEXT => $iwewcwusemqaiggk[self::miceosguuseyyuqe], self::ciyoccqkiamemcmm => $aokagokqyuysuksm, "\143\154\141\163\163" => "\154\145\x76\x65\154\55{$iqaosyayeiuaisqi}"]; $keccaugmemegoimu += $this->iowaeiauaiawquqi($iwewcwusemqaiggk[self::geocwaecmeeskuci], $iqaosyayeiuaisqi + 1); owmuceyswmgueasi: mwsmsguqqkcwiiuk: goto eogwckcymuugikuy; eeauyscekuckoues: $keccaugmemegoimu[$aokagokqyuysuksm] = [self::TEXT => $iwewcwusemqaiggk, self::ciyoccqkiamemcmm => $aokagokqyuysuksm, "\143\154\141\163\x73" => "\x6c\145\x76\x65\154\x2d{$iqaosyayeiuaisqi}"]; eogwckcymuugikuy: qmuwoecuacmkwgem: } wakmayaoqoskekqy: return $keccaugmemegoimu; } }
