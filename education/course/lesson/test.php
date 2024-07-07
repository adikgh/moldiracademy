<? 
   $test_id = $sql['txt'];
   $test = db::query("select * from test_item where test_id = '$test_id'");
   // $test_d = mysqli_fetch_assoc($test);
   
   // $test_answer = db::query("select * from test_answer where user_id = '$user_id' and test_id = '$test_id' and lesson_id = '$lesson_id'");
?>

   <div class="">
      <? while($test_d = mysqli_fetch_assoc($test)): ?>
         <? $titem_id = $test_d['id']; ?>
         
         <div class="lsb_i " data-number="<?=$test_d['number']?>" data-type="<?=$sql['type']?>" >
            <div class="lsb_ic">
               <div class="lsb_it_name"><?=$test_d['number']?>. <?=$test_d['name']?></div>
               <div class="form_im" data-sel="0" data-test-id="<?=$test_d['id']?>" data-lesson-id="<?=$lesson_id?>">

                  <? $t_var = db::query("select * from test_item_var where item_id = '$titem_id'"); ?>
                  <? while($t_var_d = mysqli_fetch_assoc($t_var)): ?>
                     <div class="form_radio rad1 <?=(@$t_var_d['answer']==1?'answer':'')?>" data-val="1"><?=$t_var_d['type']?>. <?=$t_var_d['name']?></div>
                  <? endwhile ?>
               
               </div>
            </div>
         </div>

      <? endwhile ?>

      <div class="rad1_prc">
         <div class="btn rad1_prav" data-prav="0">Тексеру</div>
         <div class="rad1_prav_otv " dsp_n>Дұрыс жауаптар саны: <p></p></div>
      </div>

      <br><br><br>
   </div>