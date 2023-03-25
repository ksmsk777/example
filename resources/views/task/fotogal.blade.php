<?php

$galary = array(

    [ "Category" => 'images/gallery/vmiatiny/black_amg_c63' ,
        "CategoryT" => 'images/gallery/vmiatiny/black_amg_c63/thumb' ,
        "Title" => 'черный AMG c63 вытянули вмятины'
    ] ,


    [ "Category" => 'images/gallery/plenka/bmw5_white_antigrav' ,
        "CategoryT" => 'images/gallery/plenka/bmw5_white_antigrav/thumb' ,
        "Title" => 'Антигравийная пленка для BMW'
    ] ,

    [ "Category" => 'images/gallery/plenka/blue_ford_pickup' ,
        "CategoryT" => 'images/gallery/plenka/blue_ford_pickup/thumb' ,
        "Title" => 'Синий Ford Ranger'
    ] ,

    [ "Category" => 'images/gallery/plenka/white_land_cruiser' ,
        "CategoryT" => 'images/gallery/plenka/white_land_cruiser/thumb' ,
        "Title" => 'антигравийная оклейка Белый Land Cruiser'
    ] ,

    [ "Category" => 'images/gallery/25' ,
        "CategoryT" => 'images/gallery/25/thumb' ,
        "Title" => 'Красный AMG забронирован'
    ] ,

    [ "Category" => 'images/gallery/plenka/Range_Rover_White' ,
        "CategoryT" => 'images/gallery/plenka/Range_Rover_White/thumb' ,
        "Title" => 'Белый Range Rover готов'
    ] ,

    [ "Category" => 'images/gallery/plenka/discovery_bron' ,
        "CategoryT" => 'images/gallery/plenka/discovery_bron/thumb' ,
        "Title" => 'Закатали Discovery'
    ] ,
    [ "Category" => 'images/gallery/vmiatiny/sentiabr_0102' ,
        "CategoryT" => 'images/gallery/vmiatiny/sentiabr_0102/thumb' ,
        "Title" => 'Убрали вмятины'
    ] ,

    [ "Category" => 'images/gallery/plenka/hyundai_black' ,
        "CategoryT" => 'images/gallery/plenka/hyundai_black/thumb' ,
        "Title" => 'бронепленка для Hyundai'
    ] ,

    [ "Category" => 'images/gallery/plenka/citroen_commerc' ,
        "CategoryT" => 'images/gallery/plenka/citroen_commerc/thumb' ,
        "Title" => 'Оклеили Citroen'
    ] ,

    [ "Category" => 'images/gallery/plenka/bmw_x6_blue' ,
        "CategoryT" => 'images/gallery/plenka/bmw_x6_blue/thumb' ,
        "Title" => 'Оклейка пленкой BMW X6'
    ] ,

    [ "Category" => 'images/gallery/tonir/bmw' ,
        "CategoryT" => 'images/gallery/tonir/bmw/thumb' ,
        "Title" => 'Тонируем BMW X6'
    ] ,

    [ "Category" => 'images/gallery/tonir/mers' ,
        "CategoryT" => 'images/gallery/tonir/mers/thumb' ,
        "Title" => 'Тонируем черный Mersedes'
    ] ,

    [ "Category" => 'images/gallery/24' ,
        "CategoryT" => 'images/gallery/24/thumb' ,
        "Title" => 'Немного фото по оклейке пленкой'
    ] ,

    [ "Category" => 'images/gallery/23' ,
        "CategoryT" => 'images/gallery/23/thumb' ,
        "Title" => ' '
    ] ,

    [ "Category" => 'images/gallery/part1' ,
        "CategoryT" => 'images/gallery/thumb' ,
        "Title" => ' '
    ] ,

    [ "Category" => 'images/gallery/part2' ,
        "CategoryT" => 'images/gallery/thumb' ,
        "Title" => ' '
    ] ,

    [ "Category" => 'images/gallery/part3' ,
        "CategoryT" => 'images/gallery/thumb' ,
        "Title" => ' '
    ] ,

    [ "Category" => 'images/work-process/removing-dents' ,
        "CategoryT" => 'images/work-process/removing-dents' ,
        "Title" => 'Процесс удаления вмятин без покраски'
    ] ,
    [ "Category" => 'images/work-process/protective-tape' ,
        "CategoryT" => 'images/work-process/protective-tape' ,
        "Title" => ' '
    ] ,

    [ "Category" => 'images/gallery/plenka/audi_a5_red' ,
        "CategoryT" => 'images/gallery/plenka/audi_a5_red/thumb' ,
        "Title" => 'Audi A5 из черного в красный'
    ] ,

    [ "Category" => 'images/new_work/10_04_21/merc' ,
        "CategoryT" => 'images/new_work/10_04_21/merc' ,
        "Title" => 'Оклейка небесной пленкой Mercedes Coupe'
    ] );




