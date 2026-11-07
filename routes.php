<?php

require_once './includes/header.php';
require_once './includes/nav.php';


$route=$_GET['page'];

if($route=="index"){

require_once'./views/index.php';

}
else if($route=="login"){

require_once'./views/login.php';

}
else if($route=="majors"){

require_once'./views/majors.php';

}
else if($route=="register"){

require_once'./views/register.php';

}
else if($route=="doctors"){

require_once'./views/doctors.php';

}
else if($route=="contact"){

require_once'./views/contact.php';

}
else if($route=="appointments"){

require_once'./views/appointments.php';

}


require_once './includes/footer.php';

























?>