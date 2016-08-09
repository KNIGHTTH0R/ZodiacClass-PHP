<?PHP
/**
 * Document   : Zodiac Class
 * Author     : josephtinsley
 * Description: Simple php class that accepts a date string and returns a zodiac sign
 * http://twitter.com/josephtinsley 
*/

Class Zodiac {

    public static function sign($dateString) 
    {
        // CONVERT TO UNIX TIMESTAMP
        $dateVariable = strtotime($dateString);
        
        switch ($dateVariable):
            case $dateVariable >= strtotime('March 21, '. date('Y', time() ) ) && $dateVariable <= strtotime('April 19, '. date('Y', time() ) ); 
                return "Aries"; 

            case $dateVariable >= strtotime('April 20, '. date('Y', time() ) ) && $dateVariable <= strtotime('May 20, '. date('Y', time() ) ); 
                return "Taurus"; 

            case $dateVariable >= strtotime('May 21, '. date('Y', time() ) )   && $dateVariable <= strtotime('June 20, '. date('Y', time() ) ); 
                return "Gemini"; 

            case $dateVariable >= strtotime('June 21, '. date('Y', time() ) )  && $dateVariable <= strtotime('July 22, '. date('Y', time() ) ); 
                return "Cancer"; 

            case $dateVariable >= strtotime('July 23, '. date('Y', time() ) )  && $dateVariable <= strtotime('August 22, '. date('Y', time() ) ); 
                return "Leo"; 

            case $dateVariable >= strtotime('August 23, '. date('Y', time() ) ) && $dateVariable <= strtotime('September 22, '. date('Y', time() ) ); 
                return "Virgo"; 

            case $dateVariable >= strtotime('September 23, '. date('Y', time())) && $dateVariable <= strtotime('October 22, '. date('Y', time() ) ); 
                return "Libra"; 

            case $dateVariable >= strtotime('October 23, '. date('Y', time() ) ) && $dateVariable <= strtotime('November 21, '. date('Y', time() ) ); 
                return "Scorpio"; 

            case $dateVariable >= strtotime('November 22, '. date('Y', time() ) )&& $dateVariable <= strtotime('December 21, '. date('Y', time() ) ); 
                return "Sagittarius"; 

            case $dateVariable >= strtotime('December 22, '. date('Y', time() ) )&& $dateVariable <= strtotime('January 19, '. date('Y', time() ) ); 
                return "Capricorn"; 

            case $dateVariable >= strtotime('January 20, '. date('Y', time() ) ) && $dateVariable <= strtotime('February 18, '. date('Y', time() ) ); 
                return "Aquarius"; 

            case $dateVariable >= strtotime('February 19, '. date('Y', time() ) )&& $dateVariable <= strtotime('March 20, '. date('Y', time() ) ); 
                return  "Pisces"; 
        endswitch;
    } 

}//END CLASS

$dateString = date('Y-m-d',time()); //or $dateVariable = '2016-08-09';

Zodiac::sign($dateString);

