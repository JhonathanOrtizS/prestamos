<?php
    class vistasModelo{
        /* modelo para obtener las vistas */ 

        protected static function obtener_vistas_modelo($vistas){
            $listablanca = ["home","client-list","client-new","client-serch","client-update"
            ,"company","item-list","item-new","item-serch","item-update","login","reservation-list"];

            if(in_array($vistas, $listablanca)){
                if(is_file("./vistas/contenidos/".$vistas."-view.php")){
                    $contenido = "./vistas/contenidos/".$vistas."-view.php";
                }else {
                    $contenido ="404";
                }
            }elseif($vistas=="login" || $vistas=="index"){
                $contenido ="login";
            }else {
                $contenido ="404";
            }
            return $contenido;
        }
    }