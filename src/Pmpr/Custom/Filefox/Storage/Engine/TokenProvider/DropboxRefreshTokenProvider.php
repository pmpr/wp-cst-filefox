<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678030cf0d2fa             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Storage\Engine\TokenProvider; use GuzzleHttp\Exception\ClientException; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Spatie\Dropbox\RefreshableTokenProvider; class DropboxRefreshTokenProvider implements RefreshableTokenProvider { use WrapperTrait, HelperTrait; const egsgekowigmiiyqu = "\150\x74\164\x70\x73\x3a\57\57\141\160\x69\x2e\144\162\157\160\142\157\x78\x61\160\x69\x2e\x63\157\x6d\x2f\157\x61\x75\x74\x68\x32\57\164\157\x6b\x65\156"; protected $account = null; protected ?string $accessToken = null; protected ?string $appKey = null; protected ?string $appSecret = null; protected ?string $refreshToken = null; public function __construct($eiwicgsqoiaeawkk) { $this->appKey = $eiwicgsqoiaeawkk[Constants::iygucymsgqqaamcs] ?? ''; $this->appSecret = $eiwicgsqoiaeawkk[Constants::ewukeogsoagcawik] ?? ''; $this->refreshToken = $eiwicgsqoiaeawkk[Constants::siumwmyaoyeyggeo] ?? ''; $this->sygeeqgwywmygsyu(); } public function refresh(ClientException $wgaoewqkwgomoaai) : bool { $kyaqoymukgkygmuw = false; if ($wgaoewqkwgomoaai->ggyyccqeeokqcmis() == 401) { $this->accessToken = $this->yauswcseskuiuugc(); $kyaqoymukgkygmuw = true; } return $kyaqoymukgkygmuw; } public function ssiskssmiocyygqo() : ?string { return $this->refreshToken; } public function sygeeqgwywmygsyu() : string { if (!$this->accessToken) { $this->accessToken = $this->yauswcseskuiuugc(); } return $this->accessToken; } public function yauswcseskuiuugc() : ?string { $mgegoogckgsumooq = null; $kgccggmwkeukkkci = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\147\x72\x61\x6e\x74\x5f\x74\x79\160\145" => "\x72\x65\x66\x72\145\x73\150\x5f\x74\157\153\145\156", "\162\145\x66\x72\x65\x73\x68\x5f\x74\x6f\153\x65\156" => $this->ssiskssmiocyygqo()], self::egsgekowigmiiyqu); $keccaugmemegoimu = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->iyysycaqqccsmysy($kgccggmwkeukkkci, ["\150\x65\141\x64\145\x72\x73" => ["\x43\157\156\164\145\156\164\55\x54\x79\160\x65" => "\x61\160\160\154\151\x63\141\164\151\x6f\x6e\x2f\170\x2d\167\x77\x77\55\x66\x6f\x72\155\55\165\162\x6c\145\x6e\x63\157\x64\145\x64", "\101\165\x74\150\157\x72\151\x7a\x61\164\x69\x6f\x6e" => "\x42\x61\x73\x69\x63\40" . base64_encode("{$this->appKey}\72{$this->appSecret}")]]); if (!is_wp_error($keccaugmemegoimu)) { $mgegoogckgsumooq = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($keccaugmemegoimu["\142\x6f\x64\171"])["\x61\x63\x63\145\x73\x73\x5f\x74\157\x6b\145\156"]; } return $mgegoogckgsumooq; } }
