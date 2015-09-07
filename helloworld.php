<?php

//enne faili convertida UTF-8 vormingusse. encode.
//muutujaid märgitakse $ märgiga.
//tühikuid ei saa kasutada, alakriips, väiketähed. semikoolon lõpp.
//ECHO - trükib välja lehele.

	//ei ole defaultina nähtav
	$first_name="Markus";

	$last_name="Wahlberg";

	//trükib välja. kasutades "." saab liita kui tahta ka sõnade vahele tühikut, siis see "" vahele.
	echo $first_name." ".$last_name; 

//<br> on break. ehk teeb vahe sisse
?>

<br> 

<?php

	$age = 18;
	//loogikatehted >; <; >=; <=; == (võrldemiseks); = (väärtuse omistamine);
	
	//if(loogikatehe){mis juhtub kui tõene}
	//else{mis juhtub kui väär}
	
	if($age < 18){
		echo "alaealine";
	}else{
		echo "täisealine";
	}

?>

<br>

<?php

for($i = 0; $i < $age; $i = $i + 1){
	//see, mida korratakse
	echo "palju".$i.", ";
}
echo "õnne";

?>