<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             648f253c7d91e             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Frontend; use Pmpr\Custom\Filefox\Storage\Model\Replica; use Pmpr\Custom\Filefox\Traits\CommonTrait; class Ajax extends Common { use CommonTrait; const gumsmyccuyyqsmoc = "\146\146\x5f\147\x65\x74\x5f\x66\x69\154\x65\x5f\x75\x72\x6c"; const kikskooimuqywswe = "\x66\146\x5f\147\x65\164\137\x64\x6f\x77\x6e\x6c\x6f\x61\144\x5f\x6c\151\x6e\x6b\163"; public function wigskegsqequoeks() { $this->iqkqummseggmikgo(self::gumsmyccuyyqsmoc, [$this, "\x6f\151\x75\143\x75\x6b\145\x77\153\143\153\x6b\x77\x69\x71\x63"])->iqkqummseggmikgo(self::kikskooimuqywswe, [$this, "\143\x77\145\153\x69\147\x71\157\x63\151\151\x69\141\x73\x73\151"]); } public function oiucukewkckkwiqc() { $kigowwqauiumummw = false; $keccaugmemegoimu = []; if (!$this->miueaekaaugaccmg($iswcokucwmiosiaq)) { goto syiqkaasoueowwui; } $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $qogsmwakwacwqogk = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(self::kekgqaemqessuwmq); if ($qogsmwakwacwqogk && ($umkkkaqkwugkemce = $this->imqksoqiawkuqies($qogsmwakwacwqogk))) { goto skkamseieeusycye; } $iswcokucwmiosiaq = __("\x43\141\156\x20\156\x6f\x74\40\x66\151\x6e\144\40\x72\145\x71\x75\145\163\164\145\x64\40\146\x69\x6c\x65\x2e", PR__CST__FILEFOX); goto cgiscsqwwgqqaeqi; skkamseieeusycye: $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); $product = $ekymkycgewkiouqe->aqasygcsqysmmyke($umkkkaqkwugkemce); if ($product->is_downloadable()) { goto soaccwqimeksgwiw; } $iswcokucwmiosiaq = __("\143\141\156\x20\156\x6f\164\x20\x64\x6f\167\156\x6c\x6f\x61\144\40\x72\145\x71\165\145\x73\x74\x65\144\40\146\x69\x6c\145\56", PR__CST__FILEFOX); goto wiysogeqqwgioyka; soaccwqimeksgwiw: $aumscagymwyyicag = $product->get_price(''); if (empty($aumscagymwyyicag) || $aumscagymwyyicag <= 0) { goto aegysmeecgcgayyw; } $iswcokucwmiosiaq = __("\x4e\145\145\144\40\x70\165\162\143\150\x61\x73\x65\x2e", PR__CST__FILEFOX); goto suqkuqygkkgwyaie; aegysmeecgcgayyw: $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $eyagkkkqkwcuygso = [self::kucuwimmakgiieom => $qogsmwakwacwqogk, self::woicooamkeqiaemo => $umkkkaqkwugkemce, self::wygwikaqsmcmosas => $gqusacuooiagkuom->ikkqcccaweckukug(self::cgmyyekauckqmwyg)]; $keccaugmemegoimu = [self::auqoykcmsiauccao => $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($eyagkkkqkwcuygso, $gqusacuooiagkuom->gmigwwwmwemyaayy())]; $kigowwqauiumummw = true; suqkuqygkkgwyaie: wiysogeqqwgioyka: cgiscsqwwgqqaeqi: syiqkaasoueowwui: if (!is_wp_error($iswcokucwmiosiaq)) { goto giaacoqqqsekcayy; } $iswcokucwmiosiaq = $this->gcsweumukyckmgik($iswcokucwmiosiaq); giaacoqqqsekcayy: if (empty(trim($iswcokucwmiosiaq))) { goto ewymsmkkiksgwysk; } $keccaugmemegoimu = $iswcokucwmiosiaq; ewymsmkkiksgwysk: $this->uaggqsoeugksgooc($kigowwqauiumummw, $keccaugmemegoimu); } public function cwekigqociiiassi() { $keccaugmemegoimu = ''; $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($iswcokucwmiosiaq)) { goto igooksugieceoege; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $qogsmwakwacwqogk = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(self::kekgqaemqessuwmq); if ($qogsmwakwacwqogk && ($umkkkaqkwugkemce = $this->imqksoqiawkuqies($qogsmwakwacwqogk))) { goto egyyiccaeeiooaua; } $iswcokucwmiosiaq = __("\103\141\x6e\x20\x6e\157\164\40\146\x69\156\144\x20\162\x65\161\165\145\x73\x74\145\x64\x20\x66\151\154\x65\x2e", PR__CST__FILEFOX); goto scisgsyemmsekgos; egyyiccaeeiooaua: if ($product = $this->caokeucsksukesyo()->wikusamwomuogoau()->aqasygcsqysmmyke($umkkkaqkwugkemce)) { goto gkyawqqcmigqgaiq; } $iswcokucwmiosiaq = __("\x43\141\x6e\40\x6e\x6f\x74\x20\146\x69\x6e\x64\x20\162\x65\154\141\x74\145\144\40\x70\x72\x6f\x64\165\143\x74", PR__CST__FILEFOX); goto ooeausyowguqicuo; gkyawqqcmigqgaiq: $cwgqkcumeaswoscu = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ouaksagwsqimgqgy($product->get_downloads()[$qogsmwakwacwqogk][self::kekgqaemqessuwmq]); $qmeagsomwsiaeugs = Replica::symcgieuakksimmu(); $yuiigwkuaqmwmoqs = $qmeagsomwsiaeugs->woimamkkeyoyauoa(self::cqycgsyykemiygou, $cwgqkcumeaswoscu); $yuiigwkuaqmwmoqs[] = [self::gouqcwikiiygyasc => 0]; $oammesyieqmwuwyi = []; $gwgqcsmomamyqsmy = $gqusacuooiagkuom->ikkqcccaweckukug(self::cgmyyekauckqmwyg); $gmigwwwmwemyaayy = $gqusacuooiagkuom->gmigwwwmwemyaayy(); foreach ($yuiigwkuaqmwmoqs as $aeiwmoeicwaiwmwu) { $mekgeyuqyeggqiqq = $gkyciwoiiisgywcs->get($aeiwmoeicwaiwmwu, self::gouqcwikiiygyasc, 0); $oammesyieqmwuwyi[] = [self::auqoykcmsiauccao => $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([self::mwkumwoeyuaukcms => $mekgeyuqyeggqiqq, self::kucuwimmakgiieom => $cwgqkcumeaswoscu, self::woicooamkeqiaemo => $umkkkaqkwugkemce, self::wygwikaqsmcmosas => $gwgqcsmomamyqsmy], $gmigwwwmwemyaayy), self::TEXT => $this->ocksiywmkyaqseou("\x67\x65\164\137\x61\x63\143\157\x75\156\x74\x5f\144\x6f\x77\156\x6c\157\141\x64\x5f\154\x69\156\x6b\x5f\164\x65\170\x74", __("\x44\x6f\x77\156\154\x6f\x61\x64", PR__CST__FILEFOX), $aeiwmoeicwaiwmwu)]; wmywuusgukmmaams: } cmegwsegsosyqcai: $keccaugmemegoimu = $this->iuygowkemiiwqmiw("\x64\157\x77\x6e\x6c\x6f\141\144\x5f\154\x69\156\153\163", [self::qwumqqyuasyskkkc => $oammesyieqmwuwyi]); $occymigcemkqucuw = true; ooeausyowguqicuo: scisgsyemmsekgos: if (!$iswcokucwmiosiaq) { goto cewmoqyysgsmuiya; } $keccaugmemegoimu = $this->caokeucsksukesyo()->kugiyqykwaskawsc()->oockkqiqsssakuug($iswcokucwmiosiaq); cewmoqyysgsmuiya: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); igooksugieceoege: } }
