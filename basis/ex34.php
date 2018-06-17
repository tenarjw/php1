<?php
/* 
Metody statyczne i encasulation
*/

class camelCase { 

    public static function fromUnderscore($ident) {
        if (!$ident) return $ident;
        $fragments = explode("_", $ident);
        var_dump($fragments);
        print lcfirst($fragment[0]);
        for ($i=1;$i<count($fragments);$i++) {
            print ucfirst($fragments[i]);
        }
        var_dump($fragments);
        $result='';
        foreach ($fragments as $f) {
            $result.=$f;
        }
        print 'Result='.$result;
        return $result;
    }
    
}      

echo(camelCase::fromUnderscore('Duze_piwo'));
