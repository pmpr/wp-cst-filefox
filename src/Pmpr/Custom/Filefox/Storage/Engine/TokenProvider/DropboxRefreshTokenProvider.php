<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ebe450cfd             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Storage\Engine\TokenProvider; use GuzzleHttp\Exception\ClientException; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Spatie\Dropbox\RefreshableTokenProvider; class DropboxRefreshTokenProvider implements RefreshableTokenProvider { use WrapperTrait, HelperTrait; const egsgekowigmiiyqu = "\x68\x74\x74\x70\x73\x3a\57\x2f\141\x70\x69\x2e\x64\162\x6f\x70\142\x6f\x78\141\x70\151\56\143\157\x6d\x2f\x6f\141\165\164\150\x32\57\x74\x6f\x6b\x65\156"; protected $account = null; protected ?string $accessToken = null; protected ?string $appKey = null; protected ?string $appSecret = null; protected ?string $refreshToken = null; public function __construct($eiwicgsqoiaeawkk) { $this->appKey = $eiwicgsqoiaeawkk[Constants::iygucymsgqqaamcs] ?? ''; $this->appSecret = $eiwicgsqoiaeawkk[Constants::ewukeogsoagcawik] ?? ''; $this->refreshToken = $eiwicgsqoiaeawkk[Constants::siumwmyaoyeyggeo] ?? ''; $this->sygeeqgwywmygsyu(); } public function refresh(ClientException $wgaoewqkwgomoaai) : bool { $kyaqoymukgkygmuw = false; if (!($wgaoewqkwgomoaai->ggyyccqeeokqcmis() == 401)) { goto eqkauqciwewmgeoi; } $this->accessToken = $this->yauswcseskuiuugc(); $kyaqoymukgkygmuw = true; eqkauqciwewmgeoi: return $kyaqoymukgkygmuw; } public function ssiskssmiocyygqo() : ?string { return $this->refreshToken; } public function sygeeqgwywmygsyu() : string { if ($this->accessToken) { goto kwagwqyusyiyoaqs; } $this->accessToken = $this->yauswcseskuiuugc(); kwagwqyusyiyoaqs: return $this->accessToken; } public function yauswcseskuiuugc() : ?string { $mgegoogckgsumooq = null; $kgccggmwkeukkkci = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\x67\x72\x61\156\164\137\x74\171\160\x65" => "\162\145\146\x72\145\x73\x68\137\x74\x6f\x6b\x65\x6e", "\x72\x65\x66\162\x65\163\x68\x5f\x74\x6f\153\145\x6e" => $this->ssiskssmiocyygqo()], self::egsgekowigmiiyqu); $keccaugmemegoimu = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->iyysycaqqccsmysy($kgccggmwkeukkkci, ["\150\145\x61\144\x65\x72\163" => ["\x43\x6f\x6e\x74\x65\156\x74\55\x54\x79\x70\145" => "\141\160\x70\154\x69\x63\x61\164\x69\x6f\156\x2f\x78\x2d\x77\x77\x77\x2d\146\x6f\x72\x6d\55\x75\162\154\145\156\x63\x6f\x64\145\144", "\101\165\164\150\157\162\151\172\141\164\x69\157\156" => "\x42\x61\x73\151\143\40" . base64_encode("{$this->appKey}\72{$this->appSecret}")]]); if (is_wp_error($keccaugmemegoimu)) { goto yowsmsiyimmimemc; } $mgegoogckgsumooq = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($keccaugmemegoimu["\x62\x6f\x64\171"])["\x61\143\x63\x65\x73\163\x5f\164\x6f\153\x65\156"]; yowsmsiyimmimemc: return $mgegoogckgsumooq; } }
