<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67abce8e71656             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Salary; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Custom\Filefox\Container; use Pmpr\Custom\Filefox\Salary\Model\PostOwner; use Pmpr\Custom\Filefox\Salary\Model\Team; use Pmpr\Custom\Filefox\Salary\Traffic\Traffic; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Model\Request; class Salary extends Container { const susokqyqcmqomwqk = "\x74\145\x61\x6d"; const mwisuqgywiccyykw = self::susokqyqcmqomwqk . Constants::mswocgcucqoaesaa; const aigwoicquyiqsiuo = "\160\157\163\x74\137\157\x77\x6e\x65\162" . Constants::mswocgcucqoaesaa; const icygkcucieasceuk = "\143\157\156\x74\x65\156\164\x5f\155\141\156\x61\147\x65\162"; const emceseoyeswkikuu = "\143\157\156\x74\145\x6e\x74\x5f\x70\x72\157\144\165\143\145\162"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\151\x74", [$this, "\167\157\x73\x69\155\143\163\x61\165\x63\165\155\x77\x65\x65\x6d"])->qcsmikeggeemccuu("\163\141\166\145\137\x70\x6f\x73\164", [$this, "\151\x75\x79\165\163\147\155\x6b\x67\x61\171\155\x75\145\x77\x61"], 10, 3); $this->waqewsckuayqguos("\155\144\154\x5f\x5f\163\141\x6c\141\x72\x79\x5f\162\145\161\165\145\163\x74\137\146\x69\x65\154\144\163\137\151\x6e\151\x74\151\x61\154\x69\x7a\145\144", [$this, "\x61\155\163\x6f\143\x75\157\x6f\161\x79\161\171\x67\155\x61\x79"])->waqewsckuayqguos("\155\144\154\137\x5f\x73\x61\154\141\x72\171\137\162\x65\161\165\145\163\164\137\x73\143\150\145\155\141\x73\x5f\x69\156\151\x74\x69\x61\154\x69\172\145\144", [$this, "\x71\167\x73\165\163\167\x6f\147\171\143\145\x61\x67\x6f\171\x75"])->waqewsckuayqguos("\x73\x61\154\141\162\x79\137\x72\145\x71\165\x65\x73\x74\137\x61\143\143\145\x70\x74\x65\144", [$this, "\147\141\x63\153\147\x69\x75\x6f\x65\167\x63\147\155\171\x6f\141"], 10, 4)->waqewsckuayqguos("\163\x61\154\141\x72\x79\x5f\x72\x65\x73\164\x5f\141\147\x72\145\145\155\145\x6e\x74\137\144\x61\x74\141", [$this, "\x6d\167\163\x69\143\153\151\153\165\165\x75\x67\x67\x63\x61\x6d"], 10, 2); } public function mameiwsayuyquoeq() { Traffic::symcgieuakksimmu(); ContentManager::symcgieuakksimmu(); ContentProducer::symcgieuakksimmu(); if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Team::symcgieuakksimmu(); } } public function iuyusgmkgaymuewa($gcqseksiskwueksc, $post) { $oquqsamoqkequssa = PostOwner::symcgieuakksimmu(); $woewcmgaacwwcmyy = $oquqsamoqkequssa->iekyeyicoyyawomk()->akkkoiiymmamsauc($gcqseksiskwueksc, Constants::kqigmeickowqiiyy); if (empty($woewcmgaacwwcmyy)) { $qscaoekmoooeuyqg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->mguqscccckuywsya($post); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $aqmwamyiwgeeymqa = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $qscaoekmoooeuyqg), $eqwoegegiamegqsm->megqywqeuquawkim(self::mwisuqgywiccyykw)->amwwousckkqyweok(), $eqwoegegiamegqsm->megqywqeuquawkim(self::mwisuqgywiccyykw, "\x30")->maqiysyuqmwcqoig("\76")]); if ($aqmwamyiwgeeymqa) { $oquqsamoqkequssa->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::kqigmeickowqiiyy => $gcqseksiskwueksc, self::mwisuqgywiccyykw => $kueeocmceokoouqa->waecsyqmwascmqoa($aqmwamyiwgeeymqa, self::mwisuqgywiccyykw), $oquqsamoqkequssa::cmiegiycgiucucgs => $kueeocmceokoouqa->mwyqswsaeeewsosm($aqmwamyiwgeeymqa)]); } } } public function qwsuswogyceagoyu($kueeocmceokoouqa) { if ($kueeocmceokoouqa instanceof Model) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $kueeocmceokoouqa->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::susokqyqcmqomwqk)->acokiqqgsmoqaeyu()->kkeymosoimmgsaug()->gswweykyogmsyawy(__("\124\x65\141\x6d", PR__CST__FILEFOX))->geimymogiqyssawi(Team::class, Team::ouesgysauomeocqm))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::aigwoicquyiqsiuo)->gswweykyogmsyawy(__("\x50\157\163\x74\40\x4f\x77\156\x65\x72", PR__CST__FILEFOX))->ckgquisaimmgwuyu(PostOwner::class))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::mwisuqgywiccyykw)->gswweykyogmsyawy(__("\x54\x65\141\x6d", PR__CST__FILEFOX))->jyumyyugiwwiqomk(2)->wuuqgaekqeymecag(Team::class, Team::mmwykkacqsucssgc)->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie, $mksyucucyswaukig, $meywaqqsugaoeyys, $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof Foreign) { if ($eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->woammqyeakuskkkk($eqgoocgaqwqcimie, $mksyucucyswaukig, $meywaqqsugaoeyys); } else { $mmsugugggqciomke = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if ($mmsugugggqciomke) { $ksuesqoiqqiiyqsq = $mmsugugggqciomke->iekyeyicoyyawomk()->akkkoiiymmamsauc($meywaqqsugaoeyys->mwyqswsaeeewsosm($mksyucucyswaukig), Team::ouesgysauomeocqm); if ($ksuesqoiqqiiyqsq) { $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->iysseyicgouwysgk($mmsugugggqciomke, $ksuesqoiqqiiyqsq); } else { $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->woammqyeakuskkkk($eqgoocgaqwqcimie, $mksyucucyswaukig, $meywaqqsugaoeyys); } } } } return $eqgoocgaqwqcimie; })); $qmywcaugisyyeqks = $kueeocmceokoouqa->uqeoyqiwywwmsiew(Constants::meksegaoamowuwoq); if ($qmywcaugisyyeqks) { $qmywcaugisyyeqks->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie, $mksyucucyswaukig, $meywaqqsugaoeyys) { $gcaumymoqegsygyi = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::squoamkioomemiyi => Constants::meksegaoamowuwoq, Constants::ckmqoekmugkggeym => $eqgoocgaqwqcimie]); if ($meywaqqsugaoeyys instanceof Model && ($meywaqqsugaoeyys->qcaekwgmiswccowk(Constants::weiosaewqequuyuq) || $meywaqqsugaoeyys->qcaekwgmiswccowk(Constants::ieioeisgwcgysukw))) { $wgkogsmkwskskgsw = $meywaqqsugaoeyys->waecsyqmwascmqoa($mksyucucyswaukig, self::mwisuqgywiccyykw); if ($wgkogsmkwskskgsw) { $eqgoocgaqwqcimie = sprintf("\45\163\x20\50\x25\x73\51", $gcaumymoqegsygyi, __("\x43\x6f\156\164\145\156\x74\x20\x50\x72\157\x64\x75\143\145\x72", PR__CST__FILEFOX)); } else { $mmsugugggqciomke = Team::symcgieuakksimmu(); $ksuesqoiqqiiyqsq = $mmsugugggqciomke->iekyeyicoyyawomk()->akkkoiiymmamsauc($meywaqqsugaoeyys->mwyqswsaeeewsosm($mksyucucyswaukig), Team::ouesgysauomeocqm); if ($ksuesqoiqqiiyqsq) { $eqgoocgaqwqcimie = sprintf("\45\163\x20\50\x25\163\x29", $gcaumymoqegsygyi, __("\103\x6f\x6e\164\x65\156\164\40\x4d\x61\156\141\x67\x65\x72", PR__CST__FILEFOX)); } else { $eqgoocgaqwqcimie = $gcaumymoqegsygyi; } } } else { $eqgoocgaqwqcimie = $gcaumymoqegsygyi; } return $eqgoocgaqwqcimie; }); } } } public function amsocuooqyqygmay($kueeocmceokoouqa) { if ($kueeocmceokoouqa instanceof Model) { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $kueeocmceokoouqa->yyoqecggyacaseko()->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::mwisuqgywiccyykw)->ugquamoakekwyiqg(Team::class)); } } public function mwsickikuuuggcam($icwicymcioeyeyek, $xssuewsokckmigqk) : array { $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); $segkigmymysmwquw = $icwicymcioeyeyek[$mssuumukiiaqmcka::siwsmgcqgcqmaeui]; unset($icwicymcioeyeyek[$mssuumukiiaqmcka::siwsmgcqgcqmaeui], $icwicymcioeyeyek[$mssuumukiiaqmcka::weumemyqgykuwqok], $icwicymcioeyeyek[$mssuumukiiaqmcka::yykcmqogieykgkus]); $icwicymcioeyeyek[Constants::sqcsaeqsycmuiiso][Constants::qescuiwgsyuikume] = __("\103\157\x73\164\x20\x6f\x66\40\x49\156\164\x65\162\x6e\x73\150\151\160", PR__CST__FILEFOX); $imeywacwecgemcco = $icwicymcioeyeyek[Constants::sqcsaeqsycmuiiso]; unset($icwicymcioeyeyek[Constants::sqcsaeqsycmuiiso]); switch ($mssuumukiiaqmcka->waecsyqmwascmqoa($xssuewsokckmigqk, $mssuumukiiaqmcka::iimaoeeqksicsawa)) { case self::emceseoyeswkikuu: $icwicymcioeyeyek["\x74\145\x61\155\137\x73\150\x61\x72\145"] = [Constants::qescuiwgsyuikume => __("\x54\x65\x61\x6d\x20\123\x68\x61\162\x65", PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => sprintf(__("\x25\x73\40\x6f\146\x20\x74\x6f\x74\x61\x6c\40\x74\x65\141\155\x20\x73\141\x6c\145\163", PR__CST__FILEFOX), $segkigmymysmwquw[Constants::ciyoccqkiamemcmm] ?? ''), Constants::qgqyauaqwqmqseim => IconInterface::kukgkqakogugoyuw]; $icwicymcioeyeyek["\x75\x73\x65\162\137\163\150\x61\162\x65"] = [Constants::qescuiwgsyuikume => __("\125\x73\x65\x72\x20\x53\150\x61\x72\145", PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => __("\125\163\x65\x72\55\x74\x6f\x2d\x54\145\x61\155\40\124\x72\x61\146\146\151\x63\40\122\141\x74\x69\157", PR__CST__FILEFOX), Constants::qgqyauaqwqmqseim => IconInterface::wqqgoiyyqicsycmm]; break; case self::icygkcucieasceuk: $icwicymcioeyeyek["\155\141\x6e\141\x67\145\162\137\163\150\141\162\145"] = [Constants::qescuiwgsyuikume => __("\x4d\141\x6e\141\147\145\x72\x20\x53\x68\141\x72\x65", PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => __("\120\x65\x72\143\x65\x6e\x74\141\x67\145\40\151\x6e\x63\x72\145\x61\x73\145\x20\151\x6e\40\164\x65\x61\155\40\164\162\141\x66\146\151\143\x20\144\x69\166\x69\144\x65\144\40\x62\x79\40\x74\145\141\x6d\x20\x73\151\x7a\145", PR__CST__FILEFOX), Constants::qgqyauaqwqmqseim => IconInterface::cyysmikkeoowmamq]; $icwicymcioeyeyek["\155\141\x6e\x61\x67\145\x72\x5f\163\150\141\162\145\x5f\x6d\141\x78"] = [Constants::qescuiwgsyuikume => __("\115\141\x6e\141\147\145\x72\x27\x73\x20\x73\150\141\x72\145\40\x63\141\160", PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $segkigmymysmwquw[Constants::ciyoccqkiamemcmm] ?? '', Constants::qgqyauaqwqmqseim => IconInterface::ssomcocoeueyoiwc]; break; } $icwicymcioeyeyek[Constants::sqcsaeqsycmuiiso] = $imeywacwecgemcco; return $icwicymcioeyeyek; } public function gackgiuoewcgmyoa($siquossayskcwkea, $mkucggyaiaukqoce, $ykyeuagqukagigki, $kueeocmceokoouqa) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); switch ($ykyeuagqukagigki) { case self::icygkcucieasceuk: $wgkogsmkwskskgsw = $kueeocmceokoouqa->waecsyqmwascmqoa($siquossayskcwkea, self::mwisuqgywiccyykw); if (empty($wgkogsmkwskskgsw) && $kueeocmceokoouqa instanceof Model) { $iauiiysymqwcuuqi = Team::symcgieuakksimmu()->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::qescuiwgsyuikume => sprintf(__("\124\x65\x61\x6d\40\x6f\146\40\45\x73", PR__CST__FILEFOX), $yoiguusocukqeayg->ygwimyogyaqgumam($mkucggyaiaukqoce))], true); if (!is_wp_error($iauiiysymqwcuuqi)) { $wgkogsmkwskskgsw = $iauiiysymqwcuuqi[Constants::gouqcwikiiygyasc]; $kueeocmceokoouqa->gssiscqyqsacmeca()->eaywmggcsekawucw($siquossayskcwkea, self::mwisuqgywiccyykw, $wgkogsmkwskskgsw, true); } } break; case self::emceseoyeswkikuu: break; } } public function wosimcsaucumweem() { $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $cymcyywycwkawmsi = [self::icygkcucieasceuk => [Constants::qescuiwgsyuikume => __("\x43\x6f\x6e\164\x65\x6e\x74\x20\x4d\x61\156\x61\147\x65\162", PR__CST__FILEFOX), Constants::cecmeqwgqawkeieq => Constants::yaiacqocwcgmooio], self::emceseoyeswkikuu => [Constants::qescuiwgsyuikume => __("\x43\x6f\156\164\x65\156\164\x20\x50\162\x6f\144\x75\143\x65\x72", PR__CST__FILEFOX), Constants::cecmeqwgqawkeieq => Constants::iwascisiiokuackw]]; foreach ($cymcyywycwkawmsi as $uysmeyukoeyyqamq => $uiewakwqscemywuo) { if (!$ewgmommeawggyaek->aqciiewawiwecoou($uysmeyukoeyyqamq)) { $ewgmommeawggyaek->secqmksoyausymio($uysmeyukoeyyqamq, $uiewakwqscemywuo[Constants::qescuiwgsyuikume], $ewgmommeawggyaek->aqciiewawiwecoou($uiewakwqscemywuo[Constants::cecmeqwgqawkeieq])->capabilities); } } } }
