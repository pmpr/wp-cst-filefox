<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6793da2a64aaa             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Storage\Engine; use Pmpr\Custom\Filefox\Container; abstract class Engine extends Container { protected $client = null; protected $account = null; public function __construct($eiwicgsqoiaeawkk) { $this->account = $eiwicgsqoiaeawkk; parent::__construct(); } public function wmciwsucuuyumkes() { return $this->client; } public function gmooemokieoeokag(string $uusmaiomayssaecw) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->account, $uusmaiomayssaecw); } public abstract function aaaycaqymuikesme($aiooqyausygaasqm) : string; public abstract function aqccqyskogogkaak($aiooqyausygaasqm) : bool; public abstract function cgwsoaeeaomscacg($aiooqyausygaasqm) : bool; public abstract function uagqwamoeaygcmmc($aiooqyausygaasqm) : bool; public function amqagusacuuuaswg($aiooqyausygaasqm) : string { return (string) $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ckoygqywcuqasqea($aiooqyausygaasqm); } public function kockgkymesyqiueg(string $mkomwsiykqigmqca) : string { return (string) str_replace($this->caokeucsksukesyo()->iuekyyeesukysksy()->oemywwmmmiywiqai("\142\141\x73\145\144\x69\162"), '', $mkomwsiykqigmqca); } }
