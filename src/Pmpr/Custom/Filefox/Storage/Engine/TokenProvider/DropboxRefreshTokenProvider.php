<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             653e6aafefa58             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Storage\Engine\TokenProvider; use GuzzleHttp\Exception\ClientException; use Pmpr\Common\Foundation\Helper\Traits\HelperTrait; use Pmpr\Common\Foundation\Wrapper\Traits\WrapperTrait; use Pmpr\Custom\Filefox\Storage\Model\Account; use Spatie\Dropbox\RefreshableTokenProvider; class DropboxRefreshTokenProvider implements RefreshableTokenProvider { use WrapperTrait, HelperTrait; const egsgekowigmiiyqu = "\x68\x74\x74\x70\163\x3a\57\x2f\x61\x70\x69\56\x64\162\x6f\160\142\x6f\x78\141\160\151\x2e\143\x6f\x6d\57\157\x61\x75\164\x68\x32\57\x74\157\x6b\x65\156"; protected $account = null; protected ?string $accessToken = null; protected ?string $appKey = null; protected ?string $appSecret = null; protected ?string $refreshToken = null; public function __construct($eiwicgsqoiaeawkk) { $this->appKey = $eiwicgsqoiaeawkk[Account::iygucymsgqqaamcs] ?? ''; $this->appSecret = $eiwicgsqoiaeawkk[Account::ewukeogsoagcawik] ?? ''; $this->refreshToken = $eiwicgsqoiaeawkk[Account::siumwmyaoyeyggeo] ?? ''; $this->sygeeqgwywmygsyu(); } public function refresh(ClientException $wgaoewqkwgomoaai) : bool { $kyaqoymukgkygmuw = false; if (!($wgaoewqkwgomoaai->ggyyccqeeokqcmis() == 401)) { goto qgegkeomwscwwiuw; } $this->accessToken = $this->yauswcseskuiuugc(); $kyaqoymukgkygmuw = true; qgegkeomwscwwiuw: return $kyaqoymukgkygmuw; } public function ssiskssmiocyygqo() : ?string { return $this->refreshToken; } public function sygeeqgwywmygsyu() : string { if ($this->accessToken) { goto qmiwsequckckoaei; } $this->accessToken = $this->yauswcseskuiuugc(); qmiwsequckckoaei: return $this->accessToken; } public function yauswcseskuiuugc() : ?string { $mgegoogckgsumooq = null; $kgccggmwkeukkkci = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\147\x72\x61\x6e\x74\137\x74\x79\x70\145" => "\x72\x65\x66\162\145\163\x68\137\x74\x6f\153\x65\x6e", "\162\x65\146\x72\145\163\x68\x5f\x74\157\153\145\x6e" => $this->ssiskssmiocyygqo()], self::egsgekowigmiiyqu); $keccaugmemegoimu = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->iyysycaqqccsmysy($kgccggmwkeukkkci, ["\x68\145\141\x64\x65\x72\x73" => ["\x43\157\x6e\x74\145\x6e\164\55\124\x79\160\145" => "\x61\x70\160\154\151\143\141\164\151\x6f\156\x2f\170\x2d\167\167\x77\55\146\x6f\162\155\55\165\162\154\145\156\x63\x6f\x64\x65\144", "\101\165\x74\150\157\162\151\x7a\141\x74\x69\x6f\x6e" => "\x42\141\163\x69\x63\x20" . base64_encode("{$this->appKey}\72{$this->appSecret}")]]); if (is_wp_error($keccaugmemegoimu)) { goto goeoymmqqqeeoime; } $mgegoogckgsumooq = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($keccaugmemegoimu["\142\157\x64\x79"])["\x61\x63\x63\x65\x73\x73\137\x74\157\x6b\145\156"]; goeoymmqqqeeoime: return $mgegoogckgsumooq; } }
