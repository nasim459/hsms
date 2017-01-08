@section('broadcasting_content')
<!-- begin section-container -->
<div class="section-container">
    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-md-12">

            <!-- begin #content -->
            <div id="content" class="">
                <!-- begin mail-box -->
                <div class="mail-box">
                    <!-- begin mail-box-sidebar -->
                    <div class="mail-box-sidebar dropdown">
                        <!-- begin mail-box-mobile-toggler -->
                        <div class="mail-box-mobile-toggler">
                            <a href="#" class="btn btn-default width-100 btn-sm" data-toggle="email-sidebar">Inbox <b class="caret"></b></a>
                        </div>
                        <!-- end mail-box-mobile-toggler -->
                        <!-- begin email-sidebar -->
                        <div class="dropdown-menu email-sidebar" id="email-sidebar" data-scrollbar="true" data-height="100%">
                            <!-- begin mail-box-header -->
                            <div class="mail-box-header text-center">
                                <a href="{{URL::to('broadcasting-email-compose')}}" class="btn btn-danger width-150 btn-sm">
                                    COMPOSE
                                </a>
                            </div>
                            <!-- end mail-box-header -->
                            <!-- begin mail-box-wrapper -->
                            <div class="mail-box-wrapper">
                                <h4 class="title m-t-0">FOLDER</h4>
                                <ul class="mail-box-menu">
                                    <li class="active"><a href="email_inbox.html">Inbox <b>(5)</b></a></li>
                                    <li><a href="email_inbox.html">Archive</a></li>
                                    <li><a href="email_inbox.html">Junk</a></li>
                                    <li><a href="email_inbox.html">Drafts</a></li>
                                    <li><a href="email_inbox.html">Sent</a></li>
                                    <li><a href="email_inbox.html">Trash <b>(99+)</b></a></li>
                                    <li><a href="email_inbox.html">Flagged</a></li>
                                </ul>
                                <h4 class="title">CONTACT</h4>
                                <ul class="mail-box-user-list">
                                    <li><a href="#"><img src="assets/img/user_1.jpg" alt="" /> <i class="fa fa-circle text-success-light"></i> Finlay Josep</a></li>
                                    <li><a href="#"><img src="assets/img/user_2.jpg" alt="" /> <i class="fa fa-circle text-inverse"></i> Lucas Enosh</a></li>
                                    <li><a href="#"><img src="assets/img/user_3.jpg" alt="" /> <i class="fa fa-circle text-inverse"></i> Balthazar Swarna</a></li>
                                    <li><a href="#"><img src="assets/img/user_4.jpg" alt="" /> <i class="fa fa-circle text-warning-light"></i> Stribog Taliesin</a></li>
                                    <li><a href="#"><img src="assets/img/user_5.jpg" alt="" /> <i class="fa fa-circle text-danger-light"></i> Juan Philemon</a></li>
                                </ul>
                            </div>
                            <!-- end mail-box-wrapper -->
                        </div>
                        <!-- end email-sidebar -->
                    </div>
                    <!-- end mail-box-sidebar -->
                    <!-- begin mail-box-content -->
                    <div class="mail-box-content">
                        <!-- begin mail-box-toolbar -->
                        <div class="mail-box-toolbar">
                            <div class="pull-left">
                                <a href="#" class="btn btn-white btn-sm m-r-5" data-click="check-all"><i class="fa fa-square-o text-muted fa-lg m-r-5 fa-fw"></i> <b class="caret"></b></a>
                                <a href="#" class="btn btn-white btn-sm">Filter by: Date <b class="caret"></b></a>
                            </div>
                            <div class="pull-right">
                                <span class="btn-group m-l-10">
                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-chevron-left"></i></a>
                                    <a href="#" class="btn btn-white btn-sm"><i class="fa fa-chevron-right"></i></a>
                                </span>
                            </div>
                        </div>
                        <!-- end mail-box-toolbar -->
                        <!-- begin mail-box-container -->
                        <div class="mail-box-container">
                            <!-- begin scrollbar -->
                            <div data-scrollbar="true" data-height="100%">
                                <!-- end table-email -->
                                <table class="table-email">
                                    <tbody>
                                        <tr class="unread">
                                            <td class="email-checkbox">
                                                <input type="checkbox" name="email_checkbox" />
                                                <a href="javascript:;" data-toggle="email-checkbox"><i class="fa fa-square-o fa-fw"></i></a>
                                            </td>
                                            <td class="email-sender">
                                                <a href="email_detail.html">Apple</a>
                                            </td>
                                            <td class="email-message">
                                                <a href="email_detail.html">
                                                    <span class="email-title">
                                                        Your payment is received - 
                                                        <span class="email-desc">
                                                            Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
                                                        </span>
                                                    </span>
                                                </a>
                                            </td>
                                            <td class="email-attachment">
                                                <a href="email_detail.html">
                                                    <i class="fa fa-paperclip"></i>
                                                </a>
                                            </td>
                                            <td class="email-date">
                                                <a href="email_detail.html">Aug 12</a>
                                            </td>
                                        </tr>
                                        <tr class="unread">
                                            <td class="email-checkbox">
                                                <input type="checkbox" name="email_checkbox" />
                                                <a href="javascript:;" data-toggle="email-checkbox"><i class="fa fa-square-o fa-fw"></i></a>
                                            </td>
                                            <td class="email-sender">
                                                <a href="email_detail.html">iTunes</a>
                                            </td>
                                            <td class="email-message">
                                                <a href="email_detail.html">
                                                    <span class="email-title">
                                                        Get the Star Wars movie today -
                                                        <span class="email-desc">
                                                            Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
                                                        </span>
                                                    </span>
                                                </a>
                                            </td>
                                            <td class="email-attachment">
                                                <a href="email_detail.html">
                                                    <i class="fa fa-paperclip"></i>
                                                </a>
                                            </td>
                                            <td class="email-date">
                                                <a href="email_detail.html">Aug 12</a>
                                            </td>
                                        </tr>
                                        <tr class="unread">
                                            <td class="email-checkbox">
                                                <input type="checkbox" name="email_checkbox" />
                                                <a href="javascript:;" data-toggle="email-checkbox"><i class="fa fa-square-o fa-fw"></i></a>
                                            </td>
                                            <td class="email-sender">
                                                <a href="email_detail.html">Paypal Inc <i class="fa fa-shield fa-lg m-l-3 text-success-light"></i></a>
                                            </td>
                                            <td class="email-message">
                                                <a href="email_detail.html">
                                                    <span class="email-title">
                                                        Important information about your order 218292921 -
                                                        <span class="email-desc">
                                                            Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
                                                        </span>
                                                    </span>
                                                </a>
                                            </td>
                                            <td class="email-attachment"></td>
                                            <td class="email-date">
                                                <a href="email_detail.html">Aug 11</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="email-checkbox">
                                                <input type="checkbox" name="email_checkbox" />
                                                <a href="javascript:;" data-toggle="email-checkbox"><i class="fa fa-square-o fa-fw"></i></a>
                                            </td>
                                            <td class="email-sender">
                                                <a href="email_detail.html">Inmotion Hosting</a>
                                            </td>
                                            <td class="email-message">
                                                <a href="email_detail.html">
                                                    <span class="email-title">
                                                        InMotion Hosting Newsletter July 2015‏ -
                                                        <span class="email-desc">
                                                            Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
                                                        </span>
                                                    </span>
                                                </a>
                                            </td>
                                            <td class="email-attachment"></td>
                                            <td class="email-date">
                                                <a href="email_detail.html">Aug 11</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="email-checkbox">
                                                <input type="checkbox" name="email_checkbox" />
                                                <a href="javascript:;" data-toggle="email-checkbox"><i class="fa fa-square-o fa-fw"></i></a>
                                            </td>
                                            <td class="email-sender">
                                                <a href="email_detail.html">App Store</a>
                                            </td>
                                            <td class="email-message">
                                                <a href="email_detail.html">
                                                    <span class="email-title">
                                                        Angry Birds Transformers, Great Role-Playing Games & More‏ -
                                                        <span class="email-desc">
                                                            Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
                                                        </span>
                                                    </span>
                                                </a>
                                            </td>
                                            <td class="email-attachment"></td>
                                            <td class="email-date">
                                                <a href="email_detail.html">Aug 11</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="email-checkbox">
                                                <input type="checkbox" name="email_checkbox" />
                                                <a href="javascript:;" data-toggle="email-checkbox"><i class="fa fa-square-o fa-fw"></i></a>
                                            </td>
                                            <td class="email-sender">
                                                <a href="email_detail.html">BrowserStack</a>
                                            </td>
                                            <td class="email-message">
                                                <a href="email_detail.html">
                                                    <span class="email-title">
                                                        Microsoft Edge browser + Windows 10 added to BrowserStack -
                                                        <span class="email-desc">
                                                            Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
                                                        </span>
                                                    </span>
                                                </a>
                                            </td>
                                            <td class="email-attachment"></td>
                                            <td class="email-date">
                                                <a href="email_detail.html">Aug 09</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="email-checkbox">
                                                <input type="checkbox" name="email_checkbox" />
                                                <a href="javascript:;" data-toggle="email-checkbox"><i class="fa fa-square-o fa-fw"></i></a>
                                            </td>
                                            <td class="email-sender">
                                                <a href="email_detail.html">Twitter</a>
                                            </td>
                                            <td class="email-message">
                                                <a href="email_detail.html">
                                                    <span class="email-title">
                                                        Confirm your account, Fahri Fırat -
                                                        <span class="email-desc">
                                                            Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
                                                        </span>
                                                    </span>
                                                </a>
                                            </td>
                                            <td class="email-attachment"></td>
                                            <td class="email-date">
                                                <a href="email_detail.html">Aug 09</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="email-checkbox">
                                                <input type="checkbox" name="email_checkbox" />
                                                <a href="javascript:;" data-toggle="email-checkbox"><i class="fa fa-square-o fa-fw"></i></a>
                                            </td>
                                            <td class="email-sender">
                                                <a href="email_detail.html">Facebook</a>
                                            </td>
                                            <td class="email-message">
                                                <a href="email_detail.html">
                                                    <span class="email-title">
                                                        You have 2 new notifications -
                                                        <span class="email-desc">
                                                            Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
                                                        </span>
                                                    </span>
                                                </a>
                                            </td>
                                            <td class="email-attachment"></td>
                                            <td class="email-date">
                                                <a href="email_detail.html">Aug 09</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="email-checkbox">
                                                <input type="checkbox" name="email_checkbox" />
                                                <a href="javascript:;" data-toggle="email-checkbox"><i class="fa fa-square-o fa-fw"></i></a>
                                            </td>
                                            <td class="email-sender">
                                                <a href="email_detail.html">Bitbucket</a>
                                            </td>
                                            <td class="email-message">
                                                <a href="email_detail.html">
                                                    <span class="email-title">
                                                        You have been given write access to qasim/Brock‏ -
                                                        <span class="email-desc">
                                                            Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
                                                        </span>
                                                    </span>
                                                </a>
                                            </td>
                                            <td class="email-attachment"></td>
                                            <td class="email-date">
                                                <a href="email_detail.html">Aug 08</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="email-checkbox">
                                                <input type="checkbox" name="email_checkbox" />
                                                <a href="javascript:;" data-toggle="email-checkbox"><i class="fa fa-square-o fa-fw"></i></a>
                                            </td>
                                            <td class="email-sender">
                                                <a href="email_detail.html">Dev Team  <i class="fa fa-calendar fa-lg text-muted m-l-3"></i></a>
                                            </td>
                                            <td class="email-message">
                                                <a href="email_detail.html">
                                                    <span class="email-title">
                                                        Invitation: Team Meeting @ Wed 12 Aug 2015 20:30 - 21:30 -
                                                        <span class="email-desc">
                                                            Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
                                                        </span>
                                                    </span>
                                                </a>
                                            </td>
                                            <td class="email-attachment"></td>
                                            <td class="email-date">
                                                <a href="email_detail.html">Aug 08</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="email-checkbox">
                                                <input type="checkbox" name="email_checkbox" />
                                                <a href="javascript:;" data-toggle="email-checkbox"><i class="fa fa-square-o fa-fw"></i></a>
                                            </td>
                                            <td class="email-sender">
                                                <a href="email_detail.html">WrapBootstrap</a>
                                            </td>
                                            <td class="email-message">
                                                <a href="email_detail.html">
                                                    <span class="email-title">
                                                        New themes & templates from WrapBootstrap -
                                                        <span class="email-desc">
                                                            Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
                                                        </span>
                                                    </span>
                                                </a>
                                            </td>
                                            <td class="email-attachment"></td>
                                            <td class="email-date">
                                                <a href="email_detail.html">Aug 08</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="email-checkbox">
                                                <input type="checkbox" name="email_checkbox" />
                                                <a href="javascript:;" data-toggle="email-checkbox"><i class="fa fa-square-o fa-fw"></i></a>
                                            </td>
                                            <td class="email-sender">
                                                <a href="email_detail.html">billing@apple.com </a>
                                            </td>
                                            <td class="email-message">
                                                <a href="email_detail.html">
                                                    <span class="email-title">
                                                        Apple, Inc. - Receipt #981982192 -
                                                        <span class="email-desc">
                                                            Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
                                                        </span>
                                                    </span>
                                                </a>
                                            </td>
                                            <td class="email-attachment"></td>
                                            <td class="email-date">
                                                <a href="email_detail.html">Aug 08</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="email-checkbox">
                                                <input type="checkbox" name="email_checkbox" />
                                                <a href="javascript:;" data-toggle="email-checkbox"><i class="fa fa-square-o fa-fw"></i></a>
                                            </td>
                                            <td class="email-sender">
                                                <a href="email_detail.html">Slack</a>
                                            </td>
                                            <td class="email-message">
                                                <a href="email_detail.html">
                                                    <span class="email-title">
                                                        Zoran Avidan has invited you to join Development Team on Slack - 
                                                        <span class="email-desc">
                                                            Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
                                                        </span>
                                                    </span>
                                                </a>
                                            </td>
                                            <td class="email-attachment"></td>
                                            <td class="email-date">
                                                <a href="email_detail.html">Aug 08</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="email-checkbox">
                                                <input type="checkbox" name="email_checkbox" />
                                                <a href="javascript:;" data-toggle="email-checkbox"><i class="fa fa-square-o fa-fw"></i></a>
                                            </td>
                                            <td class="email-sender">
                                                <a href="email_detail.html">support@wrapbootstrap.com</a>
                                            </td>
                                            <td class="email-message">
                                                <a href="email_detail.html">
                                                    <span class="email-title">
                                                        RE: License Explaination - 
                                                        <span class="email-desc">
                                                            Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
                                                        </span>
                                                    </span>
                                                </a>
                                            </td>
                                            <td class="email-attachment"></td>
                                            <td class="email-date">
                                                <a href="email_detail.html">Aug 08</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="email-checkbox">
                                                <input type="checkbox" name="email_checkbox" />
                                                <a href="javascript:;" data-toggle="email-checkbox"><i class="fa fa-square-o fa-fw"></i></a>
                                            </td>
                                            <td class="email-sender">
                                                <a href="email_detail.html">Trello</a>
                                            </td>
                                            <td class="email-message">
                                                <a href="email_detail.html">
                                                    <span class="email-title">
                                                        Jean Hao commented on the card FrontEnd Design on Gratis - 
                                                        <span class="email-desc">
                                                            Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
                                                        </span>
                                                    </span>
                                                </a>
                                            </td>
                                            <td class="email-attachment"></td>
                                            <td class="email-date">
                                                <a href="email_detail.html">Aug 07</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="email-checkbox">
                                                <input type="checkbox" name="email_checkbox" />
                                                <a href="javascript:;" data-toggle="email-checkbox"><i class="fa fa-square-o fa-fw"></i></a>
                                            </td>
                                            <td class="email-sender">
                                                <a href="email_detail.html">Trello</a>
                                            </td>
                                            <td class="email-message">
                                                <a href="email_detail.html">
                                                    <span class="email-title">
                                                        Elicia commented on the card FrontEnd Design on Gratis - 
                                                        <span class="email-desc">
                                                            Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
                                                        </span>
                                                    </span>
                                                </a>
                                            </td>
                                            <td class="email-attachment"></td>
                                            <td class="email-date">
                                                <a href="email_detail.html">Aug 07</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="email-checkbox">
                                                <input type="checkbox" name="email_checkbox" />
                                                <a href="javascript:;" data-toggle="email-checkbox"><i class="fa fa-square-o fa-fw"></i></a>
                                            </td>
                                            <td class="email-sender">
                                                <a href="email_detail.html">Trello</a>
                                            </td>
                                            <td class="email-message">
                                                <a href="email_detail.html">
                                                    <span class="email-title">
                                                        Mouse commented on the card FrontEnd Design on Gratis - 
                                                        <span class="email-desc">
                                                            Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
                                                        </span>
                                                    </span>
                                                </a>
                                            </td>
                                            <td class="email-attachment"></td>
                                            <td class="email-date">
                                                <a href="email_detail.html">Aug 07</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="email-checkbox">
                                                <input type="checkbox" name="email_checkbox" />
                                                <a href="javascript:;" data-toggle="email-checkbox"><i class="fa fa-square-o fa-fw"></i></a>
                                            </td>
                                            <td class="email-sender">
                                                <a href="email_detail.html">Trello</a>
                                            </td>
                                            <td class="email-message">
                                                <a href="email_detail.html">
                                                    <span class="email-title">
                                                        Alex commented on the card FrontEnd Design on Gratis - 
                                                        <span class="email-desc">
                                                            Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
                                                        </span>
                                                    </span>
                                                </a>
                                            </td>
                                            <td class="email-attachment"></td>
                                            <td class="email-date">
                                                <a href="email_detail.html">Aug 07</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="email-checkbox">
                                                <input type="checkbox" name="email_checkbox" />
                                                <a href="javascript:;" data-toggle="email-checkbox"><i class="fa fa-square-o fa-fw"></i></a>
                                            </td>
                                            <td class="email-sender">
                                                <a href="email_detail.html">Trello</a>
                                            </td>
                                            <td class="email-message">
                                                <a href="email_detail.html">
                                                    <span class="email-title">
                                                        Kenfai commented on the card FrontEnd Design on Gratis - 
                                                        <span class="email-desc">
                                                            Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
                                                        </span>
                                                    </span>
                                                </a>
                                            </td>
                                            <td class="email-attachment"></td>
                                            <td class="email-date">
                                                <a href="email_detail.html">Aug 07</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="email-checkbox">
                                                <input type="checkbox" name="email_checkbox" />
                                                <a href="javascript:;" data-toggle="email-checkbox"><i class="fa fa-square-o fa-fw"></i></a>
                                            </td>
                                            <td class="email-sender">
                                                <a href="email_detail.html">Trello</a>
                                            </td>
                                            <td class="email-message">
                                                <a href="email_detail.html">
                                                    <span class="email-title">
                                                        JianJye commented on the card FrontEnd Design on Gratis - 
                                                        <span class="email-desc">
                                                            Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
                                                        </span>
                                                    </span>
                                                </a>
                                            </td>
                                            <td class="email-attachment"></td>
                                            <td class="email-date">
                                                <a href="email_detail.html">Aug 07</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- end table-email -->
                            </div>
                            <!-- end scrollbar -->
                        </div>
                        <!-- end mail-box-container -->
                    </div>
                    <!-- end mail-box-content -->
                </div>
                <!-- end mail-box -->
            </div>
            <!-- end #content -->

        </div>
        <!-- end col-12 -->
    </div>
    <!-- end row -->
</div>
<!-- end section-container -->
@endsection