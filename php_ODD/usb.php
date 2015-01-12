<?php
 interface USB{
	function load();
	function run();
	function stop();
	} 
class computer{
		function useusb(USB $usb){
			$usb->load();
			$usb->run();
			$usb->stop();
		}
	}
class worker{
		function work(){
			$c=new computer();
			$m=new mouse();
			$c->useusb($m);
		}	

	}
class mouse implements USB{
		function load(){
			echo "11111111111111111111111<br>";
			}
		function run(){

			echo "22222222222222222222222222<br>";
			}
		function stop(){
			echo "33333333333333333333333<br>";
			}
}
$w=new worker();
$w->work();
?>
