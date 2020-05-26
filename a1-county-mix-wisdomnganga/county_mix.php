<?php
/**
  Counties in the Republic of Kenya,Governors and their Political Parties.
*/

$county_data = "1. Mombasa. – Hassan Ali Joho – ODM,
2. Kwale. – Salim Mvurya – Jubilee,
3. Kilifi. – Amason Jeffah Kingi – ODM,
4. Tana River. – Dhadho Godhana – ODM,
5. Lamu. – Fahim Yasin Twaha – Jubilee,
6. Taita-Taveta. – Granton Samboja – WDM K,
7. Garissa. – Ali Bunow Korane – Jubilee,
8. Wajir. – Mohamed Abdi Mohamud – Jubilee,
9. Mandera. – Ali Ibrahim Roba - Jubilee,
10. Marsabit – Mohamud Mohamed Ali – Jubilee,
11. Isiolo – Mohamed Abdi Kuti – Independent,
12. Meru – Kiraitu Murungi – Jubilee,
13. Tharaka Nithi – Onesmus Muthomi Njuki – Jubilee,
14. Embu – Martin Nyaga Wambora – Jubilee,
15. Kitui – Charitu Ngilu – Narc Kenya,
16. Machakos – Alfred Mutua – CCM,
17. Makueni – Kivutha Kibwana – WDM K.,
18. Nyandarua – Francis Kimemia – Jubilee,
19. Nyeri – Mutahi Kahiga – Jubilee,
20. Kirinyaga. – Ann Waiguru – Jubilee,
21. Murang’a – Mwangi wa iria – Jubilee,
22. Kiambu. – Ferdinand Waititu Babayao – Jubilee,
23. Turkana. – Josphat Nanok – ODM,
24. West Pokot. – John Krop Lonyang’apuo. – KANU,
25. Samburu. – Moses Kasainie Lenolkulal – Jubilee,
26. Trans-Nzoia. – Patrick Khaemba – FORD Kenya,
27. Uasin gishu. – Jackson Mandago – Jubilee,
28. Elgeyo Marakwet. – Alex Tanui Tolgas – Jubilee,
29. Nandi. – Stephen Sang – Jubilee,
30. Baringo – Stanley K Kipris. – Jubilee,
31. Laikipia – Ndiritu Muriithi – Independent,
32. Nakuru. – Lee Kinyanjui – Jubilee,
33. Narok – Samuel Kuntai Ole Tunai – Jubilee,
34. Kajiado. – Joseph Ole Lenku – Jubilee,
35. Kericho. – Prof.Paul Chepkwony Kiprono – Jubilee,
36. Bomet. – Hillary Barchok – Jubilee,
37. Kakamega. – Wyclife Oparanya – ODM,
38. Vihiga. – Wilber Ottichilo – ODM,
39. Bungoma. – Wyclife Wafula Wangamiti – ODM,
40. Busia. – Sospeter Ojaamong – ODM,
41. Siaya. – Cornel Rasanga. – ODM,
42. Kisumu. – Peter Anyang Nyong’o. – ODM,
43. Homabay. – Cyprian Awiti – ODM,
44. Migori. – Zachary Okoth Obado – ODM,
45. Kisii. – James Ongware – ODM,
46. Nyamira. – John Nyangarama Obiena - ODM,
47. Nairobi. – Mike Sonko Mbuvi Kioko – Jubilee";

/**
 You should not modify anything above this line
*/

// @TODO : Your code starts here



$replace = str_replace( ".", ",", $county_data)




?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>


    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=2">


    <title>County Mix</title>
  </head>
  <body>


    <?php
    //The explode() function breaks a string into an array.
     $miniArr = $majArr = array();
     $key1 = 0;
     $change = str_replace(" – ", "," ,$county_data);
     $change2= str_replace(". ", ",", $change);
     $change3= str_replace(" - ", ",", $change2);
     $county_ar=explode(',', $change3);

    $chunks = array_chunk($county_ar, 4);
    $countJubilee = $countFord = $countNarc = $countKanu = $countodm = $countccm = $countwdmk = $countIndependent= $total = 0;
    ?>

    <div class="container">
    <table class="pure-table pure-table-bordered">
      <thead>
        <tr>
          <th style="text-align :left"width="30">#</th>
          <th style="text-align :left" width="100">Name</th>
          <th style="text-align :left" width="100">Governor</th>
          <th style="text-align :left" width="100">Website</th>
        </tr>
      </thead>
      <tbody>

        <?php
            //Making 4 column tables from values in the county_ar array
            foreach ($chunks as $chunk) { ?>
              <tr>
                <td><?php echo $chunk[0]; ?></td>
                <td><?php
                if (substr($chunk[1], -1)==".") {
                  $chunk[1]=str_replace(".", "" ,$chunk[1]);
                }
                 echo $chunk[1]; ?></td>
                <td><?php echo $chunk[2]; if ($chunk[3]=='ODM') {
                  echo '<img class="imageCSS" width="5%" src="images/odm.png">';
                  $countodm++;
                }if ($chunk[3]=='Jubilee') {
                  echo '<img class="imageCSS" width="5%" src="images/Jubilee_party.png">';
                  $countJubilee++;
                }if ($chunk[3]=='KANU') {
                  echo '<img class="imageCSS" width="5%" src="images/KANU.png">';
                  $countKanu++;
                }
                if ($chunk[3]=='CCM') {
                  echo '<img class="imageCSS" width="5%" src="images/chama cha mashinani.jpg">';
                  $countccm++;
                }
                if ($chunk[3]=='WDM K' || $chunk[3]=='WDM K.') {
                  echo '<img class="imageCSS" width="5%" src="images/Wiper.png">';
                  $countwdmk++;
                }
                if ($chunk[3]=='FORD Kenya') {
                  echo '<img class="imageCSS" width="5%" src="images/FORDKSIMBA.png">';
                  $countFord++;
                }
                if ($chunk[3]=='Independent') {
                  $countIndependent++;
                }
                if ($chunk[3]=='Narc Kenya') {
                  echo '<img class="imageCSS" width=5"%" src="images/Narc_Kenya_logo.jpg">';
                  $countNarc++;
                }
                ?></td>
                <td> <a href="<?php $total = $countccm + $countJubilee + $countIndependent + $countodm + $countFord + $countKanu + $countNarc + $countwdmk; $chunk[1]=str_replace(" ", "" ,$chunk[1]); echo 'http://'.strtolower($chunk[1]).'.go.ke'; ?>"><?php echo 'http://'.strtolower($chunk[1]).'.go.ke'; ?></a> </td>
              </tr>

          <?php  }

            ?>
      </tbody>


    </table>
    <tfoot>




        <tr>
            <th scope="row">Distribution of the political parties</th>

            <td>
            <p>Jubilee-   <?php echo $countJubilee ?></td></p>
            <p>ODM-       <?php echo $countodm ?></p>
            <p>Independent-<?php echo $countIndependent ?></p>
            <p>wdmk-      <?php echo $countwdmk ?></p>
            <p>Narc-       <?php echo $countNarc ?></p>
            <p>ccm-       <?php echo $countccm ?></p>
            <p>Ford-      <?php echo $countFord ?></p>
            <p>Kanu-      <?php echo $countKanu ?></p>

        </tr>
    </tfoot>
  </div>

  </body>
</html>
