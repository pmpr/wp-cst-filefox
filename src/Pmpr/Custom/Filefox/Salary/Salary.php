<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67cecadbdbe47             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Salary; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Custom\Filefox\Container; use Pmpr\Custom\Filefox\Salary\Model\PostOwner; use Pmpr\Custom\Filefox\Salary\Model\Team; use Pmpr\Custom\Filefox\Salary\Traffic\Traffic; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Model\Request; class Salary extends Container { const susokqyqcmqomwqk = 'team'; const mwisuqgywiccyykw = self::susokqyqcmqomwqk . Constants::mswocgcucqoaesaa; const aigwoicquyiqsiuo = 'post_owner' . Constants::mswocgcucqoaesaa; const icygkcucieasceuk = 'content_manager'; const emceseoyeswkikuu = 'content_producer'; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('init', [$this, 'wosimcsaucumweem'])->qcsmikeggeemccuu('save_post', [$this, 'iuyusgmkgaymuewa'], 10, 3); $this->waqewsckuayqguos('mdl__salary_request_fields_initialized', [$this, 'amsocuooqyqygmay'])->waqewsckuayqguos('mdl__salary_request_schemas_initialized', [$this, 'qwsuswogyceagoyu'])->waqewsckuayqguos('salary_request_accepted', [$this, 'gackgiuoewcgmyoa'], 10, 4)->waqewsckuayqguos('salary_rest_agreement_data', [$this, 'mwsickikuuuggcam'], 10, 2); } public function kgquecmsgcouyaya() { } public function mameiwsayuyquoeq() { Author::symcgieuakksimmu(); Traffic::symcgieuakksimmu(); ContentManager::symcgieuakksimmu(); ContentProducer::symcgieuakksimmu(); if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Team::symcgieuakksimmu(); } } public function cmcwcogimqyeakow($eeamcawaiqocomwy, $sqwmoeogqwooeukc, $ywmkwiwkosakssii) { return $eeamcawaiqocomwy; } public function iuyusgmkgaymuewa($gcqseksiskwueksc, $post) { $oquqsamoqkequssa = PostOwner::symcgieuakksimmu(); $woewcmgaacwwcmyy = $oquqsamoqkequssa->iekyeyicoyyawomk()->akkkoiiymmamsauc($gcqseksiskwueksc, Constants::kqigmeickowqiiyy); if (empty($woewcmgaacwwcmyy)) { $qscaoekmoooeuyqg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->mguqscccckuywsya($post); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $aqmwamyiwgeeymqa = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $qscaoekmoooeuyqg), $eqwoegegiamegqsm->megqywqeuquawkim(self::mwisuqgywiccyykw)->amwwousckkqyweok(), $eqwoegegiamegqsm->megqywqeuquawkim(self::mwisuqgywiccyykw, '0')->maqiysyuqmwcqoig('>')]); if ($aqmwamyiwgeeymqa) { $oquqsamoqkequssa->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::kqigmeickowqiiyy => $gcqseksiskwueksc, self::mwisuqgywiccyykw => $kueeocmceokoouqa->waecsyqmwascmqoa($aqmwamyiwgeeymqa, self::mwisuqgywiccyykw), $oquqsamoqkequssa::cmiegiycgiucucgs => $kueeocmceokoouqa->mwyqswsaeeewsosm($aqmwamyiwgeeymqa)]); } } } public function qwsuswogyceagoyu($kueeocmceokoouqa) { if ($kueeocmceokoouqa instanceof Model) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $kueeocmceokoouqa->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::susokqyqcmqomwqk)->acokiqqgsmoqaeyu()->kkeymosoimmgsaug()->gswweykyogmsyawy(__('Team', PR__CST__FILEFOX))->geimymogiqyssawi(Team::class, Team::ouesgysauomeocqm))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::aigwoicquyiqsiuo)->gswweykyogmsyawy(__('Post Owner', PR__CST__FILEFOX))->ckgquisaimmgwuyu(PostOwner::class))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::mwisuqgywiccyykw)->gswweykyogmsyawy(__('Team', PR__CST__FILEFOX))->jyumyyugiwwiqomk(2)->wuuqgaekqeymecag(Team::class, Team::mmwykkacqsucssgc)->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie, $mksyucucyswaukig, $meywaqqsugaoeyys, $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof Foreign) { if ($eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->woammqyeakuskkkk($eqgoocgaqwqcimie, $mksyucucyswaukig, $meywaqqsugaoeyys); } else { $mmsugugggqciomke = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if ($mmsugugggqciomke) { $ksuesqoiqqiiyqsq = $mmsugugggqciomke->iekyeyicoyyawomk()->akkkoiiymmamsauc($meywaqqsugaoeyys->mwyqswsaeeewsosm($mksyucucyswaukig), Team::ouesgysauomeocqm); if ($ksuesqoiqqiiyqsq) { $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->iysseyicgouwysgk($mmsugugggqciomke, $ksuesqoiqqiiyqsq); } else { $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->woammqyeakuskkkk($eqgoocgaqwqcimie, $mksyucucyswaukig, $meywaqqsugaoeyys); } } } } return $eqgoocgaqwqcimie; })); $qmywcaugisyyeqks = $kueeocmceokoouqa->uqeoyqiwywwmsiew(Constants::meksegaoamowuwoq); if ($qmywcaugisyyeqks) { $qmywcaugisyyeqks->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie, $mksyucucyswaukig, $meywaqqsugaoeyys) { $gcaumymoqegsygyi = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::squoamkioomemiyi => Constants::meksegaoamowuwoq, Constants::ckmqoekmugkggeym => $eqgoocgaqwqcimie]); if ($meywaqqsugaoeyys instanceof Model && ($meywaqqsugaoeyys->qcaekwgmiswccowk(Constants::weiosaewqequuyuq) || $meywaqqsugaoeyys->qcaekwgmiswccowk(Constants::ieioeisgwcgysukw))) { $wgkogsmkwskskgsw = $meywaqqsugaoeyys->waecsyqmwascmqoa($mksyucucyswaukig, self::mwisuqgywiccyykw); if ($wgkogsmkwskskgsw) { $eqgoocgaqwqcimie = sprintf("%s (%s)", $gcaumymoqegsygyi, __('Content Producer', PR__CST__FILEFOX)); } else { $mmsugugggqciomke = Team::symcgieuakksimmu(); $ksuesqoiqqiiyqsq = $mmsugugggqciomke->iekyeyicoyyawomk()->akkkoiiymmamsauc($meywaqqsugaoeyys->mwyqswsaeeewsosm($mksyucucyswaukig), Team::ouesgysauomeocqm); if ($ksuesqoiqqiiyqsq) { $eqgoocgaqwqcimie = sprintf("%s (%s)", $gcaumymoqegsygyi, __('Content Manager', PR__CST__FILEFOX)); } else { $eqgoocgaqwqcimie = $gcaumymoqegsygyi; } } } else { $eqgoocgaqwqcimie = $gcaumymoqegsygyi; } return $eqgoocgaqwqcimie; }); } } } public function amsocuooqyqygmay($kueeocmceokoouqa) { if ($kueeocmceokoouqa instanceof Model) { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $kueeocmceokoouqa->yyoqecggyacaseko()->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::mwisuqgywiccyykw)->ugquamoakekwyiqg(Team::class)); } } public function mwsickikuuuggcam($icwicymcioeyeyek, $xssuewsokckmigqk) : array { $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); $segkigmymysmwquw = $icwicymcioeyeyek[$mssuumukiiaqmcka::siwsmgcqgcqmaeui]; unset($icwicymcioeyeyek[$mssuumukiiaqmcka::siwsmgcqgcqmaeui], $icwicymcioeyeyek[$mssuumukiiaqmcka::weumemyqgykuwqok], $icwicymcioeyeyek[$mssuumukiiaqmcka::yykcmqogieykgkus]); $icwicymcioeyeyek[Constants::sqcsaeqsycmuiiso][Constants::qescuiwgsyuikume] = __('Cost of Internship', PR__CST__FILEFOX); $imeywacwecgemcco = $icwicymcioeyeyek[Constants::sqcsaeqsycmuiiso]; unset($icwicymcioeyeyek[Constants::sqcsaeqsycmuiiso]); switch ($mssuumukiiaqmcka->waecsyqmwascmqoa($xssuewsokckmigqk, $mssuumukiiaqmcka::iimaoeeqksicsawa)) { case self::emceseoyeswkikuu: $icwicymcioeyeyek['team_share'] = [Constants::qescuiwgsyuikume => __('Team Share', PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => sprintf(__('%s of total team sales', PR__CST__FILEFOX), $segkigmymysmwquw[Constants::ciyoccqkiamemcmm] ?? ''), Constants::qgqyauaqwqmqseim => IconInterface::kukgkqakogugoyuw]; $icwicymcioeyeyek['user_share'] = [Constants::qescuiwgsyuikume => __('User Share', PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => __('User-to-Team Traffic Ratio', PR__CST__FILEFOX), Constants::qgqyauaqwqmqseim => IconInterface::wqqgoiyyqicsycmm]; break; case self::icygkcucieasceuk: $icwicymcioeyeyek['manager_share'] = [Constants::qescuiwgsyuikume => __('Manager Share', PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => __('Percentage increase in team traffic divided by team size', PR__CST__FILEFOX), Constants::qgqyauaqwqmqseim => IconInterface::cyysmikkeoowmamq]; $icwicymcioeyeyek['manager_share_max'] = [Constants::qescuiwgsyuikume => __('Manager\'s share cap', PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $segkigmymysmwquw[Constants::ciyoccqkiamemcmm] ?? '', Constants::qgqyauaqwqmqseim => IconInterface::ssomcocoeueyoiwc]; break; } $icwicymcioeyeyek[Constants::sqcsaeqsycmuiiso] = $imeywacwecgemcco; return $icwicymcioeyeyek; } public function gackgiuoewcgmyoa($siquossayskcwkea, $mkucggyaiaukqoce, $ykyeuagqukagigki, $kueeocmceokoouqa) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); switch ($ykyeuagqukagigki) { case self::icygkcucieasceuk: $mmsugugggqciomke = Team::symcgieuakksimmu(); $ousomaowqseoamse = $kueeocmceokoouqa->mwyqswsaeeewsosm($siquossayskcwkea); if (!$mmsugugggqciomke->iekyeyicoyyawomk()->exists($this->caokeucsksukesyo()->skckwsgymkimyuwo()->gwumowwouoisykio([$mmsugugggqciomke::ouesgysauomeocqm => $ousomaowqseoamse]))) { $sogksuscggsicmac = Team::symcgieuakksimmu()->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::qescuiwgsyuikume => sprintf(__('Team of %s', PR__CST__FILEFOX), $yoiguusocukqeayg->ygwimyogyaqgumam($mkucggyaiaukqoce)), Team::ouesgysauomeocqm => $ousomaowqseoamse], true); $mmeioagwmyscwumo = 1; } break; case self::emceseoyeswkikuu: break; } } public function wosimcsaucumweem() { $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $cymcyywycwkawmsi = [self::icygkcucieasceuk => [Constants::qescuiwgsyuikume => __('Content Manager', PR__CST__FILEFOX), Constants::cecmeqwgqawkeieq => Constants::yaiacqocwcgmooio], self::emceseoyeswkikuu => [Constants::qescuiwgsyuikume => __('Content Producer', PR__CST__FILEFOX), Constants::cecmeqwgqawkeieq => Constants::iwascisiiokuackw]]; foreach ($cymcyywycwkawmsi as $uysmeyukoeyyqamq => $uiewakwqscemywuo) { if (!$ewgmommeawggyaek->aqciiewawiwecoou($uysmeyukoeyyqamq)) { $ewgmommeawggyaek->secqmksoyausymio($uysmeyukoeyyqamq, $uiewakwqscemywuo[Constants::qescuiwgsyuikume], $ewgmommeawggyaek->aqciiewawiwecoou($uiewakwqscemywuo[Constants::cecmeqwgqawkeieq])->capabilities); } } } }
