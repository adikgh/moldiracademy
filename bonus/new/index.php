<? include "../../config/core.php";

	if ($_GET['v'] == 1) {
		$v = 'jYYz-bkJql8';
		$name = 'Зиянды жаттығулар зардабы';
	}
	else if ($_GET['v'] == 2) {
		$v = 'PqQ7NHfy3K0';
		$name = 'Баланы қатты құндақтау қаншалықты дұрыс?';
	}
	else if ($_GET['v'] == 3) {
		$v = 'HXE5WS0cMmY';
		$name = 'Жаралы солдан болып еңбектеуді неге түзету керек?';
	}


   // $site_set['header'] = false;
   // $site_set['footer'] = false;
   // $site_set['swiper'] = true;
   $site_set['plyr'] = true;
   $css = ['bonus'];
   // $js = ['course/mamapro'];
?>
<? include "../../block/header.php"; ?>

   <div class="">
      <div class="bl_c">
         <div class="bonus">
            <h4 class="bonus_name"><?=$name?></h4>
            <div class="bonus_c">
               <div class="bonus_l">
                  <div class="player_o7" data-plyr-provider="youtube" data-plyr-embed-id="<?=$v?>"></div>
               </div>
            </div>

         </div>
      </div>
   </div>

<? include "../../block/footer.php"; ?>

   <script>
      const player_o7 = new Plyr(".player_o7", {
         fullscreen: {iosNative: true},
         controls: ['play-large', 'play', 'progress', 'current-time',  'fullscreen'],
         poster: '/assets/img/result/chrome_0oD9KqL9vH.jpg',
      });
   </script>