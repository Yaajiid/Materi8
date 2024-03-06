<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>

<body>
    <h1>Berlatih String PHP</h1>
    <?php
echo "<h3> Soal No 1</h3>"; 
/* SOAL NO 1 Tunjukan dengan menggunakan echo berapa panjang dari string yang diberikan berikut! Tunjukkan juga jumlah kata di dalam kalimat tersebut!
Contoh: $string = "PHP is never old"; 
Output: 
Panjang string: 16, 
Jumlah kata: 4*/
$first_sentence = "Hello PHP!" ; // Panjang string 10, jumlah kata: 2
$second_sentence = "I'm ready for the challenges"; // Panjang string: 28, jumlah kata: 5 x1

//Setiap panjang dan kata akan dihitung pada first sentencer nya
$length_first_sentence = strlen($first_sentence);
$word_count_first_sentence = str_word_count($first_sentence);

echo "Panjang string: $length_first_sentence, 
    Jumlah kata: $word_count_first_sentence <br>";

//Setiap panjang dan kata akan dihitung pada second sentence nya
$length_second_sentence = strlen($second_sentence);
$word_count_second_sentence = str_word_count($second_sentence);

echo "Panjang string: $length_second_sentence,
    Jumlah kata: $word_count_second_sentence <br>";


echo "<h3> Soal No 2</h3>"; 
/* SOAL NO 2 Mengambil kata pada string dan karakter-karakter yang ada di dalamnya. */
$string2 = "I love PHP"; 
echo "<label>String: </label> \"$string2\" <br>";

//Mencoba untuk memecah string menjadi array dengan menggunakan fungsi explode
//Dan words itu merupakan hasil dari fungsi explode yang berisikan array berupa kata-kata
$words = explode(" ", $string2);
echo "Kata pertama: " . $words[0] . "<br>" ; 
// Lanjutkan di bawah ini 
echo "Kata kedua: " . $words[1] . "<br>"; 
echo "Kata Ketiga: " . $words[2] . "<br>" ;

echo "<h3> Soal No 3 </h3>"; 
/* SOAL NO 3 Mengubah karakter atau kata yang ada di dalam sebuah string. */
$string3 = "PHP is old but sexy!"; 
echo "String: \"$string3\" "; 

// Mencoba mengganti kata "sexy" di ubah menjadi "awesome"
$newString3 = str_replace("sexy", "awesome", $string3);
echo "OUTPUT \"$newString3\"";
// OUTPUT : "PHP is old but awesome" 
?>
</body>

</html>