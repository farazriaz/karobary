<?php 
  $dest = "farazriaz72@gmail.com"; 
  $fromaddy = "sales@thriftops.com"; 
  mail("<$dest>","Test from php mail","Test","From:<$fromaddy>","-f$fromaddy"); 
?> 