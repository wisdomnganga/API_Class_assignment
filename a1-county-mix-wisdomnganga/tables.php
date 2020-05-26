<?php

    function build_table($array){
    // start table

    $html = '<table>';
    // header row

    $html .= '<tr>';
    foreach($array[0] as $key=>$value){
            $html .= '<th>' . htmlspecialchars($key) . '</th>';
        }
    $html .= '</tr>';

    // data rows
    foreach( $array as $key=>$value){
        $html .= '<tr>';
        foreach($value as $key2=>$value2){
            $html .= '<td>' . htmlspecialchars($value2) . '</td>';
        }
        $html .= '</tr>';
    }

    // finish table and return it

    $html .= '</table>';
    return $html;
}


$array = array(
    array('#'=>'1', 'Name'=>'Mombasa', 'Governor'=>'Hassan Ali Joho', 'Website'=>'http://mombasa.go.ke', 'party'=>'ODM '),
    array('#'=>'2', 'Name'=>'Kwale', 'Governor'=>'Salim Mvurya', 'Website'=>'https://kwalecountygov.com/', 'party'=>'Jubilee '),
    array('#'=>'3', 'Name'=>'Kilifi', 'Governor'=>'Amason Jeffah Kingi', 'Website'=>'https://www.kilifi.go.ke/', 'party'=>'ODM '),
    array('#'=>'4', 'Name'=>'Tana River', 'Governor'=>'Dhadho Godhana', 'Website'=>'https://www.tanariver.go.ke/', 'party'=>'ODM '),
    array('#'=>'5', 'Name'=>'Lamu', 'Governor'=>'Fahim Yasin Twaha', 'Website'=>'http://lamu.go.ke/', 'party'=>'Jubilee '),
    array('#'=>'6', 'Name'=>'Taita-Taveta', 'Governor'=>'Granton Samboja', 'Website'=>'https://taitatavetaassembly.go.ke/', 'party'=>'WDM K '),
    array('#'=>'7', 'Name'=>'Garissa', 'Governor'=>'Ali Bunow Korane', 'Website'=>'https://garissa.go.ke/', 'party'=>'Jubilee '),
    array('#'=>'8', 'Name'=>'Wajir', 'Governor'=>'Mohamed Abdi Mohamud', 'Website'=>'https://www.wajir.go.ke/', 'party'=>'Jubilee '),
    array('#'=>'9', 'Name'=>'Mandera', 'Governor'=>'Ali Ibrahim Roba', 'Website'=>'https://mandera.go.ke/', 'party'=>'Jubilee '),
    array('#'=>'10', 'Name'=>'Marsabit', 'Governor'=>'Mohamud Mohamed Ali', 'Website'=>'https://marsabit.go.ke/ ', 'party'=>'Jubilee '),
    array('#'=>'11', 'Name'=>'Isiolo', 'Governor'=>'Mohamed Abdi Kuti', 'Website'=>'https://isiolo.go.ke/', 'party'=>'Independent '),
    array('#'=>'12', 'Name'=>'Meru', 'Governor'=>'Kiraitu Murungi', 'Website'=>'http://meru.go.ke/', 'party'=>'Jubilee '),
    array('#'=>'13', 'Name'=>'Tharaka Nithi', 'Governor'=>'Onesmus Muthomi Njuki', 'Website'=>'https://tharakanithi.go.ke/', 'party'=>'Jubilee '),
    array('#'=>'14', 'Name'=>'Embu', 'Governor'=>'Martin Nyaga Wambora', 'Website'=>'https://www.embu.go.ke/', 'party'=>'Jubilee '),
    array('#'=>'15', 'Name'=>'Kitui', 'Governor'=>'Charitu Ngilu', 'Website'=>'https://www.kitui.go.ke/', 'party'=>'Narc Kenya '),
    array('#'=>'16', 'Name'=>'Machakos', 'Governor'=>'Alfred Mutua', 'Website'=>'https://machakosgovernment.co.ke/', 'party'=>'CCM '),
    array('#'=>'17', 'Name'=>'Makueni', 'Governor'=>'Kivutha Kibwana', 'Website'=>'https://makueni.go.ke/', 'party'=>'WDM K '),
    array('#'=>'18', 'Name'=>'Nyandarua', 'Governor'=>'Francis Kimemia', 'Website'=>'http://www.nyandarua.go.ke/', 'party'=>'Jubilee '),
    array('#'=>'19', 'Name'=>'Nyeri', 'Governor'=>'Mutahi Kahiga', 'Website'=>'http://www.nyeri.go.ke/', 'party'=>'Jubilee '),
    array('#'=>'20', 'Name'=>'Kirinyaga', 'Governor'=>'Ann Waiguru', 'Website'=>'https://www.kirinyaga.go.ke/', 'party'=>'Jubilee '),
    array('#'=>'21', 'Name'=>'Murang’a', 'Governor'=>'Mwangi wa iria', 'Website'=>'https://muranga.go.ke/', 'party'=>'Jubilee '),
    array('#'=>'22', 'Name'=>'Kiambu', 'Governor'=>'Ferdinand Waititu Babayao', 'Website'=>'https://kiambu.go.ke/', 'party'=>'Jubilee '),
    array('#'=>'23', 'Name'=>'Turkana', 'Governor'=>'Josphat Nanok', 'Website'=>'https://www.turkana.go.ke/', 'party'=>'ODM '),
    array('#'=>'24', 'Name'=>'West Pokot', 'Governor'=>'John Krop Lonyang’apuo', 'Website'=>'http://www.westpokot.go.ke/', 'party'=>'KANU '),
    array('#'=>'25', 'Name'=>'Samburu', 'Governor'=>'Moses Kasainie Lenolkulal', 'Website'=>' https://www.samburu.go.ke/.', 'party'=>'Jubilee '),
    array('#'=>'26', 'Name'=>'Trans-Nzoia', 'Governor'=>'Patrick Khaemba', 'Website'=>'https://www.transnzoia.go.ke/', 'party'=>'FORD Kenya '),
    array('#'=>'27', 'Name'=>'Uasin gishu', 'Governor'=>'Jackson Mandago', 'Website'=>' https://www.uasingishu.go.ke/.', 'party'=>'Jubilee '),
    array('#'=>'28', 'Name'=>'Elgeyo Marakwet', 'Governor'=>'Alex Tanui Tolgas', 'Website'=>'https://elgeyomarakwet.go.ke/', 'party'=>'Jubilee '),
    array('#'=>'29', 'Name'=>'Nandi', 'Governor'=>'Stephen Sang', 'Website'=>'https://nandicounty.go.ke/', 'party'=>'Jubilee '),
    array('#'=>'30', 'Name'=>'Baringo', 'Governor'=>'Stanley K Kipris', 'Website'=>'http://www.baringo.go.ke/', 'party'=>'Jubilee '),
    array('#'=>'31', 'Name'=>'Laikipia', 'Governor'=>'Ndiritu Muriithi', 'Website'=>'https://laikipia.go.ke/', 'party'=>'Independent '),
    array('#'=>'32', 'Name'=>'Nakuru', 'Governor'=>'Lee Kinyanjui', 'Website'=>'https://nakuru.go.ke/', 'party'=>'Jubilee '),
    array('#'=>'33', 'Name'=>'Narok', 'Governor'=>'Samuel Kuntai Ole Tunai', 'Website'=>'http://www.narok.go.ke/.', 'party'=>'Jubilee '),
    array('#'=>'34', 'Name'=>'Kajiado', 'Governor'=>'Joseph Ole Lenku', 'Website'=>'https://www.kajiado.go.ke/', 'party'=>'Jubilee '),
    array('#'=>'35', 'Name'=>'Kericho', 'Governor'=>'Prof.Paul Chepkwony Kiprono', 'Website'=>'https://www.kericho.go.ke/', 'party'=>'Jubilee '),
    array('#'=>'36', 'Name'=>'Bomet', 'Governor'=>'Hillary Barchok', 'Website'=>'https://bomet.go.ke/', 'party'=>'Jubilee '),
    array('#'=>'37', 'Name'=>'Kakamega', 'Governor'=>'Wyclife Oparanya', 'Website'=>'https://kakamega.go.ke/', 'party'=>'ODM '),
    array('#'=>'38', 'Name'=>'Vihiga', 'Governor'=>'Wilber Ottichilo', 'Website'=>'https://www.vihiga.go.ke/', 'party'=>'ODM '),
    array('#'=>'39', 'Name'=>'Bungoma', 'Governor'=>'Wyclife Wafula Wangamiti', 'Website'=>'https://bungoma.go.ke/', 'party'=>'ODM '),
    array('#'=>'40', 'Name'=>'Busia', 'Governor'=>'Sospeter Ojaamong', 'Website'=>'https://busiacounty.go.ke/', 'party'=>'ODM '),
    array('#'=>'41', 'Name'=>'Siaya', 'Governor'=>'Cornel Rasanga', 'Website'=>'http://siaya.go.ke/', 'party'=>'ODM '),
    array('#'=>'42', 'Name'=>'Kisumu', 'Governor'=>'Peter Anyang Nyong’o.', 'Website'=>'https://www.kisumu.go.ke/', 'party'=>'ODM '),
    array('#'=>'43', 'Name'=>'Homabay', 'Governor'=>'Cyprian Awiti', 'Website'=>'https://www.homabay.go.ke/', 'party'=>'ODM '),
    array('#'=>'44', 'Name'=>'Migori', 'Governor'=>'Zachary Okoth Obado', 'Website'=>'https://migori.go.ke/', 'party'=>'ODM '),
    array('#'=>'45', 'Name'=>'Kisii', 'Governor'=>'James Ongware', 'Website'=>'https://www.kisii.go.ke/', 'party'=>'ODM '),
    array('#'=>'46', 'Name'=>'Nyamira', 'Governor'=>'John Nyangarama Obiena', 'Website'=>'http://www.nyamira.go.ke/', 'party'=>'ODM '),
    array('#'=>'47', 'Name'=>'Nairobi', 'Governor'=>'Mike Sonko Mbuvi Kioko', 'Website'=>'https://nairobi.go.ke/', 'party'=>'Jubilee ')






);

echo build_table($array);
?>
