<?php
include 'connection.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HTIAHS STUDENTS RESULT</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="img1"><img src="imgs/htiahs.png" alt="H T I A H S"></div>
            <h1 class=" htiahs-l">Higher Technological Institute<br> for Applied Health Sciences in Sohag</h1>

            <div class="img2"><img src="imgs/e-learning.png" alt="E-LEARNING"></div>

        </nav>
    </header>
    <div class="container text-center mt-5">
        <h1 class=" mb-5">HTIAHS STUDENTS RESULT</h1>
        <form method="post" class="form-control input-group flex-nowrap p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
            <!-- <input type="text" name="search">-->
            <input type="text" class="form-control" placeholder="أكتب الرقم القومى" aria-label="ssn" aria-describedby="addon-wrapping" name="search">
            <button class="btn btn-dark" name="submit">Search</button>
            <!-- <span class="input-group-text" name="submit" id="addon-wrapping"><button type="button"  class="btn btn-info"><i class="fa-solid text-white fa-magnifying-glass"></i></button></span> -->
        </form>
        <div class="container my-5"> <?php
                                        if (isset($_POST['submit'])) {
                                            $search = $_POST["search"];
                                            $sql = "Select * from resultdb where ssn = '$search'";
                                            $result = mysqli_query($con, $sql);
                                            if ($result) {
                                                if ($row = mysqli_fetch_assoc($result)) {
                                                    $id = $row['ssn'];
                                                    $name = $row['name'];
                                                    $section = $row['section'];
                                                    $level = $row['level'];
                                                    $mat1 = $row['m1'];
                                                    $mat2 = $row['m2'];
                                                    $mat3 = $row['m3'];
                                                    $mat4 = $row['m4'];
                                                    $mat5 = $row['m5'];
                                                    $money = $row['money'];
                                                    if ($section == "الاشعة" && $level == "الاولى تكميلي") {
                                                        echo '<ul class="list-group list-group-item-info text-center">
                                                    <li class="list-group-item  active">الرقم القومى</li>
                                                    <li class="list-group-item list-group-item-action">' . $id . '</li>
                                                    <li class="list-group-item active">اسم الطالب</li>
                                                    <li class="list-group-item list-group-item-action">' . $name . '</li>
                                                    <li class="list-group-item active">القسم</li>
                                                    <li class="list-group-item list-group-item-action">' . $section . '</li>
                                                    <li class="list-group-item active">الفرقة</li>
                                                    <li class="list-group-item list-group-item-action">' . $level . '</li>
                                                    <li class="list-group-item active">تشريح بالاشعة المقطعية</li>
                                                    <li class="list-group-item list-group-item-action">' . $mat1 . '</li>
                                                    <li class="list-group-item active">الاورام بالاشعة</li>
                                                    <li class="list-group-item list-group-item-action">' . $mat2 . '</li>
                                                    <li class="list-group-item active">طرق التصوير</li>
                                                    <li class="list-group-item list-group-item-action">' . $mat3 . '</li>
                                                    <li class="list-group-item active">اللغة الانجليزية</li>
                                                    <li class="list-group-item list-group-item-action">' . $mat4 . '</li>
                                                    <li class="list-group-item active">الحاسب الالي</li>
                                                    <li class="list-group-item list-group-item-action">' . $mat5 . '</li>
                                                    <li class="list-group-item active">المبلغ المتبقي</li>
                                                    <li class="list-group-item list-group-item-action">' . $money . '</li>

                                                </ul>';
                                                    } else if ($section == "الاشعة" && $level == "الاولى") {
                                                        echo '<ul class="list-group list-group-item-info text-center">
                                                    <li class="list-group-item  active">الرقم القومى</li>
                                                    <li class="list-group-item list-group-item-action">' . $id . '</li>
                                                    <li class="list-group-item active">اسم الطالب</li>
                                                    <li class="list-group-item list-group-item-action">' . $name . '</li>
                                                    <li class="list-group-item active">القسم</li>
                                                    <li class="list-group-item list-group-item-action">' . $section . '</li>
                                                    <li class="list-group-item active">الفرقة</li>
                                                    <li class="list-group-item list-group-item-action">' . $level . '</li>
                                                    <li class="list-group-item active">تشريح عام واشعاعي</li>
                                                    <li class="list-group-item list-group-item-action">' . $mat1 . '</li>
                                                    <li class="list-group-item active">فيزياء تطبيقية </li>
                                                    <li class="list-group-item list-group-item-action">' . $mat2 . '</li>
                                                    <li class="list-group-item active"> تكنولوجيا التصوير الاشعاعى</li>
                                                    <li class="list-group-item list-group-item-action">' . $mat3 . '</li>
                                                    <li class="list-group-item active">اللغة الانجليزية</li>
                                                    <li class="list-group-item list-group-item-action">' . $mat4 . '</li>
                                                    <li class="list-group-item active"> تسجيل طبي واحصاء</li>
                                                    <li class="list-group-item list-group-item-action">' . $mat5 . '</li>
                                                    <li class="list-group-item active">المبلغ المتبقي</li>
                                                    <li class="list-group-item list-group-item-action">' . $money . '</li>

                                                </ul>';
                                                    } else if ($section == "الاشعة" && $level == "الثانية") {
                                                        echo '<ul class="list-group list-group-item-info text-center">
                                                    <li class="list-group-item  active">الرقم القومى</li>
                                                    <li class="list-group-item list-group-item-action">' . $id . '</li>
                                                    <li class="list-group-item active">اسم الطالب</li>
                                                    <li class="list-group-item list-group-item-action">' . $name . '</li>
                                                    <li class="list-group-item active">القسم</li>
                                                    <li class="list-group-item list-group-item-action">' . $section . '</li>
                                                    <li class="list-group-item active">الفرقة</li>
                                                    <li class="list-group-item list-group-item-action">' . $level . '</li>
                                                    <li class="list-group-item active">الغرفة المظلمة</li>
                                                    <li class="list-group-item list-group-item-action">' . $mat1 . '</li>
                                                    <li class="list-group-item active">مبادئ علم الاورام</li>
                                                    <li class="list-group-item list-group-item-action">' . $mat2 . '</li>
                                                    <li class="list-group-item active">التأثيرات البيولوجية</li>
                                                    <li class="list-group-item list-group-item-action">' . $mat3 . '</li>
                                                    <li class="list-group-item active">اللغة الانجليزية</li>
                                                    <li class="list-group-item list-group-item-action">' . $mat4 . '</li>
                                                    <li class="list-group-item active"> الاسعافات الاولية</li>
                                                    <li class="list-group-item list-group-item-action">' . $mat5 . '</li>
                                                    <li class="list-group-item active">المبلغ المتبقي</li>
                                                    <li class="list-group-item list-group-item-action">' . $money . '</li>

                                                </ul>';
                                                    } else if ($section == "الاشعة" && $level == "الثانية تكميلي") {
                                                        echo '<ul class="list-group list-group-item-info text-center">
                                                    <li class="list-group-item  active">الرقم القومى</li>
                                                    <li class="list-group-item list-group-item-action">' . $id . '</li>
                                                    <li class="list-group-item active">اسم الطالب</li>
                                                    <li class="list-group-item list-group-item-action">' . $name . '</li>
                                                    <li class="list-group-item active">القسم</li>
                                                    <li class="list-group-item list-group-item-action">' . $section . '</li>
                                                    <li class="list-group-item active">الفرقة</li>
                                                    <li class="list-group-item list-group-item-action">' . $level . '</li>
                                                    <li class="list-group-item active">العلاج الاشعاعى</li>
                                                    <li class="list-group-item list-group-item-action">' . $mat1 . '</li>
                                                    <li class="list-group-item active">الاوعية الدموية</li>
                                                    <li class="list-group-item list-group-item-action">' . $mat2 . '</li>
                                                    <li class="list-group-item active">طرق تصوير الثدى</li>
                                                    <li class="list-group-item list-group-item-action">' . $mat3 . '</li>
                                                    <li class="list-group-item active">المسح الذري</li>
                                                    <li class="list-group-item list-group-item-action">' . $mat4 . '</li>
                                                    <li class="list-group-item active">الحاسب الالي</li>
                                                    <li class="list-group-item list-group-item-action">' . $mat5 . '</li>
                                                    <li class="list-group-item active">المبلغ المتبقي</li>
                                                    <li class="list-group-item list-group-item-action">' . $money . '</li>

                                                </ul>';
                                                    }

                                                    //        
                                                    else if ($section == "التحاليل والمختبرات" && $level == "الثانية تكميلي") {
                                                        echo '<ul class="list-group list-group-item-info text-center">
                                                    <li class="list-group-item  active">الرقم القومى</li>
                                                    <li class="list-group-item list-group-item-action">' . $id . '</li>
                                                    <li class="list-group-item active">اسم الطالب</li>
                                                    <li class="list-group-item list-group-item-action">' . $name . '</li>
                                                    <li class="list-group-item active">القسم</li>
                                                    <li class="list-group-item list-group-item-action">' . $section . '</li>
                                                    <li class="list-group-item active">الفرقة</li>
                                                    <li class="list-group-item list-group-item-action">' . $level . '</li>
                                                    <li class="list-group-item active">ميكروبيولوجي  طبي</li>
                                                    <li class="list-group-item list-group-item-action">' . $mat1 . '</li>
                                                    <li class="list-group-item active">تحاليل  دلالات  الاورام</li>
                                                    <li class="list-group-item list-group-item-action">' . $mat2 . '</li>
                                                    <li class="list-group-item active">المناعة  الاكلينيكية</li>
                                                    <li class="list-group-item list-group-item-action">' . $mat3 . '</li>
                                                    <li class="list-group-item active">مبادئ صيانة الاجهزة</li>
                                                    <li class="list-group-item list-group-item-action">' . $mat4 . '</li>
                                                    <li class="list-group-item active">الأجهزة والمختبرات</li>
                                                    <li class="list-group-item list-group-item-action">' . $mat5 . '</li>
                                                    <li class="list-group-item active">المبلغ المتبقي</li>
                                                    <li class="list-group-item list-group-item-action">' . $money . '</li>

                                                </ul>';
                                                    }

                                                    //       
                                                    else if ($section == "التحاليل والمختبرات" && $level == "الاولى") {
                                                        echo '<ul class="list-group list-group-item-info text-center">
                                                        <li class="list-group-item  active">الرقم القومى</li>
                                                        <li class="list-group-item list-group-item-action">' . $id . '</li>
                                                        <li class="list-group-item active">اسم الطالب</li>
                                                        <li class="list-group-item list-group-item-action">' . $name . '</li>
                                                        <li class="list-group-item active">القسم</li>
                                                        <li class="list-group-item list-group-item-action">' . $section . '</li>
                                                        <li class="list-group-item active">الفرقة</li>
                                                        <li class="list-group-item list-group-item-action">' . $level . '</li>
                                                        <li class="list-group-item active">التشريح</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat1 . '</li>
                                                        <li class="list-group-item active">ميكروبيولوجي عام</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat2 . '</li>
                                                        <li class="list-group-item active">كيمياء حيوية</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat3 . '</li>
                                                        <li class="list-group-item active">اللغة الانجليزية</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat4 . '</li>
                                                        <li class="list-group-item active">تربية صحية</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat5 . '</li>
                                                        <li class="list-group-item active">المبلغ المتبقي</li>
                                                        <li class="list-group-item list-group-item-action">' . $money . '</li>

                                                    </ul>';
                                                    }

                                                    //       
                                                    else if ($section == "التحاليل والمختبرات" && $level == "الاولى تكميلي") {
                                                        echo '<ul class="list-group list-group-item-info text-center">
                                                        <li class="list-group-item  active">الرقم القومى</li>
                                                        <li class="list-group-item list-group-item-action">' . $id . '</li>
                                                        <li class="list-group-item active">اسم الطالب</li>
                                                        <li class="list-group-item list-group-item-action">' . $name . '</li>
                                                        <li class="list-group-item active">القسم</li>
                                                        <li class="list-group-item list-group-item-action">' . $section . '</li>
                                                        <li class="list-group-item active">الفرقة</li>
                                                        <li class="list-group-item list-group-item-action">' . $level . '</li>
                                                        <li class="list-group-item active">كيمياء تحليلية اكلينيكية</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat1 . '</li>
                                                        <li class="list-group-item active">أمراض الدم</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat2 . '</li>
                                                        <li class="list-group-item active">علم الامصال</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat3 . '</li>
                                                        <li class="list-group-item active">الحاسب الالي</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat4 . '</li>
                                                        <li class="list-group-item active">السلامة والصحة المهنية</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat5 . '</li>
                                                        <li class="list-group-item active">المبلغ المتبقي</li>
                                                        <li class="list-group-item list-group-item-action">' . $money . '</li>

                                                    </ul>';
                                                    }

                                                    //       
                                                    else if ($section == "التحاليل والمختبرات" && $level == "الثانية") {
                                                        echo '<ul class="list-group list-group-item-info text-center">
                                                        <li class="list-group-item  active">الرقم القومى</li>
                                                        <li class="list-group-item list-group-item-action">' . $id . '</li>
                                                        <li class="list-group-item active">اسم الطالب</li>
                                                        <li class="list-group-item list-group-item-action">' . $name . '</li>
                                                        <li class="list-group-item active">القسم</li>
                                                        <li class="list-group-item list-group-item-action">' . $section . '</li>
                                                        <li class="list-group-item active">الفرقة</li>
                                                        <li class="list-group-item list-group-item-action">' . $level . '</li>
                                                        <li class="list-group-item active">ميكروبيولوجي طبي</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat1 . '</li>
                                                        <li class="list-group-item active">كيمياء إكلينيكية</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat2 . '</li>
                                                        <li class="list-group-item active">أجهزة  وأدوات معملية</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat3 . '</li>
                                                        <li class="list-group-item active">اللغة الانجليزية</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat4 . '</li>
                                                        <li class="list-group-item active">الجودة  وسلامة المريض</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat5 . '</li>
                                                        <li class="list-group-item active">المبلغ المتبقي</li>
                                                        <li class="list-group-item list-group-item-action">' . $money . '</li>

                                                    </ul>';
                                                    }

                                                    //      
                                                    else if ($section == "تركيبات الاسنان" && $level == "الاولى تكميلي") {
                                                        echo '<ul class="list-group list-group-item-info text-center">
                                                        <li class="list-group-item  active">الرقم القومى</li>
                                                        <li class="list-group-item list-group-item-action">' . $id . '</li>
                                                        <li class="list-group-item active">اسم الطالب</li>
                                                        <li class="list-group-item list-group-item-action">' . $name . '</li>
                                                        <li class="list-group-item active">القسم</li>
                                                        <li class="list-group-item list-group-item-action">' . $section . '</li>
                                                        <li class="list-group-item active">الفرقة</li>
                                                        <li class="list-group-item list-group-item-action">' . $level . '</li>
                                                        <li class="list-group-item active">تشريح</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat1 . '</li>
                                                        <li class="list-group-item active">المواد المعملية للاسنان</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat2 . '</li>
                                                        <li class="list-group-item active">اجهزة جراحية وتقويم</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat3 . '</li>
                                                        <li class="list-group-item active">مكافحة  العدوى</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat4 . '</li>
                                                        <li class="list-group-item active">السلامة والصحة المهنية</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat5 . '</li>
                                                        <li class="list-group-item active">المبلغ المتبقي</li>
                                                        <li class="list-group-item list-group-item-action">' . $money . '</li>

                                                    </ul>';
                                                    }

                                                    //        
                                                    else if ($section == "تركيبات الاسنان" && $level == "الثانية تكميلي") {
                                                        echo '<ul class="list-group list-group-item-info text-center">
                                                        <li class="list-group-item  active">الرقم القومى</li>
                                                        <li class="list-group-item list-group-item-action">' . $id . '</li>
                                                        <li class="list-group-item active">اسم الطالب</li>
                                                        <li class="list-group-item list-group-item-action">' . $name . '</li>
                                                        <li class="list-group-item active">القسم</li>
                                                        <li class="list-group-item list-group-item-action">' . $section . '</li>
                                                        <li class="list-group-item active">الفرقة</li>
                                                        <li class="list-group-item list-group-item-action">' . $level . '</li>
                                                        <li class="list-group-item active">تكنولوجية الاستعاضة</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat1 . '</li>
                                                        <li class="list-group-item active">المعالجة المعملية للاسنان</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat2 . '</li>
                                                        <li class="list-group-item active">اطقم الاسنان الجزئى</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat3 . '</li>
                                                        <li class="list-group-item active">الاستعاضة السنية</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat4 . '</li>
                                                        <li class="list-group-item active">الحاسب الالي</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat5 . '</li>
                                                        <li class="list-group-item active">المبلغ المتبقي</li>
                                                        <li class="list-group-item list-group-item-action">' . $money . '</li>

                                                    </ul>';
                                                    }

                                                    //        
                                                    else if ($section == "تركيبات الاسنان" && $level == "الثانية") {
                                                        echo '<ul class="list-group list-group-item-info text-center">
                                                        <li class="list-group-item  active">الرقم القومى</li>
                                                        <li class="list-group-item list-group-item-action">' . $id . '</li>
                                                        <li class="list-group-item active">اسم الطالب</li>
                                                        <li class="list-group-item list-group-item-action">' . $name . '</li>
                                                        <li class="list-group-item active">القسم</li>
                                                        <li class="list-group-item list-group-item-action">' . $section . '</li>
                                                        <li class="list-group-item active">الفرقة</li>
                                                        <li class="list-group-item list-group-item-action">' . $level . '</li>
                                                        <li class="list-group-item active">أطقم الاسنان الكاملة</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat1 . '</li>
                                                        <li class="list-group-item active">التيجان  والجسور</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat2 . '</li>
                                                        <li class="list-group-item active">مواد صناعة الاسنان</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat3 . '</li>
                                                        <li class="list-group-item active">اللغة الانجليزية</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat4 . '</li>
                                                        <li class="list-group-item active">مهارات التواصل</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat5 . '</li>
                                                        <li class="list-group-item active">المبلغ المتبقي</li>
                                                        <li class="list-group-item list-group-item-action">' . $money . '</li>

                                                    </ul>';
                                                    }

                                                    //       
                                                    else if ($section == "تركيبات الاسنان" && $level == "الاولى") {
                                                        echo '<ul class="list-group list-group-item-info text-center">
                                                        <li class="list-group-item  active">الرقم القومى</li>
                                                        <li class="list-group-item list-group-item-action">' . $id . '</li>
                                                        <li class="list-group-item active">اسم الطالب</li>
                                                        <li class="list-group-item list-group-item-action">' . $name . '</li>
                                                        <li class="list-group-item active">القسم</li>
                                                        <li class="list-group-item list-group-item-action">' . $section . '</li>
                                                        <li class="list-group-item active">الفرقة</li>
                                                        <li class="list-group-item list-group-item-action">' . $level . '</li>
                                                        <li class="list-group-item active">تشريح خاص</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat1 . '</li>
                                                        <li class="list-group-item active">فيزياء</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat2 . '</li>
                                                        <li class="list-group-item active">كيمياء</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat3 . '</li>
                                                        <li class="list-group-item active">اللغة الانجليزية</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat4 . '</li>
                                                        <li class="list-group-item active">تشريح وصفي</li>
                                                        <li class="list-group-item list-group-item-action">' . $mat5 . '</li>
                                                        <li class="list-group-item active">المبلغ المتبقي</li>
                                                        <li class="list-group-item list-group-item-action">' . $money . '</li>

                                                    </ul>';
                                                    }
                                                } else {
                                                    echo '<h1 class="text-danger"> No Data Found!<br> Please check your input again.</h1>';
                                                }
                                            }
                                        }


                                        ?>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/1f5b876522.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>