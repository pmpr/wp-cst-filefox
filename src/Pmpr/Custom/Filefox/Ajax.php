<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             646a3375ce58a             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox; class Ajax extends Container { public function wigskegsqequoeks() { $this->koaegcswmcqsiykq("\x67\x65\x74\137\162\x65\154\141\164\x65\x64\x5f\x74\145\162\155\x73", [$this, "\x65\141\171\151\145\x6d\165\153\161\x6f\x75\141\157\x6b\161\141"]); } public function eayiemukqouaokqa() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $kesssewsiegssiya = $eiicaiwgqkgsekce->yyqgamuwwakgciey(self::gmmygyiecgmggaam); $dieeqwiqwmwakmew = $eiicaiwgqkgsekce->yyqgamuwwakgciey("\x72\x65\154\141\164\x65\144\x5f\x74\157"); $maygkiawicqomkuc = $eiicaiwgqkgsekce->yyqgamuwwakgciey("\162\x65\154\x61\x74\145\x64\137\x74\157\x5f\x74\x61\x78"); $uyuaosigqymaqsaa = $this->aiwmwqwgqmyscwwe($kesssewsiegssiya, $maygkiawicqomkuc, $dieeqwiqwmwakmew); $keccaugmemegoimu = $this->iowaeiauaiawquqi($uyuaosigqymaqsaa); $this->uaggqsoeugksgooc(true, array_values($keccaugmemegoimu)); } public function iowaeiauaiawquqi($uyuaosigqymaqsaa, int $iqaosyayeiuaisqi = 1) : array { $keccaugmemegoimu = []; foreach ($uyuaosigqymaqsaa as $aokagokqyuysuksm => $iwewcwusemqaiggk) { if (is_string($iwewcwusemqaiggk)) { goto ueigkucgaucgeimc; } if (!is_array($iwewcwusemqaiggk)) { goto kqgcyoscsusgoaqi; } if (!isset($iwewcwusemqaiggk[self::miceosguuseyyuqe], $iwewcwusemqaiggk[self::geocwaecmeeskuci])) { goto wgewmqieuamsoayy; } $keccaugmemegoimu[$aokagokqyuysuksm] = [self::TEXT => $iwewcwusemqaiggk[self::miceosguuseyyuqe], self::ciyoccqkiamemcmm => $aokagokqyuysuksm, "\x63\x6c\x61\x73\163" => "\154\x65\x76\145\x6c\x2d{$iqaosyayeiuaisqi}"]; $keccaugmemegoimu += $this->iowaeiauaiawquqi($iwewcwusemqaiggk[self::geocwaecmeeskuci], $iqaosyayeiuaisqi + 1); wgewmqieuamsoayy: kqgcyoscsusgoaqi: goto sggawugoykqcmsug; ueigkucgaucgeimc: $keccaugmemegoimu[$aokagokqyuysuksm] = [self::TEXT => $iwewcwusemqaiggk, self::ciyoccqkiamemcmm => $aokagokqyuysuksm, "\143\x6c\141\163\x73" => "\x6c\x65\166\x65\x6c\55{$iqaosyayeiuaisqi}"]; sggawugoykqcmsug: ugqaaewwmkocwwgy: } omqiayeucoioqoao: return $keccaugmemegoimu; } }
