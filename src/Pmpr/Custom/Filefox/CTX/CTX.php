<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f86ae9042             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\CTX; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Filefox\Container; class CTX extends Container { const caugamyyymiiqyyq = 'posts_fallback_image'; public function mameiwsayuyquoeq() { Medium::symcgieuakksimmu(); Material::symcgieuakksimmu(); Category::symcgieuakksimmu(); Application::symcgieuakksimmu(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('term_link', [$this, 'kucsyooaaqiseewe'], 999, 2)->cecaguuoecmccuse('post_thumbnail_id', [$this, 'kssousuaycouoqyi'], 10, 2)->cecaguuoecmccuse('post_thumbnail_url', [$this, 'csuwoiqsmmoqgmse'], 10, 3)->cecaguuoecmccuse('post_thumbnail_html', [$this, 'eueoqkskscqgeamm'], 10, 5)->cecaguuoecmccuse('woocommerce_product_get_image', [$this, 'eksomiekcocueikw'], 10, 4); $this->aqaqisyssqeomwom('taxonomy_single_value_modify_items', [$this, 'scoayamuyqgkcamg']); } public function kssousuaycouoqyi($saqqouasaaiakeei, $post) { if (empty($saqqouasaaiakeei)) { $gwmueqimemeoiqgm = $this->wgiwgooaqgkqwquc($post, null, [], Constants::gouqcwikiiygyasc); if ($gwmueqimemeoiqgm) { $saqqouasaaiakeei = $gwmueqimemeoiqgm; } } return $saqqouasaaiakeei; } public function csuwoiqsmmoqgmse($eeamcawaiqocomwy, $post, $oiegiwogmwmawkeo) { if (empty($eeamcawaiqocomwy)) { $gwmueqimemeoiqgm = $this->wgiwgooaqgkqwquc($post, $oiegiwogmwmawkeo, [], Constants::auqoykcmsiauccao); if ($gwmueqimemeoiqgm) { $eeamcawaiqocomwy = $gwmueqimemeoiqgm; } } return $eeamcawaiqocomwy; } public function eueoqkskscqgeamm($nsmgceoqaqogqmuw, $gcqseksiskwueksc, $saqqouasaaiakeei, $oiegiwogmwmawkeo, $wwgucssaecqekuek) { if (empty($saqqouasaaiakeei) || empty($nsmgceoqaqogqmuw)) { $gwmueqimemeoiqgm = $this->wgiwgooaqgkqwquc($gcqseksiskwueksc, $oiegiwogmwmawkeo, $wwgucssaecqekuek); if ($gwmueqimemeoiqgm) { $nsmgceoqaqogqmuw = $gwmueqimemeoiqgm; } } return $nsmgceoqaqogqmuw; } public function eksomiekcocueikw($mcqieaigyeeyaksm, $product, $oiegiwogmwmawkeo, $wisgiwskwawciiee) { $product = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->get($product); if ($product && empty($product->get_image_id())) { $gwmueqimemeoiqgm = $this->wgiwgooaqgkqwquc($product->get_id(), $oiegiwogmwmawkeo, $wisgiwskwawciiee); if ($gwmueqimemeoiqgm) { $mcqieaigyeeyaksm = $gwmueqimemeoiqgm; } } return $mcqieaigyeeyaksm; } public function wgiwgooaqgkqwquc($post, $oiegiwogmwmawkeo, $wwgucssaecqekuek, string $aqykuigiuwmmcieu = Constants::gsqoooskigukokks) { $uiyoomueciuykuss = [Constants::sususqikkuaoqeco => [Constants::qgciomgukmcwscqw, Constants::oeeqisiiqoswqqmy], Constants::oguseymmyyoyaako => [Constants::cmckeoksigiaqykc, Constants::oeeqisiiqoswqqmy]]; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $useksmwkuswkwcqg = $seumokooiykcomco->gueasuouwqysmomu($post); $cwugquwaukuuosaw = $uiyoomueciuykuss[$useksmwkuswkwcqg] ?? []; $gwmueqimemeoiqgm = ''; if ($cwugquwaukuuosaw) { foreach ($cwugquwaukuuosaw as $kesssewsiegssiya) { if ($iwewcwusemqaiggk = $seumokooiykcomco->kckogqkiycqeumoa($post, $kesssewsiegssiya)) { $kgimisgoummsagmu = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->igawqaomowicuayw($iwewcwusemqaiggk, self::caugamyyymiiqyyq); if ($kgimisgoummsagmu) { switch ($aqykuigiuwmmcieu) { case Constants::gouqcwikiiygyasc: $gwmueqimemeoiqgm = $kgimisgoummsagmu; break; case Constants::gsqoooskigukokks: $gwmueqimemeoiqgm = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->qaeeusqkgwagwaqc($kgimisgoummsagmu, $oiegiwogmwmawkeo, $wwgucssaecqekuek); break; case Constants::auqoykcmsiauccao: $gwmueqimemeoiqgm = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->iaykyouimqoikagg($kgimisgoummsagmu, $oiegiwogmwmawkeo); break; } if ($gwmueqimemeoiqgm) { break; } } } } } return $gwmueqimemeoiqgm; } public function scoayamuyqgkcamg($oammesyieqmwuwyi = []) { $oammesyieqmwuwyi[] = Constants::qgciomgukmcwscqw; $oammesyieqmwuwyi[] = Constants::cmckeoksigiaqykc; return $oammesyieqmwuwyi; } public function kucsyooaaqiseewe($iwywmkygwewiamwm, $iwewcwusemqaiggk) { $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($iwewcwusemqaiggk, Constants::ckmqoekmugkggeym); if (!$this->caokeucsksukesyo()->yyoeeseewqmmyaee()->cekoogweeooasayu($kesssewsiegssiya)) { $iwywmkygwewiamwm = ''; } return $iwywmkygwewiamwm; } }
