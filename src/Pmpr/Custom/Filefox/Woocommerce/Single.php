<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             647caff9cd6b6             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Woocommerce; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Custom\Filefox\Frontend\Page\Download; use Pmpr\Custom\Filefox\Setting; use WC_Product; use WC_Product_Download; use WC_Product_Variable; use WC_Product_Variation; class Single extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\157\x6f\143\x6f\155\x6d\x65\x72\x63\145\x5f\163\151\156\147\154\145\137\160\x72\157\144\x75\143\x74\137\x73\x75\x6d\155\x61\x72\171", [$this, "\x61\151\x75\153\x61\151\161\143\x69\x65\x63\165\x73\167\157\x77"]); } public function aiukaiqciecuswow() { global $product; if (!$product instanceof WC_Product) { goto oqugqwcyomiaaoqu; } $umkkkaqkwugkemce = $this->caokeucsksukesyo()->wikusamwomuogoau()->imgiueoimkemicow($product); $okcscwesammossuq = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas(self::oguseymmyyoyaako, [self::isukysauqkiecswi => $umkkkaqkwugkemce]); if ($okcscwesammossuq) { goto suswcqoyyqkkquuo; } if (!$product->is_downloadable()) { goto acaqummmoyiemqss; } $oammesyieqmwuwyi = []; if (!($omwmuycmeqcqokom = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ygqycmmkoiuocoia($umkkkaqkwugkemce))) { goto qkcyqocqqwmqgqww; } $omwmuycmeqcqokom = $this->caokeucsksukesyo()->wikusamwomuogoau()->aqasygcsqysmmyke($omwmuycmeqcqokom); qkcyqocqqwmqgqww: if ($product instanceof WC_Product_Variable) { goto wmmggowmigekyoso; } $oammesyieqmwuwyi[] = $this->kiaeomkeqacsssoy($product, $omwmuycmeqcqokom); goto soqqemyioggmoakg; wmmggowmigekyoso: foreach ($product->get_available_variations() as $isweyuoisomqyaag) { if (!($isweyuoisomqyaag instanceof WC_Product_Variation && $isweyuoisomqyaag->is_downloadable())) { goto ywqgcegomwaiuquc; } $oammesyieqmwuwyi[] = $this->kiaeomkeqacsssoy($isweyuoisomqyaag, $omwmuycmeqcqokom); ywqgcegomwaiuquc: eegqyykygiccaoeo: } miyqyeiwquwsacsm: soqqemyioggmoakg: $this->iuygowkemiiwqmiw("\x64\x6f\x77\156\x6c\x6f\x61\144\x73", [self::qwumqqyuasyskkkc => $oammesyieqmwuwyi, self::qescuiwgsyuikume => __("\104\157\x77\x6e\154\157\141\144\163", PR__CST__FILEFOX)], [self::qaacaqioeyiuakeu => true]); acaqummmoyiemqss: goto eeqesooyqagwawae; suswcqoyyqkkquuo: $this->iuygowkemiiwqmiw("\143\150\151\x6c\144\162\145\156", [self::geocwaecmeeskuci => $okcscwesammossuq], [self::qaacaqioeyiuakeu => true]); eeqesooyqagwawae: oqugqwcyomiaaoqu: } public function kiaeomkeqacsssoy($product, $omwmuycmeqcqokom = null) : array { $qcokcugqceckmigs = []; $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); $qcokcugqceckmigs[self::iikosyqiawkweouo] = $this->ccekeuwwqqoiwuwy($product, $omwmuycmeqcqokom); $qcokcugqceckmigs[self::gouqcwikiiygyasc] = $ekymkycgewkiouqe->imgiueoimkemicow($product); if ($ekymkycgewkiouqe->muyguqkesakyuyuy($product)) { goto foeeqckqsyockkak; } $qcokcugqceckmigs[self::acymsykymkiewqsy] = $ekymkycgewkiouqe->owuaywucuaiyocum($product); goto iekumemscwieugqw; foeeqckqsyockkak: $qcokcugqceckmigs[self::mmeomwsgcemayuuu] = $this->woamsogakkycsqcc($product); iekumemscwieugqw: return $qcokcugqceckmigs; } public function ccekeuwwqqoiwuwy($product, $omwmuycmeqcqokom = null) : array { $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); $siquossayskcwkea = []; if (!$omwmuycmeqcqokom) { goto hoeeyiowekaeemko; } $siquossayskcwkea = $ekymkycgewkiouqe->uceakoqcemesewig($omwmuycmeqcqokom); hoeeyiowekaeemko: $siquossayskcwkea += $ekymkycgewkiouqe->uceakoqcemesewig($product); return $siquossayskcwkea; } public function woamsogakkycsqcc($product) : array { $casweeiuuwgqsykq = []; $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); $gaumukogkkgkiiuo = $this->miocmcoykayoyyau(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $smeeaysicaigqymu = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw(); $wamcomkuwysqgwgk = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::ukuccmaooeiuuycs, sprintf(__("\x44\157\167\156\x6c\157\141\144\x20\45\x73", PR__CST__FILEFOX), "\173\164\x69\x74\154\x65\175")); foreach ($product->get_downloads() as $acsweksygkmmgggk) { if (!($acsweksygkmmgggk instanceof WC_Product_Download && ($cwgqkcumeaswoscu = $smeeaysicaigqymu->ouaksagwsqimgqgy($acsweksygkmmgggk->get_file())))) { goto qicwaskssogcokgm; } $oqaakomygquqkuag = [self::kekgqaemqessuwmq => $acsweksygkmmgggk->get_id()]; $casweeiuuwgqsykq[] = [self::qgqyauaqwqmqseim => $gaumukogkkgkiiuo->get("\151\x6d\147\x2f\146\x69\154\145\x2d\x74\171\160\x65\x2f{$acsweksygkmmgggk->get_file_extension()}\56\163\x76\x67"), self::ogigqueukwysusii => $mumyimcwkaemyyue->yqymaqmqiqmmmsoo($oqaakomygquqkuag, Download::symcgieuakksimmu()->ycqquoiyyuesegsy()), self::qescuiwgsyuikume => $yyauwyaeewsickwk->qquwggyuqouqumam($wamcomkuwysqgwgk, [self::qescuiwgsyuikume => $acsweksygkmmgggk->get_name()]), self::ckcuiukmyisueqeo => [self::kucuwimmakgiieom => [self::qgqyauaqwqmqseim => IconInterface::msyqysqykouywsua, self::TEXT => sprintf(__("\x25\163\40\164\151\155\x65\x73\40\x64\157\167\x6e\154\x6f\141\144\145\x64", PR__CST__FILEFOX), $this->msywmyaoqmaegsuy(112))], self::waguuiqqgsysuukq => [self::qgqyauaqwqmqseim => IconInterface::saoamqwywyaewwku, self::TEXT => size_format(filesize($smeeaysicaigqymu->ckoygqywcuqasqea($cwgqkcumeaswoscu)))]]]; qicwaskssogcokgm: usquiuuyiyqaeyiu: } kymkucucyeoeikim: return $casweeiuuwgqsykq; } }
