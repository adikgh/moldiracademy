<? include "../../config/core.php";

	if ($_GET['v'] == 1) {
		$v = 'G6cOpbUqUc4';
		$name = 'Отыру диагностикасы';
	}
	else if ($_GET['v'] == 2) {
		$v = 'XlUiADd1Fjw';
		$name = 'Раненый партизан';
	}
	else if ($_GET['v'] == 3) {
		$v = 'JA50ohsUyvM';
		$name = 'Зиянды гимнастика';
	}


   $whatsapp = '77782857000';
   $wh_txt1 = 'Сабақ жайлы білгім келеді ..';


   // $site_set['header'] = false;
   // $site_set['footer'] = false;
   // $site_set['swiper'] = true;
   $site_set['plyr'] = true;
   $site_set['swiper'] = true;
   $css = ['ln', 'bonus'];
   $js = ['ln'];
?>
<? include "../../block/header.php"; ?>

   <? if ($_GET['v']): ?>
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
   <? else: ?>
      <div class="blo1">
         <div class="bl_c">
            <div class="blo1_c">
               <div class="blo1_ts">
                  <div class="blo1_tsi">
                     <div class="blo1_tsic">      
                        <p>1 СӘУІР</p>
                        <p>марафон басталады</p>
                     </div>
                  </div>
               </div>
               <div class="blo1_t">
                  <p>Баланың сау болашағының баспалдағы — дұрыс күтімнен басталады</p>
                  <h1>“Балаға базалық күтім“ марафоны</h1>
               </div>
               <div class="blo1_s">
                  <div class="blo1_ss_1 lazy_img" data-src="/assets/img/bag/chrome_Z62FynRJ14.png"></div>
                  <div class="blo1_ss_2 lazy_img" data-src="/assets/img/bag/chrome_BD2K5wD3yO.png"></div>
                  <div class="blo1_ss lazy_img" data-src="/assets/img/bag/L18A8519 2.png"></div>
                  <div class="blo1_tb">
                     <a class="btn" href="#price">Қатысқым келеді</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   <? endif ?>

   <div class="<?=($_GET['v']?'ooi':'')?>">
   
      <!--  -->
      <div class="blo3 blo35">
         <div class="bl_c">
            <div class="blo3p">
               <div class="head_c txt_c">
                  <h1>Сабақ жайлы толық ақпарат сілтемеде</h1>
                  <p>👇👇👇</p>
               </div>
               <div class="blo3_c">
                  <div class="blou_tb">
                     <div class="blo5_bb">
                        <style>
                           .head_c {
                              padding-top: 25px;
                           }
                           .blou_tb, .blo5_bb .btn{
                              margin-top: 0;
                           }
                        </style>
                        <a class="btn" href="https://wa.me/<?=$whatsapp?>?text=<?=$wh_txt1?>">Whatsapp-қа жазу</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   
   </div>


<? include "../../block/footer.php"; ?>

   <script>
      $('html').on('click', '.plyr__control', function(){
         setTimeout(function () { 
            $('.ooi').addClass('ooi2');
         }, 10800)
      })
   </script>