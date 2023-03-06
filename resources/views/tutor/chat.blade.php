@extends ('layouts.user')
@section('content')

<link href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/dist/css/style.min.css" rel="stylesheet">
<div class="page-wrapper">

        <div class="chat-application border-top">
          <!-- ============================================================= -->
          <!-- Left Part  -->
          <!-- ============================================================= -->
          <div class="left-part bg-white fixed-left-part user-chat-box border-top">
            <!-- Mobile toggle button -->
            <a class="
                ri-menu-2-line ri-close-fill
                btn btn-success
                show-left-part
                d-block d-md-none
              " href="javascript:void(0)"></a>
            <!-- Mobile toggle button -->
            <div class="p-3 d-block d-md-none">
              <h4>Chat Sidebar</h4>
            </div>
            <div class="scrollable position-relative ps-container ps-theme-default" style="height: 100%" data-ps-id="c3dd762f-bcf5-806f-ceea-11979ca46408">
              <div class="p-3 pt-0 border-bottom">
                <h5 class="card-title">Search Contact</h5>
                <form>
                  <div class="searchbar">
                    <input class="form-control" type="text" placeholder="Search Contact">
                  </div>
                </form>
              </div>
              <ul class="mailbox list-style-none app-chat">
                <li>
                  <div class="message-center chat-scroll chat-users ps-container ps-theme-default" data-ps-id="e0e98e4f-ef5a-c8e7-2862-7ce1cdf0b81c">
                    <a href="javascript:void(0)" class="
                        chat-user
                        message-item
                        align-items-center
                        border-bottom
                        px-3
                        ps-2
                      " id="chat_user_1" data-user-id="1">
                      <span class="user-img position-relative d-inline-block">
                        <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle w-100">
                        <span class="
                            profile-status
                            online
                            rounded-circle
                            pull-right
                          "></span>
                      </span>
                      <div class="mail-contnet w-75 d-inline-block v-middle ps-3">
                        <h5 class="message-title mb-0 mt-1 fs-3 fw-bold" data-username="Pavan kumar">
                          Pavan kumar
                        </h5>
                        <span class="
                            fs-9
                            text-nowrap
                            d-block
                            time
                            text-truncate
                            fw-normal
                            text-muted
                          ">Just see the my admin!</span>
                        <span class="fs-2 text-nowrap d-block subtext text-muted">9:30 AM</span>
                      </div>
                    </a>
                    <!-- Message -->
                    <a href="javascript:void(0)" class="
                        chat-user
                        message-item
                        align-items-center
                        border-bottom
                        px-3
                        ps-2
                      " id="chat_user_2" data-user-id="2">
                      <span class="user-img position-relative d-inline-block">
                        <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle w-100">
                        <span class="profile-status busy rounded-circle pull-right"></span>
                      </span>
                      <div class="mail-contnet w-75 d-inline-block v-middle ps-3">
                        <h5 class="message-title mb-0 mt-1 fs-3 fw-bold" data-username="Sonu Nigam">
                          Sonu Nigam
                        </h5>
                        <span class="
                            fs-9
                            text-nowrap
                            d-block
                            time
                            text-truncate
                            fw-normal
                            text-muted
                          ">I've sung a song! See you at</span>
                        <span class="fs-2 text-nowrap d-block subtext text-muted">9:10 AM</span>
                      </div>
                    </a>
                    <!-- Message -->
                    <a href="javascript:void(0)" class="
                        chat-user
                        message-item
                        align-items-center
                        border-bottom
                        px-3
                        ps-2
                      " id="chat_user_3" data-user-id="3">
                      <span class="user-img position-relative d-inline-block">
                        <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle w-100">
                        <span class="profile-status away rounded-circle pull-right"></span>
                      </span>
                      <div class="mail-contnet w-75 d-inline-block v-middle ps-3">
                        <h5 class="message-title mb-0 mt-1 fs-3 fw-bold" data-username="Arijit Sinh">
                          Arijit Sinh
                        </h5>
                        <span class="
                            fs-9
                            text-nowrap
                            d-block
                            time
                            text-truncate
                            fw-normal
                            text-muted
                          ">I am a singer!</span>
                        <span class="fs-2 text-nowrap d-block subtext text-muted">9:08 AM</span>
                      </div>
                    </a>
                    <!-- Message -->
                    <a href="javascript:void(0)" class="
                        chat-user
                        message-item
                        align-items-center
                        border-bottom
                        px-3
                        ps-2
                      " id="chat_user_4" data-user-id="4">
                      <span class="user-img position-relative d-inline-block">
                        <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle w-100">
                        <span class="
                            profile-status
                            offline
                            rounded-circle
                            pull-right
                          "></span>
                      </span>
                      <div class="mail-contnet w-75 d-inline-block v-middle ps-3">
                        <h5 class="message-title mb-0 mt-1 fs-3 fw-bold" data-username="Nirav Joshi">
                          Nirav Joshi
                        </h5>
                        <span class="
                            fs-9
                            text-nowrap
                            d-block
                            time
                            text-truncate
                            fw-normal
                            text-muted
                          ">Just see the my admin!</span>
                        <span class="fs-2 text-nowrap d-block subtext text-muted">9:02 AM</span>
                      </div>
                    </a>
                    <!-- Message -->
                    <!-- Message -->
                    <a href="javascript:void(0)" class="
                        chat-user
                        message-item
                        align-items-center
                        border-bottom
                        px-3
                        ps-2
                      " id="chat_user_5" data-user-id="5">
                      <span class="user-img position-relative d-inline-block">
                        <img src="../../assets/images/users/5.jpg" alt="user" class="rounded-circle w-100">
                        <span class="
                            profile-status
                            offline
                            rounded-circle
                            pull-right
                          "></span>
                      </span>
                      <div class="mail-contnet w-75 d-inline-block v-middle ps-3">
                        <h5 class="message-title mb-0 mt-1 fs-3 fw-bold" data-username="Sunil Joshi">
                          Sunil Joshi
                        </h5>
                        <span class="
                            fs-9
                            text-nowrap
                            d-block
                            time
                            text-truncate
                            fw-normal
                            text-muted
                          ">Just see the my admin!</span>
                        <span class="fs-2 text-nowrap d-block subtext text-muted">9:02 AM</span>
                      </div>
                    </a>
                    <!-- Message -->
                    <!-- Message -->
                    <a href="javascript:void(0)" class="
                        chat-user
                        message-item
                        align-items-center
                        border-bottom
                        px-3
                        ps-2
                      " id="chat_user_6" data-user-id="6">
                      <span class="user-img position-relative d-inline-block">
                        <img src="../../assets/images/users/6.jpg" alt="user" class="rounded-circle w-100">
                        <span class="
                            profile-status
                            offline
                            rounded-circle
                            pull-right
                          "></span>
                      </span>
                      <div class="mail-contnet w-75 d-inline-block v-middle ps-3">
                        <h5 class="message-title mb-0 mt-1 fs-3 fw-bold" data-username="Akshay Kumar">
                          Akshay Kumar
                        </h5>
                        <span class="
                            fs-9
                            text-nowrap
                            d-block
                            time
                            text-truncate
                            fw-normal
                            text-muted
                          ">Just see the my admin!</span>
                        <span class="fs-2 text-nowrap d-block subtext text-muted">9:02 AM</span>
                      </div>
                    </a>
                    <!-- Message -->
                    <!-- Message -->
                    <a href="javascript:void(0)" class="
                        chat-user
                        message-item
                        align-items-center
                        border-bottom
                        px-3
                        ps-2
                      " id="chat_user_7" data-user-id="7">
                      <span class="user-img position-relative d-inline-block">
                        <img src="../../assets/images/users/7.jpg" alt="user" class="rounded-circle w-100">
                        <span class="
                            profile-status
                            offline
                            rounded-circle
                            pull-right
                          "></span>
                      </span>
                      <div class="mail-contnet w-75 d-inline-block v-middle ps-3">
                        <h5 class="message-title mb-0 mt-1 fs-3 fw-bold" data-username="Pavan kumar">
                          Pavan kumar
                        </h5>
                        <span class="
                            fs-9
                            text-nowrap
                            d-block
                            time
                            text-truncate
                            fw-normal
                            text-muted
                          ">Just see the my admin!</span>
                        <span class="fs-2 text-nowrap d-block subtext text-muted">9:02 AM</span>
                      </div>
                    </a>
                    <!-- Message -->
                    <!-- Message -->
                    <a href="javascript:void(0)" class="
                        chat-user
                        message-item
                        align-items-center
                        border-bottom
                        px-3
                        ps-2
                      " id="chat_user_8" data-user-id="8">
                      <span class="user-img position-relative d-inline-block">
                        <img src="../../assets/images/users/8.jpg" alt="user" class="rounded-circle w-100">
                        <span class="
                            profile-status
                            offline
                            rounded-circle
                            pull-right
                          "></span>
                      </span>
                      <div class="mail-contnet w-75 d-inline-block v-middle ps-3">
                        <h5 class="message-title mb-0 mt-1 fs-3 fw-bold" data-username="Varun Dhavan">
                          Varun Dhavan
                        </h5>
                        <span class="
                            fs-9
                            text-nowrap
                            d-block
                            time
                            text-truncate
                            fw-normal
                            text-muted
                          ">Just see the my admin!</span>
                        <span class="fs-2 text-nowrap d-block subtext text-muted">9:02 AM</span>
                      </div>
                    </a>
                    <!-- Message -->
                  <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                </li>
              </ul>
            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
          </div>
          <!-- ============================================================= -->
          <!-- End Left Part  -->
          <!-- ============================================================= -->
          <!-- ============================================================= -->
          <!-- Right Part  Mail Compose -->
          <!-- ============================================================= -->
          <div class="right-part chat-container position-relative">
            <div class="chat-box-inner-part">
              <div class="chat-not-selected">
                <div class="text-center">
                  <span class="display-5 text-primary">
                    <i class="ri-message-3-line"></i>
                  </span>
                  <h5 class="font-weight-medium">Open chat from the list</h5>
                </div>
              </div>
              <div class="card chatting-box mb-0 rounded-0 border-0">
                <div class="card-body px-0">
                  <div class="chat-meta-user pb-3 px-4 border-bottom">
                    <div class="current-chat-user-name">
                      <span>
                        <img src="../../assets/images/users/1.jpg" alt="dynamic-image" class="rounded-circle" width="45">
                        <span class="text-dark name fw-bold ms-2"></span>
                      </span>
                    </div>
                  </div>
                  <!-- <h4 class="card-title">Chat Messages</h4> -->
                  <div class="chat-box scrollable px-4 ps-container ps-theme-default" style="height: calc(100vh - 315px)" data-ps-id="63d63a95-d05c-7ebb-fe58-bdc74659ac25">
                    <!--User 1 -->
                    <ul class="chat-list chat" data-user-id="1">
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle">
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3 font-weight-medium">
                            James Anderson
                          </h5>
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-info
                            ">
                            Lorem Ipsum is simply dummy text of the printing &amp;
                            type setting industry.
                          </div>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:56 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle">
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3 font-weight-medium">
                            Bianca Doe
                          </h5>
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-success
                            ">
                            It’s Great opportunity to work.
                          </div>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:57 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="odd mt-4">
                        <div class="chat-content ps-3 d-inline-block text-end">
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-inverse
                            ">
                            I would love to join the team.
                          </div>
                          <br>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:58 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="odd mt-4">
                        <div class="chat-content ps-3 d-inline-block text-end">
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-inverse
                            ">
                            Whats budget of the new project.
                          </div>
                          <br>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:59 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle">
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3 font-weight-medium">
                            Angelina Rhodes
                          </h5>
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-primary
                            ">
                            Well we have good budget for the project
                          </div>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          11:00 am
                        </div>
                      </li>
                      <!--chat Row -->
                    </ul>
                    <!--User 2 -->
                    <ul class="chat-list chat" data-user-id="2">
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle">
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3 font-weight-medium">
                            James Anderson
                          </h5>
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-info
                            ">
                            Lorem Ipsum is simply dummy text of the printing &amp;
                            type setting industry.
                          </div>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:56 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle">
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3 font-weight-medium">
                            Bianca Doe
                          </h5>
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-success
                            ">
                            It’s Great opportunity to work.
                          </div>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:57 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="odd mt-4">
                        <div class="chat-content ps-3 d-inline-block text-end">
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-inverse
                            ">
                            I would love to join the team.
                          </div>
                          <br>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:58 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="odd mt-4">
                        <div class="chat-content ps-3 d-inline-block text-end">
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-inverse
                            ">
                            Whats budget of the new project.
                          </div>
                          <br>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:59 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle">
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3 font-weight-medium">
                            Angelina Rhodes
                          </h5>
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-primary
                            ">
                            Well we have good budget for the project
                          </div>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          11:00 am
                        </div>
                      </li>
                      <!--chat Row -->
                    </ul>
                    <!--User 3 -->
                    <ul class="chat-list chat" data-user-id="3">
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle">
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3 font-weight-medium">
                            James Anderson
                          </h5>
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-info
                            ">
                            Lorem Ipsum is simply dummy text of the printing &amp;
                            type setting industry.
                          </div>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:56 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle">
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3 font-weight-medium">
                            Bianca Doe
                          </h5>
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-success
                            ">
                            It’s Great opportunity to work.
                          </div>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:57 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="odd mt-4">
                        <div class="chat-content ps-3 d-inline-block text-end">
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-inverse
                            ">
                            I would love to join the team.
                          </div>
                          <br>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:58 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="odd mt-4">
                        <div class="chat-content ps-3 d-inline-block text-end">
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-inverse
                            ">
                            Whats budget of the new project.
                          </div>
                          <br>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:59 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle">
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3 font-weight-medium">
                            Angelina Rhodes
                          </h5>
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-primary
                            ">
                            Well we have good budget for the project
                          </div>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          11:00 am
                        </div>
                      </li>
                      <!--chat Row -->
                    </ul>
                    <!--User 4 -->
                    <ul class="chat-list chat" data-user-id="4">
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle">
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3 font-weight-medium">
                            James Anderson
                          </h5>
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-info
                            ">
                            Lorem Ipsum is simply dummy text of the printing &amp;
                            type setting industry.
                          </div>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:56 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle">
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3 font-weight-medium">
                            Bianca Doe
                          </h5>
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-success
                            ">
                            It’s Great opportunity to work.
                          </div>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:57 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="odd mt-4">
                        <div class="chat-content ps-3 d-inline-block text-end">
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-inverse
                            ">
                            I would love to join the team.
                          </div>
                          <br>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:58 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="odd mt-4">
                        <div class="chat-content ps-3 d-inline-block text-end">
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-inverse
                            ">
                            Whats budget of the new project.
                          </div>
                          <br>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:59 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle">
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3 font-weight-medium">
                            Angelina Rhodes
                          </h5>
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-primary
                            ">
                            Well we have good budget for the project
                          </div>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          11:00 am
                        </div>
                      </li>
                      <!--chat Row -->
                    </ul>
                    <!--User 5 -->
                    <ul class="chat-list chat" data-user-id="5">
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle">
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3 font-weight-medium">
                            James Anderson
                          </h5>
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-info
                            ">
                            Lorem Ipsum is simply dummy text of the printing &amp;
                            type setting industry.
                          </div>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:56 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle">
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3 font-weight-medium">
                            Bianca Doe
                          </h5>
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-success
                            ">
                            It’s Great opportunity to work.
                          </div>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:57 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="odd mt-4">
                        <div class="chat-content ps-3 d-inline-block text-end">
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-inverse
                            ">
                            I would love to join the team.
                          </div>
                          <br>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:58 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="odd mt-4">
                        <div class="chat-content ps-3 d-inline-block text-end">
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-inverse
                            ">
                            Whats budget of the new project.
                          </div>
                          <br>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:59 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle">
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3 font-weight-medium">
                            Angelina Rhodes
                          </h5>
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-primary
                            ">
                            Well we have good budget for the project
                          </div>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          11:00 am
                        </div>
                      </li>
                      <!--chat Row -->
                    </ul>
                    <!--User 6 -->
                    <ul class="chat-list chat" data-user-id="6">
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle">
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3 font-weight-medium">
                            James Anderson
                          </h5>
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-info
                            ">
                            Lorem Ipsum is simply dummy text of the printing &amp;
                            type setting industry.
                          </div>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:56 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle">
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3 font-weight-medium">
                            Bianca Doe
                          </h5>
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-success
                            ">
                            It’s Great opportunity to work.
                          </div>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:57 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="odd mt-4">
                        <div class="chat-content ps-3 d-inline-block text-end">
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-inverse
                            ">
                            I would love to join the team.
                          </div>
                          <br>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:58 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="odd mt-4">
                        <div class="chat-content ps-3 d-inline-block text-end">
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-inverse
                            ">
                            Whats budget of the new project.
                          </div>
                          <br>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:59 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle">
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3 font-weight-medium">
                            Angelina Rhodes
                          </h5>
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-primary
                            ">
                            Well we have good budget for the project
                          </div>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          11:00 am
                        </div>
                      </li>
                      <!--chat Row -->
                    </ul>
                    <!--User 7 -->
                    <ul class="chat-list chat" data-user-id="7">
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle">
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3 font-weight-medium">
                            James Anderson
                          </h5>
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-info
                            ">
                            Lorem Ipsum is simply dummy text of the printing &amp;
                            type setting industry.
                          </div>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:56 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle">
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3 font-weight-medium">
                            Bianca Doe
                          </h5>
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-success
                            ">
                            It’s Great opportunity to work.
                          </div>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:57 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="odd mt-4">
                        <div class="chat-content ps-3 d-inline-block text-end">
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-inverse
                            ">
                            I would love to join the team.
                          </div>
                          <br>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:58 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="odd mt-4">
                        <div class="chat-content ps-3 d-inline-block text-end">
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-inverse
                            ">
                            Whats budget of the new project.
                          </div>
                          <br>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:59 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle">
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3 font-weight-medium">
                            Angelina Rhodes
                          </h5>
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-primary
                            ">
                            Well we have good budget for the project
                          </div>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          11:00 am
                        </div>
                      </li>
                      <!--chat Row -->
                    </ul>
                    <!--User 8 -->
                    <ul class="chat-list chat" data-user-id="8">
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle">
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3 font-weight-medium">
                            James Anderson
                          </h5>
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-info
                            ">
                            Lorem Ipsum is simply dummy text of the printing &amp;
                            type setting industry.
                          </div>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:56 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle">
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3 font-weight-medium">
                            Bianca Doe
                          </h5>
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-success
                            ">
                            It’s Great opportunity to work.
                          </div>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:57 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="odd mt-4">
                        <div class="chat-content ps-3 d-inline-block text-end">
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-inverse
                            ">
                            I would love to join the team.
                          </div>
                          <br>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:58 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="odd mt-4">
                        <div class="chat-content ps-3 d-inline-block text-end">
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-inverse
                            ">
                            Whats budget of the new project.
                          </div>
                          <br>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          10:59 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle">
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3 font-weight-medium">
                            Angelina Rhodes
                          </h5>
                          <div class="
                              box
                              mb-2
                              d-inline-block
                              text-dark
                              message
                              fs-3
                              bg-light-primary
                            ">
                            Well we have good budget for the project
                          </div>
                        </div>
                        <div class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          ">
                          11:00 am
                        </div>
                      </li>
                      <!--chat Row -->
                    </ul>
                  <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                </div>
                <div class="
                    card-body
                    border-top border-bottom
                    chat-send-message-footer
                  ">
                  <div class="row">
                    <div class="col-12">
                      <div class="input-field mt-0 mb-0">
                        <input id="textarea1" placeholder="Type and hit enter" class="message-type-box form-control border-0" type="text">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>

           </div>
           <aside class="customizer">
      <a href="javascript:void(0)" class="service-panel-toggle"><i class="fa fa-spin ri-settings-3-line fs-7"></i></a>
      <div class="customizer-body ps-container ps-theme-default" data-ps-id="5240e5f5-c839-a772-f79b-ab3148bc2c33">
        <ul class="nav customizer-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="ri-tools-fill fs-6"></i></a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#chat" role="tab" aria-controls="chat" aria-selected="false" tabindex="-1"><i class="ri-message-3-line fs-6"></i></a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false" tabindex="-1"><i class="ri-timer-line fs-6"></i></a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <!-- Tab 1 -->
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="p-3 border-bottom">
              <!-- Sidebar -->
              <h5 class="font-weight-medium mb-2 mt-2">Layout Settings</h5>
              <div class="form-check mt-3">
                <input type="checkbox" name="theme-view" class="form-check-input" id="theme-view">
                <label class="form-check-label" for="theme-view">
                  <span>Dark Theme</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input type="checkbox" class="sidebartoggler form-check-input" name="collapssidebar" id="collapssidebar">
                <label class="form-check-label" for="collapssidebar">
                  <span>Collapse Sidebar</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input type="checkbox" name="sidebar-position" class="form-check-input" id="sidebar-position">
                <label class="form-check-label" for="sidebar-position">
                  <span>Fixed Sidebar</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input type="checkbox" name="header-position" class="form-check-input" id="header-position">
                <label class="form-check-label" for="header-position">
                  <span>Fixed Header</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input type="checkbox" name="boxed-layout" class="form-check-input" id="boxed-layout">
                <label class="form-check-label" for="boxed-layout">
                  <span>Boxed Layout</span>
                </label>
              </div>
            </div>
            <div class="p-3 border-bottom">
              <!-- Logo BG -->
              <h5 class="font-weight-medium mb-2 mt-2">Logo Backgrounds</h5>
              <ul class="theme-color m-0 p-0">
                <li class="theme-item list-inline-item me-1">
                  <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin1"></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin2"></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin3"></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin4"></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin5"></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin6"></a>
                </li>
              </ul>
              <!-- Logo BG -->
            </div>
            <div class="p-3 border-bottom">
              <!-- Navbar BG -->
              <h5 class="font-weight-medium mb-2 mt-2">Navbar Backgrounds</h5>
              <ul class="theme-color m-0 p-0">
                <li class="theme-item list-inline-item me-1">
                  <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin1"></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin2"></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin3"></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin4"></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin5"></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin6"></a>
                </li>
              </ul>
              <!-- Navbar BG -->
            </div>
            <div class="p-3 border-bottom">
              <!-- Logo BG -->
              <h5 class="font-weight-medium mb-2 mt-2">Sidebar Backgrounds</h5>
              <ul class="theme-color m-0 p-0">
                <li class="theme-item list-inline-item me-1">
                  <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin1"></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin2"></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin3"></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin4"></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin5"></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin6"></a>
                </li>
              </ul>
              <!-- Logo BG -->
            </div>
          </div>
          <!-- End Tab 1 -->
          <!-- Tab 2 -->
          <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
            <ul class="mailbox list-style-none mt-3">
              <li>
                <div class="message-center chat-scroll position-relative ps-container ps-theme-default" data-ps-id="d660c4d1-2061-343a-47ef-1d05bd5ac7d4">
                  <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_1" data-user-id="1">
                    <span class="user-img position-relative d-inline-block">
                      <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle w-100">
                      <span class="profile-status rounded-circle online"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                      <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                      <span class="fs-2 text-nowrap d-block text-muted">9:30 AM</span>
                    </div>
                  </a>
                  <!-- Message -->
                  <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_2" data-user-id="2">
                    <span class="user-img position-relative d-inline-block">
                      <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle w-100">
                      <span class="profile-status rounded-circle busy"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5>
                      <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">I've sung a song! See you at</span>
                      <span class="fs-2 text-nowrap d-block text-muted">9:10 AM</span>
                    </div>
                  </a>
                  <!-- Message -->
                  <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_3" data-user-id="3">
                    <span class="user-img position-relative d-inline-block">
                      <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle w-100">
                      <span class="profile-status rounded-circle away"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5>
                      <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">I am a singer!</span>
                      <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                    </div>
                  </a>
                  <!-- Message -->
                  <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_4" data-user-id="4">
                    <span class="user-img position-relative d-inline-block">
                      <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle w-100">
                      <span class="profile-status rounded-circle offline"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Nirav Joshi</h5>
                      <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                      <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_5" data-user-id="5">
                    <span class="user-img position-relative d-inline-block">
                      <img src="../../assets/images/users/5.jpg" alt="user" class="rounded-circle w-100">
                      <span class="profile-status rounded-circle offline"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Sunil Joshi</h5>
                      <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                      <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_6" data-user-id="6">
                    <span class="user-img position-relative d-inline-block">
                      <img src="../../assets/images/users/6.jpg" alt="user" class="rounded-circle w-100">
                      <span class="profile-status rounded-circle offline"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Akshay Kumar</h5>
                      <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                      <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_7" data-user-id="7">
                    <span class="user-img position-relative d-inline-block">
                      <img src="../../assets/images/users/7.jpg" alt="user" class="rounded-circle w-100">
                      <span class="profile-status rounded-circle offline"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                      <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                      <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_8" data-user-id="8">
                    <span class="user-img position-relative d-inline-block">
                      <img src="../../assets/images/users/8.jpg" alt="user" class="rounded-circle w-100">
                      <span class="profile-status rounded-circle offline"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Varun Dhavan</h5>
                      <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                      <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                    </div>
                  </a>
                  <!-- Message -->
                <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </li>
            </ul>
          </div>
          <!-- End Tab 2 -->
          <!-- Tab 3 -->
          <div class="tab-pane fade p-3" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <h6 class="mt-3 mb-3">Activity Timeline</h6>
            <div class="steamline">
              <div class="sl-item">
                <div class="sl-left bg-light-success text-success">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user feather-sm fill-white"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Meeting today <span class="sl-date"> 5pm</span>
                  </div>
                  <div class="desc">you can write anything</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left bg-light-info text-info">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera feather-sm fill-white"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">Send documents to Clark</div>
                  <div class="desc">Lorem Ipsum is simply</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img class="rounded-circle" alt="user" src="../../assets/images/users/2.jpg">
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Go to the Doctor <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Contrary to popular belief</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img class="rounded-circle" alt="user" src="../../assets/images/users/1.jpg">
                </div>
                <div class="sl-right">
                  <div>
                    <a href="javascript:void(0)">Stephen</a>
                    <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Approve meeting with tiger</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left bg-light-primary text-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user feather-sm fill-white"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Meeting today <span class="sl-date"> 5pm</span>
                  </div>
                  <div class="desc">you can write anything</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left bg-light-info text-info">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send feather-sm fill-white"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">Send documents to Clark</div>
                  <div class="desc">Lorem Ipsum is simply</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img class="rounded-circle" alt="user" src="../../assets/images/users/4.jpg">
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Go to the Doctor <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Contrary to popular belief</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img class="rounded-circle" alt="user" src="../../assets/images/users/6.jpg">
                </div>
                <div class="sl-right">
                  <div>
                    <a href="javascript:void(0)">Stephen</a>
                    <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Approve meeting with tiger</div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Tab 3 -->
        </div>
      <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
    </aside>
<script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/dist/js/pages/chat/chat.js"></script>
            @stop