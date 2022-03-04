<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>  </title> 

        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="/css/styles.css">
        <script src="https://kit.fontawesome.com/391a01776a.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <main>
            <div class="content">

                <header>
                    {{$header}}
                </header>
                <section>

                   {{$content}}
                </section>
              
            </div>

            <nav>
               <div class="nav-header">
                <div class="program-title" >
                    <button> <i class="fa-solid fa-bars"  ></i> </button>
                    <h1>إسم البرنامج </h1>
                </div>
                <div class="profile" >
 
                    <i class="fa-solid fa-caret-left"></i>
                    <span> إسم المستخدم  </span>
                    <img src="/img/profiles/pro-1.jpg" alt="">
                    
                </div>
               </div>

               <div class="nav-content">
                    <ul>
                        <li> 
                            <a href="" class="home  active" >
                                <span></span>
                                <h3> الرئيسية  </h3>
                                <button> <i class="fa fa-home" ></i> </button>
                            </a>
                        </li>

                        <li> 
                            <a href="/managments" class="mangments " >
                                <span class="count"> 699 </span>
                                <h3> الإدارات </h3>
                                <button> <i class="fa fa-briefcase"></i></button>
                            </a>
                        </li>


                        <li> 
                            <a href="" class="emps" >
                                <span class="count"> 21 </span>
                                <h3> الموظفين  </h3>
                                <button> <i class="fa fa-person"></i></button>
                            </a>
                        </li>

                    </ul>
               </div>
            </nav>
           
        </main>
    </body>
</html>
