<?php

    plantilla::inicio();
?>  

<div class="row" style="margin-top: 20px">
            <div class="col-lg-12">
                <h1 class="page-header">Nuestras imagenes
                </h1>
            </div>
        </div>
        <!-- /.row -->  

        <div class="row">
            <?php
                //paginación con php
                $folder = "fotos/";
                $filetype = '*.jpg';
                $files = glob($folder . $filetype);
                $total = count($files);
                $per_page = 20;
                $last_page = ceil($total / $per_page);
                if(!isset($page)) {$page = 1;}
                if(isset($_GET["page"])  && ($_GET["page"] <=$last_page) && ($_GET["page"] > 0) ){
                    $page = $_GET["page"];
                    $offset = ($per_page + 1)*($page - 1);     
                }else{
                    echo " página fuera de rango";
                    $page=1;
                    $offset=0; 
                }    
                $max = $offset + $per_page;    
                if($max>$total){
                    $max = $total;
                }
    
                

                function show_pagination($current_page, $last_page){
                    echo '<div class="row">';
                    if( $current_page > 1 ){
                        echo ' <a class="text-center btn btn-info" href="?page='.($current_page-1).'"> &lt;&lt; Anterior </a> ';
                    }
                    if( $current_page < $last_page ){
                        echo ' <a class="text-center btn btn-info" href="?page='.($current_page+1).'"> Siguiente &gt;&gt; </a> ';  
                    }
                    echo '</div>';
                }
                //Video amadis
                $imagenes = cargar_imagenes();
                $url = base_url('');

                for($i = $offset; $i< $max && $i < count($imagenes); $i++){
                    $file = $imagenes[$i];
                    $foto = "fotos/{$file->id}.jpg";
                    echo <<<FOTO
                    <div class="col-md-3 portfolio-item">
                        <a href="{$url}/web/ver_foto/{$file->id}">
                            <img class="img-responsive" src="{$foto}" alt="">
                        </a>
                     </div>
FOTO;
               
                }        

                show_pagination($page, $last_page);
                /*foreach ($imagenes as $imagen) {
                    $foto = "fotos/{$imagen->id}.jpg";
                    if(!is_file($foto)){
                        $foto = "http://placehold.it/750x450/?text='No foto'";
                    }else{

                        $foto = "{$url}/{$foto}";
                    }
                    echo <<<FOTO
                    <div class="col-md-3 portfolio-item">
                        <a href="{$url}/web/ver_foto/{$imagen->id}">
                            <img class="img-responsive" src="{$foto}" alt="">
                        </a>
                     </div>
FOTO;
                }*/
            ?>
        </div>

        <hr>
        </div>