class MyGalerySearch
{

    public $directory;
    public $directoryT;
    public  $allowed_types = array('jpg', 'jpeg', 'gif', 'png');    //разрешеные типы изображений
    public $file_parts = array();
    public $ext = '';
    public $title = '';
    public $i = 0;


    public function getDirT()
    {
        return $this->directoryT;
    }

    public function setDirectoryT($directoryT)
    {
        $this->directoryT = $directoryT;
    }


    public function getDir()
    {
        return $this->directory;
    }

    public function setDirectory($directory)
    {
        $this->directory = $directory;
    }



    public function openDir()
    {
        $dir_handle = @opendir($this->directory) or die("Ошибка, в адресе каталога");
        return $dir_handle;
    }

    public function searchFiles($dir_handle)
    {

        while ($file = readdir($dir_handle))	//поиск по файлам
        {
            if($file=='.' || $file == '..') continue;	//пропустить ссылки на другие папки
            $file_parts = explode('.',$file);	//разделить имя файла и поместить его в массив
            $ext = strtolower(array_pop($file_parts));	//последний элеменет - это расширение
            $title = implode('.',$file_parts);
            $title = htmlspecialchars($title);
            $nomargin='';
            if(in_array($ext,$this->allowed_types))
            {

                if(($this->i+1)%4==0) $nomargin='nomargin';	//последнему изображению в ряде присваевается CSS класс "nomargin"

                echo '
  <div id="20" class="pic '.$nomargin.'" style="background:url('.$this->directoryT.'/'.$file.') no-repeat 50% 50%; background-size: cover;  ">
  <a href="'.$this->directory.'/'.$file.'" title="'.$title.'" target="_blank"  class="fancy" rel="gal65" >'.$title.'</a>
  </div>';
                $this->i++;

            }
        } closedir($dir_handle);	//закрыть папку
    }
}
?>




    <!DOCTYPE html>
<html lang="ru">
<head>
    <title>Фотографии выполненных работ Shiftage, оклейка авто пленкой, удаление вмятин, тонировка авто</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="keywords" content=" ">
    <meta name="description" content=" ">
    <meta name="google-site-verification" content="Oe4S6qjzz04czMqRG9I7vmSgJPYRUfmH5QpceNRuqKY" />


    <link rel="icon" href="/favicon.ico">



    <link href="/css/style.min.css?3" rel="stylesheet">
    <script async src="/js/jquery.min.js?3"></script>
    <script src="/js/lazysizes.min.js" ></script>


    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">





    <link rel="stylesheet" type="text/css" href="lightbox/css/jquery.lightbox-0.5.css">

    <link rel="stylesheet" type="text/css" href="../css1/shiftgal.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="lightbox/js/jquery.lightbox-0.5.pack.js"></script>
    <script type="text/javascript" src="script.js"></script>




    <style>

        a.hiden  {

            border: 1px solid #00BBFF;
            border-radius: 119px;

            text-decoration:none;

            color: rgba(0, 187, 255, 0);

        }
        a.hiden:active
        {

            border: 1px solid #00BBFF  !important ;

            color: rgba(0, 187, 255, 0);
            text-decoration:none   ;

            outline: none;



        }


        a.hiden  {

            border: 1px solid #00BBFF;
            border-radius: 119px;
            color: #00BBFF;
            text-decoration:none;
            outline: none;

        }

        .hiden a:hover{
            color: #00BBFF;
            border: 1px solid #00BBFF   ;
            text-decoration:none    ;

            outline: none;

        }

        a:active {


            outline: none;


            color: #ffffff;

        }

    </style>





</head>


<body>


