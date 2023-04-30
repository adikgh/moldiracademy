<? include "../config/core.php";

   
   $course_id = 1;


   // 
	$site_name = 'course';
   $site_set['header'] = false;   
   $site_set['swiper'] = true;
   $site_set['plyr'] = true;
   // $site_set['footer'] = false;
   $css = ['project/fitnessabi'];
   $js = ['project/fitnessabi'];


   // 
   $whatsapp = 'https://wa.me/77079160403';
   $wh_txt1 = 'Мен чекті жібергім келеді ..';
   $wh_txt2 = 'Бөліп төлегім келеді ..';
?>
<? include "../block/header.php"; ?>
<? unset($_SESSION['loader']); ?>

   <? if ($_GET['edit']): ?>
      <div class="header dsp_n">
         1) Оффер
         2) Что такое ???-массаж
         3) Для кого курс
         4) Об авторе
         5) Программа курса
         6) Ваш результат спустя ? недели
         7) Отзывы
         8) Тарифы
         9) Часто задаваемые вопросы
      </div>
   <? endif ?>

   <div class="blo1">
      <div class="bl_c">
         <div class="blo1_c">
            <!-- <div class="blo1_tsl">
               <div class="">Фитнес Cәби</div>
               <div class="">Moldir Academy</div>
            </div> -->
            <div class="blo1_ts">
               <div class="blo1_tsi">
                  <i class="fal fa-calendar-alt"></i>
                  <div class="blo1_tsic">                     
                     <p>Басталуы:</p>
                     <p>15.01.23</p>
                  </div>
               </div>
               <div class="blo1_tsi">
                  <i class="fal fa-play"></i>
                  <div class="blo1_tsic">
                     <p>Формат:</p>
                     <p>Онлайн</p>
                  </div>
               </div>
               <div class="blo1_tsi">
                  <i class="fal fa-star"></i>
                  <div class="blo1_tsic">
                     <p>Ұзақтығы:</p>
                     <p>120 күн</p>
                  </div>
               </div>
            </div>
            <div class="blo1_t">
               <h1 class="blo1_tof">Күніне небәрі 30-40 минут <br> уақыт бөлу арқылы сәбиіңізге <br> сау болашақ силаңыз!</h1>
               <p>Баланың дені сау болуы үшін массаж емес <br> <b>моторлы дамуын білу қажет.</b></p>
               <div class="blo1_tb">
                  <a class="btn" href="#price">Қатысқым келеді</a>
               </div>
            </div>
            <div class="blo1_s">
               <div class="blo1_ss lazy_img" data-src="/assets/img/bag/L18A8274-5.png"></div>
               <div class="blo1_cm">
                  <div class="blo1_cm2">
                     <p>Жеңілдіктің аяқталуына:</p>
                     <div class="blo1_cmc">
                        <div class=""><div class="">02</div><span>күн</span></div>
                        <p>:</p>
                        <div class=""><div class="">16</div><span>сағат</span></div>
                        <p>:</p>
                        <div class=""><div class="">25</div><span>минут</span></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

	<? if ($_GET['edit']): ?>
	   <div class="blo3">
		  <div class="bl_c">
			 <div class="head_c txt_c">
				<h4>Бұл курс сіз үшін</h4>
			 </div>
			 <div class="blo3_c">
				<div class="blo3_i">
				   <i class="fas fa-badge-check"></i>
				   <div class="">
					  <p>Егер сәби басын көтермесе</p>
					  <div>Cәбиіңіз 2-3 айлық, бірақ әлі де басын бірнеше минутқа еркін көтеріп тұра алмаса.</div>
				   </div>
				</div>
				<div class="blo3_i">
				   <i class="fas fa-badge-check"></i>
				   <div class="">
					  <p>Егер білегінде тірегі жоқ болса</p>
					  <div>Cәбиіңіз 2-4 айлық. Дегенмен еркін білекке опора жасай алмай, бетімен жер сүзіп жыласа. Қолдары артқа кетіп қала бересе.</div>
				   </div>
				</div>
				<div class="blo3_i">
				   <i class="fas fa-badge-check"></i>
				   <div class="">
					  <p>Егер сәби аунамаса</p>
					  <div>Балапан 3.5-5 ай бірақ аунауға әлі әрекетін жоқ, тек жата бересе. Кейді тек бір жаққа ғана аунаса.</div>
				   </div>
				</div>
				<div class="blo3_i">
				   <i class="fas fa-badge-check"></i>
				   <div class="">
					  <p>Егер еңбектемесе</p>
					  <div>Сәби 6-9 ай, сонда да еркін төрт-аяқтап еңбектей алмайса немесе тек бауырымен жарғалап солдат секілді жыбырласа</div>
				   </div>
				</div>
				<div class="blo3_i">
				   <i class="fas fa-badge-check"></i>
				   <div class="">
					  <p>Егер сәби отырмаса</p>
					  <div>Cәбиіңіз 7-9 ай. Дегенмен отыруға әрекетсіз немесе тек жастыққа тіресеңіз ғана отырса. Өздігінен отыруды білмесе</div>
				   </div>
				</div>
				<div class="blo3_i">
				   <i class="fas fa-badge-check"></i>
				   <div class="">
					  <p>Егер бүкірейіп отырса</p>
					  <div>Қанша тырыссаңыз да балақай арқасы дөңгеленіп қана отырса, не істесеңізде тіктей алмайсаңыз</div>
				   </div>
				</div>
				<div class="blo1_tb">
				   <a class="btn" href="#price">Маған курс қажет</a>
				</div>
			 </div>
		  </div>
	   </div>
	<? endif ?>

   <!-- <div class="blo2">
      <div class="blo2a lazy_img" data-src="/assets/img/bag/IMG_6756 - 2.jpg"></div>
      <div class="bl_c">
         <div class="head_c">
            <h4>Моя миссия</h4>
            <p></p>
         </div>
         <div class="blo2_c">
            <div>Я показываю родителям как ухаживать за малышом, оценивать их двигательное развитие, даю безопасные, работающие техники для развития навыков ребёнка.</div>
            <div>Тем самым помогаю оградить ваших детей от вредных упражнений, гаджетов, советов. Обучая родителей, я хочу создавать здоровое будущее для детей.</div>
            <div>Ведь развивая движения малыша, мы развиваем его интеллект и уверенность в себе. Такие дети становятся безусловными лидерами.</div>
            <a class="btn btn_back" href="#price">Курсқа қатысамын</a>
         </div>
      </div>
   </div> -->


   <div class="blo5">
      <div class="bl_c">
         <div class="head_c txt_c">
            <h4>Курс бағдарламасы</h4>
         </div>

         <!-- <div class="blo5_sc dsp_n">
            <span>4 блока.</span>
            <div class="">0-4 месяцев</div>
            <div class="">4-8 месяцев</div>
            <div class="">8-12 месяцев</div>
            <div class="">0-12 месяцев</div>
         </div> -->

         <div class="blo5_cc">
            <div class="blo5_cci">
               <div class="blo5_ccih">
                  <div class="blo5_ccihci">
                     <i class="fas fa-play-circle"></i>
                     <p>1 бөлім</p>
                  </div>
               </div>
               <div class="blo5_cciho">ДИАГНОСТИКА</div>
               <ul class="blo5_ccl">
                  <li>Сәбиіңіздің ай сайынғы қимыл әрекетіне баға беру</li>
                  <li>1 жасқа дейін кездесетін арнайы диагноздарды тексеру</li>
                  <li>Массажға қарсы көрсеткіштерді білу</li>
               </ul>
               <div class="blo5_ccy">
                  <span>НӘТИЖЕСІНДЕ СІЗ:</span>
                  <p>- Әр сәбиде 1 жасқа дейін болуы мүмкін патологияларды зерттеп үйренесіз</p>
                  <p>- Дайын видеоларды көру арқылы балаңызға толықтай диагностика жасайсыз</p>
                  <p>- Бала өз жасына, ай сайынғы дамуына сай келе ме, жоқ па тексересіз</p>
                  <p>- Баланың моторлы дамуымен қатар физиологиялық, неврологиялық дамуының өз жасына сәйкестігін анықтайсыз</p>
               </div>
            </div>
            <div class="blo5_cci">
               <div class="blo5_ccih">
                  <div class="blo5_ccihci">
                     <i class="fas fa-play-circle"></i>
                     <p>2 бөлім</p>
                  </div>
               </div>
               <div class="blo5_cciho">ТЕОРИЯ</div>
               <ul class="blo5_ccl">
                  <li>Қандай әдіс қолданған жөн?</li>
                  <li>Неліктен дәл осы техниканы жасауыңыз керек?</li>
                  <li>Баламен не себептен тек Анасы жұмыс істегені дұрыс?</li>
                  <li>Дұрыс күтім жайлы, Хендлинг заңы.</li>
               </ul>
               <div class="blo5_ccy">
                  <span>НӘТИЖЕСІНДЕ СІЗ:</span>
                  <p>- Қазіргі таңдағы ең маңызды техникаларды және олармен қалай жұмыс жасау керектігін үйренесіз</p>
                  <p>- Баланың дамуындағы ананың рөлі, қолдауы қаншалықты маңызды екенін ұғынасыз</p>
                  <p>- Балаға дұрыс күтім жасау, қарапайым қалай дұрыс жөргек ауыстыру, киіндіру, шомылдыру ережелерімен таныс боласыз</p>
                  <p>- Баланың дұрыс жетілуіндегі хендлинг заңы туралы білесіз</p>
               </div>
            </div>
            <div class="blo5_cci">
               <div class="blo5_ccih">
                  <div class="blo5_ccihci">
                     <i class="fas fa-play-circle"></i>
                     <p>3 бөлім</p>
                  </div>
               </div>
               <div class="blo5_cciho">МАССАЖ</div>
               <ul class="blo5_ccl">
                  <li>1 жасқа дейін балаларда кездесетін</li>
                  <li>Қисықмойын</li>
                  <li>Дисплазия</li>
                  <li>Дистония</li>
                  <li>Кіндік грыжасы</li>
                  <li>Гипертонус</li>
                  <li>Гипотонус диагноздарының емі беріледі</li>
                  <li>Массажбен бірге, навыковая гимнастика, фитболмен жұмыс істеу тәсілдері ұсынылады</li>
               </ul>
               <div class="blo5_ccy">
                  <span>НӘТИЖЕСІНДЕ СІЗ:</span>
                  <p>Диагностикада анықтаған патологияны осы бөлімдегі емдеу тәсілдерін қолдана отырып емдеп аласыз</p>
               </div>
            </div>
            <div class="blo5_cci">
               <div class="blo5_ccih">
                  <div class="blo5_ccihci">
                     <i class="fas fa-play-circle"></i>
                     <p>4 бөлім</p>
                  </div>
               </div>
               <div class="blo5_cciho">МОТОРЛЫ ДАМУЫН ЖЕТІЛДІРУ</div>
               <ul class="blo5_ccl">
                  <li>Курстың ең маңызды білімі қамтылады</li>
                  <li>Сәбидің ай сайынғы дұрыс моторлы дамуы қалай болу керек?</li>
                  <li>Моторлы дамуы кеш дамыған балаларға қалай көмектесеміз?</li>
               </ul>
               <div class="blo5_ccy">
                  <span>НӘТИЖЕСІНДЕ СІЗ:</span>
                  <p>- Балаңыздың өз денесін тануына, дұрыс контакт жасай алуына көмектесесіз</p>
                  <p>- Сондай-ақ, баланың дұрыс аунап, дұрыс еңбектеп, дұрыс отырып - тұруына, жүруіне арнайы жаттығулардың көмегімен түзей аласыз</p>
               </div>
            </div>
            <div class="blo5_cci">
               <div class="blo5_ccih">
                  <div class="blo5_ccihci">
                     <i class="fas fa-play-circle"></i>
                     <p>5 бөлім</p>
                  </div>
               </div>
               <div class="blo5_cciho">ЗИЯНДЫ ЖАТТЫҒУЛАР</div>
               <ul class="blo5_ccl">
                  <li>Массажисттердің 90% -ы қолданатын зиянды жаттығулар</li>
                  <li>Массаж туралы мифтер</li>
                  <li>Бірнеше курс массаж алудың қажеттілігі қандай?</li>
               </ul>
               <div class="blo5_ccy">
                  <span>НӘТИЖЕСІНДЕ СІЗ:</span>
                  <p>- Балаңызды зиянды жаттығулардың кері әсерінен қорғайсыз</p>
                  <p>- Жауырын ашу, кіндікке тиын жабыстыру, арқасынан тікенек алу деген сынды мифтерге алданбайсыз</p>
                  <p>- Көп жерде айтыла бермейтін массажға байланысты құпиялармен таныс боласыз</p>
               </div>
            </div>
            <div class="blo5_cci">
               <div class="blo5_ccih">
                  <div class="blo5_ccihci">
                     <i class="fas fa-play-circle"></i>
                     <p>6 бөлім</p>
                  </div>
               </div>
               <div class="blo5_cciho">ПЕДИАТРИЯ</div>
               <ul class="blo5_ccl">
                  <li>Баланың қалыпты өсуі мен дамуы</li>
                  <li>Балаға дұрыс күтім жасау (көз, құлақ, шаш, мұрын)</li>
                  <li>Жиі кездесетін, шұғыл көмекті қажет ететін жағдайлар (терідегі түрлі бөртпелер, сарғаю, потница, іш кебу)</li>
               </ul>
               <div class="blo5_ccy">
                  <span>НӘТИЖЕСІНДЕ СІЗ:</span>
                  <p>Арнайы педиатр маманнан тексерілген, көз жеткізілген ақпаратқа қанық боласыз</p>
               </div>
            </div>
            <div class="blo5_cci">
               <div class="blo5_ccih">
                  <div class="blo5_ccihci">
                     <i class="fas fa-play-circle"></i>
                     <p>7 бөлім</p>
                  </div>
               </div>
               <div class="blo5_cciho">НУТРИЦИОЛОГИЯ</div>
               <ul class="blo5_ccl">
                  <li>Баланың дұрыс моторлы дамуында ең маңызды нәрсе дұрыс тамақтану</li>
                  <li>Нутрициолог маманынан кеңес</li>
                  <li>Балансты прикорм бастау</li>
                  <li>Базалық витаминдер түрі, дозасы</li>
               </ul>
               <div class="blo5_ccy">
                  <span>НӘТИЖЕСІНДЕ СІЗ:</span>
                  <p>- Сертификатталған нутрициолог маманнан кеңес аласыз</p>
                  <p>- Балаңыздың құнарлы тамақтану режимін дұрыстайсыз</p>
                  <p>- Қандай витамин, қалай беру керектігін білесіз</p>
               </div>
            </div>
            <div class="blo5_cci">
               <div class="blo5_ccih">
                  <div class="blo5_ccihci">
                     <i class="fas fa-play-circle"></i>
                     <p>8 бөлім</p>
                  </div>
               </div>
               <div class="blo5_cciho">АНА МЕН БАЛА ПСИХОЛОГИЯСЫ</div>
               <ul class="blo5_ccl">
                  <li>Сәби мен ана қарым- қатынасы</li>
                  <li>Баланың тілін табу, бірге жұмыс жасау</li>
                  <li>Балалар психологы мен психотерапевттен кеңес</li>
               </ul>
               <div class="blo5_ccy">
                  <span>НӘТИЖЕСІНДЕ СІЗ:</span>
                  <p>- Өз балаңызбен сау қарым-қатынас жасайсыз</p>
                  <p>- Балаңыздың тілін тауып, сіздің икеміңізге көніп, жұмыс істеу оңай болады</p>
                  <p>- Алдағы уақытта кездесуі мүмкін қателіктің алдын аласыз</p>
                  <p>- Бала психологиясымен жете таныс боласыз</p>
               </div>
            </div>
            <div class="blo5_cci">
               <div class="blo5_ccih">
                  <div class="blo5_ccihci">
                     <i class="fas fa-gift"></i>
                     <p>Бонус</p>
                  </div>
               </div>
               <ul class="blo5_ccl">
                  <li>Балаға мүлде қолдануға болмайтын, кері әсері бар зиянды жаттығулар</li>
                  <li>Керісінше, дұрыс дамуына, қозғалысына әсер етуші пайдалы жаттығулар</li>
                  <li>Қазір ең актуальді саналатын массаждағы мифтер</li>
                  <li>Гаджеттер: зияны мен пайдасы</li>
                  <li>Баланы дамытатын түрлі ойындар</li>
                  <li>Массаж барысында бала қатты жылағанда не істеу керек лайфхактар</li>
               </ul>
            </div>
         </div>

         <div class="blo5_bb">
            <a class="btn" href="#price">Курсқа қатысамын</a>
         </div>

      </div>
   </div>

	<? if ($_GET['edit']): ?>
	   <div class="blo4">
		  <div class="bl_c">
			 <div class="head_c txt_c">
				<h4>Мөлдір Турымбет</h4>
				<p>Курстың авторы</p>
			 </div>
			 <div class="blo4_c">

				<div class="blo4_tu">
				   <div class="lazy_img" data-src="/assets/img/bag/IMG_6772 - 2.jpg"></div>
				   <div class="lazy_img lazy_img2" data-src="/assets/img/bag/chrome_tH7667DNS5.png"></div>
				   <div class="blo4_t">
					  <div class="blo4_tc">
						 <p>Мен ең алдымен дәл сіз секілді Анамын. Бәрінен бұрын мен үшін де баламның қәуіпсіздігі және денінің саулыңы маңызды</p>
					  </div>
				   </div>
				</div>

				<ul class="blo4_ul">
				   <li><i class="fas fa-badge-check"></i><span>3 жылдық стажы бар Дәрігер</span></li>
				   <li><i class="fas fa-badge-check"></i><span>Қимыл қозғалыс терапевті</span></li>
				   <li><i class="fas fa-badge-check"></i><span>Білікті балалар массажисті</span></li>
				   <li><i class="fas fa-badge-check"></i><span>Баланың моторлы, әрі дұрыс дамуын жіті бақылап, жеке жұмыс жасаймын</span></li>
				   <li><i class="fas fa-badge-check"></i><span>Курста мен тек 100% практикамда нәтиже көрсеткен техникаларды беремін</span></li>
				   <li><i class="fas fa-badge-check"></i><span>Курстағы техникалармен сіз нәбірі 5 күнде нәтижесін байқайсыз</span></li>
				</ul>

				<!-- <div class="blo4_t">
				   <div class="blo4_ta"><i class="fas fa-quote-left"></i></div>
				   <div class="blo4_tc">
					  <p>Я педиатр в первую очередь заинтересована здоровьем вашего ребёнка, учу мам заботиться о малыше основываясь на доказательной медицине.</p>
					  <p>За 3 года работы двигательным терапевтом помогла более 250 малышам безопасно освоить важные навыки в первом году жизни и набраться двигательного опыта.</p>
					  <a class="btn btn_back" href="#price">Хочу на курс</a>
				   </div>
				</div> -->

			 </div>
		  </div>
	   </div>
	<? endif ?>

   <div class="blo8" id="price">
      <div class="bl_c">
         <div class="head_c txt_c">
            <h4>Оқу бағасы</h4>
         </div>
         <div class="blo8_c">
            <div class="blo8_ci ">
               <div class="blo8_cin">Аналарға (Аялы алақан)</div>
               <div class="blo8_ciq">
                  <div class="blo8_ciqi blo8_ciqi_act" data-name="Standart (Аялы алақан)">0-4 ай</div>
                  <div class="blo8_ciqi" data-name="Standart (Белсенді балақай)">4-8 ай</div>
                  <div class="blo8_ciqi" data-name="Standart (Сенімді қадам)">8-12 ай</div>
               </div>
               <ul class="blo8_ciс">
                  <li><i class="fal fa-plus"></i><span>Сабаққа доступ - 4 ай</span></li>
                  <li><i class="fal fa-plus"></i><span>Кері байланыс - 2 ай</span></li>
                  <li><i class="fal fa-gift"></i><span>Зиянды гаджеттер</span></li>
                  <li><i class="fal fa-gift"></i><span>Дамыту ойындары</span></li>
               </ul>
               <div class="blo8_cip">
                  <div class="blo8_cipo">
                     <div class="blo8_cipoi">45 000 тенге</div>
                     <div class="blo8_cipoi blo8_cipoi_mrf">0 тенге</div>
                  </div>
                  <div class="blo8_cip_btn">
                     <div class="btn btn_ukl" data-price="45 000" data-price2="0">Сатып аламын</div>
                     <a class="btn btn_cl" href="<?=$whatsapp?>?text=<?=$wh_txt2?>" target="_blank">
                        <div class="kaspi_red_card lazy_img" data-src="/assets/img/card/b1c734d74503c1e6617e89a8da356966.png"></div>
                        <sp>Бөліп төлеймін</sp>
                     </a>
                  </div>
               </div>
            </div>

            <div class="blo8_ci blo8_c78">
               <div class="blo8_cin">Мамандарға</div>
               <ul class="blo8_ciс">
                  <li><i class="fal fa-plus"></i><span>Сабаққа доступ - 6 ай</span></li>
				  <li><i class="fal fa-plus"></i><span>Шексіз талқылау чаты</span></li>
				  <li><i class="fal fa-plus"></i><span>2-этапты емтихан</span></li>
				  <li><i class="fal fa-plus"></i><span>Кәсіби бала массажы (Сертификат)</span></li>
				  <li><i class="fal fa-plus"></i><span>Баланы моторлы дамыу маманы (Сертификат)</span></li>
				   
                  <li><i class="fal fa-gift"></i><span>Зиянды гаджеттер</span></li>
                  <li><i class="fal fa-gift"></i><span>Пайдалы ойындар</span></li>
               </ul>
               <div class="blo8_cip">
                  <div class="blo8_cipo">
                     <div class="blo8_cipoi">250 000 тенге</div>
                     <div class="blo8_cipoi blo8_cipoi_mrf">0 тенге</div>
                  </div>
                  <div class="blo8_cip_btn">
                     <div class="btn btn_ukl" data-price="250 000" data-price2="0">Сатып аламын</div>
                     <a class="btn btn_cl" href="<?=$whatsapp?>?text=<?=$wh_txt2?>" target="_blank">
                        <div class="kaspi_red_card lazy_img" data-src="/assets/img/card/b1c734d74503c1e6617e89a8da356966.png"></div>
                        <sp>Бөліп төлеймін</sp>
                     </a>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>

   <? if ($_GET['edit']): ?>
      <div class="blo7">
         <div class="bl_c">
            <div class="head_c txt_c">
               <h4>Нәтижелер</h4>
            </div>
            <div class="blo7_c">
               <div class="swiper blo7_Swiper">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="lz_o7" data-src="/assets/img/result/result1.jpeg"></div>
                     </div>
                     <div class="swiper-slide">
                        <div class="lz_o7" data-src="/assets/img/result/result2.jpeg"></div>
                     </div>
                     <div class="swiper-slide">
                        <div class="lz_o7" data-src="/assets/img/result/result3.jpeg"></div>
                     </div>
                     <div class="swiper-slide">
                        <div class="player_o7" data-plyr-provider="youtube" data-plyr-embed-id=""></div>
                     </div>
                  </div>
                  <div class="swiper-pagination o7_pagination"></div>
               </div>
            </div>
         </div>
      </div>
   <? endif ?>

   <!-- <div class="blo6">
      <div class="bl_c">
         <div class="head_c txt_c">
            <h4>Отзывы</h4>
         </div>
      </div>
   </div> -->

   <? if ($_GET['edit']): ?>
      <? $bl = db::query("SELECT * FROM `word_blocks` WHERE name = 'quiz1'"); ?>
      <? if (mysqli_num_rows($bl)): ?>
         <div class="blo10">
            <div class="bl_c">
               <div class="head_c txt_c">
                  <h4>Жиі қойылатын <br> сұрақтар</h4>
               </div>
               <div class="faq">
                  <? while ($bl_d = mysqli_fetch_assoc($bl)): ?>
                     <div class="faq-a">
                        <div class="faq-ah">
                           <div class="faq-arrow"><i class="fal fa-plus"></i></div>
                           <div class="faq-heading"><?=$bl_d['txt1_kz']?></div>
                        </div>
                        <p class="faq-text"><?=$bl_d['txt2_kz']?></p>
                     </div>
                  <? endwhile ?>
               </div>
            </div>
         </div>
      <? endif ?>
   <? endif ?>

<? include "../block/footer.php"; ?>
   
   <div class="oko">
      <div class="oko_a oko_close"></div>
      <div class="oko_s">
         <div class="menuc_cb">
            <div class="btn btn_dd2 oko_close"><i class="fal fa-times"></i></div>
         </div>
         <div class="bl_c">
            <div class="oko_sc">
               <div class="oko_s_name">Төлеу үшін KASPI GOLD картаға аударыңыз</div>
               <img class="lazy_card copy" onclick="copytext('87751582627')" data-src="/assets/img/card/moldir_kaspi.png" />
               <div class="oko_s_s">Нөмірді көшіру үшін, картаны басыңыз</div>
               <div class="oko_s_p">Ватсапқа чек жіберіңіз</div>
               <a href="<?=$whatsapp?>?text=<?=$wh_txt1?>" target="_blank" class="btn btn_cl">Жіберу</a>
            </div>
         </div>
      </div>
   </div>