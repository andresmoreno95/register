<? php 

clase validarHash {
    privado  $ hash_1 ;
    privado  $ hash_2 ;
    privado  $ dinero ;


     función  pública __construct ( $ hash_1 , $ hash_2 , $ dinero )
    {
        $ this -> hash_1 = $ hash_1 ;
        $ this -> hash_2 = $ hash_2 ;
        $ this -> dinero = $ dinero ;
    }
    // Metodos de validar información
 función  pública validarInfo ( $ h1 , $ h2 , $ d ) {
    // VALIDAMOS EL TAMAÑO DE LOS HASH
    if ( strlen ( $ h1 ) == 40 && strlen ( $ h2 ) == 40 ) {
        $ mensaje = "Sus dos llaves HASH son correctos" . "<br />" ;
    } más {
        if ( strlen ( $ h1 )! = 40 ) {
            $ mensaje = 'Hash 2 valido -------- Hash1 no tiene la longitud adecuada - tiene' . strlen ( $ h1 ). 'caracteres' . "<br />" ;
        } else  if ( strlen ( $ h2 )! = 40 ) {
            $ mensaje = 'Hash 1 valido -------- Hash2 no tiene la longitud adecuada -tiene' . strlen ( $ h2 ). 'caracteres' . "<br />" ;
        } 
    }
    // VALIDAR QUE LO INGRESADO EN DINERO SOLO SEAN NUMEROS
    if ( $ d === 0 ) {
        $ mensaje1 = "El monto ingresado no corresponde a un valor numérico" . "<br />" ;
    } más {
        $ mensaje1 = "El monto ingresado esta correcto" ;
    }

    
}
}
$ Informacion = json_encode ( $ mensaje , $ mensaje1 );
return  $ Informacion ;


?>