<div class="wrap">
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-1"></div>
                <div class="col-xl-10">
                    <div class="padding_fix"></div>
                    <div class="row header-c cont-c2 nofixed">
                        <div id="fix" class="col-lg-10 col-md-12 col-xs-10">
                            <div class="row">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <a href="/" class="logotype"><img src="/images/logotype.png" /></a>
                                </div>
                                <noindex><div class="col-md-12 typicle-phone hidden-md-up">
                                        <a href="tel:+7 (495) 20-11-888" class="phone">+7 (495) 20-11-888</a>
                                    </div></noindex>
                                <div class="col-md-5 col-lg-5 col-xl-5">
                                    <ul class="menu">
                                        <li class="li1"><a href="/company/">О компании</a></li>
                                        <li class="li2"><a href="/actions/">Акции</a></li>
                                        <li class="li3"><a href="/contacts/">Контакты</a></li>
                                        <li class="li4  "><a href="/services/">Все услуги</a></li>
                                        <li class="li5  "><a href="#">Галерея</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-5 col-lg-5 hidden-sm-down cont2">
                                    <div class="time_work">
                                        <p>Пн-Вс: 9:00 – 21:00</p>
                                    </div>
                                    <noindex>  <div class="phone">+7 (495) 20-11-888</div></noindex>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row"  >
                        <div class="col-md-12">
                            <div class="menu-c">
                                <ul>

                                    <li><a href="/services/antigravijnaja_zashhitnaja_plenka.html">Защитная пленка</a></li>
                                    <li><a href="/services/udalenie_vmjatin_bez_pokraski.html">Удаление вмятин</a></li>
                                    <li><a href="/services/avtovinil.html">Автовинил</a></li>
                                    <li><a href="/services/tonirovka.html">Тонировка</a></li>
                                    <li ><a href="/services/polirovka_obrabotka_kuzova.html">Полировка</a></li>
                                    <li><a href="/services/shumka.html">Шумоизоляция</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="service-header" style="background-image: url(/getimg.php?path=bd419d1ffb91ac8.jpg&w=1600&h=1600&m=resize);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-1"></div>
                <div class="col-xl-10">
                    <div class="title" style="text-shadow: #000 1px 1px 1px;">Концепция компании ShiftAge: <br/><span style="text-shadow: #000 1px 1px 1px;">детейлинг – это быстро, просто и удобно</span></div>
                    <div class="text"  style="text-shadow: #000 1px 1px 1px;">
                        Компания ShiftAge практикует концепцию доступного детейлинга с 2009 года</div>

                </div>
                <div class="col-xl-1"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">

            <div class="col-xl-10">


            </div></div></div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-1"></div>
            <div class="col-xl-10">



                <div style="width:100%;" >
                    <?php


                    $a =0;
                    $total = 0;
                    foreach ( $galary as $var ) {
                        $a ++;

                        if ($a < 5){
                            echo '<div style="margin: 20px;"> <h2>' . $var['Title'] . '</h2>   <hr>  <div id="galary" >';
                        }else{

                            echo  '<div class="wow fadeIn " style=" animation-duration: 2s; display:none;  animation-name: fadeIn; margin: 20px;">  <h2>' . $var['Title'] . '</h2>  <hr>  <div id="galary">';
                        }
                        echo '<div class="galleryItem">';
                        $newOb = new MyGalerySearch;
                        $newOb->setDirectory($var['Category']);
                        $newOb->setDirectoryT($var['CategoryT']);
                        $newOb->searchFiles( $newOb->openDir());
                        // $total = $total + $newOb->i;
                        echo ' </div> </div></div> <div class="clear"> </div>';

                    }

                    //echo $total;
                    ?>
                </div></div></div></div>
    <script>

        $(function(){
            $("div").slice(0, 10).show(); // select the first ten
            $("#load").click(function(e){ // click event for load more
                e.preventDefault();
                $("div:hidden").slice(0, 10).show(); // select next 10 hidden divs and show them
                if($("div:hidden").length == 0){ // check if any hidden divs still exist
                    //МОй варик скрыть кнопку
                    var hiden = document.body.querySelector('#load');
                    hiden.style.display = 'none';

                    // alert("все"); // alert if there are none left
                }
            });
        });


    </script>
    <div class="clear"> </div>

    <div   class="typicle block-text wow fadeIn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-1"></div>
                <div class="col-xl-10">
                    <div class="text hiden"  >

                        <a href="#" id="load" class="hiden" style="font-weight: 400; padding: 0.375rem 1rem;">Загрузить еще фото</a>



                    </div>
                </div>
                <div class="col-xl-1"></div>
            </div>
        </div>
    </div>


    <script async src="/js/compile.js"></script>

    <script src="/js/jquery.maskedinput.min.js"></script>
    <script src="/js/hystmodal.min.js"></script>


    <script async>
        (function(w,d,e){var a='all',b='tou',src=b+'c'+'h';src='m'+'o'+'d.c'+a+src;var jsHost=(("https:"==d.location.protocol)?"https://":"http://")+src,s=d.createElement(e),p=d.getElementsByTagName(e)[0];s.async=1;s.src=jsHost+"."+"r"+"u/d_client.js?param;ref"+escape(d.referrer)+";url"+escape(d.URL)+";cook"+escape(d.cookie)+";";if(!w.jQuery){var jq=d.createElement(e);jq.src=jsHost+"."+"r"+'u/js/jquery-1.7.min.js';jq.onload=function(){p.parentNode.insertBefore(s,p);};p.parentNode.insertBefore(jq,p);}else{p.parentNode.insertBefore(s,p);}}(window,document,'script'));
    </script>


</body>
</html>
