<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654a12a259d1b             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Storage\Engine; use Pmpr\Custom\Filefox\Storage\Engine\TokenProvider\DropboxRefreshTokenProvider; use Spatie\Dropbox\Client; class Dropbox extends Engine { public function __construct($eiwicgsqoiaeawkk) { $this->client = new Client(new DropboxRefreshTokenProvider($eiwicgsqoiaeawkk)); parent::__construct($eiwicgsqoiaeawkk); } public function wmciwsucuuyumkes() : Client { return $this->client; } public function aaaycaqymuikesme($aiooqyausygaasqm) : string { $iwywmkygwewiamwm = ''; if (!($esaqeawoigqgagum = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->ckoygqywcuqasqea($aiooqyausygaasqm))) { goto aomysykcgikegiau; } $qcakkkwickkwyuck = $this->wmciwsucuuyumkes(); $mkomwsiykqigmqca = $this->kockgkymesyqiueg($esaqeawoigqgagum); $iwywmkygwewiamwm = $qcakkkwickkwyuck->getTemporaryLink($mkomwsiykqigmqca); aomysykcgikegiau: return $iwywmkygwewiamwm; } public function aqccqyskogogkaak($aiooqyausygaasqm) : bool { return false; } public function cgwsoaeeaomscacg($aiooqyausygaasqm) : bool { $igoyusqoooaqyksm = false; if (!($esaqeawoigqgagum = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->ckoygqywcuqasqea($aiooqyausygaasqm))) { goto cwwmimggaaecmucw; } $qcakkkwickkwyuck = $this->wmciwsucuuyumkes(); $ewgwqamkygiqaawc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->souwykwwmyygqyqi($aiooqyausygaasqm); $mkomwsiykqigmqca = $this->kockgkymesyqiueg($esaqeawoigqgagum); $sogksuscggsicmac = $qcakkkwickkwyuck->upload($mkomwsiykqigmqca, $ewgwqamkygiqaawc); $igoyusqoooaqyksm = true; cwwmimggaaecmucw: return $igoyusqoooaqyksm; } public function uagqwamoeaygcmmc($aiooqyausygaasqm) : bool { $ekmacukqumaiaquo = false; if (!($esaqeawoigqgagum = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->ckoygqywcuqasqea($aiooqyausygaasqm))) { goto awoaooyoeoyeeqee; } $qcakkkwickkwyuck = $this->wmciwsucuuyumkes(); $mkomwsiykqigmqca = $this->kockgkymesyqiueg($esaqeawoigqgagum); $sogksuscggsicmac = $qcakkkwickkwyuck->delete($mkomwsiykqigmqca); $ekmacukqumaiaquo = true; awoaooyoeoyeeqee: return $ekmacukqumaiaquo; } }
