<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f86ae9042             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Filefox\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Custom\Filefox\Container; class Review extends Container { const ccswygewsoqekegy = 'highlight'; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('admin_init', [$this, 'akcummmocqiaekow']); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('woocommerce_product_reviews_table_column_type_content', [$this, 'wyicqmuyuqcoaykw'], 10, 2); } public function akcummmocqiaekow() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $aiamqeawckcsuaou = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::uqgcmmosieyimiku); if ($aiamqeawckcsuaou === 'toggle_highlight_review') { $gwgqcsmomamyqsmy = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::icwieiwoqeocywss); $qcwmmkiuqycwkkec = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::wwcyusosayomgoia); if (!$gwgqcsmomamyqsmy || !$qcwmmkiuqycwkkec) { wp_die(__('Your request is invalid.', PR__CST__FILEFOX)); } $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); if (!$gqusacuooiagkuom->yiqagusumqeyaegq($gwgqcsmomamyqsmy, 'toggle_highlight_review_' . $qcwmmkiuqycwkkec)) { wp_die(__('You do not have the necessary permission to do this.', PR__CST__FILEFOX)); } $kuowggqsyksiyygi = $this->caokeucsksukesyo()->yagekskwwyqosqcs(); $umwwsyyswwmwumim = $kuowggqsyksiyygi->igawqaomowicuayw(self::ccswygewsoqekegy, $qcwmmkiuqycwkkec); if ($umwwsyyswwmwumim) { $kuowggqsyksiyygi->smqukgcyacswysqa(self::ccswygewsoqekegy, $qcwmmkiuqycwkkec); $uamcoiueqaamsqma = __('Review dehighlighted.', PR__CST__FILEFOX); } else { $kuowggqsyksiyygi->ksmqawcowkmegigw(self::ccswygewsoqekegy, '1', $qcwmmkiuqycwkkec); $uamcoiueqaamsqma = __('Review highlighted.', PR__CST__FILEFOX); } $this->caokeucsksukesyo()->kwoycoqogoswycgg()->goouywsgcekeeccu($this, $uamcoiueqaamsqma, 'highlight_review', Constants::ckcawaoawwioqecq); $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->oiamiqcuyksmmomm([Constants::uqgcmmosieyimiku, Constants::icwieiwoqeocywss, Constants::wwcyusosayomgoia], $eiicaiwgqkgsekce->ekcymmyqoceukosc(true)); $gqusacuooiagkuom->gwqgmkqcgwwmweom($eeamcawaiqocomwy); exit; } } public function wyicqmuyuqcoaykw($ewgwqamkygiqaawc, $comment) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $kuowggqsyksiyygi = $this->caokeucsksukesyo()->yagekskwwyqosqcs(); $qcwmmkiuqycwkkec = $kuowggqsyksiyygi->iooowgsqoyqseyuu($comment); if ($qcwmmkiuqycwkkec) { $umwwsyyswwmwumim = $kuowggqsyksiyygi->igawqaomowicuayw(self::ccswygewsoqekegy, $qcwmmkiuqycwkkec); $wkaqekwwgqsqwcoi = $umwwsyyswwmwumim ? IconInterface::ggogmkgawkoeueyw : IconInterface::cugakkyeciwwckgs; $eeamcawaiqocomwy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->mwsmsuwkeaeymyag('edit.php', 'toggle_highlight_review_' . $qcwmmkiuqycwkkec); $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::imywcsggckkcywgk => 'product-reviews', Constants::uqgcmmosieyimiku => 'toggle_highlight_review', Constants::uouymeyqasaeckso => Constants::oguseymmyyoyaako, Constants::wwcyusosayomgoia => $qcwmmkiuqycwkkec], $eeamcawaiqocomwy); $ewgwqamkygiqaawc = $swqimwqeweekeusq->yuawgssgauywkiia($swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ['class' => 'icon-sm icon-primary mr-2']), $eeamcawaiqocomwy, [], $umwwsyyswwmwumim ? __('Dehighlight', PR__CST__FILEFOX) : __('Highlight', PR__CST__FILEFOX)) . $ewgwqamkygiqaawc; } return $ewgwqamkygiqaawc; } }
