<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6684009f65575             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Woocommerce; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Custom\Filefox\Frontend\Page\Download; use Pmpr\Custom\Filefox\Setting; use WC_Product; use WC_Product_Download; use WC_Product_Variable; use WC_Product_Variation; class Single extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\157\157\x63\157\155\x6d\x65\162\x63\145\x5f\163\151\156\147\154\x65\x5f\x70\162\x6f\144\165\143\x74\137\163\165\155\x6d\x61\162\x79", [$this, "\141\151\165\x6b\x61\x69\x71\143\151\145\143\x75\163\x77\x6f\x77"]); } public function aiukaiqciecuswow() { global $product; if (!$product instanceof WC_Product) { goto ukkcmocamwgiqayu; } $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $umkkkaqkwugkemce = $usmsssmiougymckk->iooowgsqoyqseyuu($product); $okcscwesammossuq = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas(self::oguseymmyyoyaako, [self::isukysauqkiecswi => $umkkkaqkwugkemce]); if ($okcscwesammossuq) { goto wusciwkkckmqigms; } if (!$usmsssmiougymckk->cmqemkgqoweiwiqu($product)) { goto kqswcsysqawkcgye; } $oammesyieqmwuwyi = []; if (!($omwmuycmeqcqokom = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ygqycmmkoiuocoia($umkkkaqkwugkemce))) { goto isgwkwacoyimiauk; } $omwmuycmeqcqokom = $usmsssmiougymckk->get($omwmuycmeqcqokom); isgwkwacoyimiauk: if ($product instanceof WC_Product_Variable) { goto eeyyskqsmquyquqw; } $oammesyieqmwuwyi[] = $this->kiaeomkeqacsssoy($product, $omwmuycmeqcqokom); goto ewscugeuicukkycc; eeyyskqsmquyquqw: foreach ($product->get_available_variations() as $isweyuoisomqyaag) { if (!($isweyuoisomqyaag instanceof WC_Product_Variation && $usmsssmiougymckk->cmqemkgqoweiwiqu($isweyuoisomqyaag))) { goto cgyakcqgugqgkqiw; } $oammesyieqmwuwyi[] = $this->kiaeomkeqacsssoy($isweyuoisomqyaag, $omwmuycmeqcqokom); cgyakcqgugqgkqiw: uegouoiuyoqkcscg: } mggeqkcksyaymcsa: ewscugeuicukkycc: $this->iuygowkemiiwqmiw("\x64\157\x77\156\154\x6f\141\144\163", [self::qwumqqyuasyskkkc => $oammesyieqmwuwyi, self::qescuiwgsyuikume => __("\104\x6f\x77\x6e\154\157\x61\144\x73", PR__CST__FILEFOX)], [self::qaacaqioeyiuakeu => true]); kqswcsysqawkcgye: goto iiiccouaaqsyikae; wusciwkkckmqigms: $this->iuygowkemiiwqmiw("\x63\150\x69\x6c\144\162\x65\x6e", [self::geocwaecmeeskuci => $okcscwesammossuq], [self::qaacaqioeyiuakeu => true]); iiiccouaaqsyikae: ukkcmocamwgiqayu: } public function kiaeomkeqacsssoy($product, $omwmuycmeqcqokom = null) : array { $qcokcugqceckmigs = []; $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $qcokcugqceckmigs[self::iikosyqiawkweouo] = $this->ccekeuwwqqoiwuwy($product, $omwmuycmeqcqokom); $qcokcugqceckmigs[self::gouqcwikiiygyasc] = $usmsssmiougymckk->iooowgsqoyqseyuu($product); if ($usmsssmiougymckk->sywcyoouayqkqisk($product)) { goto mwysseaekcsiesmm; } $qcokcugqceckmigs[self::acymsykymkiewqsy] = $usmsssmiougymckk->owuaywucuaiyocum($product); goto amgsueumgaguceaa; mwysseaekcsiesmm: $qcokcugqceckmigs[self::mmeomwsgcemayuuu] = $this->woamsogakkycsqcc($product); amgsueumgaguceaa: return $qcokcugqceckmigs; } public function ccekeuwwqqoiwuwy($product, $omwmuycmeqcqokom = null) : array { $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $siquossayskcwkea = []; if (!$omwmuycmeqcqokom) { goto gygwewcqsmwqismo; } $siquossayskcwkea = $usmsssmiougymckk->gywsmekygqwieocq($omwmuycmeqcqokom); gygwewcqsmwqismo: $siquossayskcwkea += $usmsssmiougymckk->gywsmekygqwieocq($product); return $siquossayskcwkea; } public function woamsogakkycsqcc($product) : array { $casweeiuuwgqsykq = []; $gaumukogkkgkiiuo = $this->miocmcoykayoyyau(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $smeeaysicaigqymu = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw(); $wamcomkuwysqgwgk = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::ukuccmaooeiuuycs, sprintf(__("\104\x6f\x77\156\x6c\x6f\x61\144\x20\x25\x73", PR__CST__FILEFOX), "\x7b\164\x69\x74\154\x65\175")); foreach ($product->get_downloads() as $acsweksygkmmgggk) { if (!($acsweksygkmmgggk instanceof WC_Product_Download && ($cwgqkcumeaswoscu = $smeeaysicaigqymu->ouaksagwsqimgqgy($acsweksygkmmgggk->get_file())))) { goto ukqocwewouckikso; } $oqaakomygquqkuag = [self::kekgqaemqessuwmq => $acsweksygkmmgggk->get_id()]; $casweeiuuwgqsykq[] = [self::qgqyauaqwqmqseim => $gaumukogkkgkiiuo->get("\151\155\x67\x2f\x66\151\x6c\145\x2d\164\x79\x70\145\57{$acsweksygkmmgggk->get_file_extension()}\56\163\166\147"), self::ogigqueukwysusii => $mumyimcwkaemyyue->yqymaqmqiqmmmsoo($oqaakomygquqkuag, Download::symcgieuakksimmu()->ycqquoiyyuesegsy()), self::qescuiwgsyuikume => $yyauwyaeewsickwk->qquwggyuqouqumam($wamcomkuwysqgwgk, [self::qescuiwgsyuikume => $acsweksygkmmgggk->get_name()]), self::ckcuiukmyisueqeo => [self::kucuwimmakgiieom => [self::qgqyauaqwqmqseim => IconInterface::msyqysqykouywsua, self::TEXT => sprintf(__("\x25\x73\x20\x74\151\x6d\145\x73\40\x64\157\x77\x6e\154\x6f\x61\144\145\144", PR__CST__FILEFOX), $this->msywmyaoqmaegsuy(112))], self::waguuiqqgsysuukq => [self::qgqyauaqwqmqseim => IconInterface::saoamqwywyaewwku, self::TEXT => size_format(filesize($smeeaysicaigqymu->ckoygqywcuqasqea($cwgqkcumeaswoscu)))]]]; ukqocwewouckikso: gommacygsykyussk: } uougwgeyiokewkkm: return $casweeiuuwgqsykq; } }
