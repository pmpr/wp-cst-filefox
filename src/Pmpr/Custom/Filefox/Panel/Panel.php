<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9ebfdf2e77             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Panel; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Custom\Filefox\Panel\Controller\Performance; use Pmpr\Custom\Filefox\Panel\Controller\Profile; use Pmpr\Custom\Filefox\Panel\Controller\Single; use Pmpr\Custom\Filefox\Panel\Controller\Team; use Pmpr\Custom\Filefox\Salary\Salary; use Pmpr\Module\Panel\AbstractPanel; class Panel extends AbstractPanel { const cuaigiqyocksuyeu = 'diploma'; const swmckqswiekecqsa = 'associate'; const iagiougusiuaicee = 'bachelor'; const qcucmemccoeoomei = 'master'; const wseaemyocamskigg = 'doctoral'; const ceqqecaeikggiese = 'english'; const sqgiiscgoicesiaa = 'spanish'; const kmykmgwcqywcyoye = 'persian'; const uumoeuywekeaweca = 'french'; const kyuocwiiagackqsw = 'arabic'; const cogqkamguwykqeaq = 'chinese'; const ciuasyioaikmmskk = 'turkish'; public function __construct() { $this->name = Constants::ssmskyqgcmeiayco; parent::__construct(); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom('panel_profile_user_address_field', [$this, 'seskocuocecwmgcy'])->aqaqisyssqeomwom('panel_profile_postal_code_field', [$this, 'seskocuocecwmgcy'])->aqaqisyssqeomwom('panel_route_profile_children', [$this, 'kagwooockseuemkc'], 10, 2); $this->aqaqisyssqeomwom('get_user_educational_info', [$this, 'egqysqqmayeywqsg'], 10, 2); parent::kgquecmsgcouyaya(); } public function gigwcakmiyayoigw() { $this->ogyceaekywowkqsc(Team::symcgieuakksimmu())->ogyceaekywowkqsc(Single::symcgieuakksimmu())->ogyceaekywowkqsc(Profile::symcgieuakksimmu())->ogyceaekywowkqsc(Performance::symcgieuakksimmu()); } public function kosmwwayyqqowcya() : array { return [self::cuaigiqyocksuyeu => __('Diploma', PR__CST__FILEFOX), self::swmckqswiekecqsa => __('Associate', PR__CST__FILEFOX), self::iagiougusiuaicee => __('Bachelor', PR__CST__FILEFOX), self::qcucmemccoeoomei => __('Master', PR__CST__FILEFOX), self::wseaemyocamskigg => __('Doctoral', PR__CST__FILEFOX)]; } public function oiceouwgwuakccqu() : array { return [self::ceqqecaeikggiese => __('English', PR__CST__FILEFOX), self::kmykmgwcqywcyoye => __('Persian', PR__CST__FILEFOX), self::sqgiiscgoicesiaa => __('Spanish', PR__CST__FILEFOX), self::uumoeuywekeaweca => __('French', PR__CST__FILEFOX), self::ciuasyioaikmmskk => __('Turkish', PR__CST__FILEFOX), self::kyuocwiiagackqsw => __('Arabic', PR__CST__FILEFOX), self::cogqkamguwykqeaq => __('Chinese', PR__CST__FILEFOX)]; } public function egqysqqmayeywqsg($geysycsisgaocukc, $mkucggyaiaukqoce = null) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $sesuyskeswkcocue = $yoiguusocukqeayg->igawqaomowicuayw(Profile::mkqyqaucaimeomqo, $mkucggyaiaukqoce); $aiowsaccomcoikus = $yoiguusocukqeayg->igawqaomowicuayw(Profile::asgmocqsmywocsui, $mkucggyaiaukqoce); $cqicqawoweykccic = $yoiguusocukqeayg->igawqaomowicuayw(Profile::eqaymssaawwyssis, $mkucggyaiaukqoce); if ($sesuyskeswkcocue && $aiowsaccomcoikus && $cqicqawoweykccic) { $onsmgeqygauiquci = $this->kosmwwayyqqowcya(); if (isset($onsmgeqygauiquci[$cqicqawoweykccic])) { $geysycsisgaocukc = sprintf(__('%s of %s from %s', PR__CST__FILEFOX), $onsmgeqygauiquci[$cqicqawoweykccic], $aiowsaccomcoikus, $sesuyskeswkcocue); } } return $geysycsisgaocukc; } public function kagwooockseuemkc($okcscwesammossuq, $mkucggyaiaukqoce = null) { if ($mkucggyaiaukqoce && $this->caokeucsksukesyo()->issssuygyewuaswa()->askmkgcmgekiqwsg(Salary::icygkcucieasceuk, $mkucggyaiaukqoce)) { $okcscwesammossuq[] = $this->oeuiuocwuggewqmk('additional-info')->wiskakymeaywyeuw(false)->jyumyyugiwwiqomk(6)->gswweykyogmsyawy(__('Additional Information', PR__CST__FILEFOX))->saemoowcasogykak(IconInterface::ysiyommiiwyygmsa)->gucwmccyimoagwcm(__('Update your additional information', PR__CST__FILEFOX)); } return $okcscwesammossuq; } public function seskocuocecwmgcy($aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aiowsaccomcoikus->gucwmccyimoagwcm(sprintf('%s: %s', $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis(__('Notice', PR__CST__FILEFOX)), sprintf(__('The value of this field cannot be edited after it is saved and confirmed by %s.', PR__CST__FILEFOX), $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::NAME)))); } return $aiowsaccomcoikus; } public function sqwgomwcqysewuks($mkucggyaiaukqoce) : array { $ikamsuaiikaggcga = []; if ($this->wuksmomsmsykesim($mkucggyaiaukqoce)) { $ikamsuaiikaggcga = [$this->oeuiuocwuggewqmk($this->aakmagwggmkoiiyu())->faioisokmmaeimoo()->jyumyyugiwwiqomk(50)->gswweykyogmsyawy(__('Content Production', PR__CST__FILEFOX))->saemoowcasogykak(IconInterface::qwswqkseceoumgwy)->pmouaioykaoceyag($this->oeuiuocwuggewqmk('performance')->faioisokmmaeimoo()->gswweykyogmsyawy(__('Performance', PR__CST__FILEFOX))->saemoowcasogykak(IconInterface::cyysmikkeoowmamq)->gucwmccyimoagwcm(__('View your performance', PR__CST__FILEFOX))->pmouaioykaoceyag($this->oeuiuocwuggewqmk('me')->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__('My Performance', PR__CST__FILEFOX))->saemoowcasogykak(IconInterface::aqsqiwosusosquiu)->gucwmccyimoagwcm(__('My performance in attracting organic Google traffic', PR__CST__FILEFOX)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk('team')->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__('Team Performance', PR__CST__FILEFOX))->saemoowcasogykak(IconInterface::nweaiemiyieyyuwk)->gucwmccyimoagwcm(__('The performance of team producers in attracting organic Google traffic', PR__CST__FILEFOX))))->pmouaioykaoceyag($this->oeuiuocwuggewqmk('team')->qksaqgcokiqamueg('team/:id')->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__('Team', PR__CST__FILEFOX))->saemoowcasogykak(IconInterface::kukgkqakogugoyuw)->gucwmccyimoagwcm(__('Team Details', PR__CST__FILEFOX)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk('member')->qksaqgcokiqamueg('member/:id')->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__('Member', PR__CST__FILEFOX))->saemoowcasogykak(IconInterface::wqqgoiyyqicsycmm)->gucwmccyimoagwcm(__('Member Details', PR__CST__FILEFOX)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk('post')->qksaqgcokiqamueg('post/:id')->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__('Post', PR__CST__FILEFOX))->saemoowcasogykak(IconInterface::sqomikyigsmkymsk)->gucwmccyimoagwcm(__('Post Details', PR__CST__FILEFOX)))]; } return $ikamsuaiikaggcga; } public function yaegyqkcqwowauga() : array { $qoqgywiqgcmkwqgg = __('%s Traffic', PR__CST__FILEFOX); $goeggowaakacqiom = __('%s Aggregated Traffic', PR__CST__FILEFOX); return ['filefox' => ['tab' => [Constants::agwsswqikygewuuu => __('Overview', PR__CST__FILEFOX), 'users_performance' => __('Users Performance', PR__CST__FILEFOX), 'posts_traffic' => __('Page\'s Traffic', PR__CST__FILEFOX)], 'chart' => [Constants::kccekmguugamiusg => __('Monthly', PR__CST__FILEFOX), Constants::iqaiecywsaysmmkq => __('Weekly', PR__CST__FILEFOX), Constants::wmasmcgmyeoaisoa => __('Daily', PR__CST__FILEFOX), 'series' => ['post' => sprintf($qoqgywiqgcmkwqgg, __('Post', PR__CST__FILEFOX)), 'team' => sprintf($qoqgywiqgcmkwqgg, __('Team', PR__CST__FILEFOX)), 'request' => sprintf($qoqgywiqgcmkwqgg, __('Content Producer', PR__CST__FILEFOX))], 'yaxis' => ['post' => sprintf($goeggowaakacqiom, __('Post', PR__CST__FILEFOX)), 'team' => sprintf($goeggowaakacqiom, __('Team', PR__CST__FILEFOX)), 'request' => sprintf($goeggowaakacqiom, __('Content Producer', PR__CST__FILEFOX))]], 'action' => ['join_team' => __('Join Team', PR__CST__FILEFOX), 'check_code' => __('Check Code', PR__CST__FILEFOX)], 'column' => ['user' => __('Name of User', PR__CST__FILEFOX), 'join_date' => __('Join Date', PR__CST__FILEFOX), 'post_count' => __('Posts Count', PR__CST__FILEFOX), 'all_traffic' => __('All Traffic', PR__CST__FILEFOX), 'last_month_traffic' => sprintf(__('Performance of %s', PR__CST__FILEFOX), $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom(strtotime('-1 month'), 'F Y')), 'this_month_traffic' => sprintf(__('Performance of %s', PR__CST__FILEFOX), $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom(date('Y-m-d'), 'F Y'))]]]; } public function wuksmomsmsykesim($mkucggyaiaukqoce) : bool { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); return $yoiguusocukqeayg->askmkgcmgekiqwsg(Salary::emceseoyeswkikuu, $mkucggyaiaukqoce) || $yoiguusocukqeayg->askmkgcmgekiqwsg(Salary::icygkcucieasceuk, $mkucggyaiaukqoce); } }
