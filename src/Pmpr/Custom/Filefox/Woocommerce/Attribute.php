<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e169312277b             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Custom\Filefox\Container; class Attribute extends Container { const kwwyokyacswyaoig = 'top'; const eaiyqykmyaigsiik = 'loop'; const kauwiamcaiqkceek = 'cart'; const qcccwewykmsomogy = 'normal'; const sekieukoiiqyocew = 'attribute_'; const eaqimouueykcoogy = self::sekieukoiiqyocew . Constants::qgqyauaqwqmqseim; const myksoyqyimugscyw = self::sekieukoiiqyocew . 'types'; public function wigskegsqequoeks() { $this->waqewsckuayqguos('render_product_attributes', [$this, 'mqwsaikucmocaikw']); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom('woocommerce_local_attribute_custom_fields', [$this, 'aquigkmeoeiggmam']); } public function mqwsaikucmocaikw(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ['view_more_icon' => IconInterface::qgoggkoqemeaqyqy, Constants::squoamkioomemiyi => self::kwwyokyacswyaoig, Constants::qescuiwgsyuikume => __('Attributes', PR__CST__FILEFOX), Constants::oguseymmyyoyaako => $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(), Constants::ceyqggmwsusggwok => Constants::agaisgmugicmioge, Constants::muosaosesymsueea => Constants::wikgqsqysyuoykse, Constants::oeouaqyskusqoasi => __('View All Attributes', PR__CST__FILEFOX), Constants::ksiswygussyugiue => IconInterface::akoyqksyocguggwc]); $product = $ywmkwiwkosakssii[Constants::oguseymmyyoyaako]; if ($product) { $ywmkwiwkosakssii[Constants::iikosyqiawkweouo] = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->gywsmekygqwieocq($product, [Constants::squoamkioomemiyi => $ywmkwiwkosakssii[Constants::squoamkioomemiyi] ?? self::kwwyokyacswyaoig]); $this->iuygowkemiiwqmiw('index', $ywmkwiwkosakssii, [Constants::qaacaqioeyiuakeu => true]); } } public function aquigkmeoeiggmam($ikgwqyuyckaewsow) { $ikgwqyuyckaewsow[Constants::squoamkioomemiyi] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec(self::myksoyqyimugscyw)->gswweykyogmsyawy(__('Attribute Type', PR__CST__FILEFOX))->mkmssscwmeekwgqo()->oikgogcweiiaocka()->acauweqyyugwisqc([self::qcccwewykmsomogy => __('Show in attributes area', PR__CST__FILEFOX), self::eaiyqykmyaigsiik => __('Show in loop area', PR__CST__FILEFOX), self::kauwiamcaiqkceek => __('Show in cart item', PR__CST__FILEFOX), self::kwwyokyacswyaoig => __('Show in top of single', PR__CST__FILEFOX)])->eyygsasuqmommkua(self::qcccwewykmsomogy); return $ikgwqyuyckaewsow; } }
