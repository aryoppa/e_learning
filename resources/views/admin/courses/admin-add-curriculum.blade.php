@extends('layouts.admin.main-admin')
@section('container')
    <section class="margin-top " >
        <div class="sidenav">
            <div class="content content-nav">
                <div class="row p-4">  
                    <section class="section-curriculum sections">
                        <article>
                            <div class="mb-2">
                                <a href="/admin"  class="collapsible btn mb-2 btn-admin">
                                    Dashboard
                                </a>
                            </div>
                            <div class="mb-2">
                                <button type="button"  class="collapsible btn mb-2 btn-admin">
                                    Users
                                </button>
                                <div class="content-collapse">
                                    <ul class="list-lesson">
                                        <a class="d-flex align-items-center chapter-info mb-2 " href="/admin/user-teacher">
                                            <li  >
                                                Teacher 
                                            </li>
                                        </a>
                                        <a class="d-flex align-items-center chapter-info mb-2 " href="/admin/user-student">
                                            <li>
                                                Student 
                                            </li>
                                        </a>

                                        <a class="d-flex align-items-center chapter-info mb-2 " href="/admin/users-setting">
                                            <li>
                                                User Setting
                                            </li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                            <div class="mb-2">
                                <button type="button" id="active" class="collapsible btn mb-2 btn-admin-active">
                                    Courses
                                </button>
                                <div class="content-collapse">
                                    <ul class="list-lesson">
                                        <a class="d-flex align-items-center chapter-info mb-2 " href="/admin/courses-categories">
                                            <li >
                                                Categories 
                                            </li>
                                        </a>
                                        <a class="d-flex align-items-center chapter-info mb-2 " href="/admin/courses-list">
                                            <li>
                                                Course List
                                            </li>
                                        </a>
                                    </ul>
                                </div>

                            </div>
                            <div class="mb-2">
                                <button type="button" class="collapsible btn mb-2 btn-admin">
                                    Quiz
                                </button>
                                <div class="content-collapse">
                                    <ul class="list-lesson">
                                        <a class="d-flex align-items-center chapter-info mb-2 "href="/admin/add-quiz">
                                            <li>
                                                Add Quiz
                                            </li>
                                        </a>
                                        <a class="d-flex align-items-center chapter-info mb-2 "href="/admin/quiz-setting">
                                            <li >
                                                Quiz Setting
                                            </li>
                                        </a>
                                    </ul>
                                </div>

                            </div>
                            <div class="mb-2">
                                <button type="button" class="collapsible btn mb-2 btn-admin">
                                    Certificates
                                </button>
                                <div class="content-collapse">
                                    <ul class="list-lesson">
                                        <a class="d-flex align-items-center chapter-info mb-2 " href="/admin/certificate-list">
                                            <li>
                                                Certificate List 
                                            </li>
                                        </a>
                                        <a class="d-flex align-items-center chapter-info mb-2 " href="/admin/certificate-add">
                                            <li >
                                                Add Certificate
                                            </li>
                                        </a>

                                        <a class="d-flex align-items-center chapter-info mb-2" href="/admin/certificate-setting">
                                            <li  >
                                                Certificate Setting
                                            </li>
                                        </a>
                                    </ul>
                                </div>

                            </div>
                            <div class="mb-2">
                                <button type="button" class="collapsible btn mb-2 btn-admin">
                                    Front Page
                                </button>
                                <div class="content-collapse">
                                    <ul class="list-lesson">
                                        <a class="d-flex align-items-center chapter-info mb-2 " href="/admin/frontpage-home">
                                            <li >
                                                Home Content
                                            </li>
                                        </a>
                                        
                                        <a class="d-flex align-items-center chapter-info mb-2 " href="/admin/frontpage-social">
                                            <li>
                                                Social Setting 
                                            </li>
                                        </a>

                                        <a class="d-flex align-items-center chapter-info mb-2 " href="/admin/frontpage-footer">
                                            <li >
                                                Footer Setting
                                            </li>
                                        </a>

                                        <a class="d-flex align-items-center chapter-info mb-2 " href="/admin/frontpage-account">
                                            <li >
                                                Account Setting
                                            </li>
                                        </a>

                                        <a class="d-flex align-items-center chapter-info mb-2 " href="/admin/frontpage-about-us">
                                            <li >
                                                About Us
                                            </li>
                                        </a>
                                    </ul>
                                </div>

                            </div>
                        </article>
                    </section>
                </div>
            </div>
        </div>
        <div class="margin-left">
            <div class="bg-white" style="padding-bottom: 9rem">
                <div class="content p-5">
                    <div class="box-recommend p-4 mb-4">
                        <h3 style="margin-bottom: 0">Course | All Course</h3>
                    </div>
                    <div class="row p-2 d-flex justify-content-between mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <h4 style="margin-bottom:0">Course 1 | Chapter 1</h4>
                        </div>
                        <div class="col-4 d-flex justify-content-end align-items-center">
                            <div class="row mx-1 pages pages-code d-flex justify-content-end align-items-center">
                                <li class="col-6 d-flex justify-content-center align-items-center pages-point active-button-code ">
                                    <h4 style="margin-bottom:0">Code Class</h4></li>
                                <li class="col-6 d-flex justify-content-end align-items-center pages-point not-active">
                                    <h4 style="margin-bottom: 0" id="p1">123123 </h4>
                                    <button class="btn btn-copy"onclick="copyToClipboard('#p1')"><span class="iconify ms-2" data-icon="tabler:copy" style="color: black;" data-width="25"></span></button>
                                </li>

                            </div>
                         
                        </div>
                    </div>

                    <div class="row d-flex justify-content-start m-auto panel">
                            <li data-rel="1" class="col-2 me-2 d-flex justify-content-center panel-point pointer active-button ">
                                Curriculum</li>
                            <li data-rel="2" class="col-2 me-2 d-flex justify-content-center panel-point pointer ">
                                Certificate</li>
                            <li data-rel="3" class="col-2 me-2 d-flex justify-content-center panel-point pointer ">
                                Enrolled</li>
                            <li data-rel="4" class="col-2 d-flex justify-content-center panel-point pointer ">
                                Leaderboard</li>
                    </div>
                    <section class="section-curriculum sections">
                        <article>
                        <div class="box-recommend mt-2 p-4">
                            <div class="row d-flex justify-content-start ">
                                <div class="add-new-course">
                                    <div class="d-flex justify-content-start"> 
                                        <div class="col-3">
                                            <button id="myBtn_add_lesson" class="btn btn-add-chapter p-2"> <span class="iconify me-1" data-icon="el:plus-sign" data-width="24"></span> Add Lesson</button>
                                            |
                                            <button id="myBtn_add_quiz" class="btn btn-add-chapter p-2">Add Quiz</button>
                                        </div>
                                    
                                    </div>
                                    <div id="myModal_add_lesson" class="modal">
                                        <div class="modal-content">
                                            <div class="box-modal p-4">
                                                <div class="row d-flex justify-content-between">
                                                    <div class="col-4 d-flex align-items-center">
                                                        <span class="title-modal px-5">Add Lesson</span>
                                                    </div>
                                                    <div class="col-2 d-flex justify-content-end">
                                                        <span class="close_add_lesson close me-3">&times;</span>
                                                    </div>
                                                    
                                                    
                                                </div>
                                                
                                            </div>
                                            <div class="box-form p-4">
                                                <form  action=""  enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col pe-4">
                                                            <div class="form-group mb-2">
                                                                <label for="form-label" style="font-size: 23px">Lesson Name </label>
                                                                <input type="text" name="lessonname" id="lessonname"
                                                                    class="form-control form-control-lg p-3" />
                                                            </div>
                                                        </div>
                                                        <div class="col ">
                                                            <div class="form-group mb-2">
                                                                <label for="form-label text-white" style="font-size: 23px">Duration (minute)</label>
                                                                <input type="number" name="duration" id="duration"
                                                                    class="form-control form-control-lg p-3" />
                                                            </div>
                                                        </div>
                                                    </div>                                     
                                                    <div class="col ">
                                                        <div class="form-group mb-2">
                                                            <label for="form-label text-white" style="font-size: 23px">Source</label>
                                                            <input type="text" name="source" id="source" placeholder="Input File..."
                                                                class="form-control form-control-lg p-3" />
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group mb-2">
                                                            <label for="form-label text-white" style="font-size: 23px">Description</label>
                                                            <textarea class="form-control form-control-lg p-3" id="descripction" name="description" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row d-flex justify-content-start">
                                                        <div class="col-1 d-flex align-items-center">
                                                             <p style="font-size: 23px; margin-bottom:0;">Privacy</p>
                                                        </div>
                                                        <div class="col-1 d-flex align-items-center" style="font-size: 20px">
                                                            <input class="me-2" type="radio"  id="radio1" style="font-size: 20px" name="optradio" value="option1" checked>
                                                            Unlock
                                                            <label  for="radio1"></label>
                                                        </div>
                                                        <div class="col-1  d-flex align-items-center" style="font-size: 20px">
                                                            <input class="me-2" type="radio"id="radio2" style="font-size: 20px" name="optradio" value="option2">
                                                            Lock
                                                            <label  for="radio2"></label>
                                                        </div>

                                                    </div>
                                                   
                                                    <!-- Buttons Sign in -->
                                                    <div class="d-flex justify-content-center pt-1 mb-1">
                                                        <button class="btn btn-button btn-shadow text-dark px-4"
                                                            type="submit">save</button>
                                                    </div>
                                                    
                            
                                                </form>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div id="myModal_add_quiz" class="modal">
                                        <div class="modal-content">
                                            <div class="box-modal p-4">
                                                <div class="row d-flex justify-content-between">
                                                    <div class="col-4 d-flex align-items-center">
                                                        <span class="title-modal px-5">Add Quiz</span>
                                                    </div>
                                                    <div class="col-2 d-flex justify-content-end">
                                                        <span class="close_add_quiz close me-3">&times;</span>
                                                    </div>
                                                    
                                                    
                                                </div>
                                                
                                            </div>
                                            <div class="box-form p-4">
                                                <form  action=""  enctype="multipart/form-data">
                                                    <div class="col pe-4">
                                                            <div class="form-group mb-2">
                                                                <label for="form-label" style="font-size: 23px">Existing Quiz </label>
                                                            </div>
                                                        </div>
                                                                                        
                                                    <div class="col ">
                                                        <div class="form-group mb-2">
                                                            <label for="form-label text-white" style="font-size: 23px">Quiz</label>
                                                            <select name="quiz" id="quiz" placeholder="Select Quiz"
                                                                class="form-select p-3" />
                                                                <option value="volvo">Volvo</option>
                                                                <option value="saab">Saab</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group mb-2">
                                                            <label for="form-label text-white" style="font-size: 23px">Description</label>
                                                            <textarea class="form-control form-control-lg p-3" id="descripction" name="description" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row d-flex justify-content-start">
                                                        <div class="col-1 d-flex align-items-center">
                                                             <p style="font-size: 23px; margin-bottom:0;">Privacy</p>
                                                        </div>
                                                        <div class="col-1 d-flex align-items-center" style="font-size: 20px">
                                                            <input class="me-2" type="radio"  id="radio1" style="font-size: 20px" name="optradio" value="option1" checked>
                                                            Unlock
                                                            <label  for="radio1"></label>
                                                        </div>
                                                        <div class="col-1  d-flex align-items-center" style="font-size: 20px">
                                                            <input class="me-2" type="radio"id="radio2" style="font-size: 20px" name="optradio" value="option2">
                                                            Lock
                                                            <label  for="radio2"></label>
                                                        </div>

                                                    </div>
                                                   
                                                    <!-- Buttons Sign in -->
                                                    <div class="d-flex justify-content-center pt-1 mb-1">
                                                        <button class="btn btn-button btn-shadow text-dark px-4 " 
                                                            type="submit">save</button>
                                                    </div>
                                                    
                            
                                                </form>
                                            </div>
                                        </div>
                                    </div>        
                                    <div class="content-collapse-chapter">
                                        <div class="box-add-chapter">
                                            <form action="">
                                                <div class="form-group mb-2">
                                                    <label for="form-label text-white" style="font-size: 20px">Chapter Name </label>
                                                    <input type="text" name="text" id="fromchapter_name"
                                                        class="form-control p-2" />
                                                </div>
                                                <div class="d-flex justify-content-end pt-1 mb-1">
                                                    <button class="btn btn-save btn-shadow text-dark px-4"
                                                        type="submit">save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                               
                            </div>
                            <hr class="mb-3" style="opacity: 1; border: 2px solid white; margin:0">
                            <div class="box-list-admin mb-2">
                                <div class="row d-flex justify-content-start">
                                    
                                    <div class="col-1 d-flex justify-content-start align-items-center">
                                        <span class="iconify me-4" data-icon="teenyicons:lock-solid" data-width="24"></span>
                                        <h3 style="margin-bottom:0">1</h3>
                                    </div>
                                    <div class="col-9 d-flex justify-content-start align-items-center">
                                        
                                        <h5 style="font-weight: 500; margin-bottom:0">Lesson 1</h5>
                                    </div>
                                    <div class="col-2 d-flex justify-content-end align-items-center">
                                        <div class="col d-flex justify-content-end align-items-center">
                                        
                                                <a href="/admin/edit-course" style="border: none; background-color:none"> <span class="iconify me-1" data-icon="fa-solid:edit" style="color: black;" data-width="27"></span></a>
                                                |
                                                <a href="" style="border: none;"> <span class="iconify ms-2" data-icon="bi:trash-fill" style="color: black;" data-width="25"></span></a>
                                                |
                                                <a href="" style="border: none;"> <span class="iconify ms-2" data-icon="mingcute:add-fill" style="color: black;" data-width="25"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="box-list-admin mb-2">
                                <div class="row d-flex justify-content-start">
                                    <div class="col-1 d-flex justify-content-start align-items-center">
                                        <span class="me-5"></span>
                                        <h3 style="margin-bottom:0">1</h3>
                                    </div>
                                    <div class="col-9 d-flex justify-content-start align-items-center">
                                        <h5 style="font-weight: 500; margin-bottom:0; ">Quiz 1</h5>
                                    </div>
                                    <div class="col-2 d-flex justify-content-end align-items-center">
                                        <div class="col d-flex justify-content-end align-items-center">
                                        
                                                <a href="/admin/edit-course" style="border: none; background-color:none"> <span class="iconify me-1" data-icon="fa-solid:edit" style="color: black;" data-width="27"></span></a>
                                                |
                                                <a href="" style="border: none;"> <span class="iconify ms-2" data-icon="bi:trash-fill" style="color: black;" data-width="25"></span></a>
                                                |
                                                <a href="" style="border: none;"> <span class="iconify ms-2" data-icon="mingcute:add-fill" style="color: black;" data-width="25"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </article>
                      </section>
                    
                    <section class="section-certificate sections">
                        <article>
                            <div class="box-recommend mt-2 p-4">
                                <div class="row d-flex justify-content-start ">
                                    <h4>Assign Certificate</h4>
                                </div>
                                <hr class="mb-3" style="opacity: 1; border: 2px solid white; margin:0">
                                <form class="p-3" action="">
                                    <div class="form-group mb-2">
                                        <label for="form-label text-white" style="font-size: 20px; margin-bottom: 5px;">Select Certificate </label>
                                        <select  name="certificate" id="certificate"
                                            class="form-select p-2" />
                                            <option value="volvo">Volvo</option>
                                            <option value="saab">Saab</option>
                                    </select>
                                    </div>
                                    <div class="d-flex justify-content-end pt-1 mb-1">
                                        <button class="btn btn-save btn-shadow text-dark px-4"
                                            type="submit">save</button>
                                    </div>
                                </form>

                            </div>
                        </article>
                    </section>
                    <section class="section-enrolled sections">
                        <article>
                            <div class="box-recommend mt-2 p-4">
                                <div class="row d-flex justify-content-start ">
                                    <h4>Student Enrolled</h4>
                                </div>
                                <hr class="mb-3" style="opacity: 1; border: 2px solid white; margin:0">
                                <div class="box-list-admin mb-2">
                                    <div class="row d-flex justify-content-start">
                                        <div class="col-1 d-flex justify-content-start align-items-center">
                                            <h3 style="margin-bottom:0">1</h3>
                                        </div>
                                        <div class="col-9 d-flex justify-content-start align-items-center">
                                            <h5 style="font-weight: 500; margin-bottom:0">Student1</h5>
                                        </div>
                                       
                                    </div>
                                </div>
                                
                                <div class="box-list-admin mb-2">
                                    <div class="row d-flex justify-content-start">
                                        <div class="col-1 d-flex justify-content-start align-items-center">
                                            <h3 style="margin-bottom:0">2</h3>
                                        </div>
                                        <div class="col-9 d-flex justify-content-start align-items-center">
                                            <h5 style="font-weight: 500; margin-bottom:0; ">Student2</h5>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </article>
                    </section>
                    <section class="section-leaderboard sections">
                        <article>
                            <div class="box-recommend mt-2 p-4">
                                <div class="row d-flex justify-content-between ">
                                    <div class="col-3 ms-2"> 
                                        <h4>Leaderboard</h4>
                                    </div>
                                    <div class="col-1">
                                        <h4>10/50</h4>
                                    </div>
                                    
                                </div>
                                <hr class="mb-3" style="opacity: 1; border: 2px solid white; margin:0">
                                <div class="box-list-admin mb-2">
                                    <div class="row d-flex justify-content-start">
                                        <div class="col-1 d-flex justify-content-start align-items-center">
                                            <h3 style="margin-bottom:0">1</h3>
                                        </div>
                                        <div class="col-9 d-flex justify-content-start align-items-center">
                                            <h5 style="font-weight: 500; margin-bottom:0">Student1</h5>
                                        </div>
                                        <div class="col-2 d-flex justify-content-end align-items-center">
                                            <h5 style="font-weight: 500; margin-bottom:0">200 Point</h5>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="box-list-admin mb-2">
                                    <div class="row d-flex justify-content-start">
                                        <div class="col-1 d-flex justify-content-start align-items-center">
                                            <h3 style="margin-bottom:0">2</h3>
                                        </div>
                                        <div class="col-9 d-flex justify-content-start align-items-center">
                                            <h5 style="font-weight: 500; margin-bottom:0; ">Student2</h5>
                                        </div>
                                        <div class="col-2 d-flex justify-content-end align-items-center">
                                            <h5 style="font-weight: 500; margin-bottom:0">100 Point</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </section>
                    
                </div>
                
            </div>
            
        </div>
    </section>
    <script>
        function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
        }


    </script>
    <script>
        (function($) {
            $('.panel li').click(function() {
                $(this).addClass('active-button').siblings('li').removeClass('active-button');
                $('.sections:nth-of-type('+$(this).data('rel')+')').stop().fadeIn(300, 'linear').siblings('.sections').stop().fadeOut(300, 'linear'); 
            });
            })(jQuery);
    </script>
    <script>
        // Get the modal
        var modal_lesson = document.getElementById("myModal_add_lesson");
        
        // Get the button that opens the modal
        var btn_lesson = document.getElementById("myBtn_add_lesson");
        
        // Get the <span> element that closes the modal
        var span_add_lesson = document.getElementsByClassName("close_add_lesson")[0];
        
        // When the user clicks the button, open the modal 
        btn_lesson.onclick = function() {
          modal_lesson.style.display = "block";
        }
        
        // When the user clicks on <span> (x), close the modal
        span_add_lesson.onclick = function() {
          modal_lesson.style.display = "none";
        }
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal_lesson) {
            modal_lesson.style.display = "none";
          }
        }

        // Get the modal
        var modal_quiz = document.getElementById("myModal_add_quiz");
        
        // Get the button that opens the modal
        var btn_quiz = document.getElementById("myBtn_add_quiz");
        
        // Get the <span> element that closes the modal
        var span_add_quiz = document.getElementsByClassName("close_add_quiz")[0];
        
        // When the user clicks the button, open the modal 
        btn_quiz.onclick = function() {
          modal_quiz.style.display = "block";
        }
        
        // When the user clicks on <span> (x), close the modal
        span_add_quiz.onclick = function() {
          modal_quiz.style.display = "none";
        }
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal_quiz) {
            modal_quiz.style.display = "none";
          }
        }
    </script>

@endsection
