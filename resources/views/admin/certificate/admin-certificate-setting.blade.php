@extends('layouts.admin.main-admin')
@section('container')
    <section class="margin-top ">
        <div class="sidenav">
            <div class="content content-nav">
                <div class="row p-4">
                    <section class="section-curriculum sections">
                        <article>
                            <div class="mb-2">
                                <a href="/admin" class="collapsible btn mb-2 btn-admin">
                                    Dashboard
                                </a>
                            </div>
                            <div class="mb-2">
                                <button type="button" class="collapsible btn mb-2 btn-admin">
                                    Users
                                </button>
                                <div class="content-collapse">
                                    <ul class="list-lesson">
                                        <a class="d-flex align-items-center chapter-info mb-2 " href="/admin/user-teacher">
                                            <li>
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
                                <button type="button" class="collapsible btn mb-2 btn-admin">
                                    Courses
                                </button>
                                <div class="content-collapse">
                                    <ul class="list-lesson">
                                        <a class="d-flex align-items-center chapter-info mb-2 "
                                            href="/admin/courses-categories">
                                            <li>
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
                                        <a class="d-flex align-items-center chapter-info mb-2 ">
                                            <li>
                                                Quiz Setting
                                            </li>
                                        </a>
                                    </ul>
                                </div>

                            </div>
                            <div class="mb-2">
                                <button type="button" id="active" class="collapsible btn mb-2 btn-admin-active">
                                    Certificates
                                </button>
                                <div class="content-collapse">
                                    <ul class="list-lesson">
                                        <a class="d-flex align-items-center chapter-info mb-2 "
                                            href="/admin/certificate-list">
                                            <li>
                                                Certificate List
                                            </li>
                                        </a>
                                        <a class="d-flex align-items-center chapter-info mb-2 "
                                            href="/admin/certificate-add">
                                            <li>
                                                Add Certificate
                                            </li>
                                        </a>

                                        <a class="d-flex align-items-center chapter-info mb-2"
                                            href="/admin/certificate-setting">
                                            <li>
                                                Certificate Setting
                                            </li>
                                        </a>
                                    </ul>
                                </div>

                            </div>
                            <div class="mb-2">
                                <<<<<<< HEAD <button type="button" id="active"
                                    class="collapsible btn mb-2 btn-admin-active">
                                    =======
                                    <button type="button" class="collapsible btn mb-2 btn-admin">
                                        >>>>>>> b4eacc771d452f460910af241d52e2dcba2d5965
                                        Front Page
                                    </button>
                                    <div class="content-collapse">
                                        <ul class="list-lesson">
                                            <a class="d-flex align-items-center chapter-info mb-2 "
                                                href="/admin/frontpage-home">
                                                <li>
                                                    Home Content
                                                </li>
                                            </a>

                                            <a class="d-flex align-items-center chapter-info mb-2 "
                                                href="/admin/frontpage-social">
                                                <li>
                                                    Social Setting
                                                </li>
                                            </a>

                                            <a class="d-flex align-items-center chapter-info mb-2 "
                                                href="/admin/frontpage-footer">
                                                <li>
                                                    Footer Setting
                                                </li>
                                            </a>

                                            <a class="d-flex align-items-center chapter-info mb-2 "
                                                href="/admin/frontpage-account">
                                                <li>
                                                    Account Setting
                                                </li>
                                            </a>

                                            <a class="d-flex align-items-center chapter-info mb-2 "
                                                href="/admin/frontpage-about-us">
                                                <li>
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
                    <div class="box-recommend p-4 mb-2">
                        <h3 style="margin-bottom: 0">Certificate | Certificate Setting </h3>
                    </div>
                    <div class="row">
                        <<<<<<< HEAD <div class="col-3">
                            <h3 class="my-5 ms-2"style="margin-bottom: 0" id="titleText">Add New</h3>
                            <div class="box-recommend mt-2 p-4">
                                <form action="" class="form_frontpage icon" enctype="multipart/form-data">

                                    <div class="col">
                                        <div class="form-group mb-2">
                                            <label for="form-label text-white" style="font-size: 23px">Icons </label>
                                            <input type="file" name="icons" id="icons"
                                                class="form-control px-3 py-2" />
                                            =======
                                            <div class="col-4">
                                                <h3 class="my-4 ms-2"style="margin-bottom: 0" id="titleText">Certificate
                                                    Setting</h3>
                                                <div class="box-recommend mt-2 p-4"
                                                    style="overflow: scroll; max-height: 720px">
                                                    <form action="" class="form_certificate"
                                                        enctype="multipart/form-data">

                                                        <div class="col">
                                                            <div class="form-group mb-2">
                                                                <label for="form-label text-white"
                                                                    style="font-size: 23px">Background Image
                                                                    Default</label>
                                                                <input type="file" name="icons" id="icons"
                                                                    class="form-control px-3 py-2" />
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="row form-group mb-2">
                                                                <label for="form-label" style="font-size: 23px">Show
                                                                    Logo</label>
                                                                <div class="col-3 form-radio d-flex align-items-center">
                                                                    <input class="form-radio-input me-2" type="radio"
                                                                        name="show_logo" id="flexRadioDefault1"
                                                                        value="yes_logo">
                                                                    <label class="form-radio-label"
                                                                        for="flexRadioDefault1">
                                                                        YES
                                                                    </label>
                                                                </div>
                                                                <div class="col-3 form-radio d-flex align-items-center">
                                                                    <input class="form-radio-input me-2" type="radio"
                                                                        name="show_logo" id="flexRadioDefault2" checked
                                                                        value="no_logo">
                                                                    <label class="form-radio-label"
                                                                        for="flexRadioDefault2">
                                                                        NO
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="row form-group mb-2">
                                                                <div class="col">
                                                                    <div class="form-group mb-2">
                                                                        <label for="form-label text-white"
                                                                            style="font-size: 23px">Position X
                                                                        </label>
                                                                        <input type="number" name="social_name"
                                                                            id="social_name"
                                                                            class="form-control px-3 py-2" />
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group mb-2">
                                                                        <label for="form-label text-white"
                                                                            style="font-size: 23px">Position Y
                                                                        </label>
                                                                        <input type="number" name="social_name"
                                                                            id="social_name"
                                                                            class="form-control px-3 py-2" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="my-3"
                                                            style="opacity: 1; border: 1px solid white; margin:0">
                                                        <div class="col">
                                                            <div class="row form-group mb-2">
                                                                <label for="form-label" style="font-size: 23px">Student
                                                                    Name</label>
                                                                <div class="col-3 form-radio d-flex align-items-center">
                                                                    <input class="form-radio-input me-2" type="radio"
                                                                        name="show_student" id="flexRadioDefault_student"
                                                                        value="yes_student">
                                                                    <label class="form-radio-label"
                                                                        for="flexRadioDefault_student">
                                                                        YES
                                                                    </label>
                                                                </div>
                                                                <div class="col-3 form-radio d-flex align-items-center">
                                                                    <input class="form-radio-input me-2" type="radio"
                                                                        name="show_student" id="flexRadioDefault_student"
                                                                        checked value="no_student">
                                                                    <label class="form-radio-label"
                                                                        for="flexRadioDefault_student">
                                                                        NO
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="row form-group">
                                                                <div class="col">
                                                                    <div class="form-group mb-2">
                                                                        <label for="form-label text-white"
                                                                            style="font-size: 23px">Position X
                                                                        </label>
                                                                        <input type="number" name="social_name"
                                                                            id="social_name"
                                                                            class="form-control px-3 py-2" />
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group mb-2">
                                                                        <label for="form-label text-white"
                                                                            style="font-size: 23px">Position Y
                                                                        </label>
                                                                        <input type="number" name="social_name"
                                                                            id="social_name"
                                                                            class="form-control px-3 py-2" />
                                                                    </div>
                                                                </div>
                                                                >>>>>>> b4eacc771d452f460910af241d52e2dcba2d5965
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-group mb-2">
                                                                <label for="form-label text-white"
                                                                    style="font-size: 23px">Font Size
                                                                </label>
                                                                <<<<<<< HEAD <input type="text" name="social_link"
                                                                    id="social_link" class="form-control px-3 py-2"
                                                                    placeholder="enter social link" />
                                                                =======
                                                                <input type="number" name="social_name" id="social_name"
                                                                    class="form-control px-3 py-2" placeholder="30" />
                                                                >>>>>>> b4eacc771d452f460910af241d52e2dcba2d5965
                                                            </div>
                                                        </div>
                                                        <hr class="my-3"
                                                            style="opacity: 1; border: 1px solid white; margin:0">
                                                        <div class="col">
                                                            <div class="form-group mb-2">
                                                                <label for="form-label text-white"
                                                                    style="font-size: 23px">Text 1
                                                                </label>
                                                                <<<<<<< HEAD <input type="text" name="social_name"
                                                                    id="social_name" class="form-control px-3 py-2"
                                                                    placeholder="Facebook" />
                                                            </div>
                                                        </div>

                                                        =======
                                                        <input type="text" name="social_name" id="social_name"
                                                            class="form-control px-3 py-2" placeholder="30" />
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group mb-2">
                                                    <label for="form-label text-white" style="font-size: 23px">Text 2
                                                    </label>
                                                    <input type="text" name="social_name" id="social_name"
                                                        class="form-control px-3 py-2" placeholder="30" />
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group mb-2">
                                                    <label for="form-label text-white" style="font-size: 23px">Body
                                                        Position
                                                    </label>
                                                    <select type="select" name="social_name" id="social_name"
                                                        class="form-select px-3 py-2" placeholder="Facebook" />
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="row form-group mb-2">
                                                    <label for="form-label" style="font-size: 23px">Show Course
                                                        Name</label>
                                                    <div class="col-3 form-radio d-flex align-items-center">
                                                        <input class="form-radio-input me-2" type="radio"
                                                            name="show_student" id="flexRadioDefault_student"
                                                            value="yes_student">
                                                        <label class="form-radio-label" for="flexRadioDefault_student">
                                                            YES
                                                        </label>
                                                    </div>
                                                    <div class="col-3 form-radio d-flex align-items-center">
                                                        <input class="form-radio-input me-2" type="radio"
                                                            name="show_student" id="flexRadioDefault_student" checked
                                                            value="no_student">
                                                        <label class="form-radio-label" for="flexRadioDefault_student">
                                                            NO
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="row form-group mb-2">
                                                    <label for="form-label" style="font-size: 23px">Show Date</label>
                                                    <div class="col-3 form-radio d-flex align-items-center">
                                                        <input class="form-radio-input me-2" type="radio"
                                                            name="show_student" id="flexRadioDefault_student"
                                                            value="yes_student">
                                                        <label class="form-radio-label" for="flexRadioDefault_student">
                                                            YES
                                                        </label>
                                                    </div>
                                                    <div class="col-3 form-radio d-flex align-items-center">
                                                        <input class="form-radio-input me-2" type="radio"
                                                            name="show_student" id="flexRadioDefault_student" checked
                                                            value="no_student">
                                                        <label class="form-radio-label" for="flexRadioDefault_student">
                                                            NO
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="form-group mb-2">
                                                    <label for="form-label text-white" style="font-size: 23px">Footer
                                                        Title
                                                    </label>
                                                    <select type="select" name="social_name" id="social_name"
                                                        class="form-select px-3 py-2" placeholder="Facebook" />
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="form-group mb-2">
                                                    <label for="form-label text-white" style="font-size: 23px">Signature
                                                        Image</label>
                                                    <input type="file" name="signature" id="signature"
                                                        class="form-control px-3 py-2" />
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="row form-group">
                                                    <div class="col">
                                                        <div class="form-group mb-2">
                                                            <label for="form-label text-white"
                                                                style="font-size: 23px">Signature Height
                                                            </label>
                                                            <input type="number" name="social_name" id="social_name"
                                                                class="form-control px-3 py-2" />
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group mb-2">
                                                            <label for="form-label text-white"
                                                                style="font-size: 23px">Signature Weight
                                                            </label>
                                                            <input type="number" name="social_name" id="social_name"
                                                                class="form-control px-3 py-2" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            >>>>>>> b4eacc771d452f460910af241d52e2dcba2d5965
                                            <!-- Buttons Sign in -->
                                            <div class="d-flex justify-content-end pt-1 mb-1">
                                                <div id="btn-batal">
                                                </div>
                                                <button class="btn btn-button btn-shadow text-dark px-5 rounded-pill "
                                                    type="submit">save</button>

                                            </div>


                                </form>
                            </div>
                    </div>
                    <div class="col-8">
                        <h3 class="my-4 ms-2"style="margin-bottom: 0">Preview</h3>
                        <div class="box-recommend mt-2 p-4">
                            <<<<<<< HEAD <div class="row d-flex justify-content-start">
                                <div class="col-2 d-flex justify-content-start ps-4 align-items-center">
                                    <h5 style="font-weight: 700">No</h5>
                                </div>
                                <div class="col-2 d-flex justify-content-center align-items-center">
                                    <h5 style="font-weight: 700">Icon</h5>
                                </div>
                                <div class="col-4 d-flex justify-content-center align-items-center">
                                    <h5 style="font-weight: 700">Link</h5>
                                </div>
                                <div class="col-2 d-flex justify-content-center align-items-center">
                                    <h5 style="font-weight: 700; text-align:center">Social Name</h5>
                                </div>
                                <div class="col-2 d-flex justify-content-center align-items-center">
                                    <h5 style="font-weight: 700">Action</h5>
                                </div>
                        </div>
                        <hr class="mb-3" style="opacity: 1; border: 2px solid white; margin:0">
                        <div class="row d-flex justify-content-start  mb-3">
                            <div class="col-2 d-flex justify-content-start ps-4 align-items-center">
                                <h5 style="font-weight: 700">1</h5>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center">
                                <img src="{{ URL::asset('images/icon_golearn.png') }}" alt="icon"
                                    style="width: 50px !important;border-radius:50%">
                            </div>
                            <div class="col-4 d-flex justify-content-left align-items-center">
                                <h5 style="font-weight: 700">https://id.id/facebook.com</h5>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center">
                                <h5 style="font-weight: 700; text-align:center">Facebook</h5>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center">
                                <div class="col d-flex justify-content-center align-items-center">

                                    <a href=""style="border: none; background-color:#EAEAEA;">
                                        <span class="iconify me-1" data-icon="fa-solid:edit" style="color: black;"
                                            data-width="27"></span></a>
                                    |
                                    <a href="" style="border: none;">
                                        <span class="iconify ms-2" data-icon="bi:trash-fill" style="color: black;"
                                            data-width="25"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-start mb-3 ">
                            <div class="col-2 d-flex justify-content-start ps-4 align-items-center">
                                <h5 style="font-weight: 700">1</h5>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center">
                                <img src="{{ URL::asset('images/icon_golearn.png') }}" alt="icon"
                                    style="width: 50px !important;border-radius:50%">
                            </div>
                            <div class="col-4 d-flex justify-content-left align-items-center">
                                <h5 style="font-weight: 700">https://id.id/facebook.com</h5>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center">
                                <h5 style="font-weight: 700; text-align:center">Facebook</h5>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center">
                                <div class="col d-flex justify-content-center align-items-center">

                                    <a href=""style="border: none; background-color:#EAEAEA;">
                                        <span class="iconify me-1" data-icon="fa-solid:edit" style="color: black;"
                                            data-width="27"></span></a>
                                    |
                                    <a href="" style="border: none;">
                                        <span class="iconify ms-2" data-icon="bi:trash-fill" style="color: black;"
                                            data-width="25"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-start mb-3">
                            <div class="col-2 d-flex justify-content-start ps-4 align-items-center">
                                <h5 style="font-weight: 700">1</h5>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center">
                                <img src="{{ URL::asset('images/icon_golearn.png') }}" alt="icon"
                                    style="width: 50px !important;border-radius:50%">
                            </div>
                            <div class="col-4 d-flex justify-content-left align-items-center">
                                <h5 style="font-weight: 700">https://id.id/facebook.com</h5>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center">
                                <h5 style="font-weight: 700; text-align:center">Facebook</h5>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center">
                                <div class="col d-flex justify-content-center align-items-center">

                                    <a href=""style="border: none; background-color:#EAEAEA;">
                                        <span class="iconify me-1" data-icon="fa-solid:edit" style="color: black;"
                                            data-width="27"></span></a>
                                    |
                                    <a href="" style="border: none;">
                                        <span class="iconify ms-2" data-icon="bi:trash-fill" style="color: black;"
                                            data-width="25"></span></a>
                                </div>
                            </div>
                            =======

                            <hr class="my-3" style="opacity: 1; border: 2px solid white; margin:0">
                            <div class="preview" style="min-height: 500px">

                                >>>>>>> b4eacc771d452f460910af241d52e2dcba2d5965
                            </div>
                            <hr class="my-3" style="opacity: 1; border: 2px solid white; margin:0">
                        </div>

                    </div>
                </div>


            </div>

        </div>

        </div>
    </section>
@endsection
