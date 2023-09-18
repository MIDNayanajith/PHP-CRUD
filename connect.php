<?php

     $con = new mysqli('localhost','root','','crud_operations');

            if(!$con){

                die.(mysqli.error($con));
            }

?>