<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e169312277b             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Salary; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\Database\Schema\Foreign; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Custom\Filefox\Container; use Pmpr\Custom\Filefox\Salary\Model\PostOwner; use Pmpr\Custom\Filefox\Salary\Model\Team; use Pmpr\Custom\Filefox\Salary\Traffic\Traffic; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Model\Request; use WP_Query; class Salary extends Container { const susokqyqcmqomwqk = 'team'; const mwisuqgywiccyykw = self::susokqyqcmqomwqk . Constants::mswocgcucqoaesaa; const aigwoicquyiqsiuo = 'post_owner' . Constants::mswocgcucqoaesaa; const icygkcucieasceuk = 'content_manager'; const emceseoyeswkikuu = 'content_producer'; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('init', [$this, 'wosimcsaucumweem'])->qcsmikeggeemccuu('save_post', [$this, 'iuyusgmkgaymuewa'], 10, 3); $this->waqewsckuayqguos('mdl__salary_request_fields_initialized', [$this, 'amsocuooqyqygmay'])->waqewsckuayqguos('mdl__salary_request_schemas_initialized', [$this, 'qwsuswogyceagoyu'])->waqewsckuayqguos('salary_request_accepted', [$this, 'gackgiuoewcgmyoa'], 10, 4)->waqewsckuayqguos('salary_rest_agreement_data', [$this, 'mwsickikuuuggcam'], 10, 2); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('user_has_cap', [$this, 'mcmiqgikusguqyeg'], 10, 3); } public function mameiwsayuyquoeq() { Author::symcgieuakksimmu(); Traffic::symcgieuakksimmu(); ContentManager::symcgieuakksimmu(); ContentProducer::symcgieuakksimmu(); if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Team::symcgieuakksimmu(); } } public function mcmiqgikusguqyeg($smiuugcoukoiceoq, $gkswkiicccswksiq, $ywmkwiwkosakssii) { $ycoeoaakqyskgykq = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->qyeguewwsmosqcwc(); if (isset($ywmkwiwkosakssii[2]) && 'edit_product' === $ywmkwiwkosakssii[0]) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get($ywmkwiwkosakssii[2]); if ($post && $seumokooiykcomco->gueasuouwqysmomu($post) === Constants::oguseymmyyoyaako) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $aqmwamyiwgeeymqa = null; if ($yoiguusocukqeayg->askmkgcmgekiqwsg(self::icygkcucieasceuk, $ycoeoaakqyskgykq)) { $aqmwamyiwgeeymqa = Request::symcgieuakksimmu()->mqosioycmusugmke($ycoeoaakqyskgykq, [$eqwoegegiamegqsm->megqywqeuquawkim(self::mwisuqgywiccyykw)->wegeyaguowmkqiac()]); } if (empty($aqmwamyiwgeeymqa)) { $aqmwamyiwgeeymqa = Request::symcgieuakksimmu()->mqosioycmusugmke($ycoeoaakqyskgykq, [$eqwoegegiamegqsm->megqywqeuquawkim(self::mwisuqgywiccyykw)->amwwousckkqyweok()]); } $smiuugcoukoiceoq[$gkswkiicccswksiq[0]] = $aqmwamyiwgeeymqa && PostOwner::symcgieuakksimmu()->aiwkayseywyckasm($post, $aqmwamyiwgeeymqa); } } return $smiuugcoukoiceoq; } public function wuyscicsywyuykmu($gqgemcmoicmgaqie) { global $pagenow; if ($pagenow === 'edit.php' && $gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_admin && $gqgemcmoicmgaqie->is_main_query() && $gqgemcmoicmgaqie->get(Constants::uouymeyqasaeckso) === Constants::oguseymmyyoyaako) { $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); if ($ewgmommeawggyaek->scmcyesmmikkucie('edit_products') && !$ewgmommeawggyaek->scmcyesmmikkucie('manage_woocommerce')) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $ewgmommeawggyaek->immcwcemcmyosyoo(); $ycoeoaakqyskgykq = $ewgmommeawggyaek->qyeguewwsmosqcwc(); $osyyiuiascsmyoym = $ycoeoaakqyskgykq; if ($yoiguusocukqeayg->askmkgcmgekiqwsg(self::icygkcucieasceuk, $mkucggyaiaukqoce)) { $mmsugugggqciomke = Team::symcgieuakksimmu(); $wgkogsmkwskskgsw = $mmsugugggqciomke->coyaqyocmqmmgeew($mkucggyaiaukqoce, Constants::gouqcwikiiygyasc); if ($wgkogsmkwskskgsw) { $yuymmscmyukcqgsg = $mmsugugggqciomke->gkqoequsgyikesue($wgkogsmkwskskgsw); if ($yuymmscmyukcqgsg) { $yuymmscmyukcqgsg[] = $ycoeoaakqyskgykq; $osyyiuiascsmyoym = implode(',', $yuymmscmyukcqgsg); } } } $gqgemcmoicmgaqie = $eqwoegegiamegqsm->ccwowuakmqoemoem($gqgemcmoicmgaqie, [Constants::iwascisiiokuackw => $osyyiuiascsmyoym]); } } return $gqgemcmoicmgaqie; } public function cmcwcogimqyeakow($eeamcawaiqocomwy, $sqwmoeogqwooeukc, $ywmkwiwkosakssii) { return $eeamcawaiqocomwy; } public function iuyusgmkgaymuewa($gcqseksiskwueksc, $post) { $oquqsamoqkequssa = PostOwner::symcgieuakksimmu(); $woewcmgaacwwcmyy = $oquqsamoqkequssa->iekyeyicoyyawomk()->akkkoiiymmamsauc($gcqseksiskwueksc, Constants::kqigmeickowqiiyy); if (empty($woewcmgaacwwcmyy)) { $qscaoekmoooeuyqg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->mguqscccckuywsya($post); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $aqmwamyiwgeeymqa = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $qscaoekmoooeuyqg), $eqwoegegiamegqsm->megqywqeuquawkim(self::mwisuqgywiccyykw)->amwwousckkqyweok(), $eqwoegegiamegqsm->megqywqeuquawkim(self::mwisuqgywiccyykw, '0')->maqiysyuqmwcqoig('>')]); if ($aqmwamyiwgeeymqa) { $oquqsamoqkequssa->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::kqigmeickowqiiyy => $gcqseksiskwueksc, self::mwisuqgywiccyykw => $kueeocmceokoouqa->waecsyqmwascmqoa($aqmwamyiwgeeymqa, self::mwisuqgywiccyykw), $oquqsamoqkequssa::cmiegiycgiucucgs => $kueeocmceokoouqa->mwyqswsaeeewsosm($aqmwamyiwgeeymqa)]); } } } public function qwsuswogyceagoyu($kueeocmceokoouqa) { if ($kueeocmceokoouqa instanceof Model) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $kueeocmceokoouqa->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::susokqyqcmqomwqk)->acokiqqgsmoqaeyu()->kkeymosoimmgsaug()->gswweykyogmsyawy(__('Team', PR__CST__FILEFOX))->geimymogiqyssawi(Team::class, Team::ouesgysauomeocqm))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::aigwoicquyiqsiuo)->gswweykyogmsyawy(__('Post Owner', PR__CST__FILEFOX))->ckgquisaimmgwuyu(PostOwner::class))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::mwisuqgywiccyykw)->gswweykyogmsyawy(__('Team', PR__CST__FILEFOX))->jyumyyugiwwiqomk(2)->wuuqgaekqeymecag(Team::class, Team::mmwykkacqsucssgc)->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie, $mksyucucyswaukig, $meywaqqsugaoeyys, $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof Foreign) { if ($eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->woammqyeakuskkkk($eqgoocgaqwqcimie, $mksyucucyswaukig, $meywaqqsugaoeyys); } else { $mmsugugggqciomke = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if ($mmsugugggqciomke) { $ksuesqoiqqiiyqsq = $mmsugugggqciomke->iekyeyicoyyawomk()->akkkoiiymmamsauc($meywaqqsugaoeyys->mwyqswsaeeewsosm($mksyucucyswaukig), Team::ouesgysauomeocqm); if ($ksuesqoiqqiiyqsq) { $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->iysseyicgouwysgk($mmsugugggqciomke, $ksuesqoiqqiiyqsq); } else { $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->woammqyeakuskkkk($eqgoocgaqwqcimie, $mksyucucyswaukig, $meywaqqsugaoeyys); } } } } return $eqgoocgaqwqcimie; })); $qmywcaugisyyeqks = $kueeocmceokoouqa->uqeoyqiwywwmsiew(Constants::meksegaoamowuwoq); if ($qmywcaugisyyeqks) { $qmywcaugisyyeqks->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie, $mksyucucyswaukig, $meywaqqsugaoeyys) { $gcaumymoqegsygyi = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::squoamkioomemiyi => Constants::meksegaoamowuwoq, Constants::ckmqoekmugkggeym => $eqgoocgaqwqcimie]); if ($meywaqqsugaoeyys instanceof Model && ($meywaqqsugaoeyys->qcaekwgmiswccowk(Constants::weiosaewqequuyuq) || $meywaqqsugaoeyys->qcaekwgmiswccowk(Constants::ieioeisgwcgysukw))) { $wgkogsmkwskskgsw = $meywaqqsugaoeyys->waecsyqmwascmqoa($mksyucucyswaukig, self::mwisuqgywiccyykw); if ($wgkogsmkwskskgsw) { $eqgoocgaqwqcimie = sprintf("%s (%s)", $gcaumymoqegsygyi, __('Content Producer', PR__CST__FILEFOX)); } else { $mmsugugggqciomke = Team::symcgieuakksimmu(); $ksuesqoiqqiiyqsq = $mmsugugggqciomke->iekyeyicoyyawomk()->akkkoiiymmamsauc($meywaqqsugaoeyys->mwyqswsaeeewsosm($mksyucucyswaukig), Team::ouesgysauomeocqm); if ($ksuesqoiqqiiyqsq) { $eqgoocgaqwqcimie = sprintf("%s (%s)", $gcaumymoqegsygyi, __('Content Manager', PR__CST__FILEFOX)); } else { $eqgoocgaqwqcimie = $gcaumymoqegsygyi; } } } else { $eqgoocgaqwqcimie = $gcaumymoqegsygyi; } return $eqgoocgaqwqcimie; }); } } } public function amsocuooqyqygmay($kueeocmceokoouqa) { if ($kueeocmceokoouqa instanceof Model) { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $kueeocmceokoouqa->yyoqecggyacaseko()->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::mwisuqgywiccyykw)->ugquamoakekwyiqg(Team::class)); } } public function mwsickikuuuggcam($icwicymcioeyeyek, $xssuewsokckmigqk) : array { $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); $segkigmymysmwquw = $icwicymcioeyeyek[$mssuumukiiaqmcka::siwsmgcqgcqmaeui]; unset($icwicymcioeyeyek[$mssuumukiiaqmcka::siwsmgcqgcqmaeui], $icwicymcioeyeyek[$mssuumukiiaqmcka::weumemyqgykuwqok], $icwicymcioeyeyek[$mssuumukiiaqmcka::yykcmqogieykgkus]); $icwicymcioeyeyek[Constants::sqcsaeqsycmuiiso][Constants::qescuiwgsyuikume] = __('Cost of Internship', PR__CST__FILEFOX); $imeywacwecgemcco = $icwicymcioeyeyek[Constants::sqcsaeqsycmuiiso]; unset($icwicymcioeyeyek[Constants::sqcsaeqsycmuiiso]); switch ($mssuumukiiaqmcka->waecsyqmwascmqoa($xssuewsokckmigqk, $mssuumukiiaqmcka::iimaoeeqksicsawa)) { case self::emceseoyeswkikuu: $icwicymcioeyeyek['team_share'] = [Constants::qescuiwgsyuikume => __('Team Share', PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => sprintf(__('%s of total team sales', PR__CST__FILEFOX), $segkigmymysmwquw[Constants::ciyoccqkiamemcmm] ?? ''), Constants::qgqyauaqwqmqseim => IconInterface::kukgkqakogugoyuw]; $icwicymcioeyeyek['user_share'] = [Constants::qescuiwgsyuikume => __('User Share', PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => __('User-to-Team Traffic Ratio', PR__CST__FILEFOX), Constants::qgqyauaqwqmqseim => IconInterface::wqqgoiyyqicsycmm]; break; case self::icygkcucieasceuk: $icwicymcioeyeyek['manager_share'] = [Constants::qescuiwgsyuikume => __('Manager Share', PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => __('Percentage increase in team traffic divided by team size', PR__CST__FILEFOX), Constants::qgqyauaqwqmqseim => IconInterface::cyysmikkeoowmamq]; $icwicymcioeyeyek['manager_share_max'] = [Constants::qescuiwgsyuikume => __('Manager\'s share cap', PR__CST__FILEFOX), Constants::ciyoccqkiamemcmm => $segkigmymysmwquw[Constants::ciyoccqkiamemcmm] ?? '', Constants::qgqyauaqwqmqseim => IconInterface::ssomcocoeueyoiwc]; break; } $icwicymcioeyeyek[Constants::sqcsaeqsycmuiiso] = $imeywacwecgemcco; return $icwicymcioeyeyek; } public function gackgiuoewcgmyoa($siquossayskcwkea, $mkucggyaiaukqoce, $ykyeuagqukagigki, $kueeocmceokoouqa) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); switch ($ykyeuagqukagigki) { case self::icygkcucieasceuk: $mmsugugggqciomke = Team::symcgieuakksimmu(); $ousomaowqseoamse = $kueeocmceokoouqa->mwyqswsaeeewsosm($siquossayskcwkea); $ksuesqoiqqiiyqsq = $mmsugugggqciomke->iekyeyicoyyawomk()->akkkoiiymmamsauc($ousomaowqseoamse, $mmsugugggqciomke::ouesgysauomeocqm); if (!$ksuesqoiqqiiyqsq) { $mmsugugggqciomke->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::qescuiwgsyuikume => sprintf(__('Team of %s', PR__CST__FILEFOX), $yoiguusocukqeayg->ygwimyogyaqgumam($mkucggyaiaukqoce)), Team::ouesgysauomeocqm => $ousomaowqseoamse], true); } break; case self::emceseoyeswkikuu: break; } } public function wosimcsaucumweem() { $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->oeowmqwauagmkkwu('ff_roles_reloaded', 1, function () { $cymcyywycwkawmsi = [self::icygkcucieasceuk => [Constants::qescuiwgsyuikume => __('Content Manager', PR__CST__FILEFOX), Constants::cecmeqwgqawkeieq => Constants::yaiacqocwcgmooio, Constants::mayesweykoooyugy => ['edit_products', 'edit_products', 'publish_products', 'manage_post_tags', 'manage_categories', 'manage_product_terms', 'edit_published_products']], self::emceseoyeswkikuu => [Constants::qescuiwgsyuikume => __('Content Producer', PR__CST__FILEFOX), Constants::cecmeqwgqawkeieq => Constants::iwascisiiokuackw, Constants::mayesweykoooyugy => ['edit_products', 'edit_published_products']]]; $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $sksmomeiauyqaomi = [ 'read' => true, 'upload_files' => true, 'manage_product_terms' => true, 'edit_posts' => true, 'publish_posts' => true, 'edit_others_posts' => true, 'delete_posts' => true, 'delete_others_posts' => true, 'edit_published_posts' => true, 'delete_published_posts' => true, 'edit_articles' => true, 'publish_articles' => true, 'edit_others_articles' => true, 'delete_articles' => true, 'delete_others_articles' => true, 'edit_published_articles' => true, 'delete_published_articles' => true, 'edit_products' => true, 'publish_products' => true, 'edit_others_products' => true, 'delete_products' => true, 'delete_others_products' => true, 'edit_published_products' => true, 'delete_published_products' => true, 'manage_categories' => true, 'edit_categories' => true, 'delete_categories' => true, 'assign_categories' => true, 'manage_post_tags' => true, 'edit_post_tags' => true, 'delete_post_tags' => true, 'assign_post_tags' => true, 'manage_material' => true, 'edit_material' => true, 'delete_material' => true, 'assign_material' => true, 'manage_application' => true, 'edit_application' => true, 'delete_application' => true, 'assign_application' => true, 'manage_medium' => true, 'edit_medium' => true, 'delete_medium' => true, 'assign_medium' => true, 'moderate_comments' => true, 'edit_comment' => true, 'delete_comment' => true, 'approve_comment' => true, 'edit_product_comments' => true, 'delete_product_comments' => true, 'moderate_product_comments' => true, ]; foreach ($cymcyywycwkawmsi as $uysmeyukoeyyqamq => $uiewakwqscemywuo) { $ewgmommeawggyaek->gcegsuoqiicquosg($uysmeyukoeyyqamq); if (!$ewgmommeawggyaek->aqciiewawiwecoou($uysmeyukoeyyqamq)) { $ewgmommeawggyaek->secqmksoyausymio($uysmeyukoeyyqamq, $uiewakwqscemywuo[Constants::qescuiwgsyuikume], $sksmomeiauyqaomi); } } }); } }
