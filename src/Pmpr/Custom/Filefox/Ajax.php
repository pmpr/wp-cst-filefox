<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d4b1bd0fa             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Traits\RelatedTermsTrait; class Ajax extends Container { use RelatedTermsTrait; const wiysygukkaksueso = ''; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq('get_related_terms', [$this, 'eayiemukqouaokqa']); } public function eayiemukqouaokqa() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $kesssewsiegssiya = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::gmmygyiecgmggaam); $dieeqwiqwmwakmew = $eiicaiwgqkgsekce->yyqgamuwwakgciey('related_to'); $maygkiawicqomkuc = $eiicaiwgqkgsekce->yyqgamuwwakgciey('related_to_tax'); $uyuaosigqymaqsaa = $this->aiwmwqwgqmyscwwe($kesssewsiegssiya, $maygkiawicqomkuc, $dieeqwiqwmwakmew); $keccaugmemegoimu = $this->iowaeiauaiawquqi($uyuaosigqymaqsaa); $eiicaiwgqkgsekce->uaggqsoeugksgooc(array_values($keccaugmemegoimu)); } public function iowaeiauaiawquqi($uyuaosigqymaqsaa, int $iqaosyayeiuaisqi = 1) : array { $keccaugmemegoimu = []; foreach ($uyuaosigqymaqsaa as $aokagokqyuysuksm => $iwewcwusemqaiggk) { if (is_string($iwewcwusemqaiggk)) { $keccaugmemegoimu[$aokagokqyuysuksm] = [Constants::TEXT => $iwewcwusemqaiggk, Constants::ciyoccqkiamemcmm => $aokagokqyuysuksm, 'class' => "level-{$iqaosyayeiuaisqi}"]; } else { if (isset($iwewcwusemqaiggk[Constants::miceosguuseyyuqe], $iwewcwusemqaiggk[Constants::geocwaecmeeskuci])) { $keccaugmemegoimu[$aokagokqyuysuksm] = [Constants::TEXT => $iwewcwusemqaiggk[Constants::miceosguuseyyuqe], Constants::ciyoccqkiamemcmm => $aokagokqyuysuksm, 'class' => "level-{$iqaosyayeiuaisqi}"]; $keccaugmemegoimu += $this->iowaeiauaiawquqi($iwewcwusemqaiggk[Constants::geocwaecmeeskuci], $iqaosyayeiuaisqi + 1); } } } return $keccaugmemegoimu; } }
