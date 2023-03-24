
@extends('layouts.task')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>150</h3>

                                <p>New Orders</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>53<sup style="font-size: 20px">%</sup></h3>

                                <p>Bounce Rate</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>44</h3>

                                <p>User Registrations</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>65</h3>

                                <p>Unique Visitors</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->

                <h4>Клининг квартиры:</h4>
                <?php

                $res = '';
                $space = 22;
                $defMoney = $space * 100 . ' руб.';
                $dopUslugi = 0;
                $checked = ' ';
                $checkedokna = ' ';



                if (isset($_POST["space"])) {


                    if (isset($_POST['himia'])) {
                        $checkedokna = ' checked';
                        $dopUslugi += 241;
                    } else {

                        $проверял = '';
                    }

                    if (isset($_POST['okna'])) {
                        $checked = ' checked';
                        $dopUslugi += 2000;
                    } else {

                        $checked = '';
                    }


                    $space = ($_POST['space']);
                    if (is_numeric($space)) {
                        $res = $dopUslugi + $space * 100 . ' руб.';
                    } else {
                        echo '<div class="alert alert-danger" style="width:20%">ЗАПОЛНЕННО НЕ КОРРЕКТНО !!!</div>';
                    }
                } else {
                    echo 'Заполните м2';
                }


                ?>

                <script>

                    document.addEventListener('click', function (e) {
                        if (e.target.classList.contains("increase")) {
                            ++e.target.parentElement.querySelector("input").value;
                        } else if (e.target.classList.contains("decrease")) {
                            --e.target.parentElement.querySelector("input").value;
                        }
                    })
                </script>

                <form name="calc" method="post" action="{{route('task.index')}}">
                    @csrf
                    Площадь квартиры:<br>
                    <div>
                        <button class="decrease" type="button">-</button>
                        <input type="text" value="{{$space}}" name="space" class="mb-3" required>
                        <button class="increase" type="button">+</button>
                    </div>
                    Добавить:<br>
                    <input type="checkbox" name="himia" class="" {{$checkedokna}}> химчиска<br>
                    <input type="checkbox" name="okna" class="" {{$checked}}> мойка окон<br>
                    <input type="submit" value="рассчитать стоимость " class="btn btn-warning mt-2">

                </form>
                <br>
                <h6>Cтоимость уборки составит:</h6>
                <?php
                if (isset($_POST["space"])) {
                    echo $res;

                } else {
                    echo $defMoney;
                }

                ?>
{{--
                <h2>Калькулятор через классы шмасы12</h2>
                <?php

                class MyNewClass
                {

                    public $space = 11;

                    public function myNewFunc()
                    {
                        return $this->space * 102;

                    }


                }

                $newObj = new MyNewClass;
                echo $newObj->myNewFunc();


                ?>

                --}}
                <h4> Галерея на PHP</h4>
                <?php


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

{{--Скрипт по кнопке отображет дивы с фотками--}}
                <script>

                    $(function(){
                        $("div").slice(0, 10).show(); // select the first ten
                        $("#load").click(function(e){ // click event for load more
                            e.preventDefault();
                            $("div:hidden").slice(0, 10).show(); // select next 10 hidden divs and show them
                            if($("div:hidden").length == 0){ // check if any hidden divs still exist
                               //МОй варик скрыть кнопку
                                 var hiden = document.body.querySelector('.hiden');
                                 hiden.style.display = 'none';

                                  alert("Большен фотографий нет"); // alert if there are none left
                            }
                        });
                    });


                </script>

                <?php
                $galary = array(


                        [ "Category" => 'images/galary2' ,
                            "CategoryT" => 'images/galary2/thumb' ,
                            "Title" => 'CITROENNN!'
                        ] ,
                        [ "Category" => 'images/galery' ,
                            "CategoryT" => 'images/galery/thumb' ,
                            "Title" => 'BMW from Array'
                        ] ,
                         [ "Category" => 'images/galary2' ,
                             "CategoryT" => 'images/galary2/thumb' ,
                             "Title" => 'Citroen from Array'
                         ] );

                $a =0;
                foreach ( $galary as $var ) {
                    $a ++;

                    if ($a < 3){
                        echo '<div> <h3>' . $var['Title'] . '</h3> </div> <hr><div> <div id="galary">';
                    }else{

                    echo  '<div  style="display:none;"> <div> <h1>' . $var['Title'] . '</h1> </div> <hr><div> <div id="galary">';
                    }

                    $newOb = new MyGalerySearch;
                    $newOb->setDirectory($var['Category']);
                    $newOb->setDirectoryT($var['CategoryT']);
                    $newOb->searchFiles( $newOb->openDir());
                    echo ' </div>   </div> <div class="clear"></div>';

                }

// добавить:
                //Папку с тумбами
                //Класс НЕ первым двум элементам 'display: none;'


                    ?>

            </div>
            <div class="clear"></div>


                <div   class="typicle block-text wow fadeIn">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-1"></div>
                            <div class="col-xl-10">
                                <div class="text">

                                    <a href="" id="load" class="hiden">Загрузить еще фото</a>

                                </div>
                            </div>
                            <div class="col-xl-1"></div>
                        </div>
                    </div>
                </div>












                //////////////////////////////// рабочая схема ////////////////////////////////////

     {{--    <div id="galary">


                     <div> <h3>Бмв</h3> </div>
             <div>
             <?php
             $firstObj = new MyGalerySearch;
             $firstObj->setDirectory('images/galery');
             $firstObj->searchFiles( $firstObj->openDir());
             ?>
             </div>

             </div>
                <div class="clear"></div>

                <div id="galary">
                <div> <h3>Ситроен</h3> </div>
                    <div>
                       <?php
                        $firstObj1 = new MyGalerySearch;
                        $firstObj1->setDirectory('images/galary2');
                        $firstObj1->searchFiles( $firstObj1->openDir());
                        ?>
                    </div>

                    </div>
                <div class="clear"></div>--}}


//////////////////////////////////конец рабочей схемы//////////////////////////////////////////////



                <!-- /.row (main row) -->

                    <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

