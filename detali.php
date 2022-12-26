<?php
include('inc/db.php');
$hello = $_GET['id'];
if($hello == '26')
{
    echo "<script>
    window.location.href='fortnite.php';
    </script>";

} 
elseif($hello == '10')
{

	 echo "<script>
    window.location.href='dota2.php';
    </script>";
}
elseif($hello == '25')
{

	 echo "<script>
    window.location.href='valorant.php';
    </script>";
}
elseif($hello == '27')
{

	 echo "<script>
    window.location.href='pubg.php';
    </script>";
}
elseif($hello == '19')
{

	 echo "<script>
    window.location.href='warface.php';
    </script>";
}

elseif($hello == '20')
{

	 echo "<script>
    window.location.href='minecraft.php';
    </script>";
}
elseif($hello == '24')
{

	 echo "<script>
    window.location.href='gta.php';
    </script>";
}
elseif($hello == '17')
{

	 echo "<script>
    window.location.href='csgo.php';
    </script>";
}


?>