<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b7aac726925             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Storage\Engine\TokenProvider; use GuzzleHttp\Exception\ClientException; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Spatie\Dropbox\RefreshableTokenProvider; class DropboxRefreshTokenProvider implements RefreshableTokenProvider { use WrapperTrait, HelperTrait; const egsgekowigmiiyqu = "https://api.dropboxapi.com/oauth2/token"; protected $account = null; protected ?string $accessToken = null; protected ?string $appKey = null; protected ?string $appSecret = null; protected ?string $refreshToken = null; public function __construct($eiwicgsqoiaeawkk) { $this->appKey = $eiwicgsqoiaeawkk[Constants::iygucymsgqqaamcs] ?? ''; $this->appSecret = $eiwicgsqoiaeawkk[Constants::ewukeogsoagcawik] ?? ''; $this->refreshToken = $eiwicgsqoiaeawkk[Constants::siumwmyaoyeyggeo] ?? ''; $this->sygeeqgwywmygsyu(); } public function refresh(ClientException $wgaoewqkwgomoaai) : bool { $kyaqoymukgkygmuw = false; if ($wgaoewqkwgomoaai->ggyyccqeeokqcmis() == 401) { $this->accessToken = $this->yauswcseskuiuugc(); $kyaqoymukgkygmuw = true; } return $kyaqoymukgkygmuw; } public function ssiskssmiocyygqo() : ?string { return $this->refreshToken; } public function sygeeqgwywmygsyu() : string { if (!$this->accessToken) { $this->accessToken = $this->yauswcseskuiuugc(); } return $this->accessToken; } public function yauswcseskuiuugc() : ?string { $mgegoogckgsumooq = null; $kgccggmwkeukkkci = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(['grant_type' => 'refresh_token', 'refresh_token' => $this->ssiskssmiocyygqo()], self::egsgekowigmiiyqu); $keccaugmemegoimu = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->iyysycaqqccsmysy($kgccggmwkeukkkci, ['headers' => ['Content-Type' => 'application/x-www-form-urlencoded', 'Authorization' => 'Basic ' . base64_encode("{$this->appKey}:{$this->appSecret}")]]); if (!is_wp_error($keccaugmemegoimu)) { $mgegoogckgsumooq = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($keccaugmemegoimu['body'])['access_token']; } return $mgegoogckgsumooq; } }
