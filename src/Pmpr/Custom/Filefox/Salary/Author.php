<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f86ae9042             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Salary; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Container; use Pmpr\Custom\Filefox\Salary\Model\Team; use WP_Query; class Author extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('pre_get_posts', [$this, 'aauaigwowequcmui'])->qcsmikeggeemccuu('template_redirect', [$this, 'uakqciiuqasocgoy']); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('the_author', [$this, 'qsogkgikkceycusc']); } public function uakqciiuqasocgoy() { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if ($mumyimcwkaemyyue->mykygowqgwcuecua()) { $qaqgaqikqmcmukem = $mumyimcwkaemyyue->mwyqswsaeeewsosm(); $oueqmgygagwgissk = Team::symcgieuakksimmu()->kgsmeyeecmqugkqc($qaqgaqikqmcmukem); if ($oueqmgygagwgissk && $qaqgaqikqmcmukem != $oueqmgygagwgissk) { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom($this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($oueqmgygagwgissk)); exit; } } } public function qsogkgikkceycusc($qscaoekmoooeuyqg) { global $post; $qaqgaqikqmcmukem = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->mguqscccckuywsya($post); $oueqmgygagwgissk = Team::symcgieuakksimmu()->kgsmeyeecmqugkqc($qaqgaqikqmcmukem); if ($oueqmgygagwgissk && $qaqgaqikqmcmukem != $oueqmgygagwgissk) { $qscaoekmoooeuyqg = $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->igawqaomowicuayw(Constants::cuyqkgecokgmcwqu, $oueqmgygagwgissk); } return $qscaoekmoooeuyqg; } public function aauaigwowequcmui($gqgemcmoicmgaqie) { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if ($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_main_query() && !$mumyimcwkaemyyue->goecwaaykqoaaagg()) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $qaqgaqikqmcmukem = $eqwoegegiamegqsm->get(Constants::iwascisiiokuackw, 0, $gqgemcmoicmgaqie); if ($qaqgaqikqmcmukem || $gqgemcmoicmgaqie->is_author()) { if (empty($qaqgaqikqmcmukem)) { $qaqgaqikqmcmukem = $mumyimcwkaemyyue->mwyqswsaeeewsosm(); } $mmsugugggqciomke = Team::symcgieuakksimmu(); $wgkogsmkwskskgsw = $mmsugugggqciomke->coyaqyocmqmmgeew($qaqgaqikqmcmukem, Constants::gouqcwikiiygyasc); if ($wgkogsmkwskskgsw) { $yuymmscmyukcqgsg = $mmsugugggqciomke->gkqoequsgyikesue($wgkogsmkwskskgsw); if ($yuymmscmyukcqgsg) { $yuymmscmyukcqgsg[] = $qaqgaqikqmcmukem; $gqgemcmoicmgaqie = $eqwoegegiamegqsm->ccwowuakmqoemoem($gqgemcmoicmgaqie, [Constants::iwascisiiokuackw => implode(',', $yuymmscmyukcqgsg)]); } } } } return $gqgemcmoicmgaqie; } }
