<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e9a8e4bf558             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\CPT; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Container; class Post extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('init', [$this, 'suiyykkmicsguomu'])->qcsmikeggeemccuu('template_redirect', [$this, 'mgogsqikgegaymki']); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('post_link', [$this, 'oiacgcqyqggsieww'], 10, 2); } public function suiyykkmicsguomu() { $this->uwkmaywceaaaigwo()->kuggecgwaickowwu()->aimosgcaukumakge('^blog/page/([0-9]+)/?$', 'index.php?pagename=blog&post_type=post&paged=$matches[1]', 'top')->aimosgcaukumakge('^blog/(.+)/?$', 'index.php?post_type=post&name=$matches[1]', 'top'); } public function qyoawgsqiamocwis($kkeqqkkkqwkocsyu) { $kkeqqkkkqwkocsyu[] = 'paged'; return $kkeqqkkkqwkocsyu; } public function mgogsqikgegaymki() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->ksocgccowyqqmeii() && $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->kccakwkaqugygwmq(Constants::mswoacegomcucaik)) { $magawcseesgowoeo = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->sswiqkmqewcageua(); if (!preg_match('/^\\/blog\\//', $magawcseesgowoeo)) { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy('/blog' . $magawcseesgowoeo), 301); exit; } } } public function oiacgcqyqggsieww($migiiksoiymissge, $post) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if (Constants::wmmucsiyiyusmssm === $seumokooiykcomco->ucwmcwqmqwaymkkc($post) && Constants::mswoacegomcucaik === $seumokooiykcomco->gueasuouwqysmomu($post)) { $mkomwsiykqigmqca = parse_url($migiiksoiymissge, PHP_URL_PATH); $agoaugssmsiumiym = parse_url($migiiksoiymissge, PHP_URL_QUERY); $migiiksoiymissge = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy('/blog' . $mkomwsiykqigmqca); if ($agoaugssmsiumiym) { $migiiksoiymissge .= '?' . $agoaugssmsiumiym; } } return $migiiksoiymissge; } }
