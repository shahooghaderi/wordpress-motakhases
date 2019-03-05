<?php
trait log{
    public function logger()
    {
        echo "loged ok";
    }
    public function kos(){
        echo "shoma sahebe yek koose besyar khoshkel o naz o sefid o andam tamiz o por o kamar barik o kos sorati kos topole kos tange koon sefid koon narme koontamize khordani o hahavasi o asheghe o sangin o khostip o saqqezi o 24 sale o dastnakhorde o ba adab o ba shakhsiat shodid.  mobarake o lezate donya male to shod shahoo joni";
    }
}
class sample{
    use log;
}
(new sample())->logger();
(new sample())->kos();