<? include "../config/core.php";

   
	$site_name = 'ln';
   $site_set['header'] = false;
   $site_set['footer'] = false;
   $css = ['ln'];
?>
<? include "../block/header.php"; ?>
<? // unset($_SESSION['loader']); ?>


   <div class="lbl1">

      <div class="bl_c">
         <div class="blo1_t">
            <h1 class="blo1_tof">Күніне небәрі 30-40 минут <br> уақыт бөлу арқылы сәбиіңізге <br> сау болашақ сыйлаңыз!</h1>
            <p>Баланың дені сау болуы үшін массаж емес <br> <b>моторлы дамуын білу керек.</b></p>
         </div>
      </div>

      <div class="lbl1_t">
         <div class="lbl1_tc">
            <div class="lazy_img" data-src="/assets/img/bag/L18A8502-removebg-preview.png"></div>
         </div>
      </div>
      <div class="bl_c">
         <div class="lbl1_c">
            <div class="lbl1_cm">
               <div class="lbl1_cmh">Мөлдір Аманқызы</div>
               <div class="lbl1_cmp">дәрігер - массаж маманы</div>
            </div>

            <div class="lbl1_cms">
               <div class="">
                  <div class="lbl1_cmsi">
                     <i class="far fa-badge-check"></i>
                     <p>Массаж саласында 2 жылдық тәжірибем бар</p>   
                  </div>
                  <div class="lbl1_cmsi">
                     <i class="far fa-badge-check"></i>
                     <p>+250 ден аса аналар онлайн курсымның арқасында балаларын өздері емдеп алды</p>   
                  </div>
                  <div class="lbl1_cmsi">
                     <i class="far fa-badge-check"></i>
                     <p>Балалардың сау болашағын құру мақсатымен FITNESS SABI орталығын аштым</p>   
                  </div>
                  <div class="lbl1_cmsi">
                     <i class="far fa-badge-check"></i>
                     <p>Өзімде анамын, екі балам бар</p>   
                  </div>
               </div>
               <div class="lbl1_cmsd">Баланың дұрыс дамуы — сауатты ананың қолында!</div>
            </div>

         </div>
      </div>
   </div>

   <div class="lbl12">
      <div class="bl_c">
         <div class="lbl12_c">
            <a href="#maman" class="btn ">
               <i class="far fa-long-arrow-down"></i>
               <span>АВТОРЛЫҚ КУРСТАР</span>
               <!-- <i class="fab fa-whatsapp"></i> -->
               <i class="far fa-long-arrow-down"></i>
            </a>
            <a href="https://youtube.com/@moldir_amankyzy" class="btn btn_youtube">
               <i class="fab fa-youtube"></i>
               <span>ЮТУБ КАНАЛЫМ</span>
            </a>
            <!-- <a href="tel:<?=$site['phone']?>" class="btn btn_telegram">
               <i class="fab fa-telegram-plane"></i>
               <span>ТЕЛЕГРАММ КАНАЛ</span>
            </a> -->
            <!-- <a href="tel:<?=$site['phone']?>" class="btn btn_clm"> -->
            <!-- <i class="far fa-phone-alt"></i> -->
            <a href="https://wa.me/<?=$site['whatsapp']?>" class="btn btn_whatsapp">
               <i class="fab fa-whatsapp"></i>
               <span>БАЙЛАНЫС ҮШІН</span>
            </a>
         </div>
      </div>
   </div>



   <!--  -->
   <div class="lbl10" id="maman">
      <div class="bl_c">
         <div class="head_c">
            <h3>МАМАНДАР ҮШІН</h3>
         </div>
         <div class="lbl10_c">
            <div class="lbl10_cm">
               <a class="lbl10_cml" target="_blank" href="maman.php">
                  <div class="lbl10_cmle">
                     <div class="lazy_img" data-src="/assets/uploads/course/L18A8254.jpg"></div>
                  </div>
                  <div class="lbl10_cmlb">
                     <div class="lbl10_cmlbh">Мамандарға арналған курс</div>
                     <div class="btn btn_dd btn_clm" ><i class="fal fa-long-arrow-down"></i></div>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </div>

   <div class="rzo">
      <div class="bl_c">
         <div class="rzo_c"></div>
      </div>
   </div>

   <!--  -->
   <div class="ana_sh7" id="ana">
      <div class="bl_c">
         <div class="head_c">
            <h3>АНАЛАР ҮШІН</h3>
         </div>
         <div class="uitemc_um uitemc_um2">
            <a class="uitemc_umi uitemc_umi_act" href="#ana_baza">Базалық</a>
            <a class="uitemc_umi " href="#ana_mini">Мини</a>
         </div>
      </div>

      <div class="lbl10" id="ana_baza">
         <div class="bl_c">
            <div class="head_c">
               <h4>Базалық курстар</h4>
            </div>
            <div class="lbl10_c">
               <div class="lbl10_cm">
                  <a class="lbl10_cml" target="_blank" href="2.php">
                     <div class="lbl10_cmle">
                        <div class="lazy_img" data-src="/assets/uploads/course/L18A8254.jpg"></div>
                     </div>
                     <div class="lbl10_cmlb">
                        <div class="lbl10_cmlbh">“Мен дүниеге келдім” 0-4 ай </div>
                        <div class="btn btn_dd btn_clm" ><i class="fal fa-long-arrow-down"></i></div>
                     </div>
                  </a>
                  <a class="lbl10_cml" target="_blank" href="4.php">
                     <div class="lbl10_cmle">
                        <div class="lazy_img" data-src="/assets/uploads/course/L18A8289.jpg"></div>
                     </div>
                     <div class="lbl10_cmlb">
                        <div class="lbl10_cmlbh">“Мен әлемді зерттеймін” 4-8 ай</div>
                        <div class="btn btn_dd btn_clm"><i class="fal fa-long-arrow-down"></i></div>
                     </div>
                  </a>
                  <a class="lbl10_cml" target="_blank" href="3.php">
                     <div class="lbl10_cmle">
                        <div class="lazy_img" data-src="/assets/uploads/course/L18A8289.jpg"></div>
                     </div>
                     <div class="lbl10_cmlb">
                        <div class="lbl10_cmlbh">“Сенімді қадам басамын” 8-16 ай</div>
                        <div class="btn btn_dd btn_clm"><i class="fal fa-long-arrow-down"></i></div>
                     </div>
                  </a>
   
               </div>
            </div>
         </div>
      </div>
   
      <div class="lbl10" id="ana_mini">
         <div class="bl_c">
            <div class="head_c">
               <h4>Мини курстар</h4>
            </div>
            <div class="lbl10_c">
               <div class="lbl10_cm">
                  <a class="lbl10_cml" target="_blank" href="5m.php">
                     <div class="lbl10_cmle">
                        <div class="lazy_img" data-src="/assets/uploads/course/L18A8254.jpg"></div>
                     </div>
                     <div class="lbl10_cmlb">
                        <div class="lbl10_cmlbh">КІНДІК ЖАРЫҒЫ</div>
                        <div class="btn btn_dd btn_clm" ><i class="fal fa-long-arrow-down"></i></div>
                     </div>
                  </a>
                  <a class="lbl10_cml" target="_blank" href="6m.php">
                     <div class="lbl10_cmle">
                        <div class="lazy_img" data-src="/assets/img/bag/L18A8249.jpg"></div>
                     </div>
                     <div class="lbl10_cmlb">
                        <div class="lbl10_cmlbh">ҚИСЫҚ МОЙЫН</div>
                        <div class="btn btn_dd btn_clm"><i class="fal fa-long-arrow-down"></i></div>
                     </div>
                  </a>
                  <a class="lbl10_cml" target="_blank" href="9m.php">
                     <div class="lbl10_cmle">
                        <div class="lazy_img" data-src="/assets/img/bag/L18A8277.jpg"></div>
                     </div>
                     <div class="lbl10_cmlb">
                        <div class="lbl10_cmlbh">БАЛА КҮТІМІ. ХЕНДЛИНГ</div>
                        <div class="btn btn_dd btn_clm"><i class="fal fa-long-arrow-down"></i></div>
                     </div>
                  </a>
                  <a class="lbl10_cml" target="_blank" href="7m.php">
                     <div class="lbl10_cmle">
                        <div class="lazy_img" data-src="/assets/img/bag/L18A8331.jpg"></div>
                     </div>
                     <div class="lbl10_cmlb">
                        <div class="lbl10_cmlbh">БАЛАНЫ ДҰРЫС АУНАУҒА ҮЙРЕТУ</div>
                        <div class="btn btn_dd btn_clm"><i class="fal fa-long-arrow-down"></i></div>
                     </div>
                  </a>
                  <a class="lbl10_cml" target="_blank" href="11m.php">
                     <div class="lbl10_cmle">
                        <div class="lazy_img" data-src="/assets/img/bag/L18A8259.jpg"></div>
                     </div>
                     <div class="lbl10_cmlb">
                        <div class="lbl10_cmlbh">ПЛАСТУНСКИЙ ЕҢБЕКТЕУГЕ ҮЙРЕТУ</div>
                        <div class="btn btn_dd btn_clm"><i class="fal fa-long-arrow-down"></i></div>
                     </div>
                  </a>
                  <a class="lbl10_cml" target="_blank" href="8m.php">
                     <div class="lbl10_cmle">
                        <div class="lazy_img" data-src="/assets/img/bag/L18A8308.jpg"></div>
                     </div>
                     <div class="lbl10_cmlb">
                        <div class="lbl10_cmlbh">ТӨРТ ТАҒАНДАП ЕҢБЕКТЕУ</div>
                        <div class="btn btn_dd btn_clm"><i class="fal fa-long-arrow-down"></i></div>
                     </div>
                  </a>
                  <a class="lbl10_cml" target="_blank" href="10m.php">
                     <div class="lbl10_cmle">
                        <div class="lazy_img" data-src="/assets/img/bag/L18A8146.jpg"></div>
                     </div>
                     <div class="lbl10_cmlb">
                        <div class="lbl10_cmlbh">ДҰРЫС ЖҮРУГЕ ҮЙРЕТУ</div>
                        <div class="btn btn_dd btn_clm"><i class="fal fa-long-arrow-down"></i></div>
                     </div>
                  </a>
               </div>
               <!-- <div class="lbl10_cb">
                  <a class="btn btn_clm" href="#/projects/">Барлық жобаларымды қарау</a>
                  <a class="btn btn_back3" href="/">Білім беру платформама өту</a>
               </div> -->
            </div>
         </div>
      </div>

   </div>


   <!-- толығырақ -->

   <!-- <div class="lbl3">
      <div class="bl_c">
         <div class="head_c">
            <div class="lbl3_t1">
               <h3>Менің</h3>
               <h3>3 негізі</h3>
               <h3>қағидам</h3>
            </div>
            <div class="lbl3_t1m">
               <div class="lazy_img" data-src="/assets/img/bag/L18A8308.jpg"></div>
            </div>
         </div>
         <div class="lbl3_c">
            <div class="lbl3_i">
               <div class="lbl3_ih">
                  <p>Минимализм</p>
                  <span>01</span>
               </div>
               <div class="lbl3_ip">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto delectus aliquid ab iusto.</div>
            </div>
            <div class="lbl3_i">
               <div class="lbl3_ih">
                  <p>Функциональность</p>
                  <span>02</span>
               </div>
               <div class="lbl3_ip">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto delectus aliquid ab iusto. Eius, accusantium voluptatem cupiditate ex sunt soluta.</div>
            </div>
            <div class="lbl3_i">
               <div class="lbl3_ih">
                  <p>Индустриальность</p>
                  <span>03</span>
               </div>
               <div class="lbl3_ip">Eius, accusantium voluptatem cupiditate ex sunt soluta fugit labore praesentium corporis ab sint, hic iusto vero aliquam.</div>
            </div>
         </div>
      </div>
   </div> -->



   <!-- <div class="lbl5">
      <div class="bl_c">
         <div class="head_c">
            <h3>Қызмет</h3>
            <h3>түрлерім</h3>
         </div>
         <div class="lbl5_c">
            <div class="lbl5_i">
               <div class="lbl5_ih">Кеңес алу</div>
               <div class="lbl5_it">
                  <i class="fal fa-clock"></i>
                  <span>Онлайн - 1 сағат</span>
               </div>
               <div class="lbl5_ic">
                  <div class="lbl5_ici">- Лист 1</div>
                  <div class="lbl5_ici">- Лист 2</div>
               </div>
               <div class="lbl5_ip">
                  <span>Бағасы:</span>
                  <p>20 000 тг</p>
               </div>
               <div class="btn btn_clm">Жазылу</div>
            </div>
            <div class="lbl5_i">
               <div class="lbl5_ih">Баланы қарау</div>
               <div class="lbl5_ic">
                  <div class="lbl5_ici">- Лист 1</div>
                  <div class="lbl5_ici">- Лист 2</div>
               </div>
               <div class="lbl5_ip">
                  <span>Бағасы:</span>
                  <p>30 000 тг</p>
               </div>
               <div class="btn btn_clm">Жазылу</div>
            </div>
            <div class="lbl5_i">
               <div class="lbl5_ih">Толық масажды курс</div>
               <div class="lbl5_it">
                  <i class="fal fa-clock"></i>
                  <span>Офлайн - 1 ай</span>
               </div>
               <div class="lbl5_ic">
                  <div class="lbl5_ici">- Лист 1</div>
                  <div class="lbl5_ici">- Лист 2</div>
               </div>
               <div class="lbl5_ip">
                  <span>Бағасы:</span>
                  <p>80 000 тг</p>
               </div>
               <div class="btn btn_clm">Жазылу</div>
            </div>
            <div class="lbl5_i">
               <div class="lbl5_ih">Жеке монторлық</div>
               <div class="lbl5_it">
                  <i class="fal fa-clock"></i>
                  <span>3 ай</span>
               </div>
               <div class="lbl5_ic">
                  <div class="lbl5_ici">- Лист 1</div>
                  <div class="lbl5_ici">- Лист 2</div>
               </div>
               <div class="lbl5_ip">
                  <span>Бағасы:</span>
                  <p>500 000 тг</p>
               </div>
               <div class="btn btn_clm">Жазылу</div>
            </div>
         </div>
      </div>
   </div> -->

   <!-- <div class="">
      <div class="bl_c">
         <div class="head_c">
            <h3></h3>
         </div>
         <div class="">
            <div class=""></div>
         </div>
      </div>
   </div> -->


   <div class="rzo">
      <div class="bl_c">
         <div class="rzo_c"></div>
      </div>
   </div>

   <div class="lbl12">
      <div class="bl_c">
         <div class="lbl12_c">
            <p>Егер сізге Instagram арқылы байланысқан <br> ыңғайлы болса, direct-ме жазыңыз</p>
            <a href="https://instagram.com/<?=$site['instagram']?>" class="btn btn_cm">
               <i class="fab fa-instagram"></i>
               <span>Instagram-ма жазу</span>
            </a>
         </div>
      </div>
   </div>

   <footer class="footer">
      <div class="bl_c">
         <div class="footer_b">
            <div class="footer_br">
               <a href="https://gprog.kz" target="_blank" class="gprog_bl">
                  <span>#gprog-та</span>
                  <div class="gprog_heart"><i class="fas fa-heart"></i></div>
                  <span>жасалған</span>
                  <div class="gprog_ab">
                     <div class="gprog_lg"><div class="lazy_img" data-src="https://gprog.kz/assets/img/logo/logo_tr_1200.png"></div></div>
                     <div class="gprog_h">G prog</div>
                     <div class="gprog_p">Бізбен өз онлайн мектебіңді аш!</div>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </footer>

<? include "../block/footer.php"; ?>