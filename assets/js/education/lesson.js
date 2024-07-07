$(document).ready(function() {


	$('.question_56').click(function(){
		if ($(this).hasClass('form_btn_act') == false) {
			$('.question_56').removeClass('form_btn_act');
			$(this).addClass('form_btn_act');
		}
	})

   // 
	$('.question_56').on('click', function () { 
		$.ajax({
			url: "/education/course/lesson/get.php?question_56",
			type: "POST",
			dataType: "html",
			data: ({ 
				answer: $(this).attr('data-val'),
				question_id: $(this).parent().attr('data-question-id'),
				lesson_id: $(this).parent().attr('data-lesson-id'),
				open_lesson_id: $(this).parent().attr('data-open-lesson-id'),
			}),
			beforeSend: function(){ },
			error: function(data){ },
			success: function(data){
				console.log(data);
			}
		})
	})








	// 
	$('.rad1').on('click', function () {
		if ($('.rad1_prav').attr('data-prav') == 0) {
			$(this).parent().children().removeClass('form_radio_act')
			$(this).addClass('form_radio_act')
			$(this).parent().attr('data-sel', 1)
			$(this).parents('.lsb_ic').removeClass('lsb_ic_red')
		}
	})


	$('.rad1_prav').on('click', function () {
		if ($(this).attr('data-prav') == 0) {

			vr = 0;

			mps = 0;
			$('.lsb_i .form_im').each(function() {
				if ($(this).attr('data-sel') == 0) {
					$(this).parents('.lsb_ic').addClass('lsb_ic_red')
					mps = 1
				}
			});

			if (mps == 0) {
				$('.lsb_i .form_radio_act').each(function() {

					if ($(this).hasClass('answer') == true) {
						$(this).addClass('form_radio_true');
						var answer = 1;
						vr++
						// mess('Сіздің жауабыңыз дұрыс');
						console.log('1');
					} else {
						$(this).addClass('form_radio_false');
						$(this).siblings('.answer').addClass('form_radio_true');
						var answer = 0;
						// mess('Сіздің жауабыңыз қате, талқылауды қараңыз');
						console.log('2');
					}

					$('.rad1_prav').attr('data-prav', '1')
					$('.rad1_prav_otv').removeClass('dsp_n')
					$('.rad1_prav_otv p').html(vr)
				});
			}



			if ($(this).parent().attr('data-sel') == 0) {


				// if ($(this).hasClass('answer') == true) {
				// 	$(this).addClass('form_radio_true');
				// 	var answer = 1;
				// 	mess('Сіздің жауабыңыз дұрыс');
				// } else {
				// 	$(this).addClass('form_radio_false');
				// 	$(this).siblings('.answer').addClass('form_radio_true');
				// 	var answer = 0;
				// 	mess('Сіздің жауабыңыз қате, талқылауды қараңыз');
				// }




				// $.ajax({
				// 	url: "/user/get.php?test_answer",
				// 	type: "POST",
				// 	dataType: "html",
				// 	data: ({ 
				// 		answer: answer, 
				// 		v: $(this).attr('data-val'), 
				// 		test_id: $(this).parent().attr('data-test-id'), 
				// 		lesson_id: $(this).parent().attr('data-lesson-id') 
				// 	}),
				// 	success: function(data){ },
				// 	beforeSend: function(){ },
				// 	error: function(data){ }
				// })

			}
		}
	})



	

	// 
	$('.btn_add_ques').on('click', function () {

		btn = $(this)
		txt = btn.parent().parent().children('.form_im').children('.inp_form')
		vr_s = btn.parent().siblings('.lsb_it_nk')
		// console.log(txt);

		if (txt.val() != '') {
			$.ajax({
				url: "/education/course/lesson/get.php?add_ques",
				type: "POST",
				dataType: "html",
				data: ({ 
					titem_id: btn.attr('data-id'), 
					txt: txt.val()
				}),
				success: function(data){ 
					// if (data == 'yes') { location.reload(); }
					// console.log(data);
					
					vr_s.removeClass('dsp_n')
					vr_s.children('p').html(txt.val())
					btn.parent().parent().children('.form_im').addClass('dsp_n')
					
				},
				beforeSend: function(){ },
				error: function(data){ }
			})
			
		} else {
			txt.addClass('lsb_ic_red')
			mess('Жазуды ұмыттыңыз')
		}
		
	})





















}) // end jquery