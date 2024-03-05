<? 

    if ($_GET['view'] == 0) require 'profinmd_view.php';
    else if ($_GET['view'] == 400) require 'profinmd_400K.php';
    else if ($_GET['view'] == 700) require 'profinmd_700K.php';
    else if ($_GET['view'] == 1) require 'profinmd_1M.php';