<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             673bbd7e2699c             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox; use Pmpr\Common\Foundation\Interfaces\Constants; class Ajax extends Container { const wiysygukkaksueso = ''; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq("\x67\x65\x74\137\x72\145\x6c\x61\x74\x65\x64\x5f\164\x65\x72\x6d\163", [$this, "\x65\141\x79\151\x65\x6d\165\x6b\161\157\x75\x61\157\153\x71\x61"]); } public function eayiemukqouaokqa() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $kesssewsiegssiya = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::gmmygyiecgmggaam); $dieeqwiqwmwakmew = $eiicaiwgqkgsekce->yyqgamuwwakgciey("\162\145\154\x61\164\x65\144\137\164\157"); $maygkiawicqomkuc = $eiicaiwgqkgsekce->yyqgamuwwakgciey("\162\x65\x6c\141\x74\145\144\x5f\164\157\x5f\164\x61\170"); $uyuaosigqymaqsaa = $this->aiwmwqwgqmyscwwe($kesssewsiegssiya, $maygkiawicqomkuc, $dieeqwiqwmwakmew); $keccaugmemegoimu = $this->iowaeiauaiawquqi($uyuaosigqymaqsaa); $eiicaiwgqkgsekce->uaggqsoeugksgooc(array_values($keccaugmemegoimu)); } public function iowaeiauaiawquqi($uyuaosigqymaqsaa, int $iqaosyayeiuaisqi = 1) : array { $keccaugmemegoimu = []; foreach ($uyuaosigqymaqsaa as $aokagokqyuysuksm => $iwewcwusemqaiggk) { if (is_string($iwewcwusemqaiggk)) { $keccaugmemegoimu[$aokagokqyuysuksm] = [Constants::TEXT => $iwewcwusemqaiggk, Constants::ciyoccqkiamemcmm => $aokagokqyuysuksm, "\x63\154\141\163\x73" => "\154\145\x76\x65\154\x2d{$iqaosyayeiuaisqi}"]; } else { if (isset($iwewcwusemqaiggk[Constants::miceosguuseyyuqe], $iwewcwusemqaiggk[Constants::geocwaecmeeskuci])) { $keccaugmemegoimu[$aokagokqyuysuksm] = [Constants::TEXT => $iwewcwusemqaiggk[Constants::miceosguuseyyuqe], Constants::ciyoccqkiamemcmm => $aokagokqyuysuksm, "\x63\154\141\x73\163" => "\154\x65\x76\x65\x6c\x2d{$iqaosyayeiuaisqi}"]; $keccaugmemegoimu += $this->iowaeiauaiawquqi($iwewcwusemqaiggk[Constants::geocwaecmeeskuci], $iqaosyayeiuaisqi + 1); } } } return $keccaugmemegoimu; } }
