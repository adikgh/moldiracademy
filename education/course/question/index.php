<? include "../../../config/core.php";
	
	// Қолданушыны тексеру
	if (!$user_right) header('location: /education/');

	// Курс деректері
	if (isset($_GET['id']) || $_GET['id'] != '') {
		$course_id = $_GET['id'];
		$course_d = fun::course($course_id);
		if (!$course_d) header('location: /education/my/list.php');
	} else header('location: /education/my/list.php');


	// filter user all
	$cours_sub_all = db::query("select * from question_item where question_id = 2");
	$page_result = mysqli_num_rows($cours_sub_all);

	// page number
	$page = 1; if (@$_GET['page'] && is_int(intval($_GET['page']))) $page = $_GET['page'];
	$page_age = 50;
	$page_all = ceil($page_result / $page_age);
	if ($page > $page_all && $page_all != 0) $page = $page_all;
	$page_start = ($page - 1) * $page_age;
	$number = $page_start;

	// filter cours
	// $cours_sub = db::query("select * from question_item where question_id = 2 order by ins_dt desc limit $page_start, $page_age");
	$cours_sub = db::query("select * from question_item where question_id = 2");


	// Сайттың баптаулары
	$menu_name = 'item';
	$pod_menu_name = 'question';
	$site_set['swiper'] = true;
	$site_set['utop'] = $course_d['name_'.$lang].' - оқушылар';
	$site_set['utop_bk'] = 'course/admin.php?id='.$course_id;
	$css = ['education/main', 'education/item', 'education/auser'];
	$js = ['education/main', 'education/admin', 'education/auser'];
?>
<? include "../../block/header.php"; ?>

	<div class="uitem">

		<? include "../top.php"; ?>

		<div class="uitem_c2">

			<!-- list -->
			<? if ($page_result != 0): ?>
				<div class="uc_u">
					<div class="uc_uh">
						<div class="uc_uh_number">#</div>
						<div class="uc_uh_3f">Аты</div>
					</div>
					<div class="uc_uc">
						<? while ($sub_d = mysqli_fetch_assoc($cours_sub)): ?>
							<? // $user_d = fun::user($sub_d['user_id']); ?>
							<? $number++; ?>

							<a class="uc_ui uc_ui5" href="item.php?id=<?=$sub_d['id']?>">
								<div class="uc_uil">
									<div class="uc_ui_number"><?=$number?></div>
									<div class="uc_uiln uc_uiln5">
										<div class="uc_uinu"><?=$sub_d['name']?></div>
									</div>
								</div>
							</a>
						<? endwhile ?>
					</div>
				</div>

				<? if ($page_all > 1): ?>
					<div class="uc_p">
						<? if ($page > 1): ?> <a class="uc_pi" href="/education/course/users/?id=<?=$course_id?>&page=<?=$page-1?>"><i class="fal fa-long-arrow-left"></i></a> <? endif ?>
						<a class="uc_pi <?=($page==1?'uc_pi_act':'')?>" href="/education/course/users/?id=<?=$course_id?>&page=1">1</a>
						<? for ($pg = 2; $pg < $page_all; $pg++): ?>
							<? if ($pg == $page - 1): ?>
								<? if ($page - 1 != 2): ?> <div class="uc_pi uc_pi_disp">...</div> <? endif ?>
								<a class="uc_pi <?=($page==$pg?'uc_pi_act':'')?>" href="/education/course/users/?id=<?=$course_id?>&page=<?=$pg?>"><?=$pg?></a>
							<? endif ?>
							<? if ($pg == $page): ?> <a class="uc_pi <?=($page==$pg?'uc_pi_act':'')?>" href="/user/item/users/?id=<?=$course_id?>&page=<?=$pg?>"><?=$pg?></a> <? endif ?>
							<? if ($pg == $page + 1): ?>
								<a class="uc_pi <?=($page==$pg?'uc_pi_act':'')?>" href="/education/course/users/?id=<?=$course_id?>&page=<?=$pg?>"><?=$pg?></a>
								<? if ($page + 1 != $page_all - 1): ?> <div class="uc_pi uc_pi_disp">...</div> <? endif ?>
							<? endif ?>
						<? endfor ?>
						<a class="uc_pi <?=($page==$page_all?'uc_pi_act':'')?>" href="/education/course/users/?id=<?=$course_id?>&page=<?=$page_all?>"><?=$page_all?></a>
						<? if ($page < $page_all): ?> <a class="uc_pi" href="/education/course/users/?id=<?=$course_id?>&page=<?=$page+1?>"><i class="fal fa-long-arrow-right"></i></a> <? endif ?>
					</div>
				<? endif ?>
				
			<? else: ?>
				Жазу табылмады
			<? endif ?>
		</div>
	</div>

<? include "../../block/footer.php"; ?>