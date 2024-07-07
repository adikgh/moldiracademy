<? $question_id = $sql['txt']; ?>
<? $question_item = db::query("select * from question_item where question_id = '$question_id'"); ?>
<? // $question_item_d = mysqli_fetch_assoc($question_item); ?>

<div class="">
   <? while($question_item_d = mysqli_fetch_assoc($question_item)): ?>
      <? $titem_id = $question_item_d['id']; ?>
      <? $question_answer = db::query("select * from question_item_reply where user_id = '$user_id' and item_id = '$titem_id'"); ?>

         <div class="lsb_i " data-number="<?=$question_item_d['number']?>" data-type="<?=$sql['type']?>" >
            <div class="lsb_ic">
               <div class="lsb_it_name"><?=$question_item_d['number']?>. <?=$question_item_d['name']?></div>
               
               <? if (!mysqli_num_rows($question_answer)): ?>
                  <div class="form_im">
                     <i class="fal fa-comment-lines form_icon"></i>
                     <textarea class="form_txt inp_form"></textarea>
                  </div>
                  <div class="form_im">
                     <div class="btn btn_add_ques" data-id="<?=$titem_id?>" data-lesson-id="<?=$lesson_id?>">Жіберу</div>
                  </div>
                  <div class="lsb_it_nk dsp_n">Жауабыңыз: <p></p></div>
               <? else: ?>
                  <? $question_answer_d = mysqli_fetch_assoc($question_answer); ?>
                  <div class="lsb_it_nk">Жауабыңыз: <p><?=$question_answer_d['txt']?></p></div>
               <? endif ?>

            </div>
         </div>

      <? endwhile ?>

      <br><br><br>
   </div>